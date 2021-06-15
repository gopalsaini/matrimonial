@extends('layouts.app')
@section('content')
<body class="text-left">
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
                                <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/AKgrssE0aIV4yzwTzRQsBaNp93KS2PPp5wqMsld9.png">
                            </span>
            <h4 class="h5 fw-600">Donna J. Perryman</h4>
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
            <a href="https://demo.activeitzone.com/matrimonial/member-profile/42" class="btn btn-block btn-soft-primary">Public Profile</a>
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
                    <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">                </form>
            </a>
        </div>
    </div>
</div>
			<div class="aiz-user-panel overflow-hidden">
				        <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6">Introduction</h5>
        </div>
        <div class="card-body">
            <form action="https://demo.activeitzone.com/matrimonial/members/introduction_update/17" method="POST">
                <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Introduction</label>
                    <div class="col-md-10">
                        <textarea type="text" name="introduction" class="form-control" rows="4" placeholder="Introduction" required>gg</textarea>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Email Change -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6">Change your email</h5>
        </div>
        <div class="card-body">
            <form action="https://demo.activeitzone.com/matrimonial/new-user-email" method="POST">
                <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">                <div class="row">
                    <div class="col-md-2">
                        <label>Your Email</label>
                    </div>
                    <div class="col-md-10">
                        <div class="input-group mb-3">
                          <input type="email" class="form-control" placeholder="Your Email" name="email" value="user17@example.com" />
                          <div class="input-group-append">
                             <button type="button" class="btn btn-outline-secondary new-email-verification">
                                 <span class="d-none loading">
                                     <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                     Sending Email...
                                 </span>
                                 <span class="default">Verify</span>
                             </button>
                          </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Basic Information -->
    <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Basic Information</h5>
    </div>
    <div class="card-body">

        <form action="https://demo.activeitzone.com/matrimonial/members/basic_info_update/42" method="POST">
            <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name" >First Name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="first_name" value="Donna" class="form-control" placeholder="First Name" required>
                                    </div>
                <div class="col-md-6">
                    <label for="first_name" >Last Name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="last_name" value="J. Perryman" class="form-control" placeholder="Last Name" required>
                                    </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name" >Gender
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control aiz-selectpicker" name="gender" required>
                        <option value="1"  >Male</option>
                        <option value="2"  selected  >Female</option>
                                            </select>
                </div>
                <div class="col-md-6">
                    <label for="first_name" >Date Of Birth
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="aiz-date-range form-control" name="date_of_birth"  value=" 1992-09-22 " placeholder="Select Date" data-single="true" data-show-dropdown="true">
                                    </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name" >Phone Number
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="phone" value="239-663-7517" class="form-control" placeholder="Phone" required>
                                    </div>
                <div class="col-md-6">
                    <label for="first_name" >On Behalf
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control aiz-selectpicker" name="on_behalf" data-live-search="true" required>
                                                    <option value="1" >Friend</option>
                                                    <option value="2" >Brother</option>
                                                    <option value="3" >Sister</option>
                                                    <option value="4" >Daughter/Son</option>
                                                    <option value="5"  selected >Selfs</option>
                                            </select>
                                    </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name" >Marital Status
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control aiz-selectpicker" name="marital_status" data-live-search="true" required>
                                                    <option value="1"  selected >Never Married</option>
                                                    <option value="2" >Married</option>
                                                    <option value="3" >Divorced </option>
                                                    <option value="4" >Separated </option>
                                                    <option value="5" >Widowed</option>
                                                    <option value="8" >Separated</option>
                                                    <option value="9" >Never Married</option>
                                                    <option value="10" >Divorced</option>
                                            </select>
                                    </div>
                <div class="col-md-6">
                    <label for="first_name" >Number Of Children
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="children" value="0" class="form-control" placeholder="Number Of Children" >
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <label for="photo" >Photo <small>(800x800)</small></label>
                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                        </div>
                        <div class="form-control file-amount">Choose File</div>
                        <input type="hidden" name="photo" class="selected-files" value="242">
                    </div>
                    <div class="file-preview box sm">
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>

    <!-- Present Address -->
              <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Present Address</h5>
    </div>
    <div class="card-body">
        <form action="https://demo.activeitzone.com/matrimonial/address/42" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">            <input type="hidden" name="address_type" value="present">
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="present_country_id">Country</label>
                    <select class="form-control aiz-selectpicker" name="present_country_id" id="present_country_id" data-live-search="true" required>
                        <option value="">Select One</option>
                                                                            <option value="1" >Afghanistan</option>
                                                    <option value="2" >Albania</option>
                                                    <option value="3" >Algeria</option>
                                                    <option value="4" >American Samoa</option>
                                                    <option value="5" >Andorra</option>
                                                    <option value="6" >Angola</option>
                                                    <option value="7" >Anguilla</option>
                                                    <option value="8" >Antarctica</option>
                                                    <option value="9" >Antigua And Barbuda</option>
                                                    <option value="10" >Argentina</option>
                                                    <option value="11" >Armenia</option>
                                                    <option value="12" >Aruba</option>
                                                    <option value="13" >Australia</option>
                                                    <option value="14" >Austria</option>
                                                    <option value="15" >Azerbaijan</option>
                                                    <option value="16" >Bahamas The</option>
                                                    <option value="17" >Bahrain</option>
                                                    <option value="18" >Bangladesh</option>
                                                    <option value="19" >Barbados</option>
                                                    <option value="20"  selected >Belarus</option>
                                                    <option value="21" >Belgium</option>
                                                    <option value="22" >Belize</option>
                                                    <option value="23" >Benin</option>
                                                    <option value="24" >Bermuda</option>
                                                    <option value="25" >Bhutan</option>
                                                    <option value="26" >Bolivia</option>
                                                    <option value="27" >Bosnia and Herzegovina</option>
                                                    <option value="28" >Botswana</option>
                                                    <option value="29" >Bouvet Island</option>
                                                    <option value="30" >Brazil</option>
                                                    <option value="31" >British Indian Ocean Territory</option>
                                                    <option value="32" >Brunei</option>
                                                    <option value="33" >Bulgaria</option>
                                                    <option value="34" >Burkina Faso</option>
                                                    <option value="35" >Burundi</option>
                                                    <option value="36" >Cambodia</option>
                                                    <option value="37" >Cameroon</option>
                                                    <option value="38" >Canada</option>
                                                    <option value="39" >Cape Verde</option>
                                                    <option value="40" >Cayman Islands</option>
                                                    <option value="41" >Central African Republic</option>
                                                    <option value="42" >Chad</option>
                                                    <option value="43" >Chile</option>
                                                    <option value="44" >China</option>
                                                    <option value="45" >Christmas Island</option>
                                                    <option value="46" >Cocos (Keeling) Islands</option>
                                                    <option value="47" >Colombia</option>
                                                    <option value="48" >Comoros</option>
                                                    <option value="49" >Republic Of The Congo</option>
                                                    <option value="50" >Democratic Republic Of The Congo</option>
                                                    <option value="51" >Cook Islands</option>
                                                    <option value="52" >Costa Rica</option>
                                                    <option value="53" >Cote D&#039;Ivoire (Ivory Coast)</option>
                                                    <option value="54" >Croatia (Hrvatska)</option>
                                                    <option value="55" >Cuba</option>
                                                    <option value="56" >Cyprus</option>
                                                    <option value="57" >Czech Republic</option>
                                                    <option value="58" >Denmark</option>
                                                    <option value="59" >Djibouti</option>
                                                    <option value="60" >Dominica</option>
                                                    <option value="61" >Dominican Republic</option>
                                                    <option value="62" >East Timor</option>
                                                    <option value="63" >Ecuador</option>
                                                    <option value="64" >Egypt</option>
                                                    <option value="65" >El Salvador</option>
                                                    <option value="66" >Equatorial Guinea</option>
                                                    <option value="67" >Eritrea</option>
                                                    <option value="68" >Estonia</option>
                                                    <option value="69" >Ethiopia</option>
                                                    <option value="70" >External Territories of Australia</option>
                                                    <option value="71" >Falkland Islands</option>
                                                    <option value="72" >Faroe Islands</option>
                                                    <option value="73" >Fiji Islands</option>
                                                    <option value="74" >Finland</option>
                                                    <option value="75" >France</option>
                                                    <option value="76" >French Guiana</option>
                                                    <option value="77" >French Polynesia</option>
                                                    <option value="78" >French Southern Territories</option>
                                                    <option value="79" >Gabon</option>
                                                    <option value="80" >Gambia The</option>
                                                    <option value="81" >Georgia</option>
                                                    <option value="82" >Germany</option>
                                                    <option value="83" >Ghana</option>
                                                    <option value="84" >Gibraltar</option>
                                                    <option value="85" >Greece</option>
                                                    <option value="86" >Greenland</option>
                                                    <option value="87" >Grenada</option>
                                                    <option value="88" >Guadeloupe</option>
                                                    <option value="89" >Guam</option>
                                                    <option value="90" >Guatemala</option>
                                                    <option value="91" >Guernsey and Alderney</option>
                                                    <option value="92" >Guinea</option>
                                                    <option value="93" >Guinea-Bissau</option>
                                                    <option value="94" >Guyana</option>
                                                    <option value="95" >Haiti</option>
                                                    <option value="96" >Heard and McDonald Islands</option>
                                                    <option value="97" >Honduras</option>
                                                    <option value="98" >Hong Kong S.A.R.</option>
                                                    <option value="99" >Hungary</option>
                                                    <option value="100" >Iceland</option>
                                                    <option value="101" >India</option>
                                                    <option value="102" >Indonesia</option>
                                                    <option value="103" >Iran</option>
                                                    <option value="104" >Iraq</option>
                                                    <option value="105" >Ireland</option>
                                                    <option value="106" >Israel</option>
                                                    <option value="107" >Italy</option>
                                                    <option value="108" >Jamaica</option>
                                                    <option value="109" >Japan</option>
                                                    <option value="110" >Jersey</option>
                                                    <option value="111" >Jordan</option>
                                                    <option value="112" >Kazakhstan</option>
                                                    <option value="113" >Kenya</option>
                                                    <option value="114" >Kiribati</option>
                                                    <option value="115" >Korea North</option>
                                                    <option value="116" >Korea South</option>
                                                    <option value="117" >Kuwait</option>
                                                    <option value="118" >Kyrgyzstan</option>
                                                    <option value="119" >Laos</option>
                                                    <option value="120" >Latvia</option>
                                                    <option value="121" >Lebanon</option>
                                                    <option value="122" >Lesotho</option>
                                                    <option value="123" >Liberia</option>
                                                    <option value="124" >Libya</option>
                                                    <option value="125" >Liechtenstein</option>
                                                    <option value="126" >Lithuania</option>
                                                    <option value="127" >Luxembourg</option>
                                                    <option value="128" >Macau S.A.R.</option>
                                                    <option value="129" >Macedonia</option>
                                                    <option value="130" >Madagascar</option>
                                                    <option value="131" >Malawi</option>
                                                    <option value="132" >Malaysia</option>
                                                    <option value="133" >Maldives</option>
                                                    <option value="134" >Mali</option>
                                                    <option value="135" >Malta</option>
                                                    <option value="136" >Man (Isle of)</option>
                                                    <option value="137" >Marshall Islands</option>
                                                    <option value="138" >Martinique</option>
                                                    <option value="139" >Mauritania</option>
                                                    <option value="140" >Mauritius</option>
                                                    <option value="141" >Mayotte</option>
                                                    <option value="142" >Mexico</option>
                                                    <option value="143" >Micronesia</option>
                                                    <option value="144" >Moldova</option>
                                                    <option value="145" >Monaco</option>
                                                    <option value="146" >Mongolia</option>
                                                    <option value="147" >Montserrat</option>
                                                    <option value="148" >Morocco</option>
                                                    <option value="149" >Mozambique</option>
                                                    <option value="150" >Myanmar</option>
                                                    <option value="151" >Namibia</option>
                                                    <option value="152" >Nauru</option>
                                                    <option value="153" >Nepal</option>
                                                    <option value="154" >Netherlands Antilles</option>
                                                    <option value="155" >Netherlands The</option>
                                                    <option value="156" >New Caledonia</option>
                                                    <option value="157" >New Zealand</option>
                                                    <option value="158" >Nicaragua</option>
                                                    <option value="159" >Niger</option>
                                                    <option value="160" >Nigeria</option>
                                                    <option value="161" >Niue</option>
                                                    <option value="162" >Norfolk Island</option>
                                                    <option value="163" >Northern Mariana Islands</option>
                                                    <option value="164" >Norway</option>
                                                    <option value="165" >Oman</option>
                                                    <option value="166" >Pakistan</option>
                                                    <option value="167" >Palau</option>
                                                    <option value="168" >Palestinian Territory Occupied</option>
                                                    <option value="169" >Panama</option>
                                                    <option value="170" >Papua new Guinea</option>
                                                    <option value="171" >Paraguay</option>
                                                    <option value="172" >Peru</option>
                                                    <option value="173" >Philippines</option>
                                                    <option value="174" >Pitcairn Island</option>
                                                    <option value="175" >Poland</option>
                                                    <option value="176" >Portugal</option>
                                                    <option value="177" >Puerto Rico</option>
                                                    <option value="178" >Qatar</option>
                                                    <option value="179" >Reunion</option>
                                                    <option value="180" >Romania</option>
                                                    <option value="181" >Russia</option>
                                                    <option value="182" >Rwanda</option>
                                                    <option value="183" >Saint Helena</option>
                                                    <option value="184" >Saint Kitts And Nevis</option>
                                                    <option value="185" >Saint Lucia</option>
                                                    <option value="186" >Saint Pierre and Miquelon</option>
                                                    <option value="187" >Saint Vincent And The Grenadines</option>
                                                    <option value="188" >Samoa</option>
                                                    <option value="189" >San Marino</option>
                                                    <option value="190" >Sao Tome and Principe</option>
                                                    <option value="191" >Saudi Arabia</option>
                                                    <option value="192" >Senegal</option>
                                                    <option value="193" >Serbia</option>
                                                    <option value="194" >Seychelles</option>
                                                    <option value="195" >Sierra Leone</option>
                                                    <option value="196" >Singapore</option>
                                                    <option value="197" >Slovakia</option>
                                                    <option value="198" >Slovenia</option>
                                                    <option value="199" >Smaller Territories of the UK</option>
                                                    <option value="200" >Solomon Islands</option>
                                                    <option value="201" >Somalia</option>
                                                    <option value="202" >South Africa</option>
                                                    <option value="203" >South Georgia</option>
                                                    <option value="204" >South Sudan</option>
                                                    <option value="205" >Spain</option>
                                                    <option value="206" >Sri Lanka</option>
                                                    <option value="207" >Sudan</option>
                                                    <option value="208" >Suriname</option>
                                                    <option value="209" >Svalbard And Jan Mayen Islands</option>
                                                    <option value="210" >Swaziland</option>
                                                    <option value="211" >Sweden</option>
                                                    <option value="212" >Switzerland</option>
                                                    <option value="213" >Syria</option>
                                                    <option value="214" >Taiwan</option>
                                                    <option value="215" >Tajikistan</option>
                                                    <option value="216" >Tanzania</option>
                                                    <option value="217" >Thailand</option>
                                                    <option value="218" >Togo</option>
                                                    <option value="219" >Tokelau</option>
                                                    <option value="220" >Tonga</option>
                                                    <option value="221" >Trinidad And Tobago</option>
                                                    <option value="222" >Tunisia</option>
                                                    <option value="223" >Turkey</option>
                                                    <option value="224" >Turkmenistan</option>
                                                    <option value="225" >Turks And Caicos Islands</option>
                                                    <option value="226" >Tuvalu</option>
                                                    <option value="227" >Uganda</option>
                                                    <option value="228" >Ukraine</option>
                                                    <option value="229" >United Arab Emirates</option>
                                                    <option value="230" >United Kingdom</option>
                                                    <option value="231" >United States</option>
                                                    <option value="232" >United States Minor Outlying Islands</option>
                                                    <option value="233" >Uruguay</option>
                                                    <option value="234" >Uzbekistan</option>
                                                    <option value="235" >Vanuatu</option>
                                                    <option value="236" >Vatican City State (Holy See)</option>
                                                    <option value="237" >Venezuela</option>
                                                    <option value="238" >Vietnam</option>
                                                    <option value="239" >Virgin Islands (British)</option>
                                                    <option value="240" >Virgin Islands (US)</option>
                                                    <option value="241" >Wallis And Futuna Islands</option>
                                                    <option value="242" >Western Sahara</option>
                                                    <option value="243" >Yemen</option>
                                                    <option value="244" >Yugoslavia</option>
                                                    <option value="245" >Zambia</option>
                                                    <option value="246" >Zimbabwe</option>
                                            </select>
                                    </div>
                <div class="col-md-6">
                    <label for="present_state_id">State</label>
                    <select class="form-control aiz-selectpicker" name="present_state_id" id="present_state_id" data-live-search="true" required>

                    </select>
                                    </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="present_city_id">City</label>
                    <select class="form-control aiz-selectpicker" name="present_city_id" id="present_city_id" data-live-search="true" required>

                    </select>
                                    </div>
                <div class="col-md-6">
                    <label for="present_postal_code">Postal Code</label>
                    <input type="number" name=" ..o'" value="2280" class="form-control" placeholder="Postal Code" required>
                                    </div>
            </div>


            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>
    
    <!-- Education -->
          <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Education Info</h5>
        <div class="text-right">
            <a onclick="education_add_modal('42');"  href="javascript:void(0);" class="btn btn-sm btn-primary ">
              <i class="las mr-1 la-plus"></i>
              Add New
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table aiz-table">
            <tr>
                <th>Degree</th>
                <th>Institution</th>
                <th data-breakpoints="md">Start</th>
                <th data-breakpoints="md">End</th>
                <th data-breakpoints="md">Status</th>
                <th class="text-right">Options</th>
            </tr>

                                    <tr>
                <td>Doctorate</td>
                <td>University Of Texus</td>
                <td>2014</td>
                <td>2020</td>
                <td>
                    <label class="aiz-switch aiz-switch-success mb-0">
                        <input type="checkbox" id="status.0" onchange="update_education_present_status(this)" value="11"  checked  data-switch="success"/>
                        <span></span>
                    </label>
                </td>
                <td class="text-right">
                    <a href="javascript:void(0);" class="btn btn-soft-info btn-icon btn-circle btn-sm" onclick="education_edit_modal('11');" title="Edit">
                        <i class="las la-edit"></i>
                    </a>
                    <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="https://demo.activeitzone.com/matrimonial/education/destroy/11" title="Delete">
                        <i class="las la-trash"></i>
                    </a>
                </td>
            </tr>
                    </table>
    </div>
</div>
    
    <!-- Career -->
          <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Career</h5>
        <div class="text-right">
            <a onclick="career_add_modal('42');"  href="javascript:void(0);" class="btn btn-sm btn-primary ">
              <i class="las mr-1 la-plus"></i>
              Add New
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table aiz-table">
          <tr>
              <th>Designation</th>
              <th>company</th>
              <th data-breakpoints="md">Start</th>
              <th data-breakpoints="md">End</th>
              <th data-breakpoints="md">Status</th>
              <th data-breakpoints="md" class="text-right">Options</th>
          </tr>

                              <tr>
              <td>Mental health social worker</td>
              <td>Pro Star</td>
              <td>2020</td>
              <td>2030</td>
              <td>
                  <label class="aiz-switch aiz-switch-success mb-0">
                      <input type="checkbox" id="status.0" onchange="update_career_present_status(this)" value="11"  checked  data-switch="success"/>
                      <span></span>
                  </label>
              </td>
              <td class="text-right">
                  <a href="javascript:void(0);" class="btn btn-soft-info btn-icon btn-circle btn-sm" onclick="career_edit_modal('11');" title="Edit">
                      <i class="las la-edit"></i>
                  </a>
                  <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="https://demo.activeitzone.com/matrimonial/career/destroy/11" title="Delete">
                      <i class="las la-trash"></i>
                  </a>
              </td>
          </tr>
          
        </table>

    </div>
</div>
    
    <!-- Physical Attributes -->
          <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Physical Attributes</h5>
    </div>
    <div class="card-body">
      <form action="https://demo.activeitzone.com/matrimonial/physical-attribute/42" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">          <div class="form-group row">
              <div class="col-md-6">
                  <label for="height">Height (In Feet)</label>
                  <input type="number" name="height" value="5" step="0.1" class="form-control" placeholder="Height" required>
                                </div>
              <div class="col-md-6">
                  <label for="weight">Weight (In Kg)</label>
                  <input type="number" name="weight" value="60" step="0.1" placeholder="Weight" class="form-control" required>
                                </div>
          </div>

          <div class="form-group row">
              <div class="col-md-6">
                  <label for="eye_color">Eye color</label>
                  <input type="text" name="eye_color" value="Brown" class="form-control" placeholder="Eye color" required>
                                </div>
              <div class="col-md-6">
                  <label for="hair_color">Hair Color</label>
                  <input type="text" name="hair_color" value="Black" placeholder="Hair Color" class="form-control" required>
                                </div>
          </div>

          <div class="form-group row">
              <div class="col-md-6">
                  <label for="complexion">Complexion</label>
                  <input type="text" name="complexion" value="Fair skin, always burns, sometimes tans" class="form-control" placeholder="Complexion" required>
                                </div>
              <div class="col-md-6">
                  <label for="blood_group">Blood Group</label>
                  <input type="text" name="blood_group" value="O+" placeholder="Blood Group" class="form-control" required>
                                </div>
          </div>

          <div class="form-group row">
              <div class="col-md-6">
                  <label for="body_type">Body Type</label>
                  <input type="text" name="body_type" value="Medium" class="form-control" placeholder="Body Type" required>
                                </div>
              <div class="col-md-6">
                  <label for="body_art">Body Art</label>
                  <input type="text" name="body_art" value="Medium" placeholder="Body Art" class="form-control" required>
                                </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="disability">Disability</label>
                  <input type="text" name="disability" value="Recusandae Est nost" class="form-control" placeholder="Disability">
                                </div>
          </div>

          <div class="text-right">
              <button type="submit" class="btn btn-primary btn-sm">Update</button>
          </div>
      </form>
    </div>
</div>
    
    <!-- Language -->
          <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Language</h5>
    </div>
    <div class="card-body">
        <form action="https://demo.activeitzone.com/matrimonial/members/language_info_update/42" method="POST">
            <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">            <div class="form-group row">
                <div class="col-md-6">
                    <label for="diet">Mothere Tongue</label>
                    <select class="form-control aiz-selectpicker" name="mothere_tongue" data-live-search="true">
                        <option value="">Select One</option>
                                                    <option value="1"  selected > English </option>
                                                    <option value="5" > German </option>
                                                    <option value="6" > Hindi </option>
                                                    <option value="7" > Urdu </option>
                                                    <option value="8" > Arabic </option>
                                                    <option value="9" > Tamil </option>
                                                    <option value="10" > Chainese </option>
                                                    <option value="11" > Japanese </option>
                                                    <option value="12" > Datch </option>
                                                    <option value="13" > Spanish </option>
                                            </select>
                                    </div>
                <div class="col-md-6">
                    <label for="drink">Known Languages</label>
                                        <select class="form-control aiz-selectpicker" name="known_languages[]" data-live-search="true" multiple>
                        <option value="">Select</option>
                                                    <option value="1"  selected  >English </option>
                                                    <option value="5"  selected  >German </option>
                                                    <option value="6"  >Hindi </option>
                                                    <option value="7"  >Urdu </option>
                                                    <option value="8"  >Arabic </option>
                                                    <option value="9"  >Tamil </option>
                                                    <option value="10"  >Chainese </option>
                                                    <option value="11"  >Japanese </option>
                                                    <option value="12"  >Datch </option>
                                                    <option value="13"  >Spanish </option>
                                            </select>
                                    </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>
    
    <!-- Hobbies  -->
          <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Hobbies &amp; Interest</h5>
    </div>
    <div class="card-body">
      <form action="https://demo.activeitzone.com/matrimonial/hobbies/42" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">          <div class="form-group row">
              <div class="col-md-6">
                  <label for="hobbies">Hobbies</label>
                  <input type="text" name="hobbies" value="Astronomy,Traditional Sports" class="form-control" placeholder="Hobbies">
              </div>
              <div class="col-md-6">
                  <label for="interests">Interests</label>
                  <input type="text" name="interests" value="Astronomy" placeholder="Interests" class="form-control">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="music">Music</label>
                  <input type="text" name="music" value="Popular music" class="form-control" placeholder="Music">
              </div>
              <div class="col-md-6">
                  <label for="books">Books</label>
                  <input type="text" name="books" value="One Hundred Years of Solitude" placeholder="Books" class="form-control">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="movies">Movies</label>
                  <input type="text" name="movies" value="Munich(2005)" class="form-control" placeholder="Movies">
              </div>
              <div class="col-md-6">
                  <label for="tv_shows">TV Shows</label>
                  <input type="text" name="tv_shows" value="Drift Away(by The Doobie Brothers)" placeholder="TV Shows" class="form-control">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="sports">Sports</label>
                  <input type="text" name="sports" value="Cricket, Handall" class="form-control" placeholder="Sports">
              </div>
              <div class="col-md-6">
                  <label for="fitness_activities">Fitness Activitiess</label>
                  <input type="text" name="fitness_activities" value="Stable" placeholder="Fitness Activities" class="form-control">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="cuisines">Cuisines</label>
                  <input type="text" name="cuisines" value="Open-minded" class="form-control" placeholder="Cuisines">
              </div>
              <div class="col-md-6">
                  <label for="dress_styles">Dress Styles</label>
                  <input type="text" name="dress_styles" value="Midi Dress,Off the Shoulder" placeholder="Dress Styles" class="form-control">
              </div>
          </div>

          <div class="text-right">
              <button type="submit" class="btn btn-primary btn-sm">Update</button>
          </div>
      </form>
    </div>
</div>
    
    <!-- Personal Attitude & Behavior -->
          <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Personal Attitude &amp; Behavior</h5>
    </div>
    <div class="card-body">
      <form action="https://demo.activeitzone.com/matrimonial/attitudes/42" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">          <div class="form-group row">
              <div class="col-md-6">
                  <label for="affection">Affection</label>
                  <input type="text" name="affection" value="Tender attachment" class="form-control" placeholder="Affection">
                                </div>
              <div class="col-md-6">
                  <label for="humor">Humor</label>
                  <input type="text" name="humor" value="Incongruity, Slapstick" placeholder="Humor" class="form-control">
                                </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="political_views">Political Views</label>
                  <input type="text" name="political_views" value="Not interested" class="form-control" placeholder="Political Views">
              </div>
              <div class="col-md-6">
                  <label for="religious_service">Religious Service</label>
                  <input type="text" name="religious_service" value="Not interested" placeholder="Religious Service" class="form-control">
              </div>
          </div>

          <div class="text-right">
              <button type="submit" class="btn btn-primary btn-sm">Update</button>
          </div>
      </form>
    </div>
</div>
    
    <!-- Residency Information -->
          <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Residency Information</h5>
    </div>
    <div class="card-body">
      <form action="https://demo.activeitzone.com/matrimonial/recidencies/42" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">                    <div class="form-group row">
              <div class="col-md-6">
                  <label for="birth_country_id">Birth Country</label>
                  <select class="form-control aiz-selectpicker" name="birth_country_id" data-live-search="true">
                                                <option value="1"  >Afghanistan</option>
                                                <option value="2"  >Albania</option>
                                                <option value="3"  >Algeria</option>
                                                <option value="4"  >American Samoa</option>
                                                <option value="5"  >Andorra</option>
                                                <option value="6"  >Angola</option>
                                                <option value="7"  >Anguilla</option>
                                                <option value="8"  >Antarctica</option>
                                                <option value="9"  >Antigua And Barbuda</option>
                                                <option value="10"  >Argentina</option>
                                                <option value="11"  >Armenia</option>
                                                <option value="12"  >Aruba</option>
                                                <option value="13"  >Australia</option>
                                                <option value="14"  >Austria</option>
                                                <option value="15"  >Azerbaijan</option>
                                                <option value="16"  >Bahamas The</option>
                                                <option value="17"  >Bahrain</option>
                                                <option value="18"  >Bangladesh</option>
                                                <option value="19"  >Barbados</option>
                                                <option value="20"  >Belarus</option>
                                                <option value="21"  >Belgium</option>
                                                <option value="22"  >Belize</option>
                                                <option value="23"  >Benin</option>
                                                <option value="24"  >Bermuda</option>
                                                <option value="25"  >Bhutan</option>
                                                <option value="26"  >Bolivia</option>
                                                <option value="27"  >Bosnia and Herzegovina</option>
                                                <option value="28"  >Botswana</option>
                                                <option value="29"  >Bouvet Island</option>
                                                <option value="30"  >Brazil</option>
                                                <option value="31"  >British Indian Ocean Territory</option>
                                                <option value="32"  >Brunei</option>
                                                <option value="33"  >Bulgaria</option>
                                                <option value="34"  >Burkina Faso</option>
                                                <option value="35"  >Burundi</option>
                                                <option value="36"  >Cambodia</option>
                                                <option value="37"  >Cameroon</option>
                                                <option value="38"  >Canada</option>
                                                <option value="39"  >Cape Verde</option>
                                                <option value="40"  >Cayman Islands</option>
                                                <option value="41"  >Central African Republic</option>
                                                <option value="42"  >Chad</option>
                                                <option value="43"  >Chile</option>
                                                <option value="44"  >China</option>
                                                <option value="45"  >Christmas Island</option>
                                                <option value="46"  >Cocos (Keeling) Islands</option>
                                                <option value="47"  >Colombia</option>
                                                <option value="48"  >Comoros</option>
                                                <option value="49"  >Republic Of The Congo</option>
                                                <option value="50"  >Democratic Republic Of The Congo</option>
                                                <option value="51"  >Cook Islands</option>
                                                <option value="52"  >Costa Rica</option>
                                                <option value="53"  >Cote D&#039;Ivoire (Ivory Coast)</option>
                                                <option value="54"  >Croatia (Hrvatska)</option>
                                                <option value="55"  >Cuba</option>
                                                <option value="56"  >Cyprus</option>
                                                <option value="57"  >Czech Republic</option>
                                                <option value="58"  >Denmark</option>
                                                <option value="59"  >Djibouti</option>
                                                <option value="60"  >Dominica</option>
                                                <option value="61"  >Dominican Republic</option>
                                                <option value="62"  >East Timor</option>
                                                <option value="63"  >Ecuador</option>
                                                <option value="64"  >Egypt</option>
                                                <option value="65"  >El Salvador</option>
                                                <option value="66"  >Equatorial Guinea</option>
                                                <option value="67"  >Eritrea</option>
                                                <option value="68"  >Estonia</option>
                                                <option value="69"  >Ethiopia</option>
                                                <option value="70"  >External Territories of Australia</option>
                                                <option value="71"  >Falkland Islands</option>
                                                <option value="72"  >Faroe Islands</option>
                                                <option value="73"  >Fiji Islands</option>
                                                <option value="74"  >Finland</option>
                                                <option value="75"  >France</option>
                                                <option value="76"  >French Guiana</option>
                                                <option value="77"  >French Polynesia</option>
                                                <option value="78"  >French Southern Territories</option>
                                                <option value="79"  >Gabon</option>
                                                <option value="80"  >Gambia The</option>
                                                <option value="81"  >Georgia</option>
                                                <option value="82"  >Germany</option>
                                                <option value="83"  >Ghana</option>
                                                <option value="84"  >Gibraltar</option>
                                                <option value="85"  >Greece</option>
                                                <option value="86"  >Greenland</option>
                                                <option value="87"  >Grenada</option>
                                                <option value="88"  >Guadeloupe</option>
                                                <option value="89"  >Guam</option>
                                                <option value="90"  >Guatemala</option>
                                                <option value="91"  >Guernsey and Alderney</option>
                                                <option value="92"  >Guinea</option>
                                                <option value="93"  >Guinea-Bissau</option>
                                                <option value="94"  >Guyana</option>
                                                <option value="95"  >Haiti</option>
                                                <option value="96"  >Heard and McDonald Islands</option>
                                                <option value="97"  >Honduras</option>
                                                <option value="98"  >Hong Kong S.A.R.</option>
                                                <option value="99"  >Hungary</option>
                                                <option value="100"  >Iceland</option>
                                                <option value="101"  >India</option>
                                                <option value="102"  >Indonesia</option>
                                                <option value="103"  >Iran</option>
                                                <option value="104"  >Iraq</option>
                                                <option value="105"  >Ireland</option>
                                                <option value="106"  >Israel</option>
                                                <option value="107"  >Italy</option>
                                                <option value="108"  >Jamaica</option>
                                                <option value="109"  >Japan</option>
                                                <option value="110"  >Jersey</option>
                                                <option value="111"  >Jordan</option>
                                                <option value="112"  >Kazakhstan</option>
                                                <option value="113"  >Kenya</option>
                                                <option value="114"  >Kiribati</option>
                                                <option value="115"  >Korea North</option>
                                                <option value="116"  >Korea South</option>
                                                <option value="117"  >Kuwait</option>
                                                <option value="118"  >Kyrgyzstan</option>
                                                <option value="119"  >Laos</option>
                                                <option value="120"  >Latvia</option>
                                                <option value="121"  >Lebanon</option>
                                                <option value="122"  >Lesotho</option>
                                                <option value="123"  >Liberia</option>
                                                <option value="124"  >Libya</option>
                                                <option value="125"  >Liechtenstein</option>
                                                <option value="126"  >Lithuania</option>
                                                <option value="127"  >Luxembourg</option>
                                                <option value="128"  >Macau S.A.R.</option>
                                                <option value="129"  >Macedonia</option>
                                                <option value="130"  >Madagascar</option>
                                                <option value="131"  >Malawi</option>
                                                <option value="132"  >Malaysia</option>
                                                <option value="133"  >Maldives</option>
                                                <option value="134"  >Mali</option>
                                                <option value="135"  >Malta</option>
                                                <option value="136"  >Man (Isle of)</option>
                                                <option value="137"  >Marshall Islands</option>
                                                <option value="138"  >Martinique</option>
                                                <option value="139"  >Mauritania</option>
                                                <option value="140"  >Mauritius</option>
                                                <option value="141"  >Mayotte</option>
                                                <option value="142"  >Mexico</option>
                                                <option value="143"  >Micronesia</option>
                                                <option value="144"  >Moldova</option>
                                                <option value="145"  >Monaco</option>
                                                <option value="146"  >Mongolia</option>
                                                <option value="147"  >Montserrat</option>
                                                <option value="148"  >Morocco</option>
                                                <option value="149"  >Mozambique</option>
                                                <option value="150"  >Myanmar</option>
                                                <option value="151"  >Namibia</option>
                                                <option value="152"  >Nauru</option>
                                                <option value="153"  >Nepal</option>
                                                <option value="154"  >Netherlands Antilles</option>
                                                <option value="155"  >Netherlands The</option>
                                                <option value="156"  >New Caledonia</option>
                                                <option value="157"  >New Zealand</option>
                                                <option value="158"  >Nicaragua</option>
                                                <option value="159"  >Niger</option>
                                                <option value="160"  >Nigeria</option>
                                                <option value="161"  >Niue</option>
                                                <option value="162"  >Norfolk Island</option>
                                                <option value="163"  >Northern Mariana Islands</option>
                                                <option value="164"  >Norway</option>
                                                <option value="165"  >Oman</option>
                                                <option value="166"  >Pakistan</option>
                                                <option value="167"  >Palau</option>
                                                <option value="168"  >Palestinian Territory Occupied</option>
                                                <option value="169"  >Panama</option>
                                                <option value="170"  >Papua new Guinea</option>
                                                <option value="171"  >Paraguay</option>
                                                <option value="172"  >Peru</option>
                                                <option value="173"  >Philippines</option>
                                                <option value="174"  >Pitcairn Island</option>
                                                <option value="175"  >Poland</option>
                                                <option value="176"  >Portugal</option>
                                                <option value="177"  >Puerto Rico</option>
                                                <option value="178"  >Qatar</option>
                                                <option value="179"  >Reunion</option>
                                                <option value="180"  >Romania</option>
                                                <option value="181"  >Russia</option>
                                                <option value="182"  >Rwanda</option>
                                                <option value="183"  >Saint Helena</option>
                                                <option value="184"  >Saint Kitts And Nevis</option>
                                                <option value="185"  >Saint Lucia</option>
                                                <option value="186"  >Saint Pierre and Miquelon</option>
                                                <option value="187"  >Saint Vincent And The Grenadines</option>
                                                <option value="188"  >Samoa</option>
                                                <option value="189"  >San Marino</option>
                                                <option value="190"  >Sao Tome and Principe</option>
                                                <option value="191"  >Saudi Arabia</option>
                                                <option value="192"  >Senegal</option>
                                                <option value="193"  >Serbia</option>
                                                <option value="194"  >Seychelles</option>
                                                <option value="195"  >Sierra Leone</option>
                                                <option value="196"  >Singapore</option>
                                                <option value="197"  >Slovakia</option>
                                                <option value="198"  >Slovenia</option>
                                                <option value="199"  >Smaller Territories of the UK</option>
                                                <option value="200"  >Solomon Islands</option>
                                                <option value="201"  >Somalia</option>
                                                <option value="202"  >South Africa</option>
                                                <option value="203"  >South Georgia</option>
                                                <option value="204"  >South Sudan</option>
                                                <option value="205"  >Spain</option>
                                                <option value="206"  >Sri Lanka</option>
                                                <option value="207"  >Sudan</option>
                                                <option value="208"  >Suriname</option>
                                                <option value="209"  >Svalbard And Jan Mayen Islands</option>
                                                <option value="210"  >Swaziland</option>
                                                <option value="211"  >Sweden</option>
                                                <option value="212"  >Switzerland</option>
                                                <option value="213"  >Syria</option>
                                                <option value="214"  >Taiwan</option>
                                                <option value="215"  >Tajikistan</option>
                                                <option value="216"  >Tanzania</option>
                                                <option value="217"  >Thailand</option>
                                                <option value="218"  >Togo</option>
                                                <option value="219"  >Tokelau</option>
                                                <option value="220"  >Tonga</option>
                                                <option value="221"  >Trinidad And Tobago</option>
                                                <option value="222"  >Tunisia</option>
                                                <option value="223"  >Turkey</option>
                                                <option value="224"  >Turkmenistan</option>
                                                <option value="225"  >Turks And Caicos Islands</option>
                                                <option value="226"  >Tuvalu</option>
                                                <option value="227"  >Uganda</option>
                                                <option value="228"  >Ukraine</option>
                                                <option value="229"  >United Arab Emirates</option>
                                                <option value="230"  >United Kingdom</option>
                                                <option value="231"  >United States</option>
                                                <option value="232"  >United States Minor Outlying Islands</option>
                                                <option value="233"  >Uruguay</option>
                                                <option value="234"  >Uzbekistan</option>
                                                <option value="235"  >Vanuatu</option>
                                                <option value="236"  >Vatican City State (Holy See)</option>
                                                <option value="237"  >Venezuela</option>
                                                <option value="238"  >Vietnam</option>
                                                <option value="239"  >Virgin Islands (British)</option>
                                                <option value="240"  >Virgin Islands (US)</option>
                                                <option value="241"  >Wallis And Futuna Islands</option>
                                                <option value="242"  >Western Sahara</option>
                                                <option value="243"  >Yemen</option>
                                                <option value="244"  >Yugoslavia</option>
                                                <option value="245"  >Zambia</option>
                                                <option value="246"  >Zimbabwe</option>
                                        </select>
              </div>
              <div class="col-md-6">
                  <label for="recidency_country_id">Recidency Country</label>
                  <select class="form-control aiz-selectpicker" name="recidency_country_id" data-live-search="true">
                                                <option value="1"  >Afghanistan</option>
                                                <option value="2"  >Albania</option>
                                                <option value="3"  >Algeria</option>
                                                <option value="4"  >American Samoa</option>
                                                <option value="5"  >Andorra</option>
                                                <option value="6"  >Angola</option>
                                                <option value="7"  >Anguilla</option>
                                                <option value="8"  >Antarctica</option>
                                                <option value="9"  >Antigua And Barbuda</option>
                                                <option value="10"  >Argentina</option>
                                                <option value="11"  >Armenia</option>
                                                <option value="12"  >Aruba</option>
                                                <option value="13"  >Australia</option>
                                                <option value="14"  >Austria</option>
                                                <option value="15"  >Azerbaijan</option>
                                                <option value="16"  >Bahamas The</option>
                                                <option value="17"  >Bahrain</option>
                                                <option value="18"  >Bangladesh</option>
                                                <option value="19"  >Barbados</option>
                                                <option value="20"  >Belarus</option>
                                                <option value="21"  >Belgium</option>
                                                <option value="22"  >Belize</option>
                                                <option value="23"  >Benin</option>
                                                <option value="24"  >Bermuda</option>
                                                <option value="25"  >Bhutan</option>
                                                <option value="26"  >Bolivia</option>
                                                <option value="27"  >Bosnia and Herzegovina</option>
                                                <option value="28"  >Botswana</option>
                                                <option value="29"  >Bouvet Island</option>
                                                <option value="30"  >Brazil</option>
                                                <option value="31"  >British Indian Ocean Territory</option>
                                                <option value="32"  >Brunei</option>
                                                <option value="33"  >Bulgaria</option>
                                                <option value="34"  >Burkina Faso</option>
                                                <option value="35"  >Burundi</option>
                                                <option value="36"  >Cambodia</option>
                                                <option value="37"  >Cameroon</option>
                                                <option value="38"  >Canada</option>
                                                <option value="39"  >Cape Verde</option>
                                                <option value="40"  >Cayman Islands</option>
                                                <option value="41"  >Central African Republic</option>
                                                <option value="42"  >Chad</option>
                                                <option value="43"  >Chile</option>
                                                <option value="44"  >China</option>
                                                <option value="45"  >Christmas Island</option>
                                                <option value="46"  >Cocos (Keeling) Islands</option>
                                                <option value="47"  >Colombia</option>
                                                <option value="48"  >Comoros</option>
                                                <option value="49"  >Republic Of The Congo</option>
                                                <option value="50"  >Democratic Republic Of The Congo</option>
                                                <option value="51"  >Cook Islands</option>
                                                <option value="52"  >Costa Rica</option>
                                                <option value="53"  >Cote D&#039;Ivoire (Ivory Coast)</option>
                                                <option value="54"  >Croatia (Hrvatska)</option>
                                                <option value="55"  >Cuba</option>
                                                <option value="56"  >Cyprus</option>
                                                <option value="57"  >Czech Republic</option>
                                                <option value="58"  >Denmark</option>
                                                <option value="59"  >Djibouti</option>
                                                <option value="60"  >Dominica</option>
                                                <option value="61"  >Dominican Republic</option>
                                                <option value="62"  >East Timor</option>
                                                <option value="63"  >Ecuador</option>
                                                <option value="64"  >Egypt</option>
                                                <option value="65"  >El Salvador</option>
                                                <option value="66"  >Equatorial Guinea</option>
                                                <option value="67"  >Eritrea</option>
                                                <option value="68"  >Estonia</option>
                                                <option value="69"  >Ethiopia</option>
                                                <option value="70"  >External Territories of Australia</option>
                                                <option value="71"  >Falkland Islands</option>
                                                <option value="72"  >Faroe Islands</option>
                                                <option value="73"  >Fiji Islands</option>
                                                <option value="74"  >Finland</option>
                                                <option value="75"  >France</option>
                                                <option value="76"  >French Guiana</option>
                                                <option value="77"  >French Polynesia</option>
                                                <option value="78"  >French Southern Territories</option>
                                                <option value="79"  >Gabon</option>
                                                <option value="80"  >Gambia The</option>
                                                <option value="81"  >Georgia</option>
                                                <option value="82"  >Germany</option>
                                                <option value="83"  >Ghana</option>
                                                <option value="84"  >Gibraltar</option>
                                                <option value="85"  >Greece</option>
                                                <option value="86"  >Greenland</option>
                                                <option value="87"  >Grenada</option>
                                                <option value="88"  >Guadeloupe</option>
                                                <option value="89"  >Guam</option>
                                                <option value="90"  >Guatemala</option>
                                                <option value="91"  >Guernsey and Alderney</option>
                                                <option value="92"  >Guinea</option>
                                                <option value="93"  >Guinea-Bissau</option>
                                                <option value="94"  >Guyana</option>
                                                <option value="95"  >Haiti</option>
                                                <option value="96"  >Heard and McDonald Islands</option>
                                                <option value="97"  >Honduras</option>
                                                <option value="98"  >Hong Kong S.A.R.</option>
                                                <option value="99"  >Hungary</option>
                                                <option value="100"  >Iceland</option>
                                                <option value="101"  >India</option>
                                                <option value="102"  >Indonesia</option>
                                                <option value="103"  >Iran</option>
                                                <option value="104"  >Iraq</option>
                                                <option value="105"  >Ireland</option>
                                                <option value="106"  >Israel</option>
                                                <option value="107"  >Italy</option>
                                                <option value="108"  >Jamaica</option>
                                                <option value="109"  >Japan</option>
                                                <option value="110"  >Jersey</option>
                                                <option value="111"  >Jordan</option>
                                                <option value="112"  >Kazakhstan</option>
                                                <option value="113"  >Kenya</option>
                                                <option value="114"  >Kiribati</option>
                                                <option value="115"  >Korea North</option>
                                                <option value="116"  >Korea South</option>
                                                <option value="117"  >Kuwait</option>
                                                <option value="118"  >Kyrgyzstan</option>
                                                <option value="119"  >Laos</option>
                                                <option value="120"  >Latvia</option>
                                                <option value="121"  >Lebanon</option>
                                                <option value="122"  >Lesotho</option>
                                                <option value="123"  >Liberia</option>
                                                <option value="124"  >Libya</option>
                                                <option value="125"  >Liechtenstein</option>
                                                <option value="126"  >Lithuania</option>
                                                <option value="127"  >Luxembourg</option>
                                                <option value="128"  >Macau S.A.R.</option>
                                                <option value="129"  >Macedonia</option>
                                                <option value="130"  >Madagascar</option>
                                                <option value="131"  >Malawi</option>
                                                <option value="132"  >Malaysia</option>
                                                <option value="133"  >Maldives</option>
                                                <option value="134"  >Mali</option>
                                                <option value="135"  >Malta</option>
                                                <option value="136"  >Man (Isle of)</option>
                                                <option value="137"  >Marshall Islands</option>
                                                <option value="138"  >Martinique</option>
                                                <option value="139"  >Mauritania</option>
                                                <option value="140"  >Mauritius</option>
                                                <option value="141"  >Mayotte</option>
                                                <option value="142"  >Mexico</option>
                                                <option value="143"  >Micronesia</option>
                                                <option value="144"  >Moldova</option>
                                                <option value="145"  >Monaco</option>
                                                <option value="146"  >Mongolia</option>
                                                <option value="147"  >Montserrat</option>
                                                <option value="148"  >Morocco</option>
                                                <option value="149"  >Mozambique</option>
                                                <option value="150"  >Myanmar</option>
                                                <option value="151"  >Namibia</option>
                                                <option value="152"  >Nauru</option>
                                                <option value="153"  >Nepal</option>
                                                <option value="154"  >Netherlands Antilles</option>
                                                <option value="155"  >Netherlands The</option>
                                                <option value="156"  >New Caledonia</option>
                                                <option value="157"  >New Zealand</option>
                                                <option value="158"  >Nicaragua</option>
                                                <option value="159"  >Niger</option>
                                                <option value="160"  >Nigeria</option>
                                                <option value="161"  >Niue</option>
                                                <option value="162"  >Norfolk Island</option>
                                                <option value="163"  >Northern Mariana Islands</option>
                                                <option value="164"  >Norway</option>
                                                <option value="165"  >Oman</option>
                                                <option value="166"  >Pakistan</option>
                                                <option value="167"  >Palau</option>
                                                <option value="168"  >Palestinian Territory Occupied</option>
                                                <option value="169"  >Panama</option>
                                                <option value="170"  >Papua new Guinea</option>
                                                <option value="171"  >Paraguay</option>
                                                <option value="172"  >Peru</option>
                                                <option value="173"  >Philippines</option>
                                                <option value="174"  >Pitcairn Island</option>
                                                <option value="175"  >Poland</option>
                                                <option value="176"  >Portugal</option>
                                                <option value="177"  >Puerto Rico</option>
                                                <option value="178"  >Qatar</option>
                                                <option value="179"  >Reunion</option>
                                                <option value="180"  >Romania</option>
                                                <option value="181"  >Russia</option>
                                                <option value="182"  >Rwanda</option>
                                                <option value="183"  >Saint Helena</option>
                                                <option value="184"  >Saint Kitts And Nevis</option>
                                                <option value="185"  >Saint Lucia</option>
                                                <option value="186"  >Saint Pierre and Miquelon</option>
                                                <option value="187"  >Saint Vincent And The Grenadines</option>
                                                <option value="188"  >Samoa</option>
                                                <option value="189"  >San Marino</option>
                                                <option value="190"  >Sao Tome and Principe</option>
                                                <option value="191"  >Saudi Arabia</option>
                                                <option value="192"  >Senegal</option>
                                                <option value="193"  >Serbia</option>
                                                <option value="194"  >Seychelles</option>
                                                <option value="195"  >Sierra Leone</option>
                                                <option value="196"  >Singapore</option>
                                                <option value="197"  >Slovakia</option>
                                                <option value="198"  >Slovenia</option>
                                                <option value="199"  >Smaller Territories of the UK</option>
                                                <option value="200"  >Solomon Islands</option>
                                                <option value="201"  >Somalia</option>
                                                <option value="202"  >South Africa</option>
                                                <option value="203"  >South Georgia</option>
                                                <option value="204"  >South Sudan</option>
                                                <option value="205"  >Spain</option>
                                                <option value="206"  >Sri Lanka</option>
                                                <option value="207"  >Sudan</option>
                                                <option value="208"  >Suriname</option>
                                                <option value="209"  >Svalbard And Jan Mayen Islands</option>
                                                <option value="210"  >Swaziland</option>
                                                <option value="211"  >Sweden</option>
                                                <option value="212"  >Switzerland</option>
                                                <option value="213"  >Syria</option>
                                                <option value="214"  >Taiwan</option>
                                                <option value="215"  >Tajikistan</option>
                                                <option value="216"  >Tanzania</option>
                                                <option value="217"  >Thailand</option>
                                                <option value="218"  >Togo</option>
                                                <option value="219"  >Tokelau</option>
                                                <option value="220"  >Tonga</option>
                                                <option value="221"  >Trinidad And Tobago</option>
                                                <option value="222"  >Tunisia</option>
                                                <option value="223"  >Turkey</option>
                                                <option value="224"  >Turkmenistan</option>
                                                <option value="225"  >Turks And Caicos Islands</option>
                                                <option value="226"  >Tuvalu</option>
                                                <option value="227"  >Uganda</option>
                                                <option value="228"  >Ukraine</option>
                                                <option value="229"  >United Arab Emirates</option>
                                                <option value="230"  >United Kingdom</option>
                                                <option value="231"  >United States</option>
                                                <option value="232"  >United States Minor Outlying Islands</option>
                                                <option value="233"  >Uruguay</option>
                                                <option value="234"  >Uzbekistan</option>
                                                <option value="235"  >Vanuatu</option>
                                                <option value="236"  >Vatican City State (Holy See)</option>
                                                <option value="237"  >Venezuela</option>
                                                <option value="238"  >Vietnam</option>
                                                <option value="239"  >Virgin Islands (British)</option>
                                                <option value="240"  >Virgin Islands (US)</option>
                                                <option value="241"  >Wallis And Futuna Islands</option>
                                                <option value="242"  >Western Sahara</option>
                                                <option value="243"  >Yemen</option>
                                                <option value="244"  >Yugoslavia</option>
                                                <option value="245"  >Zambia</option>
                                                <option value="246"  >Zimbabwe</option>
                                        </select>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="growup_country_id">Growup Country</label>
                  <select class="form-control aiz-selectpicker" name="growup_country_id" data-live-search="true">
                                                <option value="1"  >Afghanistan</option>
                                                <option value="2"  >Albania</option>
                                                <option value="3"  >Algeria</option>
                                                <option value="4"  >American Samoa</option>
                                                <option value="5"  >Andorra</option>
                                                <option value="6"  >Angola</option>
                                                <option value="7"  >Anguilla</option>
                                                <option value="8"  >Antarctica</option>
                                                <option value="9"  >Antigua And Barbuda</option>
                                                <option value="10"  >Argentina</option>
                                                <option value="11"  >Armenia</option>
                                                <option value="12"  >Aruba</option>
                                                <option value="13"  >Australia</option>
                                                <option value="14"  >Austria</option>
                                                <option value="15"  >Azerbaijan</option>
                                                <option value="16"  >Bahamas The</option>
                                                <option value="17"  >Bahrain</option>
                                                <option value="18"  >Bangladesh</option>
                                                <option value="19"  >Barbados</option>
                                                <option value="20"  >Belarus</option>
                                                <option value="21"  >Belgium</option>
                                                <option value="22"  >Belize</option>
                                                <option value="23"  >Benin</option>
                                                <option value="24"  >Bermuda</option>
                                                <option value="25"  >Bhutan</option>
                                                <option value="26"  >Bolivia</option>
                                                <option value="27"  >Bosnia and Herzegovina</option>
                                                <option value="28"  >Botswana</option>
                                                <option value="29"  >Bouvet Island</option>
                                                <option value="30"  >Brazil</option>
                                                <option value="31"  >British Indian Ocean Territory</option>
                                                <option value="32"  >Brunei</option>
                                                <option value="33"  >Bulgaria</option>
                                                <option value="34"  >Burkina Faso</option>
                                                <option value="35"  >Burundi</option>
                                                <option value="36"  >Cambodia</option>
                                                <option value="37"  >Cameroon</option>
                                                <option value="38"  >Canada</option>
                                                <option value="39"  >Cape Verde</option>
                                                <option value="40"  >Cayman Islands</option>
                                                <option value="41"  >Central African Republic</option>
                                                <option value="42"  >Chad</option>
                                                <option value="43"  >Chile</option>
                                                <option value="44"  >China</option>
                                                <option value="45"  >Christmas Island</option>
                                                <option value="46"  >Cocos (Keeling) Islands</option>
                                                <option value="47"  >Colombia</option>
                                                <option value="48"  >Comoros</option>
                                                <option value="49"  >Republic Of The Congo</option>
                                                <option value="50"  >Democratic Republic Of The Congo</option>
                                                <option value="51"  >Cook Islands</option>
                                                <option value="52"  >Costa Rica</option>
                                                <option value="53"  >Cote D&#039;Ivoire (Ivory Coast)</option>
                                                <option value="54"  >Croatia (Hrvatska)</option>
                                                <option value="55"  >Cuba</option>
                                                <option value="56"  >Cyprus</option>
                                                <option value="57"  >Czech Republic</option>
                                                <option value="58"  >Denmark</option>
                                                <option value="59"  >Djibouti</option>
                                                <option value="60"  >Dominica</option>
                                                <option value="61"  >Dominican Republic</option>
                                                <option value="62"  >East Timor</option>
                                                <option value="63"  >Ecuador</option>
                                                <option value="64"  >Egypt</option>
                                                <option value="65"  >El Salvador</option>
                                                <option value="66"  >Equatorial Guinea</option>
                                                <option value="67"  >Eritrea</option>
                                                <option value="68"  >Estonia</option>
                                                <option value="69"  >Ethiopia</option>
                                                <option value="70"  >External Territories of Australia</option>
                                                <option value="71"  >Falkland Islands</option>
                                                <option value="72"  >Faroe Islands</option>
                                                <option value="73"  >Fiji Islands</option>
                                                <option value="74"  >Finland</option>
                                                <option value="75"  >France</option>
                                                <option value="76"  >French Guiana</option>
                                                <option value="77"  >French Polynesia</option>
                                                <option value="78"  >French Southern Territories</option>
                                                <option value="79"  >Gabon</option>
                                                <option value="80"  >Gambia The</option>
                                                <option value="81"  >Georgia</option>
                                                <option value="82"  >Germany</option>
                                                <option value="83"  >Ghana</option>
                                                <option value="84"  >Gibraltar</option>
                                                <option value="85"  >Greece</option>
                                                <option value="86"  >Greenland</option>
                                                <option value="87"  >Grenada</option>
                                                <option value="88"  >Guadeloupe</option>
                                                <option value="89"  >Guam</option>
                                                <option value="90"  >Guatemala</option>
                                                <option value="91"  >Guernsey and Alderney</option>
                                                <option value="92"  >Guinea</option>
                                                <option value="93"  >Guinea-Bissau</option>
                                                <option value="94"  >Guyana</option>
                                                <option value="95"  >Haiti</option>
                                                <option value="96"  >Heard and McDonald Islands</option>
                                                <option value="97"  >Honduras</option>
                                                <option value="98"  >Hong Kong S.A.R.</option>
                                                <option value="99"  >Hungary</option>
                                                <option value="100"  >Iceland</option>
                                                <option value="101"  >India</option>
                                                <option value="102"  >Indonesia</option>
                                                <option value="103"  >Iran</option>
                                                <option value="104"  >Iraq</option>
                                                <option value="105"  >Ireland</option>
                                                <option value="106"  >Israel</option>
                                                <option value="107"  >Italy</option>
                                                <option value="108"  >Jamaica</option>
                                                <option value="109"  >Japan</option>
                                                <option value="110"  >Jersey</option>
                                                <option value="111"  >Jordan</option>
                                                <option value="112"  >Kazakhstan</option>
                                                <option value="113"  >Kenya</option>
                                                <option value="114"  >Kiribati</option>
                                                <option value="115"  >Korea North</option>
                                                <option value="116"  >Korea South</option>
                                                <option value="117"  >Kuwait</option>
                                                <option value="118"  >Kyrgyzstan</option>
                                                <option value="119"  >Laos</option>
                                                <option value="120"  >Latvia</option>
                                                <option value="121"  >Lebanon</option>
                                                <option value="122"  >Lesotho</option>
                                                <option value="123"  >Liberia</option>
                                                <option value="124"  >Libya</option>
                                                <option value="125"  >Liechtenstein</option>
                                                <option value="126"  >Lithuania</option>
                                                <option value="127"  >Luxembourg</option>
                                                <option value="128"  >Macau S.A.R.</option>
                                                <option value="129"  >Macedonia</option>
                                                <option value="130"  >Madagascar</option>
                                                <option value="131"  >Malawi</option>
                                                <option value="132"  >Malaysia</option>
                                                <option value="133"  >Maldives</option>
                                                <option value="134"  >Mali</option>
                                                <option value="135"  >Malta</option>
                                                <option value="136"  >Man (Isle of)</option>
                                                <option value="137"  >Marshall Islands</option>
                                                <option value="138"  >Martinique</option>
                                                <option value="139"  >Mauritania</option>
                                                <option value="140"  >Mauritius</option>
                                                <option value="141"  >Mayotte</option>
                                                <option value="142"  >Mexico</option>
                                                <option value="143"  >Micronesia</option>
                                                <option value="144"  >Moldova</option>
                                                <option value="145"  >Monaco</option>
                                                <option value="146"  >Mongolia</option>
                                                <option value="147"  >Montserrat</option>
                                                <option value="148"  >Morocco</option>
                                                <option value="149"  >Mozambique</option>
                                                <option value="150"  >Myanmar</option>
                                                <option value="151"  >Namibia</option>
                                                <option value="152"  >Nauru</option>
                                                <option value="153"  >Nepal</option>
                                                <option value="154"  >Netherlands Antilles</option>
                                                <option value="155"  >Netherlands The</option>
                                                <option value="156"  >New Caledonia</option>
                                                <option value="157"  >New Zealand</option>
                                                <option value="158"  >Nicaragua</option>
                                                <option value="159"  >Niger</option>
                                                <option value="160"  >Nigeria</option>
                                                <option value="161"  >Niue</option>
                                                <option value="162"  >Norfolk Island</option>
                                                <option value="163"  >Northern Mariana Islands</option>
                                                <option value="164"  >Norway</option>
                                                <option value="165"  >Oman</option>
                                                <option value="166"  >Pakistan</option>
                                                <option value="167"  >Palau</option>
                                                <option value="168"  >Palestinian Territory Occupied</option>
                                                <option value="169"  >Panama</option>
                                                <option value="170"  >Papua new Guinea</option>
                                                <option value="171"  >Paraguay</option>
                                                <option value="172"  >Peru</option>
                                                <option value="173"  >Philippines</option>
                                                <option value="174"  >Pitcairn Island</option>
                                                <option value="175"  >Poland</option>
                                                <option value="176"  >Portugal</option>
                                                <option value="177"  >Puerto Rico</option>
                                                <option value="178"  >Qatar</option>
                                                <option value="179"  >Reunion</option>
                                                <option value="180"  >Romania</option>
                                                <option value="181"  >Russia</option>
                                                <option value="182"  >Rwanda</option>
                                                <option value="183"  >Saint Helena</option>
                                                <option value="184"  >Saint Kitts And Nevis</option>
                                                <option value="185"  >Saint Lucia</option>
                                                <option value="186"  >Saint Pierre and Miquelon</option>
                                                <option value="187"  >Saint Vincent And The Grenadines</option>
                                                <option value="188"  >Samoa</option>
                                                <option value="189"  >San Marino</option>
                                                <option value="190"  >Sao Tome and Principe</option>
                                                <option value="191"  >Saudi Arabia</option>
                                                <option value="192"  >Senegal</option>
                                                <option value="193"  >Serbia</option>
                                                <option value="194"  >Seychelles</option>
                                                <option value="195"  >Sierra Leone</option>
                                                <option value="196"  >Singapore</option>
                                                <option value="197"  >Slovakia</option>
                                                <option value="198"  >Slovenia</option>
                                                <option value="199"  >Smaller Territories of the UK</option>
                                                <option value="200"  >Solomon Islands</option>
                                                <option value="201"  >Somalia</option>
                                                <option value="202"  >South Africa</option>
                                                <option value="203"  >South Georgia</option>
                                                <option value="204"  >South Sudan</option>
                                                <option value="205"  >Spain</option>
                                                <option value="206"  >Sri Lanka</option>
                                                <option value="207"  >Sudan</option>
                                                <option value="208"  >Suriname</option>
                                                <option value="209"  >Svalbard And Jan Mayen Islands</option>
                                                <option value="210"  >Swaziland</option>
                                                <option value="211"  >Sweden</option>
                                                <option value="212"  >Switzerland</option>
                                                <option value="213"  >Syria</option>
                                                <option value="214"  >Taiwan</option>
                                                <option value="215"  >Tajikistan</option>
                                                <option value="216"  >Tanzania</option>
                                                <option value="217"  >Thailand</option>
                                                <option value="218"  >Togo</option>
                                                <option value="219"  >Tokelau</option>
                                                <option value="220"  >Tonga</option>
                                                <option value="221"  >Trinidad And Tobago</option>
                                                <option value="222"  >Tunisia</option>
                                                <option value="223"  >Turkey</option>
                                                <option value="224"  >Turkmenistan</option>
                                                <option value="225"  >Turks And Caicos Islands</option>
                                                <option value="226"  >Tuvalu</option>
                                                <option value="227"  >Uganda</option>
                                                <option value="228"  >Ukraine</option>
                                                <option value="229"  >United Arab Emirates</option>
                                                <option value="230"  >United Kingdom</option>
                                                <option value="231"  >United States</option>
                                                <option value="232"  >United States Minor Outlying Islands</option>
                                                <option value="233"  >Uruguay</option>
                                                <option value="234"  >Uzbekistan</option>
                                                <option value="235"  >Vanuatu</option>
                                                <option value="236"  >Vatican City State (Holy See)</option>
                                                <option value="237"  >Venezuela</option>
                                                <option value="238"  >Vietnam</option>
                                                <option value="239"  >Virgin Islands (British)</option>
                                                <option value="240"  >Virgin Islands (US)</option>
                                                <option value="241"  >Wallis And Futuna Islands</option>
                                                <option value="242"  >Western Sahara</option>
                                                <option value="243"  >Yemen</option>
                                                <option value="244"  >Yugoslavia</option>
                                                <option value="245"  >Zambia</option>
                                                <option value="246"  >Zimbabwe</option>
                                        </select>
              </div>
              <div class="col-md-6">
                  <label for="immigration_status">Immigration Status</label>
                  <input type="text" name="immigration_status" value="" placeholder="Immigration Status" class="form-control">
                                </div>
          </div>

          <div class="text-right">
              <button type="submit" class="btn btn-primary btn-sm">Update</button>
          </div>
      </form>
    </div>
  </div>
    
    <!-- Spiritual & Social Background -->
              <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Spiritual &amp; Social Background</h5>
    </div>
    <div class="card-body">
      <form action="https://demo.activeitzone.com/matrimonial/spiritual_backgrounds/42" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">          <input type="hidden" name="address_type" value="present">
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="member_religion_id">Religion</label>
                  <select class="form-control aiz-selectpicker" name="member_religion_id" id="member_religion_id" data-live-search="true" required>
                      <option value="">Select One</option>
                                                <option value="1"  selected > Islam </option>
                                                <option value="2" > Judaismm </option>
                                                <option value="3" > Hinduism </option>
                                                <option value="4" > Christianity </option>
                                                <option value="5" > Buddhism </option>
                                                <option value="6" > Jainism </option>
                                                <option value="7" > Baha&#039;i </option>
                                                <option value="8" > Sikhism </option>
                                                <option value="9" > Confucianism </option>
                                                <option value="10" > Atheism </option>
                                                <option value="19" > இந்து தமிழ் </option>
                                        </select>
                                </div>
              <div class="col-md-6">
                  <label for="member_caste_id">Caste</label>
                  <select class="form-control aiz-selectpicker" name="member_caste_id" id="member_caste_id" data-live-search="true" required>

                  </select>
                                </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="member_sub_caste_id">Sub Caste</label>
                  <select class="form-control aiz-selectpicker" name="member_sub_caste_id" id="member_sub_caste_id" data-live-search="true">

                  </select>
              </div>
              <div class="col-md-6">
                  <label for="ethnicity">Ethnicity</label>
                  <input type="text" name="ethnicity" value="Nulla non pariatur" class="form-control" placeholder="Ethnicity">
                                </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="personal_value">Personal Value</label>
                  <input type="text" name="personal_value" value="Open-minded" class="form-control" placeholder="Personal Value">
                                </div>
              <div class="col-md-6">
                  <label for="family_value_id">Family Value</label>
                  <select class="form-control aiz-selectpicker" name="family_value_id" data-live-search="true">
                      <option value="">Select One</option>
                                                <option value="1"  selected > Liberall</option>
                                                <option value="2"  selected > Moderate</option>
                                                <option value="3"  selected > Traditional</option>
                                                <option value="5"  selected > Xanthus Collins</option>
                                        </select>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="community_value">Community Value</label>
                  <input type="text" name="community_value" value="Good" class="form-control" placeholder="Community Value">
                                </div>
          </div>
          <div class="text-right">
              <button type="submit" class="btn btn-primary btn-sm">Update</button>
          </div>
      </form>
    </div>
</div>
    
    <!-- Life Style -->
          <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Lifestyle</h5>
    </div>
    <div class="card-body">
        <form action="https://demo.activeitzone.com/matrimonial/lifestyles/42" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">            <div class="form-group row">
                <div class="col-md-6">
                    <label for="diet">Diet</label>
                                        <select class="form-control aiz-selectpicker" name="diet" required>
                        <option value="yes"  selected  >Yes</option>
                        <option value="no"  >No</option>
                                            </select>
                </div>
                <div class="col-md-6">
                    <label for="drink">Drink</label>
                                        <select class="form-control aiz-selectpicker" name="drink" required>
                        <option value="yes"  >Yes</option>
                        <option value="no"  selected  >No</option>
                                            </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="smoke">Smoke</label>
                                        <select class="form-control aiz-selectpicker" name="smoke" required>
                        <option value="yes"  >Yes</option>
                        <option value="no"  selected  >No</option>
                                            </select>
                </div>
                <div class="col-md-6">
                    <label for="living_with">Living With</label>
                    <input type="text" name="living_with" value="Parents" placeholder="Living With" class="form-control" required>
                                    </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>
    
    <!-- Astronomic Information  -->
          <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Astronomic Information</h5>
    </div>
    <div class="card-body">
      <form action="https://demo.activeitzone.com/matrimonial/astrologies/42" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">          <div class="form-group row">
              <div class="col-md-6">
                  <label for="sun_sign">Sun Sign</label>
                  <input type="text" name="sun_sign" value="Aries" class="form-control" placeholder="Sun Sign" required>
                                </div>
              <div class="col-md-6">
                  <label for="moon_sign">Moon Sign</label>
                  <input type="text" name="moon_sign" value="Moon Sign" placeholder="Moon Sign" class="form-control" required>
                                </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="time_of_birth">Time Of Birth</label>
                  <input type="text" name="time_of_birth" value="02/03/1999" class="form-control" placeholder="Time Of Birth" required>
                                </div>
              <div class="col-md-6">
                  <label for="city_of_birth">City Of Birth</label>
                  <input type="text" name="city_of_birth" value="02/03/1999" placeholder="City Of Birth" class="form-control" required>
                                </div>
          </div>

          <div class="text-right">
              <button type="submit" class="btn btn-primary btn-sm">Update</button>
          </div>
      </form>
    </div>
</div>
    
    <!-- Permanent Address -->
              <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Permanent Address</h5>
    </div>
    <div class="card-body">
        <form action="https://demo.activeitzone.com/matrimonial/address/42" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">            <input type="hidden" name="address_type" value="permanent">
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="permanent_country_id">Country</label>
                    <select class="form-control aiz-selectpicker" name="permanent_country_id" id="permanent_country_id" data-live-search="true" required>
                        <option value="">Select One</option>
                                                    <option value="1" >Afghanistan</option>
                                                    <option value="2" >Albania</option>
                                                    <option value="3" >Algeria</option>
                                                    <option value="4"  selected >American Samoa</option>
                                                    <option value="5" >Andorra</option>
                                                    <option value="6" >Angola</option>
                                                    <option value="7" >Anguilla</option>
                                                    <option value="8" >Antarctica</option>
                                                    <option value="9" >Antigua And Barbuda</option>
                                                    <option value="10" >Argentina</option>
                                                    <option value="11" >Armenia</option>
                                                    <option value="12" >Aruba</option>
                                                    <option value="13" >Australia</option>
                                                    <option value="14" >Austria</option>
                                                    <option value="15" >Azerbaijan</option>
                                                    <option value="16" >Bahamas The</option>
                                                    <option value="17" >Bahrain</option>
                                                    <option value="18" >Bangladesh</option>
                                                    <option value="19" >Barbados</option>
                                                    <option value="20" >Belarus</option>
                                                    <option value="21" >Belgium</option>
                                                    <option value="22" >Belize</option>
                                                    <option value="23" >Benin</option>
                                                    <option value="24" >Bermuda</option>
                                                    <option value="25" >Bhutan</option>
                                                    <option value="26" >Bolivia</option>
                                                    <option value="27" >Bosnia and Herzegovina</option>
                                                    <option value="28" >Botswana</option>
                                                    <option value="29" >Bouvet Island</option>
                                                    <option value="30" >Brazil</option>
                                                    <option value="31" >British Indian Ocean Territory</option>
                                                    <option value="32" >Brunei</option>
                                                    <option value="33" >Bulgaria</option>
                                                    <option value="34" >Burkina Faso</option>
                                                    <option value="35" >Burundi</option>
                                                    <option value="36" >Cambodia</option>
                                                    <option value="37" >Cameroon</option>
                                                    <option value="38" >Canada</option>
                                                    <option value="39" >Cape Verde</option>
                                                    <option value="40" >Cayman Islands</option>
                                                    <option value="41" >Central African Republic</option>
                                                    <option value="42" >Chad</option>
                                                    <option value="43" >Chile</option>
                                                    <option value="44" >China</option>
                                                    <option value="45" >Christmas Island</option>
                                                    <option value="46" >Cocos (Keeling) Islands</option>
                                                    <option value="47" >Colombia</option>
                                                    <option value="48" >Comoros</option>
                                                    <option value="49" >Republic Of The Congo</option>
                                                    <option value="50" >Democratic Republic Of The Congo</option>
                                                    <option value="51" >Cook Islands</option>
                                                    <option value="52" >Costa Rica</option>
                                                    <option value="53" >Cote D&#039;Ivoire (Ivory Coast)</option>
                                                    <option value="54" >Croatia (Hrvatska)</option>
                                                    <option value="55" >Cuba</option>
                                                    <option value="56" >Cyprus</option>
                                                    <option value="57" >Czech Republic</option>
                                                    <option value="58" >Denmark</option>
                                                    <option value="59" >Djibouti</option>
                                                    <option value="60" >Dominica</option>
                                                    <option value="61" >Dominican Republic</option>
                                                    <option value="62" >East Timor</option>
                                                    <option value="63" >Ecuador</option>
                                                    <option value="64" >Egypt</option>
                                                    <option value="65" >El Salvador</option>
                                                    <option value="66" >Equatorial Guinea</option>
                                                    <option value="67" >Eritrea</option>
                                                    <option value="68" >Estonia</option>
                                                    <option value="69" >Ethiopia</option>
                                                    <option value="70" >External Territories of Australia</option>
                                                    <option value="71" >Falkland Islands</option>
                                                    <option value="72" >Faroe Islands</option>
                                                    <option value="73" >Fiji Islands</option>
                                                    <option value="74" >Finland</option>
                                                    <option value="75" >France</option>
                                                    <option value="76" >French Guiana</option>
                                                    <option value="77" >French Polynesia</option>
                                                    <option value="78" >French Southern Territories</option>
                                                    <option value="79" >Gabon</option>
                                                    <option value="80" >Gambia The</option>
                                                    <option value="81" >Georgia</option>
                                                    <option value="82" >Germany</option>
                                                    <option value="83" >Ghana</option>
                                                    <option value="84" >Gibraltar</option>
                                                    <option value="85" >Greece</option>
                                                    <option value="86" >Greenland</option>
                                                    <option value="87" >Grenada</option>
                                                    <option value="88" >Guadeloupe</option>
                                                    <option value="89" >Guam</option>
                                                    <option value="90" >Guatemala</option>
                                                    <option value="91" >Guernsey and Alderney</option>
                                                    <option value="92" >Guinea</option>
                                                    <option value="93" >Guinea-Bissau</option>
                                                    <option value="94" >Guyana</option>
                                                    <option value="95" >Haiti</option>
                                                    <option value="96" >Heard and McDonald Islands</option>
                                                    <option value="97" >Honduras</option>
                                                    <option value="98" >Hong Kong S.A.R.</option>
                                                    <option value="99" >Hungary</option>
                                                    <option value="100" >Iceland</option>
                                                    <option value="101" >India</option>
                                                    <option value="102" >Indonesia</option>
                                                    <option value="103" >Iran</option>
                                                    <option value="104" >Iraq</option>
                                                    <option value="105" >Ireland</option>
                                                    <option value="106" >Israel</option>
                                                    <option value="107" >Italy</option>
                                                    <option value="108" >Jamaica</option>
                                                    <option value="109" >Japan</option>
                                                    <option value="110" >Jersey</option>
                                                    <option value="111" >Jordan</option>
                                                    <option value="112" >Kazakhstan</option>
                                                    <option value="113" >Kenya</option>
                                                    <option value="114" >Kiribati</option>
                                                    <option value="115" >Korea North</option>
                                                    <option value="116" >Korea South</option>
                                                    <option value="117" >Kuwait</option>
                                                    <option value="118" >Kyrgyzstan</option>
                                                    <option value="119" >Laos</option>
                                                    <option value="120" >Latvia</option>
                                                    <option value="121" >Lebanon</option>
                                                    <option value="122" >Lesotho</option>
                                                    <option value="123" >Liberia</option>
                                                    <option value="124" >Libya</option>
                                                    <option value="125" >Liechtenstein</option>
                                                    <option value="126" >Lithuania</option>
                                                    <option value="127" >Luxembourg</option>
                                                    <option value="128" >Macau S.A.R.</option>
                                                    <option value="129" >Macedonia</option>
                                                    <option value="130" >Madagascar</option>
                                                    <option value="131" >Malawi</option>
                                                    <option value="132" >Malaysia</option>
                                                    <option value="133" >Maldives</option>
                                                    <option value="134" >Mali</option>
                                                    <option value="135" >Malta</option>
                                                    <option value="136" >Man (Isle of)</option>
                                                    <option value="137" >Marshall Islands</option>
                                                    <option value="138" >Martinique</option>
                                                    <option value="139" >Mauritania</option>
                                                    <option value="140" >Mauritius</option>
                                                    <option value="141" >Mayotte</option>
                                                    <option value="142" >Mexico</option>
                                                    <option value="143" >Micronesia</option>
                                                    <option value="144" >Moldova</option>
                                                    <option value="145" >Monaco</option>
                                                    <option value="146" >Mongolia</option>
                                                    <option value="147" >Montserrat</option>
                                                    <option value="148" >Morocco</option>
                                                    <option value="149" >Mozambique</option>
                                                    <option value="150" >Myanmar</option>
                                                    <option value="151" >Namibia</option>
                                                    <option value="152" >Nauru</option>
                                                    <option value="153" >Nepal</option>
                                                    <option value="154" >Netherlands Antilles</option>
                                                    <option value="155" >Netherlands The</option>
                                                    <option value="156" >New Caledonia</option>
                                                    <option value="157" >New Zealand</option>
                                                    <option value="158" >Nicaragua</option>
                                                    <option value="159" >Niger</option>
                                                    <option value="160" >Nigeria</option>
                                                    <option value="161" >Niue</option>
                                                    <option value="162" >Norfolk Island</option>
                                                    <option value="163" >Northern Mariana Islands</option>
                                                    <option value="164" >Norway</option>
                                                    <option value="165" >Oman</option>
                                                    <option value="166" >Pakistan</option>
                                                    <option value="167" >Palau</option>
                                                    <option value="168" >Palestinian Territory Occupied</option>
                                                    <option value="169" >Panama</option>
                                                    <option value="170" >Papua new Guinea</option>
                                                    <option value="171" >Paraguay</option>
                                                    <option value="172" >Peru</option>
                                                    <option value="173" >Philippines</option>
                                                    <option value="174" >Pitcairn Island</option>
                                                    <option value="175" >Poland</option>
                                                    <option value="176" >Portugal</option>
                                                    <option value="177" >Puerto Rico</option>
                                                    <option value="178" >Qatar</option>
                                                    <option value="179" >Reunion</option>
                                                    <option value="180" >Romania</option>
                                                    <option value="181" >Russia</option>
                                                    <option value="182" >Rwanda</option>
                                                    <option value="183" >Saint Helena</option>
                                                    <option value="184" >Saint Kitts And Nevis</option>
                                                    <option value="185" >Saint Lucia</option>
                                                    <option value="186" >Saint Pierre and Miquelon</option>
                                                    <option value="187" >Saint Vincent And The Grenadines</option>
                                                    <option value="188" >Samoa</option>
                                                    <option value="189" >San Marino</option>
                                                    <option value="190" >Sao Tome and Principe</option>
                                                    <option value="191" >Saudi Arabia</option>
                                                    <option value="192" >Senegal</option>
                                                    <option value="193" >Serbia</option>
                                                    <option value="194" >Seychelles</option>
                                                    <option value="195" >Sierra Leone</option>
                                                    <option value="196" >Singapore</option>
                                                    <option value="197" >Slovakia</option>
                                                    <option value="198" >Slovenia</option>
                                                    <option value="199" >Smaller Territories of the UK</option>
                                                    <option value="200" >Solomon Islands</option>
                                                    <option value="201" >Somalia</option>
                                                    <option value="202" >South Africa</option>
                                                    <option value="203" >South Georgia</option>
                                                    <option value="204" >South Sudan</option>
                                                    <option value="205" >Spain</option>
                                                    <option value="206" >Sri Lanka</option>
                                                    <option value="207" >Sudan</option>
                                                    <option value="208" >Suriname</option>
                                                    <option value="209" >Svalbard And Jan Mayen Islands</option>
                                                    <option value="210" >Swaziland</option>
                                                    <option value="211" >Sweden</option>
                                                    <option value="212" >Switzerland</option>
                                                    <option value="213" >Syria</option>
                                                    <option value="214" >Taiwan</option>
                                                    <option value="215" >Tajikistan</option>
                                                    <option value="216" >Tanzania</option>
                                                    <option value="217" >Thailand</option>
                                                    <option value="218" >Togo</option>
                                                    <option value="219" >Tokelau</option>
                                                    <option value="220" >Tonga</option>
                                                    <option value="221" >Trinidad And Tobago</option>
                                                    <option value="222" >Tunisia</option>
                                                    <option value="223" >Turkey</option>
                                                    <option value="224" >Turkmenistan</option>
                                                    <option value="225" >Turks And Caicos Islands</option>
                                                    <option value="226" >Tuvalu</option>
                                                    <option value="227" >Uganda</option>
                                                    <option value="228" >Ukraine</option>
                                                    <option value="229" >United Arab Emirates</option>
                                                    <option value="230" >United Kingdom</option>
                                                    <option value="231" >United States</option>
                                                    <option value="232" >United States Minor Outlying Islands</option>
                                                    <option value="233" >Uruguay</option>
                                                    <option value="234" >Uzbekistan</option>
                                                    <option value="235" >Vanuatu</option>
                                                    <option value="236" >Vatican City State (Holy See)</option>
                                                    <option value="237" >Venezuela</option>
                                                    <option value="238" >Vietnam</option>
                                                    <option value="239" >Virgin Islands (British)</option>
                                                    <option value="240" >Virgin Islands (US)</option>
                                                    <option value="241" >Wallis And Futuna Islands</option>
                                                    <option value="242" >Western Sahara</option>
                                                    <option value="243" >Yemen</option>
                                                    <option value="244" >Yugoslavia</option>
                                                    <option value="245" >Zambia</option>
                                                    <option value="246" >Zimbabwe</option>
                                            </select>
                                    </div>
                <div class="col-md-6">
                    <label for="permanent_state_id">State</label>
                    <select class="form-control aiz-selectpicker" name="permanent_state_id" id="permanent_state_id" data-live-search="true" required>

                    </select>
                                    </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="permanent_city_id">City</label>
                    <select class="form-control aiz-selectpicker" name="permanent_city_id" id="permanent_city_id" data-live-search="true" required>

                    </select>
                                    </div>
                <div class="col-md-6">
                    <label for="permanent_postal_code">Postal Code</label>
                    <input type="number" name="permanent_postal_code" value="2280" class="form-control" placeholder="Postal Code" required>
                                    </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>
    
    <!-- Family Information -->
          <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Family Information</h5>
    </div>
    <div class="card-body">
        <form action="https://demo.activeitzone.com/matrimonial/families/42" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">            <div class="form-group row">
                <div class="col-md-6">
                    <label for="father">Father</label>
                    <input type="text" name="father" value="Yes" class="form-control" placeholder="Father" required>
                                    </div>
                <div class="col-md-6">
                    <label for="mother">Mother</label>
                    <input type="text" name="mother" value="Yes" placeholder="Mother" class="form-control" required>
                                    </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="sibling">Sibling</label>
                    <input type="text" name="sibling" value="No" class="form-control" placeholder="Sibling" required>
                                    </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>
    
    <!-- Partner Expectation -->
              <div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">Partner Expectation</h5>
    </div>
    <div class="card-body">
        <form action="https://demo.activeitzone.com/matrimonial/partner_expectations/42" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">            <div class="form-group row">
                <div class="col-md-6">
                    <label for="general">General Requirement</label>
                    <input type="text" name="general" value="Ernest K Cole" class="form-control" placeholder="General" required>
                </div>
                <div class="col-md-6">
                    <label for="residence_country_id">Residence Country</label>
                                        <select class="form-control aiz-selectpicker" name="residence_country_id" data-live-search="true" required>
                                                    <option value="1"  selected  >Afghanistan</option>
                                                    <option value="2"  >Albania</option>
                                                    <option value="3"  >Algeria</option>
                                                    <option value="4"  >American Samoa</option>
                                                    <option value="5"  >Andorra</option>
                                                    <option value="6"  >Angola</option>
                                                    <option value="7"  >Anguilla</option>
                                                    <option value="8"  >Antarctica</option>
                                                    <option value="9"  >Antigua And Barbuda</option>
                                                    <option value="10"  >Argentina</option>
                                                    <option value="11"  >Armenia</option>
                                                    <option value="12"  >Aruba</option>
                                                    <option value="13"  >Australia</option>
                                                    <option value="14"  >Austria</option>
                                                    <option value="15"  >Azerbaijan</option>
                                                    <option value="16"  >Bahamas The</option>
                                                    <option value="17"  >Bahrain</option>
                                                    <option value="18"  >Bangladesh</option>
                                                    <option value="19"  >Barbados</option>
                                                    <option value="20"  >Belarus</option>
                                                    <option value="21"  >Belgium</option>
                                                    <option value="22"  >Belize</option>
                                                    <option value="23"  >Benin</option>
                                                    <option value="24"  >Bermuda</option>
                                                    <option value="25"  >Bhutan</option>
                                                    <option value="26"  >Bolivia</option>
                                                    <option value="27"  >Bosnia and Herzegovina</option>
                                                    <option value="28"  >Botswana</option>
                                                    <option value="29"  >Bouvet Island</option>
                                                    <option value="30"  >Brazil</option>
                                                    <option value="31"  >British Indian Ocean Territory</option>
                                                    <option value="32"  >Brunei</option>
                                                    <option value="33"  >Bulgaria</option>
                                                    <option value="34"  >Burkina Faso</option>
                                                    <option value="35"  >Burundi</option>
                                                    <option value="36"  >Cambodia</option>
                                                    <option value="37"  >Cameroon</option>
                                                    <option value="38"  >Canada</option>
                                                    <option value="39"  >Cape Verde</option>
                                                    <option value="40"  >Cayman Islands</option>
                                                    <option value="41"  >Central African Republic</option>
                                                    <option value="42"  >Chad</option>
                                                    <option value="43"  >Chile</option>
                                                    <option value="44"  >China</option>
                                                    <option value="45"  >Christmas Island</option>
                                                    <option value="46"  >Cocos (Keeling) Islands</option>
                                                    <option value="47"  >Colombia</option>
                                                    <option value="48"  >Comoros</option>
                                                    <option value="49"  >Republic Of The Congo</option>
                                                    <option value="50"  >Democratic Republic Of The Congo</option>
                                                    <option value="51"  >Cook Islands</option>
                                                    <option value="52"  >Costa Rica</option>
                                                    <option value="53"  >Cote D&#039;Ivoire (Ivory Coast)</option>
                                                    <option value="54"  >Croatia (Hrvatska)</option>
                                                    <option value="55"  >Cuba</option>
                                                    <option value="56"  >Cyprus</option>
                                                    <option value="57"  >Czech Republic</option>
                                                    <option value="58"  >Denmark</option>
                                                    <option value="59"  >Djibouti</option>
                                                    <option value="60"  >Dominica</option>
                                                    <option value="61"  >Dominican Republic</option>
                                                    <option value="62"  >East Timor</option>
                                                    <option value="63"  >Ecuador</option>
                                                    <option value="64"  >Egypt</option>
                                                    <option value="65"  >El Salvador</option>
                                                    <option value="66"  >Equatorial Guinea</option>
                                                    <option value="67"  >Eritrea</option>
                                                    <option value="68"  >Estonia</option>
                                                    <option value="69"  >Ethiopia</option>
                                                    <option value="70"  >External Territories of Australia</option>
                                                    <option value="71"  >Falkland Islands</option>
                                                    <option value="72"  >Faroe Islands</option>
                                                    <option value="73"  >Fiji Islands</option>
                                                    <option value="74"  >Finland</option>
                                                    <option value="75"  >France</option>
                                                    <option value="76"  >French Guiana</option>
                                                    <option value="77"  >French Polynesia</option>
                                                    <option value="78"  >French Southern Territories</option>
                                                    <option value="79"  >Gabon</option>
                                                    <option value="80"  >Gambia The</option>
                                                    <option value="81"  >Georgia</option>
                                                    <option value="82"  >Germany</option>
                                                    <option value="83"  >Ghana</option>
                                                    <option value="84"  >Gibraltar</option>
                                                    <option value="85"  >Greece</option>
                                                    <option value="86"  >Greenland</option>
                                                    <option value="87"  >Grenada</option>
                                                    <option value="88"  >Guadeloupe</option>
                                                    <option value="89"  >Guam</option>
                                                    <option value="90"  >Guatemala</option>
                                                    <option value="91"  >Guernsey and Alderney</option>
                                                    <option value="92"  >Guinea</option>
                                                    <option value="93"  >Guinea-Bissau</option>
                                                    <option value="94"  >Guyana</option>
                                                    <option value="95"  >Haiti</option>
                                                    <option value="96"  >Heard and McDonald Islands</option>
                                                    <option value="97"  >Honduras</option>
                                                    <option value="98"  >Hong Kong S.A.R.</option>
                                                    <option value="99"  >Hungary</option>
                                                    <option value="100"  >Iceland</option>
                                                    <option value="101"  >India</option>
                                                    <option value="102"  >Indonesia</option>
                                                    <option value="103"  >Iran</option>
                                                    <option value="104"  >Iraq</option>
                                                    <option value="105"  >Ireland</option>
                                                    <option value="106"  >Israel</option>
                                                    <option value="107"  >Italy</option>
                                                    <option value="108"  >Jamaica</option>
                                                    <option value="109"  >Japan</option>
                                                    <option value="110"  >Jersey</option>
                                                    <option value="111"  >Jordan</option>
                                                    <option value="112"  >Kazakhstan</option>
                                                    <option value="113"  >Kenya</option>
                                                    <option value="114"  >Kiribati</option>
                                                    <option value="115"  >Korea North</option>
                                                    <option value="116"  >Korea South</option>
                                                    <option value="117"  >Kuwait</option>
                                                    <option value="118"  >Kyrgyzstan</option>
                                                    <option value="119"  >Laos</option>
                                                    <option value="120"  >Latvia</option>
                                                    <option value="121"  >Lebanon</option>
                                                    <option value="122"  >Lesotho</option>
                                                    <option value="123"  >Liberia</option>
                                                    <option value="124"  >Libya</option>
                                                    <option value="125"  >Liechtenstein</option>
                                                    <option value="126"  >Lithuania</option>
                                                    <option value="127"  >Luxembourg</option>
                                                    <option value="128"  >Macau S.A.R.</option>
                                                    <option value="129"  >Macedonia</option>
                                                    <option value="130"  >Madagascar</option>
                                                    <option value="131"  >Malawi</option>
                                                    <option value="132"  >Malaysia</option>
                                                    <option value="133"  >Maldives</option>
                                                    <option value="134"  >Mali</option>
                                                    <option value="135"  >Malta</option>
                                                    <option value="136"  >Man (Isle of)</option>
                                                    <option value="137"  >Marshall Islands</option>
                                                    <option value="138"  >Martinique</option>
                                                    <option value="139"  >Mauritania</option>
                                                    <option value="140"  >Mauritius</option>
                                                    <option value="141"  >Mayotte</option>
                                                    <option value="142"  >Mexico</option>
                                                    <option value="143"  >Micronesia</option>
                                                    <option value="144"  >Moldova</option>
                                                    <option value="145"  >Monaco</option>
                                                    <option value="146"  >Mongolia</option>
                                                    <option value="147"  >Montserrat</option>
                                                    <option value="148"  >Morocco</option>
                                                    <option value="149"  >Mozambique</option>
                                                    <option value="150"  >Myanmar</option>
                                                    <option value="151"  >Namibia</option>
                                                    <option value="152"  >Nauru</option>
                                                    <option value="153"  >Nepal</option>
                                                    <option value="154"  >Netherlands Antilles</option>
                                                    <option value="155"  >Netherlands The</option>
                                                    <option value="156"  >New Caledonia</option>
                                                    <option value="157"  >New Zealand</option>
                                                    <option value="158"  >Nicaragua</option>
                                                    <option value="159"  >Niger</option>
                                                    <option value="160"  >Nigeria</option>
                                                    <option value="161"  >Niue</option>
                                                    <option value="162"  >Norfolk Island</option>
                                                    <option value="163"  >Northern Mariana Islands</option>
                                                    <option value="164"  >Norway</option>
                                                    <option value="165"  >Oman</option>
                                                    <option value="166"  >Pakistan</option>
                                                    <option value="167"  >Palau</option>
                                                    <option value="168"  >Palestinian Territory Occupied</option>
                                                    <option value="169"  >Panama</option>
                                                    <option value="170"  >Papua new Guinea</option>
                                                    <option value="171"  >Paraguay</option>
                                                    <option value="172"  >Peru</option>
                                                    <option value="173"  >Philippines</option>
                                                    <option value="174"  >Pitcairn Island</option>
                                                    <option value="175"  >Poland</option>
                                                    <option value="176"  >Portugal</option>
                                                    <option value="177"  >Puerto Rico</option>
                                                    <option value="178"  >Qatar</option>
                                                    <option value="179"  >Reunion</option>
                                                    <option value="180"  >Romania</option>
                                                    <option value="181"  >Russia</option>
                                                    <option value="182"  >Rwanda</option>
                                                    <option value="183"  >Saint Helena</option>
                                                    <option value="184"  >Saint Kitts And Nevis</option>
                                                    <option value="185"  >Saint Lucia</option>
                                                    <option value="186"  >Saint Pierre and Miquelon</option>
                                                    <option value="187"  >Saint Vincent And The Grenadines</option>
                                                    <option value="188"  >Samoa</option>
                                                    <option value="189"  >San Marino</option>
                                                    <option value="190"  >Sao Tome and Principe</option>
                                                    <option value="191"  >Saudi Arabia</option>
                                                    <option value="192"  >Senegal</option>
                                                    <option value="193"  >Serbia</option>
                                                    <option value="194"  >Seychelles</option>
                                                    <option value="195"  >Sierra Leone</option>
                                                    <option value="196"  >Singapore</option>
                                                    <option value="197"  >Slovakia</option>
                                                    <option value="198"  >Slovenia</option>
                                                    <option value="199"  >Smaller Territories of the UK</option>
                                                    <option value="200"  >Solomon Islands</option>
                                                    <option value="201"  >Somalia</option>
                                                    <option value="202"  >South Africa</option>
                                                    <option value="203"  >South Georgia</option>
                                                    <option value="204"  >South Sudan</option>
                                                    <option value="205"  >Spain</option>
                                                    <option value="206"  >Sri Lanka</option>
                                                    <option value="207"  >Sudan</option>
                                                    <option value="208"  >Suriname</option>
                                                    <option value="209"  >Svalbard And Jan Mayen Islands</option>
                                                    <option value="210"  >Swaziland</option>
                                                    <option value="211"  >Sweden</option>
                                                    <option value="212"  >Switzerland</option>
                                                    <option value="213"  >Syria</option>
                                                    <option value="214"  >Taiwan</option>
                                                    <option value="215"  >Tajikistan</option>
                                                    <option value="216"  >Tanzania</option>
                                                    <option value="217"  >Thailand</option>
                                                    <option value="218"  >Togo</option>
                                                    <option value="219"  >Tokelau</option>
                                                    <option value="220"  >Tonga</option>
                                                    <option value="221"  >Trinidad And Tobago</option>
                                                    <option value="222"  >Tunisia</option>
                                                    <option value="223"  >Turkey</option>
                                                    <option value="224"  >Turkmenistan</option>
                                                    <option value="225"  >Turks And Caicos Islands</option>
                                                    <option value="226"  >Tuvalu</option>
                                                    <option value="227"  >Uganda</option>
                                                    <option value="228"  >Ukraine</option>
                                                    <option value="229"  >United Arab Emirates</option>
                                                    <option value="230"  >United Kingdom</option>
                                                    <option value="231"  >United States</option>
                                                    <option value="232"  >United States Minor Outlying Islands</option>
                                                    <option value="233"  >Uruguay</option>
                                                    <option value="234"  >Uzbekistan</option>
                                                    <option value="235"  >Vanuatu</option>
                                                    <option value="236"  >Vatican City State (Holy See)</option>
                                                    <option value="237"  >Venezuela</option>
                                                    <option value="238"  >Vietnam</option>
                                                    <option value="239"  >Virgin Islands (British)</option>
                                                    <option value="240"  >Virgin Islands (US)</option>
                                                    <option value="241"  >Wallis And Futuna Islands</option>
                                                    <option value="242"  >Western Sahara</option>
                                                    <option value="243"  >Yemen</option>
                                                    <option value="244"  >Yugoslavia</option>
                                                    <option value="245"  >Zambia</option>
                                                    <option value="246"  >Zimbabwe</option>
                                            </select>
                                    </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_height">Min Height  (In Feet)</label>
                    <input type="number" name="partner_height" value="5" step=".1" placeholder="Height" class="form-control" required>
                                    </div>
                <div class="col-md-6">
                    <label for="partner_weight">Max Weight  (In Kg)</label>
                    <input type="number" name="partner_weight" value="60" class="form-control" placeholder="Weight" required>
                                    </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_marital_status">Marital Status</label>
                                        <select class="form-control aiz-selectpicker" name="partner_marital_status" data-live-search="true" required>
                                                    <option value="">Choose One</option>
                            <option value="1"  selected >Never Married</option>
                                                    <option value="">Choose One</option>
                            <option value="2" >Married</option>
                                                    <option value="">Choose One</option>
                            <option value="3" >Divorced </option>
                                                    <option value="">Choose One</option>
                            <option value="4" >Separated </option>
                                                    <option value="">Choose One</option>
                            <option value="5" >Widowed</option>
                                                    <option value="">Choose One</option>
                            <option value="8" >Separated</option>
                                                    <option value="">Choose One</option>
                            <option value="9" >Never Married</option>
                                                    <option value="">Choose One</option>
                            <option value="10" >Divorced</option>
                                            </select>
                                    </div>

                <div class="col-md-6">
                    <label for="partner_children_acceptable">Children Acceptable</label>
                                        <select class="form-control aiz-selectpicker" name="partner_children_acceptable" required>
                        <option value="">Choose One</option>
                        <option value="yes"  >Yes</option>
                        <option value="no"  >No</option>
                        <option value="dose_not_matter"  selected  >Dose not matter</option>
                    </select>
                                    </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_religion_id">Religion</label>
                    <select class="form-control aiz-selectpicker" name="partner_religion_id" id="partner_religion_id" data-live-search="true" required>
                        <option value="">Select One</option>
                                                    <option value="1"  selected > Islam </option>
                                                    <option value="2" > Judaismm </option>
                                                    <option value="3" > Hinduism </option>
                                                    <option value="4" > Christianity </option>
                                                    <option value="5" > Buddhism </option>
                                                    <option value="6" > Jainism </option>
                                                    <option value="7" > Baha&#039;i </option>
                                                    <option value="8" > Sikhism </option>
                                                    <option value="9" > Confucianism </option>
                                                    <option value="10" > Atheism </option>
                                                    <option value="19" > இந்து தமிழ் </option>
                                            </select>
                                    </div>
                <div class="col-md-6">
                    <label for="partner_caste_id">Caste</label>
                    <select class="form-control aiz-selectpicker" name="partner_caste_id" id="partner_caste_id" data-live-search="true">

                    </select>
                                    </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_sub_caste_id">Sub Caste</label>
                    <select class="form-control aiz-selectpicker" name="partner_sub_caste_id" id="partner_sub_caste_id" data-live-search="true">

                    </select>
                </div>
                <div class="col-md-6">
                    <label for="language_id">Language</label>
                                        <select class="form-control aiz-selectpicker" name="language_id" data-live-search="true" required>
                        <option value="">Select One</option>
                                                    <option value="">Choose One</option>
                            <option value="1"  selected > English </option>
                                                    <option value="">Choose One</option>
                            <option value="5" > German </option>
                                                    <option value="">Choose One</option>
                            <option value="6" > Hindi </option>
                                                    <option value="">Choose One</option>
                            <option value="7" > Urdu </option>
                                                    <option value="">Choose One</option>
                            <option value="8" > Arabic </option>
                                                    <option value="">Choose One</option>
                            <option value="9" > Tamil </option>
                                                    <option value="">Choose One</option>
                            <option value="10" > Chainese </option>
                                                    <option value="">Choose One</option>
                            <option value="11" > Japanese </option>
                                                    <option value="">Choose One</option>
                            <option value="12" > Datch </option>
                                                    <option value="">Choose One</option>
                            <option value="13" > Spanish </option>
                                            </select>
                                    </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="pertner_education">Education</label>
                    <input type="text" name="pertner_education" value="Gaming Surveillance" class="form-control" placeholder="Education">
                                    </div>

                <div class="col-md-6">
                    <label for="partner_profession">Profession</label>
                    <input type="text" name="partner_profession" value="Gaming Surveillance Officer" class="form-control" placeholder="Profession">
                                    </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="smoking_acceptable">Smoking Acceptable</label>
                                        <select class="form-control aiz-selectpicker" name="smoking_acceptable" required>
                        <option value="yes"  >Yes</option>
                        <option value="no"  >No</option>
                        <option value="dose_not_matter"  selected  >Dose not matter</option>
                    </select>
                                    </div>
                <div class="col-md-6">
                    <label for="drinking_acceptable">Drinking Acceptable</label>
                                        <select class="form-control aiz-selectpicker" name="drinking_acceptable" required>
                        <option value="yes"  >Yes</option>
                        <option value="no"  >No</option>
                        <option value="dose_not_matter"  selected  >Dose not matter</option>
                    </select>
                                    </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_diet">Dieting Acceptable</label>
                                        <select class="form-control aiz-selectpicker" name="partner_diet" required>
                        <option value="yes"  >Yes</option>
                        <option value="no"  >No</option>
                        <option value="dose_not_matter"  selected  >Dose not matter</option>
                    </select>
                                    </div>
                <div class="col-md-6">
                    <label for="partner_body_type">Body Type</label>
                    <input type="text" name="partner_body_type" value="Stable" class="form-control" placeholder="Body Type">
                                    </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_personal_value">Personal Value</label>
                    <input type="text" name="partner_personal_value" value="Good" class="form-control" placeholder="Personal Value">
                                    </div>
                <div class="col-md-6">
                    <label for="partner_manglik">Manglik</label>
                                        <select class="form-control aiz-selectpicker" name="partner_manglik" required>
                        <option value="yes"  >Yes</option>
                        <option value="no"  >No</option>
                        <option value="dose_not_matter"  selected  >Dose not matter</option>
                    </select>
                                    </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_country_id">Preferred Country</label>
                    <select class="form-control aiz-selectpicker" name="partner_country_id" id="partner_country_id" data-live-search="true" required>
                        <option value="">Select One</option>
                                                    <option value="1" >Afghanistan</option>
                                                    <option value="2" >Albania</option>
                                                    <option value="3" >Algeria</option>
                                                    <option value="4"  selected >American Samoa</option>
                                                    <option value="5" >Andorra</option>
                                                    <option value="6" >Angola</option>
                                                    <option value="7" >Anguilla</option>
                                                    <option value="8" >Antarctica</option>
                                                    <option value="9" >Antigua And Barbuda</option>
                                                    <option value="10" >Argentina</option>
                                                    <option value="11" >Armenia</option>
                                                    <option value="12" >Aruba</option>
                                                    <option value="13" >Australia</option>
                                                    <option value="14" >Austria</option>
                                                    <option value="15" >Azerbaijan</option>
                                                    <option value="16" >Bahamas The</option>
                                                    <option value="17" >Bahrain</option>
                                                    <option value="18" >Bangladesh</option>
                                                    <option value="19" >Barbados</option>
                                                    <option value="20" >Belarus</option>
                                                    <option value="21" >Belgium</option>
                                                    <option value="22" >Belize</option>
                                                    <option value="23" >Benin</option>
                                                    <option value="24" >Bermuda</option>
                                                    <option value="25" >Bhutan</option>
                                                    <option value="26" >Bolivia</option>
                                                    <option value="27" >Bosnia and Herzegovina</option>
                                                    <option value="28" >Botswana</option>
                                                    <option value="29" >Bouvet Island</option>
                                                    <option value="30" >Brazil</option>
                                                    <option value="31" >British Indian Ocean Territory</option>
                                                    <option value="32" >Brunei</option>
                                                    <option value="33" >Bulgaria</option>
                                                    <option value="34" >Burkina Faso</option>
                                                    <option value="35" >Burundi</option>
                                                    <option value="36" >Cambodia</option>
                                                    <option value="37" >Cameroon</option>
                                                    <option value="38" >Canada</option>
                                                    <option value="39" >Cape Verde</option>
                                                    <option value="40" >Cayman Islands</option>
                                                    <option value="41" >Central African Republic</option>
                                                    <option value="42" >Chad</option>
                                                    <option value="43" >Chile</option>
                                                    <option value="44" >China</option>
                                                    <option value="45" >Christmas Island</option>
                                                    <option value="46" >Cocos (Keeling) Islands</option>
                                                    <option value="47" >Colombia</option>
                                                    <option value="48" >Comoros</option>
                                                    <option value="49" >Republic Of The Congo</option>
                                                    <option value="50" >Democratic Republic Of The Congo</option>
                                                    <option value="51" >Cook Islands</option>
                                                    <option value="52" >Costa Rica</option>
                                                    <option value="53" >Cote D&#039;Ivoire (Ivory Coast)</option>
                                                    <option value="54" >Croatia (Hrvatska)</option>
                                                    <option value="55" >Cuba</option>
                                                    <option value="56" >Cyprus</option>
                                                    <option value="57" >Czech Republic</option>
                                                    <option value="58" >Denmark</option>
                                                    <option value="59" >Djibouti</option>
                                                    <option value="60" >Dominica</option>
                                                    <option value="61" >Dominican Republic</option>
                                                    <option value="62" >East Timor</option>
                                                    <option value="63" >Ecuador</option>
                                                    <option value="64" >Egypt</option>
                                                    <option value="65" >El Salvador</option>
                                                    <option value="66" >Equatorial Guinea</option>
                                                    <option value="67" >Eritrea</option>
                                                    <option value="68" >Estonia</option>
                                                    <option value="69" >Ethiopia</option>
                                                    <option value="70" >External Territories of Australia</option>
                                                    <option value="71" >Falkland Islands</option>
                                                    <option value="72" >Faroe Islands</option>
                                                    <option value="73" >Fiji Islands</option>
                                                    <option value="74" >Finland</option>
                                                    <option value="75" >France</option>
                                                    <option value="76" >French Guiana</option>
                                                    <option value="77" >French Polynesia</option>
                                                    <option value="78" >French Southern Territories</option>
                                                    <option value="79" >Gabon</option>
                                                    <option value="80" >Gambia The</option>
                                                    <option value="81" >Georgia</option>
                                                    <option value="82" >Germany</option>
                                                    <option value="83" >Ghana</option>
                                                    <option value="84" >Gibraltar</option>
                                                    <option value="85" >Greece</option>
                                                    <option value="86" >Greenland</option>
                                                    <option value="87" >Grenada</option>
                                                    <option value="88" >Guadeloupe</option>
                                                    <option value="89" >Guam</option>
                                                    <option value="90" >Guatemala</option>
                                                    <option value="91" >Guernsey and Alderney</option>
                                                    <option value="92" >Guinea</option>
                                                    <option value="93" >Guinea-Bissau</option>
                                                    <option value="94" >Guyana</option>
                                                    <option value="95" >Haiti</option>
                                                    <option value="96" >Heard and McDonald Islands</option>
                                                    <option value="97" >Honduras</option>
                                                    <option value="98" >Hong Kong S.A.R.</option>
                                                    <option value="99" >Hungary</option>
                                                    <option value="100" >Iceland</option>
                                                    <option value="101" >India</option>
                                                    <option value="102" >Indonesia</option>
                                                    <option value="103" >Iran</option>
                                                    <option value="104" >Iraq</option>
                                                    <option value="105" >Ireland</option>
                                                    <option value="106" >Israel</option>
                                                    <option value="107" >Italy</option>
                                                    <option value="108" >Jamaica</option>
                                                    <option value="109" >Japan</option>
                                                    <option value="110" >Jersey</option>
                                                    <option value="111" >Jordan</option>
                                                    <option value="112" >Kazakhstan</option>
                                                    <option value="113" >Kenya</option>
                                                    <option value="114" >Kiribati</option>
                                                    <option value="115" >Korea North</option>
                                                    <option value="116" >Korea South</option>
                                                    <option value="117" >Kuwait</option>
                                                    <option value="118" >Kyrgyzstan</option>
                                                    <option value="119" >Laos</option>
                                                    <option value="120" >Latvia</option>
                                                    <option value="121" >Lebanon</option>
                                                    <option value="122" >Lesotho</option>
                                                    <option value="123" >Liberia</option>
                                                    <option value="124" >Libya</option>
                                                    <option value="125" >Liechtenstein</option>
                                                    <option value="126" >Lithuania</option>
                                                    <option value="127" >Luxembourg</option>
                                                    <option value="128" >Macau S.A.R.</option>
                                                    <option value="129" >Macedonia</option>
                                                    <option value="130" >Madagascar</option>
                                                    <option value="131" >Malawi</option>
                                                    <option value="132" >Malaysia</option>
                                                    <option value="133" >Maldives</option>
                                                    <option value="134" >Mali</option>
                                                    <option value="135" >Malta</option>
                                                    <option value="136" >Man (Isle of)</option>
                                                    <option value="137" >Marshall Islands</option>
                                                    <option value="138" >Martinique</option>
                                                    <option value="139" >Mauritania</option>
                                                    <option value="140" >Mauritius</option>
                                                    <option value="141" >Mayotte</option>
                                                    <option value="142" >Mexico</option>
                                                    <option value="143" >Micronesia</option>
                                                    <option value="144" >Moldova</option>
                                                    <option value="145" >Monaco</option>
                                                    <option value="146" >Mongolia</option>
                                                    <option value="147" >Montserrat</option>
                                                    <option value="148" >Morocco</option>
                                                    <option value="149" >Mozambique</option>
                                                    <option value="150" >Myanmar</option>
                                                    <option value="151" >Namibia</option>
                                                    <option value="152" >Nauru</option>
                                                    <option value="153" >Nepal</option>
                                                    <option value="154" >Netherlands Antilles</option>
                                                    <option value="155" >Netherlands The</option>
                                                    <option value="156" >New Caledonia</option>
                                                    <option value="157" >New Zealand</option>
                                                    <option value="158" >Nicaragua</option>
                                                    <option value="159" >Niger</option>
                                                    <option value="160" >Nigeria</option>
                                                    <option value="161" >Niue</option>
                                                    <option value="162" >Norfolk Island</option>
                                                    <option value="163" >Northern Mariana Islands</option>
                                                    <option value="164" >Norway</option>
                                                    <option value="165" >Oman</option>
                                                    <option value="166" >Pakistan</option>
                                                    <option value="167" >Palau</option>
                                                    <option value="168" >Palestinian Territory Occupied</option>
                                                    <option value="169" >Panama</option>
                                                    <option value="170" >Papua new Guinea</option>
                                                    <option value="171" >Paraguay</option>
                                                    <option value="172" >Peru</option>
                                                    <option value="173" >Philippines</option>
                                                    <option value="174" >Pitcairn Island</option>
                                                    <option value="175" >Poland</option>
                                                    <option value="176" >Portugal</option>
                                                    <option value="177" >Puerto Rico</option>
                                                    <option value="178" >Qatar</option>
                                                    <option value="179" >Reunion</option>
                                                    <option value="180" >Romania</option>
                                                    <option value="181" >Russia</option>
                                                    <option value="182" >Rwanda</option>
                                                    <option value="183" >Saint Helena</option>
                                                    <option value="184" >Saint Kitts And Nevis</option>
                                                    <option value="185" >Saint Lucia</option>
                                                    <option value="186" >Saint Pierre and Miquelon</option>
                                                    <option value="187" >Saint Vincent And The Grenadines</option>
                                                    <option value="188" >Samoa</option>
                                                    <option value="189" >San Marino</option>
                                                    <option value="190" >Sao Tome and Principe</option>
                                                    <option value="191" >Saudi Arabia</option>
                                                    <option value="192" >Senegal</option>
                                                    <option value="193" >Serbia</option>
                                                    <option value="194" >Seychelles</option>
                                                    <option value="195" >Sierra Leone</option>
                                                    <option value="196" >Singapore</option>
                                                    <option value="197" >Slovakia</option>
                                                    <option value="198" >Slovenia</option>
                                                    <option value="199" >Smaller Territories of the UK</option>
                                                    <option value="200" >Solomon Islands</option>
                                                    <option value="201" >Somalia</option>
                                                    <option value="202" >South Africa</option>
                                                    <option value="203" >South Georgia</option>
                                                    <option value="204" >South Sudan</option>
                                                    <option value="205" >Spain</option>
                                                    <option value="206" >Sri Lanka</option>
                                                    <option value="207" >Sudan</option>
                                                    <option value="208" >Suriname</option>
                                                    <option value="209" >Svalbard And Jan Mayen Islands</option>
                                                    <option value="210" >Swaziland</option>
                                                    <option value="211" >Sweden</option>
                                                    <option value="212" >Switzerland</option>
                                                    <option value="213" >Syria</option>
                                                    <option value="214" >Taiwan</option>
                                                    <option value="215" >Tajikistan</option>
                                                    <option value="216" >Tanzania</option>
                                                    <option value="217" >Thailand</option>
                                                    <option value="218" >Togo</option>
                                                    <option value="219" >Tokelau</option>
                                                    <option value="220" >Tonga</option>
                                                    <option value="221" >Trinidad And Tobago</option>
                                                    <option value="222" >Tunisia</option>
                                                    <option value="223" >Turkey</option>
                                                    <option value="224" >Turkmenistan</option>
                                                    <option value="225" >Turks And Caicos Islands</option>
                                                    <option value="226" >Tuvalu</option>
                                                    <option value="227" >Uganda</option>
                                                    <option value="228" >Ukraine</option>
                                                    <option value="229" >United Arab Emirates</option>
                                                    <option value="230" >United Kingdom</option>
                                                    <option value="231" >United States</option>
                                                    <option value="232" >United States Minor Outlying Islands</option>
                                                    <option value="233" >Uruguay</option>
                                                    <option value="234" >Uzbekistan</option>
                                                    <option value="235" >Vanuatu</option>
                                                    <option value="236" >Vatican City State (Holy See)</option>
                                                    <option value="237" >Venezuela</option>
                                                    <option value="238" >Vietnam</option>
                                                    <option value="239" >Virgin Islands (British)</option>
                                                    <option value="240" >Virgin Islands (US)</option>
                                                    <option value="241" >Wallis And Futuna Islands</option>
                                                    <option value="242" >Western Sahara</option>
                                                    <option value="243" >Yemen</option>
                                                    <option value="244" >Yugoslavia</option>
                                                    <option value="245" >Zambia</option>
                                                    <option value="246" >Zimbabwe</option>
                                            </select>
                                    </div>
                <div class="col-md-6">
                    <label for="partner_state_id">Preferred State</label>
                    <select class="form-control aiz-selectpicker" name="partner_state_id" id="partner_state_id" data-live-search="true">

                    </select>
                                    </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="family_value_id">Family Value</label>
                    <select class="form-control aiz-selectpicker" name="family_value_id" >
                        <option value="">Select One</option>
                                                    <option value="1"  selected > Liberall </option>
                                                    <option value="2"  selected > Moderate </option>
                                                    <option value="3"  selected > Traditional </option>
                                                    <option value="5"  selected > Xanthus Collins </option>
                                            </select>
                                    </div>
                <div class="col-md-6">
                    <label for="pertner_complexion">Complexion</label>
                    <input type="text" name="pertner_complexion" value="Fair skin, always burns, sometimes tans" class="form-control" placeholder="Complexion" required>
                                    </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>
    
			</div>
		</div>
	</div>
</section>



    <div class="aiz-user-sidenav rounded overflow-hidden">
        <div class="px-4 text-center mb-4">
            <span class="avatar avatar-md mb-3">
                                <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/AKgrssE0aIV4yzwTzRQsBaNp93KS2PPp5wqMsld9.png">
                            </span>
            <h4 class="h5 fw-600">swati</h4>
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
            <a href="https://demo.activeitzone.com/matrimonial/member-profile/42" class="btn btn-block btn-soft-primary">Public Profile</a>
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
                    <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">                </form>
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
    
        <div class="modal fade create_edit_modal" id="modal-basic">
	<div class="modal-dialog">
		<div class="modal-content create_edit_modal_content">

    	</div>
	</div>
</div>

<!-- large Modal -->
<div class="modal fade create_update_large_modal" id="modal-lg">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">

		</div>
	</div>
</div>
    <!-- delete Modal -->
<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">Delete Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">Are you sure to delete this?</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">Cancel</button>
                <a id="delete-link" class="btn btn-primary mt-2">Delete</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->

    <div class="modal fade account_status_change_modal" id="modal-zoom">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form class="form-horizontal member-block" action="https://demo.activeitzone.com/matrimonial/member/account-activation" method="POST">
                        <input type="hidden" name="_token" value="275w3MAfgC5xVh9gXT7mrFW2m1ws5dVsx7ttVu7p">                        <input type="hidden" name="deacticvation_status" id="deacticvation_status" value="">
                        <h4 class="modal-title h6 mb-3" id="confirmation_note" value=""></h4>
                        <hr>
                        <button type="submit" class="btn btn-primary mt-2">Yes</button>
                        <button type="button" class="btn btn-danger mt-2" data-dismiss="modal">No</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</html>
@endsection
