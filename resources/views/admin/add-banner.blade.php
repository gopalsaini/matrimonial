@extends('layouts/master')
@section('title',__('Desidukaan.ae || Add banner'))
@section('banner',__('active'))
@section('content')
@php
$id = $banner->id ?? null;
$image = $banner->image ?? null;
@endphp
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-tag"></i>
        </div>
        <div class="header-title">
            <h1>Add Banner</h1>
            <small>Banner list</small>
        </div>
    </section> -->
    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <i class="fa fa-th"></i> Goto
                    </div>
                    <div class="panel-body">
                        <div class="btn-group" id="buttonlist">
                            <a class="btn btn-add " href="{{ url('admin/banner') }}">
                                <i class="fa fa-list"></i> Banner List </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form controls -->
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <i class="fa fa-th"></i> Add Banner
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('admin.addbanner')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input value="{{$id}}" type="hidden" id="inputName" class="form-control" name="id"
                                    onkeypress="return /[A-Za-z ]/i.test(event.key)">

                            <div class="form-group">
                                <label for="banner1">Banner Image <span style="color:red">*</span></label>
                                <input @if(!isset($image)) required @endif type="file" id="" class="form-control"
                                    name="image" onchange="loadFile()" accept=".png, .jpg, .jpeg">
                                <br>
                                <p><img id="output" width="200" @if($image)
                                        src="{{asset('/uploads/banner')}}/{{$image}}" @endif></p>
                                @error('image')
                                <p class="alert" style="color:red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" id="inputProjectLeader" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection