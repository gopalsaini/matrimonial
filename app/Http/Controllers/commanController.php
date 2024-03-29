<?php
 
namespace App\Http\Controllers;
use App\Helpers\commonHelper;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use DB;
use Hash;
use Session;



class commanController extends Controller
{
    //registration details
    public function registration(Request $request){
       if ($request->ajax()) { 
            $validator = \Validator::make($request->all(), [
                'behalf' => 'required',
				'fname' => 'required',
				'lname' => 'required', 
				'gender' => 'required',
				'dob' => 'required',
				'email' => 'required|email',
				'mobile' => 'required|unique:users',
				'password' => 'required',
				'password_confirmation' => 'required_with:password|same:password|min:6'
            ]);
            if ($validator->fails())
            {
                return response(['error'=>true,'msg'=>$validator->errors()->all()]);
            }
            $behalf =$request->post('behalf');
            $fname =$request->post('fname');
            $lname =$request->post('lname');
			$gender =$request->post('gender');
			$dob =$request->post('dob');
			$email =$request->post('email');
			$mobile =$request->post('mobile');
		  	$password =$request->post('password');
            $data=json_encode(['behalf'=>$behalf,'fname'=>$fname,'lname'=>$lname,'gender'=>$gender,'dob'=>$dob,'email'=>$email,'mobile'=>$mobile,'password'=>$password]);
			 
        return $update=commonHelper::callAPI('POST','/registration',$data);
      }
	}
	  //otp send
	  public function submitOtp(Request $request){
        $validator = \Validator::make($request->all(), [
            'dig1' => 'required|min:1',
            'dig2' => 'required|min:1',
            'dig3' => 'required|min:1',
            'dig4' => 'required|min:1',
            'dig5' => 'required|min:1',
            'dig6' => 'required|min:1'
        ]);
        if ($validator->fails())
        {
            return response(['error'=>true,'msg'=>"OTP required"]);
        }
        $dig1 =$request->post('dig1');
        $dig2 =$request->post('dig2');
        $dig3 =$request->post('dig3');
        $dig4 =$request->post('dig4');
        $dig5 =$request->post('dig5');
        $dig6 =$request->post('dig6');
        $otp = $dig1.$dig2.$dig3.$dig4.$dig5.$dig6;
        $data=json_encode(['otp'=>$otp]);
        $otp=commonHelper::callAPI('POST','/submitotp',$data);
        $token = json_decode($otp,true);
        if(!$token['error']){
            Session::put('user_token',$token['token']);
		}
		return $otp; 
    } 
	
	//SEND OTP
    public function sendotp(Request $request)
	{ 
        $data=json_encode(['mobile'=>$request->mobile]);
		return commonHelper::callAPI('POST','/sendotp',$data); 
    }
	
	//LOGIN 
	public function login(Request $request){
        $validator = \Validator::make($request->all(), [
            'mobile' => 'required|min:10|max:10',
            'password_otp'=>'required|min:6',
        ]);
        if ($validator->fails())
        {
            return response(['error'=>true,'msg'=>$validator->errors()->all()]);
        }
		$mobile =$request->post('mobile');
		$password_otp =$request->post('password_otp');
        $data=json_encode(['mobile'=>$mobile,'password_otp'=>$password_otp]);
        $login=commonHelper::callAPI('POST','/login',$data);
        $token = json_decode($login,true);
        if(!$token['error'] && $token['user_verify']){
            Session::put('user_token',$token['token']);
        }
		return $login;
        
    }
	
	public function index(Request $request)
	{	
		$banner=commonHelper::callAPI('GET','/banner',array());
        $freeMember=commonHelper::callAPI('GET','/free-membership',array());
		$primumMember=commonHelper::callAPI('GET','/primum-membership',array());
		return view('/welcome')->with(['banner'=>$banner])->with(['freeMember'=>$freeMember])->with(['primumMember'=>$primumMember]);
	}
	
	//user logout
	public function logout(Request $request){
		if(!empty($logout)){
			$request->session()->forget('user_token');
			return redirect('/');
		}else{
			return redirect('/dashboard');
		}
	}
	//user profile
	public function userProfile(Request $request)
	{
		$userProfile=commonHelper::callAPI('userTokenget','/user-profile',array());
		$matchProfile=commonHelper::callAPI('userTokenget','/match-profile',array());
		return view('dashboard')->with(['userProfile'=>$userProfile,'matchProfile'=>$matchProfile]);
	}
	
	//change password    
	public function changePassword(Request $request){
       if ($request->ajax()) { 
	   $validator = \Validator::make($request->all(), [
	   'oldpassword' => 'required',
	   'new_password' => 'required',
		'confirm_password' => 'required_with:new_password|same:new_password'
	   ]);
	   if ($validator->fails())
            {
                return response(['error'=>true,'msg'=>$validator->errors()->all()]);
            }
			$oldpassword =$request->post('oldpassword');
			$new_password =$request->post('new_password');
            $data=json_encode(['oldpassword'=>$oldpassword,'new_password'=>$new_password]);
	   };
	   return $change=commonHelper::callAPI('userTokenpost','/change-password',$data);
	   
	}
	//change password    
	public function matchProfile(Request $request){
		
		
	}
}

