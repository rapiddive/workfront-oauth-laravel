@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Profile 1</h4>
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
                                <div class="col-xl-3 col-lg-5 col-md-12">
                                    <div class="card box-widget widget-user">
                                        <div class="widget-user-image mx-auto mt-5"><img alt="User Avatar"
                                                class="rounded-circle" src="{{asset('build/assets/images/users/2.jpg')}}"></div>
                                        <div class="card-body text-center">
                                            <div class="pro-user">
                                                <h4 class="pro-user-username mb-1 font-weight-bold">Patrenna</h4>
                                                <h6 class="pro-user-desc text-muted">UI UX Designer</h6>
                                                <div class="wideget-user-rating">
                                                    <a href="javascript:void(0);"><i
                                                            class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i
                                                            class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i
                                                            class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i
                                                            class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i
                                                            class="fa fa-star-o text-warning me-1"></i></a> <span>5 (3876
                                                        Reviews)</span>
                                                </div>
                                                <a href="{{url('edit-profile')}}" class="btn btn-success mt-3"><i
                                                        class="fa fa-pencil me-2"></i>Edit Profile</a>
                                                <a href="javascript:void(0);" class="btn btn-primary mt-3"><i
                                                        class="fa fa-rss me-2"></i> Follow</a>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="row">
                                                <div class="col-sm-6 border-end text-center">
                                                    <div class="description-block p-4">
                                                        <h5 class="description-header mb-1 font-weight-bold  number-font">
                                                            689k
                                                        </h5>
                                                        <span class="text-muted">Followers</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="description-block text-center p-4">
                                                        <h5 class="description-header mb-1 font-weight-bold number-font">
                                                            3,765
                                                        </h5>
                                                        <span class="text-muted">Following</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Personal Details</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="font-weight-semibold w-50">Name </span>
                                                            </td>
                                                            <td>Patrenna schell</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="font-weight-semibold w-50">Location </span>
                                                            </td>
                                                            <td>USA</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="font-weight-semibold w-50">Languages </span>
                                                            </td>
                                                            <td>English, German</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="font-weight-semibold w-50">Website </span>
                                                            </td>
                                                            <td>smithabgd.com</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="font-weight-semibold w-50">Email </span>
                                                            </td>
                                                            <td>georgemestayer@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="font-weight-semibold w-50">Phone </span>
                                                            </td>
                                                            <td>+125 254 3562s</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-7 col-md-12">
                                    <div class="main-content-body main-content-body-profile card">
                                        <div class="card-header">
                                            <h3 class="card-title">Biography</h3>
                                        </div>
                                        <div class="main-profile-body">
                                            <div class="card-body">
                                                <div class="main-profile-bio mb-5">
                                                    <p>simply dummy text of the printing and typesetting industry. Lorem
                                                        Ipsum
                                                        has been the industry's standard dummy when an unknown printer took
                                                        a
                                                        galley of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries nchanged.</p>
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi
                                                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehrighterit in voluptate velit esse cillum dolore eu fugiat
                                                        nulla
                                                        pariatur. </p>
                                                    <p class="mb-0">pleasure rationally encounter but because pursue
                                                        consequences that are extremely painful.occur in which toil and pain
                                                        can
                                                        procure him some great pleasure.. <a href="javascript:void(0);">More</a></p>
                                                </div>
                                                <div>
                                                    <form class="profile-edit mb-0">
                                                        <textarea class="form-control br-be-0 br-bs-0"
                                                            placeholder="What are you doing right now?" rows="5"></textarea>
                                                        <div class="profile-share  border border-top-0 d-flex">
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
                                                                class="btn btn-outline-success pull-right mt-1 ms-auto"><i
                                                                    class="fa fa-share ms-1"></i> Share</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Work & Education</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="main-profile-contact-list d-lg-flex">
                                                <div class="media me-5">
                                                    <div class="media-icon bg-secondary-transparent text-secondary me-4">
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
                                        <div class="card-header">
                                            <h3 class="card-title">Skills</h3>
                                        </div>
                                        <div class="card-body">
                                            <a class="btn btn-sm btn-light mt-1" href="javascript:void(0);">HTML5</a>
                                            <a class="btn btn-sm btn-light mt-1" href="javascript:void(0);">CSS</a>
                                            <a class="btn btn-sm btn-light mt-1" href="javascript:void(0);">Java Script</a>
                                            <a class="btn btn-sm btn-light mt-1" href="javascript:void(0);">Photo Shop</a>
                                            <a class="btn btn-sm btn-light mt-1" href="javascript:void(0);">Php</a>
                                            <a class="btn btn-sm btn-light mt-1" href="javascript:void(0);">Wordpress</a>
                                            <a class="btn btn-sm btn-light mt-1" href="javascript:void(0);">Sass</a>
                                            <a class="btn btn-sm btn-light mt-1" href="javascript:void(0);">Angular</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Contact</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="main-profile-contact-list d-lg-flex">
                                                <div class="media me-4">
                                                    <div class="media-icon bg-danger-transparent text-danger  me-3 mt-1">
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
                                                    <div class="media-icon bg-info-transparent text-info me-3 mt-1">
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
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')


@endsection