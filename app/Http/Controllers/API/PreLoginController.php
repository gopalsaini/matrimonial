<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use App\User;
use Auth;
use DB; 
use Hash;
use Illuminate\Support\Str;

class PreLoginController extends Controller
{
  	//registration details
    
	public function registration(Request $request)
    {	 
		 $validatedData['behalf'] = $request->json()->get("behalf");
		 $validatedData['name'] = $request->json()->get("fname")." ".$request->json()->get("lname");
		 $validatedData['gender'] = $request->json()->get("gender");
		 $validatedData['dob'] = $request->json()->get("dob");
		 $validatedData['email'] = $request->json()->get("email");
		 $validatedData['mobile'] = $request->json()->get("mobile");
		  $validatedData['code'] = Str::random(9);
         $validatedData['password'] = Hash::make($request->json()->get("password"));
         $user = User::create($validatedData);
         $mobile = $request->json()->get("mobile");
        if($user){
            $this->sendOtp($request);
            return response(['error'=>false, 'msg'=>'Registration success and Otp send Your Number']);
        }else{
			return response(['error'=>true, 'msg'=>'Something went wrong.please try again']);

		}
    }
	public function sendOtp(Request $request)
    {
        $mobile=$request->json()->get("mobile");    
        $otp = mt_rand(100000,999999);
        $getdata=User::where('mobile',$mobile)->first();
        if(!$getdata){
            return response(['error' => true,'msg'=>'Mobile no. does not exist.']);
        }else{
            $getotp=User::where('mobile',$mobile)->update(['otp'=>$otp]);
            return response()->json(['error' => false,'msg'=>'OTP sent successfully on your registered mobile no.']);
        }
        //echo "otp send done";
    }
	
    //SUBMIT OTP
    public function submitOtp(Request $request)
    {
        $otp = $request->json()->get("otp");
        $data = User::where('otp',$otp)->first();
        if(!empty($data)){
			$id = $data->id;
			$user = User::where('id',$id)->update(['otp_verify_status'=>'1']);
			$accessToken = $data->createToken('authToken')->accessToken;
			return response(['error' => false,'msg'=>'OTP Verification Success','user_verify'=>true,'token'=>$accessToken]);
        }else {
			return response(['error' => true,'msg'=>'Invalid OTP']);
        }

    }
	
	public function login(Request $request){

        $mobile=$request->json()->get("mobile");
        $passwordOtp=$request->json()->get("password_otp");
 
        $userResult = User::where('mobile',$mobile)->first();
        if($userResult){
            if(Hash::check($passwordOtp, $userResult->password)==true || ($userResult->otp==$passwordOtp)){
                
                $json['error']=false;

                if($userResult->otp_verify_status=='1'){
                    $json['user_verify']=true;
                    $json['msg']='Login successfully';
                    $json['token']=$userResult->createToken('authToken')->accessToken;
                }else{
                    $this->sendOtp($request);
                    $json['msg']='Please first verify your account.';
                    $json['user_verify']=false;
                }
            }else{
                $json['error']=true;
                $json['msg']="Invalid login credientials";
            }
        }else{
            $json['error']=true;
            $json['msg']="User does not exist.please try again.";
        }

        return response($json);

    }
	//free membership
	public function FreeMembership(Request $request){
		$freeData = user::where('membership','1')->where('status','1')->orderBy('id','asc')->get(); 
		if(!empty($freeData)){
			
			return response(['error' => false,'msg'=>'Data Get Successfully', 'data'=>$freeData]);
		}else{
			
			return response(['error' => true,'msg'=>'Data Not Available', 'data'=>[]]);
		}
		
	
	}
	//premium membership
	public function premiumMembership(Request $request){
		$premiumMembership = user::where('membership','1')->where('status','2')->orderBy('id','asc')->get(); 
		if(!empty($premiumMembership)){
			
			return response()->json(['msg' => 'Data Successfully Get',
                'error' => 'true',
                'data' =>  $premiumMembership
            ]);
		}else{
			
			return response(['error' => true,'msg'=>'Data Not Available', 'data'=>[]]);
		}
		
	
	}
	//banner section
	 public function banner()
    {
        $banner = Banner::all();
        $count = count($banner);
        if($count>0) {
            return response()->json(['msg' => 'Data Successfully Get',
                'error' => 'true',
                'data' =>  $banner
            ]);
          }else {
            return response()->json([
                'msg' => 'Data Not Found',
                'error' => 'flase',
                'data'=>[]
            
            ]);
          }
    }
	
	public function logout(Request $request)
	{
		$token = Auth::user()->token();
			$token->revoke();
		
		return response()->json([
			'msg' => 'Successfully logged out'
		]);
	}
	
}
