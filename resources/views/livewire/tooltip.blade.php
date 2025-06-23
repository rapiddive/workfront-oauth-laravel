@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Tooltips</h4>
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
                                <div class="col-lg-12">
                                    <!-- div -->
                                    <div class="card" id="Tooltip">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Default Tooltip
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-label mb-2">
                                                Static Example
                                            </div>
                                            <div class="tooltip-static-demo mb-4 border br-3">
                                                <div class="row ">
                                                    <div class="col-sm-6 col-lg-3 mb-1">
                                                        <div class="tooltip bs-tooltip-top" role="tooltip">
                                                            <div class="tooltip-arrow"></div>
                                                            <div class="tooltip-inner">
                                                                Tooltip on the top
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                                                        <div class="tooltip bs-tooltip-bottom" role="tooltip">
                                                            <div class="tooltip-arrow"></div>
                                                            <div class="tooltip-inner">
                                                                Tooltip on the bottom
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0 mb-1">
                                                        <div class="tooltip bs-tooltip-start" role="tooltip">
                                                            <div class="tooltip-arrow"></div>
                                                            <div class="tooltip-inner">
                                                                Tooltip on the left
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                                                        <div class="tooltip bs-tooltip-end" role="tooltip">
                                                            <div class="tooltip-arrow"></div>
                                                            <div class="tooltip-inner">
                                                                Tooltip on the right
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- tooltip-static-demo -->
                                            <div class="form-label mb-2">
                                                Example
                                            </div>
                                            <div class="bg-light px-4 pt-4 pb-2 border br-3">
                                                <div class="row  text-center">
                                                    <div class="col-sm-6 col-lg-3 mb-3">
                                                        <button class="btn btn-secondary" data-bs-placement="top"
                                                            data-bs-toggle="tooltip" title="Tooltip on top"
                                                            type="button">Hover
                                                            me</button>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3 mb-3">
                                                        <button class="btn btn-secondary" data-bs-placement="bottom"
                                                            data-bs-toggle="tooltip" title="Tooltip on bottom"
                                                            type="button">Hover me</button>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3 mb-3">
                                                        <button class="btn btn-secondary" id="tooltipLeft"
                                                            data-bs-placement="left" data-bs-toggle="tooltip"
                                                            title="Tooltip on left" type="button">Hover me</button>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3 mb-3">
                                                        <button class="btn btn-secondary" id="tooltipRight"
                                                            data-bs-placement="right" data-bs-toggle="tooltip"
                                                            title="Tooltip on right" type="button">Hover me</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /div -->
                                    <!-- div -->
                                    <div class="card" id="Tooltip1">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Color Tooltip
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-label  mb-2">
                                                Static Example
                                            </div>
                                            <div class="tooltip-static-demo mb-4 border br-3">
                                                <div class="row ">
                                                    <div class="col-sm-6 col-lg-3 my-1">
                                                        <div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
                                                            <div class="tooltip-arrow"></div>
                                                            <div class="tooltip-inner">
                                                                Tooltip on the top
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                                                        <div class="tooltip tooltip-primary bs-tooltip-bottom"
                                                            role="tooltip">
                                                            <div class="tooltip-arrow"></div>
                                                            <div class="tooltip-inner">
                                                                Tooltip on the bottom
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                                                        <div class="tooltip tooltip-primary bs-tooltip-start"
                                                            role="tooltip">
                                                            <div class="tooltip-arrow"></div>
                                                            <div class="tooltip-inner">
                                                                Tooltip on the left
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                                                        <div class="tooltip tooltip-primary bs-tooltip-end" role="tooltip">
                                                            <div class="tooltip-arrow"></div>
                                                            <div class="tooltip-inner">
                                                                Tooltip on the right
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- tooltip-static-demo -->
                                            <div class="form-label mb-2">
                                                Example
                                            </div>
                                            <div class="bg-light px-4 pt-4 pb-2 border br-3">
                                                <div class="row  text-center">
                                                    <div class="col-sm-6 col-lg-3 mb-3">
                                                        <button class="btn btn-secondary" data-bs-placement="top"
                                                            data-bs-toggle="tooltip-primary" title="Tooltip on top"
                                                            type="button">Hover me</button>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3 mb-3">
                                                        <button class="btn btn-secondary" data-bs-placement="bottom"
                                                            data-bs-toggle="tooltip-secondary" title="Tooltip on bottom"
                                                            type="button">Hover me</button>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3 mb-3">
                                                        <button class="btn btn-secondary" id="tooltipColorLeft"
                                                            data-bs-placement="left" data-bs-toggle="tooltip-primary1"
                                                            title="Tooltip on left" type="button">Hover me</button>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3 mb-3">
                                                        <button class="btn btn-secondary" id="tooltipColorRight"
                                                            data-bs-placement="right" data-bs-toggle="tooltip-secondary1"
                                                            title="Tooltip on right" type="button">Hover me</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /div -->
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL TOOLTIP JS -->
        @vite('resources/assets/js/tooltip.js')


@endsection