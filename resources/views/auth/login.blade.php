@extends('layouts/app')
@section('content')
<div class="py-4 py-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-5 col-md-7 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-5 text-center">
                            <h1 class="h3 text-primary mb-0">Login to your Account</h1>
                        </div>

						<form class="form-default" data-loader="load_register" role="form" action="{{url('/user/login')}}" method="POST" id="test">
							<div class="form-group">
                                <input type="text" class="form-control " value="" placeholder="Phone" name="mobile" id="mobile">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="password">Password / OTP</label>
                                <input type="password" class="form-control " name="password_otp" id="password" placeholder="********" required>
                            </div>

                            <div class="mb-3 text-right">
                                <a id="button_load_register" class=" otp_send"> Get an OTP on your phone <span id="load_register" class="  load-btn" style="display:none"></span></a>
                            </div>


                            <div class="mb-5">
								<button name="signupBtn" type="submit" value="true" id=""
								   class="button_load_register btn btn-lg btn-primary btn-block signupBtn btn-theme">
								Login to your Account<span id="" class="load_register load-btn"
								   style="display:none"></span>
								</button>
                            </div>
                        </form>
                              
                       <div class="separator mb-3">
                                <span class="bg-white px-3 opacity-60">Or Login With</span>
                       </div>
                            <ul class="list-inline social colored text-center mb-5">
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
                            <a href="{{ url('/register')}}">Create an account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  @endsection