@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Draggable Cards</h4>
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
                            <div class="examples ">
                                <div class="parent1 row">
                                    <div class="wrapper col-lg-4">
                                        <div class="card p-5" id="left-defaults">
                                            <h4 class="card-title mb-6">Draggable Cards</h4>
                                            <div class="card border shadow-none overflow-hidden br-3 mb-4">
                                                <div class="br-bs-7 br-ts-7"></div>
                                                <div
                                                    class="card-body d-flex flex-column p-3 text-primary bg-primary-transparent border-primary">
                                                    <h4><a href="javascript:void(0);">Play Music</a></h4>
                                                    <div>
                                                        Some quick example text to build
                                                    </div>
                                                    <div class="d-flex align-items-center pt-5 mt-auto text-center">
                                                        <div class="text-muted">
                                                            <a class="icon d-none d-md-inline-block ms-3"
                                                                href="javascript:void(0);"><i
                                                                    class="fa fa-step-backward"></i></a> <a
                                                                class="icon d-none d-md-inline-block ms-3"
                                                                href="javascript:void(0);"><i class="fa fa-play"></i></a> <a
                                                                class="icon d-none d-md-inline-block ms-3"
                                                                href="javascript:void(0);"><i
                                                                    class="fa fa-step-forward"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border shadow-none overflow-hidden br-3 mb-4">
                                                <div class="br-bs-7 br-ts-7"></div>
                                                <div class="card-body p-3 bg-success-transparent border-success">
                                                    <div class="d-flex align-items-center mt-auto">
                                                        <div class="avatar brround avatar-md me-3"
                                                            style="background-image: url({{asset('build/assets/images/users/16.jpg')}})">
                                                        </div>
                                                        <div>
                                                            <a class="font-weight-semibold text-success" href="javascript:void(0);">Anna
                                                                Ogden</a>
                                                            <small class="d-block text-muted fa-12">2 days ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3 bg-secondary-transparent text-secondary border-secondary">
                                                <div class="br-bs-7 br-ts-7"></div>New Application
                                            </div>
                                            <div
                                                class="bg-cyan-transparent text-cyan border-cyan card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
                                                <div class="br-bs-7 br-ts-7"></div>Face Bool Live
                                            </div>
                                            <div class="card border shadow-none overflow-hidden mb-4 br-3">
                                                <div class="br-bs-7 br-ts-7"></div>
                                                <div class="card-body p-3 bg-info-transparent border-info">
                                                    <div class="d-flex mt-0">
                                                        <figure class="rounded-circle align-self-start mb-0">
                                                            <img alt="Generic placeholder image"
                                                                class="avatar brround avatar-xs me-3"
                                                                src="{{asset('build/assets/images/users/1.jpg')}}">
                                                        </figure>
                                                        <div class="media-body mt-1">
                                                            <h5
                                                                class="time-title p-0 mb-0 font-weight-semibold leading-norma text-info">
                                                                Victoria</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card overflow-hidden br-3 border shadow-none overflow-hidden bg-light border-dark">
                                                <div class="br-bs-7 br-ts-7"></div>
                                                <a href="javascript:void(0);"><img class="card-img-top  "
                                                        src="{{asset('build/assets/images/media/8.jpg')}}" alt="img"></a>
                                                <div class="card-body d-flex flex-column p-3">
                                                    Who chooses to enjoy a pleasure that has no annoying consequences
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper col-lg-4">
                                        <div class="card p-5" id="right-defaults">
                                            <h4 class="card-title mb-6">Draggable Cards</h4>
                                            <div
                                                class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3 bg-warning-transparent text-warning border-warning">
                                                Website Designing
                                            </div>
                                            <div
                                                class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3 bg-success-transparent text-success border-success">
                                                <div class="br-bs-7 br-ts-7"></div>New Orders
                                            </div>
                                            <div
                                                class="card border shadow-none overflow-hidden mb-4 br-3 bg-danger-transparent text-danger border-danger">
                                                <div class="br-bs-7 br-ts-7"></div>
                                                <div class="card-body p-3">
                                                    <div class="d-flex mt-0">
                                                        <figure class="rounded-circle align-self-start mb-0">
                                                            <img alt="Generic placeholder image"
                                                                class="avatar brround avatar-xs me-3"
                                                                src="{{asset('build/assets/images/users/13.jpg')}}">
                                                        </figure>
                                                        <div class="media-body mt-1">
                                                            <h5
                                                                class="time-title p-0 mb-0 font-weight-semibold leading-normal">
                                                                Daniel</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card overflow-hidden br-3 border shadow-none overflow-hidden border-dark">
                                                <div class="br-bs-7 br-ts-7"></div>
                                                <a href="javascript:void(0);"><img class="card-img-top  "
                                                        src="{{asset('build/assets/images/media/1.jpg')}}" alt="img"></a>
                                                <div class="card-body d-flex flex-column p-3">
                                                    Who chooses to enjoy a pleasure that has no annoying consequences
                                                </div>
                                            </div>
                                            <div
                                                class="card border shadow-none overflow-hidden br-3 mb-4 bg-cyan-transparent text-cyan border-cyan">
                                                <div class="br-bs-7 br-ts-7"></div>
                                                <div class="card-body d-flex flex-column p-3">
                                                    <h4><a href="javascript:void(0);">Play Music</a></h4>
                                                    <div class="text-cyan">
                                                        Some quick example text to build
                                                    </div>
                                                    <div class="d-flex align-items-center pt-5 mt-auto text-center">
                                                        <div class="text-muted">
                                                            <a class="icon d-none d-md-inline-block ms-3"
                                                                href="javascript:void(0);"><i
                                                                    class="fa fa-step-backward"></i></a> <a
                                                                class="icon d-none d-md-inline-block ms-3"
                                                                href="javascript:void(0);"><i class="fa fa-play"></i></a> <a
                                                                class="icon d-none d-md-inline-block ms-3"
                                                                href="javascript:void(0);"><i
                                                                    class="fa fa-step-forward"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card border shadow-none overflow-hidden br-3 mb-4 bg-primary-transparent border-primary">
                                                <div class="br-bs-7 br-ts-7"></div>
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center mt-auto">
                                                        <div class="avatar brround avatar-md me-3"
                                                            style="background-image: url({{asset('build/assets/images/users/16.jpg')}})">
                                                        </div>
                                                        <div>
                                                            <a class="font-weight-semibold text-primary" href="javascript:void(0);">Anna
                                                                Ogden</a>
                                                            <small class="d-block text-muted fa-12">2 days ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper col-lg-4">
                                        <div class="card p-5" id="left-events">
                                            <h4 class="card-title mb-6">Draggable Cards</h4>
                                            <div
                                                class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3 bg-info-transparent text-info border-info">
                                                New Application
                                            </div>
                                            <div
                                                class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3 bg-warning-transparent text-warning border-warning">
                                                Face Bool Live
                                            </div>
                                            <div
                                                class="card border shadow-none overflow-hidden mb-4 br-3 bg-success-transparent text-success border-success">
                                                <div class="card-body p-3">
                                                    <div class="d-flex mt-0">
                                                        <figure class="rounded-circle align-self-start mb-0">
                                                            <img alt="Generic placeholder image"
                                                                class="avatar brround avatar-xs me-3"
                                                                src="{{asset('build/assets/images/users/1.jpg')}}">
                                                        </figure>
                                                        <div class="media-body mt-1">
                                                            <h5
                                                                class="time-title p-0 mb-0 font-weight-semibold leading-normal">
                                                                Victoria</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card overflow-hidden br-3 border shadow-none overflow-hidden border-dark">
                                                <a href="javascript:void(0);"><img class="card-img-top  "
                                                        src="{{asset('build/assets/images/media/6.jpg')}}" alt="img"></a>
                                                <div class="card-body d-flex flex-column p-3">
                                                    Who chooses to enjoy a pleasure that has no annoying consequences
                                                </div>
                                            </div>
                                            <div
                                                class="card border shadow-none overflow-hidden br-3 mb-4 bg-teal-transparent text-teal border-teal">
                                                <div class="card-body d-flex flex-column p-3">
                                                    <h4><a href="javascript:void(0);">Play Music</a></h4>
                                                    <div class="text-teal">
                                                        Some quick example text to build
                                                    </div>
                                                    <div class="d-flex align-items-center pt-5 mt-auto text-center">
                                                        <div class="text-muted">
                                                            <a class="icon d-none d-md-inline-block ms-3"
                                                                href="javascript:void(0);"><i
                                                                    class="fa fa-step-backward"></i></a> <a
                                                                class="icon d-none d-md-inline-block ms-3"
                                                                href="javascript:void(0);"><i class="fa fa-play"></i></a> <a
                                                                class="icon d-none d-md-inline-block ms-3"
                                                                href="javascript:void(0);"><i
                                                                    class="fa fa-step-forward"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card border shadow-none overflow-hidden br-3 mb-4 bg-danger-transparent border-danger">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center mt-auto">
                                                        <div class="avatar brround avatar-md me-3"
                                                            style="background-image: url({{asset('build/assets/images/users/16.jpg')}})">
                                                        </div>
                                                        <div>
                                                            <a class="font-weight-semibold text-danger" href="javascript:void(0);">Anna
                                                                Ogden</a>
                                                            <small class="d-block text-muted fa-12">2 days ago</small>
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

        <!-- INTERNAL Dragula Js -->
        <script src="{{asset('build/assets/plugins/dragula/dragula.js')}}"></script>
        <script src="{{asset('build/assets/plugins/dragula/example.min.js')}}"></script>

@endsection