<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use App\Models\Member;
use Auth;
use DB; 
use Hash;
class PreLoginController extends Controller
{
  	//registration details
    
	public function registration(Request $request)
    {	 
		 $validatedData['behalf'] = $request->json()->get("behalf");
		 $validatedData['fname'] = $request->json()->get("fname");
		 $validatedData['lname'] = $request->json()->get("lname");
		 $validatedData['gender'] = $request->json()->get("gender");
		 $validatedData['dob'] = $request->json()->get("dob");
		 $validatedData['email'] = $request->json()->get("email");
		 $validatedData['mobile'] = $request->json()->get("mobile");
         $validatedData['password'] = Hash::make($request->json()->get("password"));
         $user = Member::create($validatedData);
         $mobile = $request->json()->get("mobile");
        if($user){
            $this->sendOtp($request);
            return response(['error'=>false, 'msg'=>'Registration success and Otp send Your Number']);
        }
    }
	
	public function sendOtp(Request $request)
    {
        $mobile=$request->json()->get("mobile");    
        $otp = mt_rand(100000,999999);
        $getdata=Member::where('mobile',$mobile)->first();
        if(!$getdata){
            return response(['error' => true,'msg'=>'Mobile no. does not exist.']);
        }else{
            $getotp=Member::where('mobile',$mobile)->update(['otp'=>$otp]);
            return response()->json(['error' => false,'msg'=>'OTP sent successfully on your registered mobile no.']);
        }
        //echo "otp send done";
    }
}
//prelogin c
