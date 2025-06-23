@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Badges</h4>
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
                            <!-- END PAGE HEADER -->

                            <!-- ROW OPEN -->
                            <div class="row">
                                <div class="col-md-12  col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Simple Badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <h1>Heading 01 <span class="badge badge-default">New</span></h1>
                                            <h2>Heading 02 <span class="badge badge-default">New</span></h2>
                                            <h3>Heading 03 <span class="badge badge-default">New</span></h3>
                                            <h4>Heading 04 <span class="badge badge-default">New</span></h4>
                                            <h5>Heading 05 <span class="badge badge-default">New</span></h5>
                                            <h6>Heading 06 <span class="badge badge-default">New</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12  col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Colored Badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="text-blue">Heading 01 <span class="badge bg-primary">New</span></h1>
                                            <h2 class="text-red">Heading 02 <span class="badge bg-danger">New</span></h2>
                                            <h3 class="text-yellow">Heading 03 <span class="badge bg-warning">New</span>
                                            </h3>
                                            <h4 class="text-green">Heading 04 <span class="badge bg-success">New</span></h4>
                                            <h5 class="text-info">Heading 05 <span class="badge bg-info">New</span></h5>
                                            <h6 class="text-secondary">Heading 06 <span
                                                    class="badge bg-secondary">New</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW CLOSED -->

                            <!-- ROW OPEN -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="card-title">Buttons with square Badges</h3>
                                        </div>
                                        <div class="card-body ">
                                            <div class="example">
                                                <button type="button" class="btn btn-primary mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-white text-dark">2</span>
                                                </button>
                                                <button type="button" class="btn btn-secondary  mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-white text-dark">1</span>
                                                </button>
                                                <button type="button" class="btn btn-success  mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-white text-dark">5</span>
                                                </button>
                                                <button type="button" class="btn btn-info  mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-white text-dark">3</span>
                                                </button>
                                                <button type="button" class="btn btn-warning mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-white text-dark">6</span>
                                                </button>
                                                <button type="button" class="btn btn-danger  mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-white text-dark">4</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                            </div>
                            <!-- ROW CLOSED -->

                            <!-- ROW OPEN -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="card-title">Border buttons with square Badges</h3>
                                        </div>
                                        <div class="card-body ">
                                            <div class="example">
                                                <button type="button" class="btn btn-outline-primary mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge  bg-primary">2</span>
                                                </button>
                                                <button type="button" class="btn btn-outline-success mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-success">65</span>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary   mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge  bg-secondary">1</span>
                                                </button>
                                                <button type="button" class="btn btn-outline-info  mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-info  ">5333</span>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                            </div>
                            <!-- ROW CLOSED -->

                            <!-- ROW OPEN -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="card-title">Buttons with rounded Badges</h3>
                                        </div>
                                        <div class="card-body ">
                                            <div class="example">
                                                <button type="button" class="btn btn-info  mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-white text-dark rounded-pill">3</span>
                                                </button>
                                                <button type="button" class="btn btn-primary mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge  bg-white text-dark rounded-pill">22</span>
                                                </button>
                                                <button type="button" class="btn btn-secondary  mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-white text-dark rounded-pill">145</span>
                                                </button>
                                                <button type="button" class="btn btn-success  mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-white text-dark rounded-pill">3225</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                            </div>
                            <!-- ROw CLOSED -->

                            <!-- ROW OPEN -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="card-title">Border buttons with rounded Badges</h3>
                                        </div>
                                        <div class="card-body ">
                                            <div class="example">
                                                <button type="button" class="btn btn-outline-primary mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge  bg-primary rounded-pill">2</span>
                                                </button>
                                                <button type="button" class="btn btn-outline-success mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-success rounded-pill">65</span>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary   mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge  bg-secondary rounded-pill">43</span>
                                                </button>
                                                <button type="button" class="btn btn-outline-danger  mt-1 mb-1 me-3">
                                                    <span>Notifications</span>
                                                    <span class="badge bg-danger rounded-pill">563</span>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                            </div>
                            <!-- ROW CLOSED -->

                            <!-- ROW OPEN -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="card-title">Border buttons with rounded Badges</h3>
                                        </div>
                                        <div class="card-body ">
                                            <button type="button" class="btn btn-primary position-relative me-5 mb-3">
                                                Inbox
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    99+
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-success position-relative me-5 mb-3">
                                                Inbox
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    99+
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-danger position-relative me-5 mb-3">
                                                Inbox
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    99+
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-teal position-relative me-5 mb-3">
                                                Inbox
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    99+
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-info position-relative me-5 mb-3">
                                                Inbox
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    99+
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-warning position-relative me-5 mb-3">
                                                Inbox
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    99+
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                            </div>
                            <!-- ROW CLOSED -->

                            <!-- ROW OPEN -->
                            <div class="row">
                                <div class="col-md-12  col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Contextual variations</h3>
                                        </div>
                                        <div class="card-body">
                                            <span class="badge badge-default mt-2">Default</span>
                                            <span class="badge bg-primary mt-2">Primary</span>
                                            <span class="badge bg-success mt-2">Success</span>
                                            <span class="badge bg-info mt-2">Info</span>
                                            <span class="badge bg-warning mt-2">Warning</span>
                                            <span class="badge bg-danger mt-2">Danger</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12  col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Pill Badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <span class="badge rounded-pill badge-default mt-2">Default</span>
                                            <span class="badge rounded-pill bg-primary mt-2">Primary</span>
                                            <span class="badge rounded-pill bg-success mt-2">Success</span>
                                            <span class="badge rounded-pill bg-info mt-2">Info</span>
                                            <span class="badge rounded-pill bg-warning mt-2">Warning</span>
                                            <span class="badge rounded-pill bg-danger mt-2">Danger</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW CLOSED -->

                            <!-- ROW OPEN -->
                            <div class="row">
                                <div class="col-md-12  col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">light Badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <span class="badge bg-primary-light mt-2">Primary</span>
                                            <span class="badge bg-success-light mt-2">Success</span>
                                            <span class="badge bg-secondary-light mt-2">secondary</span>
                                            <span class="badge bg-warning-light mt-2">Warning</span>
                                            <span class="badge bg-info-light mt-2">Info</span>
                                            <span class="badge bg-danger-light mt-2">Danger</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12  col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Graident Badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <span class="badge badge-gradient-primary mt-2">Primary</span>
                                            <span class="badge badge-gradient-success mt-2">Success</span>
                                            <span class="badge badge-gradient-secondary mt-2">secondary</span>
                                            <span class="badge badge-gradient-warning mt-2">Warning</span>
                                            <span class="badge badge-gradient-info mt-2">Info</span>
                                            <span class="badge badge-gradient-danger mt-2">Danger</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW CLOSED -->

                            <!-- ROW OPEN -->
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="offer offer-default">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        top
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3 class="lead font-weight-semibold">
                                                        Default badge
                                                    </h3>
                                                    <p class="mb-0">
                                                        And a little description.
                                                        <br> and so one
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="offer offer-success">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        top
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3 class="lead font-weight-semibold">
                                                        Success badge
                                                    </h3>
                                                    <p class="mb-0">
                                                        And a little description.
                                                        <br> and so one
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="offer offer-radius offer-primary">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        top
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3 class="lead font-weight-semibold">
                                                        Primary badge
                                                    </h3>
                                                    <p class="mb-0">
                                                        And a little description.
                                                        <br> and so one
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="offer offer-info mb-6">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        top
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3 class="lead font-weight-semibold">
                                                        Info Badge
                                                    </h3>
                                                    <p class="mb-0">
                                                        And a little description.
                                                        <br> and so one
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="offer offer-warning mb-6">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        top
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3 class="lead font-weight-semibold">
                                                        Warning badge
                                                    </h3>
                                                    <p class="mb-0">
                                                        And a little description.
                                                        <br> and so one
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="offer offer-radius offer-danger mb-6">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        top
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3 class="lead font-weight-semibold">
                                                        Danger Badge
                                                    </h3>
                                                    <p class="mb-0">
                                                        And a little description.
                                                        <br> and so one
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW CLOSED -->

@endsection

@section('scripts')


@endsection