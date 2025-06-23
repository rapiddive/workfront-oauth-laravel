@extends('layouts.custom-app1')

@section('styles')

@endsection

@section('content')
@section('custom-page3')

        <div class="register-3">
@endsection

			<div class="page">
				<div class="page-content">
					<div class="container">
						<div class="row">
							<div class="col mx-auto mt-5">
								<div class="row justify-content-center">
									<div class="col-lg-6 col-xl-4 col-md-7 col-sm-12 col-xs-12 ">
										<div class="text-center mb-5 mt-0">
											<a href="{{url('index')}}"><img src="{{asset('build/assets/images/brand/logo.png')}}" class="header-brand-img" alt="Azea logo"></a>
										</div>
										<div class="card-group mb-0">
											<div class="card bg-primary text-white border-0 br-7 p-2">
												<div class="card-body mb-0">
													<div class="text-center mb-5">
														<h1 class="mb-2">Password</h1>
														<p class="mb-0 text-white">Create New Password</p>
													</div>
												<form>
													<div class="input-group mb-4">
														<div class="input-group" id="Password-toggle">
																<a href="javascript:void(0);" class="input-group-text">
																<i class="fe fe-eye" aria-hidden="true"></i>
																</a>
															<input class="form-control" type="password" placeholder="Password">
														</div>
													</div>
													<div class="input-group mb-4">
														<div class="input-group" id="Password-toggle1">
																<a href="javascript:void(0);" class="input-group-text">
																<i class="fe fe-eye" aria-hidden="true"></i>
																</a>
															<input class="form-control" type="password" placeholder="New Password">
														</div>
													</div>
													<div class="input-group mb-4">
														<div class="input-group" id="Password-toggle2">
																<a href="javascript:void(0);" class="input-group-text">
																<i class="fe fe-eye" aria-hidden="true"></i>
																</a>
															<input class="form-control" type="password" placeholder="Re enter Password">
														</div>
													</div>
													<div class="form-group">
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input">
															<span class="custom-control-label text-white-50">Remember Me</span>
														</label>
													</div>
												</form>
												<div class="row">
													<div class="col-12">
														<a href="{{url('index')}}" class="btn btn-white btn-block text-primary d-grid px-4 font-weight-bold">Reset</a>
													</div>
												</div>
												<div class="text-center pt-4">
													<div class="font-weight-normal fs-14 text-white-50">Have another account <a class="btn-link font-weight-bold anchors text-white" href="{{url('login3')}}">Login Here</a></div>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
@endsection

@section('scripts')

        <!-- SHOW PASSWORD -->
        <script src="{{asset('build/assets/plugins/bootstrap/bootstrap-show-password.min.js')}}"></script>

@endsection