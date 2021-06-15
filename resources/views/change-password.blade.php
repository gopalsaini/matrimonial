@extends('layouts.app')
@section('content')
<body class="text-left">

    <div class="aiz-main-wrapper d-flex flex-column position-relative  pt-8 pt-lg-10  bg-white">

        

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
            <h4 class="h5 fw-600">Matthew Ryan</h4>
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
                    <a href="https://demo.activeitzone.com/matrimonial/dashboard" class="aiz-side-nav-link ">
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
                    <a href="https://demo.activeitzone.com/matrimonial/members/change-password" class="aiz-side-nav-link">
                        <i class="las la-key aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Change Password</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/matrimonial/profile-settings" class="aiz-side-nav-link">
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
                    <input type="hidden" name="_token" value="V4tha9mCI4y3aqNTF14vKB2sV6JgoT3EKc4jDNz0"> 
					</form>
            </a>
        </div>
    </div>
</div>
			<div class="aiz-user-panel overflow-hidden">
				    <div class="card">
      <div class="card-header">
          <h5 class="mb-0 h6">Change Password</h5>
      </div>
      <div class="card-body">
        <form class="form-default" data-loader="load_register" role="form" action="{{url('/change-password')}}" method="POST" id="test">
            <div class="form-group row"> 
<label class="col-md-3 col-form-label">Old Password<span class="text-danger">*</span></label>			
					<div class="col-md-9">
                    <input type="password" name="oldpassword" id="old_password" class="form-control" placeholder="Old Password" required>
                                    </div>
            </div>
              <div class="form-group row">
                  <label class="col-md-3 col-form-label">Password<span class="text-danger">*</span></label>
                  <div class="col-md-9">
                      <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Password" required>
                                        </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-3 col-form-label">Confirm Password<span class="text-danger">*</span></label>
                  <div class="col-md-9">
                      <input type="password" class="form-control" name="confirm_password" onkeyup="checkPasswordValidation(123)" id="confirm_password" placeholder="Confirm Password" required>
                      <small id="confirm_password_help" class="form-text text-muted" style="color: red; display: none;">Mismatch Password.</small>
                                        </div>
              </div>
              <div class="form-group row text-right">
                  <div class="col-md-12">
                      
					  <button name="signupBtn" type="submit" value="true" id=""
								   class="button_load_register btn btn-primary btn-block signupBtn btn-theme">
								Confirm<span id="" class="load_register load-btn"
								   style="display:none"></span>
								</button>
                  </div>
              </div>
          </form>
      </div>
    </div>
			</div>
		</div>
	</div>
</section>

        

<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5 text-center">
        <div class="col">
            <a href="https://demo.activeitzone.com/matrimonial" class="text-reset d-block flex-grow-1 text-center py-2">
                <i class="las la-home fs-18 opacity-60 "></i>
                <span class="d-block fs-10 opacity-60 ">Home</span>
            </a>
        </div>
        <div class="col">
            <a href="https://demo.activeitzone.com/matrimonial/member/notifications" class="text-reset d-block flex-grow-1 text-center py-2">
                <span class="d-inline-block position-relative px-2">
                    <i class="las la-bell fs-18 opacity-60 "></i>
                                                                                                <span class="badge badge-sm badge-circle badge-primary position-absolute absolute-top-right">5</span>
                                                            </span>
                <span class="d-block fs-10 opacity-60 ">Notifications</span>
            </a>
        </div>
        <div class="col">
          <a href="https://demo.activeitzone.com/matrimonial/chat" class="text-reset d-block flex-grow-1 text-center py-2 ">
              <span class="d-inline-block position-relative px-2">
                  <i class="las la-comment-dots fs-18 opacity-60 "></i>
                                                                                                      </span>
              <span class="d-block fs-10 opacity-60 ">Messages</span>
          </a>
        </div>
                                    <div class="col">
                    <a href="javascript:void(0)" class="text-reset d-block flex-grow-1 text-center py-2 mobile-side-nav-thumb" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav">
                        <span class="d-block mx-auto mb-1 opacity-60">
                            <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/uVl6pf6oqBpZiJuai4iwU4KCRAGe9plsh5wDrnkN.png" class="rounded-circle size-20px" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';">
                        </span>
                        <span class="d-block fs-10 opacity-60">Account</span>
                    </a>
                </div>
                        </div>
</div>

    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
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
            <h4 class="h5 fw-600">Matthew Ryan</h4>
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
                    <a href="https://demo.activeitzone.com/matrimonial/dashboard" class="aiz-side-nav-link ">
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
                    <a href="https://demo.activeitzone.com/matrimonial/members/change-password" class="aiz-side-nav-link">
                        <i class="las la-key aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Change Password</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/matrimonial/profile-settings" class="aiz-side-nav-link">
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
                    <input type="hidden" name="_token" value="V4tha9mCI4y3aqNTF14vKB2sV6JgoT3EKc4jDNz0">                </form>
            </a>
        </div>
    </div>
</div>
        </div>
    </div>

    </div>


            <div class="aiz-cookie-alert shadow-xl">
            <div class="p-3 bg-dark rounded">
                <div class="text-white mb-3">
                    <p><span style="color: rgb(27, 27, 40);">We use cookie for better user experence.</span><br></p>                </div>
                <button class="btn btn-primary aiz-cookie-accepet">
                    Ok. I Understood
                </button>
            </div>
        </div>
    
    
    <div class="modal fade account_status_change_modal" id="modal-zoom">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form class="form-horizontal member-block" action="https://demo.activeitzone.com/matrimonial/member/account-activation" method="POST">
                        <input type="hidden" name="_token" value="V4tha9mCI4y3aqNTF14vKB2sV6JgoT3EKc4jDNz0">                        <input type="hidden" name="deacticvation_status" id="deacticvation_status" value="">
                        <h4 class="modal-title h6 mb-3" id="confirmation_note" value=""></h4>
                        <hr>
                        <button type="submit" class="btn btn-primary mt-2">Yes</button>
                        <button type="button" class="btn btn-danger mt-2" data-dismiss="modal">No</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
@endsection
