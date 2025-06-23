@extends('layouts.custom-app1')

@section('styles')

@endsection

@section('content')
@section('custom-page3')

        <div class="register-3">
@endsection
            <div class="page">
                <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col mx-auto mt-5">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-xl-4 col-md-7 col-sm-12 col-xs-12">
                                        <div class="text-center mb-5 mt-0">
                                            <a href="{{url('index')}}"><img src="{{asset('build/assets/images/brand/logo.png')}}" class="header-brand-img"
                                                alt="Azea logo"></a>
                                        </div>
                                        <div class="card-group mb-0">
                                            <div class="card bg-primary text-white br-7 p-2">
                                                <div class="card-body mb-0">
                                                    <div class="text-center mb-5">
                                                        <h1 class="mb-2">Forget Password</h1>
                                                        <a href="{{url('login3')}}" class="text-white">Create New Password</a>
                                                    </div>
                                                    <hr class="hrregister3">
                                                    <div class="text-center small mt-3">Log In with</div>
                                                    <div class="btn-list text-center mb-3 mt-2">
                                                        <a href="javascript:void(0);" class="btn   m-0 me-2 p-2 mb-2"><i
                                                                class="fa fa-google"></i> Google</a>
                                                        <a href="javascript:void(0);" class="btn  m-0 me-2 p-2 mb-2"><i
                                                                class="fa fa-twitter"></i> twitter</a>
                                                        <a href="javascript:void(0);" class="btn  m-0 p-2 mb-2"><i
                                                                class="fa fa-facebook"></i> facebook</a>
                                                    </div>
                                                    <hr class="divider my-6 text-primary">
                                                    <form>
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-mail"></i>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label ">Send Recovery Mail</span>
                                                            </label>
                                                        </div>
                                                    </form>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a href="{{url('index')}}"
                                                                class="btn btn-white text-primary btn-block d-grid px-4 font-weight-bold">Send</a>
                                                        </div>
                                                    </div>
                                                    <div class="text-center pt-4">
                                                        <div class="font-weight-normal fs-14 text-white-50">Have an other
                                                            account ? <a class="btn-link font-weight-bold anchors text-white"
                                                                href="{{url('login3')}}">Login Here</a></div>
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


@endsection