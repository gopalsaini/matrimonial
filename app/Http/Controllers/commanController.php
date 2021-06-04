<?php

namespace App\Http\Controllers;

use App\Helpers\commonHelper;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;


class commanController extends Controller
{
    //shipping details
    public function registration(Request $request){
       if ($request->ajax()) {
            $validator = \Validator::make($request->all(), [
                'behalf' => 'required',
				'fname' => 'required',
				'lname' => 'required', 
				'gender' => 'required',
				'dob' => 'required',
				'email' => 'required|email',
				'mobile' => 'required',
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
//preloginweb
}

