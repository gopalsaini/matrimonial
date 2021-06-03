<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Caste;
use App\Models\Religion;
use App\Models\Sub_caste;
use DB;

class SubCasteController extends Controller
{
    public function store(Request $request){
        
        $id = $request->post('id');
        $request->validate([
            'name' => 'required|unique:sub_castes|max:255',
            'religion' => 'required',
            'caste' =>'required',
        ]);
        $name=$request->post('name');
        $caste_id=$request->caste;
        $religion_id=$request->religion;
        if(isset($id)){

            $religion=Sub_caste::where('id',$id)->update(['name'=>$name,'caste_id'=>$caste_id,'religion_id'=>$religion_id]);
            $request->session()->flash('success','Sub-Caste Update Done');
            return redirect('/admin/sub_caste');

        }else{
            DB::insert('insert into sub_castes (name,caste_id,religion_id) values(?,?,?)',[$name,$caste_id,$religion_id]);
            $request->session()->flash('success','Sub-Caste Inserted Succesfully');
            return redirect('/admin/sub_caste');

        }

    }
    public function show(Sub_caste $sub_caste)
    {   $religion = Religion::all();
        $caste = Caste::all();
        $sub_caste = Sub_caste::all()->sortByDesc("id");

        return view('admin.sub_caste')->with('castes',$caste)->with('religions',$religion)->with('sub_castes',$sub_caste);
    }

    
    public function edit(Caste $caste, $id)
    {
        $castes = Caste::where('id',$id)->first();
        $sub_castes = Sub_caste::where('id',$id)->first();
        return view('admin.sub_caste')->with(compact('sub_castes'));
    }

    
    public function destroy(Request $request, $id)
    {
        Sub_caste::where('id', $id)->delete();
        $request->session()->flash('success','Caste Deleted Done');
        return redirect('/admin/sub_caste');
    }
}
