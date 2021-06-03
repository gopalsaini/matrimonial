<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Religion;

use DB;

class ReligionController extends Controller
{
    public function store(Request $request){

        $id = $request->post('id');
        $request->validate([
            'name' => 'required',
        ]);
        $name=$request->post('name');

        if(isset($id)){

            $religion=Religion::where('id',$id)->update(['name'=>$name,]);
            $request->session()->flash('success','Religion Update Done');
            return redirect('/admin/religion');

        }else{
            DB::insert('insert into religions (name) values(?)',[$name]);
            $request->session()->flash('success','Religion Insert Done');
            return redirect('/admin/religion');

        }

    }
    public function show(Religion $religion)
    {
        $religion = Religion::all()->sortByDesc("id");
        return view('admin.religion')->with('religions',$religion);
    }

    
    public function edit(Religion $religion, $id)
    {
        $religions = Religion::where('id',$id)->first();
        return view('admin.religion')->with(compact('religions'));
    }

    
    public function destroy(Request $request, $id)
    {
        Religion::where('id', $id)->delete();
        $request->session()->flash('success','Religion Deleted Done');
        return redirect('/admin/religion');
    }
}
