<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;
use App\Models\City;
use DB;

class CityController extends Controller
{
    public function store(Request $request){
        
        $id = $request->post('id');
        $request->validate([
            'name' => 'required|unique:sub_castes|max:255',
            'country_id' => 'required',
            'state_id' =>'required',
        ]);
        $name=$request->post('name');
        $state_id=$request->state_id;
        $country_id=$request->country_id;
        if(isset($id)){

            $country=City::where('id',$id)->update(['name'=>$name,'state_id'=>$state_id,'country_id'=>$country_id]);
            $request->session()->flash('success','City Update Done');
            return redirect('/admin/city');

        }else{
            DB::insert('insert into cities (name,state_id,country_id) values(?,?,?)',[$name,$state_id,$country_id]);
            $request->session()->flash('success','City Inserted Succesfully');
            return redirect('/admin/city');

        }

    }
    public function show(City $city)
    {   $country = Country::all();
        $state = State::all();
        $city = City::all()->sortByDesc("id");

        return view('admin.city')->with('countries',$country)->with('states',$state)->with('cities',$city);
    }

    
    public function edit(City $city, $id)
    {
        $cities = City::where('id',$id)->first();
        $states = State::where('id',$id)->first();
        $country = Country::where('id',$id)-first();
        return view('admin.city')->with(compact('cities'));
    }

    
    public function destroy(Request $request, $id)
    {
        City::where('id', $id)->delete();
        $request->session()->flash('success','City Deleted Done');
        return redirect('/admin/city');
    }
}
