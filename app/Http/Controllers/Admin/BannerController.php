<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

use DB;

class BannerController extends Controller
{
    public function store(Request $request)
    {   
        
        $id = $request->post('id');
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|max:2048',
        ]);
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $image_update = "banner-".time().rand(1111, 9999).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/banner');
            $image->move($destinationPath, $image_update);
        }else{
            $image = Banner::where('id',$id)->first();
            $image_update=$image->image;
        }
        $image=$image_update;
        
        if(isset($id)){

            $banner=Banner::where('id',$id)->update(['image'=>$image]);
            $request->session()->flash('success','Banner Update Done');
            return redirect('/admin/banner');

        }else{
            DB::insert('insert into banners (image) values(?)',[$image]);
            $request->session()->flash('success','Banner Insert Done');
            return redirect('/admin/add-banner');

        }
        
    }


    public function show(Banner $banner)
    {
        $banner = Banner::all()->sortByDesc("id");
        return view('admin.banner')->with('banners',$banner);
    }

    
    public function edit(Banner $banner, $id)
    {
        $banner = Banner::where('id',$id)->first();
        return view('admin.add-banner')->with(compact('banner'));
    }

    
    public function destroy(Request $request, $id)
    {
        Banner::where('id', $id)->delete();
        $request->session()->flash('success','Banner Deleted Done');
        return redirect('/admin/banner');

    }



}
