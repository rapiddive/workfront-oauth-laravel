@extends('layouts.custom-app1')

@section('styles')

@endsection

@section('content')
@section('custom-con')

        <div class="construction">
@endsection

            <div class="page relative">
                <div class="page-content">
                    <div class="container text-center">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="custom-content">
                                    <div class="text-white">
                                        <div class="card-body">
                                            <h2 class="display-3 mb-2 font-weight-bold error-text"><strong>Under
                                                    Construction</strong></h2>
                                            <h4 class="text-white-80 mb-5">Our website is in Under construction</h4>
                                            <div id="launch_date"></div>
                                        </div>
                                        <div class="d-block mx-auto mt-5">
                                            <div class="input-group mb-7">
                                                <input class="form-control" placeholder="Enter Your Email" type="text">
                                                <button class="btn btn-primary br-ts-0 br-bs-0" type="button">
                                                    Notify Me
                                                </button>
                                            </div>
                                        </div>
                                        <div class="custom-btns">
                                            <button class="btn btn-icon" type="button">
                                                <i class="fa fa-facebook-f"></i>
                                            </button>
                                            <button class="btn btn-icon" type="button">
                                                <i class="fa fa-google"></i>
                                            </button>
                                            <button class="btn btn-icon" type="button">
                                                <i class="fa fa-twitter"></i>
                                            </button>
                                            <button class="btn btn-icon" type="button">
                                                <i class="fa fa-pinterest-p"></i>
                                            </button>
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

        <!-- INTERNAL JQUERY-COUNTDOWN JS-->
        <script src="{{asset('build/assets/plugins/jquery-countdown/jquery.plugin.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jquery-countdown/jquery.countdown.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jquery-countdown/countdown.js')}}"></script>

@endsection