@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Chartjs Charts</h4>
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
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <canvas id="chartBar1" class="h-300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Transparency </div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <canvas id="chartBar2" class="h-300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Gradient Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <canvas id="chartBar3" class="h-300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Horizontal Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <canvas id="chartBar4" class="h-300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Horizontal Bar Chart Style2</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <canvas id="chartBar5" class="h-300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Vertical Stacked Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <canvas id="chartStacked1" class="h-300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Horizontal Stacked Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <canvas id="chartStacked2" class="h-300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Line Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <canvas id="chartLine1" class="h-300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Area Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <canvas id="chartArea1" class="h-300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Donut Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <canvas id="chartPie" class="h-300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Pie Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chartjs-wrapper-demo">
                                                <canvas id="chartDonut" class="h-300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-6 -->
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL CHART JS -->
        <script src="{{asset('build/assets/plugins/chart/chart.bundle.js')}}"></script>
        <script src="{{asset('build/assets/plugins/chart/utils.js')}}"></script>
        @vite('resources/assets/js/chart.js')
        

@endsection