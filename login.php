<?php
include "includes/db.php";
include "includes/actions.php";

?>

<!doctype html>
<html lang="en">


<!-- Mirrored from shreethemes.net/geotrip-live/geotrip/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:09:01 GMT -->

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

		<!-- ============================== Login Section ================== -->
		<section class="py-5">
			<div class="container">

				<div class="row justify-content-center align-items-center m-auto">
					<div class="col-12">
						<div class="bg-mode shadow rounded-3 overflow-hidden">
							<div class="row g-0">
								<!-- Vector Image -->
								<div class="col-lg-6 d-flex align-items-center order-2 order-lg-1">
									<div class="p-3 p-lg-5">
										<img src="assets/img/login.svg" class="img-fluid" alt="">
									</div>
									<!-- Divider -->
									<div class="vr opacity-1 d-none d-lg-block"></div>
								</div>

								<!-- Information -->
								<div class="col-lg-6 order-1">
									<div class="p-3 p-sm-4 p-md-5">
										<!-- Logo -->
										<a href="index.php">
											<img class="img-fluid mb-4" src="assets/img/logo-icon.png" width="70" alt="logo">
										</a>
										<!-- Title -->
										<h1 class="mb-2 fs-2">Welcome Back Adam!</h1>
										<p class="mb-0">Are you new here?<a href="register.php" class="fw-medium text-primary"> Create an
												account</a></p>

										<!-- Form START -->
										<form class="mt-4 text-start" action="" method="POST">
											<div class="form py-4">
												<?php include "./includes/errors.php"; ?>
												<?php
												if (isset($reg_successful)) :
												?>
													<div class="alert alert-success alert-dismissible fade show" role="alert">
														<p class="text-dark">Your registration is successful, Kindly verify your email address</p>
														<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
													</div>
												<?php endif; ?>
												<div class="form-floating mb-4">
													<input type="email" name="email" class="form-control" placeholder="name@example.com" required="">
													<label>Email</label>
												</div>
												<div class="form-floating mb-4">
													<input type="password" class="form-control" id="password-field" name="password" placeholder="Password" required="">
													<label>Password</label>
													<span class="toggle-password position-absolute top-50 end-0 translate-middle-y me-3 fa-regular fa-eye"></span>
												</div>

												<div class="form-group">
													<button type="submit" name="login_user" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
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
											</div>


											<!-- Copyright -->
											<div class="text-primary-hover mt-3 text-center"> Copyrights ©2024 GeoTrip.com. Build by <a href="https://www.makindeisaiah.com/">MITech</a>. </div>
										</form>
										<!-- Form END -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- ============================== Login Section End ================== -->

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


<!-- Mirrored from shreethemes.net/geotrip-live/geotrip/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:09:02 GMT -->

</html>