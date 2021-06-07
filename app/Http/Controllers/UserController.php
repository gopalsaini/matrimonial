<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\cart;
use DB;
use DataTables;

class UserController extends Controller
{
    
    public function index(Request $request){
        if ($request->ajax()) {
            $user =User::orderBy('id','DESC')->get();
            return DataTables::of($user)
            ->editColumn('id', function ($user) {
                return $user->id;
            })
            ->editColumn('name', function ($user) {
                return $user->name;
            })
                ->editColumn('mobile', function ($user) {
                return $user->mobile;
            })
            ->editColumn('email', function ($user) {
                return $user->email;
            })
            ->editColumn('otp', function ($user) {
				if($user->otp_verify_status=='1'){
						$otp= '<span class="label-custom label label-default">Verified</span>';
				}else{
				
					$otp= '<span class="label-danger label label-default">Non Verified</span>';
					
				}
                return $otp;
            })  
						
            ->addColumn('status', function($user){
				$con = $user->status=='1' ? 'checked' : '';
				if($user->status=='1'){
						$button = '<a href="javascript:void(0)" action="changeStatus" data-id="'.$user->id.'" class="edit btn btn-danger btn-xs btn-rounded m-b-5 edit-user" status="0" >Inactive</a>';
				}else{
					$button = '<a href="javascript:void(0)" action="changeStatus" data-id="'.$user->id.'" class="btn btn-success btn-rounded m-b-5 btn-xs edit-user" status="1" >Active</a>';
				}                
				return $button;
            })
            ->escapeColumns([])	     
            ->make(true);
        }
           return view('admin.users');
    }

    public function changeUserStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'User status change successfully.']);
    }

    public function destroy(Request $request, $id)
    {
        cart::where('user_id', $id)->delete();
        User::where('id', $id)->delete();
        $request->session()->flash('success','User Deleted Done');
        return redirect('/admin/users');
    }

    public function Activity(Request $request)
    {
        
		if ($request->ajax()) {
            $userActivity = DB::table('users')
			->join('user_activity', 'user_activity.user_id', '=', 'users.id')
			->select('users.name','users.email','users.mobile','user_activity.*')
			->where('user_type','1')->orderby('id','desc')
			->get();
            return DataTables::of($userActivity)
			->make(true);
		}
        return view('admin.login-activity');
    }
    public function loginDataFilter(Request $request)
    {   
        $fromDate = date("Y-m-d", strtotime($request->fromDate));  
        $toDate = date("Y-m-d", strtotime($request->toDate)); 
        $userActivity = DB::table('users')
            ->join('user_activity', 'user_activity.user_id', '=', 'users.id')
            ->select('users.name','users.email','users.mobile','user_activity.*')
            ->whereBetween('user_activity.created_at', [$fromDate, $toDate])
            ->where('user_type','1')->orderby('id','desc')
            ->get();
        return view('admin.login-activity')->with('userActivities',$userActivity);
    }

    

}
