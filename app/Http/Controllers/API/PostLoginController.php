<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use DB; 
use Hash;

class postloginController extends Controller
{
     public function userProfile()
    {   
		$user_id = auth()->guard('api')->user()->id;
        $userProfile = user::where('id',$user_id)->get();
		 if(!empty($userProfile)){
			 return response()->json([
				'msg' => 'Successfully Done',
				 'error' => 'true',
				'data' =>  $userProfile,
				]);
		 }else{
			  return response()->json([
				'msg' =>' Null',
				 'error' => 'flase',
				'data' =>[]
			 ]);
		 }
	}
	//change password
    public function changePassword(Request $request) 
    {	
		$user_id = auth()->guard('api')->user()->id;
		$oldPassword = $request->json()->get('oldpassword');
		$new_password = Hash::make($request->json()->get('new_password'));
        $user = DB::table('users')->where('id', $user_id)->first();
		if (Hash::check($oldPassword, $user->password)) 
		{ 	
			user::where('id', $user_id)->update(array('password' => $new_password));
			return response()->json([
				'msg' => 'Password Update Successfully',
				 'error' => 'false'
			]);
		}else {
			return response()->json([
				'msg' => 'Old Password Not Match',
				 'error' => 'true'
			]);
		}
	}
	//match Profile
    public function matchProfile(Request $request) 
    {	$user_id = auth()->guard('api')->user()->id;
        $user = DB::table('users')->where('id', $user_id)->first();
		$matchProfile = User::where('gender','!=',$user->gender)->get();
		if(!empty($matchProfile)){
		return response()->json([
				'msg' => 'Profile Match Successfully',
				 'error' => 'true'
				 'data'=> $matchProfile,
			]);
	}else{
		return response()->json([
				'msg' => 'Profile Does Not Match',
				 'error' => 'false'
				 'data'=> [],
			]);
	}
}	
	

