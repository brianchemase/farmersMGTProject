<!doctype html>
<html lang="en">
	
<!-- Mirrored from bootstrap.gallery/milestone/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 12:57:36 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Farmers management system" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Wrapbootstrap" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="asset('dash/img/favicon.ico') }}" />
		<title>Dashboard</title>
		
		<!--
			**********************
			**********************
			Common CSS files
			**********************
			**********************
		-->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="dash/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{ asset('dash/css/bootstrap.min.css') }}">

		<!-- Icomoon Icons CSS -->
		<link rel="stylesheet" href="{{ asset('dash/fonts/icomoon/icomoon.css') }}">

        <!-- Master CSS -->
        <link rel="stylesheet" href="{{ asset('dash/css/main.css') }}">

        <!-- Daterange CSS -->
        <link rel="stylesheet" href="{{ asset('dash/vendor/daterange/daterange.css') }}">

        <!-- Optional CSS files -->
        <link rel="stylesheet" href="{{ asset('dash/vendor/morris/morris.css') }}">
        <link rel="stylesheet" href="{{ asset('dash/vendor/circliful/circliful.css') }}">

        <!-- Datepickers CSS -->
        <link rel="stylesheet" href="{{ asset('dash/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('dash/css/datepicker.css') }}">
	

	</head>
	<body>

		<!-- Loading starts -->
		<div id="loading-wrapper">
			<div id="loader">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
			</div>
		</div>
		<!-- Loading ends -->
		

		<!-- BEGIN .app-wrap -->
		<div class="app-wrap">

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
							<a class="logo" href="index-2.html">
								<img src="{{asset('dash/img/logo.png') }}" alt="Logo" /> <strong>Milestone</strong>
							</a>
							<!-- Logo end -->

						</div>

						<div class="col-xl-6 col-lg-5 col-md-5 col-sm-6 col-5">
							
							<!-- Header actions start -->
							<ul class="header-actions">
								<li class="dropdown">
									<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-notifications_none"></i>
										<span class="count-label">7</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
										<ul class="imp-notify">
											<li class="clearfix">
												<div class="avatar">
													<img src="{{asset('dashimg/user8.png')}}" alt="avatar" />
													<span class="notify-iocn icon-drafts text-danger"></span>
												</div>
												<div class="details">
													<h6>Wilson</h6>
													<p>The best Dashboard design I have seen ever.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="avatar">
													<img src="{{asset('dashimg/user4.png')}}" alt="avatar" />
													<span class="notify-iocn icon-sphere text-info"></span>
												</div>
												<div class="details">
													<h6>John Smith</h6>
													<p>Jhonny sent you a message. Read now!</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="avatar">
													<img src="{{asset('dashimg/user2.png')}}" alt="avatar" />
													<span class="notify-iocn icon-cake2 text-danger"></span>
												</div>
												<div class="details">
													<h6>Justin Mezzell</h6>
													<p>Stella, Added you as a Friend. Accept it!</p>
												</div>
											</li>
										</ul>
									</div>
								</li>
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
										<span class="user-name">Jeffrey David</span>
										<i class="icon-chevron-small-down"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
										<ul class="user-settings-list">
											<li>
												<a href="profile.html">
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

			<!-- BEGIN .app-container -->
			<div class="app-container">

				<!-- BEGIN .app-side -->
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
									<li class="selected">
										<a href="index-2.html">
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
				<!-- END: .app-side -->

				<!-- BEGIN .app-main -->
				<div class="app-main">

					<!-- BEGIN .main-heading -->
					<header class="main-heading">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
									<ol class="breadcrumb">
										<li class="breadcrumb-item home">
											<a href="index-2.html">
												<i class="icon-home"></i>
											</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
									</ol>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
									<div class="daterange-container">
										<div id="reportrange" class="form-control">
											<span></span> <i class="icon-chevron-down down-arrow"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</header>
					<!-- END: .main-heading -->

					<!-- BEGIN .main-content -->
					<div class="main-content">

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<div class="simple-widget">
									<i class="iconn icon-users"></i>
									<h3>5200</h3>
									<p>Active Farmers</p>
									<div class="progress xs">
										<div class="progress-bar" role="progressbar" style="width: 37%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<div class="simple-widget">
									<i class="iconn icon-wallet"></i>
									<h3>2300</h3>
									<p>Total Production</p>
									<div class="progress xs">
										<div class="progress-bar" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<div class="simple-widget">
									<i class="iconn icon-map6"></i>
									<h3>5.2 MT/Acre</h3>
									<p>Average Yeild</p>
									<div class="progress xs">
										<div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<div class="simple-widget secondary">
									<i class="iconn icon-bargraph"></i>
									<h3>750</h3>
									<p>Female Farmers Participation</p>
									<div class="progress xs">
										<div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->
						
						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">Sales</div>
									<div class="toggle-switch tr">
										<input type="checkbox" class="check" />
										<b class="b switch"></b>
										<b class="b track"></b>
									</div>
									<div class="card-body">
										<div id="areaChart" class="chart-height-lg"></div>
										<div class="spacer20"></div>
										<div class="row gutters">
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-4 col-12">
												<div class="info-stats">
													<h4 class="info-total text-success">45,900</h4>
													<h6 class="info-title">Sales</h6>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-4 col-12">
												<div class="info-stats">
													<h4 class="info-total text-info">24,000</h4>
													<h6 class="info-title">Expenses</h6>													
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-4 col-12">
												<div class="info-stats">
													<h4 class="info-total text-danger">18,900</h4>
													<h6 class="info-title">Visits</h6>													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
								<div class="datepicket-container primary">
									<div id="datepicker"></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
								<div class="card black todo-container">
									<div class="todo-header">
										<div id="today-date"></div>
									</div>
									<div class="customScroll4">
										<ul class="todo-body">
											<li class="todo-list done">
												<div class="todo-info">
													<span class="dot yellow"></span>
													<p>Team Meeting<span class="time">10:30am</span></p>
													<small>Mobile App</small>
												</div>
											</li>
											<li class="todo-list">
												<div class="todo-info">
													<span class="dot blue"></span>
													<p>Make new page<span class="time">12pm</span></p>
													<small>New website</small>
												</div>
											</li>
											<li class="todo-list">
												<div class="todo-info">
													<span class="dot red"></span>
													<p>Code review<span class="time">3pm</span></p>
													<small>Product launch</small>
												</div>
											</li>
											<li class="todo-list">
												<div class="todo-info">
													<span class="dot yellow"></span>
													<p>Catchup with Bristo <span class="time">9am</span></p>
													<small>Mobile Project</small>
												</div>
											</li>
											<li class="todo-list">
												<div class="todo-info">
													<span class="dot"></span>
													<p>Watch Football Match<span class="time">3:30pm</span></p>
													<small>Football match</small>
												</div>
											</li>
											<li class="todo-list">
												<div class="todo-info">
													<span class="dot orange"></span>
													<p>Trekking with Maria<span class="time">5pm</span></p>
													<small>Fun time</small>
												</div>
											</li>
											<li class="todo-list">
												<div class="todo-info">
													<span class="dot yellow"></span>
													<p>Coffee with Julia<span class="time">9pm</span></p>
													<small>Friends</small>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
								<div class="card black">
									<div class="card-header">Visitors</div>
									<div class="card-body">
										<div id="us-map2" class="chart-height-3"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->


						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card black">
									<div class="card-header">
										Subscribers
									</div>
									<div class="card-body">
										<div class="row gutters">
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
												<div id="on-trials"></div>
											</div>
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
												<div id="base-plan"></div>
											</div>
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
												<div id="premium-plan"></div>
											</div>
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
												<div id="platinum-plan"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->


						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
								<div class="card">
									<div class="card-header">Orders</div>
									<div class="customScroll">
										<div class="card-body">
											<ul class="product-status">
												<li class="clearfix">
													<div class="customer">
														<img src="img/avatar1.svg" alt="Milestone Admin">
													</div>
													<div class="product-details">
														<span class="badge badge-primary">Delivered</span>
														<h6>Product has been delivered.</h6>
														<p>We are pleased to inform that the following items in your order OD556753 the following items in your order OD556753 have been delivered.</p>
													</div>
												</li>
												<li class="clearfix">
													<div class="customer">
														<img src="img/avatar2.svg" alt="Milestone Admin">
													</div>
													<div class="product-details">
														<span class="badge badge-secondary">Returned</span>
														<h6>Product has been returned.</h6>
														<p>Thank you for shopping! The following items in your order OD576798 have been delivered.</p>
													</div>
												</li>
												<li class="clearfix">
													<div class="customer">
														<img src="img/avatar4.svg" alt="Milestone Admin">
													</div>
													<div class="product-details">
														<span class="badge badge-success">Cancelled</span>
														<h6>Product has been cancelled.</h6>
														<p>We will send you another email once the items. The following items in your order OD576766 have been delivered.</p>
													</div>
												</li>
												<li class="clearfix">
													<div class="customer">
														<img src="img/avatar2.svg" alt="Milestone Admin">
													</div>
													<div class="product-details">
														<span class="badge badge-secondary">Returned</span>
														<h6>Product has been returned.</h6>
														<p>Thank you for shopping!</p>
													</div>
												</li>
												<li class="clearfix">
													<div class="customer">
														<img src="img/avatar4.svg" alt="Milestone Admin">
													</div>
													<div class="product-details">
														<span class="badge badge-success">Cancelled</span>
														<h6>Product has been cancelled.</h6>
														<p>We will send you another email once the items.</p>
													</div>
												</li>
												<li class="clearfix">
													<div class="customer">
														<img src="img/avatar1.svg" alt="Milestone Admin">
													</div>
													<div class="product-details">
														<span class="badge badge-primary">Delivered</span>
														<h6>Product has been delivered.</h6>
														<p>We are pleased to inform that the following items in your order OD556753 the following items in your order OD556753 have been delivered.</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
								<div class="card">
									<div class="card-header">Activity</div>
									<div class="customScroll">
										<div class="card-body">
											<ul class="project-activity">
												<li class="activity-list">
													<div class="detail-info">
														<span class="lbl"></span>
														<p class="desc-info"><span>Bovane Merso</span> server not found, connection problem otifications of subscriptions.</p>
														<a href="#" class="activity-status"><i class="icon-done_all"></i>Read</a>
													</div>
												</li>
												<li class="activity-list">
													<div class="detail-info">
														<span class="lbl green"></span>
														<p class="desc-info"><span>John Vereridms</span> explore the history of the classic Lorem Ipsum passage and generate your own text using any number of characters, words, sentences or paragraphs.</p>
														<a href="#" class="activity-status">Mark as read</a>
													</div>
												</li>
												<li class="activity-list">
													<div class="detail-info">
														<span class="lbl red"></span>
														<p class="desc-info"><span>Levsmia Eapitanb</span> Commonly used as placeholder text in the graphic and print industries.</p>
														<a href="#" class="activity-status"><i class="icon-done_all"></i>Read</a>
													</div>
												</li>
												<li class="activity-list">
													<div class="detail-info">
														<span class="lbl pink"></span>
														<p class="desc-info"><span>Boneyds Nlics</span> Lorem Ipsum's origins extend far back to a scrambled Latin passage from Cicero in the middle ages.</p>
														<a href="#" class="activity-status">Mark as read</a>
													</div>
												</li>
												<li class="activity-list">
													<div class="detail-info">
														<span class="lbl yellow"></span>
														<p class="desc-info"><span>Muurvd Bgvane</span> In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements.</p>
														<a href="#" class="activity-status"><i class="icon-done_all"></i>Read</a>
													</div>
												</li>
												<li class="activity-list">
													<div class="detail-info">
														<span class="lbl orange"></span>
														<p class="desc-info"><span>Covin Aamirv</span> Lorem ipsum has become the industry standard for design mockups and prototypes. By adding a little bit of Latin to a mockup, you're able to show clients a more complete version of your design without actually having to invest time and effort drafting copy.</p>
														<a href="#" class="activity-status">Mark as read</a>
													</div>
												</li>
												<li class="activity-list">
													<div class="detail-info">
														<span class="lbl blue"></span>
														<p class="desc-info"><span>Gosmin Vapitanb</span> Elit platea justo lorem egestas vestibulum blandit eget sed vitae in elementum nisl justo rutrum.</p>
														<a href="#" class="activity-status"><i class="icon-done_all"></i>Read</a>
													</div>
												</li>
												<li class="activity-list">
													<div class="detail-info">
														<span class="lbl red"></span>
														<p class="desc-info"><span>Eoneyad Hlinsg</span> A handy Lorem Ipsum Generator that helps to create dummy text for all layout needs.</p>
														<a href="#" class="activity-status">Mark as read</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->
						
					</div>
					<!-- END: .main-content -->

					<!-- BEGIN .main-footer -->
					<footer class="main-footer fixed-btm">
						Copyright Milestone Admin 2018.
					</footer>
					<!-- END: .main-footer -->

				</div>
				<!-- END: .app-main -->

			</div>
			<!-- END: .app-container -->

		</div>
		<!-- END: .app-wrap -->


		<!--
			**********************
			**********************
			Common JS files
			**********************
			**********************
		-->

		<!-- jQuery first, then Tether, then other JS. -->
            <script src="{{ asset('dash/js/jquery.js') }}"></script>

            <!-- jQuery UI -->
            <script src="{{ asset('dash/js/jquery-ui.min.js') }}"></script>

            <script src="{{ asset('dash/js/tether.min.js') }}"></script>
            <script src="{{ asset('dash/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('dash/vendor/MilestoneNav/MilestoneNav.js') }}"></script>
            <script src="{{ asset('dash/vendor/onoffcanvas/onoffcanvas.js') }}"></script>
            <script src="{{ asset('dash/js/moment.js') }}"></script>

            <!-- Daterange JS -->
            <script src="{{ asset('dash/vendor/daterange/daterange.js') }}"></script>
            <script src="{{ asset('dash/vendor/daterange/custom-daterange.js') }}"></script>

            <!-- Slimscroll JS -->
            <script src="{{ asset('dash/vendor/slimscroll/slimscroll.min.js') }}"></script>
            <script src="{{ asset('dash/vendor/slimscroll/custom-scrollbar.js') }}"></script>

            <!-- Optional JS Plugins -->

            <!-- Morris Graphs -->
            <script src="{{ asset('dash/vendor/morris/raphael-min.js') }}"></script>
            <script src="{{ asset('dash/vendor/morris/morris.min.js') }}"></script>
            <script src="{{ asset('dash/vendor/morris/custom/areaChart.js') }}"></script>

            <!-- Circliful -->
            <script src="{{ asset('dash/vendor/circliful/circliful.min.js') }}"></script>
            <script src="{{ asset('dash/vendor/circliful/circliful.custom.js') }}"></script>

            <!-- JVector Maps -->
            <script src="{{ asset('dash/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
            <script src="{{ asset('dash/vendor/jvectormap/usa.js') }}"></script>
            <script src="{{ asset('dash/vendor/jvectormap/custom/map-usa1.js') }}"></script>

            <!-- Common JS -->
            <script src="{{ asset('dash/js/common.js') }}"></script>


		<script type="text/javascript">
			//Datepicker
			$(function() {
				$("#datepicker").datepicker();
			});
		</script>
		
	</body>

<!-- Mirrored from bootstrap.gallery/milestone/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 12:59:15 GMT -->
</html>