@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">toast</h4>
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
                            <div class="row row-sm">
                                <div class="col-md-12 col-lg-12 col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-1">Basic toast-main</h6>
                                                <p class="text-muted card-sub-title">Toasts are as flexible as you need and
                                                    have
                                                    very little required markup.</p>
                                            </div>
                                            <div class="text-wrap">
                                                <div class="toast-main">
                                                    <div class="demo-static-toast">
                                                        <div aria-atomic="true" aria-live="assertive"
                                                            class="toast fade show" role="alert" data-bs-autohide="false">
                                                            <div class="toast-header">
                                                                <img src="{{asset('build/assets/images/brand/favicon.png')}}"
                                                                    class="rounded me-2" alt="img" height="18">
                                                                <h6 class="fs-14 mb-0 me-auto">Azea</h6>
                                                                <small class="text-muted me-2">11 mins ago</small>
                                                                <button aria-label="Close"
                                                                    class="ms-2 mb-1 btn-close fs-normal"
                                                                    data-bs-dismiss="toast" type="button">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="toast-body">
                                                                Hello, world! This is a toast message.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-1">Live Toast toast-main</h6>
                                                <p class="text-muted card-sub-title">Click the button below to show a toast
                                                </p>
                                            </div>
                                            <div class="text-wrap">
                                                <div class="toast-main p-5">
                                                    <div class="demo-static-toast">
                                                        <button type="button" class="btn btn-primary" id="liveToastBtn">Show
                                                            live toast</button>
                                                        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                                                            <div id="liveToast" class="toast" role="alert"
                                                                aria-live="assertive" aria-atomic="true">
                                                                <div class="toast-header bg-success text-white">
                                                                    <img src="{{asset('build/assets/images/brand/favicon1.png')}}"
                                                                        class="rounded me-2" alt="img" height="18">
                                                                    <strong class="me-auto">Azea</strong>
                                                                    <small>11 mins ago</small>
                                                                    <button type="button" class="btn-close btn-close-white"
                                                                        data-bs-dismiss="toast" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="toast-body">
                                                                    Hello, world! This is a toast message.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-1">Customized Toast</h6>
                                                <p class="text-muted card-sub-title">Customize your Toasts as flexible as
                                                    you
                                                    need and have very little required markup.</p>
                                            </div>
                                            <div class="text-wrap">
                                                <div class="toast-main">
                                                    <div class="demo-static-toast">
                                                        <div aria-atomic="true" aria-live="assertive"
                                                            class="toast fade show" role="alert" data-bs-autohide="false">
                                                            <div class="toast-body p-0">
                                                                <p class="p-3 mb-0"> Hello, world! This is a toast message.
                                                                </p>
                                                                <div class="mt-0 p-3 border-top">
                                                                    <button class="btn btn-sm btn-success btn"
                                                                        type="button">
                                                                        Action
                                                                    </button>
                                                                    <button class="btn btn-sm btn-danger btn"
                                                                        data-bs-dismiss="toast" type="button">
                                                                        Close
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-1">Colored Toast</h6>
                                                <p class="text-muted card-sub-title">Toasts are as flexible as you need and
                                                    have
                                                    very little required markup.</p>
                                            </div>
                                            <div class="text-wrap">
                                                <div class="toast-main">
                                                    <div class="row row-sm">
                                                        <div class="col-md-4 col-lg-6 col-xl-4 mt-2">
                                                            <div class="demo-static-toast">
                                                                <div aria-atomic="true" aria-live="assertive"
                                                                    class="toast fade show" role="alert"
                                                                    data-bs-autohide="false">
                                                                    <div class="toast-header bg-primary text-white">
                                                                        <i class="fe fe-bell me-2"></i>
                                                                        <h6 class="fs-14 mb-0 me-auto">Azea</h6>
                                                                        <small class="text-white me-2">11 mins ago</small>
                                                                        <button aria-label="Close"
                                                                            class="ms-2 mb-1 btn-close btn-close-white fs-normal"
                                                                            data-bs-dismiss="toast" type="button">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="toast-body">
                                                                        Hello, world! This is a toast message.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-4 mt-2">
                                                            <div class="demo-static-toast">
                                                                <div aria-atomic="true" aria-live="assertive"
                                                                    class="toast fade show" role="alert"
                                                                    data-bs-autohide="false">
                                                                    <div class="toast-header bg-success text-white">
                                                                        <i class="fe fe-check-circle me-2"></i>
                                                                        <h6 class="fs-14 mb-0 me-auto">Azea</h6>
                                                                        <small class="text-white me-2">11 mins ago</small>
                                                                        <button aria-label="Close"
                                                                            class="ms-2 mb-1 btn-close btn-close-white fs-normal"
                                                                            data-bs-dismiss="toast" type="button">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="toast-body">
                                                                        Hello, world! This is a toast message.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-4 mt-2">
                                                            <div class="demo-static-toast">
                                                                <div aria-atomic="true" aria-live="assertive"
                                                                    class="toast fade show" role="alert"
                                                                    data-bs-autohide="false">
                                                                    <div class="toast-header bg-secondary text-white">
                                                                        <i class="fe fe-map-pin me-2"></i>
                                                                        <h6 class="fs-14 mb-0 me-auto">Azea</h6>
                                                                        <small class="text-white me-2">11 mins ago</small>
                                                                        <button aria-label="Close"
                                                                            class="ms-2 mb-1 btn-close btn-close-white fs-normal"
                                                                            data-bs-dismiss="toast" type="button">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="toast-body">
                                                                        Hello, world! This is a toast message.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-4 mt-2">
                                                            <div class="demo-static-toast">
                                                                <div aria-atomic="true" aria-live="assertive"
                                                                    class="toast fade show" role="alert"
                                                                    data-bs-autohide="false">
                                                                    <div class="toast-header bg-warning text-white">
                                                                        <i class="fe fe-alert-triangle me-2"></i>
                                                                        <h6 class="fs-14 mb-0 me-auto">Azea</h6>
                                                                        <small class="text-white me-2">11 mins ago</small>
                                                                        <button aria-label="Close"
                                                                            class="ms-2 mb-1 btn-close btn-close-white fs-normal"
                                                                            data-bs-dismiss="toast" type="button">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="toast-body">
                                                                        Hello, world! This is a toast message.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-4 mt-2">
                                                            <div class="demo-static-toast">
                                                                <div aria-atomic="true" aria-live="assertive"
                                                                    class="toast fade show" role="alert"
                                                                    data-bs-autohide="false">
                                                                    <div class="toast-header bg-info text-white">
                                                                        <i class="fe fe-info me-2"></i>
                                                                        <h6 class="fs-14 mb-0 me-auto">Azea</h6>
                                                                        <small class="text-white me-2">11 mins ago</small>
                                                                        <button aria-label="Close"
                                                                            class="ms-2 mb-1 btn-close btn-close-white fs-normal"
                                                                            data-bs-dismiss="toast" type="button">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="toast-body">
                                                                        Hello, world! This is a toast message.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-4 mt-2">
                                                            <div class="demo-static-toast">
                                                                <div aria-atomic="true" aria-live="assertive"
                                                                    class="toast fade show" role="alert"
                                                                    data-bs-autohide="false">
                                                                    <div class="toast-header bg-dark text-white">
                                                                        <i class="fe fe-clock me-2"></i>
                                                                        <h6 class="fs-14 mb-0 me-auto">Azea</h6>
                                                                        <small class="text-white me-2">11 mins ago</small>
                                                                        <button aria-label="Close"
                                                                            class="ms-2 mb-1 btn-close btn-close-white fs-normal"
                                                                            data-bs-dismiss="toast" type="button">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="toast-body">
                                                                        Hello, world! This is a toast message.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="card custom-card" id="stacking">
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-1">Stacking Toast</h6>
                                                <p class="text-muted card-sub-title">When you have multiple toasts, we
                                                    default
                                                    to vertiaclly stacking them in a readable manner.</p>
                                            </div>
                                            <div class="text-wrap">
                                                <div class="toast-main">
                                                    <div class="demo-static-toast">
                                                        <div aria-atomic="true" aria-live="assertive"
                                                            class="toast fade show mb-3" role="alert"
                                                            data-bs-autohide="false">
                                                            <div class="toast-header">
                                                                <img src="{{asset('build/assets/images/brand/favicon.png')}}"
                                                                    class="rounded me-2" alt="img" height="18">
                                                                <h6 class="fs-14 mb-0 me-auto">Azea</h6>
                                                                <small class="text-muted me-2">Just now</small>
                                                                <button aria-label="Close" class="ms-2 mb-1 btn-close"
                                                                    data-bs-dismiss="toast" type="button">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="toast-body">
                                                                See? Just like this.
                                                            </div>
                                                        </div>
                                                        <div aria-atomic="true" aria-live="assertive"
                                                            class="toast fade show" role="alert" data-bs-autohide="false">
                                                            <div class="toast-header">
                                                                <img src="{{asset('build/assets/images/brand/favicon.png')}}"
                                                                    class="rounded me-2" alt="img" height="18">
                                                                <h6 class="fs-14 mb-0 me-auto">Azea</h6><small
                                                                    class="text-muted me-2">11 mins ago</small>
                                                                <button aria-label="Close"
                                                                    class="ms-2 mb-1 btn-close fs-normal"
                                                                    data-bs-dismiss="toast" type="button">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="toast-body">
                                                                Hello, world! This is a toast message.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="card custom-card" id="place">
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-1">Placement</h6>
                                                <p class="text-muted card-sub-title">Place toasts with custom CSS as you
                                                    need
                                                    them. The top right is often used for notifications, as is the top
                                                    middle.
                                                </p>
                                            </div>
                                            <div class="text-wrap mb-3">
                                                <div class="toast-main">
                                                    <div class="h-150 position-relative mb-3">
                                                        <div class="demo-static-toast t-10 r-10">
                                                            <div aria-atomic="true" aria-live="assertive"
                                                                class="toast fade show" role="alert"
                                                                data-bs-autohide="false">
                                                                <div class="toast-header">
                                                                    <img src="{{asset('build/assets/images/brand/favicon.png')}}"
                                                                        class="rounded me-2" alt="img" height="18">
                                                                    <h6 class="fs-14 mb-0 me-auto">Azea</h6><small
                                                                        class="text-muted me-2">11 mins ago</small>
                                                                    <button aria-label="Close"
                                                                        class="ms-2 mb-1 btn-close fs-normal"
                                                                        data-bs-dismiss="toast" type="button">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="toast-body">
                                                                    Hello, world! This is a toast message.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-wrap mb-3">
                                                <div class="toast-main">
                                                    <div
                                                        class="demo-static-toast d-flex justify-content-center align-items-center">
                                                        <div aria-atomic="true" aria-live="assertive"
                                                            class="toast fade show" role="alert" data-bs-autohide="false">
                                                            <div class="toast-header">
                                                                <img src="{{asset('build/assets/images/brand/favicon.png')}}"
                                                                    class="rounded me-2" alt="img" height="18">
                                                                <h6 class="fs-14 mb-0 me-auto">Azea</h6><small
                                                                    class="text-muted me-2">11 mins ago</small>
                                                                <button aria-label="Close"
                                                                    class="ms-2 mb-1 btn-close fs-normal"
                                                                    data-bs-dismiss="toast" type="button">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="toast-body">
                                                                Hello, world! This is a toast message.
                                                            </div>
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