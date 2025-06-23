@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Range Slider</h4>
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

                            <!--div-->
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Range Slider
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row row-sm">
                                        <div class="col-lg-12">
                                            <input class="rangeslider1" name="example_name" type="text" value="">
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            <input class="rangeslider2" name="example_name" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-lg-12 mt-4">
                                            <input class="rangeslider3" name="example_name" type="text" value="">
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            <input class="rangeslider4" name="example_name" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/div-->

                            <!--div-->
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Range Slider (Modern Skin)
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row row-sm">
                                        <div class="col-lg-12">
                                            <input class="rangeslider1" data-extra-classes="irs-modern" name="example_name"
                                                type="text">
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            <input class="rangeslider2" data-extra-classes="irs-modern" name="example_name"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-lg-12 mt-4">
                                            <input class="rangeslider3" data-extra-classes="irs-modern" name="example_name"
                                                type="text">
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            <input class="rangeslider4" data-extra-classes="irs-modern" name="example_name"
                                                type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/div-->

                            <!--div-->
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Range Slider (Outline Skin)
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row row-sm">
                                        <div class="col-lg-12">
                                            <input class="rangeslider1" data-extra-classes="irs-outline" name="example_name"
                                                type="text">
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            <input class="rangeslider2" data-extra-classes="irs-outline" name="example_name"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-lg-12 mt-4">
                                            <input class="rangeslider3" data-extra-classes="irs-outline" name="example_name"
                                                type="text">
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            <input class="rangeslider4" data-extra-classes="irs-outline" name="example_name"
                                                type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/div-->

@endsection

@section('scripts')

        <!-- INTERNAL ION.RANGESLIDER.MIN JS -->
        <script src="{{asset('build/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
        @vite('resources/assets/js/rangeslider.js')


@endsection