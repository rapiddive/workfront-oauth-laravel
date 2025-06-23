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
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Map with links between the plotted cities</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mapcontainer4">
                                                <div class="map pt-0">
                                                    <span>Alternative content for the map</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Static MapelMaps</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mapcontainer">
                                                <div class="map pt-0">
                                                    <span>Alternative content for the map</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title"> Map with a legend for areas</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mapcontainer1">
                                                <div class="map pt-0">
                                                    <span>Alternative content for the map</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL MAPEL PLUGIN -->
        <script src="{{asset('build/assets/plugins/mapel/raphael.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/mapel/jquery.mapael.js')}}"></script>
        <script src="{{asset('build/assets/plugins/mapel/maps/france_departments.js')}}"></script>
        <script src="{{asset('build/assets/plugins/mapel/maps/world_countries.js')}}"></script>
        <script src="{{asset('build/assets/plugins/mapel/maps/usa_states.js')}}"></script>
        @vite('resources/assets/js/mapelmaps.js')

        
@endsection