@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Contact List</h4>
                                </div>
                                <div class="page-rightheader">
                                    <div class="btn-list">
                                        <button class="btn btn-outline-primary"><i class="fe fe-download me-2"></i>
                                            Import</button>
                                        <a href="javascript:void(0);" class="btn btn-primary"
                                            data-bs-target="#user-form-modal" data-bs-toggle="modal"><i
                                                class="fe fe-plus"></i> Add New Conatct</a>
                                    </div>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW -->
                            <div class="row flex-lg-nowrap">
                                <div class="col-12">
                                    <div class="row flex-lg-nowrap">
                                        <div class="col-12 mb-3">
                                            <div>
                                                <div>
                                                    <div class="row">
                                                        <div class="col-6 mb-4">

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card text-start user-contact-list">
                                                                <div>
                                                                    <div
                                                                        class="card-header border-bottom text-white bg-gradient p-5">
                                                                        <div class="card-options float-end">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots border-0 bg-white-transparent"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"><i
                                                                                    class="fe fe-more-horizontal fs-20"></i></a>
                                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Message <i
                                                                                        class="fe fe-message-square float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Call <i
                                                                                        class="fe  fe-phone float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Vedio Call <i
                                                                                        class="fe  fe-video float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Favourites <i
                                                                                        class="fe  fe-heart float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Send Mail<i
                                                                                        class="fe  fe-mail float-end"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar avatar-xxl br-7 d-block cover-image"
                                                                            data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}">
                                                                        </div>
                                                                        <div class=" ms-3 text-white">
                                                                            <p class="mb-0 mt-1 fs-18 font-weight-semibold">
                                                                                Taylor Swift</p>
                                                                            <small>Employee</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-5">
                                                                        <div class="wrapper">
                                                                            <p class="fs-14 font-weight-bold">ABOUT :</p>
                                                                            <p class="mt-2 text-muted">Lorem Ipsum is not
                                                                                simply
                                                                                random text to popular belief Contrary Nemo
                                                                                enim
                                                                                ipsam to popular belief Contrary Nemo enim
                                                                                ipsam.</p>
                                                                        </div>
                                                                        <div>
                                                                            <p class="font-weight-bold">Email : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">denisrose123@gmail.com</span>
                                                                            </p>
                                                                            <p class="font-weight-bold">Phone : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">+
                                                                                    4568(234)1234.</span></p>
                                                                            <p class="font-weight-bold">Category : <span
                                                                                    class="font-weight-normal text-info ms-5 d-inline-block">Employee</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="text-white text-center mt-5">
                                                                            <a class="btn btn-md btn-primary w-48 me-1 my-1"
                                                                                href="javascript:void(0);">Message</a>
                                                                            <a class="btn btn-md btn-outline-primary w-48 me-1"
                                                                                href="javascript:void(0);">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card text-start user-contact-list">
                                                                <div>
                                                                    <div
                                                                        class="card-header border-bottom bg-gradient text-white p-5">
                                                                        <div class="card-options float-end">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots border-0 bg-white-transparent"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"><i
                                                                                    class="fe fe-more-horizontal fs-20"></i></a>
                                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Message <i
                                                                                        class="fe fe-message-square float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Call <i
                                                                                        class="fe  fe-phone float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Vedio Call <i
                                                                                        class="fe  fe-video float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Favourites <i
                                                                                        class="fe  fe-heart float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Send Mail<i
                                                                                        class="fe  fe-mail float-end"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar avatar-xxl br-7 d-block cover-image"
                                                                            data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}">
                                                                        </div>
                                                                        <div class=" ms-3 text-white">
                                                                            <p class="mb-0 mt-1 fs-18 font-weight-semibold">
                                                                                Amanda Nunes</p>
                                                                            <small>Customer</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-5">
                                                                        <div class="wrapper">
                                                                            <p class="fs-14 font-weight-bold ">ABOUT :</p>
                                                                            <p class="mt-2 text-muted">Lorem Ipsum is not
                                                                                simply
                                                                                random text to popular belief Contrary Nemo
                                                                                enim
                                                                                ipsam to popular belief Contrary Nemo enim
                                                                                ipsam.</p>
                                                                        </div>
                                                                        <div>
                                                                            <p class="font-weight-bold">Email : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">denisrose123@gmail.com</span>
                                                                            </p>
                                                                            <p class="font-weight-bold">Phone : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">+
                                                                                    4568(234)1234.</span></p>
                                                                            <p class="font-weight-bold">Category : <span
                                                                                    class="font-weight-normal text-success ms-5 d-inline-block">Customer</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="text-white text-center mt-5">
                                                                            <a class="btn btn-md btn-primary w-48 me-1 my-1"
                                                                                href="javascript:void(0);">Message</a>
                                                                            <a class="btn btn-md btn-outline-primary w-48 me-1"
                                                                                href="javascript:void(0);">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card text-start user-contact-list">
                                                                <div>
                                                                    <div
                                                                        class="card-header border-bottom bg-gradient text-white p-5">
                                                                        <div class="card-options float-end">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots border-0 bg-white-transparent"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"><i
                                                                                    class="fe fe-more-horizontal fs-20"></i></a>
                                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Message <i
                                                                                        class="fe fe-message-square float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Call <i
                                                                                        class="fe  fe-phone float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Vedio Call <i
                                                                                        class="fe  fe-video float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Favourites <i
                                                                                        class="fe  fe-heart float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Send Mail<i
                                                                                        class="fe  fe-mail float-end"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar avatar-xxl br-7 d-block cover-image"
                                                                            data-bs-image-src="{{asset('build/assets/images/users/16.jpg')}}">
                                                                        </div>
                                                                        <div class=" ms-3 text-white">
                                                                            <p class="mb-0 mt-1 fs-18 font-weight-semibold">
                                                                                Denver Athor</p>
                                                                            <small>Employee</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-5">
                                                                        <div class="wrapper">
                                                                            <p class="fs-14 font-weight-bold ">ABOUT :</p>
                                                                            <p class="mt-2 text-muted">Lorem Ipsum is not
                                                                                simply
                                                                                random text to popular belief Contrary Nemo
                                                                                enim
                                                                                ipsam to popular belief Contrary Nemo enim
                                                                                ipsam.</p>
                                                                        </div>
                                                                        <div>
                                                                            <p class="font-weight-bold">Email : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">denisrose123@gmail.com</span>
                                                                            </p>
                                                                            <p class="font-weight-bold">Phone : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">+
                                                                                    4568(234)1234.</span></p>
                                                                            <p class="font-weight-bold">Category : <span
                                                                                    class="font-weight-normal text-info ms-5 d-inline-block">Employee</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="text-white text-center mt-5">
                                                                            <a class="btn btn-md btn-primary w-48 me-1 my-1"
                                                                                href="javascript:void(0);">Message</a>
                                                                            <a class="btn btn-md btn-outline-primary w-48 me-1"
                                                                                href="javascript:void(0);"> Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card text-start user-contact-list">
                                                                <div class="contactheader">
                                                                    <div
                                                                        class="card-header border-bottom bg-gradient text-white p-5">
                                                                        <div class="card-options float-end">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots border-0 bg-white-transparent"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"><i
                                                                                    class="fe fe-more-horizontal fs-20"></i></a>
                                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Message <i
                                                                                        class="fe fe-message-square float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Call <i
                                                                                        class="fe  fe-phone float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Vedio Call <i
                                                                                        class="fe  fe-video float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Favourites <i
                                                                                        class="fe  fe-heart float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Send Mail<i
                                                                                        class="fe  fe-mail float-end"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar avatar-xxl br-7 d-block cover-image"
                                                                            data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                                        </div>
                                                                        <div class=" ms-3 text-white">
                                                                            <p class="mb-0 mt-1 fs-18 font-weight-semibold">
                                                                                Mama
                                                                                Mia</p>
                                                                            <small>Share Holder</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-5">
                                                                        <div class="wrapper">
                                                                            <p class="fs-14 font-weight-bold ">ABOUT :</p>
                                                                            <p class="mt-2 text-muted">Lorem Ipsum is not
                                                                                simply
                                                                                random text to popular belief Contrary Nemo
                                                                                enim
                                                                                ipsam to popular belief Contrary Nemo enim
                                                                                ipsam.</p>
                                                                        </div>
                                                                        <div>
                                                                            <p class="font-weight-bold">Email : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">denisrose123@gmail.com</span>
                                                                            </p>
                                                                            <p class="font-weight-bold">Phone : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">+
                                                                                    4568(234)1234.</span></p>
                                                                            <p class="font-weight-bold">Category : <span
                                                                                    class="font-weight-normal text-danger ms-5 d-inline-block">Share
                                                                                    Holder</span></p>
                                                                        </div>
                                                                        <div class="text-white text-center mt-5">
                                                                            <a class="btn btn-md btn-primary w-48 me-1 my-1"
                                                                                href="javascript:void(0);">Message</a>
                                                                            <a class="btn btn-md btn-outline-primary w-48 me-1"
                                                                                href="javascript:void(0);">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card text-start user-contact-list">
                                                                <div>
                                                                    <div
                                                                        class="card-header border-bottom bg-gradient text-white p-5">
                                                                        <div class="card-options float-end">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots border-0 bg-white-transparent"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"><i
                                                                                    class="fe fe-more-horizontal fs-20"></i></a>
                                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Message <i
                                                                                        class="fe fe-message-square float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Call <i
                                                                                        class="fe  fe-phone float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Vedio Call <i
                                                                                        class="fe  fe-video float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Favourites <i
                                                                                        class="fe  fe-heart float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Send Mail<i
                                                                                        class="fe  fe-mail float-end"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar avatar-xxl br-7 d-block cover-image"
                                                                            data-bs-image-src="{{asset('build/assets/images/users/15.jpg')}}">
                                                                        </div>
                                                                        <div class=" ms-3 text-white">
                                                                            <p class="mb-0 mt-1 fs-18 font-weight-semibold">
                                                                                Roddie Rich</p>
                                                                            <small>Customer</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-5">
                                                                        <div class="wrapper">
                                                                            <p class="fs-14 font-weight-bold ">ABOUT :</p>
                                                                            <p class="mt-2 text-muted">Lorem Ipsum is not
                                                                                simply
                                                                                random text to popular belief Contrary Nemo
                                                                                enim
                                                                                ipsam to popular belief Contrary Nemo enim
                                                                                ipsam.</p>
                                                                        </div>
                                                                        <div>
                                                                            <p class="font-weight-bold">Email : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">denisrose123@gmail.com</span>
                                                                            </p>
                                                                            <p class="font-weight-bold">Phone : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">+
                                                                                    4568(234)1234.</span></p>
                                                                            <p class="font-weight-bold">Category : <span
                                                                                    class="font-weight-normal text-info ms-5 d-inline-block">Employee</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="text-white text-center mt-5">
                                                                            <a class="btn btn-md btn-primary w-48 me-1 my-1"
                                                                                href="javascript:void(0);">Message</a>
                                                                            <a class="btn btn-md btn-outline-primary w-48 me-1"
                                                                                href="javascript:void(0);">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card text-start user-contact-list">
                                                                <div>
                                                                    <div
                                                                        class="card-header border-bottom bg-gradient text-white p-5">
                                                                        <div class="card-options float-end">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots border-0 bg-white-transparent"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"><i
                                                                                    class="fe fe-more-horizontal fs-20"></i></a>
                                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Message <i
                                                                                        class="fe fe-message-square float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Call <i
                                                                                        class="fe  fe-phone float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Vedio Call <i
                                                                                        class="fe  fe-video float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Favourites <i
                                                                                        class="fe  fe-heart float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Send Mail<i
                                                                                        class="fe  fe-mail float-end"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar avatar-xxl br-7 d-block cover-image"
                                                                            data-bs-image-src="{{asset('build/assets/images/users/13.jpg')}}">
                                                                        </div>
                                                                        <div class=" ms-3 text-white">
                                                                            <p class="mb-0 mt-1 fs-18 font-weight-semibold">
                                                                                Justin Cumber</p>
                                                                            <small>Employee</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-5">
                                                                        <div class="wrapper">
                                                                            <p class="fs-14 font-weight-bold ">ABOUT :</p>
                                                                            <p class="mt-2 text-muted">Lorem Ipsum is not
                                                                                simply
                                                                                random text to popular belief Contrary Nemo
                                                                                enim
                                                                                ipsam to popular belief Contrary Nemo enim
                                                                                ipsam.</p>
                                                                        </div>
                                                                        <div>
                                                                            <p class="font-weight-bold">Email : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">denisrose123@gmail.com</span>
                                                                            </p>
                                                                            <p class="font-weight-bold">Phone : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">+
                                                                                    4568(234)1234.</span></p>
                                                                            <p class="font-weight-bold">Category : <span
                                                                                    class="font-weight-normal text-info ms-5 d-inline-block">Employee</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="text-white text-center mt-5">
                                                                            <a class="btn btn-md btn-primary w-48 me-1 my-1"
                                                                                href="javascript:void(0);">Message</a>
                                                                            <a class="btn btn-md btn-outline-primary w-48 me-1"
                                                                                href="javascript:void(0);">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card text-start user-contact-list">
                                                                <div>
                                                                    <div
                                                                        class="card-header border-bottom bg-gradient text-white p-5">
                                                                        <div class="card-options float-end">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots border-0 bg-white-transparent"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"><i
                                                                                    class="fe fe-more-horizontal fs-20"></i></a>
                                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Message <i
                                                                                        class="fe fe-message-square float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Call <i
                                                                                        class="fe  fe-phone float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Vedio Call <i
                                                                                        class="fe  fe-video float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Favourites <i
                                                                                        class="fe  fe-heart float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Send Mail<i
                                                                                        class="fe  fe-mail float-end"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar avatar-xxl br-7 d-block cover-image"
                                                                            data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}">
                                                                        </div>
                                                                        <div class=" ms-3 text-white">
                                                                            <p class="mb-0 mt-1 fs-18 font-weight-semibold">
                                                                                Ronda Rousey</p>
                                                                            <small>Employee</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-5">
                                                                        <div class="wrapper">
                                                                            <p class="fs-14 font-weight-bold ">ABOUT :</p>
                                                                            <p class="mt-2 text-muted">Lorem Ipsum is not
                                                                                simply
                                                                                random text to popular belief Contrary Nemo
                                                                                enim
                                                                                ipsam to popular belief Contrary Nemo enim
                                                                                ipsam.</p>
                                                                        </div>
                                                                        <div>
                                                                            <p class="font-weight-bold">Email : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">denisrose123@gmail.com</span>
                                                                            </p>
                                                                            <p class="font-weight-bold">Phone : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">+
                                                                                    4568(234)1234.</span></p>
                                                                            <p class="font-weight-bold">Category : <span
                                                                                    class="font-weight-normal text-info ms-5 d-inline-block">Employee</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="text-white text-center mt-5">
                                                                            <a class="btn btn-md btn-primary w-48 me-1 my-1"
                                                                                href="javascript:void(0);">Message</a>
                                                                            <a class="btn btn-md btn-outline-primary w-48 me-1"
                                                                                href="javascript:void(0);"> Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card text-start user-contact-list">
                                                                <div>
                                                                    <div
                                                                        class="card-header border-bottom bg-gradient text-white p-5">
                                                                        <div class="card-options float-end">
                                                                            <a href="javascript:void(0);"
                                                                                class="option-dots border-0 bg-white-transparent"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"><i
                                                                                    class="fe fe-more-horizontal fs-20"></i></a>
                                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Message <i
                                                                                        class="fe fe-message-square float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Call <i
                                                                                        class="fe  fe-phone float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Vedio Call <i
                                                                                        class="fe  fe-video float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Favourites <i
                                                                                        class="fe  fe-heart float-end"></i></a>
                                                                                <a class="dropdown-item"
                                                                                    href="javascript:void(0);">Send Mail<i
                                                                                        class="fe  fe-mail float-end"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar avatar-xxl br-7 d-block cover-image"
                                                                            data-bs-image-src="{{asset('build/assets/images/users/12.jpg')}}">
                                                                        </div>
                                                                        <div class=" ms-3 text-white">
                                                                            <p class="mb-0 mt-1 fs-18 font-weight-semibold">
                                                                                Cornor McGregor</p>
                                                                            <small>C.E.O</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-5">
                                                                        <div class="wrapper">
                                                                            <p class="fs-14 font-weight-bold ">ABOUT :</p>
                                                                            <p class="mt-2 text-muted">Lorem Ipsum is not
                                                                                simply
                                                                                random text to popular belief Contrary Nemo
                                                                                enim
                                                                                ipsam to popular belief Contrary Nemo enim
                                                                                ipsam.</p>
                                                                        </div>
                                                                        <div>
                                                                            <p class="font-weight-bold">Email : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">denisrose123@gmail.com</span>
                                                                            </p>
                                                                            <p class="font-weight-bold">Phone : <span
                                                                                    class="text-muted font-weight-normal ms-5 d-inline-block">+
                                                                                    4568(234)1234.</span></p>
                                                                            <p class="font-weight-bold">Category : <span
                                                                                    class="font-weight-normal text-teal ms-5 d-inline-block">Owner</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="text-white text-center mt-5">
                                                                            <a class="btn btn-md btn-primary w-48 me-1 my-1"
                                                                                href="javascript:void(0);">Message</a>
                                                                            <a class="btn btn-md btn-outline-primary w-48 me-1"
                                                                                href="javascript:void(0);"> Delete</a>
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

                                    <!-- User Form Modal -->
                                    <div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Create User</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="py-1">
                                                        <form class="form" novalidate="">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Full Name</label>
                                                                                <input class="form-control" type="text"
                                                                                    name="name" placeholder="John Smith"
                                                                                    value="John Smith">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Username</label>
                                                                                <input class="form-control" type="text"
                                                                                    name="username" placeholder="johnny.s"
                                                                                    value="johnny.s">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Email</label>
                                                                                <input class="form-control" type="text"
                                                                                    placeholder="user@example.com">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col mb-3">
                                                                            <div class="form-group">
                                                                                <label>About</label>
                                                                                <textarea class="form-control" rows="5"
                                                                                    placeholder="My Bio"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6 mb-3">
                                                                    <div class="mb-2"><b>Change Password</b></div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Current Password</label>
                                                                                <input class="form-control" type="password"
                                                                                    placeholder="••••••">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>New Password</label>
                                                                                <input class="form-control" type="password"
                                                                                    placeholder="••••••">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Confirm <span
                                                                                        class="d-none d-xl-inline">Password</span></label>
                                                                                <input class="form-control" type="password"
                                                                                    placeholder="••••••">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                                                                    <div class="mb-2"><b>Keeping in Touch</b></div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <label>Email Notifications</label>
                                                                            <div class="custom-controls-stacked px-2">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="notifications-blog" checked="">
                                                                                    <label class="custom-control-label"
                                                                                        for="notifications-blog">Blog
                                                                                        posts</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="notifications-news" checked="">
                                                                                    <label class="custom-control-label"
                                                                                        for="notifications-news">Newsletter</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="notifications-offers"
                                                                                        checked="">
                                                                                    <label class="custom-control-label"
                                                                                        for="notifications-offers">Personal
                                                                                        Offers</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col d-flex justify-content-right">
                                                                    <button class="btn btn-primary" type="submit">Save
                                                                        Changes</button>
                                                                </div>
                                                            </div>
                                                        </form>
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