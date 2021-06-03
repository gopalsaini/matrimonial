@extends('layouts/master')
@section('title',__('Matrimonial || Country'))
@section('country',__('active'))
@section('content')
@php
$id = $country->id ?? null;
$name = $country->name ?? null;
@endphp
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="row">

            <!-- Form controls -->
            <div class="col-sm-6">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <i class="fa fa-th"></i> Add Country
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('admin.country')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="country">Country Name <span style="color:red">*</span></label>
                                <input value="{{$id}}" type="" id="name" class="form-control" name="name"
                                    onkeypress="return /[A-Za-z ]/i.test(event.key)">


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
                        <i class="fa fa-list"></i> Countries Detail
                    </div>
                    <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Religion Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $count="1"; @endphp
                                    @foreach($countries as $country)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{{$country->name}}</td>
                                        <td>{{$country->name}}</td>

                                        <td><a class="btn btn-add btn-xs"
                                                href="{{url('admin/country')}}/{{$country->id}}"><i
                                                    class="fa fa-pencil"></i> Edit</a> <a
                                                href="{{url('admin/country-delete')}}/{{$country->id}}"
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