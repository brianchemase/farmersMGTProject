@extends('dashboard.inc.master')

@section('title','FarmersMGT')

@section('content')

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
										<li class="breadcrumb-item active" aria-current="page">Farmer's Details</li>
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
                       <div class="row gutters justify-content-center">
                            <div class="col-xl-9 col-lg-9 col-md-10 col-sm-12">
                                <div class="invoice-container">

                                    {{-- Header Section --}}
                                    <div class="invoice-header">
                                        <div class="row gutters align-items-center">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <img src="{{ asset('/dash/img/logo.png') }}" class="invoice-logo" alt="Farmer Details">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 text-end">
                                                <div class="btn-group float-right">
                                                   
                                                    <a href="{{ route('getAllFarmers') }}" class="btn btn-outline-info btn-sm ml-2">
                                                        <i class="icon-arrow-left"></i> Back to List
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Farmer Details Header --}}
                                    <div class="invoice-address mt-3">
                                        <div class="row gutters align-items-center">
                                            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                                                @if ($farmer->ppt)
                                                    <img src="{{ asset('storage/' . $farmer->ppt) }}" 
                                                        alt="Farmer Magshot" 
                                                        class="img-fluid rounded shadow-sm mb-2"
                                                        style="max-width: 200px;">
                                                @else
                                                    <img src="{{ asset('images/default-avatar.png') }}" 
                                                        alt="No Photo" 
                                                        class="img-fluid rounded shadow-sm mb-2"
                                                        style="max-width: 200px;">
                                                @endif
                                                <h6 class="mt-2">{{ $farmer->name }}</h6>
                                                <p class="text-muted m-0">ID: {{ $farmer->id_number }}</p>
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <div class="invoice-details">
                                                    <h6 class="mb-2">Bio Information</h6>
                                                    <table class="table table-sm table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>Gender</th>
                                                                <td>{{ ucfirst($farmer->gender) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Date of Birth</th>
                                                                <td>{{ \Carbon\Carbon::parse($farmer->dateofbirth)->format('d M Y') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>County</th>
                                                                <td>{{ $farmer->county }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Location</th>
                                                                <td>{{ $farmer->location }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Farmer Contacts --}}
                                    <div class="invoice-body mt-3">
                                        <h6>Contact Information</h6>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>Primary Phone</th>
                                                    <td>{{ $farmer->primary_phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Secondary Phone</th>
                                                    <td>{{ $farmer->secondary_phone ?? 'N/A' }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Registered On</th>
                                                    <td>{{ \Carbon\Carbon::parse($farmer->created_at)->format('d M Y, h:i A') }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Last Updated</th>
                                                    <td>{{ \Carbon\Carbon::parse($farmer->updated_at)->format('d M Y, h:i A') }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    {{-- Footer --}}
                                    <div class="invoice-footer text-center">
                                        <small class="text-muted">Farmer details record - generated on {{ now()->format('d M Y h:i A') }}</small>
                                    </div>

                                </div>
                            </div>
                        </div>

              

						
					</div>
					<!-- END: .main-content -->


					<!-- BEGIN .main-footer -->
					<footer class="main-footer fixed-btm">
						 @include('dashboard.inc.footer')
					</footer>
					<!-- END: .main-footer -->


				</div>
				<!-- END: .app-main -->





@endsection