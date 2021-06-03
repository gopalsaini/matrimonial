<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

use DB;

class CountryController extends Controller
{
    public function store(Request $request){

        $id = $request->post('id');
        $request->validate([
            'name' => 'required',
        ]);
        $name=$request->name;

        if(isset($id)){

            $country=Country::where('id',$id)->update(['name'=>$name,]);
            $request->session()->flash('success','Country Update Done');
            return redirect('/admin/country');

        }else{
            DB::insert('insert into countries (name) values(?)',[$name]);
            $request->session()->flash('success','Country Insert Done');
            return redirect('/admin/country');

        }

    }
    public function show(Country $country)
    {
        $country = Country::all()->sortByDesc("id");
        return view('admin.country')->with('countries',$country);
    }

    
    public function edit(Country $country, $id)
    {
        $countries = Country::where('id',$id)->first();
        return view('admin.country')->with(compact('countries'));
    }

    
    public function destroy(Request $request, $id)
    {
        Country::where('id', $id)->delete();
        $request->session()->flash('success','Religion Deleted Done');
        return redirect('/admin/country');
    }
}
