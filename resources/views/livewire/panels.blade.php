@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Panels</h4>
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
                            <!-- END PAGE HEADER -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Simple Panels</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="expanel expanel-default m-0">
                                                <div class="expanel-body">
                                                    Basic panel example
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Panel with heading</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mt-4">
                                                <div class="col-lg-6">
                                                    <div class="expanel expanel-default">
                                                        <div class="expanel-heading">Panel heading without title</div>
                                                        <div class="expanel-body">
                                                            Panel content
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="expanel expanel-default">
                                                        <div class="expanel-heading">
                                                            <h3 class="expanel-title">Panel title</h3>
                                                        </div>
                                                        <div class="expanel-body">
                                                            Panel content
                                                        </div>
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
                                <div class="col-md-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Panel with footer</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="expanel expanel-default m-0">
                                                <div class="expanel-body">
                                                    Panel content
                                                </div>
                                                <div class="expanel-footer">Panel footer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Panel with color header</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mt-4">
                                                <div class="col-lg-6">
                                                    <div class="expanel expanel-primary overflow-hidden">
                                                        <div class="expanel-heading">
                                                            <h3 class="expanel-title">Panel title</h3>
                                                        </div>
                                                        <div class="expanel-body">
                                                            Panel content
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="expanel expanel-secondary overflow-hidden">
                                                        <div class="expanel-heading">
                                                            <h3 class="expanel-title">Panel title</h3>
                                                        </div>
                                                        <div class="expanel-body">
                                                            Panel content
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="expanel expanel-success overflow-hidden">
                                                        <div class="expanel-heading">
                                                            <h3 class="expanel-title">Panel title</h3>
                                                        </div>
                                                        <div class="expanel-body">
                                                            Panel content
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="expanel expanel-danger overflow-hidden">
                                                        <div class="expanel-heading">
                                                            <h3 class="expanel-title">Panel title</h3>
                                                        </div>
                                                        <div class="expanel-body">
                                                            Panel content
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')


@endsection