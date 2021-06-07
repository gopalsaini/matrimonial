@extends('layouts/app')
@section('active')
	bg-primary-grad
@endsection
@section('content')

        <section class="pt-6 pb-4 bg-white text-center">
    <div class="container">
        <h1 class="mb-0 fw-600 text-dark">Select Your Package</h1>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="aiz-carousel" data-items="4" data-xl-items="3" data-md-items="2" data-sm-items="1" data-dots='true' data-infinite='true' data-autoplay='true'>
                            <div class="carousel-box">
                    <div class="overflow-hidden shadow-none border-right">
                        <div class="card-body">
                            <div class="text-center mb-4 mt-3">
                                <img class="mw-100 mx-auto mb-4" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/uYGlmDARpbT2sjJ4x3YTm1GsFQ5I78GOa8lWgMQq.png" height="130">
                                <h5 class="mb-3 h5 fw-600">Free</h5>
                            </div>
                            <ul class="list-group list-group-raw fs-15 mb-5">
                                <li class="list-group-item py-2">
                                    <i class="las la-check text-success mr-2"></i>
                                    1 Express Interests
                                </li>
                                <li class="list-group-item py-2">
                                    <i class="las la-check text-success mr-2"></i>
                                    1 Galley Photo Upload
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
                            <div class="mb-5 text-dark text-center">
                                                                    <span class="display-4 fw-600 lh-1 mb-0">Free</span>
                                                                <span class="text-secondary d-block">3 Days</span>
                            </div>
                            <div class="text-center">
                                                                    <a href="javascript:void(0);" class="btn btn-light" ><del>Purchase This Package</del></a>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="carousel-box">
                    <div class="overflow-hidden shadow-none border-right">
                        <div class="card-body">
                            <div class="text-center mb-4 mt-3">
                                <img class="mw-100 mx-auto mb-4" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/UIOcsIe8TMVx6Rp7Wbx9ig5kw6X2g2rSxKUNsPNQ.png" height="130">
                                <h5 class="mb-3 h5 fw-600">Silver Package</h5>
                            </div>
                            <ul class="list-group list-group-raw fs-15 mb-5">
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
                            <div class="mb-5 text-dark text-center">
                                                                    <span class="display-4 fw-600 lh-1 mb-0">10,00INR</span>
                                                                <span class="text-secondary d-block">7 Days</span>
                            </div>
                            <div class="text-center">
                                                                                                            <button type="submit" onclick="loginModal()" class="btn btn-primary" >Purchase This Package</button>
                                                                                                </div>
                        </div>
                    </div>
                </div>
                            <div class="carousel-box">
                    <div class="overflow-hidden shadow-none border-right">
                        <div class="card-body">
                            <div class="text-center mb-4 mt-3">
                                <img class="mw-100 mx-auto mb-4" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/RMTKXAZIB1cN2RA8GLgbhs8DmGl0qj01ACRlEFCG.png" height="130">
                                <h5 class="mb-3 h5 fw-600">Gold Package</h5>
                            </div>
                            <ul class="list-group list-group-raw fs-15 mb-5">
                                <li class="list-group-item py-2">
                                    <i class="las la-check text-success mr-2"></i>
                                    25 Express Interests
                                </li>
                                <li class="list-group-item py-2">
                                    <i class="las la-check text-success mr-2"></i>
                                    5 Galley Photo Upload
                                </li>
                                <li class="list-group-item py-2">
                                    <i class="las la-check text-success mr-2"></i>
                                    500 Contact Info view
                                </li>
                                <li class="list-group-item py-2 text-line-through">
                                                                            <i class="las la-check text-success mr-2"></i>
                                        Show Auto Profile Match
                                                                    </li>
                            </ul>
                            <div class="mb-5 text-dark text-center">
                                                                    <span class="display-4 fw-600 lh-1 mb-0">2 499,00INR</span>
                                                                <span class="text-secondary d-block">365 Days</span>
                            </div>
                            <div class="text-center">
                                                                                                            <button type="submit" onclick="loginModal()" class="btn btn-primary" >Purchase This Package</button>
                                                                                                </div>
                        </div>
                    </div>
                </div>
                            <div class="carousel-box">
                    <div class="overflow-hidden shadow-none border-right">
                        <div class="card-body">
                            <div class="text-center mb-4 mt-3">
                                <img class="mw-100 mx-auto mb-4" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/1dD4w1xIQIViixofGwsq8LdKysEx4BDug5hdpys6.png" height="130">
                                <h5 class="mb-3 h5 fw-600">Diamond Package</h5>
                            </div>
                            <ul class="list-group list-group-raw fs-15 mb-5">
                                <li class="list-group-item py-2">
                                    <i class="las la-check text-success mr-2"></i>
                                    90 Express Interests
                                </li>
                                <li class="list-group-item py-2">
                                    <i class="las la-check text-success mr-2"></i>
                                    25 Galley Photo Upload
                                </li>
                                <li class="list-group-item py-2">
                                    <i class="las la-check text-success mr-2"></i>
                                    1000 Contact Info view
                                </li>
                                <li class="list-group-item py-2 text-line-through">
                                                                            <i class="las la-check text-success mr-2"></i>
                                        Show Auto Profile Match
                                                                    </li>
                            </ul>
                            <div class="mb-5 text-dark text-center">
                                                                    <span class="display-4 fw-600 lh-1 mb-0">9 999,00INR</span>
                                                                <span class="text-secondary d-block">730 Days</span>
                            </div>
                            <div class="text-center">
                                                                                                            <button type="submit" onclick="loginModal()" class="btn btn-primary" >Purchase This Package</button>
                                                                                                </div>
                        </div>
                    </div>
                </div>
                            <div class="carousel-box">
                    <div class="overflow-hidden shadow-none border-right">
                        <div class="card-body">
                            <div class="text-center mb-4 mt-3">
                                <img class="mw-100 mx-auto mb-4" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/N3IeDw37QUFOxBUc8g96V7ya7Z4Rg1WJDLAD1BRO.png" height="130">
                                <h5 class="mb-3 h5 fw-600">Platinum Package</h5>
                            </div>
                            <ul class="list-group list-group-raw fs-15 mb-5">
                                <li class="list-group-item py-2">
                                    <i class="las la-check text-success mr-2"></i>
                                    500 Express Interests
                                </li>
                                <li class="list-group-item py-2">
                                    <i class="las la-check text-success mr-2"></i>
                                    100 Galley Photo Upload
                                </li>
                                <li class="list-group-item py-2">
                                    <i class="las la-check text-success mr-2"></i>
                                    2500 Contact Info view
                                </li>
                                <li class="list-group-item py-2 text-line-through">
                                                                            <i class="las la-check text-success mr-2"></i>
                                        Show Auto Profile Match
                                                                    </li>
                            </ul>
                            <div class="mb-5 text-dark text-center">
                                                                    <span class="display-4 fw-600 lh-1 mb-0">24 999,00INR</span>
                                                                <span class="text-secondary d-block">3650 Days</span>
                            </div>
                            <div class="text-center">
                                                                                                            <button type="submit" onclick="loginModal()" class="btn btn-primary" >Purchase This Package</button>
                                                                                                </div>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</section>
@endsection