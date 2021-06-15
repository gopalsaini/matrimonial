@extends('layouts.app')
@section('content') 
@php
$userProfile=json_decode($userProfile,true);
$matchProfile=json_decode($matchProfile,true);
@endphp
        <section class="py-5 bg-white">
	<div class="container">
		<div class="d-flex align-items-start">
			<div class="aiz-user-sidenav-wrap pt-4 sticky-top c-scrollbar-light position-relative z-1 shadow-none">
    <div class="absolute-top-left d-xl-none">
        <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
            <i class="las la-times la-2x"></i>
        </button>
    </div>
    <div class="aiz-user-sidenav rounded overflow-hidden">
        <div class="px-4 text-center mb-4">
            <span class="avatar avatar-md mb-3">
                                <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/uVl6pf6oqBpZiJuai4iwU4KCRAGe9plsh5wDrnkN.png">
                            </span>
            <h4 class="h5 fw-600">{{$userProfile['data'][0]['name']}}</h4>
            <div class="text-center  mb-2">

            </div>
            <div>
                <span class="rating rating-sm">

                </span>
            </div>
            <div class="mb-1">

                <span class="fw-600">

                </span>
                <span>

                </span>
            </div>
        </div>
        <div class="text-center mb-3 px-3">
            <a href="https://demo.activeitzone.com/matrimonial/member-profile/27" class="btn btn-block btn-soft-primary">Public Profile</a>
        </div>

        <div class="sidemnenu mb-3">
            <ul class="aiz-side-nav-list" data-toggle="aiz-side-menu">

                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/matrimonial/dashboard" class="aiz-side-nav-link active">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/matrimonial/gallery-image" class="aiz-side-nav-link">
                        <i class="las la-image aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Gallery</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/matrimonial/happy-story/create" class="aiz-side-nav-link">
                        <i class="las la-handshake aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Happy Story</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link">
                        <i class="las la-shopping-basket aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Packages</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/matrimonial/packages" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">Packages</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/matrimonial/package-purchase-history" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">Package Purchase History</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/matrimonial/chat" class="aiz-side-nav-link">
                        <i class="las la-envelope aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Message</span>
                    </a>
                </li>
                                    <li class="aiz-side-nav-item">
                        <a href="https://demo.activeitzone.com/matrimonial/support-ticket/history" class="aiz-side-nav-link ">
                            <i class="las la-life-ring aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Support Ticket</span>
                        </a>
                    </li>
                                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/matrimonial/my-interests" class="aiz-side-nav-link">
                        <i class="la la-heart-o aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">My Interest</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/matrimonial/my-shortlists" class="aiz-side-nav-link">
                        <i class="las la-list aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Shortlist</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/matrimonial/ignored-list" class="aiz-side-nav-link">
                        <i class="las la-ban aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Ignored User List</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/matrimonial/members/picture-privacy" class="aiz-side-nav-link">
                        <i class="las la-user-lock aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Picture Privacy</span>
                    </a>
                </li>

                <li class="aiz-side-nav-item"> 
                    <a href="{{url('/change-password')}}" class="aiz-side-nav-link">
                        <i class="las la-key aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Change Password</span>
                    </a>
                 <li class="aiz-side-nav-item">
                    <a href="{{url('/members')}}" class="aiz-side-nav-link">
                        <i class="las la-user aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Manage Profile</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link" onclick="account_deactivation()">
                                                    <i class="las la-lock aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Deactive Account</span>
                                            </a>
                </li>
            </ul>
        </div>
        <div>
            <a href="javascript:void(0);" class="btn btn-block btn-primary" href="https://demo.activeitzone.com/matrimonial/logout"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="las la-sign-out-alt"></i>
                <span>Logout</span>

                <form id="logout-form" action="https://demo.activeitzone.com/matrimonial/logout" method="POST" style="display: none;">
                    <input type="hidden" name="_token" value="nSJYhOmvaoAplNpuPjxWuCa3SbqjAzxKh8fbrLN6">               
					</form>
            </a>
        </div>
    </div>
</div>
			<div class="aiz-user-panel overflow-hidden">
				        <div class="row gutters-5">
        <div class="col-md-4 mx-auto mb-3" >
            <div class="bg-light rounded overflow-hidden text-center p-3">
                <i class="la la-heart-o la-3x mb-3 text-primary-grad"></i>
                <div class="h4 fw-700 text-primary-grad">1329</div>
                <div class="opacity-50">Remaining Interest</div>
            </div>
        </div>
        <div class="col-md-4 mx-auto mb-3" >
            <div class="bg-light rounded overflow-hidden text-center p-3">
                <i class="las la-phone la-3x mb-3 text-primary-grad"></i>
                <div class="h4 fw-700 text-primary-grad">1151</div>
                <div class="opacity-50 ">Remaining Contact View</div>
            </div>
        </div>
        <div class="col-md-4 mx-auto mb-3" >
            <div class="bg-light rounded overflow-hidden text-center p-3">
                <i class="las la-image la-3x mb-3 text-primary-grad"></i>
                <div class="h4 fw-700 text-center text-primary-grad">1353</div>
                <div class="opacity-50 text-center">Remaining Gallery Image Upload</div>
            </div>
        </div>
    </div>

    <div class="row gutters-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="fs-16 mb-0">Current package</h2>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4 mt-3">
                        <img class="mw-100 mx-auto mb-4" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/UIOcsIe8TMVx6Rp7Wbx9ig5kw6X2g2rSxKUNsPNQ.png" height="130">
                        <h5 class="mb-3 h5 fw-600">Silver Package</h5>
                    </div>
                    <ul class="list-group list-group-raw fs-15 mb-4 pb-4 border-bottom">
                        <li class="list-group-item py-2">
                            <i class="las la-check text-success mr-2"></i>
                            1 Express Interests
                        </li>
                        <li class="list-group-item py-2">
                            <i class="las la-check text-success mr-2"></i>
                            12 Galley Photo Upload
                        </li>
                        <li class="list-group-item py-2">
                            <i class="las la-check text-success mr-2"></i>
                            1 Contact Info view
                        </li>
                        <li class="list-group-item py-2 text-line-through">
                                                            <i class="las la-times text-danger mr-2"></i>
                                <del class="opacity-60">Show Auto Profile Match</del>
                                                    </li>
                    </ul>
                    <h4 class="fs-18 mb-3">Package expiry date: 2023-06-25 </h4>
                    <a href="https://demo.activeitzone.com/matrimonial/packages" class="btn btn-success d-inline-block">Upgrade Package</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="fs-16 mb-0">Matched profile</h2>
                </div>
                <div class="card-body">
                                        <div>
                                                                              <a href="https://demo.activeitzone.com/matrimonial/member-profile/40" class="text-reset border rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px">
                                                                      <img
                                                                                src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                                                                                onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                                        class="img-fit w-100 size-100px"
                                    >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h5 class="fs-16 text-body text-truncate">Nicole Hruby</h5>
                                      <div class="fs-12 text-truncate-3">
                                          <span class="mr-1 d-inline-block">
                                                                                          17 yrs,
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                                                                          Never Married,
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                            
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            <td class="py-1"></td>
                                          </span>
                                      </div>
                                  </div>
                                </div>
                            </a>
                                                                                                        <a href="https://demo.activeitzone.com/matrimonial/member-profile/45" class="text-reset border rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px">
                                                                      <img
                                                                                src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                                                                                onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                                        class="img-fit w-100 size-100px"
                                    >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h5 class="fs-16 text-body text-truncate">John Doe</h5>
                                      <div class="fs-12 text-truncate-3">
                                          <span class="mr-1 d-inline-block">
                                                                                          15 yrs,
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                            
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            <td class="py-1"></td>
                                          </span>
                                      </div>
                                  </div>
                                </div>
                            </a>
                                                                                                        <a href="https://demo.activeitzone.com/matrimonial/member-profile/46" class="text-reset border rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px">
                                                                      <img
                                                                                src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                                                                                onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                                        class="img-fit w-100 size-100px"
                                    >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h5 class="fs-16 text-body text-truncate">Mr.Demo Member</h5>
                                      <div class="fs-12 text-truncate-3">
                                          <span class="mr-1 d-inline-block">
                                                                                          25 yrs,
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                            
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            <td class="py-1"></td>
                                          </span>
                                      </div>
                                  </div>
                                </div>
                            </a>
                                                                                                        <a href="https://demo.activeitzone.com/matrimonial/member-profile/30" class="text-reset border rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px">
                                                                      <img
                                                                                src="https://demo.activeitzone.com/matrimonial/public/uploads/all/zo8WHvxlUyiPrxwnrc6ztQE5u8MnJo2ej2UUl1JU.png"
                                                                                onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                                        class="img-fit w-100 size-100px"
                                    >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h5 class="fs-16 text-body text-truncate">Idona Mccoy</h5>
                                      <div class="fs-12 text-truncate-3">
                                          <span class="mr-1 d-inline-block">
                                                                                          28 yrs,
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                                                                          5 Feet,
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                                                                          Never Married,
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                            Hinduism, 
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            Brahmin, 
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            <td class="py-1"></td>
                                          </span>
                                      </div>
                                  </div>
                                </div>
                            </a>
                                                                                                        <a href="https://demo.activeitzone.com/matrimonial/member-profile/32" class="text-reset border rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px">
                                                                      <img
                                                                                src="https://demo.activeitzone.com/matrimonial/public/uploads/all/COOYX4Mb7j2DNZ5vGlLiG6XS2wOucEZhblm1775Y.png"
                                                                                onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                                        class="img-fit w-100 size-100px"
                                    >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h5 class="fs-16 text-body text-truncate">Lakendra J. Lowe</h5>
                                      <div class="fs-12 text-truncate-3">
                                          <span class="mr-1 d-inline-block">
                                                                                          28 yrs,
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                                                                          5 Feet,
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                                                                          Never Married,
                                                                                      </span>
                                          <span class="mr-1 d-inline-block">
                                            Judaismm, 
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            Israelites (Yisraelim), 
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            <td class="py-1"></td>
                                          </span>
                                      </div>
                                  </div>
                                </div>
                            </a>
                                                                      </div>
                                    </div>
            </div>
        </div>
    </div>


			</div>
		</div>
	</div>
</section>
@endsection