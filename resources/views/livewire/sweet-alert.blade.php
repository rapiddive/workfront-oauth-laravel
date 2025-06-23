@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Sweet Alerts</h4>
                                </div>
                                <div class="page-rightheader">
                                    <button class="btn btn-outline-primary"><i class="fe fe-download me-2"></i>
                                        Import</button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-pill dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-calendar me-2"></i>Search By Date
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Today</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                                            <a class="dropdown-item active" href="javascript:void(0);">Last 7 days</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last 30 days</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last 6 months</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last year</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE-HEADER -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Sample Sweet Alerts</h3>
                                        </div>
                                        <div class="card-body">
                                            <input type='button' class="btn btn-success mt-2" value='success alert'
                                                id='click'>
                                            <input type='button' class="btn btn-warning mt-2" value='Warning alert'
                                                id='click1'>
                                            <input type='button' class="btn btn-danger mt-2" value='Danger alert'
                                                id='click2'>
                                            <input type='button' class="btn btn-info mt-2" value='Info alert' id='click3'>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Forms Sweet-alert</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type='text' class="form-control" placeholder='Title text' id='title'>
                                            </div>
                                            <div class="form-group">
                                                <label>Message</label>
                                                <input type='text' class="form-control" placeholder='Your message'
                                                    id='message'>
                                            </div>
                                            <input type='button' class="btn btn-primary mt-2" value='Simple alert'
                                                id='but1'>&nbsp;
                                            <input type='button' class="btn btn-secondary mt-2" value='Alert with title'
                                                id='but2'>&nbsp;
                                            <input type='button' class="btn btn-info mt-2" value='Alert with image'
                                                id='but3'>&nbsp;
                                            <input type='button' class="btn btn-warning mt-2" value='With timer' id='but4'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Prompt and confirm box Demo</h3>
                                        </div>
                                        <div class="card-body">
                                            <input type='button' class="btn btn-secondary" value='Prompt' id='prompt'>
                                            <input type='button' class="btn btn-primary" value='Confirm' id='confirm'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL SWEET ALERT JS -->
        <script src="{{asset('build/assets/plugins/sweet-alert/jquery.sweet-modal.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
        @vite('resources/assets/js/sweet-alert.js')
        

@endsection