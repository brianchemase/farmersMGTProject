@extends('dashboard.inc.master')

@section('title','FarmersMGT')

@section('content')

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
									<h3>{{ number_format($totalFarmers) }}</h3>
									<p>Registered Farmers</p>
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
									<h3>{{ number_format($femaleFarmers) }}</h3>
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
													<h4 class="info-total text-success">{{ number_format($totalFarmers) }}</h4>
													<h6 class="info-title">Farmers Registraion</h6>
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
							<div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
								<div class="datepicket-container primary">
									<div id="datepicker"></div>
								</div>
							</div>
							
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
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
										Quality Controll
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
						
					</div>
					<!-- END: .main-content -->

					<!-- BEGIN .main-footer -->
					 @include('dashboard.inc.footer')
					
					<!-- END: .main-footer -->

				</div>

@endsection