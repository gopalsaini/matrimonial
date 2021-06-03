<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\familyStatus;

use DB;

class FamilyStatusController extends Controller
{
    public function store(Request $request){

        $id = $request->post('id');
        $request->validate([
            'name' => 'required|unique:family_statuses|max:255',
        ]);
        $name=$request->post('name');

        if(isset($id)){

            $familyvalues=familyStatus::where('id',$id)->update(['name'=>$name,]);
            $request->session()->flash('success','Family Status Update Done');
            return redirect('/admin/familyStatus');

        }else{
            DB::insert('insert into family_statuses (name) values(?)',[$name]);
            $request->session()->flash('success','Family Status Insert Done');
            return redirect('/admin/familyStatus');

        }

    }
    public function show(familyStatus $familystatus)
    {
        $familystatus = familyStatus::all()->sortByDesc("id");
        return view('admin.familyStatus')->with('familystatuses',$familystatus);
    }

    
    public function edit(familyStatus $familystatus, $id)
    {
        $familstatuses = familyStatus::where('id',$id)->first();
        return view('admin.familyStatus')->with(compact('familystatuses'));
    }

    
    public function destroy(Request $request, $id)
    {
        familyStatus::where('id', $id)->delete();
        $request->session()->flash('success','Family Status Deleted Done');
        return redirect('/admin/familyStatus');
    }
}
