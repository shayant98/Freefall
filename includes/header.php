<?php
session_start();
 ?>
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0, 'stickySetTop': '0', 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.php">
										<img alt="Freefall" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/logo_freefall.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
                                        </button>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse" style="float: left !important;">
											<nav>
												<ul class="nav nav-pills" id="mainNav">

													<li class="">
														<a href="overzicht_freelancer.php">
															Overzicht
														</a>
													</li>
                                                        <li class="">
														<a href="overzicht-projecten_freelancer.php">
															Mijn Projecten
														</a>
													</li>

												    <li class="no-active">
														<button type="button" class="btn btn-3d btn-primary mr-xs mb-sm">Kies een Project</button></a>
													</li>


												</ul>
											</nav>
										</div>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">											<nav>
												<ul class="nav nav-pills" id="mainNav">

													<li class="">
														<a >
															$0.00
                                                        </a>
													</li>
                                                        <li class="">
														<a href="#">
															<i class="fa fa-user " aria-hidden="true" style="font-size: 21px;"></i>
														</a>
													</li>

												    <li class="">
												    <a href="api/logout_process.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true" style="font-size: 21px;"></i>
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
				</div>
			</header>
