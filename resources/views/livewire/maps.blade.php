@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Maps</h4>
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
                            <!-- PAGE-HEADER END -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">World Map</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="world-map-markers" class="worldh" style="height:300px;"></div>
                                        </div>
                                    </div>
                                </div><!-- right col -->
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-header">
                                            <h3 class="card-title">Asia Map</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="vmap2" class="stateh" style="height:300px;"></div>
                                        </div>
                                    </div>
                                </div><!-- right col -->

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-header">
                                            <h3 class="card-title">Australia Map</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="vmap3" class="stateh" style="height:300px;"></div>
                                        </div>
                                    </div>
                                </div><!-- right col -->

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Canada Map</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="vmap4" class="stateh" style="height:300px;"></div>
                                        </div>
                                    </div>
                                </div><!-- right col -->
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-header">
                                            <h3 class="card-title">Germany Map</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="vmap5" class="stateh" style="height:300px;"></div>
                                        </div>
                                    </div>
                                </div><!-- right col -->

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-header">
                                            <h3 class="card-title">Europe Map</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="vmap6" class="stateh" style="height:300px;"></div>
                                        </div>
                                    </div>
                                </div><!-- right col -->

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">India Map</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="vmap7" class="stateh" style="height:300px;"></div>
                                        </div>
                                    </div>
                                </div><!-- right col -->
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-header">
                                            <h3 class="card-title">UK Map</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="vmap8" class="stateh" style="height:300px;"></div>
                                        </div>
                                    </div>
                                </div><!-- right col -->

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">USA Map</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="vmap9" class="stateh" style="height:300px;"></div>
                                        </div>
                                    </div>
                                </div><!-- right col -->
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL VECTOR JS -->
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/gdp-data.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-asia-mill.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-au-mill.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-de-mill.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-in-mill.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
        <script src="{{asset('build/assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js')}}"></script>
        @vite('resources/assets/js/jvectormap.js')


@endsection