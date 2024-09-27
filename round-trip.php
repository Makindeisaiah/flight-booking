<?Php

include "includes/session.php";
include "includes/actions.php";
include "includes/db.php";



// ? pagination for admin users list 

$per_Page_user = 5;

$stmt = $pdo->query('SELECT count(*) FROM `flight`');
$total_result_user = $stmt->fetchColumn();
$total_page_user = ceil($total_result_user / $per_Page_user);

// ? Current page
$user_page = isset($_GET['user_page']) ? $_GET['user_page'] : 1;
$offsets_user = ($user_page - 1) * $per_Page_user;

?>
<!doctype html>
<html lang="en">


<!-- Mirrored from shreethemes.net/geotrip-live/geotrip/flight-list-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:08:35 GMT -->

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
                                <div class="col-xl-7 col-lg-7 col-md-12">
                                    <div class="row gy-3 gx-md-3 gx-sm-2">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 position-relative">
                                            <div class="form-group hdd-arrow mb-0">
                                                <label class="text-light text-uppercase opacity-75">Leaving From</label>
                                                <select class="departure_from form-control fw-bold">
                                                    <?php include "includes/airport-list.php";?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="form-group hdd-arrow mb-0">
                                                <label class="text-light text-uppercase opacity-75">Going To</label>
                                                <select class="arrival form-control fw-bold">
                                                    <?php include "includes/airport-list.php"; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="form-group hdd-arrow mb-0">
                                                <label class="text-light text-uppercase opacity-75">Journey Date</label>
                                                <input type="text" class="form-control fw-bold" placeholder="Check-In & Check-Out"
                                                    id="checkinout" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-12">
                                    <div class="row align-items-end gy-3 gx-md-3 gx-sm-2">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="form-group mb-0">
                                                <label class="text-light text-uppercase opacity-75">Passenger</label>
                                                <select class="passenger form-control fw-bold">
                                                    <option value="">Select</option>
                                                    <option value="lv">1</option>
                                                    <option value="la">2</option>
                                                    <option value="kc">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="form-group mb-0">
                                                <label class="text-light text-uppercase opacity-75">Class</label>
                                                <select class="class form-control fw-bold">
                                                    <option value="">Select</option>
                                                    <option value="ee">Economy</option>
                                                    <option value="pc">Premium Economy</option>
                                                    <option value="bc">Business Class</option>
                                                    <option value="fc">First Class</option>
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


        <!-- ============================ All Flits Search Lists Start ================================== -->

        <section class="gray-simple">
            <div class="container">

                <div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4">

                    <!-- All Flight Lists -->

                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <?php if (count($flight) > 0): ?>
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <h5 class="fw-bold fs-6 mb-lg-0 mb-3">Showing <?php echo $count; ?> Search Results</h5>
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
                                <!--Round-Trip Flight -->
                                <?php foreach ($flight as $flight): ?>
                                <div class="col-xl-12 col-lg12 col-md-12">
                                    <div class="flights-accordion">
                                        <div class="flights-list-item bg-white rounded-3 p-3">
                                            <div class="row gy-4 align-items-center justify-content-between">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span class="label bg-light-primary text-primary me-2">Departure</span>
                                                                <span class="text-muted text-sm"><?php echo htmlspecialchars($flight['departure_date']); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="row gx-lg-5 gx-3 gy-4 align-items-center">

                                                                <div class="col-sm-auto">
                                                                    <div class="d-flex align-items-center justify-content-start">
                                                                        <div class="d-start fl-pic">
                                                                            <img class="img-fluid" src="assets/img/air-1.png" width="45" alt="image">
                                                                        </div>
                                                                        <div class="d-end fl-title ps-2">
                                                                            <div class="text-dark fw-medium"><?php echo htmlspecialchars($flight['airline']); ?></div>
                                                                            <div class="text-sm text-muted">First Class</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <div class="row gx-3 align-items-center">
                                                                        <div class="col-auto">
                                                                            <div class="text-dark fw-bold"><?php echo htmlspecialchars(date('H:i', strtotime($flight['departure_time'])), ENT_QUOTES, 'UTF-8'); ?>
                                                                            </div>
                                                                            <div class="text-muted text-sm fw-medium"><?php echo htmlspecialchars($flight['departure']); ?></div>
                                                                        </div>

                                                                        <div class="col text-center">
                                                                            <div class="flightLine departure">
                                                                                <div></div>
                                                                                <div></div>
                                                                            </div>
                                                                            <div class="text-muted text-sm fw-medium mt-3">Direct</div>
                                                                        </div>

                                                                        <div class="col-auto">
                                                                            <div class="text-dark fw-bold"><?php echo htmlspecialchars(date('H:i', strtotime($flight['arrival_time'])), ENT_QUOTES, 'UTF-8'); ?>                                                                            </div>
                                                                            <div class="text-muted text-sm fw-medium"><?php echo htmlspecialchars($flight['arrival']); ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-auto">
                                                                    <div class="text-dark fw-medium"><?php echo htmlspecialchars($flight['eta']); ?></div>
                                                                    <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span class="label bg-light-success text-success me-2">Return</span>
                                                                <span class="text-muted text-sm"><?php echo htmlspecialchars($flight['return_date']); ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="row gx-lg-5 gx-3 gy-4 align-items-center">
                                                                <div class="col-sm-auto">
                                                                    <div class="d-flex align-items-center justify-content-start">
                                                                        <div class="d-start fl-pic">
                                                                            <img class="img-fluid" src="assets/img/air-1.png" width="45" alt="image">
                                                                        </div>
                                                                        <div class="d-end fl-title ps-2">
                                                                            <div class="text-dark fw-medium"><?php echo htmlspecialchars($flight['airline']); ?></div>
                                                                            <div class="text-sm text-muted">Business</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <div class="row gx-3 align-items-center">
                                                                        <div class="col-auto">
                                                                            <div class="text-dark fw-bold"><?php echo htmlspecialchars(date('H:i', strtotime($flight['return_departure_time'])), ENT_QUOTES, 'UTF-8'); ?></div>
                                                                            <div class="text-muted text-sm fw-medium"><?php echo htmlspecialchars($flight['return_departure']); ?></div>
                                                                        </div>

                                                                        <div class="col text-center">
                                                                            <div class="flightLine return">
                                                                                <div></div>
                                                                                <div></div>
                                                                            </div>
                                                                            <div class="text-muted text-sm fw-medium mt-3">Direct</div>
                                                                        </div>

                                                                        <div class="col-auto">
                                                                            <div class="text-dark fw-bold"><?php echo htmlspecialchars(date('H:i', strtotime($flight['return_arrival_time'])), ENT_QUOTES, 'UTF-8'); ?></div>
                                                                            <div class="text-muted text-sm fw-medium"><?php echo htmlspecialchars($flight['return_arrival']); ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-auto">
                                                                    <div class="text-dark fw-medium"><?php echo htmlspecialchars($flight['return_eta']); ?></div>
                                                                    <div class="text-muted text-sm fw-medium">2 Stop</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-auto">
                                                    <div class="d-flex items-center h-100">
                                                        <div class="d-lg-block d-none border br-dashed me-4"></div>
                                                        <div>
                                                            <div class="d-flex align-items-center justify-content-md-end mb-3">
                                                                <span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" data-bs-title="Free WiFi"><i
                                                                        class="fa-solid fa-wifi"></i></span>
                                                                <span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" data-bs-title="Food Available"><i
                                                                        class="fa-solid fa-utensils"></i></span>
                                                                <span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" data-bs-title="One Cup Tea"><i
                                                                        class="fa-solid fa-mug-saucer"></i></span>
                                                                <span class="square--20 rounded text-xs text-muted border" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
                                                            </div>
                                                            <div class="text-start text-md-end">
                                                                <span class="label bg-light-success text-success me-1">15% Off</span>
                                                                <div class="text-dark fs-3 fw-bold lh-base">US$<?php echo htmlspecialchars($flight['price']); ?></div>
                                                                <div class="text-muted text-sm mb-2">Refundable</div>
                                                            </div>

                                                            <div class="flight-button-wrap">
                                                                <button class="btn btn-primary btn-md fw-medium full-width" data-bs-toggle="modal"
                                                                    data-bs-target="#bookflight">
                                                                    Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>


                                <div class="col-xl-12 col-lg-12 col-12">
                                    <div class="pags card py-2 px-5">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination m-0 p-0">
                                                <!-- <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><i class="fa-solid fa-arrow-left-long"></i></span>
                                                    </a>
                                                </li> -->
                                                <?php for ($user_page = 1; $user_page <= $total_page_user; $user_page++) : ?>
                                                <li class="page-item active <?php if (isset($_GET['user_page']) && $_GET['user_page'] == $user_page) {
                                                                                                                  echo 'page_active';
                                                                                                                } ?>"><a class="page-link" href="<?php echo "?tab=admin&user_page=$user_page"; ?>"><?php echo $user_page; ?></a></li>
                                                                                                                <?php endfor; ?>
                                                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true"><i class="fa-solid fa-arrow-right-long"></i></span>
                                                    </a>
                                                </li> -->
                                            </ul>
                                        </nav>
                                    </div>
                                </div>


                            </div>
                        <?php else: ?>
                            <p>No flights found for the specified departure and arrival.</p>
                        <?php endif; ?>

                    </div>




                </div>

            </div>
        </section>

        <!-- ============================ All Flits Search Lists End ================================== -->


        <!-- ============================ Footer Start ================================== -->
        <?php
		include "includes/footer.php";
		?>
        <!-- ============================ Footer End ================================== -->

        <!-- Book Flight -->
        <?php include "includes/book-flight.php"; ?>

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


<!-- Mirrored from shreethemes.net/geotrip-live/geotrip/flight-list-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2024 16:08:38 GMT -->

</html>