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
										<li class="breadcrumb-item"><a href="{{ route('getAllFarmers') }}">Farmers</a></li>
										<li class="breadcrumb-item active" aria-current="page">Farmer Registration</li>
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

					<div class="main-content">
						
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div id="formprocessing" class="text-primary mt-2 mb-2 fw-semibold"></div>
                                    <div id="error" class="text-danger mt-1"></div>
                                        <form action="{{ route('farmers.store') }}" method="POST">
                                            @csrf
                                            <div class="form-block">
                                                <div class="form-block-header">
                                                    <h4>Farmer Registration</h4>
                                                </div>

                                                <div class="form-block-body">
                                                    <div class="row gutters">
                                                        <!-- Left Column -->
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                            
                                                            <div class="form-group">
                                                                <label for="id_number" class="col-form-label">Farmer National ID</label>
                                                                <input type="text" name="id_number" class="form-control" id="id_number" placeholder="National ID" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="name" class="col-form-label">Farmer Name</label>
                                                                <input type="text" name="name" class="form-control" id="farmername" placeholder="Full Name" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="gender" class="col-form-label">Gender</label>
                                                                <select name="gender" id="gender" class="form-control" required>
                                                                    <option value="">-- Select Gender --</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="location" class="col-form-label">Location</label>
                                                                <input type="text" name="location" class="form-control" id="location" placeholder="Location" required>
                                                            </div>

                                                        </div>

                                                        <!-- Right Column -->
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                                            <div class="form-group">
                                                                <label for="dateofbirth" class="col-form-label">Date of Birth</label>
                                                                <input type="date" name="dateofbirth" class="form-control" id="dateofbirth" required>
                                                            </div>

                                                        <div class="form-group">
                                                                <label for="county" class="col-form-label">County of Farming</label>
                                                                <select name="county" id="county" class="form-control" required>
                                                                    <option value="">-- Select County --</option>
                                                                    @foreach($counties as $code => $name)
                                                                        <option value="{{ $code }} - {{ $name }}">{{ $code }} - {{ $name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="primary_phone" class="col-form-label">Primary Phone Number</label>
                                                                <input type="text" name="primary_phone" class="form-control" id="primary_phone" placeholder="07XXXXXXXX" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="secondary_phone" class="col-form-label">Secondary Phone Number</label>
                                                                <input type="text" name="secondary_phone" class="form-control" id="secondary_phone" placeholder="07XXXXXXXX">
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row gutters mt-3">
                                                        <div class="col-xl-12">
                                                            <button type="submit" class="btn btn-primary float-right"> <span class="icon-user-add"></span> Register Farmer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
								</div>
							</div>

                           

							<!--*************************
							*************************
							*************************
							 Contact Form End
							*************************
							*************************
							*************************-->

						
					</div>
					<!-- END: .main-content -->


					<!-- BEGIN .main-footer -->
					<footer class="main-footer fixed-btm">
						 @include('dashboard.inc.footer')
					</footer>
					<!-- END: .main-footer -->

                    </div>


@endsection