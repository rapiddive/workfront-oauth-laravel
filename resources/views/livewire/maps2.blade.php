@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Maps 2</h4>
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
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card mg-b-20" id="map">
                                        <div class="card-header">
                                            <div class="card-title">Basic</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="ht-300" id="leaflet1" style="height:300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card mg-b-20" id="map2">
                                        <div class="card-header">
                                            <div class="card-title">With Popup</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="ht-300" id="leaflet2" style="height:300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card" id="map1">
                                        <div class="card-header">
                                            <div class="card-title">Map With Circle</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="ht-200 ht-sm-300 ht-md-400" id="leaflet3" style="height:300px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL LEAFLET JS  -->
        <script src="{{asset('build/assets/plugins/leaflet/leaflet.js')}}"></script>
        @vite('resources/assets/js/map-leafleft.js')

        
@endsection