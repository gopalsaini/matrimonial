<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\maritalStatus;

use DB;

class MaritalStatusController extends Controller
{
    public function store(Request $request){

        $id = $request->post('id');
        $request->validate([
            'name' => 'required|unique:marital_statuses|max:255',
        ]);
        $name=$request->post('name');

        if(isset($id)){

            $maritalstatus=maritalStatus::where('id',$id)->update(['name'=>$name,]);
            $request->session()->flash('success','Marital Status Update Done');
            return redirect('/admin/maritalStatus');

        }else{
            DB::insert('insert into marital_statuses (name) values(?)',[$name]);
            $request->session()->flash('success','Marital Status Insert Done');
            return redirect('/admin/maritalStatus');

        }

    }
    public function show(maritalStatus $maritalstatus)
    {
        $maritalstatus = maritalStatus::all()->sortByDesc("id");
        return view('admin.maritalStatus')->with('maritalstatuses',$maritalstatus);
    }

    
    public function edit(maritalStatus $maritalstatus, $id)
    {
        $maritalstatus = maritalStatus::where('id',$id)->first();
        return view('admin.maritalStatus')->with(compact('maritalstatuses'));
    }

    
    public function destroy(Request $request, $id)
    {
        maritalStatus::where('id', $id)->delete();
        $request->session()->flash('success','Marital Status Deleted Done');
        return redirect('/admin/maritalStatus');
    }
}
