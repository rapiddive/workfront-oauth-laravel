@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Widgets 2</h4>
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
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body pb-0">
                                            <div>
                                                <p class=" mb-0">BTC / USDT</p>
                                                <h3 class="mb-1 font-weight-bold">$10513</h3>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 pb-5 border-top-0 overflow-hidden">
                                            <div class="chart-wrapper">
                                                <canvas id="CryptoChart"
                                                    class="areaChart overflow-hidden chart-dropshadow-primary"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body pb-0">
                                            <div>
                                                <p class=" mb-0">XEM / USDT</p>
                                                <h3 class="mb-1 font-weight-bold">$966</h3>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 pb-5 border-top-0 overflow-hidden">
                                            <div class="chart-wrapper ">
                                                <canvas id="CryptoChart1"
                                                    class="areaChart overflow-hidden chart-dropshadow-primary"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body pb-0">
                                            <div>
                                                <p class=" mb-0">XRP / USDT</p>
                                                <h3 class="mb-1 font-weight-bold">$7,349</h3>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 pb-5 border-top-0 overflow-hidden">
                                            <div class="chart-wrapper ">
                                                <canvas id="CryptoChart2"
                                                    class="areaChart overflow-hidden chart-dropshadow-primary"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body pb-0">
                                            <div>
                                                <p class=" mb-0">NEO / USDT</p>
                                                <h3 class="mb-1 font-weight-bold">$5,563</h3>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 pb-5 border-top-0 overflow-hidden">
                                            <div class="chart-wrapper ">
                                                <canvas id="CryptoChart3"
                                                    class="areaChart overflow-hidden chart-dropshadow-primary"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card overflow-hidden bg-primary text-white">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-2 fs-18">
                                                        Total Application
                                                    </div>
                                                    <h1 class="font-weight-bold mb-1">45,675</h1>
                                                    <span><i class="fa fa-arrow-up me-1"></i> +1.4%</span>
                                                </div>
                                                <div class="col col-auto">
                                                    <div class="mx-auto chart-circle chart-circle-md  mt-sm-0 mb-0"
                                                        data-value="0.85" data-thickness="6" data-color="#4422c9">
                                                        <div class="mx-auto chart-circle-value text-center fs-20">85%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card overflow-hidden bg-danger text-white">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-2 fs-18">
                                                        Shortlisted
                                                    </div>
                                                    <h1 class="font-weight-bold mb-1">30,175</h1>
                                                    <span><i class="fa fa-arrow-up me-1"></i> +1.8%</span>
                                                </div>
                                                <div class="col col-auto">
                                                    <div class="mx-auto chart-circle chart-circle-md mt-sm-0 mb-0"
                                                        data-value="0.60" data-thickness="6" data-color="#eb2323">
                                                        <div class="mx-auto chart-circle-value text-center fs-20">60%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card overflow-hidden bg-success text-white">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-2 fs-18">
                                                        Rejected
                                                    </div>
                                                    <h1 class="font-weight-bold mb-1">7,745</h1>
                                                    <span><i class="fa fa-arrow-down me-1"></i> -2.4%</span>
                                                </div>
                                                <div class="col col-auto">
                                                    <div class="mx-auto chart-circle chart-circle-md mt-sm-0 mb-0"
                                                        data-value="0.45" data-thickness="6" data-color="#008a4c">
                                                        <div class="mx-auto chart-circle-value text-center fs-20">25%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card overflow-hidden bg-warning text-white">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-2 fs-18">
                                                        Rejected
                                                    </div>
                                                    <h1 class="font-weight-bold mb-1">7,745</h1>
                                                    <span><i class="fa fa-arrow-down me-1"></i> -2.4%</span>
                                                </div>
                                                <div class="col col-auto">
                                                    <div class="mx-auto chart-circle chart-circle-md mt-sm-0 mb-0"
                                                        data-value="0.45" data-thickness="6" data-color="#d18d02">
                                                        <div class="mx-auto chart-circle-value text-center fs-20">25%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row text-center">
                                                <div class="col">
                                                    <div>
                                                        <span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2</span>
                                                    </div>
                                                </div>
                                                <div class="col col-auto">
                                                    <div class="mb-2 fs-18">
                                                        Rejected
                                                    </div>
                                                    <h3 class="font-weight-bold mb-1">1,745</h3>
                                                    <span class="text-danger"><i class="fa fa-arrow-down me-1"></i>
                                                        -2.4%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row text-center">
                                                <div class="col">
                                                    <div>
                                                        <span class="bar-colours-2">5,3,2,-1,-3,-2,2,3,5,2</span>
                                                    </div>
                                                </div>
                                                <div class="col col-auto">
                                                    <div class="mb-2 fs-18">
                                                        Accepted
                                                    </div>
                                                    <h3 class="font-weight-bold mb-1">3,845</h3>
                                                    <span class="text-success"><i class="fa fa-arrow-up me-1"></i>
                                                        -2.4%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row text-center">
                                                <div class="col">
                                                    <div>
                                                        <span class="bar-colours-3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                                                    </div>
                                                </div>
                                                <div class="col col-auto">
                                                    <div class="mb-2 fs-18">
                                                        Pending
                                                    </div>
                                                    <h3 class="font-weight-bold mb-1">745</h3>
                                                    <span class="text-danger"><i class="fa fa-arrow-down me-1"></i>
                                                        -2.4%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row text-center">
                                                <div class="col">
                                                    <div>
                                                        <span class="bar-colours-4">5,3,2,-1,-3,-2,2,3,5,2</span>
                                                    </div>
                                                </div>
                                                <div class="col col-auto">
                                                    <div class="mb-2 fs-18">
                                                        Succeeded
                                                    </div>
                                                    <h3 class="font-weight-bold mb-1">745</h3>
                                                    <span class="text-success"><i class="fa fa-arrow-down me-1"></i>
                                                        -2.4%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="mb-1">Today Revenue</p>
                                                    <h2 class="mb-0 font-weight-bold text-success">$897k</h2>
                                                </div>
                                                <div class="col">
                                                    <div id="spark1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="mb-1">Unique Visitors</p>
                                                    <h2 class="mb-0 font-weight-bold text-primary">5,896</h2>
                                                </div>
                                                <div class="col">
                                                    <div id="spark2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="mb-1">Expenses</p>
                                                    <h2 class="mb-0 font-weight-bold text-teal">$1,678</h2>
                                                </div>
                                                <div class="col">
                                                    <div id="spark3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="mb-1">Today Profit</p>
                                                    <h2 class="mb-0 font-weight-bold text-danger">$817k</h2>
                                                </div>
                                                <div class="col">
                                                    <div id="spark4"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-xl-3 col-md-12 col-lg-6">
                                    <div class="card mg-b-md-20">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="morris-donut-wrapper-demo" id="morrisDonut1"></div>
                                                </div>
                                                <div class="col-6 my-auto">
                                                    <ul class="morris-legends">
                                                        <li>
                                                            <span class="d-flex tx-14"><span
                                                                    class="legend bg-secondary brround"></span>Sales</span>
                                                        </li>
                                                        <li>
                                                            <span class="d-flex tx-14"><span
                                                                    class="legend bg-secondary-light-1 brround"></span>Clients</span>
                                                        </li>
                                                        <li>
                                                            <span class="d-flex tx-14"><span
                                                                    class="legend bg-secondary-light-2 brround"></span>Profits</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6 p-l-0 p-r-0">
                                    <div class="card mg-b-md-20">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="morris-donut-wrapper-demo" id="morrisDonut2"></div>
                                                </div>
                                                <div class="col-6 my-auto">
                                                    <ul class="morris-legends">
                                                        <li>
                                                            <span class="d-flex tx-14"><span
                                                                    class="legend bg-success brround"></span>Sales</span>
                                                        </li>
                                                        <li>
                                                            <span class="d-flex tx-14"><span
                                                                    class="legend bg-success-light-1 brround"></span>Clients</span>
                                                        </li>
                                                        <li>
                                                            <span class="d-flex tx-14"><span
                                                                    class="legend bg-success-light-2 brround"></span>Profits</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6 p-l-0">
                                    <div class="card mg-b-md-20">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="morris-donut-wrapper-demo" id="morrisDonut3"></div>
                                                </div>
                                                <div class="col-6 my-auto">
                                                    <ul class="morris-legends">
                                                        <li>
                                                            <span class="d-flex tx-14"><span
                                                                    class="legend bg-warning brround"></span>Sales</span>
                                                        </li>
                                                        <li>
                                                            <span class="d-flex tx-14"><span
                                                                    class="legend bg-warning-light-1 brround"></span>Clients</span>
                                                        </li>
                                                        <li>
                                                            <span class="d-flex tx-14"><span
                                                                    class="legend bg-warning-light-2 brround"></span>Profits</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-12 col-lg-6 p-l-0">
                                    <div class="card mg-b-md-20">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="morris-donut-wrapper-demo" id="morrisDonut4"></div>
                                                </div>
                                                <div class="col-6 my-auto">
                                                    <ul class="morris-legends">
                                                        <li>
                                                            <span class="d-flex tx-14"><span
                                                                    class="legend bg-danger brround"></span>Sales</span>
                                                        </li>
                                                        <li>
                                                            <span class="d-flex tx-14"><span
                                                                    class="legend bg-danger-light-1 brround"></span>Clients</span>
                                                        </li>
                                                        <li>
                                                            <span class="d-flex tx-14"><span
                                                                    class="legend bg-danger-light-2 brround"></span>Profits</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- OTHER CHARTS JS -->
        <script src="{{asset('build/assets/plugins/othercharts/jquery.sparkline.min.js')}}"></script>

        <!-- PEITYCHART JS -->
        <script src="{{asset('build/assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/peitychart/peitychart.init.js')}}"></script>

        <!-- INTERNAl APEXCHART JS -->
        @vite('resources/assets/js/apexcharts.js')


        <!-- CIRCLE-PROGRESS JS -->
        <script src="{{asset('build/assets/plugins/circle-progress/circle-progress.min.js')}}"></script>

        <!-- JQUERY-RATING JS -->
        <script src="{{asset('build/assets/plugins/rating/jquery.rating-stars.js')}}"></script>

        <!-- INTERNAl CHART JS -->
        <script src="{{asset('build/assets/plugins/chart/chart.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/chart/utils.js')}}"></script>

        <!--INTERNAL MORRIS CHARTS JS -->
        <script src="{{asset('build/assets/plugins/morris/raphael-min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/morris/morris.js')}}"></script>

        <!-- INTERNAl WIDGETS JS -->
        @vite('resources/assets/js/widgets.js')


@endsection