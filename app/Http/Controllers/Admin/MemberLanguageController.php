<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberLanguage;

use DB;

class MemberLanguageController extends Controller
{
    public function store(Request $request){

        $id = $request->post('id');
        $request->validate([
            'name' => 'required',
        ]);
        $name=$request->post('name');

        if(isset($id)){

            $religion=MemberLanguage::where('id',$id)->update(['name'=>$name,]);
            $request->session()->flash('success','Religion Update Done');
            return redirect('/admin/member-language');

        }else{
            DB::insert('insert into member_languages (name) values(?)',[$name]);
            $request->session()->flash('success','Religion Insert Done');
            return redirect('/admin/member-language');

        }

    }
    public function show(MemberLanguage $language)
    {
        $language = MemberLanguage::all()->sortByDesc("id");
        return view('admin.member-language')->with('languages',$language);
    }

    
    public function edit(MemberLanguage $language, $id)
    {
        $religions = MemberLanguage::where('id',$id)->first();
        return view('admin.member-language')->with(compact('languages'));
    }

    
    public function destroy(Request $request, $id)
    {
        MemberLanguage::where('id', $id)->delete();
        $request->session()->flash('success','Religion Deleted Done');
        return redirect('/admin/member-language');
    }
}
