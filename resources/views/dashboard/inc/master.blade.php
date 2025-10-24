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

		<!-- Data Tables -->
		<link rel="stylesheet" href="{{ asset('dash/vendor/datatables/dataTables.bs4.css') }}" />
		<link rel="stylesheet" href="{{ asset('dash/vendor/datatables/dataTables.bs4-custom.css') }}" />
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.js"
			integrity="sha512-bYkaBWaFtfPIMYt9+CX/4DWgfrjcHinjerNYxQmQx1VM76eUsPPKZa5zWV8KksVkBF/DaHSADCwil2J5Uq2ctA=="
			crossorigin="anonymous"></script>

		<!-- Your custom JS -->
    	<script src="{{ asset('dash/js/pinchecker.js') }}"></script>      
	

	</head>
	<body>

		<!-- Loading starts -->
		<div id="loading-wrapper">
			<div id="loader">

			<img src="{{ asset('dash/img/logo.png') }}" alt="Logo" class="loader-logo">
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
             @include('dashboard.inc.header')
			
			<!-- END: .app-heading -->

			<!-- BEGIN .app-container -->
			<div class="app-container">

				<!-- BEGIN .app-side -->
                  @include('dashboard.inc.sidebar')
				
				<!-- END: .app-side -->

				<!-- BEGIN .app-main -->

                  @yield('content')	        
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

			<!-- Data Tables -->
			<script src="{{ asset('dash/vendor/datatables/dataTables.min.js') }}"></script>
			<script src="{{ asset('dash/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>
			
			<!-- Custom Data tables -->
			<script src="{{ asset('dash/vendor/datatables/custom/custom-datatables.js') }}"></script>
			<script src="{{ asset('dash/vendor/datatables/custom/fixedHeader.js') }}"></script>

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