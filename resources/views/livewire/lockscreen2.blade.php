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
									<div class="col-md-4">
										<div class="text-center mb-6">
											<a href="{{url('index')}}"><img src="{{asset('build/assets/images/brand/logo1.png')}}" class="header-brand-img" alt="Azea logo"></a>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row mt-xl-5">
													<div class="col-9 d-block mx-auto">
														<div class="text-center mb-4 ">
															<span class="avatar avatar-xxl  brround" style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
														</div>
														<span class="m-4 d-none d-lg-block text-center">
															<span class="fs-20"><strong>Patrenna</strong></span>
														</span>
														<div class="input-group mb-4">
															<div class="input-group" id="Password-toggle">
																<a href="javascript:void(0);" class="input-group-text">
																<i class="fe fe-eye" aria-hidden="true"></i>
																</a>
																<input class="form-control" type="password" placeholder="Confirm Password">
															</div>
														</div>
														<a href="{{url('index')}}" class="btn btn-primary w-100"><i class="fe fe-lock"></i> Unlock</a>
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