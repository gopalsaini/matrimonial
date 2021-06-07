@extends('layouts/app')
@section('active')
	bg-primary-grad
@endsection
@section('content')

	<!-- Homepage Slider Section -->
			<section class="position-relative overflow-hidden min-vh-100 d-flex home-slider-area">
      		    	<div class="absolute-full">
				<div class="aiz-carousel aiz-carousel-full h-100" data-fade='true' data-infinite='true' data-autoplay='true'>
					            			<img class="img-fit" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/n6x1YZiGHc5AvVBB45JNnIAbXkQTqLf16bHMtwzu.png">
					            			<img class="img-fit" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/OkwfK3lo8BgrCkMuOA4NGeORw7g9ldcOp6ykrIeU.jpg">
					            			<img class="img-fit" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/cEOhVAwkzGE51HebB3Ky9CwQU3vLyKnW4DRMQ1mt.jpg">
									</div>
				<div class="absolute-full bg-white opacity-70 d-md-none"></div>
	    	</div>
	    	<div class="container position-relative d-flex flex-column">
	    		<div class="row pt-11 pb-8 my-auto align-items-center">
	    			<div class="col-xl-5 col-lg-6 my-4">
	    				<div class="text-dark">
	    					<h1><b style="">Every Love Story is </b></h1><h1><b style="">Beautiful</b></h1><h1><b style=""><font color="#fd2c79">Make Yours</font></b></h1><h1><b style=""><font color="#fd2c79">Special</font></b></h1>
	    				</div>
	    			</div>
    			</div>

				<!-- search  -->
					<div class="p-4 bg-white rounded-top border-bottom" style="box-shadow: 0 -25px 50px -12px rgb(0 0 0 / 25%);">
						<div class="row">
							<div class="col-xl-10 mx-auto">
								<form action="https://demo.activeitzone.com/matrimonial/member-listing" method="get">
									<div class="row gutters-5">
										<div class="col-lg">
											<div class="form-group mb-3">
												<label class="form-label" for="name">Age From</label>
												<input type="number" name="age_from"  class="form-control">
											</div>
										</div>
										<div class="col-lg">
											<div class="form-group mb-3">
												<label class="form-label" for="name">to</label>
												<input type="number" name="age_to" class="form-control">
											</div>
										</div>
										<div class="col-lg">
											<div class="form-group mb-3">
												<label class="form-label" for="name">Religion</label>
												<select name="religion_id" id="religion_id" class="form-control aiz-selectpicker"  data-live-search="true"  data-container="body">
													<option value="">Choose One</option>
													<option value="1"> Islam </option>
													<option value="2"> Judaismm </option>
													<option value="3"> Hinduism </option>
													<option value="4"> Christianity </option>
													<option value="5"> Buddhism </option>
													<option value="6"> Jainism </option>
													<option value="7"> Baha&#039;i </option>
													<option value="8"> Sikhism </option>
													<option value="9"> Confucianism </option>
													<option value="10"> Atheism </option>
													<option value="16"> ertt </option>
												</select>
											</div>
										</div>
										<div class="col-lg">
											<div class="form-group mb-3">
											<label class="form-label" for="name">Mother Tongue</label>
											<select name="mother_tongue" class="form-control aiz-selectpicker" data-live-search="true" data-container="body">
													<option value="">Select One</option>
													<option value="1"> English </option>
													<option value="5"> German </option>
													<option value="6"> Hindi </option>
													<option value="7"> Urdu </option>
													<option value="8"> Arabic </option>
													<option value="9"> Tamil </option>
													<option value="10"> Chainese </option>
													<option value="11"> Japanese </option>
													<option value="12"> Datch </option>
													<option value="13"> Spanish </option>
											</select>
											</div>
										</div>
										<div class="col-lg">
											<button type="submit" class="btn btn-block btn-primary mt-4">Search</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				
	    	</div>
	    </section>
   <!-- premium member Section -->
   <section class="py-9 bg-white">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
               <div class="text-center section-title mb-5">
                  <h2 class="fw-600 mb-3 text-dark">Premium Members</h2>
                  <p class="fw-400 fs-16 opacity-60">Every Premium member on Active Matrimonial is privileged by our policy &amp; rules so you don’t have to worry about your privacy or security.</p>
               </div>
            </div>
         </div>
         <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="5" data-xl-items="4" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="1" data-dots='true' data-infinite='true'>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Alex</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">BA5D7EEC</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Derrick</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">8E09C136</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Donna</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">E0EE4E4D</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Sylvia</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">01E086DC</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Nicole</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">505CEF64</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Ramona</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">E2A2F0BA</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Kathy</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">BAF1EB94</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Robert</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">7223505B</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/uploads/all/ApRvIDurTmGrHYCP8HNrm5gQyfFByvt02JOnxDWg.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Mitchell</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">6AD6E375</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/uploads/all/JC54t9SJmTsyJnU7ZSj3AKE0WIHfZj9lZqIyuA4a.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Mark</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">8D6813CB</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Jane R</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">DDE87662</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/uploads/all/COOYX4Mb7j2DNZ5vGlLiG6XS2wOucEZhblm1775Y.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Lakendra</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">D89D3563</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/uploads/all/UZR9qdCaIqm7RLwZOsQo8YPd2PUBlt3aWKH9pU08.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Tate</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">6C1F58E3</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/uploads/all/zo8WHvxlUyiPrxwnrc6ztQE5u8MnJo2ej2UUl1JU.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Idona</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">9F8296FD</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/uploads/all/frIh1shOagKEHjg33H1CzyljjmGeg18jIjikmqxZ.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Olivia</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">66F7029D</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Banner section 1 -->
   <section class="bg-white">
      <div class="container">
         <div class="row gutters-10">
            <div class="col-xl col-md-6">
               <div class="mb-3">
                  <a href="#" class="d-block text-reset">
                  <img src="https://demo.activeitzone.com/matrimonial/public/assets/img/placeholder-rect.jpg" data-src="https://demo.activeitzone.com/matrimonial/public/uploads/all/SHlh3Cwc7RaNiiSyvNGmexFDLSYoHkRXlMQqvYwo.png" alt="CK Matrimony" class="img-fluid lazyload w-100">
                  </a>
               </div>
            </div>
            <div class="col-xl col-md-6">
               <div class="mb-3">
                  <a href="#" class="d-block text-reset">
                  <img src="https://demo.activeitzone.com/matrimonial/public/assets/img/placeholder-rect.jpg" data-src="https://demo.activeitzone.com/matrimonial/public/uploads/all/MKeWioNRNyyZSPAJoi6Cy99Jk7kJn8gJabqjEBQW.png" alt="CK Matrimony" class="img-fluid lazyload w-100">
                  </a>
               </div>
            </div>
            <div class="col-xl col-md-6">
               <div class="mb-3">
                  <a href="#" class="d-block text-reset">
                  <img src="https://demo.activeitzone.com/matrimonial/public/assets/img/placeholder-rect.jpg" data-src="https://demo.activeitzone.com/matrimonial/public/uploads/all/UgoHnTw7QRHMYhzI9MaeSRNvcIP8FxR1FaGNyY32.png" alt="CK Matrimony" class="img-fluid lazyload w-100">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- How It Works Section -->
   <section class="py-8 bg-white">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
               <div class="text-center section-title mb-5">
                  <h2 class="fw-600 mb-3">How It Works</h2>
                  <p class="fw-400 fs-16 opacity-60">When you realize you want to spend the rest of your life with somebody, you want the rest of your life to start as soon as possible.</p>
               </div>
            </div>
         </div>
         <div class="row gutters-10">
            <div class="col-lg">
               <div class="border p-3 mb-3">
                  <div class=" row align-items-center">
                     <div class="col-7">
                        <div class="text-primary fw-600 h1">1</div>
                        <div class="text-secondary fs-20 mb-2 fw-600">Sign up</div>
                        <div class="fs-15 opacity-60">Register for free &amp;  put up your Profile</div>
                     </div>
                     <div class="mt-3 col-5 text-right">
                        <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/D8IvIuVZ1XgBEbW8WNygx6JM0G6AVPKohVaHyj7X.png" class="img-fluid h-80px">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg">
               <div class="border p-3 mb-3">
                  <div class=" row align-items-center">
                     <div class="col-7">
                        <div class="text-primary fw-600 h1">2</div>
                        <div class="text-secondary fs-20 mb-2 fw-600">Connect</div>
                        <div class="fs-15 opacity-60">Select &amp; Connect with Matches you like</div>
                     </div>
                     <div class="mt-3 col-5 text-right">
                        <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/zxhwmcnXiCd5WUb8V4GBLb7VkvXuEl2DHFUUD2sk.png" class="img-fluid h-80px">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg">
               <div class="border p-3 mb-3">
                  <div class=" row align-items-center">
                     <div class="col-7">
                        <div class="text-primary fw-600 h1">3</div>
                        <div class="text-secondary fs-20 mb-2 fw-600">Interact</div>
                        <div class="fs-15 opacity-60">Become a Premium Member &amp; Start a Conversation</div>
                     </div>
                     <div class="mt-3 col-5 text-right">
                        <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/bB4GZnLSrquYOKA3lbH0JI5WKWEwznwXNvjbAEEU.png" class="img-fluid h-80px">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Trusted by Millions Section -->
   <section class="bg-center bg-cover min-vh-100 py-8 text-white d-flex align-items-center bg-fixed" style="background-image: url('https://demo.activeitzone.com/matrimonial/public/uploads/all/Zo4yekKwhDtasX6uEl3cKZFei63iYAAvi2550jOr.png')">
      <div class="container">
         <div class="row">
            <div class="col-xl-8 mx-auto">
               <div class="text-center pb-12">
                  <h2 class="fw-600">Trusted by Millions</h2>
                  <div class="fs-16 fw-400">&quot;Love doesn&#039;t make the world go around. Love is what makes the ride worthwhile.&quot; Millions of Active Matrimonial users around the world find their true love and partners from this site. We are always there to help and find you the suitable match for yourself.</div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg">
               <div class="border rounded position-relative z-1 border-gray-600 overflow-hidden mt-4">
                  <div class="absolute-full bg-dark opacity-60 z--1"></div>
                  <div class="px-4 py-5 d-flex align-items-center justify-content-center">
                     <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/54adYPz3OC2PKzpgZF0rpnvR3qKeDMTikwOqNsMW.png" class="img-fluid h-20px">
                     <span class="fs-17 ml-2">Best Matches</span>
                  </div>
               </div>
            </div>
            <div class="col-lg">
               <div class="border rounded position-relative z-1 border-gray-600 overflow-hidden mt-4">
                  <div class="absolute-full bg-dark opacity-60 z--1"></div>
                  <div class="px-4 py-5 d-flex align-items-center justify-content-center">
                     <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/Zk2lj7FFjeGGYOhch3vtEAkxnnom4zPcWq1bV0tr.png" class="img-fluid h-20px">
                     <span class="fs-17 ml-2">Verified Profiles</span>
                  </div>
               </div>
            </div>
            <div class="col-lg">
               <div class="border rounded position-relative z-1 border-gray-600 overflow-hidden mt-4">
                  <div class="absolute-full bg-dark opacity-60 z--1"></div>
                  <div class="px-4 py-5 d-flex align-items-center justify-content-center">
                     <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/5HxbGcXOowGkctJOQHm5CYETk4wIPutWs5eb3dlL.png" class="img-fluid h-20px">
                     <span class="fs-17 ml-2">100% Privacy</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- New Member Section -->
   <section class="py-9 bg-white">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
               <div class="text-center section-title mb-5">
                  <h2 class="fw-600 mb-3 text-dark">New Members</h2>
                  <p class="fw-400 fs-16 opacity-60">Every user registered on Active Matrimonial is verified via photo and mobile phone so you don’t have to worry how real or fake anyone is..</p>
               </div>
            </div>
         </div>
         <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="5" data-xl-items="4" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="1" data-dots='true' data-infinite='true'>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Sylvia</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">01E086DC</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/uploads/all/ApRvIDurTmGrHYCP8HNrm5gQyfFByvt02JOnxDWg.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Mitchell</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">6AD6E375</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Wilson</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">A5F900A6</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Nicole</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">505CEF64</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Robert</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">7223505B</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Ramona</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">E2A2F0BA</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Derrick</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">8E09C136</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Alex</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">BA5D7EEC</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Donna</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">E0EE4E4D</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="carousel-box">
               <div class="rounded border position-relative overflow-hidden">
                  <a
                     onclick="loginModal()"
                     class="d-block text-reset c-pointer"
                     >
                     <img
                        src="https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/avatar-place.png';"
                        class="img-fit mw-100 h-400px"
                        >
                     <div class="absolute-bottom-left w-100 p-3 z-1">
                        <div class="absolute-full bg-white opacity-90 z--1"></div>
                        <div class="text-center">
                           <div class="text-primary fw-500 mb-1">Kathy</div>
                           <div class="fs-10">
                              <span class="opacity-60">Member ID: </span>
                              <span class="ml-2 text-primary">BAF1EB94</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- happy Story Section -->
   <section class="py-7 bg-dark text-white">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
               <div class="text-center section-title mb-5">
                  <h2 class="fw-600 mb-3">Happy Stories</h2>
               </div>
            </div>
         </div>
         <div class="card-columns column-gap-10 card-columns-xxl-4 card-columns-lg-3 card-columns-md-2 card-columns-1">
            <div class="card border-gray-800 overflow-hidden mb-2">
               <a href="https://demo.activeitzone.com/matrimonial/story_details/14" class="text-reset d-block position-relative">
                  <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/xgWEO1BKFQFZqT1tizProMFY3oSSO3S6vu8ByfHg.jpg" class="img-fluid">
                  <div class="absolute-bottom-left p-3">
                     <div class="position-relative z-1 p-3">
                        <div class="absolute-full z--1 bg-dark opacity-60"></div>
                        <div class="text-primary text-truncate">Alex &amp; Dolorita  Prieto</div>
                        <h2 class="h5 mb-0 fs-14 fw-400 lh-1-5 text-truncate-3">
                           If I had a flower every time I thought of you, I could walk in my garden forever.
                        </h2>
                     </div>
                  </div>
               </a>
            </div>
            <div class="card border-gray-800 overflow-hidden mb-2">
               <a href="https://demo.activeitzone.com/matrimonial/story_details/13" class="text-reset d-block position-relative">
                  <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/OnMJ1HjOWTgzMDcvQxBGcreDtmqHGXAdFLK0dt5X.jpg" class="img-fluid">
                  <div class="absolute-bottom-left p-3">
                     <div class="position-relative z-1 p-3">
                        <div class="absolute-full z--1 bg-dark opacity-60"></div>
                        <div class="text-primary text-truncate">Robert &amp; Dolorita  Prieto</div>
                        <h2 class="h5 mb-0 fs-14 fw-400 lh-1-5 text-truncate-3">
                           Relationship are always stronger when you are best friends first, and a couple second.
                        </h2>
                     </div>
                  </div>
               </a>
            </div>
            <div class="card border-gray-800 overflow-hidden mb-2">
               <a href="https://demo.activeitzone.com/matrimonial/story_details/12" class="text-reset d-block position-relative">
                  <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/HbCefrFWcM1eZa7TsbyOhltQQd10MTY42HCQ40QP.jpg" class="img-fluid">
                  <div class="absolute-bottom-left p-3">
                     <div class="position-relative z-1 p-3">
                        <div class="absolute-full z--1 bg-dark opacity-60"></div>
                        <div class="text-primary text-truncate">Derrick &amp; Gregory J Luton</div>
                        <h2 class="h5 mb-0 fs-14 fw-400 lh-1-5 text-truncate-3">
                           Sometimes I look at you and I woder hoe i got to be so damn lucky.
                        </h2>
                     </div>
                  </div>
               </a>
            </div>
            <div class="card border-gray-800 overflow-hidden mb-2">
               <a href="https://demo.activeitzone.com/matrimonial/story_details/11" class="text-reset d-block position-relative">
                  <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/v7t6fMIBFCeasUf3KDfKPpEhuSc4XVabW5yqYni8.jpg" class="img-fluid">
                  <div class="absolute-bottom-left p-3">
                     <div class="position-relative z-1 p-3">
                        <div class="absolute-full z--1 bg-dark opacity-60"></div>
                        <div class="text-primary text-truncate">Kathy &amp; Kimberley Lang</div>
                        <h2 class="h5 mb-0 fs-14 fw-400 lh-1-5 text-truncate-3">
                           Me &amp; You we could make the whole world jealous.
                        </h2>
                     </div>
                  </div>
               </a>
            </div>
            <div class="card border-gray-800 overflow-hidden mb-2">
               <a href="https://demo.activeitzone.com/matrimonial/story_details/10" class="text-reset d-block position-relative">
                  <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/QU1tnyXoXhslOG1RJ0acDpZ8CeDotoTodk7vcBYC.jpg" class="img-fluid">
                  <div class="absolute-bottom-left p-3">
                     <div class="position-relative z-1 p-3">
                        <div class="absolute-full z--1 bg-dark opacity-60"></div>
                        <div class="text-primary text-truncate">Sylvia &amp; Kimberley Lang</div>
                        <h2 class="h5 mb-0 fs-14 fw-400 lh-1-5 text-truncate-3">
                           Life has become more beautiful from the day you enter in my life.
                        </h2>
                     </div>
                  </div>
               </a>
            </div>
            <div class="card border-gray-800 overflow-hidden mb-2">
               <a href="https://demo.activeitzone.com/matrimonial/story_details/9" class="text-reset d-block position-relative">
                  <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/KKAjbpd6nEFmOu8ULpdVb2nibGIll2phdSFreg0k.jpg" class="img-fluid">
                  <div class="absolute-bottom-left p-3">
                     <div class="position-relative z-1 p-3">
                        <div class="absolute-full z--1 bg-dark opacity-60"></div>
                        <div class="text-primary text-truncate">Nicole &amp; Dolorita  Prieto</div>
                        <h2 class="h5 mb-0 fs-14 fw-400 lh-1-5 text-truncate-3">
                           You are my faborite place to go to when my mind searches for place.
                        </h2>
                     </div>
                  </div>
               </a>
            </div>
            <div class="card border-gray-800 overflow-hidden mb-2">
               <a href="https://demo.activeitzone.com/matrimonial/story_details/8" class="text-reset d-block position-relative">
                  <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/WmgVsQxylbGHstOU69Vm75Ufb7XtuNu2o6Qn6zSO.jpg" class="img-fluid">
                  <div class="absolute-bottom-left p-3">
                     <div class="position-relative z-1 p-3">
                        <div class="absolute-full z--1 bg-dark opacity-60"></div>
                        <div class="text-primary text-truncate">Ramona &amp; Gregory J Luton</div>
                        <h2 class="h5 mb-0 fs-14 fw-400 lh-1-5 text-truncate-3">
                           I don&#039;t care how many people are in this world I want you end Of story.
                        </h2>
                     </div>
                  </div>
               </a>
            </div>
            <div class="card border-gray-800 overflow-hidden mb-2">
               <a href="https://demo.activeitzone.com/matrimonial/story_details/7" class="text-reset d-block position-relative">
                  <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/BvZIgmLAshq3ZyDe12xoIKYTNq1TbdxJyrjgGLin.jpg" class="img-fluid">
                  <div class="absolute-bottom-left p-3">
                     <div class="position-relative z-1 p-3">
                        <div class="absolute-full z--1 bg-dark opacity-60"></div>
                        <div class="text-primary text-truncate">Donna &amp; Gregory J Luton</div>
                        <h2 class="h5 mb-0 fs-14 fw-400 lh-1-5 text-truncate-3">
                           A love story Could begin Anywhere.
                        </h2>
                     </div>
                  </div>
               </a>
            </div>
            <div class="card border-gray-800 overflow-hidden mb-2">
               <a href="https://demo.activeitzone.com/matrimonial/story_details/6" class="text-reset d-block position-relative">
                  <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/HWFGoAxHu85MrB7Ajzw6MONqzhazCaiSrG9iJVc7.jpg" class="img-fluid">
                  <div class="absolute-bottom-left p-3">
                     <div class="position-relative z-1 p-3">
                        <div class="absolute-full z--1 bg-dark opacity-60"></div>
                        <div class="text-primary text-truncate">Tate &amp; Gregory J Luton</div>
                        <h2 class="h5 mb-0 fs-14 fw-400 lh-1-5 text-truncate-3">
                           The love we give away is the only love we keep
                        </h2>
                     </div>
                  </div>
               </a>
            </div>
            <div class="card border-gray-800 overflow-hidden mb-2">
               <a href="https://demo.activeitzone.com/matrimonial/story_details/5" class="text-reset d-block position-relative">
                  <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/mRiuKrMm3kYkRoxUEP97HrnzbNiYJHietGUjBNNN.jpg" class="img-fluid">
                  <div class="absolute-bottom-left p-3">
                     <div class="position-relative z-1 p-3">
                        <div class="absolute-full z--1 bg-dark opacity-60"></div>
                        <div class="text-primary text-truncate">Jane R &amp; Dolorita Prieto</div>
                        <h2 class="h5 mb-0 fs-14 fw-400 lh-1-5 text-truncate-3">
                           Love is the ultimate expression of the will to live.
                        </h2>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="text-center mt-4">
            <a href="https://demo.activeitzone.com/matrimonial/happy-stories" class="btn btn-primary">View More</a>
         </div>
      </div>
   </section>
   <section class="py-7 bg-white">
      <div class="container">
         <div class="row">
            <div class="col-xl-8 col-xxl-6 mx-auto">
               <div class="text-center pb-6">
                  <h2 class="fw-600 text-dark">Packages</h2>
                  <div class="fs-16 fw-400">Choose any of our packages as per your need. You&#039;ll get your money back anytime if we&#039;re unable to satisfy your need.</div>
               </div>
            </div>
         </div>
         <div class="aiz-carousel" data-items="4" data-xl-items="3" data-md-items="2" data-sm-items="1" data-dots='true' data-infinite='true' data-autoplay='true'>
            <div class="carousel-box">
               <div class="overflow-hidden shadow-none mb-3 border-right">
                  <div class="card-body">
                     <div class="text-center mb-4 mt-3">
                        <img class="mw-100 mx-auto mb-4" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/uYGlmDARpbT2sjJ4x3YTm1GsFQ5I78GOa8lWgMQq.png" height="130">
                        <h5 class="mb-3 h5 fw-600">Free</h5>
                     </div>
                     <ul class="list-group list-group-raw fs-15 mb-5">
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           5 Express Interests
                        </li>
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           2 Galley Photo Upload
                        </li>
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           0 Contact Info view
                        </li>
                        <li class="list-group-item py-2 text-line-through">
                           <i class="las la-check text-success mr-2"></i>
                           Show Auto Profile Match
                        </li>
                     </ul>
                     <div class="mb-5 text-dark text-center">
                        <span class="display-4 fw-600 lh-1 mb-0">Free</span>
                        <span class="text-secondary d-block">10 Days</span>
                     </div>
                     <div class="text-center mb-3">
                        <a href="javascript:void(0);" class="btn btn-light" ><del>Purchase This Package</del></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-box">
               <div class="overflow-hidden shadow-none mb-3 border-right">
                  <div class="card-body">
                     <div class="text-center mb-4 mt-3">
                        <img class="mw-100 mx-auto mb-4" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/zzOHNo1lfGayWCnT9xK1xHB8VjkAzOSnb14ibeup.png" height="130">
                        <h5 class="mb-3 h5 fw-600">Bronze Package</h5>
                     </div>
                     <ul class="list-group list-group-raw fs-15 mb-5">
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           10 Express Interests
                        </li>
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           10 Galley Photo Upload
                        </li>
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           5 Contact Info view
                        </li>
                        <li class="list-group-item py-2 text-line-through">
                           <i class="las la-check text-success mr-2"></i>
                           Show Auto Profile Match
                        </li>
                     </ul>
                     <div class="mb-5 text-dark text-center">
                        <span class="display-4 fw-600 lh-1 mb-0">10$</span>
                        <span class="text-secondary d-block">5 Days</span>
                     </div>
                     <div class="text-center mb-3">
                        <button type="submit" onclick="loginModal()" class="btn btn-primary" >Purchase This Package</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-box">
               <div class="overflow-hidden shadow-none mb-3 border-right">
                  <div class="card-body">
                     <div class="text-center mb-4 mt-3">
                        <img class="mw-100 mx-auto mb-4" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/UIOcsIe8TMVx6Rp7Wbx9ig5kw6X2g2rSxKUNsPNQ.png" height="130">
                        <h5 class="mb-3 h5 fw-600">Silver Package</h5>
                     </div>
                     <ul class="list-group list-group-raw fs-15 mb-5">
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           20 Express Interests
                        </li>
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           15 Galley Photo Upload
                        </li>
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           10 Contact Info view
                        </li>
                        <li class="list-group-item py-2 text-line-through">
                           <i class="las la-check text-success mr-2"></i>
                           Show Auto Profile Match
                        </li>
                     </ul>
                     <div class="mb-5 text-dark text-center">
                        <span class="display-4 fw-600 lh-1 mb-0">25$</span>
                        <span class="text-secondary d-block">60 Days</span>
                     </div>
                     <div class="text-center mb-3">
                        <button type="submit" onclick="loginModal()" class="btn btn-primary" >Purchase This Package</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-box">
               <div class="overflow-hidden shadow-none mb-3 border-right">
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
                           20 Galley Photo Upload
                        </li>
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           15 Contact Info view
                        </li>
                        <li class="list-group-item py-2 text-line-through">
                           <i class="las la-check text-success mr-2"></i>
                           Show Auto Profile Match
                        </li>
                     </ul>
                     <div class="mb-5 text-dark text-center">
                        <span class="display-4 fw-600 lh-1 mb-0">35$</span>
                        <span class="text-secondary d-block">75 Days</span>
                     </div>
                     <div class="text-center mb-3">
                        <button type="submit" onclick="loginModal()" class="btn btn-primary" >Purchase This Package</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-box">
               <div class="overflow-hidden shadow-none mb-3 border-right">
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
                           80 Galley Photo Upload
                        </li>
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           20 Contact Info view
                        </li>
                        <li class="list-group-item py-2 text-line-through">
                           <i class="las la-check text-success mr-2"></i>
                           Show Auto Profile Match
                        </li>
                     </ul>
                     <div class="mb-5 text-dark text-center">
                        <span class="display-4 fw-600 lh-1 mb-0">100$</span>
                        <span class="text-secondary d-block">120 Days</span>
                     </div>
                     <div class="text-center mb-3">
                        <button type="submit" onclick="loginModal()" class="btn btn-primary" >Purchase This Package</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-box">
               <div class="overflow-hidden shadow-none mb-3 border-right">
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
                           500 Galley Photo Upload
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
                        <span class="display-4 fw-600 lh-1 mb-0">100$</span>
                        <span class="text-secondary d-block">500 Days</span>
                     </div>
                     <div class="text-center mb-3">
                        <button type="submit" onclick="loginModal()" class="btn btn-primary" >Purchase This Package</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-box">
               <div class="overflow-hidden shadow-none mb-3 border-right">
                  <div class="card-body">
                     <div class="text-center mb-4 mt-3">
                        <img class="mw-100 mx-auto mb-4" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/ccZXfUBJdeI3nVlTaDjj5XktantwFNh70bYVXTJR.png" height="130">
                        <h5 class="mb-3 h5 fw-600">Professional Package</h5>
                     </div>
                     <ul class="list-group list-group-raw fs-15 mb-5">
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           1000 Express Interests
                        </li>
                        <li class="list-group-item py-2">
                           <i class="las la-check text-success mr-2"></i>
                           1000 Galley Photo Upload
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
                        <span class="display-4 fw-600 lh-1 mb-0">300$</span>
                        <span class="text-secondary d-block">365 Days</span>
                     </div>
                     <div class="text-center mb-3">
                        <button type="submit" onclick="loginModal()" class="btn btn-primary" >Purchase This Package</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="py-7 bg-cover bg-center text-white" style="background-image: url('https://demo.activeitzone.com/matrimonial/public/uploads/all/LXbZN69RAoSGbxwxt5gk9IyItmqzHlklA03hsPYO.png');">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 col-xl-9 col-xxl-6 mx-auto">
               <div class="text-center section-title mb-5">
                  <h2 class="fw-600 mb-3"></h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-10 mx-auto">
               <div class="aiz-carousel large-arrow" data-items="1" data-arrows='true' data-infinite='true' data-autoplay='true'>
                  <div class="carousel-box">
                     <div class="text-center px-lg-9">
                        <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/Yu77XFn8brOtsiEiRzQgcqekDk1fBhEIBUd5WzjM.jpg" class="size-180px img-fit mx-auto rounded-circle border border-white border-width-5 shadow-lg mb-5">
                        <div class="fs-18 fw-300 font-italic">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</div>
                        <i class="las la-quote-right la-10x text-dark opacity-30"></i>
                     </div>
                  </div>
                  <div class="carousel-box">
                     <div class="text-center px-lg-9">
                        <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/LH0T5CcaRM0dYSiFx1sSrNHQWKje7QtvFrngtGHL.jpg" class="size-180px img-fit mx-auto rounded-circle border border-white border-width-5 shadow-lg mb-5">
                        <div class="fs-18 fw-300 font-italic">Ceck But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</div>
                        <i class="las la-quote-right la-10x text-dark opacity-30"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   @endsection