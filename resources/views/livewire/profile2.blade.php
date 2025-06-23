@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Profile 2</h4>
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
                            <div class="main-proifle border">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-7">
                                        <div class="box-widget widget-user">
                                            <div class="widget-user-image1 d-xl-flex d-block">
                                                <img alt="User Avatar" class="avatar brround p-0"
                                                    src="{{asset('build/assets/images/users/2.jpg')}}">
                                                <div class="mt-1 ms-xl-5">
                                                    <h4 class="pro-user-username mb-3 font-weight-bold">Patrenna <i
                                                            class="fa fa-check-circle text-success"></i></h4>
                                                    <ul class="mb-0 pro-details">
                                                        <li><span class="profile-icon bg-danger-transparent text-danger"><i
                                                                    class="fe fe-globe"></i></span><span
                                                                class="h6 mt-3">https://demo.com</span></li>
                                                        <li><span
                                                                class="profile-icon bg-success-transparent text-success"><i
                                                                    class="fe fe-mail"></i></span><span
                                                                class="h6 mt-3">jessica@gmail.com</span></li>
                                                        <li><span class="profile-icon bg-info-transparent text-info"><i
                                                                    class="fe fe-flag"></i></span><span
                                                                class="h6 mt-3">English,
                                                                German</span></li>
                                                        <li><span
                                                                class="profile-icon bg-warning-transparent text-warning"><i
                                                                    class="fe fe-phone-call"></i></span><span
                                                                class="h6 mt-3">+345 657 567</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-auto col-xl-5">
                                        <div class="text-xl-right text-end btn-list mt-4 mt-lg-0">
                                            <a href="javascript:void(0);" class="btn btn-outline-primary">Message</a>
                                            <a href="{{url('edit-profile')}}" class="btn btn-primary">Edit Profile</a>
                                        </div>
                                        <div class="mt-5">
                                            <div class="main-profile-contact-list row">
                                                <div class="media col-sm-4 mb-3">
                                                    <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                                                        <i class="fa fa-comments fs-18"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <small class="text-muted">Posts</small>
                                                        <div class="font-weight-bold number-font">
                                                            245
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media col-sm-4 mb-3">
                                                    <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                                                        <i class="fa fa-users fs-18"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <small class="text-muted">Followers</small>
                                                        <div class="font-weight-normal1">
                                                            689k
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media col-sm-4 mb-3">
                                                    <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                                                        <i class="fa fa-feed fs-18"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <small class="text-muted">Following</small>
                                                        <div class="font-weight-bold number-font">
                                                            3,765
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-cover">
                                    <div class="wideget-user-tab">
                                        <div class="tab-menu-heading p-0">
                                            <div class="tabs-menu1 px-3">
                                                <ul class="nav">
                                                    <li><a href="#tab-7" class="active fs-14" data-bs-toggle="tab">About</a>
                                                    </li>
                                                    <li><a href="#tab-8" data-bs-toggle="tab" class="fs-14">friends</a></li>
                                                    <li><a href="#tab-9" data-bs-toggle="tab" class="fs-14">Timeline</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.profile-cover -->
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-7">
                                                <div class="card">
                                                    <div class="card-header ">
                                                        <h3 class="card-title">Biography</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="main-profile-bio mb-0">
                                                            <p>simply dummy text of the printing and typesetting industry.
                                                                Lorem
                                                                Ipsum has been the industry's standard dummy when an unknown
                                                                printer took a galley of type and scrambled it to make a
                                                                type
                                                                specimen book. It has survived not only five centuries
                                                                nchanged.
                                                            </p>
                                                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                                                irure
                                                                dolor in reprehrighterit in voluptate velit esse cillum
                                                                dolore
                                                                eu fugiat nulla pariatur. </p>
                                                            <p class="mb-0">pleasure rationally encounter but because pursue
                                                                consequences that are extremely painful.occur in which toil
                                                                and
                                                                pain can procure him some great pleasure.. <a
                                                                    href="javascript:void(0);">More</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="card-header ">
                                                        <h3 class="card-title">Work & Education</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="main-profile-contact-list d-lg-flex">
                                                            <div class="media me-5">
                                                                <div
                                                                    class="media-icon bg-primary-transparent text-primary me-4">
                                                                    <i class="fa fa-whatsapp"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-weight-bold mb-1">Web Designer at <a
                                                                            href="javascript:void(0);" class="btn-link">Spruko</a></h6>
                                                                    <span>2018 - present</span>
                                                                    <p>Past Work: Spruko, Inc.</p>
                                                                </div>
                                                            </div>
                                                            <div class="media me-5">
                                                                <div
                                                                    class="media-icon bg-success-transparent text-success me-4">
                                                                    <i class="fa fa-briefcase"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-weight-bold mb-1">Studied at <a href="javascript:void(0);"
                                                                            class="btn-link">University</a></h6>
                                                                    <span>2004-2008</span>
                                                                    <p>Graduation: Bachelor of Science in Computer Science
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-header ">
                                                        <h3 class="card-title">Skills</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <a class="btn  btn-sm btn-light mt-1"
                                                            href="javascript:void(0);">HTML5</a>
                                                        <a class="btn  btn-sm btn-light mt-1"
                                                            href="javascript:void(0);">CSS</a>
                                                        <a class="btn  btn-sm btn-light mt-1"
                                                            href="javascript:void(0);">Java
                                                            Script</a>
                                                        <a class="btn  btn-sm btn-light mt-1"
                                                            href="javascript:void(0);">Photo
                                                            Shop</a>
                                                        <a class="btn  btn-sm btn-light mt-1"
                                                            href="javascript:void(0);">Php</a>
                                                        <a class="btn  btn-sm btn-light mt-1"
                                                            href="javascript:void(0);">Wordpress</a>
                                                        <a class="btn  btn-sm btn-light mt-1"
                                                            href="javascript:void(0);">Sass</a>
                                                        <a class="btn  btn-sm btn-light mt-1"
                                                            href="javascript:void(0);">Angular</a>
                                                    </div>
                                                    <div class="card-header ">
                                                        <h3 class="card-title">Contact</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="main-profile-contact-list d-lg-flex">
                                                            <div class="media me-4">
                                                                <div
                                                                    class="media-icon bg-danger-transparent text-danger me-3 mt-1">
                                                                    <i class="fa fa-phone"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <small class="text-muted">Mobile</small>
                                                                    <div class="font-weight-normal1">
                                                                        +245 354 654
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media me-4">
                                                                <div
                                                                    class="media-icon bg-warning-transparent text-warning me-3 mt-1">
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
                                                                <div
                                                                    class="media-icon bg-info-transparent text-info me-3 mt-1">
                                                                    <i class="fa fa-map"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <small class="text-muted">Current Address</small>
                                                                    <div class="font-weight-normal1">
                                                                        San Francisco, USA
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- main-profile-contact-list -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-8">
                                                <div class="card p-5">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center border p-3 mb-3 br-7">
                                                                <div class="avatar avatar-lg brround d-block cover-image"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}">
                                                                </div>
                                                                <div class="wrapper ms-3">
                                                                    <p class="mb-0 mt-1  font-weight-semibold">Denis
                                                                        Rosenblum
                                                                    </p>
                                                                    <small class="text-muted">Project Manager</small>
                                                                </div>
                                                                <div class="float-end ms-auto">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary btn-md">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center border p-3 mb-3 br-7">
                                                                <div class="avatar avatar-lg brround d-block cover-image"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}">
                                                                </div>
                                                                <div class="wrapper ms-3">
                                                                    <p class="mb-0 mt-1  font-weight-semibold">Harvey Mattos
                                                                    </p>
                                                                    <small class="text-muted">Project Manager</small>
                                                                </div>
                                                                <div class="float-end ms-auto">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary btn-md">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center border p-3 mb-3 br-7">
                                                                <div class="avatar avatar-lg brround d-block cover-image"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                                </div>
                                                                <div class="wrapper ms-3">
                                                                    <p class="mb-0 mt-1  font-weight-semibold">Catrice
                                                                        Doshier
                                                                    </p>
                                                                    <small class="text-muted">Project Manager</small>
                                                                </div>
                                                                <div class="float-end ms-auto">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary btn-md">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center border p-3 mb-3 br-7">
                                                                <div class="avatar avatar-lg brround d-block cover-image"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}">
                                                                </div>
                                                                <div class="wrapper ms-3">
                                                                    <p class="mb-0 mt-1  font-weight-semibold">Catherina
                                                                        Bamber
                                                                    </p>
                                                                    <small class="text-muted">Project Manager</small>
                                                                </div>
                                                                <div class="float-end ms-auto">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary btn-md">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center border p-3 mb-3 br-7">
                                                                <div class="avatar avatar-lg brround d-block cover-image"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}">
                                                                </div>
                                                                <div class="wrapper ms-3">
                                                                    <p class="mb-0 mt-1  font-weight-semibold">Margie Fitts
                                                                    </p>
                                                                    <small class="text-muted">Project Manager</small>
                                                                </div>
                                                                <div class="float-end ms-auto">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary btn-md">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center border p-3 mb-3 br-7">
                                                                <div class="avatar avatar-lg brround d-block cover-image"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                                </div>
                                                                <div class="wrapper ms-3">
                                                                    <p class="mb-0 mt-1  font-weight-semibold">Dana Lott</p>
                                                                    <small class="text-muted">Project Manager</small>
                                                                </div>
                                                                <div class="float-end ms-auto">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary btn-md">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center border p-3 mb-3 br-7">
                                                                <div class="avatar avatar-lg brround d-block cover-image"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}">
                                                                </div>
                                                                <div class="wrapper ms-3">
                                                                    <p class="mb-0 mt-1  font-weight-semibold">Benedict
                                                                        Vallone
                                                                    </p>
                                                                    <small class="text-muted">Project Manager</small>
                                                                </div>
                                                                <div class="float-end ms-auto">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary btn-md">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center border p-3 mb-3 br-7">
                                                                <div class="avatar avatar-lg brround d-block cover-image"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}">
                                                                </div>
                                                                <div class="wrapper ms-3">
                                                                    <p class="mb-0 mt-1  font-weight-semibold">Robbie Ruder
                                                                    </p>
                                                                    <small class="text-muted">Project Manager</small>
                                                                </div>
                                                                <div class="float-end ms-auto">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary btn-md">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center border p-3 mb-3 br-7">
                                                                <div class="avatar avatar-lg brround d-block cover-image"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}">
                                                                </div>
                                                                <div class="wrapper ms-3">
                                                                    <p class="mb-0 mt-1  font-weight-semibold">Micaela
                                                                        Aultman
                                                                    </p>
                                                                    <small class="text-muted">Project Manager</small>
                                                                </div>
                                                                <div class="float-end ms-auto">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary btn-md">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center border p-3 mb-3 br-7">
                                                                <div class="avatar avatar-lg brround d-block cover-image"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}">
                                                                </div>
                                                                <div class="wrapper ms-3">
                                                                    <p class="mb-0 mt-1  font-weight-semibold">Jacquelynn
                                                                        Sapienza</p>
                                                                    <small class="text-muted">Project Manager</small>
                                                                </div>
                                                                <div class="float-end ms-auto">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary btn-md">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center border p-3 mb-3 br-7">
                                                                <div class="avatar avatar-lg brround d-block cover-image"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}">
                                                                </div>
                                                                <div class="wrapper ms-3">
                                                                    <p class="mb-0 mt-1  font-weight-semibold">Elida
                                                                        Distefano
                                                                    </p>
                                                                    <small class="text-muted">Project Manager</small>
                                                                </div>
                                                                <div class="float-end ms-auto">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary btn-md">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center border p-3 mb-3 br-7">
                                                                <div class="avatar avatar-lg brround d-block cover-image"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}">
                                                                </div>
                                                                <div class="wrapper ms-3">
                                                                    <p class="mb-0 mt-1  font-weight-semibold">Collin
                                                                        Bridgman
                                                                    </p>
                                                                    <small class="text-muted">Project Manager</small>
                                                                </div>
                                                                <div class="float-end ms-auto">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary btn-md">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <a class="btn d-block btn-light" href="javascript:void(0);"> See All <i
                                                                    class="fe fe-chevron-down ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-9">
                                                <ul class="timelineleft pb-5">
                                                    <li class="timeleft-label"><span class="bg-cyan">10 May. 2021</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-camera bg-orange"></i>
                                                        <div class="timelineleft-item">
                                                            <span class="time"><i class="fa fa-clock-o text-danger"></i> 2
                                                                days
                                                                ago</span>
                                                            <h3 class="timelineleft-header"><a
                                                                    href="javascript:void(0);">Mina
                                                                    Lee</a> uploaded new photos</h3>
                                                            <div class="timelineleft-body">
                                                                <img src="{{asset('build/assets/images/media/5.jpg')}}" alt="..."
                                                                    class="margin mt-2 mb-2">
                                                                <img src="{{asset('build/assets/images/media/7.jpg')}}" alt="..."
                                                                    class="margin mt-2 mb-2 ">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-envelope bg-primary"></i>
                                                        <div class="timelineleft-item">
                                                            <span class="time"><i class="fa fa-clock-o text-danger"></i>
                                                                12:05</span>
                                                            <h3 class="timelineleft-header"><a
                                                                    href="javascript:void(0);">Support Team</a> <span>sent
                                                                    you
                                                                    an email</span></h3>
                                                            <div class="timelineleft-body">
                                                                Etsy doostang zoodles disqus groupon greplin oooj voxy
                                                                zoodles,
                                                                weebly ning heekya handango imeem plugg dopplr jibjab,
                                                                movity
                                                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo
                                                                kaboodle
                                                                quora plaxo ideeli hulu weebly balihoo...
                                                            </div>
                                                            <div class="timelineleft-footer">
                                                                <a class="btn btn-success text-white btn-sm">Read more</a>
                                                                <a class="btn btn-danger text-white btn-sm ">Delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-user bg-secondary"></i>
                                                        <div class="timelineleft-item">
                                                            <span class="time"><i class="fa fa-clock-o text-danger"></i> 5
                                                                mins
                                                                ago</span>
                                                            <h3 class="timelineleft-header no-border"><a
                                                                    href="javascript:void(0);">Sarah Young</a> accepted your
                                                                friright request</h3>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-comments bg-warning"></i>
                                                        <div class="timelineleft-item">
                                                            <span class="time"><i class="fa fa-clock-o text-danger"></i> 27
                                                                mins
                                                                ago</span>
                                                            <h3 class="timelineleft-header"><a
                                                                    href="javascript:void(0);">Jay
                                                                    White</a> commented on your post</h3>
                                                            <div class="timelineleft-body">
                                                                Take me to your leader!
                                                                Switzerland is small and neutral!
                                                                We are more like Germany, ambitious and misunderstood!
                                                            </div>
                                                            <div class="timelineleft-footer">
                                                                <a class="btn btn-info text-white btn-flat btn-sm">View
                                                                    comment</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="timeleft-label">
                                                        <span class="bg-purple"> 3 Jan. 2014</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-camera bg-orange"></i>
                                                        <div class="timelineleft-item">
                                                            <span class="time"><i class="fa fa-clock-o text-danger"></i> 2
                                                                days
                                                                ago</span>
                                                            <h3 class="timelineleft-header"><a
                                                                    href="javascript:void(0);">Mina
                                                                    Lee</a> uploaded new photos</h3>
                                                            <div class="timelineleft-body">
                                                                <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="..."
                                                                    class="margin mt-2 mb-2">
                                                                <img src="{{asset('build/assets/images/media/2.jpg')}}" alt="..."
                                                                    class="margin mt-2 mb-2 ">
                                                                <img src="{{asset('build/assets/images/media/3.jpg')}}" alt="..."
                                                                    class="margin mt-2 mb-2 ">
                                                                <img src="{{asset('build/assets/images/media/4.jpg')}}" alt="..."
                                                                    class="margin mt-2 mb-2">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-clock-o bg-success pb-3"></i>
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


@endsection