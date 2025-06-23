@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">timeline</h4>
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
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="tab-menu-heading p-0 border-0">
                                            <div class="tabs-menu1 px-3">
                                                <ul class="nav">
                                                    <li><a href="#tab-7" class="active" data-bs-toggle="tab">Post</a></li>
                                                    <li><a href="#tab-8" data-bs-toggle="tab">Albums</a></li>
                                                    <li><a href="#tab-9" data-bs-toggle="tab">Videos</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body d-sm-flex border-top">
                                            <div class="me-4 mb-2"><img alt="" class="rounded-circle avatar avatar-md"
                                                    src="{{asset('build/assets/images/users/2.jpg')}}"></div>
                                            <form class="w-100">
                                                <textarea class="form-control br-be-0 br-bs-0"
                                                    placeholder="Share Your Thoughts!" rows="5"></textarea>
                                                <div class=" border  border-top-0 p-4 br-5 br-ts-0 br-te-0">
                                                    <a href="javascript:void(0);" class="me-1" title=""
                                                        data-bs-toggle="tooltip" data-placement="top"
                                                        data-original-title="Audio"><i
                                                            class="fe fe-mic fs-16 p-2 brround bg-primary-transparent text-primary border-primary"></i></a>
                                                    <a href="javascript:void(0);" class="me-1" title=""
                                                        data-bs-toggle="tooltip" data-placement="top"
                                                        data-original-title="Video"><i
                                                            class="fe fe-video fs-16 p-2 brround bg-warning-transparent text-warning border-warning"></i></a>
                                                    <a href="javascript:void(0);" class="me-1" title=""
                                                        data-bs-toggle="tooltip" data-placement="top"
                                                        data-original-title="Picture"><i
                                                            class="fe fe-image fs-16 p-2 brround bg-info-transparent text-info border-info"></i></a>
                                                    <a href="javascript:void(0);" class="me-1" title=""
                                                        data-bs-toggle="tooltip" data-placement="top"
                                                        data-original-title="Picture"><i
                                                            class="fe fe-share-2 fs-16 p-2 brround bg-success-transparent text-success border-success"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="card-body pb-0">
                                            <div class="d-flex">
                                                <div class="media mt-0">
                                                    <div class="media-user me-2">
                                                        <div><img alt="" class="rounded-circle avatar avatar-md"
                                                                src="{{asset('build/assets/images/users/2.jpg')}}"></div>
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
                                                                class="fe fe-more-vertical fs-20"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
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
                                            <div class="media mg-t-15 profile-footer align-items-center">
                                                <div class="media-user mx-2 mt-1">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/12.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/9.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/4.jpg')}})"></span>
                                                        <span class="avatar brround">+28</span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0 mt-3 ms-2">28 people like your photo</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <a class="me-2" href="JavaScript:void(0);"><i
                                                            class="fe fe-heart p-3 bg-danger-transparent text-danger border-danger brround fs-14"></i></a>
                                                    <a class="me-2" href="JavaScript:void(0);"><i
                                                            class="fe fe-message-square p-3 bg-info-transparent text-info border-info brround fs-14"></i></a>
                                                    <a class="me-2" href="JavaScript:void(0);"><i
                                                            class="fe fe-share-2 p-3 bg-success-transparent border-success text-success brround fs-14"></i></a>
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
                                                                src="{{asset('build/assets/images/users/2.jpg')}}"></div>
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
                                                                class="fe fe-more-vertical fs-20"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
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
                                                    <img src="{{asset('build/assets/images/media/2.jpg')}}" alt="img" class="w-40 m-1 br-5">
                                                    <img src="{{asset('build/assets/images/media/3.jpg')}}" alt="img" class="w-40 m-1 br-5">
                                                </div>
                                            </div>
                                            <div class="media mg-t-15 profile-footer align-items-center">
                                                <div class="media-user mx-2 mt-1">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/12.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/9.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/4.jpg')}})"></span>
                                                        <span class="avatar brround">+28</span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0 mt-3 ms-2">28 people like your photo</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <a class="me-2" href="JavaScript:void(0);"><i
                                                            class="fe fe-heart p-3 bg-danger-transparent text-danger border-danger brround fs-14"></i></a>
                                                    <a class="me-2" href="JavaScript:void(0);"><i
                                                            class="fe fe-message-square p-3 bg-info-transparent text-info border-info brround fs-14"></i></a>
                                                    <a class="me-2" href="JavaScript:void(0);"><i
                                                            class="fe fe-share-2 p-3 bg-success-transparent border-success text-success brround fs-14"></i></a>
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
                                                                src="{{asset('build/assets/images/users/2.jpg')}}"></div>
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
                                                                class="fe fe-more-vertical fs-20"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
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
                                                    <img src="{{asset('build/assets/images/media/4.jpg')}}" alt="img" class="w-30 m-1 br-5">
                                                    <img src="{{asset('build/assets/images/media/5.jpg')}}" alt="img" class="w-30 m-1 br-5">
                                                    <img src="{{asset('build/assets/images/media/6.jpg')}}" alt="img" class="w-30 m-1 br-5">
                                                </div>
                                            </div>
                                            <div class="media mg-t-15 profile-footer align-items-center">
                                                <div class="media-user mx-2 mt-1">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/12.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/9.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/2.jpg')}})"></span>
                                                        <span class="avatar brround"
                                                            style="background-image: url({{asset('build/assets/images/users/4.jpg')}})"></span>
                                                        <span class="avatar brround">+28</span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0 mt-3 ms-2">28 people like your photo</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <a class="me-2" href="JavaScript:void(0);"><i
                                                            class="fe fe-heart p-3 bg-danger-transparent text-danger border-danger brround fs-14"></i></a>
                                                    <a class="me-2" href="JavaScript:void(0);"><i
                                                            class="fe fe-message-square p-3 bg-info-transparent text-info border-info brround fs-14"></i></a>
                                                    <a class="me-2" href="JavaScript:void(0);"><i
                                                            class="fe fe-share-2 p-3 bg-success-transparent border-success text-success brround fs-14"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card mg-b-20 card--events">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Trending Posts
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div>
                                                <ul class="h-80 vertical-scroll mb-0">
                                                    <li class="list-group-item d-flex border-0">
                                                        <div
                                                            class="w-100 bg-primary-transparent text-primary border-primary p-3 br-7">
                                                            <div>
                                                                <label class="fs-12">Oct 20 <span
                                                                        class="font-weight-semibold">Sunday</span></label>
                                                                <span class="mb-0 fs-12 float-end"><strong>8AM -
                                                                        4PM</strong> Rew City, USA</span>
                                                                <h6>New Fests Blog </h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex border-0">
                                                        <div
                                                            class="w-100 bg-info-transparent text-info border-info p-3 br-7">
                                                            <label class="fs-12">Oct 18 <span
                                                                    class="font-weight-semibold">Friday</span></label>
                                                            <span class="mb-0 fs-12 float-end"><strong>8AM -
                                                                    5PM</strong> Newyork</span>
                                                            <h6>New Location Visited</h6>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex border-0">
                                                        <div
                                                            class="w-100 bg-success-transparent text-success border-success p-3 br-7">
                                                            <label class="fs-12">Oct 12 <span
                                                                    class="font-weight-semibold">Saturday</span></label>
                                                            <span class="mb-0 fs-12 float-end"><strong>8AM -
                                                                    5PM</strong> Japan</span>
                                                            <h6>Weding Event Dance Show</h6>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex border-0">
                                                        <div
                                                            class="w-100 bg-warning-transparent text-warning border-warning p-3 br-7">
                                                            <label class="fs-12">Sep 20 <span
                                                                    class="font-weight-semibold">Friday</span></label>
                                                            <span class="mb-0 fs-12 float-end"><strong>8AM -
                                                                    4PM</strong> Albania, USA</span>
                                                            <h6>Field day Festival Events Orders</h6>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex border-0">
                                                        <div
                                                            class="w-100 bg-secondary-transparent text-secondary border-secondary p-3 br-7">
                                                            <label class="fs-12">Sep 25 <span
                                                                    class="font-weight-semibold">Wednesday</span></label>
                                                            <span class="mb-0 fs-12 float-end"><strong>4AM -
                                                                    8PM</strong> Texas, USA</span>
                                                            <h6>Christamas Party Event Orders</h6>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item d-flex border-0">
                                                        <div
                                                            class="w-100 bg-danger-transparent text-danger border-danger p-3 br-7">
                                                            <label class="fs-12">Sep 30 <span
                                                                    class="font-weight-semibold">Monday</span></label>
                                                            <span class="mb-0 fs-12 float-end"><strong>8AM -
                                                                    5PM</strong> Japan</span>
                                                            <h6>New Weding Event Dance Show Orders</h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAl TIMELINE JS -->
        <script src="{{asset('build/assets/plugins/timeline/js/jquery.timelify.js')}}"></script>
        @vite('resources/assets/js/timeline.js')


        <!-- VERTICAL SCROLL JS -->
        <script src="{{asset('build/assets/jquery.bootstrap.newsbox.js')}}"></script>
        @vite('resources/assets/js/vertical-scroll.js')


@endsection