<!doctype html>
<html lang="en">


<!-- Mirrored from shreethemes.net/geotrip-live/geotrip/bookingpage-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:09:41 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GeoTrip - Tour & Travel Booking Agency HTML Template | ThemezHub</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">

  <!-- All Plugins -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/animation.css" rel="stylesheet">
  <link href="assets/css/dropzone.min.css" rel="stylesheet">
  <link href="assets/css/flatpickr.min.css" rel="stylesheet">
  <link href="assets/css/flickity.min.css" rel="stylesheet">
  <link href="assets/css/lightbox.min.css" rel="stylesheet">
  <link href="assets/css/magnifypopup.css" rel="stylesheet">
  <link href="assets/css/select2.min.css" rel="stylesheet">
  <link href="assets/css/rangeSlider.min.css" rel="stylesheet">
  <link href="assets/css/prism.css" rel="stylesheet">

  <!-- Fontawesome & Bootstrap Icons CSS -->
  <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/fontawesome.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div id="preloader">
		<div class="preloader"><span></span><span></span></div>
	</div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->
		<div class="header header-theme">
			<div class="container">
				<nav id="navigation" class="navigation navigation-landscape">
					<div class="nav-header">
						<a class="nav-brand static-show" href="#"><img src="assets/img/logo-light.png" class="logo" alt=""></a>
						<a class="nav-brand mob-show" href="#"><img src="assets/img/logo.png" class="logo" alt=""></a>
						<div class="nav-toggle"></div>
						<div class="mobile_nav">
							<ul>
								<li class="currencyDropdown me-2">
									<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#currencyModal"><span
											class="fw-medium">INR</span></a>
								</li>
								<li class="languageDropdown me-2">
									<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#countryModal"><img
											src="assets/img/flag/flag.png" class="img-fluid" width="17" alt="Country"></a>
								</li>
								<li>
									<a href="#" class="bg-light-primary text-primary rounded" data-bs-toggle="modal"
										data-bs-target="#login"><i class="fa-regular fa-circle-user fs-6"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="nav-menus-wrapper" style="transition-property: none;">
						<ul class="nav-menu">

							<li class="active"><a href="home-stay.php"><i class="fa-solid fa-umbrella-beach me-2"></i>Stays</a></li>
							<li><a href="home-flight.php"><i class="fa-solid fa-jet-fighter me-2"></i>Flights</a></li>
							<li><a href="home-hotel.php"><i class="fa-solid fa-spa me-2"></i>Hotels</a></li>
							<li><a href="home-rental.php"><i class="fa-solid fa-house-circle-check me-2"></i>Rental</a></li>
							<li><a href="home-car.php"><i class="fa-solid fa-car me-2"></i>Cars</a></li>

						</ul>

						<ul class="nav-menu nav-menu-social align-to-right">
							<li class="currencyDropdown me-2">
								<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#currencyModal"><span
										class="fw-medium">INR</span></a>
							</li>
							<li class="languageDropdown me-2">
								<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#countryModal"><img
										src="assets/img/flag/flag.png" class="img-fluid" width="17" alt="Country"></a>
							</li>
							<li class="list-buttons light">
								<a href="#" data-bs-toggle="modal" data-bs-target="#login"><i
										class="fa-regular fa-circle-user fs-6 me-2"></i>Sign In / Register</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ============================ Booking Page ================================== -->
		<section class="pt-4 gray-simple position-relative">
			<div class="container">

				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div id="stepper" class="bs-stepper stepper-outline mb-5">
							<div class="bs-stepper-header">
								<!-- Step 1 -->
								<div class="step completed" data-target="#step-1">
									<div class="text-center">
										<button type="button" class="step-trigger mb-0" id="steppertrigger1">
											<span class="bs-stepper-circle"><i class="fa-solid fa-check"></i></span>
										</button>
										<h6 class="bs-stepper-label d-none d-md-block">Tour Review</h6>
									</div>
								</div>
								<div class="line"></div>

								<!-- Step 2 -->
								<div class="step completed" data-target="#step-2">
									<div class="text-center">
										<button type="button" class="step-trigger mb-0" id="steppertrigger2">
											<span class="bs-stepper-circle">2</span>
										</button>
										<h6 class="bs-stepper-label d-none d-md-block">Traveler Info</h6>
									</div>
								</div>
								<div class="line"></div>

								<!-- Step 3 -->
								<div class="step active" data-target="#step-3">
									<div class="text-center">
										<button type="button" class="step-trigger mb-0" id="steppertrigger3">
											<span class="bs-stepper-circle">3</span>
										</button>
										<h6 class="bs-stepper-label d-none d-md-block">Make Payment</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row align-items-start">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="div-title d-flex align-items-center mb-3">
							<h4>Billing Details</h4>
						</div>
						<div class="row align-items-start">
							<div class="col-xl-8 col-lg-8 col-md-12">

								<div class="card mb-3">
									<div class="card-header">
										<h4>Basic Detail</h4>
									</div>
									<div class="card-body">
										<div class="row">

											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Billing Name</label>
													<input type="text" class="form-control" placeholder="First Name">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Email</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Phone</label>
													<input type="text" class="form-control" placeholder="Phone Number">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Address 01</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Address 02</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Country</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">City\State</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Postal Code</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Special notes</label>
													<textarea class="form-control ht-200"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="side-block card rounded-2 p-3">
									<div class="d-flex align-items-center justify-content-between mb-3">
										<h5 class="fw-semibold fs-6 mb-0">Payment Summary</h5>
										<div class="d-flex align-items-start"><a href="#" class="text-md fw-semibold text-primary">Manage
												Cards</a></div>
									</div>
									<div class="mid-block mb-2">
										<div class="paymntCardsoption-groups">
											<div class="single-paymntCardsoption d-block position-relative mb-2">
												<div class="paymnt-line active d-flex align-items-center justify-content-start">
													<div class="position-relative text-center">
														<div class="form-check lg mb-0">
															<input class="form-check-input" type="radio" name="payment" id="visa" checked>
															<label class="form-check-label" for="visa"></label>
														</div>
													</div>
													<div class="paymnt-line-caps d-flex align-items-center justify-content-start">
														<div class="paymnt-caps-icons d-inline-flex">
															<i class="fa-brands fa-cc-visa text-seegreen fs-1"></i>
														</div>
														<div class="paymnt-caps-details ps-2">
															<span
																class="text-uppercase d-block fw-semibold text-md text-dark lh-2 mb-0">Visa****7542</span>
															<span class="text-sm text-muted lh-2">Expired on 10/25</span>
														</div>
													</div>
												</div>
											</div>
											<div class="single-paymntCardsoption d-block position-relative mb-2">
												<div class="paymnt-line d-flex align-items-center justify-content-start">
													<div class="position-relative text-center">
														<div class="form-check lg mb-0">
															<input class="form-check-input" type="radio" name="payment" id="master">
															<label class="form-check-label" for="master"></label>
														</div>
													</div>
													<div class="paymnt-line-caps d-flex align-items-center justify-content-start">
														<div class="paymnt-caps-icons d-inline-flex">
															<i class="fa-brands fa-cc-mastercard text-danger fs-1"></i>
														</div>
														<div class="paymnt-caps-details ps-2">
															<span
																class="text-uppercase d-block fw-semibold text-md text-dark lh-2 mb-0">Master****8956</span>
															<span class="text-sm text-muted lh-2">Expired on 10/24</span>
														</div>
													</div>
												</div>
											</div>
											<div class="single-paymntCardsoption d-block position-relative mb-2">
												<div class="paymnt-line d-flex align-items-center justify-content-start">
													<div class="position-relative text-center">
														<div class="form-check lg mb-0">
															<input class="form-check-input" type="radio" name="payment" id="amazone">
															<label class="form-check-label" for="amazone"></label>
														</div>
													</div>
													<div class="paymnt-line-caps d-flex align-items-center justify-content-start">
														<div class="paymnt-caps-icons d-inline-flex">
															<i class="fa-brands fa-cc-amazon-pay text-warning fs-1"></i>
														</div>
														<div class="paymnt-caps-details ps-2">
															<span class="text-uppercase d-block fw-semibold text-md text-dark lh-2 mb-0">Amazone
																Pay</span>
														</div>
													</div>
												</div>
											</div>
											<div class="single-paymntCardsoption d-block position-relative mb-2">
												<div class="paymnt-line d-flex align-items-center justify-content-start">
													<div class="position-relative text-center">
														<div class="form-check lg mb-0">
															<input class="form-check-input" type="radio" name="payment" id="paypal">
															<label class="form-check-label" for="paypal"></label>
														</div>
													</div>
													<div class="paymnt-line-caps d-flex align-items-center justify-content-start">
														<div class="paymnt-caps-icons d-inline-flex">
															<i class="fa-brands fa-cc-paypal text-info fs-1"></i>
														</div>
														<div class="paymnt-caps-details ps-2">
															<span class="text-uppercase d-block fw-semibold text-md text-dark lh-2 mb-0">PayPal</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="summary-block d-block mb-3">
										<h5 class="fw-semibold fs-6">Summary</h5>
										<ul class="list-group list-group-borderless">
											<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
												<span class="fw-medium text-sm text-muted mb-0">Payment:</span>
												<span class="fw-semibold text-md">$772.40</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
												<span class="fw-medium text-sm text-muted mb-0">Payment Methode fee</span>
												<span class="fw-semibold text-md">$0</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
												<span class="fw-medium text-sm text-muted mb-0">Total Price</span>
												<span class="fw-semibold text-success text-md">$772.40</span>
											</li>
										</ul>
									</div>
									<div class="bott-block mb-3">
										<div
											class="d-flex align-items-center justify-content-center py-2 px-3 rounded-2 bg-light-success mb-2">
											<div class="d-inline-flex text-success fs-2"><i class="fa-solid fa-shield-heart"></i></div>
											<div class="d-inline-flex flex-column ps-2">
												<span class="d-block text-md text-dark fw-semibold lh-2">100% Cashback guarantee</span>
												<span class="d-block text-sm text-muted-2 lh-2">We protect your money</span>
											</div>
										</div>
										<button class="btn fw-medium btn-primary full-width" type="button">Pay Now $772.40</button>
									</div>
									<div class="autopay-block-block">
										<div class="d-flex align-items-center justify-content-between">
											<div class="fluy-autpay">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" role="switch" id="autopay">
													<label class="form-check-label ms-1" for="autopay">Auto Pay</label>
												</div>
											</div>
											<div class="fluy-bkr"><a href="#" class="fw-semibold text-md text-dark">Add New Card</a></div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="text-center d-flex align-items-center justify-content-center mt-4">
							<a href="bookingpage-02.php" class="btn btn-md btn-dark fw-semibold mx-2"><i
									class="fa-solid fa-arrow-left me-2"></i>Previous</a>
							<a href="bookingpage-success.php" class="btn btn-md btn-primary fw-semibold mx-2">Submit & Confirm<i
									class="fa-solid fa-arrow-right ms-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Booking Page End ================================== -->


		<!-- ============================ Footer Start ================================== -->
		<footer class="footer skin-dark-footer">
			<div>
				<div class="container">
					<div class="row">

						<div class="col-lg-3 col-md-4">
							<div class="footer-widget">
								<div class="d-flex align-items-start flex-column mb-3">
									<div class="d-inline-block"><img src="assets/img/logo-light.png" class="img-fluid" width="160"
											alt="Footer Logo"></div>
								</div>
								<div class="footer-add pe-xl-3">
									<p>We make your dream more beautiful & enjoyful with lots of happiness.</p>
								</div>
								<div class="foot-socials">
									<ul>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a></li>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin"></i></a></li>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus"></i></a></li>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-dribbble"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4">
							<div class="footer-widget">
								<h4 class="widget-title">The Navigation</h4>
								<ul class="footer-menu">
									<li><a href="JavaScript:Void(0);">Talent Marketplace</a></li>
									<li><a href="JavaScript:Void(0);">Payroll Services</a></li>
									<li><a href="JavaScript:Void(0);">Direct Contracts</a></li>
									<li><a href="JavaScript:Void(0);">Hire Worldwide</a></li>
									<li><a href="JavaScript:Void(0);">Hire in the USA</a></li>
									<li><a href="JavaScript:Void(0);">How to Hire</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-4">
							<div class="footer-widget">
								<h4 class="widget-title">Our Resources</h4>
								<ul class="footer-menu">
									<li><a href="JavaScript:Void(0);">Free Business tools</a></li>
									<li><a href="JavaScript:Void(0);">Affiliate Program</a></li>
									<li><a href="JavaScript:Void(0);">Success Stories</a></li>
									<li><a href="JavaScript:Void(0);">Upwork Reviews</a></li>
									<li><a href="JavaScript:Void(0);">Resources</a></li>
									<li><a href="JavaScript:Void(0);">Help & Support</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-6">
							<div class="footer-widget">
								<h4 class="widget-title">The Company</h4>
								<ul class="footer-menu">
									<li><a href="JavaScript:Void(0);">About Us</a></li>
									<li><a href="JavaScript:Void(0);">Leadership</a></li>
									<li><a href="JavaScript:Void(0);">Contact Us</a></li>
									<li><a href="JavaScript:Void(0);">Investor Relations</a></li>
									<li><a href="JavaScript:Void(0);">Trust, Safety & Security</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="footer-widget">
								<h4 class="widget-title">Payment Methods</h4>
								<div class="pmt-wrap">
									<img src="assets/img/payment.png" class="img-fluid" alt="">
								</div>
								<div class="our-prtwrap mt-4">
									<div class="prtn-title">
										<p class="text-light opacity-75 fw-medium">Our Partners</p>
									</div>
									<div class="prtn-thumbs d-flex align-items-center justify-content-start">
										<div class="pmt-wrap pe-4">
											<img src="assets/img/mytrip.png" class="img-fluid" alt="">
										</div>
										<div class="pmt-wrap pe-4">
											<img src="assets/img/tripadv.png" class="img-fluid" alt="">
										</div>
										<div class="pmt-wrap pe-4">
											<img src="assets/img/goibibo.png" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="footer-bottom border-top">
				<div class="container">
					<div class="row align-items-center justify-content-between">

						<div class="col-xl-6 col-lg-6 col-md-6">
							<p class="mb-0">© 2023 GeoTrip Design by Themezhub.</p>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6">
							<ul class="p-0 d-flex justify-content-start justify-content-md-end text-start text-md-end m-0">
								<li><a href="#">Terms of services</a></li>
								<li class="ms-3"><a href="#">Privacy Policies</a></li>
								<li class="ms-3"><a href="#">Cookies</a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</footer>
		<!-- ============================ Footer End ================================== -->

		<!-- Log In Modal -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="loginmodal">
					<div class="modal-header">
						<h4 class="modal-title fs-6">Sign In / Register</h4>
						<a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
								class="fa-solid fa-square-xmark"></i></a>
					</div>
					<div class="modal-body">
						<div class="modal-login-form py-4 px-md-3 px-0">
							<form>

								<div class="form-floating mb-4">
									<input type="email" class="form-control" placeholder="name@example.com">
									<label>User Name</label>
								</div>
								<div class="form-floating mb-4">
									<input type="password" class="form-control" placeholder="Password">
									<label>Password</label>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
								</div>

								<div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
									<div class="modal-flex-first">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="savepassword" value="option1">
											<label class="form-check-label" for="savepassword">Save Password</label>
										</div>
									</div>
									<div class="modal-flex-last">
										<a href="JavaScript:Void(0);" class="text-primary fw-medium">Forget Password?</a>
									</div>
								</div>
							</form>
						</div>

						<div class="prixer px-3">
							<div class="devider-wraps position-relative">
								<div class="devider-text text-muted-2 text-md">Sign In with More Methods</div>
							</div>
						</div>

						<div class="social-login py-4 px-2">
							<ul class="row align-items-center justify-content-between g-3 p-0 m-0">
								<li class="col"><a href="#" class="square--60 border br-dashed rounded-2 full-width"><i
											class="fa-brands fa-facebook color--facebook fs-2"></i></a></li>
								<li class="col"><a href="#" class="square--60 border br-dashed rounded-2"><i
											class="fa-brands fa-whatsapp color--whatsapp fs-2"></i></a></li>
								<li class="col"><a href="#" class="square--60 border br-dashed rounded-2"><i
											class="fa-brands fa-linkedin color--linkedin fs-2"></i></a></li>
								<li class="col"><a href="#" class="square--60 border br-dashed rounded-2"><i
											class="fa-brands fa-dribbble color--dribbble fs-2"></i></a></li>
								<li class="col"><a href="#" class="square--60 border br-dashed rounded-2"><i
											class="fa-brands fa-twitter color--twitter fs-2"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="modal-footer align-items-center justify-content-center">
						<p>Don't have an account yet?<a href="signup.php" class="text-primary fw-medium ms-1">Sign Up</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Choose Currency Modal -->
		<div class="modal modal-lg fade" id="currencyModal" tabindex="-1" aria-labelledby="currenyModalLabel"
		  aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h4 class="modal-title fs-6" id="currenyModalLabel">Select Your Currency</h4>
				<a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
					class="fa-solid fa-square-xmark"></i></a>
			  </div>
			  <div class="modal-body">
				<div class="allCurrencylist">

				  <div class="suggestedCurrencylist-wrap mb-4">
					<div class="d-inline-block mb-0 ps-3">
					  <h5 class="fs-6 fw-bold">Suggested Currency For you</h5>
					</div>
					<div class="suggestedCurrencylists">
					  <ul
						class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2 gy-2 gx-3 m-0 p-0">
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">United State Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">USD</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Pound Sterling</div>
							<div class="text-muted-2 text-md text-uppercase">GBP</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency active" href="#">
							<div class="text-dark text-md fw-medium">Indian Rupees</div>
							<div class="text-muted-2 text-md text-uppercase">Inr</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Euro</div>
							<div class="text-muted-2 text-md text-uppercase">EUR</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Australian Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">aud</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Thai Baht</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
					  </ul>
					</div>
				  </div>

				  <div class="suggestedCurrencylist-wrap">
					<div class="d-inline-block mb-0 ps-3">
					  <h5 class="fs-6 fw-bold">All Currencies</h5>
					</div>
					<div class="suggestedCurrencylists">
					  <ul
						class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2 gy-2 gx-3 m-0 p-0">
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">United State Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">USD</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Property currency</div>
							<div class="text-muted-2 text-md text-uppercase">GBP</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Argentine Peso</div>
							<div class="text-muted-2 text-md text-uppercase">EUR</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Azerbaijani Manat</div>
							<div class="text-muted-2 text-md text-uppercase">Inr</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Australian Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">aud</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Bahraini Dinar</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Brazilian Real</div>
							<div class="text-muted-2 text-md text-uppercase">USD</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Bulgarian Lev</div>
							<div class="text-muted-2 text-md text-uppercase">GBP</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Canadian Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">EUR</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Chilean Peso</div>
							<div class="text-muted-2 text-md text-uppercase">Inr</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Colombian Peso</div>
							<div class="text-muted-2 text-md text-uppercase">aud</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Danish Krone</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Egyptian Pound</div>
							<div class="text-muted-2 text-md text-uppercase">USD</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Hungarian Forint</div>
							<div class="text-muted-2 text-md text-uppercase">GBP</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Japanese Yen</div>
							<div class="text-muted-2 text-md text-uppercase">EUR</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Jordanian Dinar</div>
							<div class="text-muted-2 text-md text-uppercase">Inr</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Kuwaiti Dinar</div>
							<div class="text-muted-2 text-md text-uppercase">aud</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Malaysian Ringgit</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="#">
							<div class="text-dark text-md fw-medium">Singapore Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
					  </ul>
					</div>
				  </div>

				</div>
			  </div>
			</div>
		  </div>
		</div>


		<!-- Choose Countries Modal -->
		<div class="modal modal-lg fade" id="countryModal" tabindex="-1" aria-labelledby="countryModalLabel"
		  aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h4 class="modal-title fs-6" id="countryModalLabel">Select Your Country</h4>
				<a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
					class="fa-solid fa-square-xmark"></i></a>
			  </div>
			  <div class="modal-body">
				<div class="allCountrieslist">

				  <div class="suggestedCurrencylist-wrap mb-4">
					<div class="d-inline-block mb-0 ps-3">
					  <h5 class="fs-6 fw-bold">Suggested Countries For you</h5>
					</div>
					<div class="suggestedCurrencylists">
					  <ul
						class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/united-states.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/united-kingdom.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Pound Sterling</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry active" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Indian Rupees</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Euro</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Thai Baht</div>
						  </a>
						</li>
					  </ul>
					</div>
				  </div>

				  <div class="suggestedCurrencylist-wrap">
					<div class="d-inline-block mb-0 ps-3">
					  <h5 class="fs-6 fw-bold">All Countries</h5>
					</div>
					<div class="suggestedCurrencylists">
					  <ul
						class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
						<li class="col">
							<a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/united-states.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/vietnam.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Property currency</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Argentine Peso</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Azerbaijani Manat</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/japan.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Bahraini Dinar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/portugal.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Brazilian Real</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/italy.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Bulgarian Lev</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Canadian Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Chilean Peso</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/european.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Colombian Peso</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Danish Krone</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Egyptian Pound</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Hungarian Forint</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Japanese Yen</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Jordanian Dinar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Kuwaiti Dinar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Malaysian Ringgit</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="#">
							<div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Singapore Dollar</div>
						  </a>
						</li>
					  </ul>
					</div>
				  </div>

				</div>
			  </div>
			</div>
		  </div>
		</div>


		<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->


	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dropzone.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>
    <script src="assets/js/flickity.pkgd.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/rangeslider.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/prism.js"></script>

	<script src="assets/js/custom.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

</body>


<!-- Mirrored from shreethemes.net/geotrip-live/geotrip/bookingpage-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:09:42 GMT -->
</html>