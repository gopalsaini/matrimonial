@extends('layouts/master')
@section('title',__('Matrimonial || State'))
@section('state',__('active'))
@section('content')
@php
$id = $state->id ?? null;
$name = $state->name?? null;
$country_id = $state->country_id?? null;
@endphp
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="row">

            <!-- Form controls -->
            <div class="col-sm-6">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <i class="fa fa-th"></i> Add State
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('admin.state')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="country_id">Please Select Country<span style="color:red">*</span></label>
                            <select name="country_id" class="form-control select2-multiple">
                                <option value="">Please Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                            <br>
                            <div class="form-group">
                                <label for="state">State Name<span style="color:red">*</span></label>
                                <input value="{{$id}}" type="" id="name" class="form-control" name="name"
                                    onkeypress="return /[A-Za-z ]/i.test(event.key)" placeholder="Please Enter State">


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
                        <i class="fa fa-list"></i> States Detail
                    </div>
                    <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>State</th>
                                        <th>Country</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $count="1"; @endphp
                                    @foreach($states as $state)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{{$state->name}}</td>
                                        <td>{{$state->country_id}}</td>
                                        <td><a class="btn btn-add btn-xs"
                                                href="{{url('admin/state')}}/{{$state->id}}"><i
                                                    class="fa fa-pencil"></i> Edit</a> <a
                                                href="{{url('admin/state-delete')}}/{{$state->id}}"
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