@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Morris Charts</h4>
                                </div>
                                <div class="page-rightheader">
                                    <div>
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
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="morris-wrapper-demo" id="morrisBar1"></div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Stacked Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="morris-wrapper-demo" id="morrisBar3"></div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Line Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="morris-wrapper-demo" id="morrisLine1"></div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Area Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="morris-wrapper-demo" id="morrisArea1"></div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Donut Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="morris-donut-wrapper-demo" id="morrisBar6"></div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Donut Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="morris-donut-wrapper-demo" id="morrisBar7"></div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-6">
                                    <div class="card mg-b-md-20">
                                        <div class="card-header">
                                            <div class="card-title">Donut Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="morris-donut-wrapper-demo" id="morrisDonut1"></div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL MORRIS CHARTS JS -->
        <script src="{{asset('build/assets/plugins/morris/raphael-min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/morris/morris.js')}}"></script>
        @vite('resources/assets/js/morris.js')
    

@endsection