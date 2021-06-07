<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\SalesDetail;
use App\cart;
use App\e_topup_details;
use Session;
use Auth;
use DB; 
use Hash;

class PostLoginController extends Controller
{

    //single page get cart 
    public function cartGet()
    {   
        $user_id = auth()->guard('api')->user()->id;
        $getCart = cart::where('user_id',$user_id)->get();
        $count = count($getCart);
        if($count>0) {
            return response()->json([
                'msg' => 'Data Successfully Get',
                'error' => 'true',
                'data' =>  $getCart
            ]);
          }else {
            return response()->json([
                'msg' => 'Data Not Found',
                'error' => 'flase',
                'data'=>[]
            ]);
          }    
    }




    //get order details
    public function getOrderList(Request $request){   
       
		$user_id = auth()->guard('api')->user()->id;
        $cartOrder = DB::table('carts')
        ->join('products', 'products.id', '=', 'carts.product_id')
        ->select('products.*', 'carts.product_id','carts.qty')
        ->where('products.status','1')
        ->where('carts.user_id',$user_id)
        ->get();
		$count = count($cartOrder);
		if($count>0) {
		 return response()->json(['msg' => 'Data Successfully Get',
			 'error' => false,
			 'data' =>  $cartOrder
		 ]);
		}else {
		 return response()->json([
			 'msg' => 'Data Not Found',
			 'error' => true,
			 'data'=>[]
		 
		 ]);
		}
        
	}

    //add to cart 
    public function addtocart(Request $request)
    {   
        $qty = $request->json()->get("qty");
        $product_id = $request->json()->get("product_id");
        $user_id = auth()->guard('api')->user()->id;
        $getCartPro = cart::where(['product_id'=>$product_id,'user_id'=>$user_id])->first();
        if(isset($getCartPro->id)){
            cart::where('id',$getCartPro->id)->update(['qty'=>$qty]);
            return response(['error' => false,'msg'=>'Add to cart products Updated Successfully Done']);
        }else{
            DB::insert('insert into carts(qty, user_id, product_id) values(?, ?, ?)',[$qty, $user_id, $product_id]);
            return response(['error' => false,'msg'=>'Add to cart products Successfully Done']);
        } 
    }

    public function user(Request $request)
    {
        $token = $request->user()->token();
    }

    public function logout(Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        return redirect('/');
    }

    public function profile(Request $request) {

       $user_id = auth()->guard('api')->user()->id;
        $user = DB::table('users')->where('id',$user_id)->first();
        if($user) {
            return response()->json([
                'msg' => 'Data Successfully Get',
                'error' => 'true',
                'data' =>  $user
            ]);
          }else {
            return response()->json([
                'msg' => 'Data Not Found',
                'error' => 'flase',
                'data'=>[]
            
            ]);
          }
    }
    public function profileUpdate(Request $request) 
    {
        $name =$request->json()->get('name');
        $mobile =$request->json()->get('mobile');
        $email =$request->json()->get('email');
        $gender =$request->json()->get('gender');
        $user_id = auth()->guard('api')->user()->id;
        User::where('id',$user_id)->update(['name'=>$name,'mobile'=>$mobile,'email'=>$email,'gender'=>$gender]);
        return response(['error' => false,'msg'=>'Profile Update Successfully Done']);
     }

     public function passwordChange(Request $request) 
    {
        $oldPass =$request->json()->get('oldPass');
        $newPass =Hash::make($request->json()->get("newPass"));
        $user_id = auth()->guard('api')->user()->id;
        $pass = User::where(['id'=>$user_id])->first();
        if(Hash::check($oldPass, $pass->password)){
            User::where('id',$user_id)->update(['password'=>$newPass]);
            return response(['error' => false,'msg'=>'Password Change Successfully Done']);
        }else{
            return response(['error' => true,'msg'=>'Old Password Not Match']);
        }
     }

     //cart item delete 
     
     public function cartItemDelete(Request $request){  
     
		$user_id = auth()->guard('api')->user()->id;
        $id=$request['id'];
        $deleteOrder = DB::delete('DELETE FROM carts WHERE product_id='.$id.' and user_id ='.$user_id);
		if(isset($deleteOrder)) {
		 return response()->json(['msg' => 'Data Delete Done',
			 'error' => false,
			 'data' =>  $deleteOrder
		 ]);
		}else {
		 return response()->json([
			 'msg' => 'Data Not Found',
			 'error' => true,
			 'data'=>[]
		 
		 ]);
		}
        
     }
    
    //Sales item insert data
    public function Sales(Request $request) 
    {
        $name =$request->json()->get('name');
        $email =$request->json()->get('email');
        $mobile =$request->json()->get('mobile');
        $city =$request->json()->get('city');
        $zipcode =$request->json()->get('zipcode');
        $state =$request->json()->get('state');
        $payment_method =$request->json()->get('payment_method');
        $landmark =$request->json()->get('landmark');
        $address =$request->json()->get('address');
        $order_id = uniqid();
        $user_id = auth()->guard('api')->user()->id;
        $datas = DB::table('carts')
        ->join('products', 'products.id', '=', 'carts.product_id')
        ->select('products.*', 'carts.product_id','carts.qty')
        ->where('carts.user_id',$user_id)
        ->get();

        $total = 0;
        foreach ($datas as $amount) {
            
            $subtotal = $amount->qty*$amount->price;
            $total += $subtotal;
            $salesDetails = DB::insert('insert into sales_details(user_id,order_id,product_name,product_image,qty,sub_total,discount,net_amount) 
            values(?,?,?,?,?,?,?,?)',[$user_id,$order_id,$amount->title,$amount->image,$amount->qty,$subtotal,$subtotal,$subtotal]);
            $deleteOrder = DB::delete('DELETE FROM carts WHERE product_id='.$amount->id.' and user_id ='.$user_id);

        }
        $sales = DB::insert('insert into sales(user_id,order_id,name,email,mobile,city,state,Pincode,landmark,address,payment_type,sub_total,net_amount) values(?,?,?,?,?,?,?,?,?,?,?,?,?)',[$user_id,$order_id,$name,$email,$mobile,$city,$state,$zipcode,$landmark,$address,$payment_method,$total,$total]);
        if(isset($sales)) {
            return response()->json(['msg' => 'Order Done',
                'error' => false,
            ]);
           }else {
            return response()->json([
                'msg' => 'Server Error',
                'error' => true,
            ]);
           }
    }

    //get sales for user profile order 
    public function salesOrder()
    {   
        $user_id = auth()->guard('api')->user()->id;
        $getOrder = SalesDetail::where('user_id',$user_id)->get();
        $count = count($getOrder);
        if($count>0) {
            return response()->json([
                'msg' => 'Data Successfully Get',
                'error' => 'true',
                'data' =>  $getOrder
            ]);
          }else {
            return response()->json([
                'msg' => 'Data Not Found',
                'error' => 'flase',
                'data'=>[]
            ]);
          }    
    }

    //add to eTopupInsertdetails
    public function eTopupInsert(Request $request)
    {   
        $qty = $request->json()->get("qty");
        $amount = $request->json()->get("amount");
        $order_id = 'desidukan'.strtotime(date("Y-m-d h:i:s")).uniqid();
        $user_id = auth()->guard('api')->user()->id;
        $sub_total = $amount*$qty;
        $e_topup = e_topup_details::where(['amount'=>$amount,'user_id'=>$user_id])->first();
        if(isset($e_topup->id)){
            e_topup_details::where('id',$e_topup->id)->update(['sub_total'=>$sub_total,'qty'=>$qty]);
            $this->eTopupdata($request);
            return response(['error' => false,'msg'=>'E-Topup Updated Successfully Done']);
            
        }else{
            DB::insert('insert into e_topup_details(user_id, order_id, qty, amount, sub_total) values(?, ?, ?, ?, ?)',[$user_id, $order_id, $qty, $amount, $sub_total]);
            $this->eTopupdata($request);
            return response(['error' => false,'msg'=>'E-Topup add Successfully Done']);
        }
    }
    public function eTopupdata(Request $request)
    {  
        $e_topupdata = e_topup_details::where(['user_id'=>$user_id])->get();
        print_r($e_topupdata);die;
        $total = 0;
        foreach ($e_topupdata as $data) {
            $subtotal = $data->sub_total;
            $total += $subtotal;
        }
        if(isset($e_topupdata)){
            e_topup::where('order_id',$data->order_id)->update(['amount'=>$total]);
            return response(['error' => false,'msg'=>'E-Topup Updated Successfully Done']);
        }else{
            DB::insert('insert into e_topups(user_id, order_id, amount) values(?, ?, ?)',[$user_id, $data->order_id, $total]);
            return response(['error' => false,'msg'=>'E-Topup add Successfully Done']);
        }
    }
    
    //get order details
    public function getOrderEtopup(Request $request){   
       
		$user_id = auth()->guard('api')->user()->id;
        $e_topup_details = DB::table('e_topup_details')
        ->where('user_id',$user_id)
        ->get();
		$count = count($e_topup_details);
		if($count>0) {
		 return response()->json(['msg' => 'Data Successfully Get',
			 'error' => false,
			 'data' =>  $e_topup_details
		 ]);
		}else {
		 return response()->json([
			 'msg' => 'Data Not Found',
			 'error' => true,
			 'data'=>[]
		 
		 ]);
		}
        
	}
    
    
}
