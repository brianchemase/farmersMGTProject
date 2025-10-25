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
										<li class="breadcrumb-item active" aria-current="page">Farmer Registration - Update</li>
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
									<form action="{{ route('farmers.update', $farmer->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-block">
                                                <div class="form-block-header">
                                                    <h4>Farmer Registration - Update</h4>
                                                </div>
                                                
                                        <div class="form-block-body">
                                            <div class="row gutters">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Farmer National ID</label>
                                                        <input type="text" 
                                                            name="id_number" 
                                                            class="form-control @error('id_number') is-invalid @enderror" 
                                                            value="{{ old('id_number', $farmer->id_number) }}" 
                                                            required>
                                                        @error('id_number')
                                                            <div class="text-danger small">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Farmer Name</label>
                                                        <input type="text" 
                                                            name="name" 
                                                            class="form-control @error('name') is-invalid @enderror" 
                                                            value="{{ old('name', $farmer->name) }}" 
                                                            required>
                                                        @error('name')
                                                            <div class="text-danger small">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gutters">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select name="gender" class="form-control @error('gender') is-invalid @enderror" required>
                                                            <option value="">-- Select Gender --</option>
                                                            <option value="Male" {{ old('gender', $farmer->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                                            <option value="Female" {{ old('gender', $farmer->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                                        </select>
                                                        @error('gender')
                                                            <div class="text-danger small">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Location</label>
                                                        <input type="text" 
                                                            name="location" 
                                                            class="form-control @error('location') is-invalid @enderror" 
                                                            value="{{ old('location', $farmer->location) }}" 
                                                            required>
                                                        @error('location')
                                                            <div class="text-danger small">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gutters">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <input type="date" 
                                                            name="dateofbirth" 
                                                            class="form-control @error('dateofbirth') is-invalid @enderror" 
                                                            value="{{ old('dateofbirth', $farmer->dateofbirth) }}" 
                                                            required>
                                                        @error('dateofbirth')
                                                            <div class="text-danger small">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>County</label>
                                                        <select name="county" class="form-control @error('county') is-invalid @enderror" required>
                                                            <option value="">-- Select County --</option>
                                                            @foreach($counties as $code => $name)
                                                                <option value="{{ $code }} - {{ $name }}" 
                                                                    {{ old('county', $farmer->county) == "$code - $name" ? 'selected' : '' }}>
                                                                    {{ $code }} - {{ $name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('county')
                                                            <div class="text-danger small">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gutters">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Primary Phone</label>
                                                        <input type="text" 
                                                            name="primary_phone" 
                                                            class="form-control @error('primary_phone') is-invalid @enderror" 
                                                            value="{{ old('primary_phone', $farmer->primary_phone) }}" 
                                                            required>
                                                        @error('primary_phone')
                                                            <div class="text-danger small">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Secondary Phone</label>
                                                        <input type="text" 
                                                            name="secondary_phone" 
                                                            class="form-control @error('secondary_phone') is-invalid @enderror" 
                                                            value="{{ old('secondary_phone', $farmer->secondary_phone) }}">
                                                        @error('secondary_phone')
                                                            <div class="text-danger small">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gutters">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Farmer Magshot</label>
                                                        <input type="file" name="magshot" class="form-control @error('magshot') is-invalid @enderror">
                                                        @error('magshot')
                                                            <div class="text-danger small">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-success float-right">Update Farmer</button>
                                                    <a href="{{ route('getAllFarmers') }}" class="btn btn-secondary float-left">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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