@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">File details</h4>
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
                            <div class="row row-sm">
                                <div class="col-xl-8 col-lg-12 col-md-12">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);"><img src="{{asset('build/assets/images/media/42.jpg')}}"
                                                    alt="img" class="br-5 w-100"></a>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom-0">
                                            Related Files
                                        </div>
                                        <div class="card-body pt-0 h-100">
                                            <div class="owl-carousel owl-carousel-icons2">
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                                        <a href="{{url('file-details')}}"><img
                                                                src="{{asset('build/assets/images/media/39.jpg')}}" alt="img"
                                                                height="124" class="w-100"></a>
                                                        <div class="card-footer">
                                                            <div class="d-flex">
                                                                <div>
                                                                    <h5 class="mb-0 fw-semibold text-break">image2.jpg</h5>
                                                                </div>
                                                                <div class="ms-auto my-auto">
                                                                    <span class="text-muted mb-0">66 KB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                                        <a href="{{url('file-details')}}" class="mx-auto my-3"><img
                                                                src="{{asset('build/assets/images/pngs/2.png')}}" alt="img" class="filelist-img"></a>
                                                        <div class="card-footer">
                                                            <div class="d-flex">
                                                                <div>
                                                                    <h5 class="mb-0 fw-semibold text-break">file.pdf</h5>
                                                                </div>
                                                                <div class="ms-auto my-auto">
                                                                    <span class="text-muted mb-0">32 KB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                                        <a href="{{url('file-details')}}"><img
                                                                src="{{asset('build/assets/images/media/43.jpg')}}" alt="img"
                                                                height="124" class="w-100"></a>
                                                        <div class="card-footer">
                                                            <div class="d-flex">
                                                                <div>
                                                                    <h5 class="mb-0 fw-semibold text-break">image1.jpg</h5>
                                                                </div>
                                                                <div class="ms-auto my-auto">
                                                                    <span class="text-muted mb-0">76 KB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                                        <a href="{{url('file-details')}}" class="mx-auto my-3"><img
                                                                src="{{asset('build/assets/images/pngs/3.png')}}"
                                                                alt="img" class="filelist-img"></a>
                                                        <div class="card-footer">
                                                            <div class="d-flex">
                                                                <div>
                                                                    <h5 class="mb-0 fw-semibold text-break">excel.xls</h5>
                                                                </div>
                                                                <div class="ms-auto my-auto">
                                                                    <span class="text-muted mb-0">34 KB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                                        <a href="{{url('file-details')}}"><img
                                                                src="{{asset('build/assets/images/media/42.jpg')}}" alt="img"
                                                                height="124" class="w-100"></a>
                                                        <div class="card-footer">
                                                            <div class="d-flex">
                                                                <div>
                                                                    <h5 class="mb-0 fw-semibold text-break">nature.jpg</h5>
                                                                </div>
                                                                <div class="ms-auto my-auto">
                                                                    <span class="text-muted mb-0">66 KB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                                        <a href="{{url('file-details')}}" class="mx-auto my-3"><img
                                                                src="{{asset('build/assets/images/pngs/5.png')}}"
                                                                alt="img" class="filelist-img"></a>
                                                        <div class="card-footer">
                                                            <div class="d-flex">
                                                                <div>
                                                                    <h5 class="mb-0 fw-semibold text-break">demo.ppt</h5>
                                                                </div>
                                                                <div class="ms-auto my-auto">
                                                                    <span class="text-muted mb-0">67 KB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="card overflow-hidden border p-0 mb-0 bg-white">
                                                        <a href="{{url('file-details')}}"><img
                                                                src="{{asset('build/assets/images/media/38.jpg')}}" alt="img"
                                                                height="124" class="w-100"></a>
                                                        <div class="card-footer">
                                                            <div class="d-flex">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-0 fw-semibold text-break">image1.jpg</h5>
                                                                </div>
                                                                <div class="ms-auto my-auto">
                                                                    <span class="text-muted mb-0">76 KB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <h5 class="mb-3">File details</h5>
                                            <div>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="table-responsive">
                                                            <table class="table mb-0 table-bordered text-nowrap">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>File Name</th>
                                                                        <td>image.jpg</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Uploaded</th>
                                                                        <td>10-10-2021</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Size</th>
                                                                        <td>25 MB</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Dimensions</th>
                                                                        <td>1000 x 350</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Resolution Unit</th>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>File Type</th>
                                                                        <td>jpg</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="text-center mt-3">
                                                            <button type="button"
                                                                class="btn btn-icon bg-primary-transparent me-2 bradius"><i
                                                                    class="fe fe-edit"></i></button>
                                                            <button type="button"
                                                                class="btn btn-icon  bg-danger-transparent me-2 bradius"><i
                                                                    class="fe fe-trash"></i></button>
                                                            <button type="button"
                                                                class="btn btn-icon  bg-success-transparent me-2 bradius"><i
                                                                    class="fe fe-download fs-14"></i></button>
                                                            <button type="button"
                                                                class="btn btn-icon  bg-warning-transparent bradius"><i
                                                                    class="fe fe-share-2 fs-14"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-body pb-0">
                                            <h5 class="mb-3">Recent Files</h5>
                                            <ul id="lightgallery" class="list-unstyled row">
                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0"
                                                    data-responsive="{{asset('build/assets/images/media/37.jpg')}}"
                                                    data-src="{{asset('build/assets/images/media/37.jpg')}}"
                                                    data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-responsive br-5"
                                                            src="{{asset('build/assets/images/media/37.jpg')}}" alt="Thumb-1">
                                                    </a>
                                                </li>
                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0"
                                                    data-responsive="{{asset('build/assets/images/media/38.jpg')}}"
                                                    data-src="{{asset('build/assets/images/media/38.jpg')}}"
                                                    data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-responsive br-5"
                                                            src="{{asset('build/assets/images/media/38.jpg')}}" alt="Thumb-2">
                                                    </a>
                                                </li>
                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0"
                                                    data-responsive="{{asset('build/assets/images/media/39.jpg')}}"
                                                    data-src="{{asset('build/assets/images/media/39.jpg')}}"
                                                    data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-responsive br-5"
                                                            src="{{asset('build/assets/images/media/39.jpg')}}" alt="Thumb-1">
                                                    </a>
                                                </li>
                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0"
                                                    data-responsive="{{asset('build/assets/images/media/40.jpg')}}"
                                                    data-src="{{asset('build/assets/images/media/40.jpg')}}"
                                                    data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-responsive br-5"
                                                            src="{{asset('build/assets/images/media/40.jpg')}}" alt="Thumb-2">
                                                    </a>
                                                </li>
                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0"
                                                    data-responsive="{{asset('build/assets/images/media/41.jpg')}}"
                                                    data-src="{{asset('build/assets/images/media/41.jpg')}}"
                                                    data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-responsive br-5"
                                                            src="{{asset('build/assets/images/media/41.jpg')}}" alt="Thumb-1">
                                                    </a>
                                                </li>
                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0"
                                                    data-responsive="{{asset('build/assets/images/media/42.jpg')}}"
                                                    data-src="{{asset('build/assets/images/media/42.jpg')}}"
                                                    data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-responsive br-5"
                                                            src="{{asset('build/assets/images/media/42.jpg')}}" alt="Thumb-2">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- OWL CAROUSEL JS-->
        <script src="{{asset('build/assets/plugins/owl-carousel/owl.carousel.js')}}"></script>

        <!-- OWL Carousel js -->
        <script src="{{asset('build/assets/plugins/owl-carousel/carousel.js')}}"></script>

        <!-- INTERNAL Gallery js -->
        <script src="{{asset('build/assets/plugins/gallery/picturefill.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lightgallery.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-pager.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-autoplay.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-fullscreen.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-zoom.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-hash.js')}}"></script>
        <script src="{{asset('build/assets/plugins/gallery/lg-share.js')}}"></script>
        @vite('resources/assets/js/gallery.js')
        

@endsection