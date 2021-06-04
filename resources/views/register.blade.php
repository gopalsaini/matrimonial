@extends('layouts/app')
@section('content')
         <div class="py-4 py-lg-5">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-md-8 mx-auto">
                     <div class="card">
                        <div class="card-body">
                           <div class="mb-5 text-center">
                              <h1 class="h3 text-primary mb-0">Create Your Account</h1>
                              <p>Fill out the form to get started.</p>
                           </div>
                           <form class="form-default" role="form" action="{{url('/registerform')}}" method="POST" id="test">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                       <label class="form-label" for="on_behalf">On Behalf</label>
                                       <select class="form-control aiz-selectpicker " name="behalf" required>
                                          <option value="1">Friend</option>
                                          <option value="2">Brother</option>
                                          <option value="3">Sister</option>
                                          <option value="4">Daughter/Son</option>
                                          <option value="5">Selfs</option>
                                          <option value="10">Daughter</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                       <label class="form-label" for="name">First Name</label>
                                       <input type="text" class="form-control " name="fname" id="first_name" placeholder="First Name"  required>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                       <label class="form-label" for="name">Last Name</label>
                                       <input type="text" class="form-control " name="lname" id="last_name" placeholder="Last Name"  required>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                       <label class="form-label" for="gender">Gender</label>
                                       <select class="form-control aiz-selectpicker " name="gender" required>
                                          <option value="1">Male</option>
                                          <option value="2">Female</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                       <label class="form-label" for="name">Date Of Birth</label>
                                       <input type="text" class="form-control aiz-date-range " name="dob" id="date_of_birth" placeholder="Date Of Birth" data-single="true" data-show-dropdown="true"  required>
                                    </div>
                                 </div>
                              </div>
                              <label class="form-label" for="email">Email </label>
                              <div class="form-group phone-form-group mb-1">
                                 <input type="email" id="email" class="form-control" value="" placeholder="" name="email" autocomplete="off">
                              </div>
                              <label class="form-label" for="phone">Phone</label>
                              <div class="form-group phone-form-group mb-1">
                                 <input type="tel" id="phone-code" class="form-control" value="" placeholder="" name="mobile" autocomplete="off">
                              </div>
                              
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                       <label class="form-label" for="password">Password</label>
                                       <input type="password" class="form-control " name="password" id="password" placeholder="********" aria-label="********" required>
                                       <small>Minimun 6 characters</small>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                       <label class="form-label" for="password-confirm">Confirm Password</label>
                                       <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="********" required>
                                       <small>Minimun 6 characters</small>
                                    </div>
                                 </div>
                              </div>
                              <div class="mb-3">
                                 <label class="aiz-checkbox">
                                 <input type="checkbox" name="checkbox_example_1" required>
                                 <span class=opacity-60>By signing up you agree to our
                                 <a href="https://demo.activeitzone.com/matrimonial/terms-conditions" target="_blank">terms and conditions.</a>
                                 </span>
                                 <span class="aiz-square-check"></span>
                                 </label>
                              </div>
                              <div class="mb-5">
                                 <button type="submit" class="btn btn-block btn-primary">Create Account</button>
                              </div>
                              <div class="mb-5">
                                 <div class="separator mb-3">
                                    <span class="bg-white px-3">Or Login With</span>
                                 </div>
                                 <ul class="list-inline social colored text-center">
                                    <li class="list-inline-item">
                                       <a href="https://demo.activeitzone.com/matrimonial/social-login/redirect/facebook" class="facebook" title="Facebook"><i class="lab la-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                       <a href="https://demo.activeitzone.com/matrimonial/social-login/redirect/google" class="google" title="Google"><i class="lab la-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                       <a href="https://demo.activeitzone.com/matrimonial/social-login/redirect/twitter" class="twitter" title="Twitter"><i class="lab la-twitter"></i></a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="text-center">
                                 <p class="text-muted mb-0">Already have an account?</p>
                                 <a href="https://demo.activeitzone.com/matrimonial/login">Login to your Account</a>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		@endsection