@extends('layouts.custom-app1')

@section('styles')

@endsection

@section('content')
@section('custom-com')

        <div class="comming">
@endsection

            <div class="page relative">
                <div class="page-content">
                    <div class="container text-center">
                        <div class="mb-5 br-7">
                            <img src="{{asset('build/assets/images/brand/logo1.png')}}" class="header-brand-img" alt="Azea logo">
                        </div>
                        <div class="display-2 text-white mb-5 font-weight-normal1 error-text">Coming soon</div>
                        <p class="h5 font-weight-normal mb-5 leading-normal text-white-50">Our website is under construction and
                            we are working on it will be available soon.</p>
                        <div class="row">
                            <div class="col-md-6 d-block mx-auto">
                                <div class="input-group  mb-8">
                                    <input class="form-control" placeholder="Enter Your Email" type="text">
                                    <button class="btn btn-primary br-ts-0 br-bs-0" type="button">
                                        <span class="input-group-btn">Notify Me</span>
                                    </button>
                                </div>
                                <div class="text-center register-icons">
                                    <button class="btn bg-white-50  text-white-50 font-weight-semibold google me-2"
                                        type="button"><i class="fa fa-google"></i></button>
                                    <button class="btn bg-white-50  text-white-50 font-weight-semibold  facebook me-2"
                                        type="button"><i class="fa fa-facebook-f"></i></button>
                                    <button class="btn bg-white-50  text-white-50 font-weight-semibold twitter me-2"
                                        type="button"><i class="fa fa-twitter"></i></button>
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