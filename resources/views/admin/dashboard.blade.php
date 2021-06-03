@extends('layouts/master')
@section('title',__('Matrimonial || Admin dashboard'))
@section('dashboard',__('active'))
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-dashboard"></i>
               </div>
               <div class="header-title">
                  <h1> Admin Dashboard</h1>
                  <small> admin.</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <a href="{{ url('admin/users')}}">
                           <div id="cardbox1">
                              <div class="statistic-box">
                                 <i class="fa fa-user-plus fa-3x"></i>
                                 <div class="counter-number pull-right">
                                    <span class="count-number">70</span> 
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                 </div>
                                 <h3> Total Members</h3>
                              </div>
                           </div>
                     </a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <a href="{{ url('admin/products/products')}}">
                           <div id="cardbox2" style="background-color: #428bca;">
                              <div class="statistic-box">
                                 <i class="fa fa-product-hunt fa-3x"></i>
                                 <div class="counter-number pull-right">
                                    <span class="count-number">50</span> 
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                 </div>
                                 <h3>Premium Member</h3>
                              </div>
                           </div>
                     </a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <a href="{{ url('/admin/banner')}}">
                        <div id="cardbox3" style="background-color: #3a526b;">
                           <div class="statistic-box">
                              <i class="fa fa-picture-o fa-3x"></i>
                              <div class="counter-number pull-right">
                                 <span class="count-number">10</span> 
                                 <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                 </span>
                              </div>
                              <h3>Free Member</h3>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <a href="{{ url('/admin/contact')}}">
                        <div id="cardbox4" style="background-color: #ac2925;">
                           <div class="statistic-box">
                              <i class="fa fa-comment fa-3x"></i>
                              <div class="counter-number pull-right">
                                 <span class="count-number">5</span> 
                                 <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                 </span>
                              </div>
                              <h3> 
                                 Blocked Member</h3>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
              
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
  

@endsection