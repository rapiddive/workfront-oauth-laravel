@extends('layouts.custom-app1')

@section('styles')

@endsection
@section('content')
@section('custom-page3')

        <div class="register-3">
@endsection
@section('content')

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
											<div class="card bg-primary text-white br-7 p-2">
												<div class="card-body mb-0">
													<div class="text-center mb-3">
														<h1 class="mb-2">Register</h1>
														<a href="javascript:void(0);" class="text-white">Create New Account</a>
													</div>
												<hr class="hrregister3">
												<div class="text-center small mt-3">Sign up with</div>
												<div class="btn-list text-center mb-3 mt-2">
													<a href="javascript:void(0);" class="btn   m-0 me-2 p-2 mb-2"><i class="fa fa-google"></i> Google</a>
													<a href="javascript:void(0);" class="btn  m-0 me-2 p-2 mb-2"><i class="fa fa-twitter"></i> twitter</a>
													<a href="javascript:void(0);" class="btn  m-0 p-2 mb-2"><i class="fa fa-facebook"></i> facebook</a>
												</div>
												<hr class="divider my-6 text-primary">
												<form>
													<div class="input-group mb-4">
															<div class="input-group-text">
																<i class="fe fe-user"></i>
															</div>
														<input type="text" class="form-control border-start-0" placeholder="Username">
													</div>
													<div class="input-group mb-4">
															<div class="input-group-text">
																<i class="fe fe-mail"></i>
															</div>
														<input type="text" class="form-control border-start-0" placeholder="Enter Email">
													</div>
													<div class="input-group mb-4">
														<span class="input-group-text"><i class="fe fe-lock"></i></span>
														<input class="form-control border-start-0" type="password" placeholder="Password">
													</div>
													<div class="input-group input-text1 mb-4" id="Password-toggle">
														<span class="input-group-text"><i class="fe fe-lock"></i></span>
														<input class="form-control border-start-0 border-end-0" type="password" placeholder="Confirm Password">
														<a href="javascript:void(0);" class="input-group-text border-start-0"> <i class="fe fe-eye" aria-hidden="true"></i> </a>
													</div>
													<div class="form-group">
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input">
															<span class="custom-control-label text-white-50">I Agree For  <a href="{{url('terms')}}" class="ms-1 anchors font-weight-bold text-white">Terms & Conditions</a></span>
														</label>
													</div>
												</form>
												<div class="row">
													<div class="col-12">
														<a href="{{url('index')}}" class="btn btn-white text-primary btn-block d-grid px-4 font-weight-bold">Create New Account</a>
													</div>
												</div>
												<div class="text-center pt-4">
													<div class="font-weight-normal fs-14 text-white-50">Already have an account ?<a class="btn-link font-weight-bold anchors text-white ms-2 d-inline-block" href="{{url('login3')}}">Login Here</a></div>
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