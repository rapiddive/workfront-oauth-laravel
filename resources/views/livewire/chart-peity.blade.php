@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Peity Charts</h4>
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
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Pie Chart</h3>
                                        </div>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-xl-2 col-md-4">
                                                    <div class="card-body ">
                                                        <span class="pie"
                                                            data-peity='{ "fill": ["#664dc9", "#f2f3f7"]}'>1/5</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-md-4">
                                                    <div class="card-body ">
                                                        <span class="pie"
                                                            data-peity='{ "fill": ["#5b73e8", "#f2f3f7"]}'>226/360</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-md-4">
                                                    <div class="card-body ">
                                                        <span class="pie"
                                                            data-peity='{ "fill": ["#38cb89", "#f2f3f7"]}'>0.52/1.561</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-md-4">
                                                    <div class="card-body ">
                                                        <span class="pie"
                                                            data-peity='{ "fill": ["#ef4b4b", "#f2f3f7"]}'>1,4</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-md-4">
                                                    <div class="card-body ">
                                                        <span class="pie"
                                                            data-peity='{ "fill": ["#ffab00", "#f2f3f7"]}'>226,134</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-md-4">
                                                    <div class="card-body ">
                                                        <span class="pie"
                                                            data-peity='{ "fill": ["#3e80eb", "#f2f3f7"]}'>0.52,1.041</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Donut Charts</h3>
                                        </div>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card-body ">
                                                        <span class="donut"
                                                            data-peity='{ "fill": ["#664dc9", "#f2f3f7"]}'>1/5</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card-body ">
                                                        <span class="donut"
                                                            data-peity='{ "fill": ["#5b73e8", "#f2f3f7"]}'>226/360</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card-body ">
                                                        <span class="donut"
                                                            data-peity='{ "fill": ["#38cb89", "#f2f3f7"]}'>0.52/1.561</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card-body ">
                                                        <span class="donut"
                                                            data-peity='{ "fill": ["#ef4b4b", "#f2f3f7"]}'>1,4</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card-body ">
                                                        <span class="donut"
                                                            data-peity='{ "fill": ["#ffab00", "#f2f3f7"]}'>226,134</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card-body ">
                                                        <span class="donut"
                                                            data-peity='{ "fill": ["#3e80eb", "#f2f3f7"]}'>0.52,1.041</span>
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
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Line Charts</h3>
                                        </div>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card-body ">
                                                        <span class="peity-line"
                                                        data-peity='{ "height": 70, "width": 150 }' data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card-body ">
                                                        <span class="peity-line"
                                                        data-peity='{ "height": 70, "width": 150 }'	data-width="100%">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card-body ">
                                                        <span class="peity-line"
                                                        data-peity='{ "height": 70, "width": 150 }'	data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Bar Charts</h3>
                                        </div>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card-body ">
                                                        <span class="bar"
                                                        data-peity='{ "height": 70, "width": 150, "fill": ["#5b73e8", "#38cb89"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card-body ">
                                                        <span class="bar"
                                                        data-peity='{ "height": 70, "width": 150, "fill": ["#38cb89", "#3e80eb"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card-body ">
                                                        <span class="bar"
                                                        data-peity='{ "height": 70, "width": 150, "fill": ["#ef4b4b", "#ffab00"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
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
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Data attributes</h3>
                                        </div>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card-body ">
                                                        <p class="data-attributes">
                                                            <span
                                                                data-peity='{ "fill": ["#664dc9", "#f2f3f7"],    "innerRadius": 10, "radius": 40 }'>1/7</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card-body ">
                                                        <p class="data-attributes">
                                                            <span
                                                                data-peity='{ "fill": ["#5b73e8", "#f2f3f7"], "innerRadius": 14, "radius": 36 }'>2/7</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card-body ">
                                                        <p class="data-attributes">
                                                            <span
                                                                data-peity='{ "fill": ["#38cb89", "#f2f3f7"], "innerRadius": 16, "radius": 32 }'>3/7</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card-body ">
                                                        <p class="data-attributes">
                                                            <span
                                                                data-peity='{ "fill": ["#ef4b4b", "#f2f3f7"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card-body ">
                                                        <p class="data-attributes">
                                                            <span
                                                                data-peity='{ "fill": ["#ffab00", "#f2f3f7"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <div class="card-body ">
                                                        <p class="data-attributes">
                                                            <span
                                                                data-peity='{ "fill": ["#3e80eb", "#f2f3f7"], "innerRadius": 18, "radius": 20 }'>6/7</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Setting Colours Dynamically</h3>
                                        </div>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="card-body ">
                                                        <span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="card-body ">
                                                        <span class="bar-colours-2">5,3,2,-1,-3,-2,2,3,5,2</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="card-body ">
                                                        <span class="bar-colours-3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="card-body ">
                                                        <span class="pie-colours-2">5,3,9,6,5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Updating Charts</h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <span class="updating-chart"
                                                data-peity='{ "fill": ["rgba(112, 94, 200, 0.5)"],"stroke":["#664dc9"]}'>5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL PEITYCHART JS -->
        <script src="{{asset('build/assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/peitychart/peitychart.init.js')}}"></script>

@endsection