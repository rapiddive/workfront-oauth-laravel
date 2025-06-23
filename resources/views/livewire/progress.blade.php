@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Progress</h4>
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
                                <div class="col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Basic Progress</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-default" style="width: 7%"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 20%"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 40%"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 60%"></div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-primary" style="width: 80%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Contextual Progress</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 7%"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary-1" style="width: 20%"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary-2" style="width: 40%"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary-3" style="width: 60%"></div>
                                            </div>
                                            <div class="progress progress-md ">
                                                <div class="progress-bar bg-primary-4" style="width: 80%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Basic Progress with label</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 7%">7%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 20%"> 20%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 40%"> 40%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 60%"> 60%</div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-primary" style="width: 80%"> 80%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Contextual Progress with label</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 7%"> 7%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary-1" style="width: 20%">20%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary-2" style="width: 40%">40%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary-3" style="width: 60%">60%</div>
                                            </div>
                                            <div class="progress progress-md ">
                                                <div class="progress-bar bg-primary-4" style="width: 80%"> 80%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Progress Sizes</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-xs mb-3">
                                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-primary" style="width: 60%"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 70%">70%</div>
                                            </div>
                                            <div class="progress progress-lg">
                                                <div class="progress-bar bg-primary" style="width: 80%">80%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Mixed color Progress with Sizes</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-xs mb-3">
                                                <div class="progress-bar bg-primary" style="width: 5%"></div>
                                                <div class="progress-bar bg-primary-1" style="width: 5%"></div>
                                                <div class="progress-bar bg-primary-2" style="width: 5%"></div>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-danger" style="width: 10%"></div>
                                                <div class="progress-bar bg-danger-1" style="width: 15%"></div>
                                                <div class="progress-bar bg-danger-2" style="width: 15%"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-warning" style="width: 18%"></div>
                                                <div class="progress-bar bg-warning-1" style="width: 20%"></div>
                                                <div class="progress-bar bg-warning-2" style="width: 30%"></div>
                                            </div>
                                            <div class="progress progress-lg">
                                                <div class="progress-bar bg-success" style="width: 30%"></div>
                                                <div class="progress-bar bg-success-1" style="width: 20%"></div>
                                                <div class="progress-bar bg-success-2" style="width: 40%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Striped Progress</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-teal"
                                                    style="width: 15%"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                                    style="width: 25%"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow"
                                                    style="width: 50%">50%</div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-green"
                                                    style="width: 70%">40%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Animated Progress</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-indeterminate bg-primary"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-indeterminate bg-primary-1"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-indeterminate bg-primary-2"></div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar progress-bar-indeterminate bg-primary-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')


@endsection