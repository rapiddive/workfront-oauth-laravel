@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Blog details</h4>
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

                            <!-- ROW OPEN -->
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="card">
                                        <img class="card-img-blog-details" src="{{asset('build/assets/images/media/25.jpg')}}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <div class="d-md-flex">
                                                <a href="javascript:void(0);" class="d-flex me-4 mb-2"><i
                                                        class="fe fe-calendar fs-16 me-1 p-3 bg-info-transparent text-secondary bradius"></i>
                                                    <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">Sep-25-2021
                                                    </div>
                                                </a>
                                                <a href="{{url('profile1')}}" class="d-flex mb-2"><i
                                                        class="fe fe-user fs-16 me-1 p-3 bg-primary-transparent text-primary bradius"></i>
                                                    <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">Harry Fisher
                                                    </div>
                                                </a>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="d-flex mb-2"><i
                                                            class="fe fe-message-square fs-16 me-1 p-3 bg-success-transparent text-success bradius"></i>
                                                        <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">13
                                                            Comments
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3><a href="javascript:void(0);"> Voluptatem quia voluptas</a></h3>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up
                                                the bulk of the card's content.</p>
                                            <p> Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud
                                                exercitation
                                                ullamco laboris commodo consequat. There’s an old maxim that states, “No fun
                                                for
                                                the writer, no fun for the reader.”No matter what industry
                                                you’re working in, as a blogger, you should live and die by this statement.
                                            </p>
                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and
                                                praising pain was born and I will give you a complete account of the system,
                                                and
                                                expound the actual teachings of the great explorer of the
                                                truth, the master-builder of human happiness. No one rejects, dislikes, or
                                                avoids pleasure itself, because it is pleasure.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Comments</div>
                                        </div>
                                        <div class="card-body pb-0">
                                            <div class="media mb-5 overflow-visible d-block d-sm-flex">
                                                <div class="me-3 mb-2">
                                                    <a href="{{url('profile1')}}"> <img
                                                            class="media-object rounded-circle thumb-sm" alt="64x64"
                                                            src="{{asset('build/assets/images/users/5.jpg')}}"> </a>
                                                </div>
                                                <div class="media-body overflow-visible">
                                                    <div class="border mb-5 p-4 br-5">
                                                        <nav class="nav float-end">
                                                            <div class="dropdown">
                                                                <a class="nav-link text-muted fs-16 p-0 ps-4"
                                                                    href="javascript:;" data-bs-toggle="dropdown"
                                                                    role="button" aria-haspopup="true"
                                                                    aria-expanded="false"><i
                                                                        class="fe fe-more-vertical"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-edit mx-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-corner-up-left mx-1"></i> Reply</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-flag mx-1"></i> Report Abuse</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-trash-2 mx-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </nav>
                                                        <h5 class="mt-0">Gavin Murray</h5>
                                                        <span><i class="fe fe-thumb-up text-danger"></i></span>
                                                        <p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque
                                                            porro quisquam est, nostrud exercitation ullamco laboris commodo
                                                            consequat. There’s an old maxim that states, “No fun for the
                                                            writer,
                                                            no fun for the reader.”No matter
                                                            what industry you’re working in, as a blogger, you should live
                                                            and
                                                            die by this statement.</p>
                                                        <a class="like" href="javascript:;">
                                                            <span
                                                                class="badge bg-danger-transparent rounded-pill py-2 px-3">
                                                                <i class="fe fe-heart me-1"></i>56</span>
                                                        </a>
                                                        <span class="reply" id="1">
                                                            <a href="javascript:;"><span
                                                                    class="badge btn-pill bg-primary-transparent py-2 px-3"><i
                                                                        class="fe fe-corner-up-left mx-1"></i>Reply</span></a>
                                                        </span>
                                                    </div>
                                                    <div class="media mb-5 overflow-visible">
                                                        <div class="me-3">
                                                            <a href="{{url('profile1')}}"> <img
                                                                    class="media-object rounded-circle thumb-sm" alt="64x64"
                                                                    src="{{asset('build/assets/images/users/2.jpg')}}"> </a>
                                                        </div>
                                                        <div class="media-body border p-4 overflow-visible br-5">
                                                            <nav class="nav float-end">
                                                                <div class="dropdown">
                                                                    <a class="nav-link text-muted fs-16 p-0 ps-4"
                                                                        href="javascript:;" data-bs-toggle="dropdown"
                                                                        role="button" aria-haspopup="true"
                                                                        aria-expanded="false"><i
                                                                            class="fe fe-more-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="fe fe-edit mx-1"></i> Edit</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="fe fe-corner-up-left mx-1"></i>
                                                                            Reply</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="fe fe-flag mx-1"></i> Report
                                                                            Abuse</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="fe fe-trash-2 mx-1"></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </nav>
                                                            <h5 class="mt-0">Mozelle Belt</h5>
                                                            <span><i class="fe fe-thumb-up text-danger"></i></span>
                                                            <p class="font-13 text-muted">Nostrud exercitation ullamco
                                                                laboris
                                                                commodo consequat. There’s an old maxim that states, “No fun
                                                                for
                                                                the writer, no fun for the reader.”No matter what industry
                                                                you’re working in, as a blogger, you should
                                                                live and die by this statement.</p>
                                                            <a class="like" href="javascript:;"><span
                                                                    class="badge bg-danger-transparent btn-pill py-2 px-3"><i
                                                                        class="fe fe-heart me-1"></i>56</span></a>
                                                            <span class="reply" id="2">
                                                                <a href="javascript:;"><span
                                                                        class="badge bg-primary-transparent btn-pill py-2 px-3"><i
                                                                            class="fe fe-corner-up-left mx-1"></i>Reply</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media mb-5 overflow-visible">
                                                <div class="me-3">
                                                    <a href="{{url('profile1')}}"> <img
                                                            class="media-object rounded-circle thumb-sm" alt="64x64"
                                                            src="{{asset('build/assets/images/users/15.jpg')}}"> </a>
                                                </div>
                                                <div class="media-body overflow-visible">
                                                    <div class="border mb-5 p-4 br-5">
                                                        <nav class="nav float-end">
                                                            <div class="dropdown">
                                                                <a class="nav-link text-muted fs-16 p-0 ps-4"
                                                                    href="javascript:;" data-bs-toggle="dropdown"
                                                                    role="button" aria-haspopup="true"
                                                                    aria-expanded="false"><i
                                                                        class="fe fe-more-vertical"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-edit mx-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-corner-up-left mx-1"></i> Reply</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-flag mx-1"></i> Report Abuse</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-trash-2 mx-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </nav>
                                                        <h5 class="mt-0">Paul Smith</h5>
                                                        <p class="font-13 text-muted">Very nice ! On the other hand, we
                                                            denounce
                                                            with righteous indignation and dislike men who are so beguiled
                                                            and
                                                            demoralized by the </p>
                                                        <a class="like" href="javascript:;"><span
                                                                class="badge bg-danger-transparent btn-pill py-2 px-3"><i
                                                                    class="fe fe-heart me-1"></i>56</span></a>
                                                        <span class="reply" id="3">
                                                            <a href="javascript:;"><span
                                                                    class="badge bg-primary-transparent btn-pill py-2 px-3"><i
                                                                        class="fe fe-corner-up-left mx-1"></i>Reply</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media mb-5 overflow-visible d-block d-sm-flex">
                                                <div class="me-3 mb-1">
                                                    <a href="{{url('profile1')}}"> <img
                                                            class="media-object rounded-circle thumb-sm" alt="64x64"
                                                            src="{{asset('build/assets/images/users/5.jpg')}}"> </a>
                                                </div>
                                                <div class="media-body overflow-visible">
                                                    <div class="border mb-5 p-4 br-5">
                                                        <nav class="nav float-end">
                                                            <div class="dropdown">
                                                                <a class="nav-link text-muted fs-16 p-0 ps-4"
                                                                    href="javascript:;" data-bs-toggle="dropdown"
                                                                    role="button" aria-haspopup="true"
                                                                    aria-expanded="false"><i
                                                                        class="fe fe-more-vertical"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-edit mx-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-corner-up-left mx-1"></i> Reply</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-flag mx-1"></i> Report Abuse</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-trash-2 mx-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </nav>
                                                        <h5 class="mt-0">Gavin Murray</h5>
                                                        <span><i class="fe fe-thumb-up text-danger"></i></span>
                                                        <p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque
                                                            porro quisquam est, nostrud exercitation ullamco laboris commodo
                                                            consequat. There’s an old maxim that states, “No fun for the
                                                            writer,
                                                            no fun for the reader.”No matter
                                                            what industry you’re working in, as a blogger, you should live
                                                            and
                                                            die by this statement.</p>
                                                        <a class="like" href="javascript:;"><span
                                                                class="badge bg-danger-transparent btn-pill py-2 px-3"><i
                                                                    class="fe fe-heart me-1"></i>56</span></a>
                                                        <span class="reply" id="4">
                                                            <a href="javascript:;"><span
                                                                    class="badge bg-primary-transparent btn-pill py-2 px-3"><i
                                                                        class="fe fe-corner-up-left mx-1"></i>Reply</span></a>
                                                        </span>
                                                    </div>
                                                    <div class="media mb-5 overflow-visible d-block d-sm-flex">
                                                        <div class="me-3 mb-1">
                                                            <a href="{{url('profile1')}}"> <img
                                                                    class="media-object rounded-circle thumb-sm" alt="64x64"
                                                                    src="{{asset('build/assets/images/users/2.jpg')}}"> </a>
                                                        </div>
                                                        <div class="media-body overflow-visible">
                                                            <div class="border p-4 mb-5 br-5">
                                                                <nav class="nav float-end">
                                                                    <div class="dropdown">
                                                                        <a class="nav-link text-muted fs-16 p-0 ps-4"
                                                                            href="javascript:;" data-bs-toggle="dropdown"
                                                                            role="button" aria-haspopup="true"
                                                                            aria-expanded="false"><i
                                                                                class="fe fe-more-vertical"></i></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-edit mx-1"></i> Edit</a>
                                                                            <a class="dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-corner-up-left mx-1"></i>
                                                                                Reply</a>
                                                                            <a class="dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-flag mx-1"></i> Report
                                                                                Abuse</a>
                                                                            <a class="dropdown-item"
                                                                                href="javascript:void(0);"><i
                                                                                    class="fe fe-trash-2 mx-1"></i>
                                                                                Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </nav>
                                                                <h5 class="mt-0">Mozelle Belt</h5>
                                                                <span><i class="fe fe-thumb-up text-danger"></i></span>
                                                                <p class="font-13 text-muted">Nostrud exercitation ullamco
                                                                    laboris commodo consequat. There’s an old maxim that
                                                                    states,
                                                                    “No fun for the writer, no fun for the reader.”No matter
                                                                    what industry you’re working in, as a blogger, you
                                                                    should live and die by this statement.</p>
                                                                <a class="like" href="javascript:;"><span
                                                                        class="badge bg-danger-transparent btn-pill py-2 px-3"><i
                                                                            class="fe fe-heart me-1"></i>56</span></a>
                                                                <span class="reply" id="5">
                                                                    <a href="javascript:;"><span
                                                                            class="badge bg-primary-transparent btn-pill py-2 px-3"><i
                                                                                class="fe fe-corner-up-left mx-1"></i>Reply</span></a>
                                                                </span>
                                                            </div>
                                                            <div class="media overflow-visible">
                                                                <div class="me-3">
                                                                    <a href="{{url('profile1')}}"> <img
                                                                            class="media-object rounded-circle thumb-sm"
                                                                            alt="64x64"
                                                                            src="{{asset('build/assets/images/users/9.jpg')}}">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body border p-4 overflow-visible br-5">
                                                                    <nav class="nav float-end">
                                                                        <div class="dropdown">
                                                                            <a class="nav-link text-muted fs-16 p-0 ps-4"
                                                                                href="javascript:;"
                                                                                data-bs-toggle="dropdown" role="button"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"><i
                                                                                    class="fe fe-more-vertical"></i></a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-edit mx-1"></i>
                                                                                    Edit</a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-corner-up-left mx-1"></i>
                                                                                    Reply</a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-flag mx-1"></i> Report
                                                                                    Abuse</a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);"><i
                                                                                        class="fe fe-trash-2 mx-1"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </nav>
                                                                    <h5 class="mt-0">Paul Smith</h5>
                                                                    <span><i class="fe fe-thumb-up text-danger"></i></span>
                                                                    <p class="font-13 text-muted">Nostrud exercitation
                                                                        ullamco
                                                                        laboris commodo consequat. There’s an old maxim that
                                                                        states, “No fun for the writer, no fun for the
                                                                        reader.”No matter what industry you’re working in,
                                                                        as a
                                                                        blogger,
                                                                        you should live and die by this statement.</p>
                                                                    <a class="like" href="javascript:;"><span
                                                                            class="badge bg-danger-transparent rounded-pill py-2 px-3"><i
                                                                                class="fe fe-heart me-1"></i>56</span></a>
                                                                    <span class="reply" id="6">
                                                                        <a href="javascript:;"><span
                                                                                class="badge bg-primary-transparent rounded-pill py-2 px-3"><i
                                                                                    class="fe fe-corner-up-left mx-1"></i>Reply</span></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Add a Comments</div>
                                        </div>
                                        <div class="card-body">
                                            <form class="form-horizontal  m-t-20">
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input class="form-control" type="text" required=""
                                                            placeholder="Username*">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input class="form-control" type="email" required=""
                                                            placeholder="Email*">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <textarea class="form-control" rows="5" placeholder="Your Comment*"></textarea>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-primary btn-rounded  waves-effect waves-light">Submit</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="input-group">
                                                <input type="text" class="form-control border-end-0"
                                                    placeholder="Search ...">
                                                <button class="btn input-group-text btn-primary border-start-0">
                                                    <i class="fe fe-search" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Categories</div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item border-0 p-0"><a href="javascript:void(0);"><i
                                                            class="fe fe-chevron-right"></i> Development</a> <span
                                                        class="product-label">22</span> </li>
                                                <li class="list-group-item border-0 p-0"><a href="javascript:void(0);"><i
                                                            class="fe fe-chevron-right"></i> Web Design</a> <span
                                                        class="product-label">15</span> </li>
                                                <li class="list-group-item border-0 p-0"><a href="javascript:void(0);"><i
                                                            class="fe fe-chevron-right"></i> Technology</a> <span
                                                        class="product-label">10</span> </li>
                                                <li class="list-group-item border-0 p-0"><a href="javascript:void(0);"><i
                                                            class="fe fe-chevron-right"></i> Sports</a> <span
                                                        class="product-label">88</span> </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Professional Blog Writers</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <div class="d-flex overflow-visible">
                                                    <img class="avatar br-5 avatar-xl me-3"
                                                        src="{{asset('build/assets/images/users/1.jpg')}}" alt="avatar-img">
                                                    <div class="media-body valign-middle">
                                                        <a href="{{url('profile1')}}" class="fw-semibold text-body">Simon Sais</a>
                                                        <p class="text-muted mb-0">There are many Lorem ipsum dolor sit
                                                            amet.variations of passages of
                                                            Lorem Ipsum available ...</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex overflow-visible mt-5">
                                                    <img class="avatar br-5 avatar-xl me-3"
                                                        src="{{asset('build/assets/images/users/3.jpg')}}" alt="avatar-img">
                                                    <div class="media-body valign-middle">
                                                        <a href="{{url('profile1')}}" class="fw-semibold text-body">Cherry
                                                            Blossom</a>
                                                        <p class="text-muted mb-0">There are many Lorem ipsum dolor sit
                                                            amet.variations of passages of
                                                            Lorem Ipsum available ...</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex overflow-visible mt-5">
                                                    <img class="avatar br-5 avatar-xl me-3"
                                                        src="{{asset('build/assets/images/users/5.jpg')}}" alt="avatar-img">
                                                    <div class="media-body valign-middle">
                                                        <a href="{{url('profile1')}}" class="fw-semibold text-body">Ivan
                                                            Notheridiya</a>
                                                        <p class="text-muted mb-0">There are many Lorem ipsum dolor sit
                                                            amet.variations of passages of
                                                            Lorem Ipsum available ...</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex overflow-visible mt-5">
                                                    <img class="avatar br-5 avatar-xl me-3"
                                                        src="{{asset('build/assets/images/users/15.jpg')}}" alt="avatar-img">
                                                    <div class="media-body valign-middle">
                                                        <a href="{{url('profile1')}}" class="fw-semibold text-body">Manny Jah</a>
                                                        <p class="text-muted mb-0">There are many Lorem ipsum dolor sit
                                                            amet.variations of passages of
                                                            Lorem Ipsum available ...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Recent Posts</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <div class="d-flex overflow-visible">
                                                    <a href="{{url('blog-details')}}" class="card-recent-post cover-image">
                                                        <img src="{{asset('build/assets/images/media/2.jpg')}}" alt="img">
                                                    </a>
                                                    <div class="ps-3 flex-column">
                                                        <h4><a href="{{url('blog-details')}}">Generator on the Internet..</a></h4>
                                                        <div class="text-muted">Excepteur sint occaecat cupidatat non
                                                            proident,
                                                            accusantium sunt in culpa qui officia deserunt mollit anim id
                                                            est
                                                            laborum....</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex overflow-visible mt-5">
                                                    <a href="{{url('blog-details')}}" class="card-recent-post cover-image">
                                                        <img src="{{asset('build/assets/images/media/3.jpg')}}" alt="img">
                                                    </a>
                                                    <div class="ps-3 flex-column">
                                                        <h4><a href="{{url('blog-details')}}">Voluptatem quia voluptas...</a></h4>
                                                        <div class="text-muted">Excepteur sint occaecat cupidatat non
                                                            proident,
                                                            accusantium sunt in culpa qui officia deserunt mollit anim id
                                                            est
                                                            laborum....</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex overflow-visible mt-5">
                                                    <a href="{{url('blog-details')}}" class="card-recent-post cover-image">
                                                        <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="img">
                                                    </a>
                                                    <div class="ps-3 flex-column">
                                                        <h4><a href="{{url('blog-details')}}">Generator on the Internet..</a></h4>
                                                        <div class="text-muted">Excepteur sint occaecat cupidatat non
                                                            proident,
                                                            accusantium sunt in culpa qui officia deserunt mollit anim id
                                                            est
                                                            laborum....</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex overflow-visible mt-5">
                                                    <a href="{{url('blog-details')}}" class="card-recent-post cover-image">
                                                        <img src="{{asset('build/assets/images/media/4.jpg')}}" alt="img">
                                                    </a>
                                                    <div class="ps-3 flex-column">
                                                        <h4><a href="{{url('blog-details')}}">Voluptatem quia voluptas...</a></h4>
                                                        <div class="text-muted">Excepteur sint occaecat cupidatat non
                                                            proident,
                                                            accusantium sunt in culpa qui officia deserunt mollit anim id
                                                            est
                                                            laborum....</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Tags</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="tags">
                                                <a href="javascript:void(0);" class="tag">Development</a>
                                                <a href="javascript:void(0);" class="tag">Design</a>
                                                <a href="javascript:void(0);" class="tag">Technology</a>
                                                <a href="javascript:void(0);" class="tag">Popular</a>
                                                <a href="javascript:void(0);" class="tag">Codiegniter</a>
                                                <a href="javascript:void(0);" class="tag">JavaScript</a>
                                                <a href="javascript:void(0);" class="tag">Bootstrap</a>
                                                <a href="javascript:void(0);" class="tag">PHP</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW END -->

@endsection

@section('scripts')


@endsection