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
								<div>
									<div class="text-light">
										<div class="display-1 mb-5 font-weight-bold error-text">400</div>
										<h1 class="h3  mb-3 font-weight-bold">Address Not Found Error!</h1>
										<p class="h5 font-weight-normal mb-7 leading-normal">The address you have typed was incorrect! Please try with correct address.</p>
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