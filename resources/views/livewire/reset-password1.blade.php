@extends('layouts.custom-app1')

@section('styles')

@endsection

@section('content')
@section('custom-page1')

        <div class="register1">
@endsection

			<div class="page">
				<div class="page-single">
					<div class="container">
						<div class="row">
							<div class="col mx-auto mt-5">
								<div class="row justify-content-center">
									<div class="col-xl-7 col-lg-12">
										<div class="row p-0 m-0">
											<div class="col-lg-6 p-0">
												<div class="text-justified text-white p-5 register-1">
													<div class="custom-content">
														<div class="mb-5 br-7">
															<a href="{{url('index')}}"><img src="{{asset('build/assets/images/brand/logo1.png')}}" class="header-brand-img" alt="Azea logo"></a>
														</div>
														<div class="ms-5">
															<div class="fs-16 mb-6 font-weight-bold text-white">Welcome Back To Azea !</div>
															<div class="mb-6 text-white-50">
																Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem et esse in velit deleniti facilis quo, placeat totam aliquam veniam, quis rerum itaque!
															</div>
															<h6 class="text-white-50">Subscribe For More ?</h6>
															<a href="{{url('login1')}}" class="btn btn-white text-primary font-weight-bold ">Visit Page</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 col-lg-6 p-0 mx-auto">
											<div class="card mb-0 border-0 br-7 br-ts-0 br-bs-0">
												<div class="card-body">
													<div class="text-center mb-3">
														<h1 class="mb-2">Password</h1>
														<p class="mb-0">Create New Password</p>
													</div>
													<form class="mt-5">
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
																<input class="form-control" type="password" placeholder="Confirm Password">
															</div>
														</div>
														<div class="form-group">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-label">Remember Me</span>
															</label>
														</div>
														<div class="form-group text-center mb-3">
															<a href="{{url('index')}}" class="btn btn-primary w-100 br-7">Reset</a>
														</div>
														<div class="form-group fs-12 text-center">
															By Clicking Reset,Password Changes & Agree to our  <a href="{{url('terms')}}" class="font-weight-bold">Terms & Conditions</a> and have read and acknowledge our  <a href="{{url('terms')}}" class="font-weight-bold">Privacy & Services.</a>
														</div>
													</form>
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