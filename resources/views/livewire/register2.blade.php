@extends('layouts.custom-app1')

@section('styles')

@endsection

@section('content')
@section('custom-page2')

        <div class="register-2">
@endsection

			<div class="page">
				<div class="page-content">
					<div class="container">
						<div class="row">
							<div class="col mx-auto mt-5">
								<div class="row justify-content-center">
									<div class="col-md-6 col-xl-4">
										<div class="text-center mb-6">
											<a href="{{url('index')}}"><img src="{{asset('build/assets/images/brand/logo1.png')}}" class="header-brand-img" alt="Azea logo"></a>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="text-center mb-3">
													<h1 class="mb-2">Register</h1>
													<a href="javascript:void(0);">Create New Account</a>
												</div>
												<form class="mt-5">
													<div class="input-group mb-4">
															<div class="input-group-text">
																<i class="fe fe-user"></i>
															</div>
														<input type="text" class="form-control" placeholder="Username">
													</div>
													<div class="input-group mb-4">
															<div class="input-group-text">
																<i class="fe fe-mail"></i>
															</div>
														<input type="text" class="form-control" placeholder="Email">
													</div>
													<div class="input-group mb-4">
														<span class="input-group-text"><i class="fe fe-lock"></i></span>
														<input class="form-control" type="password" placeholder="Password">
													</div>
													<div class="input-group input-text1 mb-4" id="Password-toggle">
														<span class="input-group-text"><i class="fe fe-lock"></i></span>
														<input class="form-control border-end-0" type="password" placeholder="Confirm Password">
														<a href="javascript:void(0);" class="input-group-text border-start-0"> <i class="fe fe-eye" aria-hidden="true"></i> </a>
													</div>
													<div class="form-group">
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input">
															<span class="custom-control-label">I Agree For<a href="{{url('terms')}}" class="font-weight-bold">  Terms & Conditions.</a></span>
														</label>
													</div>
													<div class="form-group text-center mb-3">
														<a href="{{url('index')}}" class="btn btn-primary w-100 br-7">Sign Up</a>
													</div>
													<div class="form-group fs-12 text-center">
														By Clicking Sign up,Your agree to our  <a href="{{url('terms')}}" class="font-weight-bold">Terms & Conditions</a> and have read and acknowledge our  <a href="javascript:void(0);" class="font-weight-bold">Privacy & Services.</a>
													</div>
												</form>
											</div>
										</div>
										<div class="text-center register-icons">
											<div class="small text-white mb-4">Register using with</div>
											<button class="btn bg-white-50  text-white-50 font-weight-semibold w-12 google me-2" type="button"><i class="fa fa-google"></i></button>
											<button class="btn bg-white-50  text-white-50 font-weight-semibold  w-12 facebook me-2" type="button"><i class="fa fa-facebook-f"></i></button>
											<button class="btn bg-white-50  text-white-50 font-weight-semibold w-12 twitter me-2" type="button"><i class="fa fa-twitter"></i></button>
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