<!-- BEGIN .app-heading -->
			<header class="app-header">
				<div class="container-fluid">
					<div class="row gutters">
						<div class="col-xl-6 col-lg-7 col-md-7 col-sm-6 col-7">
							
							<!-- Toggle button start, Only visible when the screen size is less than 992px -->
							<a class="hoverable-toggler" href="#" id="app-side-hoverable-toggler">
								<i class="icon-menu5"></i>
							</a>

							<a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler onoffcanvas-nav" aria-expanded="true">
								<i class="icon-menu5"></i>
							</a>
							<!-- Toggle button end -->

							<!-- Logo start -->
							<a class="logo" href="{{ route('dashboard') }}">
								<img src="{{asset('dash/img/logo.png') }}" alt="Logo" /> <strong>Mannatech Farm Management System</strong>
							</a>
							<!-- Logo end -->

						</div>

						<div class="col-xl-6 col-lg-5 col-md-5 col-sm-6 col-5">
							
							<!-- Header actions start -->
							<ul class="header-actions">
								
								<li>
									<a href="#" id="todos" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-person_outline"></i>
										<span class="count-label red">5</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
										<ul class="stats-widget">
											<li>
												<h4>$8500</h4>
												<p>Revenue <span>+18%</span></p>
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
														<span class="sr-only">87% Complete (success)</span>
													</div>
												</div>
											</li>
											<li>
												<h4>4750</h4>
												<p>Downloads <span>+56%</span></p>
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
														<span class="sr-only">65% Complete (success)</span>
													</div>
												</div>
											</li>
											<li>
												<h4>2500</h4>
												<p>Uploads <span class="text-secondary">-3%</span></p>
												<div class="progress">
													<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
														<span class="sr-only">42% Complete (success)</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="dropdown">
									<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
										<span class="avatar">JD<span class="status online"></span></span>
										<span class="user-name">Username</span>
										<i class="icon-chevron-small-down"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
										<ul class="user-settings-list">
											<li>
												<a href="#">
													My Profile<span class="badge badge-danger">7</span>
												</a>
											</li>
											<li>
												<a href="#">
													Notifications<span class="badge badge-info">12</span>
												</a>
											</li>
											<li>
												<a href="#">Account Settings</a>
											</li>
											<li class="dropdown-divider"></li>
											<li>
												<a href="#">Logout</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
							<!-- Header actions end -->

						</div>
					</div>
				</div>
			</header>
			<!-- END: .app-heading -->