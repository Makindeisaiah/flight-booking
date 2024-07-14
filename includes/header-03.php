<?php
include "includes/db.php";

?>

<div class="header header-dark">
			<div class="container">
				<nav id="navigation" class="navigation navigation-landscape">
					<div class="nav-header">
						<a class="nav-brand static-show" href="#"><img src="assets/img/logo-2.png" class="logo" alt=""></a>
						<a class="nav-brand mob-show" href="#"><img src="assets/img/logo.png" class="logo" alt=""></a>
						<div class="nav-toggle"></div>
						<div class="mobile_nav">
							<ul>
								<li class="currencyDropdown me-2">
									<a href="#" class="nav-link"><span class="fw-medium">Isaiah</span></a>
								</li>
								<li class="languageDropdown me-2">
									<a href="#" class="nav-link"><i class="fa fa-sign-out"></i></a>
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
                        <?php
                            $users = $pdo->query("SELECT * FROM `users` WHERE `id` = 8");

                            while ($row = $users->fetch()) {
                            $first_name = $row['first_name'];
                        ?>
							<!-- <li class="currencyDropdown me-2">
								<a href="#" class="nav-link"><span class="fw-medium">USD</span></a>
							</li> -->
							<li class="languageDropdown me-2">
								<a href="#" class="nav-link"><?php echo $first_name ?></a>
							</li>
							<li class="list-buttons light">
								<a href="logout.php"><i class="fa fa-sign-out fs-6 me-2"></i>Logout</a>
							</li>
                            <?php } ?>
						</ul>
					</div>
				</nav>
			</div>
		</div>