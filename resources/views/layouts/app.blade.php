
<!DOCTYPE html>
<html lang="en">

<head>

      <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Title -->
    <title>CK Matrimony | Best Matrimoni</title>
    <!-- Favicon -->
    <link rel="icon" href="https://demo.activeitzone.com/matrimonial/public/uploads/all/HKb4dap327ArsZtb12KXUNeFVCfbA7mZBqQIGrCw.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/aiz-core.css')}}">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            color: #6d6e6f;
        }

        :root {
            --primary: #a52a4c;
            --hov-primary: #161827;
            --soft-primary: rgba(22,24,39,0.15) ;
            --secondary: #02126A;
            --soft-secondary: rgba(2,18,106,0.15);
        }

        .text-primary-grad {
            background: rgb(253, 41, 123);
            background: -moz-linear-gradient(0deg, rgba(165,42,76,1) 0%, rgba(2,18,106,1) 100%);
            background: -webkit-linear-gradient(0deg, rgba(165,42,76,1) 0%, rgba(2,18,106,1) 100%);
            background: linear-gradient(0deg, rgba(165,42,76,1) 0%, rgba(2,18,106,1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-primary,
        .bg-primary-grad {
            background: rgb(253, 41, 123);
            background: -moz-linear-gradient(225deg, rgba(165,42,76,1) 0%, rgba(2,18,106,1) 100%);
            background: -webkit-linear-gradient(225deg, rgba(165,42,76,1) 0%, rgba(2,18,106,1) 100%);
            background: linear-gradient(225deg, rgba(165,42,76,1) 0%, rgba(2,18,106,1) 100%);
        }

        .fill-dark {
            fill: #4d4d4d;
        }

        .fill-primary-grad stop:nth-child(1) {
            stop-color: rgba(2,18,106,1);
        }

        .fill-primary-grad stop:nth-child(2) {
            stop-color: rgba(165,42,76,1);
        }
    </style>

        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=3432u"></script>
    
</head>
  <header class="aiz-header shadow-md bg-white border-gray-300">
        <div class="aiz-navbar position-relative">
            <div class="container">
                <div class="d-lg-flex justify-content-between text-center text-lg-left">
                    <div class="logo">
                        <a href="https://demo.activeitzone.com/matrimonial" class="d-inline-block py-15px">
                                                        <img src="https://demo.activeitzone.com/matrimonial/public/assets/img/logo.png" alt="CK Matrimony"
                                class="mw-100 h-30px h-md-40px" height="40">
                                                    </a>
                    </div>
                    <ul
                        class="mb-0 pl-0 ml-lg-auto d-lg-flex align-items-stretch justify-content-center justify-content-lg-start mobile-hor-swipe">
                        <li class="d-inline-block d-lg-flex pb-1 bg-primary-grad">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="https://demo.activeitzone.com/matrimonial">
                                <span class="text-primary-grad mb-n1">Home</span>
                            </a>
                        </li>
                        <li
                            class="d-inline-block d-lg-flex pb-1 ">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="https://demo.activeitzone.com/matrimonial/member-listing">
                                <span class="text-primary-grad mb-n1">Active Members</span>
                            </a>
                        </li>
                        <li class="d-inline-block d-lg-flex pb-1 ">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="https://demo.activeitzone.com/matrimonial/packages">
                                <span class="text-primary-grad mb-n1">Premium Plans</span>
                            </a>
                        </li>
                        <li
                            class="d-inline-block d-lg-flex pb-1 ">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="https://demo.activeitzone.com/matrimonial/happy-stories">
                                <span class="text-primary-grad mb-n1">Happy Stories</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            </header>

        
            @yield('content')
        
    
        <footer class="aiz-footer fs-13 mt-auto text-white fw-400 pt-5">
    <div class="container">

        <div class="row mb-4">
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 text-center mx-auto">
                <div class="logo mb-4">
                    <a href="https://demo.activeitzone.com/matrimonial" class="d-inline-block py-15px">
                                                    <img src="https://demo.activeitzone.com/matrimonial/public/assets/img/logo.png" alt="CK Matrimony" class="mw-100 h-30px h-md-40px" height="40">
                                            </a>
                </div>
                <div class="opacity-60">
                    <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:
justify"><span style="font-size:12.0pt;line-height:115%;mso-ansi-language:
EN-IN" lang="EN-IN">CK matrimony is an online portal that offers matrimonial services to
Indians and NRIs in Gulf, Europe, U.S., Canada,
and Australia.</span></p><p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:
justify"><br></p><p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:
justify"><span style="font-size:12.0pt;line-height:115%;mso-ansi-language:
EN-IN" lang="EN-IN"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:
justify"><span style="font-size:12.0pt;line-height:115%;mso-ansi-language:
EN-IN" lang="EN-IN">We aspire to provide the best service to our clients. Our team at CK matrimony is committed to your online safety and satisfaction.&nbsp;<o:p></o:p></span></p>
                </div>
            </div>
        </div>

                <div class="mb-4">
            <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">Contacts</h4>
            <div class="row opacity-60 no-gutters">
                                <div class="col-xl col-md-6 mb-4">
                    <div class="mb-3 opacity-60">
                        <i class="las la-home mr-2"></i>
                        <span>Address</span>
                    </div>
                    <div>somewhere in Bandra</div>
                </div>
                                                <div class="col-xl col-md-6 mb-4">
                    <div class="mb-3 opacity-60">
                        <i class="las la-globe mr-2"></i>
                        <span>Website</span>
                    </div>
                    <div>ckmatrimony.com</div>
                </div>
                                                <div class="col-xl col-md-6 mb-4">
                    <div class="mb-3 opacity-60">
                        <i class="las la-envelope mr-2"></i>
                        <span>Email</span>
                    </div>
                    <div><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e28189a281898f8396908b8f8d8c9bcc818d8f">[email&#160;protected]</a></div>
                </div>
                                                <div class="col-xl col-md-6 mb-4">
                    <div class="mb-3 opacity-60">
                        <i class="las la-phone mr-2"></i>
                        <span>Phone</span>
                    </div>
                                            <div>8888888888</div>
                                            <div>9999999999</div>
                                    </div>
                            </div>
        </div>
        
        <div class="row no-gutters">
                        <div class="col-xl col-md-6 mb-4">
                <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">Main Menu</h4>
                <div>
                    <ul class="list-unstyled">
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">Home</a>
                            </li>
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">How It Works</a>
                            </li>
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">Premium Members</a>
                            </li>
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">Packages</a>
                            </li>
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">Real Reviews</a>
                            </li>
                                            </ul>
                </div>
            </div>
            
                        <div class="col-xl col-md-6 mb-4">
                <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">Quick Search</h4>
                <div>
                    <ul class="list-unstyled">
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">All Members</a>
                            </li>
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">Premium Members</a>
                            </li>
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">Free Members</a>
                            </li>
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">Search</a>
                            </li>
                                            </ul>
                </div>
            </div>
            
                        <div class="col-xl col-md-6 mb-4">
                <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">USEFUL LINKS</h4>
                <div>
                    <ul class="list-unstyled">
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">FAQ</a>
                            </li>
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">Terms &amp; Conditions</a>
                            </li>
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">Privacy Policy</a>
                            </li>
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/" class="text-reset opacity-60">Request a Refund</a>
                            </li>
                                                    <li class="my-3">
                                <a href="https://demo.activeitzone.com/matrimonial/about" class="text-reset opacity-60">About Us</a>
                            </li>
                                            </ul>
                </div>
            </div>
            
                        <div class="col-xl col-md-6 mb-4">
                <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">Mobile</h4>
                <div class="mb-3">
                    <a href="#">
                        <img src="" height="50">
                    </a>
                </div>
                <div class="mb-3">
                    <a href="#">
                        <img src="" height="50">
                    </a>
                </div>
            </div>
                    </div>

        <div class="border-top border-primary pt-4 pb-7 pb-xl-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="lh-1">
                        <p>Munsif Matrimony<br></p>
                    </div>
                </div>
                                <div class="col-lg-6">
                    <div class="text-left text-lg-right">
                        <ul class="list-inline social colored mb-0">
                                                            <li class="list-inline-item">
                                    <a href="#" target="_blank" class="facebook"><i class="lab la-facebook-f"></i></a>
                                </li>
                                                                                    <li class="list-inline-item">
                                <a href="#" target="_blank" class="twitter"><i class="lab la-twitter"></i></a>
                            </li>
                                                                                    <li class="list-inline-item">
                                <a href="#" target="_blank" class="instagram"><i class="lab la-instagram"></i></a>
                            </li>
                                                                                    <li class="list-inline-item">
                                <a href="#" target="_blank" class="youtube"><i class="lab la-youtube"></i></a>
                            </li>
                                                                                    <li class="list-inline-item">
                                <a href="#" target="_blank" class="linkedin"><i class="lab la-linkedin-in"></i></a>
                            </li>
                                                    </ul>
                    </div>
                </div>
                            </div>
        </div>

    </div>
</footer>

<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5 text-center">
        <div class="col">
            <a href="https://demo.activeitzone.com/matrimonial" class="text-reset d-block flex-grow-1 text-center py-2">
                <i class="las la-home fs-18 opacity-60 opacity-100"></i>
                <span class="d-block fs-10 opacity-60 opacity-100 fw-600">Home</span>
            </a>
        </div>
        <div class="col">
            <a href="https://demo.activeitzone.com/matrimonial/member/notifications" class="text-reset d-block flex-grow-1 text-center py-2">
                <span class="d-inline-block position-relative px-2">
                    <i class="las la-bell fs-18 opacity-60 "></i>
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
                <a href="https://demo.activeitzone.com/matrimonial/login" class="text-reset d-block flex-grow-1 text-center py-2">
                    <span class="d-block mx-auto mb-1 opacity-60 ">
                        <img src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png" class="rounded-circle size-20px">
                    </span>
                    <span class="d-block fs-10 opacity-60 ">Account</span>
                </a>
            </div>
            </div>
</div>


    </div>


            <div class="aiz-cookie-alert shadow-xl">
            <div class="p-3 bg-dark rounded">
                <div class="text-white mb-3">
                    <p><font color="#1b1b28"><b>We use cookie for better user experience.</b></font><br></p>                </div>
                <button class="btn btn-primary aiz-cookie-accepet">
                    Ok. I Understood
                </button>
            </div>
        </div>
    
    	<div class="modal fade" id="LoginModal">
    <div class="modal-dialog modal-dialog-zoom">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fw-600">Login</h6>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-3">
                    <form class="" method="POST" action="https://demo.activeitzone.com/matrimonial/login">
                        <input type="hidden" name="_token" value="pCHhx5t6xAKP8kjZh1vZjo4gkroIXgcjOycEh55w">                        <div class="form-group">
                                                            <input type="text" class="form-control " value="" placeholder="Email Or Phone" name="email" id="email">
                                                                                        <span class="opacity-60">Use country code before number</span>
                                                    </div>

                        <div class="form-group">
                            <label class="form-label" for="password">CHUJ</label>
                            <input type="password" class="form-control " name="password" id="password" placeholder="********" required>
                                                    </div>

                        <div class="mb-3 text-right">
                            <a class="link-muted text-capitalize font-weight-normal" href="https://demo.activeitzone.com/matrimonial/password/reset">Forgot Password?</a>
                        </div>

                        
                            <button type="submit" class="btn btn-block btn-primary">Login to your Account</button>
                        
                    </form>
                                            <div class="mb-4 mt-4">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="becbcddbcc8cfedbc6dfd3ced2db90ddd1d3">[email&#160;protected]</a></td>
                                        <td>12345678</td>
                                        <td><button class="btn btn-outline-primary btn-xs" onclick="autoFill1()">Copy</button></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6e1b1d0b1c5f592e0b160f031e020b400d0103">[email&#160;protected]</a></td>
                                        <td>12345678</td>
                                        <td><button class="btn btn-outline-primary btn-xs" onclick="autoFill2()">Copy</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    

                    
                                            <div class="separator mb-3 mt-4">
                            <span class="bg-white px-3 opacity-60">Or Login With</span>
                        </div>
                        <ul class="list-inline social colored text-center mb-3">
                                                            <li class="list-inline-item">
                                    <a href="https://demo.activeitzone.com/matrimonial/social-login/redirect/facebook" class="facebook">
                                        <i class="lab la-facebook-f"></i>
                                    </a>
                                </li>
                                                                                        <li class="list-inline-item">
                                    <a href="https://demo.activeitzone.com/matrimonial/social-login/redirect/google" class="google">
                                        <i class="lab la-google"></i>
                                    </a>
                                </li>
                                                                                        <li class="list-inline-item">
                                    <a href="https://demo.activeitzone.com/matrimonial/social-login/redirect/twitter" class="twitter">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                </li>
                                                    </ul>
                    
                    <div class="text-center">
                        <p class="text-muted mb-0">Don&#039;t have an account?</p>
                        <a href="https://demo.activeitzone.com/matrimonial/register">Create an account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade package_update_alert_modal" id="modal-zoom">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom">
        <div class="modal-content package_update_alert_modal_content">
            <div class="modal-body text-center">
                <h4 class="modal-title h6 mb-3">Please Update Your Package.</h4>
                <hr>
                <a href="https://demo.activeitzone.com/matrimonial/packages" class="btn btn-primary mt-2">Package Purchase</a>
                <button type="button" class="btn btn-danger mt-2" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <div class="modal fade account_status_change_modal" id="modal-zoom">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form class="form-horizontal member-block" action="https://demo.activeitzone.com/matrimonial/member/account-activation" method="POST">
                        <input type="hidden" name="_token" value="pCHhx5t6xAKP8kjZh1vZjo4gkroIXgcjOycEh55w">                        <input type="hidden" name="deacticvation_status" id="deacticvation_status" value="">
                        <h4 class="modal-title h6 mb-3" id="confirmation_note" value=""></h4>
                        <hr>
                        <button type="submit" class="btn btn-primary mt-2">Yes</button>
                        <button type="button" class="btn btn-danger mt-2" data-dismiss="modal">No</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="toast" data-autohide="true" style="padding:20px;border-radius: 10px;">
      <div class="toast-body">

      </div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="{{ asset('assets/js/vendors.js')}}"></script>
      <script src="{{ asset('assets/js/aiz-core.js')}}"></script>
      <script src="{{ asset('assets/js/ajax.js')}}"></script>
    <script type="text/javascript">
		function loginModal(){
			// alert('sdfguk');
			$('#LoginModal').modal();
		}

        function package_update_alert(){
          $('.package_update_alert_modal').modal('show');
        }
    </script>

</body>

</html>