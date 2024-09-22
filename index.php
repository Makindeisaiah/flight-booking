<?php

include "includes/db.php";
include "includes/actions.php";

?>

<!doctype html>
<html lang="en">


<!-- Mirrored from shreethemes.net/geotrip-live/geotrip/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:07:22 GMT -->

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
		include "includes/header.php";
		?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ============================ Hero Banner  Start================================== -->
		<div class="image-cover hero-header bg-white" style="background:url(assets/img/banner-3.jpg)no-repeat;" data-overlay="5">
			<div class="container">

				<!-- Search Form -->
				<div class="row justify-content-center align-items-center">
					<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
						<div class="position-relative text-center mb-5">
							<h1>Explore The World <span class="position-relative z-4">Around<span class="position-absolute top-50 start-50 translate-middle d-none d-md-block mt-4">
										<svg width="185px" height="23px" viewBox="0 0 445.5 23">
											<path class="fill-white opacity-7" d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z">
											</path>
										</svg>
									</span></span> You</h1>
							<p class="fs-5 fw-light">Take a little break from the work strss of everyday. Discover plan trip and
								explore beautiful destinations.</p>
						</div>
					</div>

					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="search-wrap bg-white rounded-3 p-3">
							<ul class="nav nav-pills primary-soft medium justify-content-center mb-3" id="tour-pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-bs-toggle="tab" href="#one-way"><i class="fa-solid fa-hotel me-2"></i>One-way</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#round-trip"><i class="fa-solid fa-jet-fighter me-2"></i>Round-trip</a>
								</li>
							</ul>


							<div class="tab-content">
								<div class="tab-pane show active" name="one-way" id="one-way">
									<form action="one-way.php" method="GET">
										<div class="row gx-lg-2 g-3">
											<div class="col-xl-4 col-lg-4 col-md-12">
												<div class="row gy-3 gx-lg-2 gx-3">
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
														<div class="form-group hdd-arrow mb-0">
															<select name="departure" class="departure_from form-control fw-bold" required>
																<?php
																include "includes/airport-list.php";
																?>
															</select>
														</div>
														<div class="btn-flip-icon mt-md-0">
															<button class="p-0 m-0 text-primary"><i class="fa-solid fa-right-left"></i></button>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
														<div class="form-groupp hdd-arrow mb-0">
															<select name="arrival" class="arrival form-control fw-bold" required>
																<?php
																include "includes/airport-list.php";
																?>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-7 col-lg-7 col-md-12">
												<div class="row gy-3 gx-lg-2 gx-3">
													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
														<div class="form-group mb-0">
															<input class="form-control fw-bold choosedate" name="departure_date" type="text" placeholder="Departure.." readonly="readonly" required>
														</div>
													</div>
													<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
														<div class="form-groupp hdd-arrow mb-0">
															<select name="passengers" class="adult form-control fw-bold" min="1" required>
																<option value="">Select</option>
																<option value="lv">1</option>
																<option value="la">2</option>
																<option value="kc">3</option>
															</select>
														</div>
													</div>
													<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
														<div class="form-groupp hdd-arrow mb-0">
															<select name="children" class="children form-control fw-bold" required>
																<option value="">Select</option>
																<option value="lv">0</option>
																<option value="la">1</option>
																<option value="kc">2</option>
															</select>
														</div>
													</div>
													<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
														<div class="form-groupp hdd-arrow mb-0">
															<select name="infants" class="infants form-control fw-bold" required>
																<option value="">Select</option>
																<option value="lv">0</option>
																<option value="la">1</option>
																<option value="kc">2</option>
															</select>
														</div>
													</div>
													<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
														<div class="form-groupp hdd-arrow mb-0">
															<select name="class" class="class form-control fw-bold" required>
																<option value="">Select</option>
																<option value="lv">Economy</option>
																<option value="la">First Class</option>
																<option value="kc">Business Class</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-1 col-lg-1 col-md-12">
												<div class="form-group mb-0">
													<button name="submit" type="submit" class="btn btn-primary full-width fw-medium"><i class="fa-solid fa-magnifying-glass fs-5"></i></button>
												</div>
											</div>
										</div>
									</form>
								</div>




								<div class="tab-pane" id="round-trip">
									<form action="round-trip.php" method="GET">
										<div class="row gx-lg-2 g-3">
											<div class="col-xl-4 col-lg-4 col-md-12">
												<div class="row gy-3 gx-lg-2 gx-3">
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
														<div class="form-group hdd-arrow mb-0">
															<select name="departure" class="departure_from form-control fw-bold">
																<?php
																include "includes/airport-list.php";
																?>
															</select>
														</div>
														<div class="btn-flip-icon mt-md-0">
															<button class="p-0 m-0 text-primary"><i class="fa-solid fa-right-left"></i></button>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
														<div class="form-groupp hdd-arrow mb-0">
															<select name="arrival" class="arrival form-control fw-bold">
																<?php
																include "includes/airport-list.php";
																?>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-3 col-md-12">
												<div class="row gy-3 gx-lg-2 gx-3">
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
														<div class="form-group mb-0">
															<input name="departure_date" class="form-control fw-bold choosedate" type="text" placeholder="Departure.." readonly="readonly">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
														<div class="form-group mb-0">
															<input name="adult" class="form-control fw-bold choosedate" type="text" placeholder="Return.." readonly="readonly">
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-1 col-lg-1 col-md-12">
												<div class="form-groupp hdd-arrow mb-0">
													<select name="passenger" class="adult form-control fw-bold">
														<option value="">Select</option>
														<option value="lv">1</option>
														<option value="la">2</option>
													</select>
												</div>
											</div>
											<div class="col-xl-1 col-lg-1 col-md-12">
												<div class="form-groupp hdd-arrow mb-0">
													<select name="children" class="children form-control fw-bold">
														<option value="">Select</option>
														<option value="lv">0</option>
														<option value="la">1</option>
													</select>
												</div>
											</div>
											<div class="col-xl-1 col-lg-1 col-md-12">
												<div class="form-groupp hdd-arrow mb-0">
													<select name="infants" class="infants form-control fw-bold">
														<option value="">Select</option>
														<option value="lv">0</option>
														<option value="la">1</option>
													</select>
												</div>
											</div>
											<div class="col-xl-1 col-lg-1 col-md-12">
												<div class="form-groupp hdd-arrow mb-0">
													<select name="class" class="class form-control fw-bold">
														<option value="">Select</option>
														<option value="lv">Economy</option>
														<option value="la">First Class</option>
														<option value="la">Business Class</option>
													</select>
												</div>
											</div>
											<div class="col-xl-1 col-lg-1 col-md-12">
												<div class="form-group mb-0">
													<button name="submit" type="submit" class="btn btn-primary full-width fw-medium"><i class="fa-solid fa-magnifying-glass fs-5"></i></button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- </row> -->

			</div>
		</div>
		<!-- ============================ Hero Banner End ================================== -->


		<!-- =========================== Tours Offers Start ====================================== -->
		<section class="border-bottom">
			<div class="container">
				<div class="row align-items-center justify-content-between g-4">

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
						<div class="featuresBox-wrap">
							<div class="featuresBox-icons mb-3">
								<i class="fa-solid fa-sack-dollar fs-1 text-primary"></i>
							</div>
							<div class="featuresBox-captions">
								<h4 class="fw-bold fs-5 lh-base mb-0">Easy Booking</h4>
								<p class="m-0">Cicero famously orated against his political opponent Lucius Sergius Catilina.
									Occasionally the first Oration against Catiline.</p>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
						<div class="featuresBox-wrap">
							<div class="featuresBox-icons mb-3">
								<i class="fa-solid fa-umbrella-beach fs-1 text-primary"></i>
							</div>
							<div class="featuresBox-captions">
								<h4 class="fw-bold fs-5 lh-base mb-0">Best Destinations</h4>
								<p class="m-0">Cicero famously orated against his political opponent Lucius Sergius Catilina.
									Occasionally the first Oration against Catiline.</p>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
						<div class="featuresBox-wrap">
							<div class="featuresBox-icons mb-3">
								<i class="fa-solid fa-person-walking-luggage fs-1 text-primary"></i>
							</div>
							<div class="featuresBox-captions">
								<h4 class="fw-bold fs-5 lh-base mb-0">Travel Guides</h4>
								<p class="m-0">Cicero famously orated against his political opponent Lucius Sergius Catilina.
									Occasionally the first Oration against Catiline.</p>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
						<div class="featuresBox-wrap">
							<div class="featuresBox-icons mb-3">
								<i class="fa-solid fa-headset fs-1 text-primary"></i>
							</div>
							<div class="featuresBox-captions">
								<h4 class="fw-bold fs-5 lh-base mb-0">Friendly Support</h4>
								<p class="m-0">Cicero famously orated against his political opponent Lucius Sergius Catilina.
									Occasionally the first Oration against Catiline.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="gray-simple pt-5">
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Offers For Flights Routes</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12 p-0">
						<div class="main-carousel cols-4 dots-full">
							<?php
							$transactions_query = $pdo->query("SELECT * FROM `quick_tour` ");

							while ($row = $transactions_query->fetch()) {
								$id = $row['id'];
								$departure_code = $row['departure_code'];
								$departure = $row['departure'];
								$arrival_code = $row['arrival_code'];
								$arrival = $row['arrival'];
								$flight_date = $row['flight_date'];
								$avatar = $row['avatar'];
							?>
								<!-- Single Item -->
								<div class="carousel-cell">

									<div class="card rounded-3 border-0 m-0 fltsOffers-card">
										<div class="card-body">
											<div class="d-inline-flex mb-3"><span class="label bg-danger text-light">20% Discount</span></div>
											<div class="fltsOffers-flex d-flex align-items-center justify-content-between">
												<div class="fltsOffers-firster">
													<h6 class="text-dark fw-bold fs-6 m-0"><?php echo $departure_code; ?></h6>
													<p class="text-muted-2 text-md m-0"><?php echo $departure; ?></p>
												</div>
												<div class="fltsOffers-middler text-muted fs-5"><i class="fa-solid fa-jet-fighter"></i></div>
												<div class="fltsOffers-ender">
													<h6 class="text-dark fw-bold fs-6 m-0"><?php echo $arrival_code; ?></h6>
													<p class="text-muted-2 text-md m-0"><?php echo $arrival; ?></p>
												</div>
											</div>
											<div class="fltsFlite-name d-flex flex-column align-items-center justify-content-center my-3">
												<p class="text-muted m-0">Travel Between</p>
												<h6 class="fw-bold text-dhani"><?php echo $flight_date; ?></h6>
											</div>
											<div class="fltsFlite-name d-flex align-items-center justify-content-center mb-1">
												<img src="<?php echo $avatar; ?>" class="img-fluid" width="120" alt="">
											</div>
										</div>
									</div>

								</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =========================== Tours Offers End ====================================== -->


		<!-- ============================ Popular Attraction Start ================================== -->

		<section>
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Hot Property In Las Vegas</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center gy-4 gx-xl-4 gx-lg-3 gx-md-4 gx-4">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/property/img-1.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-start justify-content-start flex-column">
											<span class="city-destination label text-success bg-light-success mb-1">House</span>
											<h4 class="city fs-title m-0 fw-bold">
												<span>Equitable Property Group</span>
											</h4>
										</div>
										<div class="detail ellipsis-container mt-3">
											<span class="ellipsis">3 Beds</span>
											<span class="ellipsis">2 Baths</span>
											<span class="ellipsis">2100 sqft</span>
											<span class="ellipsis">1 Store</span>
										</div>
									</div>
									<div class="flight-footer">
										<div class="epocsic">
											<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span></h5>
										</div>
										<div class="rates">
											<div class="star-rates">
												<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i>
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

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/property/img-2.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-start justify-content-start flex-column">
											<span class="city-destination label text-success bg-light-success mb-1">Villa</span>
											<h4 class="city fs-title m-0 fw-bold">
												<span>Apogee Property Advisors</span>
											</h4>
										</div>
										<div class="detail ellipsis-container mt-3">
											<span class="ellipsis">3 Beds</span>
											<span class="ellipsis">2 Baths</span>
											<span class="ellipsis">2100 sqft</span>
											<span class="ellipsis">1 Store</span>
										</div>
									</div>
									<div class="flight-footer">
										<div class="epocsic">
											<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span></h5>
										</div>
										<div class="rates">
											<div class="star-rates">
												<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i>
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

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/property/img-3.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-start justify-content-start flex-column">
											<span class="city-destination label text-success bg-light-success mb-1">Apartment</span>
											<h4 class="city fs-title m-0 fw-bold">
												<span>Landmark Realty Group</span>
											</h4>
										</div>
										<div class="detail ellipsis-container mt-3">
											<span class="ellipsis">3 Beds</span>
											<span class="ellipsis">2 Baths</span>
											<span class="ellipsis">2100 sqft</span>
											<span class="ellipsis">1 Store</span>
										</div>
									</div>
									<div class="flight-footer">
										<div class="epocsic">
											<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span></h5>
										</div>
										<div class="rates">
											<div class="star-rates">
												<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i>
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

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/property/img-4.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-start justify-content-start flex-column">
											<span class="city-destination label text-success bg-light-success mb-1">Condos</span>
											<h4 class="city fs-title m-0 fw-bold">
												<span>Cobblestone Realty Partners</span>
											</h4>
										</div>
										<div class="detail ellipsis-container mt-3">
											<span class="ellipsis">3 Beds</span>
											<span class="ellipsis">2 Baths</span>
											<span class="ellipsis">2100 sqft</span>
											<span class="ellipsis">1 Store</span>
										</div>
									</div>
									<div class="flight-footer">
										<div class="epocsic">
											<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span></h5>
										</div>
										<div class="rates">
											<div class="star-rates">
												<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i>
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

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/property/img-5.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-start justify-content-start flex-column">
											<span class="city-destination label text-success bg-light-success mb-1">Building</span>
											<h4 class="city fs-title m-0 fw-bold">
												<span>Magnolia Group Real Estate</span>
											</h4>
										</div>
										<div class="detail ellipsis-container mt-3">
											<span class="ellipsis">3 Beds</span>
											<span class="ellipsis">2 Baths</span>
											<span class="ellipsis">2100 sqft</span>
											<span class="ellipsis">1 Store</span>
										</div>
									</div>
									<div class="flight-footer">
										<div class="epocsic">
											<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span></h5>
										</div>
										<div class="rates">
											<div class="star-rates">
												<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i>
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

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/property/img-6.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-start justify-content-start flex-column">
											<span class="city-destination label text-success bg-light-success mb-1">Apartment</span>
											<h4 class="city fs-title m-0 fw-bold">
												<span>Haven Group Real Estate</span>
											</h4>
										</div>
										<div class="detail ellipsis-container mt-3">
											<span class="ellipsis">3 Beds</span>
											<span class="ellipsis">2 Baths</span>
											<span class="ellipsis">2100 sqft</span>
											<span class="ellipsis">1 Store</span>
										</div>
									</div>
									<div class="flight-footer">
										<div class="epocsic">
											<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">US$492</span></h5>
										</div>
										<div class="rates">
											<div class="star-rates">
												<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i>
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
		<!-- ============================ Popular Attraction Start ================================== -->

		<section class="gray-simple">
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Explore Popular Routes</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center gy-4 gx-3">

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
								<div class="flight-thumb-wrapper">
									<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
										<div class="label bg-success text-light d-inline-flex align-items-center justify-content-center">
											<span class="svg-icon text-light svg-icon-2hx me-1">
												<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
													<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
												</svg>
											</span>Featured
										</div>
									</div>
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
													<path d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z" fill="currentColor" />
													<path opacity="0.3" d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z" fill="currentColor" />
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
							<a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/destination/tr-2.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>San Diego</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z" fill="currentColor" />
													<path opacity="0.3" d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z" fill="currentColor" />
												</svg>
											</span>
											<span>San Jose</span>
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
							<a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
								<div class="flight-thumb-wrapper">
									<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
										<div class="label bg-success text-light d-inline-flex align-items-center justify-content-center">
											<span class="svg-icon text-light svg-icon-2hx me-1">
												<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
													<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
												</svg>
											</span>Featured
										</div>
									</div>
									<div class="popFlights-item-overHidden">
										<img src="assets/img/destination/tr-3.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>Dallas</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z" fill="currentColor" />
													<path opacity="0.3" d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z" fill="currentColor" />
												</svg>
											</span>
											<span>Philadelphia</span>
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
							<a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/destination/tr-4.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>Denver</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z" fill="currentColor" />
													<path opacity="0.3" d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z" fill="currentColor" />
												</svg>
											</span>
											<span>Nashville</span>
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
							<a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/destination/tr-5.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>Chicago</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z" fill="currentColor" />
													<path opacity="0.3" d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z" fill="currentColor" />
												</svg>
											</span>
											<span>San Francisco</span>
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
							<a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
								<div class="flight-thumb-wrapper">
									<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
										<div class="label bg-success text-light d-inline-flex align-items-center justify-content-center">
											<span class="svg-icon text-light svg-icon-2hx me-1">
												<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
													<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
												</svg>
											</span>Featured
										</div>
									</div>
									<div class="popFlights-item-overHidden">
										<img src="assets/img/destination/tr-10.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>Houston</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z" fill="currentColor" />
													<path opacity="0.3" d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z" fill="currentColor" />
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
							<a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/destination/tr-9.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>San Antonio</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z" fill="currentColor" />
													<path opacity="0.3" d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z" fill="currentColor" />
												</svg>
											</span>
											<span>Columbus</span>
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
							<a href="#" class="card rounded-3 shadow-wrap h-100 m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/destination/tr-6.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>Los Angeles</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z" fill="currentColor" />
													<path opacity="0.3" d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z" fill="currentColor" />
												</svg>
											</span>
											<span>Canada</span>
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

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="text-center position-relative mt-5">
							<button type="button" class="btn btn-light-primary fw-medium px-5">Explore More<i class="fa-solid fa-arrow-trend-up ms-2"></i></button>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!-- ============================ Locations Design Start ================================== -->
		<!-- <section class="gray-simple">
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Popular Location To Stay</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>

				<div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-3">

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="#"><img src="assets/img/city/ct-7.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">New York</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">10 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">5 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="#"><img src="assets/img/city/ct-2.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Los Angeles</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">12 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">4 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="#"><img src="assets/img/city/ct-3.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">San Diego</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">08 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">6 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="#"><img src="assets/img/city/ct-4.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">San Francisco</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">32 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">12 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="#"><img src="assets/img/city/ct-5.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Houston</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">22 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">16 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="#"><img src="assets/img/city/ct-6.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">San Jose</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">25 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">15 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="#"><img src="assets/img/city/ct-1.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Denver</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">29 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">14 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="#"><img src="assets/img/city/ct-10.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">California</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">22 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">12 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section> -->
		<!-- ============================ Locations Design Start ================================== -->

		<!-- ============================ All car List Start ================================== -->
		<section>
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Our Awesome Vehicles</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center gy-4 gx-xl-3 gx-lg-4 gx-4">

					<!-- Single -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 shadow-wrap m-0">
								<div class="flight-thumb-wrapper">
									<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
										<div class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
											<span class="svg-icon text-light svg-icon-2hx me-1">
												<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
													<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
												</svg>
											</span>600Kms included. After that $15/Kms
										</div>
									</div>
									<div class="popFlights-item-overHidden">
										<img src="assets/img/car.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>Carmy Accord</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">SEDAN</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">AC</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">5 Seats</span>
										</p>

										<div class="touritem-centrio mt-4">
											<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
													Cancellation Till 10 Aug 23</span></div>
											<div class="aments-lists mt-2">
												<div class="detail ellipsis-container mt-1">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large bag</span>
													<span class="ellipsis">1 Small bag</span>
													<span class="ellipsis">Diesel</span>
												</div>
											</div>
										</div>
									</div>
									<div class="trsms-foots mt-4">
										<div class="flts-flex d-flex align-items-end justify-content-between">
											<div class="flts-flex-strat">
												<div class="d-flex align-items-center justify-content-start">
													<span class="label bg-light-danger text-danger">15% Off</span>
												</div>
												<div class="d-flex align-items-center">
													<div class="text-dark fw-bold fs-4">US$59</div>
													<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79</div>
												</div>
											</div>

											<div class="flts-flex-end">
												<div class="row align-items-center justify-content-end gx-2">
													<div class="col-auto text-start text-md-end">
														<div class="text-md text-dark fw-medium">Exceptional</div>
														<div class="text-md text-muted-2">3,014 reviews</div>
													</div>
													<div class="col-auto">
														<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<!-- Single -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 shadow-wrap m-0">
								<div class="flight-thumb-wrapper">
									<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
										<div class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
											<span class="svg-icon text-light svg-icon-2hx me-1">
												<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
													<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
												</svg>
											</span>600Kms included. After that $15/Kms
										</div>
									</div>
									<div class="popFlights-item-overHidden">
										<img src="assets/img/car.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>Audi, BMW</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Hatchback</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">AC</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">5 Seats</span>
										</p>

										<div class="touritem-centrio mt-4">
											<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
													Cancellation Till 10 Aug 23</span></div>
											<div class="aments-lists mt-2">
												<div class="detail ellipsis-container mt-1">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large bag</span>
													<span class="ellipsis">1 Small bag</span>
													<span class="ellipsis">Diesel</span>
												</div>
											</div>
										</div>
									</div>
									<div class="trsms-foots mt-4">
										<div class="flts-flex d-flex align-items-end justify-content-between">
											<div class="flts-flex-strat">
												<div class="d-flex align-items-center justify-content-start">
													<span class="label bg-light-danger text-danger">15% Off</span>
												</div>
												<div class="d-flex align-items-center">
													<div class="text-dark fw-bold fs-4">US$59</div>
													<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79</div>
												</div>
											</div>

											<div class="flts-flex-end">
												<div class="row align-items-center justify-content-end gx-2">
													<div class="col-auto text-start text-md-end">
														<div class="text-md text-dark fw-medium">Exceptional</div>
														<div class="text-md text-muted-2">3,014 reviews</div>
													</div>
													<div class="col-auto">
														<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<!-- Single -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 shadow-wrap m-0">
								<div class="flight-thumb-wrapper">
									<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
										<div class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
											<span class="svg-icon text-light svg-icon-2hx me-1">
												<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
													<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
												</svg>
											</span>600Kms included. After that $15/Kms
										</div>
									</div>
									<div class="popFlights-item-overHidden">
										<img src="assets/img/car.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>Ertiga, Xylo</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">LUX</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">AC</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">5 Seats</span>
										</p>

										<div class="touritem-centrio mt-4">
											<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
													Cancellation Till 10 Aug 23</span></div>
											<div class="aments-lists mt-2">
												<div class="detail ellipsis-container mt-1">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large bag</span>
													<span class="ellipsis">1 Small bag</span>
													<span class="ellipsis">Diesel</span>
												</div>
											</div>
										</div>
									</div>
									<div class="trsms-foots mt-4">
										<div class="flts-flex d-flex align-items-end justify-content-between">
											<div class="flts-flex-strat">
												<div class="d-flex align-items-center justify-content-start">
													<span class="label bg-light-danger text-danger">15% Off</span>
												</div>
												<div class="d-flex align-items-center">
													<div class="text-dark fw-bold fs-4">US$59</div>
													<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79</div>
												</div>
											</div>

											<div class="flts-flex-end">
												<div class="row align-items-center justify-content-end gx-2">
													<div class="col-auto text-start text-md-end">
														<div class="text-md text-dark fw-medium">Exceptional</div>
														<div class="text-md text-muted-2">3,014 reviews</div>
													</div>
													<div class="col-auto">
														<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<!-- Single -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 shadow-wrap m-0">
								<div class="flight-thumb-wrapper">
									<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
										<div class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
											<span class="svg-icon text-light svg-icon-2hx me-1">
												<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
													<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
												</svg>
											</span>600Kms included. After that $15/Kms
										</div>
									</div>
									<div class="popFlights-item-overHidden">
										<img src="assets/img/car.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>Suv, Innova Crysta</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">SUV</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">AC</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">5 Seats</span>
										</p>

										<div class="touritem-centrio mt-4">
											<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
													Cancellation Till 10 Aug 23</span></div>
											<div class="aments-lists mt-2">
												<div class="detail ellipsis-container mt-1">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large bag</span>
													<span class="ellipsis">1 Small bag</span>
													<span class="ellipsis">Diesel</span>
												</div>
											</div>
										</div>
									</div>
									<div class="trsms-foots mt-4">
										<div class="flts-flex d-flex align-items-end justify-content-between">
											<div class="flts-flex-strat">
												<div class="d-flex align-items-center justify-content-start">
													<span class="label bg-light-danger text-danger">15% Off</span>
												</div>
												<div class="d-flex align-items-center">
													<div class="text-dark fw-bold fs-4">US$59</div>
													<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79</div>
												</div>
											</div>

											<div class="flts-flex-end">
												<div class="row align-items-center justify-content-end gx-2">
													<div class="col-auto text-start text-md-end">
														<div class="text-md text-dark fw-medium">Exceptional</div>
														<div class="text-md text-muted-2">3,014 reviews</div>
													</div>
													<div class="col-auto">
														<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<!-- Single -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 shadow-wrap m-0">
								<div class="flight-thumb-wrapper">
									<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
										<div class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
											<span class="svg-icon text-light svg-icon-2hx me-1">
												<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
													<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
												</svg>
											</span>600Kms included. After that $15/Kms
										</div>
									</div>
									<div class="popFlights-item-overHidden">
										<img src="assets/img/car.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>Toyota Aygo</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">SEDAN</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">AC</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">5 Seats</span>
										</p>

										<div class="touritem-centrio mt-4">
											<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
													Cancellation Till 10 Aug 23</span></div>
											<div class="aments-lists mt-2">
												<div class="detail ellipsis-container mt-1">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large bag</span>
													<span class="ellipsis">1 Small bag</span>
													<span class="ellipsis">Diesel</span>
												</div>
											</div>
										</div>
									</div>
									<div class="trsms-foots mt-4">
										<div class="flts-flex d-flex align-items-end justify-content-between">
											<div class="flts-flex-strat">
												<div class="d-flex align-items-center justify-content-start">
													<span class="label bg-light-danger text-danger">15% Off</span>
												</div>
												<div class="d-flex align-items-center">
													<div class="text-dark fw-bold fs-4">US$59</div>
													<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79</div>
												</div>
											</div>

											<div class="flts-flex-end">
												<div class="row align-items-center justify-content-end gx-2">
													<div class="col-auto text-start text-md-end">
														<div class="text-md text-dark fw-medium">Exceptional</div>
														<div class="text-md text-muted-2">3,014 reviews</div>
													</div>
													<div class="col-auto">
														<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<!-- Single -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="#" class="card rounded-3 shadow-wrap m-0">
								<div class="flight-thumb-wrapper">
									<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
										<div class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
											<span class="svg-icon text-light svg-icon-2hx me-1">
												<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
													<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
												</svg>
											</span>600Kms included. After that $15/Kms
										</div>
									</div>
									<div class="popFlights-item-overHidden">
										<img src="assets/img/car.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>Ford Focus</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">LUX</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">AC</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">5 Seats</span>
										</p>

										<div class="touritem-centrio mt-4">
											<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
													Cancellation Till 10 Aug 23</span></div>
											<div class="aments-lists mt-2">
												<div class="detail ellipsis-container mt-1">
													<span class="ellipsis">Manual</span>
													<span class="ellipsis">1 Large bag</span>
													<span class="ellipsis">1 Small bag</span>
													<span class="ellipsis">Diesel</span>
												</div>
											</div>
										</div>
									</div>
									<div class="trsms-foots mt-4">
										<div class="flts-flex d-flex align-items-end justify-content-between">
											<div class="flts-flex-strat">
												<div class="d-flex align-items-center justify-content-start">
													<span class="label bg-light-danger text-danger">15% Off</span>
												</div>
												<div class="d-flex align-items-center">
													<div class="text-dark fw-bold fs-4">US$59</div>
													<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79</div>
												</div>
											</div>

											<div class="flts-flex-end">
												<div class="row align-items-center justify-content-end gx-2">
													<div class="col-auto text-start text-md-end">
														<div class="text-md text-dark fw-medium">Exceptional</div>
														<div class="text-md text-muted-2">3,014 reviews</div>
													</div>
													<div class="col-auto">
														<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="text-center position-relative mt-5">
							<button type="button" class="btn btn-light-primary fw-medium px-5">Explore More<i class="fa-solid fa-arrow-trend-up ms-2"></i></button>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- ============================ All car List Start ================================== -->

		<!-- ============================ Our Partners =========================== -->
		<section class="py-5 gray-simple">
			<div class="container">
				<div class="row align-items-center justify-content-center row-cols-lg-6 row-cols-md-5 row-cols-sm-5 row-cols-3 gx-3 gy-3">

					<div class="col">
						<div class="px-2 opacity-75 text-center">
							<img src="assets/img/brand/logo-3.png" class="img-fluid" alt="">
						</div>
					</div>

					<div class="col">
						<div class="px-2 opacity-75 text-center">
							<img src="assets/img/brand/logo-4.png" class="img-fluid" alt="">
						</div>
					</div>

					<div class="col">
						<div class="px-2 opacity-75 text-center">
							<img src="assets/img/brand/logo-8.png" class="img-fluid" alt="">
						</div>
					</div>

					<div class="col">
						<div class="px-2 opacity-75 text-center">
							<img src="assets/img/brand/logo-15.png" class="img-fluid" alt="">
						</div>
					</div>

					<div class="col">
						<div class="px-2 opacity-75 text-center">
							<img src="assets/img/brand/logo-16.png" class="img-fluid" alt="">
						</div>
					</div>

					<div class="col">
						<div class="px-2 opacity-75 text-center">
							<img src="assets/img/brand/logo-1.png" class="img-fluid" alt="">
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Our Partners =========================== -->


		<!-- ================================ Article Section Start ======================================= -->
		<section class="pt-0">
			<div class="container">

				<div class="row align-items-center justify-content-center" style="margin-top: 60px;">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Trending & Popular Articles</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>


				<div class="row justify-content-center g-4">

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="#" class="d-block"><img src="assets/img/blog-1.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								<div class="d-flex align-items-center mb-1"><span class="label text-success bg-light-success">Destination</span></div>
								<h4 class="fw-bold fs-6 lh-base"><a href="#" class="text-dark">Make Your Next Journey Delhi To Paris in
										Comfirtable And Best Price</a></h4>
								<p class="mb-3">Think of a news blog that's filled with content hourly on the Besides, random text risks
									to be unintendedly humorous or offensive day of going live.</p>
								<a class="text-primary fw-medium" href="#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="#" class="d-block"><img src="assets/img/blog-2.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								<div class="d-flex align-items-center mb-1"><span class="label text-success bg-light-success">Journey</span></div>
								<h4 class="fw-bold fs-6 lh-base"><a href="#" class="text-dark">Make Your Next Journey Delhi To Paris in
										Comfirtable And Best Price</a></h4>
								<p class="mb-3">Think of a news blog that's filled with content hourly on the Besides, random text risks
									to be unintendedly humorous or offensive day of going live.</p>
								<a class="text-primary fw-medium" href="#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="#" class="d-block"><img src="assets/img/blog-3.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								<div class="d-flex align-items-center mb-1"><span class="label text-success bg-light-success">Business</span></div>
								<h4 class="fw-bold fs-6 lh-base"><a href="#" class="text-dark">Make Your Next Journey Delhi To Paris in
										Comfirtable And Best Price</a></h4>
								<p class="mb-3">Think of a news blog that's filled with content hourly on the Besides, random text risks
									to be unintendedly humorous or offensive day of going live.</p>
								<a class="text-primary fw-medium" href="#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ================================ Article Section Start ======================================= -->

		<!-- ============================ Our Reviews Start ================================== -->
		<section class="gray-simple bg-cover" style="background:url(assets/img/reviewbg.png)no-repeat;">
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Loving Reviews By Our Customers</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>

				<div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-md-4 g-3">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span class="square--40 circle text-primary bg-light-primary"><i class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-1.jpg" class="img-fluid rounded-2" width="80" alt="">
									</div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Aman Diwakar</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span class="square--40 circle text-primary bg-light-primary"><i class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-2.jpg" class="img-fluid rounded-2" width="80" alt="">
									</div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Kunal M. Thakur</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span class="square--40 circle text-primary bg-light-primary"><i class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-3.jpg" class="img-fluid rounded-2" width="80" alt="">
									</div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Divya Talwar</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span class="square--40 circle text-primary bg-light-primary"><i class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-4.jpg" class="img-fluid rounded-2" width="80" alt="">
									</div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Karan Maheshwari</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span class="square--40 circle text-primary bg-light-primary"><i class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-5.jpg" class="img-fluid rounded-2" width="80" alt="">
									</div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Ritika Mathur</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Our Reviews End ================================== -->

		<!-- ============================ Call To Action Start ================================== -->
		<div class="py-5 bg-primary">
			<div class="container">
				<div class="row align-items-center justify-content-between">

					<div class="col-xl-4 col-lg-4 col-md-6">
						<h4 class="text-light fw-bold lh-base m-0">Join our Newsletter To Keep Up To Date With Us!</h4>
					</div>

					<div class="col-xl-5 col-lg-5 col-md-6">
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
											<button type="button" class="btn btn-dark fw-medium full-width">Submit<i class="fa-solid fa-arrow-trend-up ms-2"></i></button>
										</div>
									</div>

								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- ============================ Call To Action Start ================================== -->

		<!-- ============================ Footer Start ================================== -->
		<?php
		include "includes/footer.php";
		?>
		<!-- ============================ Footer End ================================== -->

		<!-- Log In Modal -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="loginmodal">
					<div class="modal-header">
						<h4 class="modal-title fs-6">Sign In / Register</h4>
						<a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-square-xmark"></i></a>
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
								<li class="col"><a href="#" class="square--60 border br-dashed rounded-2 full-width"><i class="fa-brands fa-facebook color--facebook fs-2"></i></a></li>
								<li class="col"><a href="#" class="square--60 border br-dashed rounded-2"><i class="fa-brands fa-whatsapp color--whatsapp fs-2"></i></a></li>
								<li class="col"><a href="#" class="square--60 border br-dashed rounded-2"><i class="fa-brands fa-linkedin color--linkedin fs-2"></i></a></li>
								<li class="col"><a href="#" class="square--60 border br-dashed rounded-2"><i class="fa-brands fa-dribbble color--dribbble fs-2"></i></a></li>
								<li class="col"><a href="#" class="square--60 border br-dashed rounded-2"><i class="fa-brands fa-twitter color--twitter fs-2"></i></a></li>
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
		<div class="modal modal-lg fade" id="currencyModal" tabindex="-1" aria-labelledby="currenyModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title fs-6" id="currenyModalLabel">Select Your Currency</h4>
						<a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-square-xmark"></i></a>
					</div>
					<div class="modal-body">
						<div class="allCurrencylist">

							<div class="suggestedCurrencylist-wrap mb-4">
								<div class="d-inline-block mb-0 ps-3">
									<h5 class="fs-6 fw-bold">Suggested Currency For you</h5>
								</div>
								<div class="suggestedCurrencylists">
									<ul class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2 gy-2 gx-3 m-0 p-0">
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
									<ul class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2 gy-2 gx-3 m-0 p-0">
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
		<div class="modal modal-lg fade" id="countryModal" tabindex="-1" aria-labelledby="countryModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title fs-6" id="countryModalLabel">Select Your Country</h4>
						<a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-square-xmark"></i></a>
					</div>
					<div class="modal-body">
						<div class="allCountrieslist">

							<div class="suggestedCurrencylist-wrap mb-4">
								<div class="d-inline-block mb-0 ps-3">
									<h5 class="fs-6 fw-bold">Suggested Countries For you</h5>
								</div>
								<div class="suggestedCurrencylists">
									<ul class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/united-states.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/united-kingdom.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Pound Sterling</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry active" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Indian Rupees</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Euro</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle" width="35" alt=""></div>
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
									<ul class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/united-states.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/vietnam.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Property currency</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Argentine Peso</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Azerbaijani Manat</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/japan.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Bahraini Dinar</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/portugal.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Brazilian Real</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/italy.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Bulgarian Lev</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Canadian Dollar</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Chilean Peso</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/european.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Colombian Peso</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Danish Krone</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Egyptian Pound</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Hungarian Forint</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Japanese Yen</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Jordanian Dinar</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Kuwaiti Dinar</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle" width="35" alt=""></div>
												<div class="text-dark text-md fw-medium ps-2">Malaysian Ringgit</div>
											</a>
										</li>
										<li class="col">
											<a class="selectCountry" href="#">
												<div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35" alt=""></div>
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

		<!-- Video Modal -->
		<div class="modal fade" id="popup-video" tabindex="-1" role="dialog" aria-labelledby="popupvideo" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content" id="popupvideo">
					<iframe class="embed-responsive-item full-width" height="480" src="https://www.youtube.com/embed/qN3OueBm9F4?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<!-- End Video Modal -->

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


<!-- Mirrored from shreethemes.net/geotrip-live/geotrip/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:07:56 GMT -->

</html>