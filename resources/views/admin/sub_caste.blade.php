@extends('layouts/master')
@section('title',__('Matrimonial || Caste'))
@section('caste',__('active'))
@section('content')
@php
$id = $language->id ?? null;
$name = $language->name?? null;
$caste_id = $caste->caste_id?? null;
@endphp
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="row">

            <!-- Form controls -->
            <div class="col-sm-6">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <i class="fa fa-th"></i> Add Sub Caste
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('admin.sub_caste')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="sub_caste">Please Select Religion<span style="color:red">*</span></label>
                            <select name="religion" class="form-control select2-multiple">
                                <option value="">Please Select Religion</option>
                                @foreach($religions as $religion)
                                <option value="{{$religion->id}}">{{$religion->name}}</option>
                                @endforeach
                            </select><br>
                            <label for="sub_caste">Please Select Caste<span style="color:red">*</span></label>
                            <select name="caste" class="form-control select2-multiple">
                                <option value="">Please Select Caste</option>
                                @foreach($castes as $caste)
                                <option value="{{$caste->id}}">{{$caste->name}}</option>
                                @endforeach
                            </select>
                            <br>
                            <div class="form-group">
                                <label for="sub_caste">Sub-Caste Name<span style="color:red">*</span></label>
                                <input value="{{$id}}" type="" id="name" class="form-control" name="name"
                                    onkeypress="return /[A-Za-z ]/i.test(event.key)" placeholder="Please Enter Sub Caste">


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
                        <i class="fa fa-list"></i> Sub Caste Details
                    </div>
                    <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Sub-Caste Name</th>
                                        <th>Caste Name</th>
                                        <th>Religion</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $count="1"; @endphp
                                    @foreach($sub_castes as $sub_caste)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{{$sub_caste->name}}</td>
                                        <td>{{$sub_caste->caste_id}}</td>
                                        <td>{{$sub_caste->religion_id}}</td>
                                        <td><a class="btn btn-add btn-xs"
                                                href="{{url('admin/sub_caste')}}/{{$sub_caste->id}}"><i
                                                    class="fa fa-pencil"></i> Edit</a> <a
                                                href="{{url('admin/sub_caste-delete')}}/{{$sub_caste->id}}"
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