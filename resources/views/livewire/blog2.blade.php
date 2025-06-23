@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Blog 2</h4>
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
                                        <div class="card-body pe-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted dropdown">
                                                    <a class="option-dots me-2 bg-light border-light text-primary"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fe fe-chevron-down text-icon"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Unread</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Important</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to
                                                            Trash</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item7-card-img px-4">
                                            <a href="javascript:void(0);"></a>
                                            <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="img" class="cover-image br-7">
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 text-secondary mt-0"></i>
                                                    <div class="ms-1 text-muted font-weight-semibold">Jan-18-2021</div>
                                                </a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 text-warning"></i>
                                                        <div class="ms-1 text-muted font-weight-semibold">12 Comments</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum
                                                itationem </p>
                                            <div class="media pt-3 mt-0 border-top align-items-center">
                                                <div class="media-user me-2 my-1">
                                                    <div class="avatar-list avatar-list-stacked my-1">
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/12.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/9.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-muted my-1">
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-danger brround bg-danger-transparent border-danger fe fe-heart  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-success brround bg-success-transparent border-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-secondary brround bg-secondary-transparent border-secondary fe fe-share-2  fs-16 text-icon"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-body pe-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted dropdown">
                                                    <a class="option-dots me-2 bg-light border-light text-primary"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fe fe-chevron-down text-icon"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Unread</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Important</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to
                                                            Trash</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item7-card-img px-4">
                                            <a href="javascript:void(0);"></a>
                                            <img src="{{asset('build/assets/images/media/5.jpg')}}" alt="img" class="cover-image br-7">
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 text-secondary mt-0"></i>
                                                    <div class="ms-1 text-muted font-weight-semibold">Jan-18-2021</div>
                                                </a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 text-warning"></i>
                                                        <div class="ms-1 text-muted font-weight-semibold">12 Comments</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum
                                                itationem </p>
                                            <div class="media pt-3 mt-0 border-top align-items-center">
                                                <div class="media-user me-2">
                                                    <div class="avatar-list avatar-list-stacked my-1">
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/12.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/9.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-muted my-1">
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-danger brround bg-danger-transparent border-danger fe fe-heart  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-success brround bg-success-transparent border-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-secondary brround bg-secondary-transparent border-secondary fe fe-share-2  fs-16 text-icon"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-body pe-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted dropdown">
                                                    <a class="option-dots me-2 bg-light border-light text-primary"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fe fe-chevron-down text-icon"></i></a>
                                                    <div class="dropdown-menu  dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Unread</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Important</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to
                                                            Trash</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item7-card-img px-4">
                                            <a href="javascript:void(0);"></a>
                                            <img src="{{asset('build/assets/images/media/3.jpg')}}" alt="img" class="cover-image br-7">
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 text-secondary mt-0"></i>
                                                    <div class="ms-1 text-muted font-weight-semibold">Jan-18-2021</div>
                                                </a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 text-warning"></i>
                                                        <div class="ms-1 text-muted font-weight-semibold">12 Comments</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum
                                                itationem </p>
                                            <div class="media pt-3 mt-0 border-top align-items-center">
                                                <div class="media-user me-2">
                                                    <div class="avatar-list avatar-list-stacked my-1">
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/12.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/9.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-muted my-1">
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-danger brround bg-danger-transparent border-danger fe fe-heart  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-success brround bg-success-transparent border-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-secondary brround bg-secondary-transparent border-secondary fe fe-share-2  fs-16 text-icon"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-body pe-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted dropdown">
                                                    <a class="option-dots me-2 bg-light border-light text-primary"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fe fe-chevron-down text-icon"></i></a>
                                                    <div class="dropdown-menu  dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Unread</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Important</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to
                                                            Trash</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item7-card-img px-4">
                                            <a href="javascript:void(0);"></a>
                                            <img src="{{asset('build/assets/images/media/7.jpg')}}" alt="img" class="cover-image br-7">
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 text-secondary mt-0"></i>
                                                    <div class="ms-1 text-muted font-weight-semibold">Jan-18-2021</div>
                                                </a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 text-warning"></i>
                                                        <div class="ms-1 text-muted font-weight-semibold">12 Comments</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum
                                                itationem </p>
                                            <div class="media pt-3 mt-0 border-top align-items-center">
                                                <div class="media-user me-2">
                                                    <div class="avatar-list avatar-list-stacked my-1">
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/12.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/9.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-muted my-1">
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-danger brround bg-danger-transparent border-danger fe fe-heart  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-success brround bg-success-transparent border-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-secondary brround bg-secondary-transparent border-secondary fe fe-share-2  fs-16 text-icon"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-body pe-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted dropdown">
                                                    <a class="option-dots me-2 bg-light border-light text-primary"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fe fe-chevron-down text-icon"></i></a>
                                                    <div class="dropdown-menu  dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Unread</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Important</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to
                                                            Trash</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item7-card-img px-4">
                                            <a href="javascript:void(0);"></a>
                                            <img src="{{asset('build/assets/images/media/2.jpg')}}" alt="img" class="cover-image br-7">
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 text-secondary mt-0"></i>
                                                    <div class="ms-1 text-muted font-weight-semibold">Jan-18-2021</div>
                                                </a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 text-warning"></i>
                                                        <div class="ms-1 text-muted font-weight-semibold">12 Comments</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum
                                                itationem </p>
                                            <div class="media pt-3 mt-0 border-top align-items-center">
                                                <div class="media-user me-2">
                                                    <div class="avatar-list avatar-list-stacked my-1">
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/12.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/9.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-muted my-1">
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-danger brround bg-danger-transparent border-danger fe fe-heart  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-success brround bg-success-transparent border-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-secondary brround bg-secondary-transparent border-secondary fe fe-share-2  fs-16 text-icon"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-body pe-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted dropdown">
                                                    <a class="option-dots me-2 bg-light border-light text-primary"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fe fe-chevron-down text-icon"></i></a>
                                                    <div class="dropdown-menu  dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Unread</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Important</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to
                                                            Trash</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item7-card-img px-4">
                                            <a href="javascript:void(0);"></a>
                                            <img src="{{asset('build/assets/images/media/9.jpg')}}" alt="img" class="cover-image br-7">
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 text-secondary mt-0"></i>
                                                    <div class="ms-1 text-muted font-weight-semibold">Jan-18-2021</div>
                                                </a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 text-warning"></i>
                                                        <div class="ms-1 text-muted font-weight-semibold">12 Comments</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum
                                                itationem </p>
                                            <div class="media pt-3 mt-0 border-top align-items-center">
                                                <div class="media-user me-2">
                                                    <div class="avatar-list avatar-list-stacked my-1">
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/12.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/9.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-muted my-1">
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-danger brround bg-danger-transparent border-danger fe fe-heart  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-success brround bg-success-transparent border-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-secondary brround bg-secondary-transparent border-secondary fe fe-share-2  fs-16 text-icon"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-body pe-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted dropdown">
                                                    <a class="option-dots me-2 bg-light border-light text-primary"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fe fe-chevron-down text-icon"></i></a>
                                                    <div class="dropdown-menu  dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Unread</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Important</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to
                                                            Trash</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item7-card-img px-4">
                                            <a href="javascript:void(0);"></a>
                                            <img src="{{asset('build/assets/images/media/12.jpg')}}" alt="img" class="cover-image br-7">
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 text-secondary mt-0"></i>
                                                    <div class="ms-1 text-muted font-weight-semibold">Jan-18-2021</div>
                                                </a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 text-warning"></i>
                                                        <div class="ms-1 text-muted font-weight-semibold">12 Comments</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum
                                                itationem </p>
                                            <div class="media pt-3 mt-0 border-top align-items-center">
                                                <div class="media-user me-2">
                                                    <div class="avatar-list avatar-list-stacked my-1">
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/12.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/9.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-muted my-1">
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-danger brround bg-danger-transparent border-danger fe fe-heart  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-success brround bg-success-transparent border-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-secondary brround bg-secondary-transparent border-secondary fe fe-share-2  fs-16 text-icon"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-body pe-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted dropdown">
                                                    <a class="option-dots me-2 bg-light border-light text-primary"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fe fe-chevron-down text-icon"></i></a>
                                                    <div class="dropdown-menu  dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Unread</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Important</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to
                                                            Trash</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item7-card-img px-4">
                                            <a href="javascript:void(0);"></a>
                                            <img src="{{asset('build/assets/images/media/6.jpg')}}" alt="img" class="cover-image br-7">
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 text-secondary mt-0"></i>
                                                    <div class="ms-1 text-muted font-weight-semibold">Jan-18-2021</div>
                                                </a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 text-warning"></i>
                                                        <div class="ms-1 text-muted font-weight-semibold">12 Comments</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum
                                                itationem </p>
                                            <div class="media pt-3 mt-0 border-top align-items-center">
                                                <div class="media-user me-2">
                                                    <div class="avatar-list avatar-list-stacked my-1">
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/12.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/9.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-muted my-1">
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-danger brround bg-danger-transparent border-danger fe fe-heart  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-success brround bg-success-transparent border-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-secondary brround bg-secondary-transparent border-secondary fe fe-share-2  fs-16 text-icon"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-body pe-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <div class="avatar brround avatar-md me-3"
                                                    style="background-image: url({{asset('build/assets/images/users/16.jpg')}})"></div>
                                                <div>
                                                    <a href="{{url('profile1')}}" class="font-weight-semibold">Anna Ogden</a>
                                                    <small class="d-block text-muted">2 days ago</small>
                                                </div>
                                                <div class="ms-auto text-muted dropdown">
                                                    <a class="option-dots me-2 bg-light border-light text-primary"
                                                        data-bs-toggle="dropdown"><i
                                                            class="fe fe-chevron-down text-icon"></i></a>
                                                    <div class="dropdown-menu  dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Unread</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark As
                                                            Important</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Move to
                                                            Trash</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item7-card-img px-4">
                                            <a href="javascript:void(0);"></a>
                                            <img src="{{asset('build/assets/images/media/11.jpg')}}" alt="img" class="cover-image br-7">
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-5">
                                                <a href="javascript:void(0);" class="d-flex"><i
                                                        class="fe fe-calendar fs-16 me-1 text-secondary mt-0"></i>
                                                    <div class="ms-1 text-muted font-weight-semibold">Jan-18-2021</div>
                                                </a>
                                                <div class="ms-auto">
                                                    <a class="me-0 d-flex" href="javascript:void(0);"><i
                                                            class="fe fe-message-square fs-16 me-1 text-warning"></i>
                                                        <div class="ms-1 text-muted font-weight-semibold">12 Comments</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="mt-4">
                                                <h5 class="font-weight-semibold text-primary">Excepteur occaecat cupidatat
                                                </h5>
                                            </a>
                                            <p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum
                                                itationem </p>
                                            <div class="media pt-3 mt-0 border-top align-items-center">
                                                <div class="media-user me-2">
                                                    <div class="avatar-list avatar-list-stacked my-1">
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/12.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/9.jpg')}})"></span>
                                                        <span class="avatar brround my-auto"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-muted my-1">
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-danger brround bg-danger-transparent border-danger fe fe-heart  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-success brround bg-success-transparent border-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
                                                    <a href="javascript:void(0);" class="new ms-3"><i
                                                            class="p-2 text-secondary brround bg-secondary-transparent border-secondary fe fe-share-2  fs-16 text-icon"></i></a>
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