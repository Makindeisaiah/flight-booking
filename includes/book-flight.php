
<div class="modal modal-lg fade" id="bookflight" tabindex="-1" aria-labelledby="bookflightModalLabel"
			aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title fs-6" id="bookflightModalLabel">Your Flight To <?php echo $arrival; ?></h4>
						<a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
								class="fa-solid fa-square-xmark"></i></a>
					</div>
					<div class="modal-body px-4 py-4 px-xl-5 px-lg-5">
						<div class="airLines-fullsegment">
							<!-- Departure Route -->
							<div class="segmentDeparture-wrap">
								<div class="segmentDeparture-head mb-3">
									<h4 class="fs-5 m-0">Flight to <?php echo $arrival; ?></h4>
									<p class="text-muted-2 fw-medium text-md m-0">1 Stop · <?php echo htmlspecialchars($flight['eta']); ?></p>
								</div>
								<div class="segmentDeparture-block">
									<div class="segmentDeparture blockfirst">
										<ul>
											<li>
												<div class="segmenttriox">
													<h6 class="fs-6 fw-medium m-0"><?php echo $departure; ?></h6>
													<p class="text-muted text-md m-0"><?php echo htmlspecialchars($flight['departure_date']); ?> · <?php echo htmlspecialchars(date('H:i', strtotime($flight['departure_time'])), ENT_QUOTES, 'UTF-8'); ?></p>
												</div>
											</li>
											<li>
												<div class="segmenttriox">
													<h6 class="fs-6 fw-medium m-0"><?php echo $arrival; ?></h6>
													<p class="text-muted text-md m-0"><?php echo htmlspecialchars($flight['departure_date']); ?> · <?php echo htmlspecialchars(date('H:i', strtotime($flight['arrival_time'])), ENT_QUOTES, 'UTF-8'); ?></p>
												</div>
											</li>
										</ul>
									</div>
									<div class="segmentDeparture-blocklast">
										<div class="d-flex align-items-start timeline-stprs">
											<div class="timeline-stprsthumb"><img src="assets/img/air-1.png" class="img-fluid" width="40" alt="">
											</div>
											<div class="timeline-stprscaps ps-2">
												<p class="text-sm m-0"><?php echo htmlspecialchars($flight['airline']); ?><br>AI812 · Economy<br>Flight time 1h 00m
												</p>
											</div>
										</div>
									</div>
								</div>
								
							</div>


							<!-- Returen Route -->
							<div class="segmentDeparture-wrap mt-5">
								<div class="segmentDeparture-head mb-3">
									<h4 class="fs-5 m-0">Flight to <?php echo htmlspecialchars($flight['return_arrival']); ?></h4>
									<p class="text-muted-2 fw-medium text-md m-0">Non Stop · 19h 46m</p>
								</div>
								<div class="segmentDeparture-block">
									<div class="segmentDeparture blockfirst">
										<ul>
											<li>
												<div class="segmenttriox">
													<h6 class="fs-6 fw-medium m-0"><?php echo htmlspecialchars($flight['return_departure']); ?></h6>
													<p class="text-muted text-md m-0"><?php echo htmlspecialchars($flight['return_date']); ?> · <?php echo htmlspecialchars(date('H:i', strtotime($flight['return_departure_time'])), ENT_QUOTES, 'UTF-8'); ?></p>
												</div>
											</li>
											<li>
												<div class="segmenttriox">
													<h6 class="fs-6 fw-medium m-0"><?php echo htmlspecialchars($flight['return_arrival']); ?></h6>
													<p class="text-muted text-md m-0"><?php echo htmlspecialchars($flight['return_date']); ?> · <?php echo htmlspecialchars(date('H:i', strtotime($flight['return_arrival_time'])), ENT_QUOTES, 'UTF-8'); ?></p>
												</div>
											</li>
										</ul>
									</div>
									<div class="segmentDeparture-blocklast">
										<div class="d-flex align-items-start timeline-stprs">
											<div class="timeline-stprsthumb"><img src="assets/img/air-1.png" class="img-fluid" width="40" alt="">
											</div>
											<div class="timeline-stprscaps ps-2">
												<p class="text-sm m-0"><?php echo htmlspecialchars($flight['airline']); ?><br>6E1012 · Economy<br>Flight time 5h 20m
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="airLines-includedbaggases border-top border-bottom mt-4 py-4">
							<div class="departure-servicess mb-4">
								<h5 class="fs-6 mb-4">Flight To <?php echo $arrival; ?></h5>
								<div class="single-includedbaggases d-flex align-items-center justify-content-between mb-3">
									<div class="includedbaggases-blc d-flex align-items-start">
										<div class="includedbaggases-icons"><i class="fa-solid fa-suitcase-rolling fs-5"></i></div>
										<div class="includedbaggases-caps ps-2">
											<p class="m-0 lh-base">1 personal item</p>
											<p class="m-0">Must go under the seat in front of you</p>
										</div>
									</div>
									<div class="text-end"><span class="label bg-light-success text-success">Included</span></div>
								</div>
								<div class="single-includedbaggases d-flex align-items-center justify-content-between">
									<div class="includedbaggases-blc d-flex align-items-start">
										<div class="includedbaggases-icons"><i class="fa-solid fa-briefcase fs-5"></i></div>
										<div class="includedbaggases-caps ps-2">
											<p class="m-0 lh-base">1 cabin bag</p>
											<p class="m-0">Max weight 8 kg</p>
										</div>
									</div>
									<div class="text-end"><span class="label bg-light-success text-success">Included</span></div>
								</div>
							</div>
							<div class="departure-servicess">
								<h5 class="fs-6 mb-4">Flight To <?php echo $departure; ?></h5>
								<div class="single-includedbaggases d-flex align-items-center justify-content-between mb-3">
									<div class="includedbaggases-blc d-flex align-items-start">
										<div class="includedbaggases-icons"><i class="fa-solid fa-suitcase-rolling fs-5"></i></div>
										<div class="includedbaggases-caps ps-2">
											<p class="m-0 lh-base">1 personal item</p>
											<p class="m-0">Must go under the seat in front of you</p>
										</div>
									</div>
									<div class="text-end"><span class="label bg-light-success text-success">Included</span></div>
								</div>
								<div class="single-includedbaggases d-flex align-items-center justify-content-between">
									<div class="includedbaggases-blc d-flex align-items-start">
										<div class="includedbaggases-icons"><i class="fa-solid fa-briefcase fs-5"></i></div>
										<div class="includedbaggases-caps ps-2">
											<p class="m-0 lh-base">1 cabin bag</p>
											<p class="m-0">Max weight 8 kg</p>
										</div>
									</div>
									<div class="text-end"><span class="label bg-light-success text-success">Included</span></div>
								</div>
							</div>
						</div>

						<div class="airLines-priceinfoy1 pt-4">
							<div class="airLines-flex d-flex align-items-center justify-content-between">
								<div class="airLinesyscb">
									<h4 class="fs-4 m-0">US$<?php echo htmlspecialchars($flight['price']); ?></h4>
									<p class="text-md m-0">Total price for all travellers</p>
								</div>
								<div class="flds-ytu"><button class="btn btn-primary btn-md fw-medium"><a href="Flight-detail.php">Book Now</a></button></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>