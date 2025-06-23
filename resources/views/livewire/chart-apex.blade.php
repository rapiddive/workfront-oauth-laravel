@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Apex Charts</h4>
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
                            <div class="row row-deck">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Area Chart With Random data</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <div id="chart-timeline" class="h-300 mh-300"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Area Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <div id="chart" class="h-300 mh-300"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Horizontal Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <div id="chart2" class="h-300 mh-300"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Horizontal Stacked Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <div id="chart3" class="h-300 mh-300"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Radial Bar circle Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <div id="chart8" class="h-300 mh-300"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Radial Bar circle Chart Multiple</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <div id="chart9" class="h-300 mh-300"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!--INTERNAL Chart js -->
        @vite('resources/assets/js/apexcharts.js')


        @vite('resources/assets/js/apexchart-custom.js')


@endsection