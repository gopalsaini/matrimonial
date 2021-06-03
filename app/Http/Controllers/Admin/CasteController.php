<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Caste;
use App\Models\Religion;
use DB;

class CasteController extends Controller
{
    public function store(Request $request){

        $id = $request->post('id');
        $request->validate([
            'name' => 'required|unique:castes|max:255',
            'religion_id' => 'required',
        ]);
        $name=$request->post('name');
        $religion_id=$request->post('religion_id');
        if(isset($id)){

            $religion=Caste::where('id',$id)->update(['name'=>$name,'religion_id'=>$religion_id]);
            $request->session()->flash('success','Caste Update Done');
            return redirect('/admin/caste');

        }else{
            DB::insert('insert into castes (name,religion_id) values(?,?)',[$name,$religion_id]);
            $request->session()->flash('success','Caste Insert Done');
            return redirect('/admin/caste');

        }

    }
    public function show(Caste $caste)
    {   
        $religion = Religion::all()->sortByDesc("id");
        $caste = Caste::all();
        return view('admin.caste')->with('castes',$caste)->with('religions',$religion);
    }

    
    public function edit(Caste $caste, $id)
    {
        $castes = Caste::where('id',$id)->first();
        return view('admin.caste')->with(compact('castes'));
    }

    
    public function destroy(Request $request, $id)
    {
        Caste::where('id', $id)->delete();
        $request->session()->flash('success','Caste Deleted Done');
        return redirect('/admin/caste');
    }
}
