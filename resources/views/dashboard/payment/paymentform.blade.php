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
                                       <form action="{{ route('farmer.payment.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-block">
                                                <div class="form-block-header">
                                                    <h4>Farmer Payment Details Registration</h4>
                                                </div>

                                                <div class="form-block-body">

                                                    {{-- EXISTING PERSONAL DETAILS FIELDS REMAIN AS THEY ARE --}}
                                                    {{-- .................................................... --}}
                                                    {{-- (Your current fields remain unchanged up to the end of them) --}}

                                                    <hr>
                                                    <h4>Payment Details</h4>

                                                    <div class="row gutters">
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="payment_type" class="col-form-label">Payment Method</label>
                                                                <select name="payment_type" id="payment_type" class="form-control" required>
                                                                    <option value="">-- Select Payment Method --</option>
                                                                    <option value="MPESA">M-PESA</option>
                                                                    <option value="BANK">Bank</option>
                                                                    <option value="BOTH">Both</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="farmer_id" value="{{ $farmer->id }}">

                                                    {{-- MPESA SECTION --}}
                                                    <div id="mpesa_section" style="display:none;">
                                                        <h6>M-PESA Details</h6>
                                                        <div class="row gutters">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="mpesa_phone" class="col-form-label">M-PESA Phone</label>
                                                                    <input type="text" name="mpesa_phone" class="form-control" placeholder="07XXXXXXXX">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    {{-- BANK SECTION --}}
                                                    <div id="bank_section" style="display:none;">
                                                        <h6>Bank Details</h6>
                                                        <div class="row gutters">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="bank_name" class="col-form-label">Bank Name</label>
                                                                    <input type="text" name="bank_name" class="form-control" placeholder="Bank Name">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="bank_branch" class="col-form-label">Bank Branch</label>
                                                                    <input type="text" name="bank_branch" class="form-control" placeholder="Branch">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="account_name" class="col-form-label">Account Name</label>
                                                                    <input type="text" name="account_name" class="form-control" placeholder="Account Name">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="account_number" class="col-form-label">Account Number</label>
                                                                    <input type="text" name="account_number" class="form-control" placeholder="Account Number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row gutters mt-3">
                                                        <div class="col-xl-12">
                                                            <button type="submit" class="btn btn-primary float-right">
                                                                <span class="icon-user-add"></span> Register Farmer Payment Details
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>

                                        {{-- TOGGLE PAYMENT SECTIONS --}}
                                        <script>
                                            document.getElementById('payment_type').addEventListener('change', function() {
                                                const type = this.value;
                                                document.getElementById('mpesa_section').style.display = (type === 'MPESA' || type === 'BOTH') ? 'block' : 'none';
                                                document.getElementById('bank_section').style.display = (type === 'BANK' || type === 'BOTH') ? 'block' : 'none';
                                            });
                                        </script>


                                 
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


@endsection