<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\familyValues;

use DB;

class FamilyValuesController extends Controller
{
    public function store(Request $request){

        $id = $request->post('id');
        $request->validate([
            'name' => 'required|unique:family_values|max:255',
        ]);
        $name=$request->post('name');

        if(isset($id)){

            $familyvalues=familyValues::where('id',$id)->update(['name'=>$name,]);
            $request->session()->flash('success','Family Values Update Done');
            return redirect('/admin/familyValues');

        }else{
            DB::insert('insert into family_values (name) values(?)',[$name]);
            $request->session()->flash('success','Religion Insert Done');
            return redirect('/admin/familyValues');

        }

    }
    public function show(familyValues $familyvalues)
    {
        $familyvalue = familyValues::all()->sortByDesc("id");
        return view('admin.familyValues')->with('familyvalues',$familyvalue);
    }

    
    public function edit(familyValues $familyvalues, $id)
    {
        $familyvalues = familyValues::where('id',$id)->first();
        return view('admin.familyValues')->with(compact('familyvalues'));
    }

    
    public function destroy(Request $request, $id)
    {
        familyValues::where('id', $id)->delete();
        $request->session()->flash('success','Family Values Deleted Done');
        return redirect('/admin/familyValues');
    }
}
