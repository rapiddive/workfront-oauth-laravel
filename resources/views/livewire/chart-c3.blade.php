@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">C3 Charts</h4>
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
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Bar Chart</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-bar-stacked" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Multiple Bar chart</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-bar" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Horizontal Bar chart</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-bar-rotated" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Sales Growth in every Month</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-employment" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Line Chart 1</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-sracked" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Line chart 2</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-spline-rotated" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Line Chart 3</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-temperature" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Line Chart 4</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-area-spline-sracked" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Line Chart 5 </h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-spline" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Line Chart 6</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-area" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Line Chart 7</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-area-spline" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Line Chart with step</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-area-step" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Line Chart 8</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-step" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Pie Chart</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-pie" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Pie Chart with Multiple colors</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-pie2" class="chartsh "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Donut Chart</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-donut" class="chartsh"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Donut Chart2</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-donut2" class="chartsh"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL C3-CHART JS -->
        <script src="{{asset('build/assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/charts-c3/c3-chart.js')}}"></script>
        @vite('resources/assets/js/charts.js')


@endsection