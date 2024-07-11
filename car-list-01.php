<!doctype html>
<html lang="en">


<!-- Mirrored from shreethemes.net/geotrip-live/geotrip/car-list-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:08:41 GMT -->
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
		<div class="header header-light">
			<div class="container">
				<nav id="navigation" class="navigation navigation-landscape">
					<div class="nav-header">
						<a class="nav-brand" href="#"><img src="assets/img/logo.png" class="logo" alt=""></a>
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
							<li class="list-buttons">
								<a href="#" data-bs-toggle="modal" data-bs-target="#login" class="bg-primary"><i
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


		<!-- ============================ Hero Banner  Start================================== -->
		<div class="py-5 bg-primary position-relative">
			<div class="container">

				<!-- Search Form -->
				<div class="row justify-content-center align-items-center">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="search-wrap position-relative">
							<div class="row align-items-end gy-3 gx-md-3 gx-sm-2">

								<div class="col-xl-8 col-lg-7 col-md-12">
									<div class="row gy-3 gx-md-3 gx-sm-2">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
											<div class="form-group hdd-arrow mb-0">
												<label class="text-light text-uppercase opacity-75">Pickup Location</label>
												<select class="pickup form-control fw-bold">
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
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
											<div class="form-group mb-0">
												<label class="text-light text-uppercase opacity-75">Select Date</label>
												<input type="text" class="form-control fw-bold" placeholder="Check-In & Check-Out"
													id="checkinout" readonly="readonly">
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-5 col-md-12">
									<div class="row align-items-end gy-3 gx-md-3 gx-sm-2">
										<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
											<div class="form-group hdd-arrow mb-0">
												<label class="text-light text-uppercase opacity-75">Drop Location</label>
												<select class="drop form-control fw-bold">
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
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
											<div class="form-group mb-0">
												<button type="button" class="btn btn-whites text-primary full-width fw-medium"><i
														class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
											</div>
										</div>
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
		<section class="gray-simple">
			<div class="container">
				<div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4">

					<!-- Sidebar Filter -->
					<div class="col-xl-3 col-lg-4 col-md-12">
						<div class="filter-searchBar bg-white rounded-3">
							<div class="filter-searchBar-head border-bottom">
								<div class="searchBar-headerBody d-flex align-items-start justify-content-between px-3 py-3">
									<div class="searchBar-headerfirst">
										<h6 class="fw-bold fs-5 m-0">Filters</h6>
										<p class="text-md text-muted m-0">Showing 180 Flights</p>
									</div>
									<div class="searchBar-headerlast text-end">
										<a href="#" class="text-md fw-medium text-primary active">Clear All</a>
									</div>
								</div>
							</div>

							<div class="filter-searchBar-body">

								<!-- Supplier & Seats -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Supplier</h6>
									</div>
									<div class="searchBar-single-wrap mb-4">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="easirent">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width"
													for="easirent">Easirent</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="hertz">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="hertz">Hertz</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="national">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width"
													for="national">National</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="greenmotion">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="greenmotion">Green
													Motion</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="sixt">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="sixt">SIXT</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="almo">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="almo">ALAMO</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="avis">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="avis">Avis</label>
											</li>
										</ul>
									</div>

									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Seats</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="5seats">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="5seats">4-5
													Seats</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="7seats">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="7seats">5-7
													Seats</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="others">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width"
													for="others">Others</label>
											</li>
										</ul>
									</div>

								</div>

								<!-- Supplier Policy -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Supplier Policy</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="intantconfirm">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width"
													for="intantconfirm">Instant Confirmation</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="freecancel">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="freecancel">Free
													Cancellation</label>
											</li>
										</ul>
									</div>

									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Car Accessories</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="aircondition">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="aircondition">Air
													Conditioning</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="fulltofull">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="fulltofull">Full to
													Full</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="sametosame">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="sametosame">Same To
													Same</label>
											</li>
										</ul>
									</div>

								</div>

								<!-- Pricing -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Pricing Range in US$</h6>
									</div>
									<div class="searchBar-single-wrap">
										<input type="text" class="js-range-slider" name="my_range" value="" data-skin="round"
											data-type="double" data-min="0" data-max="1000" data-grid="false">
									</div>
								</div>

								<!-- Rating -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Rating</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="fourplus">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="fourplus">4.5 or
													Higher</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="fourhigher">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="fourhigher">4 or
													Higher</label>
											</li>
										</ul>
									</div>

								</div>

								<!-- Payment Method -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Payment Method</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="pickup">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="pickup">Pay at
													pick-up</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="prepay">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="prepay">Prepay
													Online</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="prepaid">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="prepaid">Prepaid
													Deposit</label>
											</li>
										</ul>
									</div>

								</div>

								<!-- Car Modal -->
								<div class="searchBar-single px-3 py-3">
									<div class="searchBar-single-title d-flex align-items-center justify-content-between mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Car Modal</h6>
										<a href="#" class="text-md fw-medium text-muted active">Reset</a>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="hyundai">
															<label class="form-check-label" for="hyundai"></label>
														</div>
														<div
															class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-img"><img src="assets/img/air-1.png" class="img-fluid" width="25"
																		alt=""></div>
																<div class="frm-slicing-title ps-2"><span class="text-muted-2">Hyundai</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">$390.00</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="marutis">
															<label class="form-check-label" for="marutis"></label>
														</div>
														<div
															class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-img"><img src="assets/img/air-2.png" class="img-fluid" width="25"
																		alt=""></div>
																<div class="frm-slicing-title ps-2"><span class="text-muted-2">Maruti Suzuki</span>
																</div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">$310.00</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="tata">
															<label class="form-check-label" for="tata"></label>
														</div>
														<div
															class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-img"><img src="assets/img/air-3.png" class="img-fluid" width="25"
																		alt=""></div>
																<div class="frm-slicing-title ps-2"><span class="text-muted-2">Tata</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">$390.00</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="mahindra">
															<label class="form-check-label" for="mahindra"></label>
														</div>
														<div
															class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-img"><img src="assets/img/air-4.png" class="img-fluid" width="25"
																		alt=""></div>
																<div class="frm-slicing-title ps-2"><span class="text-muted-2">Mahindra</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">$410.00</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="kia">
															<label class="form-check-label" for="kia"></label>
														</div>
														<div
															class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-img"><img src="assets/img/air-5.png" class="img-fluid" width="25"
																		alt=""></div>
																<div class="frm-slicing-title ps-2"><span class="text-muted-2">Kia</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">$370.00</span></div>
														</div>
													</div>

												</div>
											</li>
										</ul>
									</div>

								</div>

							</div>
						</div>
					</div>

					<!-- All List -->
					<div class="col-xl-9 col-lg-8 col-md-12">

						<div class="row align-items-center justify-content-between">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<h5 class="fw-bold fs-6 mb-lg-0 mb-3">Showing 280 Search Results</h5>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-12">
								<div class="d-flex align-items-center justify-content-start justify-content-lg-end flex-wrap">
									<div class="flsx-first me-2">
										<div class="bg-white rounded py-2 px-3">
											<div class="form-check form-switch">
												<input class="form-check-input" type="checkbox" role="switch" id="mapoption">
												<label class="form-check-label ms-1" for="mapoption">Map</label>
											</div>
										</div>
									</div>
									<div class="flsx-first mt-sm-0 mt-2">
										<ul class="nav nav-pills nav-fill p-1 small lights blukker bg-primary rounded-3 shadow-sm"
											id="filtersblocks" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link active rounded-3" id="trending" data-bs-toggle="tab" type="button"
													role="tab" aria-selected="true">Our Trending</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link rounded-3" id="mostpopular" data-bs-toggle="tab" type="button"
													role="tab" aria-selected="false">Most Popular</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link rounded-3" id="lowprice" data-bs-toggle="tab" type="button" role="tab"
													aria-selected="false">Lowest Price</button>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row align-items-center g-4 mt-2">

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/car.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<h4 class="fs-5 fw-bold mb-1">Toyota Aygo</h4>
												<ul class="row g-2 p-0">
													<li class="col-auto">
														<p class="text-muted-2 text-md">SUV</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">AC</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">5 Seats</p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large Bag</span>
													<span class="ellipsis">1 Small Bag</span>
													<span class="ellipsis">Disel</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">600Kms included. After that $15/Kms</div>
													<div class="text-md text-muted">Free waiting up to 45 minutes</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/car.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<h4 class="fs-5 fw-bold mb-1">Toyota Aygo</h4>
												<ul class="row g-2 p-0">
													<li class="col-auto">
														<p class="text-muted-2 text-md">SUV</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">AC</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">5 Seats</p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large Bag</span>
													<span class="ellipsis">1 Small Bag</span>
													<span class="ellipsis">Disel</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">600Kms included. After that $15/Kms</div>
													<div class="text-md text-muted">Free waiting up to 45 minutes</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Offer Coupon Box -->
							<div class="col-xl-12 col-lg12 col-md-12">
								<div class="d-md-flex bg-success rounded-2 align-items-center justify-content-between px-3 py-3">
									<div class="d-md-flex align-items-center justify-content-start">
										<div class="flx-icon-first mb-md-0 mb-3">
											<div class="square--60 circle bg-white"><i class="fa-solid fa-gift fs-3 text-success"></i></div>
										</div>
										<div class="flx-caps-first ps-2">
											<h6 class="fs-5 fw-medium text-light mb-0">Start Exploring The World</h6>
											<p class="text-light mb-0">Book FlightsEffortless and Earn $50+ for each booking with Booking.com
											</p>
										</div>
									</div>
									<div class="flx-last text-md-end mt-md-0 mt-4"><button type="button" class="btn btn-whites fw-medium full-width text-dark px-xl-4">Get Started</button></div>
								</div>
							</div>

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/car.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<h4 class="fs-5 fw-bold mb-1">Toyota Aygo</h4>
												<ul class="row g-2 p-0">
													<li class="col-auto">
														<p class="text-muted-2 text-md">SUV</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">AC</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">5 Seats</p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large Bag</span>
													<span class="ellipsis">1 Small Bag</span>
													<span class="ellipsis">Disel</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">600Kms included. After that $15/Kms</div>
													<div class="text-md text-muted">Free waiting up to 45 minutes</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/car.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<h4 class="fs-5 fw-bold mb-1">Toyota Aygo</h4>
												<ul class="row g-2 p-0">
													<li class="col-auto">
														<p class="text-muted-2 text-md">SUV</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">AC</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">5 Seats</p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large Bag</span>
													<span class="ellipsis">1 Small Bag</span>
													<span class="ellipsis">Disel</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">600Kms included. After that $15/Kms</div>
													<div class="text-md text-muted">Free waiting up to 45 minutes</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/car.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<h4 class="fs-5 fw-bold mb-1">Toyota Aygo</h4>
												<ul class="row g-2 p-0">
													<li class="col-auto">
														<p class="text-muted-2 text-md">SUV</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">AC</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">5 Seats</p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large Bag</span>
													<span class="ellipsis">1 Small Bag</span>
													<span class="ellipsis">Disel</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">600Kms included. After that $15/Kms</div>
													<div class="text-md text-muted">Free waiting up to 45 minutes</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/car.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<h4 class="fs-5 fw-bold mb-1">Toyota Aygo</h4>
												<ul class="row g-2 p-0">
													<li class="col-auto">
														<p class="text-muted-2 text-md">SUV</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">AC</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">5 Seats</p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large Bag</span>
													<span class="ellipsis">1 Small Bag</span>
													<span class="ellipsis">Disel</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">600Kms included. After that $15/Kms</div>
													<div class="text-md text-muted">Free waiting up to 45 minutes</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/car.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<h4 class="fs-5 fw-bold mb-1">Toyota Aygo</h4>
												<ul class="row g-2 p-0">
													<li class="col-auto">
														<p class="text-muted-2 text-md">SUV</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">AC</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">5 Seats</p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large Bag</span>
													<span class="ellipsis">1 Small Bag</span>
													<span class="ellipsis">Disel</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">600Kms included. After that $15/Kms</div>
													<div class="text-md text-muted">Free waiting up to 45 minutes</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->


							<div class="col-xl-12 col-lg-12 col-12">
								<div class="pags card py-2 px-5">
									<nav aria-label="Page navigation example">
										<ul class="pagination m-0 p-0">
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true"><i class="fa-solid fa-arrow-left-long"></i></span>
												</a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true"><i class="fa-solid fa-arrow-right-long"></i></span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Offers End ================================== -->


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


<!-- Mirrored from shreethemes.net/geotrip-live/geotrip/car-list-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:08:41 GMT -->
</html>