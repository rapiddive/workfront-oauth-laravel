@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Profile 3</h4>
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
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="box-widget widget-user text-center">
                                                <div class="widget-user-image mx-auto">
                                                    <img alt="User Avatar" class="rounded-circle"
                                                        src="{{asset('build/assets/images//users/2.jpg')}}">
                                                </div>
                                                <div class="mt-4 ms-sm-5 ms-0">
                                                    <h4 class="pro-user-username  mb-2 font-weight-bold">Patrenna</h4>
                                                    <div>
                                                        <span
                                                            class="badge fs-13 bg-primary-transparent text-primary border-primary  me-2">admin</span>
                                                        <span
                                                            class="badge fs-13 bg-success-transparent text-success border-success">Director</span>
                                                    </div>
                                                    <div class="wideget-user-rating mt-2">
                                                        <a href="javascript:void(0);"><i
                                                                class="fa fa-star text-warning"></i></a>
                                                        <a href="javascript:void(0);"><i
                                                                class="fa fa-star text-warning"></i></a>
                                                        <a href="javascript:void(0);"><i
                                                                class="fa fa-star text-warning"></i></a>
                                                        <a href="javascript:void(0);"><i
                                                                class="fa fa-star text-warning"></i></a>
                                                        <a href="javascript:void(0);"><i
                                                                class="fa fa-star-o text-warning me-1"></i></a> <span>5
                                                            (3876
                                                            Reviews)</span>
                                                    </div>
                                                    <div class="wideget-user-icons mb-2 mt-2">
                                                        <a href="javascript:void(0);" class="bg-primary text-white mt-0"><i
                                                                class="fa fa-facebook"></i></a>
                                                        <a href="javascript:void(0);" class="bg-info text-white"><i
                                                                class="fa fa-twitter"></i></a>
                                                        <a href="javascript:void(0);" class="bg-google text-white"><i
                                                                class="fa fa-google"></i></a>
                                                        <a href="javascript:void(0);" class="bg-dribbble text-white"><i
                                                                class="fa fa-dribbble"></i></a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-success mt-3"><i
                                                            class="fa fa-pencil"></i> Edit Profile</a>
                                                    <a href="javascript:void(0);" class="btn btn-primary mt-3"><i
                                                            class="fa fa-rss"></i> Follow</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header ">
                                            <div class="card-title">Education</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="main-profile-contact-list">
                                                <div class="media me-5 mt-0">
                                                    <div class="media-icon bg-info-transparent text-info me-4">
                                                        <i class="fa fa-whatsapp"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="font-weight-bold mb-1">Web Designer at <a href="javascript:void(0);"
                                                                class="btn-link">Spruko</a></h6>
                                                        <span>2018 - present</span>
                                                        <p>Past Work: Spruko, Inc.</p>
                                                    </div>
                                                </div>
                                                <div class="media me-5">
                                                    <div class="media-icon bg-success-transparent text-success me-4">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="font-weight-bold mb-1">Studied at <a href="javascript:void(0);"
                                                                class="btn-link">University</a></h6>
                                                        <span>2004-2008</span>
                                                        <p>Graduation: Bachelor of Science in Computer Science</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header ">
                                            <div class="card-title">Contact</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="main-profile-contact-list">
                                                <div class="media me-4 mt-0 mb-3">
                                                    <div class="media-icon bg-danger-transparent text-danger me-3 mt-1">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <small class="text-muted">Mobile</small>
                                                        <div class="font-weight-normal1">
                                                            +245 354 654
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media me-4 mb-3">
                                                    <div class="media-icon bg-warning-transparent text-warning me-3 mt-1">
                                                        <i class="fa fa-slack"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <small class="text-muted">Stack</small>
                                                        <div class="font-weight-normal1">
                                                            @spruko.com
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                                                        <i class="fa fa-map"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <small class="text-muted">Current Address</small>
                                                        <div class="font-weight-normal1">
                                                            San Francisco, USA
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="profile-edit mb-0">
                                                <textarea class="form-control br-be-0 br-bs-0"
                                                    placeholder="What are you doing right now?" rows="5"></textarea>
                                                <div class="profile-share  border border-top-0 d-inline-block">
                                                    <a href="javascript:void(0);" class="me-1" title=""
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-original-title="Audio" aria-label="Audio"> <span class="text-muted">
                                                            <i class="fe fe-mic"></i></span></a>
                                                    <a href="javascript:void(0);" class="me-1" title=""
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-original-title="Video" aria-label="Video"> <span class="text-muted">
                                                            <i class="fe fe-video"></i></span></a>
                                                    <a href="javascript:void(0);" class="me-1" title=""
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-original-title="Image" aria-label="Image"> <span class="text-muted">
                                                            <i class="fe fe-image"></i></span></a>
                                                    <button type="submit"
                                                        class="btn btn-outline-success pull-right mt-1"><i
                                                            class="fa fa-share ms-1"></i> Share</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="card-header ">
                                            <div class="card-title">Time Line</div>
                                        </div>
                                        <div class="card-body pb-0 mb-0">
                                            <div class="d-flex">
                                                <div class="media mt-0">
                                                    <div class="media-user me-2">
                                                        <div><img alt="" class="rounded-circle avatar avatar-md"
                                                                src="{{asset('build/assets/images//users/2.jpg')}}"></div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 mt-1 font-weight-bold">Patrenna</h6>
                                                        <small class="text-primary">just now</small>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="dropdown">
                                                        <a class="pro-option" href="JavaScript:void(0);"
                                                            data-bs-toggle="dropdown"><i
                                                                class="fe fe-more-vertical"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);">Edit
                                                                Post</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Delete
                                                                Post</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Personal
                                                                Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <p class="mb-0">There are many variations of passages of Lorem Ipsum
                                                    available,
                                                    but the majority have suffered alteration in some form, by injected
                                                    humour,
                                                    or randomised words which don't look even slightly believable.</p>
                                            </div>
                                            <div class="media mg-t-15 profile-footer">
                                                <div class="media-user me-2 mt-1">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/12.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/2.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/9.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/2.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/4.jpg')}})"></span>
                                                        <span class="avatar brround">+28</span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0 mt-4 ms-2">28 people like your photo</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <a class="new" href="JavaScript:void(0);"><i
                                                            class="fe fe-heart"></i></a>
                                                    <a class="new" href="JavaScript:void(0);"><i
                                                            class="fe fe-message-square"></i></a>
                                                    <a class="new" href="JavaScript:void(0);"><i
                                                            class="fe fe-share-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="card-body pb-0">
                                            <div class="d-flex">
                                                <div class="media mt-0">
                                                    <div class="media-user me-2">
                                                        <div><img alt="" class="rounded-circle avatar avatar-md"
                                                                src="{{asset('build/assets/images//users/2.jpg')}}"></div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 mt-1 font-weight-bold">Patrenna</h6>
                                                        <small class="text-muted">Sep 26 2019, 10:14am</small>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="dropdown">
                                                        <a class="pro-option" href="JavaScript:void(0);"
                                                            data-bs-toggle="dropdown"><i
                                                                class="fe fe-more-vertical"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);">Edit
                                                                Post</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Delete
                                                                Post</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Personal
                                                                Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <p class="mb-0">There are many variations of passages of Lorem Ipsum
                                                    available,
                                                    but the majority have suffered alteration in some form, by injected
                                                    humour,
                                                    or randomised words which don't look even slightly believable.</p>
                                                <div class="d-md-flex">
                                                    <img src="{{asset('build/assets/images//media/2.jpg')}}" alt="img" class="w-40 m-1">
                                                    <img src="{{asset('build/assets/images//media/3.jpg')}}" alt="img" class="w-40 m-1">
                                                </div>
                                            </div>
                                            <div class="media mg-t-15 profile-footer">
                                                <div class="media-user me-2 mt-1">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/12.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/2.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/9.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/2.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/4.jpg')}})"></span>
                                                        <span class="avatar brround">+28</span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0 mt-3 ms-2">28 people like your photo</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <a class="new" href="JavaScript:void(0);"><i
                                                            class="fe fe-heart"></i></a>
                                                    <a class="new" href="JavaScript:void(0);"><i
                                                            class="fe fe-message-square"></i></a>
                                                    <a class="new" href="JavaScript:void(0);"><i
                                                            class="fe fe-share-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="card-body pb-0">
                                            <div class="d-flex">
                                                <div class="media mt-0">
                                                    <div class="media-user me-2">
                                                        <div><img alt="" class="rounded-circle avatar avatar-md"
                                                                src="{{asset('build/assets/images//users/2.jpg')}}"></div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 mt-1 font-weight-bold">Patrenna</h6>
                                                        <small class="text-muted">Sep 24 2019, 09:14am</small>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="dropdown">
                                                        <a class="pro-option" href="JavaScript:void(0);"
                                                            data-bs-toggle="dropdown"><i
                                                                class="fe fe-more-vertical"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);">Edit
                                                                Post</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Delete
                                                                Post</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Personal
                                                                Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <p class="mb-0">There are many variations of passages of Lorem Ipsum
                                                    available,
                                                    but the majority have suffered alteration in some form, by injected
                                                    humour,
                                                    or randomised words which don't look even slightly believable.</p>
                                                <div class="d-md-flex">
                                                    <img src="{{asset('build/assets/images//media/4.jpg')}}" alt="img" class="w-30 m-1">
                                                    <img src="{{asset('build/assets/images//media/5.jpg')}}" alt="img" class="w-30 m-1">
                                                    <img src="{{asset('build/assets/images//media/6.jpg')}}" alt="img" class="w-30 m-1">
                                                </div>
                                            </div>
                                            <div class="media mg-t-15 profile-footer">
                                                <div class="media-user me-2 mt-1">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/12.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/2.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/9.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/2.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images//users/4.jpg')}})"></span>
                                                        <span class="avatar brround">+28</span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0 mt-3 ms-2">28 people like your photo</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <a class="new" href="JavaScript:void(0);"><i
                                                            class="fe fe-heart"></i></a>
                                                    <a class="new" href="JavaScript:void(0);"><i
                                                            class="fe fe-message-square"></i></a>
                                                    <a class="new" href="JavaScript:void(0);"><i
                                                            class="fe fe-share-2"></i></a>
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