@extends('layouts/master')
@section('title',__('Matrimonial ||City'))
@section('city',__('active'))
@section('content')
@php
$id = $city->id ?? null;
$name = $city->name?? null;
$state_id = $city->state_id?? null;
$country_id = $city->country_id?? null;
@endphp
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="row">

            <!-- Form controls -->
            <div class="col-sm-6">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <i class="fa fa-th"></i> Add City
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('admin.city')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="country_id">Please Select Country<span style="color:red">*</span></label>
                            <select name="country_id" class="form-control select2-multiple">
                                <option value="">Please Select Country</option>
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select><br>
                            <label for="state_id">Please Select State<span style="color:red">*</span></label>
                            <select name="state_id" class="form-control select2-multiple">
                                <option value="">Please Select State</option>
                                @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                            <br>
                            <div class="form-group">
                                <label for="city">City Name<span style="color:red">*</span></label>
                                <input value="{{$id}}" type="" id="name" class="form-control" name="name"
                                    onkeypress="return /[A-Za-z ]/i.test(event.key)" placeholder="Please Enter City">


                                @error('name')
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

            <div class="col-sm-6">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <i class="fa fa-list"></i> City Details
                    </div>
                    <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Country</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $count="1"; @endphp
                                    @foreach($cities as $city)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{{$city->name}}</td>
                                        <td>{{$city->state_id}}</td>
                                        <td>{{$city->country_id}}</td>
                                        <td><a class="btn btn-add btn-xs"
                                                href="{{url('admin/city')}}/{{$city->id}}"><i
                                                    class="fa fa-pencil"></i> Edit</a> <a
                                                href="{{url('admin/city-delete')}}/{{$city->id}}"
                                                class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a>
                                        </td>
                                    </tr>
                                    @php $count++; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </section>
    <!-- /.content -->
</div>


@endsection