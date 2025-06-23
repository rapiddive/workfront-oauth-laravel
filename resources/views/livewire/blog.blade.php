@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Blog</h4>
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
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="item7-card-img">
                                            <a href="{{url('blog-details')}}">
                                                <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="img"
                                                    class="cover-image w-100">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent brround text-secondary font-weight-bold border-secondary h-43"></i><span
                                                        class="mt-3 me-1 text-muted font-weight-semibold">
                                                        July-18-2021</span></a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent brround text-warning font-weight-bold border-warning h-43"></i><span
                                                            class="mt-3 text-muted font-weight-semibold">12
                                                            Comments</span></a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})">
                                                </div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted mt-2">
                                                    <a href="javascript:void(0);"
                                                        class="text-danger icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-heart p-2 fs-20 text-icon text-danger bg-danger-transparent br-7"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-thumbs-up p-2 fs-20 text-icon text-success bg-success-transparent br-7"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="item7-card-img">
                                            <a href="{{url('blog-details')}}">
                                                <img src="{{asset('build/assets/images/media/2.jpg')}}" alt="img"
                                                    class="cover-image w-100">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent brround text-secondary font-weight-bold border-secondary h-43"></i><span
                                                        class="mt-3 me-1 text-muted font-weight-semibold">
                                                        July-18-2021</span></a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent brround text-warning font-weight-bold border-warning h-43"></i><span
                                                            class="mt-3 text-muted font-weight-semibold">12
                                                            Comments</span></a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted mt-2">
                                                    <a href="javascript:void(0);"
                                                        class="text-danger icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-heart p-2 fs-20 text-icon text-danger bg-danger-transparent br-7"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-thumbs-up p-2 fs-20 text-icon text-success bg-success-transparent br-7"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="item7-card-img">
                                            <a href="{{url('blog-details')}}">
                                                <img src="{{asset('build/assets/images/media/3.jpg')}}" alt="img"
                                                    class="cover-image w-100">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent brround text-secondary font-weight-bold border-secondary h-43"></i><span
                                                        class="mt-3 me-1 text-muted font-weight-semibold">
                                                        July-18-2021</span></a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent brround text-warning font-weight-bold border-warning h-43"></i><span
                                                            class="mt-3 text-muted font-weight-semibold">12
                                                            Comments</span></a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted mt-2">
                                                    <a href="javascript:void(0);"
                                                        class="text-danger icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-heart p-2 fs-20 text-icon text-danger bg-danger-transparent br-7"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-thumbs-up p-2 fs-20 text-icon text-success bg-success-transparent br-7"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="item7-card-img">
                                            <a href="{{url('blog-details')}}">
                                                <img src="{{asset('build/assets/images/media/4.jpg')}}" alt="img"
                                                    class="cover-image w-100">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent brround text-secondary font-weight-bold border-secondary h-43"></i><span
                                                        class="mt-3 me-1 text-muted font-weight-semibold">
                                                        July-18-2021</span></a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent brround text-warning font-weight-bold border-warning h-43"></i><span
                                                            class="mt-3 text-muted font-weight-semibold">12
                                                            Comments</span></a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted mt-2">
                                                    <a href="javascript:void(0);"
                                                        class="text-danger icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-heart p-2 fs-20 text-icon text-danger bg-danger-transparent br-7"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-thumbs-up p-2 fs-20 text-icon text-success bg-success-transparent br-7"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="item7-card-img">
                                            <a href="{{url('blog-details')}}">
                                                <img src="{{asset('build/assets/images/media/5.jpg')}}" alt="img"
                                                    class="cover-image w-100">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent brround text-secondary font-weight-bold border-secondary h-43"></i><span
                                                        class="mt-3 me-1 text-muted font-weight-semibold">
                                                        July-18-2021</span></a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent brround text-warning font-weight-bold border-warning h-43"></i><span
                                                            class="mt-3 text-muted font-weight-semibold">12
                                                            Comments</span></a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted mt-2">
                                                    <a href="javascript:void(0);"
                                                        class="text-danger icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-heart p-2 fs-20 text-icon text-danger bg-danger-transparent br-7"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-thumbs-up p-2 fs-20 text-icon text-success bg-success-transparent br-7"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="item7-card-img">
                                            <a href="{{url('blog-details')}}">
                                                <img src="{{asset('build/assets/images/media/6.jpg')}}" alt="img"
                                                    class="cover-image w-100">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent brround text-secondary font-weight-bold border-secondary h-43"></i><span
                                                        class="mt-3 me-1 text-muted font-weight-semibold">
                                                        July-18-2021</span></a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent brround text-warning font-weight-bold border-warning h-43"></i><span
                                                            class="mt-3 text-muted font-weight-semibold">12
                                                            Comments</span></a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted mt-2">
                                                    <a href="javascript:void(0);"
                                                        class="text-danger icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-heart p-2 fs-20 text-icon text-danger bg-danger-transparent br-7"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-thumbs-up p-2 fs-20 text-icon text-success bg-success-transparent br-7"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="item7-card-img">
                                            <a href="{{url('blog-details')}}">
                                                <img src="{{asset('build/assets/images/media/7.jpg')}}" alt="img"
                                                    class="cover-image w-100">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent brround text-secondary font-weight-bold border-secondary h-43"></i><span
                                                        class="mt-3 me-1 text-muted font-weight-semibold">
                                                        July-18-2021</span></a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent brround text-warning font-weight-bold border-warning h-43"></i><span
                                                            class="mt-3 text-muted font-weight-semibold">12
                                                            Comments</span></a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted mt-2">
                                                    <a href="javascript:void(0);"
                                                        class="text-danger icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-heart p-2 fs-20 text-icon text-danger bg-danger-transparent br-7"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-thumbs-up p-2 fs-20 text-icon text-success bg-success-transparent br-7"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="item7-card-img">
                                            <a href="{{url('blog-details')}}">
                                                <img src="{{asset('build/assets/images/media/8.jpg')}}" alt="img"
                                                    class="cover-image w-100">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent brround text-secondary font-weight-bold border-secondary h-43"></i><span
                                                        class="mt-3 me-1 text-muted font-weight-semibold">
                                                        July-18-2021</span></a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent brround text-warning font-weight-bold border-warning h-43"></i><span
                                                            class="mt-3 text-muted font-weight-semibold">12
                                                            Comments</span></a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted mt-2">
                                                    <a href="javascript:void(0);"
                                                        class="text-danger icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-heart p-2 fs-20 text-icon text-danger bg-danger-transparent br-7"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-thumbs-up p-2 fs-20 text-icon text-success bg-success-transparent br-7"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="item7-card-img">
                                            <a href="{{url('blog-details')}}">
                                                <img src="{{asset('build/assets/images/media/9.jpg')}}" alt="img"
                                                    class="cover-image w-100">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent brround text-secondary font-weight-bold border-secondary h-43"></i><span
                                                        class="mt-3 me-1 text-muted font-weight-semibold">
                                                        July-18-2021</span></a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent brround text-warning font-weight-bold border-warning h-43"></i><span
                                                            class="mt-3 text-muted font-weight-semibold">12
                                                            Comments</span></a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted mt-2">
                                                    <a href="javascript:void(0);"
                                                        class="text-danger icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-heart p-2 fs-20 text-icon text-danger bg-danger-transparent br-7"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="icon d-none d-sm-inline-block ms-3"><i
                                                            class="fe fe-thumbs-up p-2 fs-20 text-icon text-success bg-success-transparent br-7"></i></a>
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