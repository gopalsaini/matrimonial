<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thememinister.com/crm/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:06:57 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png')}}" type="image/x-icon">
    <!-- Start Global Mandatory Style
         =====================================================================-->
    <!-- jquery-ui css -->
    <link href="{{ asset('admin_assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet"
        type="text/css" />
    <!-- Bootstrap -->
    <link href="{{ asset('admin_assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Lobipanel css -->
    <link href="{{ asset('admin_assets/plugins/lobipanel/lobipanel.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Pace css -->
    <link href="{{ asset('admin_assets/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link href="{{ asset('admin_assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Pe-icon -->
    <link href="{{ asset('admin_assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet"
        type="text/css" />
    <!-- Themify icons -->
    <link href="{{ asset('admin_assets/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css" />
    <!-- End Global Mandatory Style
      Emojionearea -->
    <link href="{{ asset('admin_assets/plugins/emojionearea/emojionearea.min.css')}}" rel="stylesheet"
        type="text/css" />
    <!-- End page Label Plugins -->

    <!--Summernote css-->
    <link href="{{ asset('admin_assets/plugins/summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('admin_assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_assets/dist/css/inputtag.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme style rtl -->
    <link href="{{ asset('admin_assets/dist/css/fSelect.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins1/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
        href="{{ asset('admin_assets/plugins1/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins1/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <link href="{{ asset('admin_assets/plugins/bootstrap-toggle/bootstrap-toggle.min.css')}}" rel="stylesheet" type="text/css"/>

    <style>
        .toast-top-right {
            top: 70px !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <!--preloader-->
  <!--  <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <a href="{{url('admin/dashboard')}}" class="logo">
                <!-- Logo -->
                <span class="logo-mini">
                   <img src="{{ asset('admin_assets/dist/img/mini-logo.png')}}" alt="">
                </span>
                <span class="logo-lg">Matrimonial
                   <!-- <img src="{{ asset('admin_assets/dist/img/logo.png')}}" alt="">-->
                </span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <!-- Sidebar toggle button-->
                    <span class="sr-only">Toggle navigation</span>
                    <span class="pe-7s-angle-left-circle"></span>
                </a>
                <!-- searchbar-->

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- user -->
                        <li class="dropdown dropdown-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('admin_assets/dist/img/avatar5.png')}}" class="img-circle" width="45"
                                    height="45" alt="user"></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('admin/profile')}}">
                                        <i class="fa fa-user"></i> User Profile</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/change-password')}}">
                                        <i class="fa fa-user"></i> Change Password</a>
                                </li>
                                <li><a href="{{ url('admin/logout')}}">
                                        <i class="fa fa-sign-out"></i> Signout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    @if(Session::has('error'))
                    <div class="alert">
                    </div>
                    @elseif(Session::has('success'))
                    <div class="alert">
                    </div>
                    @endif
                </div>
            </nav>
        </header>

        <!-- =============================================== -->
        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">.
            <!-- sidebar -->
            <div class="sidebar">
                <!-- sidebar menu -->
                <ul class="sidebar-menu">
                    <li class="@yield('dashboard')">
                        <a href="{{ url ('admin/dashboard')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>
                    <li class="treeview @yield('banner')">
                        <a href="#">
                            <i class="fa fa-picture-o"></i><span>Banners</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('admin/add-banner') }}">Add Banner</a></li>
                            <li><a href="{{ url('admin/banner') }}">Banner List</a></li>
                        </ul>
                    </li>
                    <li class="treeview @yield('Members')">
                        <a href="#">
                            <i class="fa fa-users "></i><span>Members</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="treeview @yield('blog-category')" >
                                <a href="#">
                                    <i class="fab fa-creative-commons-by"></i><span>Profile Attributes</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('admin/religion') }}">Religion</a></li>
                                    <li><a href="{{ url('admin/caste') }}">Caste</a></li>
                                    <li><a href="{{ url('admin/sub_caste') }}">Sub Caste</a></li>
                                    <li><a href="{{ url('admin/member-language') }}">Member Language</a></li>
                                    <li><a href="{{ url('admin/country') }}">Country</a></li>
                                    <li><a href="{{ url('admin/state') }}">State</a></li>
                                    <li><a href="{{ url('admin/city') }}">City</a></li>
                                    <li><a href="{{ url('admin/familyValues') }}">Family Values</a></li>
                                    <li><a href="{{ url('admin/familyStatus') }}">Family Status</a></li>
                                    <li><a href="{{ url('admin/maritalStatus') }}">Marital Statuses</a></li>
                                </ul>
                            </li>
                            <li class="treeview @yield('blog-category')" >
                                <a href="#">
                                    <i class="fa fa-user"></i><span>Free Members</span>
                                    <span class="pull-right-container">
                                    </span>
                                </a>
                            </li>
                            <li class="treeview @yield('blog-category')" >
                                <a href="#">
                                    <i class="fa fa-tag"></i><span>Premium Members</span>
                                    <span class="pull-right-container">
                                    </span>
                                </a>
                            </li>
                            <li class="treeview @yield('blog-category')" >
                                <a href="#">
                                    <i class="fa fa-user"></i><span>Bulk Member Add</span>
                                    <span class="pull-right-container">
                                    </span>
                                </a>
                            </li>
                            <li class="treeview @yield('blog-category')" >
                                <a href="#">
                                    <i class="fa fa-user"></i><span>Deleted Members</span>
                                    <span class="pull-right-container">
                                    </span>
                                </a>
                            </li>

                            <li class="treeview @yield('blog')">
                                <a href="#">
                                    <i class="fa fa-user"></i><span>Reported Members</span>
                                    <span class="pull-right-container">
                                    </span>
                                </a>
                            </li>
                            <li class="treeview @yield('blog-comment')">
                                <a href="{{ url('admin/blog-comment') }}">
                                    <i class="fa fa-file-text"></i><span>Profile Section</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview @yield('siteinfo')">
                        <a href="#">
                            <i class="fa fa-cogs"></i><span>Site Information</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('admin/setting/terms-and-condition') }}">Terms & Condition</a></li>
                            <li><a href="{{ url('admin/setting/privacy-policy') }}">Privacy policy</a></li>
                            <li><a href="{{ url('admin/setting/cancellation-policy') }}">Cancellation Policy</a></li>
                            <li><a href="{{ url('admin/setting/return-policy') }}">Return policy</a></li>
                            <li><a href="{{ url('admin/setting/refund-policy') }}">Refund Policy</a></li>
                            <li class="treeview @yield('featuredin')" >
                                <a href="#">
                                    <i class="fa fa-list-alt"></i><span>Featured In</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('admin/featuredin/add-featuredin') }}">Add Featured In</a></li>
                                    <li><a href="{{ url('admin/featuredin/featuredin') }}">Featured In</a></li>
                                </ul>
                            </li>
                            <li class="treeview @yield('testimonial')">
                                <a href="#">
                                    <i class="fa fa-quote-left"></i><span>Testimonials</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('admin/testimonial/add-testimonial') }}">Add testimonial</a></li>
                                    <li><a href="{{ url('admin/testimonial/testimonial') }}">Testimonials</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview @yield('contact')">
                        <a href="{{ url('admin/contact') }}">
                            <i class="fa fa-comment"></i><span>Contact Messages</span>
                        </a>
                    </li>
                    <li class="treeview @yield('newsletter')">
                        <a href="{{ url('admin/newletter/send-newsletter') }}">
                            <i class="fa fa-envelope"></i><span>Newletter</span>
                        </a>
                    </li>
                    
                    <li class="treeview @yield('posts')">
                        <a href="#">
                            <i class="fa fa-thumb-tack"></i><span>Posts</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="treeview @yield('blog-category')" >
                                <a href="#">
                                    <i class="fa fa-tag"></i><span>Blog Category</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('admin/blogs/add-blog-category') }}">Add Category</a></li>
                                    <li><a href="{{ url('admin/blogs/blog-category') }}">Category List</a></li>
                                </ul>
                            </li>

                            <li class="treeview @yield('blog')">
                                <a href="#">
                                    <i class="fa fa-file-text"></i><span>Blogs</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('admin/blogs/add-blog') }}">Add Blog</a></li>
                                    <li><a href="{{ url('admin/blogs/blog') }}">Blog List</a></li>
                                </ul>
                            </li>
                            <li class="treeview @yield('blog-comment')">
                                <a href="{{ url('admin/blog-comment') }}">
                                    <i class="fa fa-file-text"></i><span>Blogs Comments</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview @yield('reports')">
                        <a href="#">
                            <i class="fa fa-file-text"></i><span>Reports</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('admin/login-activity') }}">Login Activity</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar -->
        </aside>