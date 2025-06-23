@extends('layouts.custom-app')

@section('styles')

@endsection
@section('custom-error')

        <div class="bg-primary">
@endsection
@section('content')

			<div class="page">
				<div class="page-content">
					<div class="container text-center">
						<div class="row">
							<div class="col-md-12">
								<div class="mt-lg-7">
									<div class="text-white">
										<div class="fs-100  mb-5 font-weight-normal h1 error-text"><i class="fa fa-frown-o"></i>ops!</div>
										<h1 class="h3  mb-3 font-weight-bold">Error 500: Internal Server Error</h1>
										<p class="h5 font-weight-normal mb-7 leading-normal">You may have mistyped the address or the page may have moved.</p>
										<a class="btn btn-light text-primary mb-5 fs-18" href="javascript:void(0);">Help</a>
										<a class="btn text-light border-light mb-5 ms-2 fs-18" href="{{url('index')}}">Back to Home</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

@endsection

@section('scripts')


@endsection