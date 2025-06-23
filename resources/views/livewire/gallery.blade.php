@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Gallery</h4>
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
                            <div class="demo-gallery card">
                                <div class="card-header">
                                    <div class="card-title">Light Gallery</div>
                                    <div class="card-options ">
                                        <a href="javascript:void(0);" class="card-options-collapse"
                                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                        <a href="javascript:void(0);" class="card-options-remove"
                                            data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul id="lightgallery" class="list-unstyled row">
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/1.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/1.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/1.jpg')}}"
                                                    alt="Thumb-1">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/2.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/2.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/2.jpg')}}"
                                                    alt="Thumb-2">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/3.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/3.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/3.jpg')}}"
                                                    alt="Thumb-1">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/4.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/4.jpg')}}"
                                            data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/4.jpg')}}"
                                                    alt="Thumb-2">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/5.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/5.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/5.jpg')}}"
                                                    alt="Thumb-1">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/6.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/6.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/6.jpg')}}"
                                                    alt="Thumb-2">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/7.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/7.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/7.jpg')}}"
                                                    alt="Thumb-1">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/8.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/8.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/8.jpg')}}"
                                                    alt="Thumb-2">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/9.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/9.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/9.jpg')}}"
                                                    alt="Thumb-1">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/10.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/10.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/10.jpg')}}"
                                                    alt="Thumb-2">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/11.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/11.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/11.jpg')}}"
                                                    alt="Thumb-1">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/12.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/12.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/12.jpg')}}"
                                                    alt="Thumb-2">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/9.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/9.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/9.jpg')}}"
                                                    alt="Thumb-1">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/10.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/10.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/10.jpg')}}"
                                                    alt="Thumb-2">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/11.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/11.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/11.jpg')}}"
                                                    alt="Thumb-1">
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{asset('build/assets/images/media/12.jpg')}}"
                                            data-src="{{asset('build/assets/images/media/12.jpg')}}"
                                            data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                            <a href="javascript:void(0);">
                                                <img class="img-responsive br-7" src="{{asset('build/assets/images/media/12.jpg')}}"
                                                    alt="Thumb-2">
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL GALLERY JS -->
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