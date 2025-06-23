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
                                                            <a href="{{url('index')}}"><img src="{{asset('build/assets/images/brand/logo1.png')}}"
                                                                class="header-brand-img" alt="Azea logo"></a>
                                                        </div>
                                                        <div class="ms-5">
                                                            <div class="fs-16 mb-6 font-weight-bold text-white">Welcome Back To
                                                                Azea !</div>
                                                            <div class="mb-6 text-white-50">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Adipisci, neque nam. Vero quisquam error fugiat !
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-6 p-0 mx-auto">
                                                <div class="card mb-0 border-0 h-300 br-7 br-ts-0 br-bs-0">
                                                    <div class="card-body">
                                                        <div class="text-center mb-4 ">
                                                            <span class="avatar avatar-xxl  brround"
                                                                style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        </div>
                                                        <span class="m-4 d-none d-lg-block text-center">
                                                            <span class="fs-20"><strong>Patrenna</strong></span>
                                                        </span>
                                                        <div class="input-group mb-4">
                                                            <div class="input-group" id="Password-toggle">
                                                                <a href="javascript:void(0);" class="input-group-text">
                                                                    <i class="fe fe-eye" aria-hidden="true"></i>
                                                                </a>
                                                                <input class="form-control" type="password"
                                                                    placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <a href="{{url('index')}}" class="btn btn-primary w-100"><i class="fe fe-lock"></i>
                                                            Unlock</a>
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