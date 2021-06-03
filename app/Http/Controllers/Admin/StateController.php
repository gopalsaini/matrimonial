<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;
use DB;

class StateController extends Controller
{
    public function store(Request $request){

        $id = $request->post('id');
        $request->validate([
            'name' => 'required|unique:states|max:255',
            'country_id' => 'required',
        ]);
        $name=$request->post('name');
        $country_id=$request->post('country_id');
        if(isset($id)){

            $religion=State::where('id',$id)->update(['name'=>$name,'religion_id'=>$religion_id]);
            $request->session()->flash('success','State Update Done');
            return redirect('/admin/state');

        }else{
            DB::insert('insert into states (name,country_id) values(?,?)',[$name,$country_id]);
            $request->session()->flash('success','State Insert Done');
            return redirect('/admin/state');

        }

    }
    public function show(State $state)
    {   $country = Country::all()->sortByDesc("id");
        $state = State::all()->sortByDesc("id");
        return view('admin.state')->with('states',$state)->with('countries',$country);
    }

    
    public function edit(State $state, $id)
    {
        $states = Caste::where('id',$id)->first();
        return view('admin.state')->with(compact('states'));
    }

    
    public function destroy(Request $request, $id)
    {
        State::where('id', $id)->delete();
        $request->session()->flash('success','State Deleted Done');
        return redirect('/admin/state');
    }
}
