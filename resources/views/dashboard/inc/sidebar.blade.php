<aside class="app-side" id="app-side">

					<!-- BEGIN .side-content -->
					<div class="side-content">

						<!-- User details start -->
						<div class="user-details clearfix">
							<img src="{{asset('dash/img/user.jpg')}}" class="thumb" alt="Milestone Admin" />
							<div class="user-info">
								<h5 class="username">Username</h5>
								<h6 class="email">Email</h6>
							</div>
						</div>
						<!-- User details end -->

						

					

						<!-- BEGIN .side-nav -->
						<nav class="side-nav">
							<div class="sidebarNavScroll">
								<!-- BEGIN: side-nav-content -->
								<ul class="customSidebarMenu" id="customSidebarMenu">
									<!-- <li class="selected">
										<a href="#">
											<span class="has-icon">
												<i class="icon-av_timer"></i>
											</span>
											<span class="nav-title">Dashboard</span>
										</a>
									</li> -->

                                    <li class="{{ request()->is('dashboard') ? 'selected' : '' }}">
                                        <a href="{{ route('dashboard') }}">
                                            <span class="has-icon">
                                                <i class="icon-av_timer"></i>
                                            </span>
                                            <span class="nav-title">Dashboard</span>
                                        </a>
                                    </li>


                                                                       
									<li>
										<a href="#">
											<span class="has-icon">
												<i class="icon-people"></i>
											</span>
											<span class="nav-title">Farmers</span>
										</a>
									</li>
								
									<li>
										<a href="#">
											<span class="has-icon">
												<i class="icon-local_florist"></i>
											</span>
											<span class="nav-title">Seeds</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="has-icon">
												<i class="icon-border_outer"></i>
											</span>
											<span class="nav-title">Cultivation</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="has-icon">
												<i class="icon-pages"></i>
											</span>
											<span class="nav-title">Harvest</span>
										</a>
									</li>
									<li>
										<a href="#" class="has-arrow" aria-expanded="false">
											<span class="has-icon">
												<i class="icon-opacity"></i>
											</span>
											<span class="nav-title">Operations</span>
											<span class="lbl red">4</span>
										</a>
										<ul aria-expanded="false">
											<li>
												<a href="#">Processing</a>
											</li>
											<li>
												<a href="#">Quality Control</a>
											</li>
											<li>
												<a href="#">Finance</a>
											</li>
											<li>
												<a href="#">Export</a>
											</li>
											
										</ul>
									</li>
									<li>
										<a href="#">
											<span class="has-icon">
												<i class="icon-style"></i>
											</span>
											<span class="nav-title">Analytics</span>
										</a>
									</li>	
									<li>
										<a href="#">
											<span class="has-icon">
												<i class="icon-user-check"></i>
											</span>
											<span class="nav-title">Training</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="has-icon">
												<i class="icon-event_note"></i>
											</span>
											<span class="nav-title">Settings</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="has-icon">
												<i class="icon-power2"></i>
											</span>
											<span class="nav-title">logout</span>
										</a>
									</li>
									
								</ul>
								<!-- END: side-nav-content -->
							</div>
						</nav>
						<!-- END: .side-nav -->

					</div>
					<!-- END: .side-content -->

				</aside>