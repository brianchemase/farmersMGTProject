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
											<a href="#">
												<i class="icon-home"></i>
											</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Farmers List</li>
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
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">Register a New Farmer</div>
									<div class="card-body">
										<!-- <h4 class="card-title">Special title treatment</h4> -->
										<p class="card-text">Click the button below to register a new farmer into the farmers database.</p>
										<a href="{{ route('registerfarmer') }}" class="btn btn-primary">Register New Farmer</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->


						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">Registered Farmers details</div>
									<div class="card-body">
										<table id="basicExample" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>#</th>
													<th>ID Number</th>
													<th>Name</th>
													<th>Gender</th>
													<th>Location</th>
													<th>Date of Birth</th>
													<th>County</th>
													<th>Primary Phone</th>
													<th>Secondary Phone</th>
													<th>PPT</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												@forelse($farmers as $index => $farmer)
													<tr>
														<td>{{ $index + 1 }}</td>
														<td>{{ $farmer->id_number }}</td>
														<td>{{ $farmer->name }}</td>
														<td>{{ $farmer->gender }}</td>
														<td>{{ $farmer->location }}</td>
														<td>{{ \Carbon\Carbon::parse($farmer->dateofbirth)->format('d M Y') }}</td>
														<td>{{ $farmer->county }}</td>
														<td>{{ $farmer->primary_phone }}</td>
														<td>{{ $farmer->secondary_phone ?? '-' }}</td>
														<td>
															@if($farmer->ppt)
																<a href="{{ asset('storage/' . $farmer->ppt) }}" target="_blank">View PPT</a>
															@else
																<span class="text-muted">N/A</span>
															@endif
														</td>
														<td>															

															<div class="btn-group dropleft">
																<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	Action
																</button>
																<div class="dropdown-menu" x-placement="left-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-194px, 0px, 0px);">
																	<a class="dropdown-item" href="{{ route('farmers.edit', $farmer->id) }}">Edit Farmer</a>
																	<a class="dropdown-item" href="{{ route('farmers.show', $farmer->id) }}">View Farmer</a>
																	<a class="dropdown-item" href="#">Something else here</a>																	
																</div>
															</div>
														</td>
													</tr>
												@empty
													<tr>
														<td colspan="11" class="text-center text-muted">No farmers found</td>
													</tr>
												@endforelse
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- Row ends -->


						
					</div>
					<!-- END: .main-content -->


					<!-- BEGIN .main-footer -->
					 @include('dashboard.inc.footer')
					<!-- END: .main-footer -->


				</div>
				<!-- END: .app-main -->

@endsection