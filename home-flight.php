<?php
// ? include session start
session_start();

include "./includes/actions.php";

// ? redirect the user back to login, if they haven't logged in





?>

<!doctype html>
<html lang="en">


<!-- Mirrored from shreethemes.net/geotrip-live/geotrip/home-flight.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:09:09 GMT -->
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
		<?php
        include "includes/header-03.php";
		?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ============================ Hero Banner  Start================================== -->
		<div class="image-cover hero-header bg-white" style="background:url(assets/img/banner-7.jpg)no-repeat;" data-overlay="6">
			<div class="container">

				<!-- Search Form -->
				<div class="row justify-content-center align-items-center">
					<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
						<div class="position-relative text-center mb-5">
							<h1>Starts Your Trip with <span class="position-relative z-4">GeoTrip<span
										class="position-absolute top-50 start-50 translate-middle d-none d-md-block mt-4">
										<svg width="185px" height="23px" viewBox="0 0 445.5 23">
											<path class="fill-white opacity-7"
												d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z">
											</path>
										</svg>
									</span></span></h1>
							<p class="fs-5 fw-light">Take a little break from the work strss of everyday. Discover plan trip and
								explore beautiful destinations.</p>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="search-wrap bg-white rounded-3 p-3">
						  <div class="search-upper">
							<div class="d-flex align-items-center justify-content-between flex-wrap">
							  <div class="flx-start mb-sm-0 mb-2">
								<div class="form-check form-check-inline">
								  <input class="tab-pane" type="radio" name="trip" id="return" value="option1" checked>
								  <label class="tab-pane show active" for="return">Return</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="trip" id="oneway" value="option2">
								  <label class="form-check-label" for="oneway">One Way</label>
								</div>
							  </div>
							  <div class="flx-end d-flex align-items-center flex-wrap">
								<div class="px-sm-2 pb-3 pt-0 ps-0 mob-full">
								  <div class="booking-form__input guests-input">
									<i class="fa-solid fa-user-clock text-muted me-2"></i><button name="guests-btn"
									  id="guests-input-btn">1
									  Guest</button>
									<div class="guests-input__options" id="guests-input-options">
									  <div>
										<span class="guests-input__ctrl minus" id="adults-subs-btn"><i
											class="fa-solid fa-minus"></i></span>
										<span class="guests-input__value"><span id="guests-count-adults">1</span>Adults</span>
										<span class="guests-input__ctrl plus" id="adults-add-btn"><i
											class="fa-solid fa-plus"></i></span>
									  </div>
									  <div>
										<span class="guests-input__ctrl minus" id="children-subs-btn"><i
											class="fa-solid fa-minus"></i></span>
										<span class="guests-input__value"><span id="guests-count-children">0</span>Children</span>
										<span class="guests-input__ctrl plus" id="children-add-btn"><i
											class="fa-solid fa-plus"></i></span>
									  </div>
									  <div>
										<span class="guests-input__ctrl minus" id="room-subs-btn"><i
											class="fa-solid fa-minus"></i></span>
										<span class="guests-input__value"><span id="guests-count-room">0</span>Rooms</span>
										<span class="guests-input__ctrl plus" id="room-add-btn"><i
											class="fa-solid fa-plus"></i></span>
									  </div>
									</div>
								  </div>
								</div>
								<div class="ps-1 pb-3 pt-0 mob-full">
								  <div class="dropdowns">
									<div class="selections">
									  <i class="fa-solid fa-basket-shopping text-muted me-2"></i><span
										class="selected">Economy</span>
									  <div class="caret"></div>
									</div>
									<ul class="menu">
									  <li class="active">Economy</li>
									  <li>Premium Economy</li>
									  <li>Premium Economy</li>
									  <li>Business/First</li>
									  <li>Business</li>
									</ul>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						  <div class="row gx-lg-2 g-3">

							<div class="col-xl-6 col-lg-6 col-md-12">
							  <div class="row gy-3 gx-lg-2 gx-3">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
								  <div class="form-group hdd-arrow mb-0">
									<select class="leaving form-control fw-bold">
									  <option value="">Select</option>
									  <option value="ny">New York</option>
									  <option value="sd">San Diego</option>
									  <option value="sj">San Jose</option>
									  <option value="ph">Philadelphia</option>
									  <option value="nl">Nashville</option>
									  <option value="sf">San Francisco</option>
									  <option value="hu">Houston</option>
									  <option value="sa">San Antonio</option>
									</select>
								  </div>
								  <div class="btn-flip-icon mt-md-0">
									<button class="p-0 m-0 text-primary"><i class="fa-solid fa-right-left"></i></button>
								  </div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
								  <div class="form-groupp hdd-arrow mb-0">
									<select class="goingto form-control fw-bold">
									  <option value="">Select</option>
									  <option value="lv">Las Vegas</option>
									  <option value="la">Los Angeles</option>
									  <option value="kc">Kansas City</option>
									  <option value="no">New Orleans</option>
									  <option value="kc">Jacksonville</option>
									  <option value="lb">Long Beach</option>
									  <option value="cl">Columbus</option>
									  <option value="cn">Canada</option>
									</select>
								  </div>
								</div>
							  </div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12">
							  <div class="row gy-3 gx-lg-2 gx-3">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
								  <div class="form-group mb-0">
									<input class="form-control fw-bold choosedate" type="text" placeholder="Departure.."
									  readonly="readonly">
								  </div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
								  <div class="form-group mb-0">
									<input class="form-control fw-bold choosedate" type="text" placeholder="Return.."
									  readonly="readonly">
								  </div>
								</div>
							  </div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-12">
							  <div class="form-group mb-0">
								<button type="button" class="btn btn-primary full-width fw-medium"><i
									class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
							  </div>
							</div>

						  </div>
						</div>
					</div>
				</div>
				<!-- </row> -->

			</div>
		</div>
		<!-- ============================ Hero Banner End ================================== -->


		<!-- ============================ Offers Start ================================== -->
		<section class="pt-4 pb-0">
			<div class="container">
				<div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div
											class="offers-pic bg-light-success p-3 rounded-3 d-flex align-items-center justify-content-center h-100">
											<img src="assets/img/air-4.png" class="img-fluid rounded" width="70" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>30% Off</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">On Domestic Flight For USA</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Valid 31 March 2023</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div
											class="offers-pic bg-light-warning p-3 rounded-3 d-flex align-items-center justify-content-center h-100">
											<img src="assets/img/air-2.png" class="img-fluid rounded" width="70" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>40% Off</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">On International Routes</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Valid 31 March 2023</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div
											class="offers-pic bg-light-info p-3 rounded-3 d-flex align-items-center justify-content-center h-100">
											<img src="assets/img/air-5.png" class="img-fluid rounded" width="70" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>15% Off</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">On National Routes</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Valid 31 March 2023</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Offers End ================================== -->


		<!-- ============================ Popular Domestic Routes Start ================================== -->
		<section class="py-5">
			<div class="container">

				<div class="row align-items-center justify-content-between mb-3">
					<div class="col-8">
						<div class="upside-heading">
							<h5 class="fw-bold fs-6 m-0">Explore Top Domestic Routes</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="text-end grpx-btn">
							<a href="#" class="btn btn-light-primary btn-md fw-medium">More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center gy-4 gx-3">

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="flight-search.php" class="card rounded-3 border br-dashed h-100 m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/destination/tr-1.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>New York</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Los Angeles</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3 days</span>
										</p>
									</div>
									<div class="flight-foots">
										<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span>
										</h5>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="flight-search.php" class="card rounded-3 border br-dashed h-100 m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/destination/tr-2.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>New York</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Los Angeles</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3 days</span>
										</p>
									</div>
									<div class="flight-foots">
										<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span>
										</h5>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="flight-search.php" class="card rounded-3 border br-dashed h-100 m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/destination/tr-3.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>New York</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Los Angeles</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3 days</span>
										</p>
									</div>
									<div class="flight-foots">
										<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span>
										</h5>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="flight-search.php" class="card rounded-3 border br-dashed h-100 m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/destination/tr-6.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>New York</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Los Angeles</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3 days</span>
										</p>
									</div>
									<div class="flight-foots">
										<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span>
										</h5>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Popular Domestic Routes End ================================== -->


		<!-- ============================ Popular Destination Start ================================== -->
		<section class="pt-0 pb-5">
			<div class="container">

				<div class="row align-items-center justify-content-between mb-3">
					<div class="col-8">
						<div class="upside-heading">
							<h5 class="fw-bold fs-6 m-0">Browse Popular Destinations</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="text-end grpx-btn">
							<a href="#" class="btn btn-light-primary btn-md fw-medium">More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center gy-4 gx-3">

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="cardCities cursor rounded-2">
							<div class="cardCities-image ratio ratio-4">
								<img src="assets/img/city/ct-12.png" class="img-fluid object-fit" alt="image">
							</div>

							<div class="citiesCard-content d-flex flex-column justify-content-between text-center px-4 py-4">
								<div class="cardCities-bg"></div>

								<div class="citiesCard-topcaps">
									<div class="d-flex align-items-center justify-content-center flex-wrap">
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">10 Hotels</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">25 Flights</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">17 Cars</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">22 Tours</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">36 Activities</div>
									</div>
								</div>

								<div class="citiesCard-bottomcaps">
									<h4 class="text-light fs-3 mb-3">Los Angeles</h4>
									<button class="btn btn-whitener full-width fw-medium">Discover<i
											class="fa-solid fa-arrow-trend-up ms-2"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="cardCities cursor rounded-2">
							<div class="cardCities-image ratio ratio-4">
								<img src="assets/img/city/ct-6.png" class="img-fluid object-fit" alt="image">
							</div>

							<div class="citiesCard-content d-flex flex-column justify-content-between text-center px-4 py-4">
								<div class="cardCities-bg"></div>

								<div class="citiesCard-topcaps">
									<div class="d-flex align-items-center justify-content-center flex-wrap">
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">10 Hotels</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">25 Flights</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">17 Cars</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">22 Tours</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">36 Activities</div>
									</div>
								</div>

								<div class="citiesCard-bottomcaps">
									<h4 class="text-light fs-3 mb-3">Chicago</h4>
									<button class="btn btn-whitener full-width fw-medium">Discover<i
											class="fa-solid fa-arrow-trend-up ms-2"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="cardCities cursor rounded-2">
							<div class="cardCities-image ratio ratio-4">
								<img src="assets/img/city/ct-8.png" class="img-fluid object-fit" alt="image">
							</div>

							<div class="citiesCard-content d-flex flex-column justify-content-between text-center px-4 py-4">
								<div class="cardCities-bg"></div>

								<div class="citiesCard-topcaps">
									<div class="d-flex align-items-center justify-content-center flex-wrap">
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">10 Hotels</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">25 Flights</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">17 Cars</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">22 Tours</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">36 Activities</div>
									</div>
								</div>

								<div class="citiesCard-bottomcaps">
									<h4 class="text-light fs-3 mb-3">Las Vegas</h4>
									<button class="btn btn-whitener full-width fw-medium">Discover<i
											class="fa-solid fa-arrow-trend-up ms-2"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="cardCities cursor rounded-2">
							<div class="cardCities-image ratio ratio-4">
								<img src="assets/img/city/ct-9.png" class="img-fluid object-fit" alt="image">
							</div>

							<div class="citiesCard-content d-flex flex-column justify-content-between text-center px-4 py-4">
								<div class="cardCities-bg"></div>

								<div class="citiesCard-topcaps">
									<div class="d-flex align-items-center justify-content-center flex-wrap">
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">10 Hotels</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">25 Flights</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">17 Cars</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">22 Tours</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">36 Activities</div>
									</div>
								</div>

								<div class="citiesCard-bottomcaps">
									<h4 class="text-light fs-3 mb-3">New Orleans</h4>
									<button class="btn btn-whitener full-width fw-medium">Discover<i
											class="fa-solid fa-arrow-trend-up ms-2"></i></button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Popular Destination End ================================== -->


		<!-- ============================ Google & IOS App Start ================================== -->
		<section class="pt-0 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="card rounded-3 border-0 bg-light-primary border-1 m-0 appLink-card p-xl-4 p-3">
							<div class="card-body">
								<div class="row align-items-center justify-content-between">
									<div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
										<div class="appLink-captions">
											<div class="appLink-captions d-flex align-items-center justify-content-start">
												<div class="d-inline-block">
													<img src="assets/img/app-link.png" class="img-fluid" width="65" alt="">
												</div>
												<div class="ps-3 d-block">
													<h2 class="fw-bold fs-2 mb-1">Download App Now!</h2>
													<p>Use Code <span class="text-primary text-uppercase fw-medium">Welcome</span>and get <span
															class="text-success text-uppercase fw-medium">Flat 20%</span> OFF* on your first domestic
														flight booking</p>
												</div>
											</div>
											<div class="appLink-forms mt-4">
												<form>
													<div class="row align-items-center justify-content-start g-0">
														<div class="col-xl-9 col-lg-10 col-md-10 col-sm-12">
															<div class="appLink-frmbox bg-white border br-dashed rounded-2 p-2">
																<div class="row align-items-center g-0">
																	<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
																		<div class="form-group position-relative m-0">
																			<input type="text" class="form-control form-control-md bold border-0 ps-5"
																				placeholder="Enter Mobile Number">
																			<span
																				class="position-absolute top-50 ms-4 translate-middle fw-medium text-dark">+91 -
																			</span>
																		</div>
																	</div>
																	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
																		<button type="button" class="btn btn-md btn-primary full-width fw-medium">Get App
																			Link</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>

									<div class="col-xl-4 col-lg-4 col-md-5 col-sm-12">
										<div class="appLink-buttons text-md-end mt-md-0 mt-4">
											<div class="app-wrap">
												<a href="#" class="d-inline-flex">
													<div
														class="cardApp-box bg-dark border-primary d-inline-flex py-3 px-4 rounded align-items-center mb-3">
														<div class="cardApp-icon"><i class="fa-brands fa-google-play text-light fs-1"></i></div>
														<div class="cardApp-caption text-start ps-3">
															<p class="text-light opacity-75 text-uppercase m-0">Get It On</p>
															<h5 class="fw-bold text-light fs-5 m-0">Google Play</h5>
														</div>
													</div>
												</a>
												<a href="#" class="d-inline-flex">
													<div class="cardApp-box bg-primary d-inline-flex py-3 px-4 rounded align-items-center">
														<div class="cardApp-icon"><i class="fa-brands fa-apple text-light fs-1"></i></div>
														<div class="cardApp-caption text-start ps-3">
															<p class="text-light opacity-75 text-uppercase m-0">Download On The</p>
															<h5 class="fw-bold text-light fs-5 m-0">App Store</h5>
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
			</div>
		</section>
		<!-- ============================ Google & IOS App End ================================== -->


		<!-- ============================ Featured Rental Property Start ================================== -->
		<section class="py-0">
			<div class="container">

				<div class="row align-items-center justify-content-between mb-3">
					<div class="col-8">
						<div class="upside-heading">
							<h5 class="fw-bold fs-6 m-0">Featured Rental In Australia</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="text-end grpx-btn">
							<a href="#" class="btn btn-light-primary btn-md fw-medium">More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center gy-4 gx-3">

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 border br-dashed m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/property/img-8.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-start justify-content-start flex-column">
											<span class="city-destination label text-success bg-light-success mb-1">House</span>
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Pagoda Partners Realty</span>
											</h4>
										</div>
										<div class="detail ellipsis-container mt-3">
											<span class="ellipsis">3 Beds</span>
											<span class="ellipsis">2 Baths</span>
											<span class="ellipsis">2100 sqft</span>
										</div>
									</div>
									<div class="flight-footer">
										<div class="epocsic">
											<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$492</span>
											</h5>
										</div>
										<div class="rates">
											<div class="star-rates">
												<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
													class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
													class="fa-solid fa-star active"></i>
											</div>
											<div class="rat-reviews">
												<strong>4.6</strong><span>(142 Reviews)</span>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 border br-dashed m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/property/img-1.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-start justify-content-start flex-column">
											<span class="city-destination label text-success bg-light-success mb-1">House</span>
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Strive Partners Realty</span>
											</h4>
										</div>
										<div class="detail ellipsis-container mt-3">
											<span class="ellipsis">3 Beds</span>
											<span class="ellipsis">2 Baths</span>
											<span class="ellipsis">2100 sqft</span>
										</div>
									</div>
									<div class="flight-footer">
										<div class="epocsic">
											<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$492</span>
											</h5>
										</div>
										<div class="rates">
											<div class="star-rates">
												<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
													class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
													class="fa-solid fa-star active"></i>
											</div>
											<div class="rat-reviews">
												<strong>4.6</strong><span>(142 Reviews)</span>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 border br-dashed m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/property/img-2.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-start justify-content-start flex-column">
											<span class="city-destination label text-success bg-light-success mb-1">Villa</span>
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Larkspur Partners Realty</span>
											</h4>
										</div>
										<div class="detail ellipsis-container mt-3">
											<span class="ellipsis">3 Beds</span>
											<span class="ellipsis">2 Baths</span>
											<span class="ellipsis">2100 sqft</span>
										</div>
									</div>
									<div class="flight-footer">
										<div class="epocsic">
											<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$492</span>
											</h5>
										</div>
										<div class="rates">
											<div class="star-rates">
												<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
													class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
													class="fa-solid fa-star active"></i>
											</div>
											<div class="rat-reviews">
												<strong>4.6</strong><span>(142 Reviews)</span>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 border br-dashed m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/property/img-3.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-start justify-content-start flex-column">
											<span class="city-destination label text-success bg-light-success mb-1">Apartment</span>
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Agile Real Estate Group</span>
											</h4>
										</div>
										<div class="detail ellipsis-container mt-3">
											<span class="ellipsis">3 Beds</span>
											<span class="ellipsis">2 Baths</span>
											<span class="ellipsis">2100 sqft</span>
										</div>
									</div>
									<div class="flight-footer">
										<div class="epocsic">
											<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$492</span>
											</h5>
										</div>
										<div class="rates">
											<div class="star-rates">
												<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
													class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
													class="fa-solid fa-star active"></i>
											</div>
											<div class="rat-reviews">
												<strong>4.6</strong><span>(142 Reviews)</span>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Featured Rental Property End ================================== -->

		<!-- ============================== Popular Destination List Start ========================= -->
		<section class="py-5">
			<div class="container">

				<div class="row align-items-center justify-content-between mb-3">
					<div class="col-8">
						<div class="upside-heading">
							<h5 class="fw-bold fs-6 m-0">All International Routes</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="text-end grpx-btn">
							<a href="#" class="btn btn-light-primary btn-md fw-medium">More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">

						<div class="destinationList-wrap">
							<div class="tabs-control-slider">
								<ul class="nav nav-pills medium" id="pills-tab" role="tablist">
									<li class="nav-item mb-2" role="presentation">
										<button class="nav-link active" id="pills-flsfirst-tab" data-bs-toggle="pill"
											data-bs-target="#pills-flsfirst" type="button" role="tab" aria-controls="pills-flsfirst"
											aria-selected="true">Flights To Popular Countries</button>
									</li>
									<li class="nav-item mb-2" role="presentation">
										<button class="nav-link" id="pills-flssecond-tab" data-bs-toggle="pill"
											data-bs-target="#pills-flssecond" type="button" role="tab" aria-controls="pills-flssecond"
											aria-selected="false">Flights To Popular Destinations</button>
									</li>
									<li class="nav-item mb-2" role="presentation">
										<button class="nav-link" id="pills-flsthird-tab" data-bs-toggle="pill"
											data-bs-target="#pills-flsthird" type="button" role="tab" aria-controls="pills-flsthird"
											aria-selected="false">Popular Flights</button>
									</li>
									<li class="nav-item mb-2" role="presentation">
										<button class="nav-link" id="pills-flsfourth-tab" data-bs-toggle="pill"
											data-bs-target="#pills-flsfourth" type="button" role="tab" aria-controls="pills-flsfourth"
											aria-selected="false">Popular Airlines</button>
									</li>
								</ul>
							</div>
							<div class="tab-content pt-2" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-flsfirst" role="tabpanel"
									aria-labelledby="pills-flsfirst-tab" tabindex="0">
									<div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3">

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>France</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Turkey</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Japan</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Itly</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Poland</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>South Korea</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Spain</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Maxico</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Austria</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Canada</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Thailand</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>New York</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Russia</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Vietnaam</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Denver</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Liverpool</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Indonesia</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Chaina</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Zarmeny</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Purtugal</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>India</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Malaysia</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Pakistan</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Los Vegas</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Singapure</span></a></li>
											</ul>
										</div>

									</div>
								</div>
								<div class="tab-pane fade" id="pills-flssecond" role="tabpanel" aria-labelledby="pills-flssecond-tab"
									tabindex="0">
									<div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3">

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>France</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Turkey</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Japan</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Itly</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Poland</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>South Korea</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Spain</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Maxico</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Austria</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Canada</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Thailand</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>New York</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Russia</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Vietnaam</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Denver</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Liverpool</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Indonesia</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Chaina</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Zarmeny</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Purtugal</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>India</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Malaysia</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Pakistan</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Los Vegas</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Singapure</span></a></li>
											</ul>
										</div>

									</div>
								</div>
								<div class="tab-pane fade" id="pills-flsthird" role="tabpanel" aria-labelledby="pills-flsthird-tab"
									tabindex="0">
									<div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3">

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>France</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Turkey</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Japan</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Itly</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Poland</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>South Korea</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Spain</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Maxico</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Austria</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Canada</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Thailand</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>New York</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Russia</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Vietnaam</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Denver</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Liverpool</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Indonesia</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Chaina</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Zarmeny</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Purtugal</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>India</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Malaysia</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Pakistan</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Los Vegas</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Singapure</span></a></li>
											</ul>
										</div>

									</div>
								</div>
								<div class="tab-pane fade" id="pills-flsfourth" role="tabpanel" aria-labelledby="pills-flsfourth-tab"
									tabindex="0">
									<div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3">

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>France</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Turkey</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Japan</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Itly</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Poland</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>South Korea</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Spain</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Maxico</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Austria</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Canada</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Thailand</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>New York</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Russia</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Vietnaam</span></a>
												</li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Denver</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Liverpool</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Indonesia</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Chaina</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Zarmeny</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Purtugal</span></a></li>
											</ul>
										</div>

										<div class="col">
											<ul class="flightsLists-Wraps p-0">
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>India</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Malaysia</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Pakistan</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Los Vegas</span></a></li>
												<li><a href="#" class="text-md text-muted-2"><span>Flight</span> To <span>Singapure</span></a></li>
											</ul>
										</div>

									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ============================== Popular Destination List End ========================= -->

		<!-- ============================ Call To Action Start ================================== -->
		<div class="position-relative bg-cover py-5 bg-primary" style="background:url(assets/img/bg.jpg)no-repeat;"
			data-overlay="5">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="calltoAction-wraps position-relative py-5 px-4">
							<div class="ht-40"></div>
							<div class="row align-items-center justify-content-center">
								<div class="col-xl-8 col-lg-9 col-md-10 col-sm-11 text-center">

									<div class="calltoAction-title mb-5">
										<h4 class="text-light fs-2 fw-bold lh-base m-0">Subscribe & Get<br>Special Discount with GeoTrip.com
										</h4>
									</div>
									<div class="newsletter-forms mt-md-0 mt-4">
										<form>
											<div class="row align-items-center justify-content-between bg-white rounded-3 p-2 gx-0">

												<div class="col-xl-9 col-lg-8 col-md-8">
													<div class="form-group m-0">
														<input type="text" class="form-control bold ps-1 border-0" placeholder="Enter Your Mail!">
													</div>
												</div>
												<div class="col-xl-3 col-lg-4 col-md-4">
													<div class="form-group m-0">
														<button type="button" class="btn btn-primary fw-medium full-width">Submit<i
																class="fa-solid fa-arrow-trend-up ms-2"></i></button>
													</div>
												</div>

											</div>
										</form>
									</div>

								</div>
							</div>
							<div class="ht-40"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================ Call To Action Start ================================== -->


		<!-- ============================ Footer Start ================================== -->
		<footer class="footer skin-light-footer">
			<div>
				<div class="container">
					<div class="row">

						<div class="col-lg-3 col-md-4">
							<div class="footer-widget">
								<div class="d-flex align-items-start flex-column mb-3">
									<div class="d-inline-block"><img src="assets/img/logo.png" class="img-fluid" width="160" alt="Footer Logo">
									</div>
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
										<p class="text-muted-2 fw-medium">Our Partners</p>
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
	
	<script src="assets/js/addadult.js"></script>
	<script src="assets/js/custom.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

</body>


<!-- Mirrored from shreethemes.net/geotrip-live/geotrip/home-flight.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:09:09 GMT -->
</html>