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
                                                <div class="text-justified text-white p-5 register-1 overflow-hidden">
                                                    <div class="custom-content">
                                                        <div class="mb-5 br-7">
                                                            <img src="{{asset('build/assets/images/brand/logo1.png')}}"
                                                                class="header-brand-img" alt="Azea logo">
                                                        </div>
                                                        <div class="ms-5">
                                                            <div class="fs-18 mb-6 font-weight-bold text-white">Welcome Back To
                                                                Azea !</div>
                                                            <div class="mb-6 text-white-50">
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                                Exercitationem et esse in velit deleniti facilis quo!
                                                            </div>
                                                            <h6 class="text-white-50">Don't Have an Account?</h6>
                                                            <a href="{{url('register1')}}"
                                                                class="btn btn-white text-primary text-transparent font-weight-bold ">Create
                                                                Here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-6 p-0 mx-auto">
                                                <div class="bg-white text-dark br-7 br-ts-0 br-bs-0">
                                                    <div class="card-body">
                                                        <div class="text-center mb-3">
                                                            <h1 class="mb-2">Log In</h1>
                                                            <a href="javascript:void(0);">Hello There !</a>
                                                        </div>
                                                        <form class="mt-5">
                                                            <div class="input-group mb-4">
                                                                <div class="input-group-text">
                                                                    <i class="fe fe-user"></i>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Username">
                                                            </div>
                                                            <div class="input-group mb-4">
                                                                <div class="input-group" id="Password-toggle">
                                                                    <a href="javascript:void(0);" class="input-group-text">
                                                                        <i class="fe fe-eye" aria-hidden="true"></i>
                                                                    </a>
                                                                    <input class="form-control" type="password"
                                                                        placeholder="Password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label">Remember Me</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-center mb-3">
                                                                <a href="{{url('index')}}" class="btn btn-primary w-100 br-7">Log
                                                                    In</a>
                                                            </div>
                                                            <div class="form-group fs-13 text-center">
                                                                <a href="{{url('forgot-password1')}}">Forget Password ?</a>
                                                            </div>
                                                            <div class="form-group fs-14 text-center font-weight-bold">
                                                                <a href="{{url('email-inbox')}}">Click Here To Backup Mail</a>
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