@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Breadcrumbs</h4>
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
                                <div class="col-md-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Simple Breadcrumbs</h3>
                                        </div>
                                        <div class="card-body">
                                            <ol class="breadcrumb1">
                                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                                <li class="breadcrumb-item1 active">About</li>
                                            </ol>
                                            <ol class="breadcrumb1">
                                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                                <li class="breadcrumb-item1 active">Library</li>
                                            </ol>
                                            <ol class="breadcrumb1">
                                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Library</a></li>
                                                <li class="breadcrumb-item1 active">Data</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="card" id="breadcrumb4">
                                        <div class="card-header">
                                            <h3 class="card-title">Icon Breadcrumbs</h3>
                                        </div>
                                        <div class="card-body">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb1 border bg-transparent">
                                                    <li class="breadcrumb-item1 active"><i
                                                            class="fe fe-home me-2 white-text" aria-hidden="true"></i>Home
                                                    </li>
                                                    <li class="breadcrumb-item1 active">About</li>
                                                </ol>
                                                <ol class="breadcrumb1">
                                                    <li class="breadcrumb-item1"><a href="javascript:void(0);"><i
                                                                class="fe fe-home me-2" aria-hidden="true"></i>Home</a></li>
                                                    <li class="breadcrumb-item1 active"><i class="fe fe-home me-2"
                                                            aria-hidden="true"></i>Library</li>
                                                </ol>
                                                <ol class="breadcrumb1 bg-primary mb-0">
                                                    <li class="breadcrumb-item1"><a href="javascript:void(0);"
                                                            class="text-white"><i class="fe fe-home me-2 white-text"
                                                                aria-hidden="true"></i>Home</a></li>
                                                    <li class="breadcrumb-item1 text-white"><a href="javascript:void(0);"
                                                            class="text-white"><i class="fe fe-home me-2 white-text"
                                                                aria-hidden="true"></i>Library</a></li>
                                                    <li class="breadcrumb-item1 active text-white"><i
                                                            class="fe fe-home me-2 white-text" aria-hidden="true"></i>Data
                                                    </li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                    <!--/div-->

                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')


@endsection