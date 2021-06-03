<?php

namespace App\Http\Controllers;

use App\admin;
use App\User;
use DB;
use Hash;
use Session;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $req)
    {
      
        $email = $req->post('email');
        $password = $req->post('password');
        if(isset($email)){
            $data = DB::select("select * from admins where email='$email'");
            if($data){
                   $pass = admin::where(['email'=>$email])->first();
                    if(Hash::check($password, $pass->password)){
                        $req->session()->put('admin_login',true); 
                        $req->session()->put('admin_id',$pass->id);
                        $req->session()->put('admin_email',$pass->email);
                        return redirect('/admin/dashboard');
                    }else{
                        $req->session()->flash('error','Invalid your Cridntial Information');
                        return redirect('/admin');  
                    }
            }else{
                $req->session()->flash('error','Invalid your Cridntial Information');
                return redirect('/admin');  
            }
            
        }else{
            $req->session()->flash('error','Invalid your Cridntial Information');
            return redirect('/admin');

        }
    }
    
    public function store(Request $request)
    {
        $data= new User;
        $data->mobile = $request->post('mobile');
        $data->name = $request->post('name');
        $data->email = $request->post('email');
        $data->status = '1';
        $data->user_type = '1';
        $data->password = Hash::make($request->post('password'));
        $data->save();
    }

    public function profile(Request $request)
    {   
        $email =Session()->get('admin_email');
        $profile = User::where('email',$email)->first();
        return view('admin.profile')->with(compact('profile'));
    }

    public function changepassword(Request $request)
    {   
        
        $new_pass = $request->post('password');
        $password_confirmation = $request->post('password_confirmation');

        if($new_pass == $password_confirmation ){
            $email =Session()->get('admin_email');
            $old_pass = $request->post('old_pass');
            $password = Hash::make($request->post('password'));
            $pass = User::where(['email'=>$email])->first();
            
            if(Hash::check($old_pass, $pass->password)){
                $category=User::where('email',$email)->update(['password'=>$password]);
                $request->session()->flash('success','Password Changed Done');
                return redirect('/admin/change_password');
            }else{
                $request->session()->flash('error','Old Password Not Match');
                return redirect('/admin/change_password');  
            }
        }else{
            $request->session()->flash('error','Confirm Password Not Match');
            return redirect('/admin/change_password');  
        }

        
    }

    public function logout(Request $req)
    {
            $req->session()->forget('admin_login');
            $req->session()->forget('admin_id');
            $req->session()->forget('admin_email'); 
            $req->session()->flash('success','Logout Successfully done');
            return redirect('/admin');
        
    }

    public function dashboard()
    {   
		$banners = DB::table('banners')->get();
	    $count_banner=count($banners);
		
		/*$contacts = DB::table('contacts')->get();
	    $count_contact=count($contacts);
		
		$bulkenquiries = DB::table('bulkenquiries')->get();
	    $count_bulkenquiries=count($bulkenquiries);
		
		$user_activity = DB::table('user_activity')->get();
	    $count_user_activity=count($user_activity);
		
		$users = DB::table('users')->get();
	    $count_users=count($users);
		
		$testimonials = DB::table('testimonials')->get();
	    $count_testimonials=count($testimonials);
		
		$sales = DB::table('sales')->get();
	    $count_sales=count($sales);
		
		$products = DB::table('products')->get();
	    $count_products=count($products);
		
		$blogs = DB::table('blogs')->get();
	    $count_blogs=count($blogs);*/
		
        return view('admin.dashboard');
    }

    
}
