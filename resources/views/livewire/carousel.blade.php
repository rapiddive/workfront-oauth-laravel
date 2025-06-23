@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Carousel</h4>
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
                                <div class="col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Carousel</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="carousel-default" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/19.jpg')}}"
                                                            data-bs-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/20.jpg')}}"
                                                            data-bs-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/21.jpg')}}"
                                                            data-bs-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/22.jpg')}}"
                                                            data-bs-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/23.jpg')}}"
                                                            data-bs-holder-rendered="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Carousel with indicators</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carousel-indicators"
                                                        data-bs-slide-to="0" class="active"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators"
                                                        data-bs-slide-to="1"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators"
                                                        data-bs-slide-to="2"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators"
                                                        data-bs-slide-to="3"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators"
                                                        data-bs-slide-to="4"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/24.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/25.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/1.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/2.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/3.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Carousel with controls</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="carousel-controls" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/4.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/5.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/6.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/7.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/8.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carousel-controls" role="button"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carousel-controls" role="button"
                                                    data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Carousel with captions</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="carousel-captions" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/9.jpg')}}"
                                                            data-holder-rendered="true">
                                                        <div class="carousel-item-background d-none d-md-block"></div>
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3>Slide label</h3>
                                                            <p>Secure other greater pleasures</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/10.jpg')}}"
                                                            data-holder-rendered="true">
                                                        <div class="carousel-item-background d-none d-md-block"></div>
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3>Slide label</h3>
                                                            <p>Secure other greater pleasures</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/11.jpg')}}"
                                                            data-holder-rendered="true">
                                                        <div class="carousel-item-background d-none d-md-block"></div>
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3>Slide label</h3>
                                                            <p>Secure other greater pleasures</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/12.jpg')}}"
                                                            data-holder-rendered="true">
                                                        <div class="carousel-item-background d-none d-md-block"></div>
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3>Slide label</h3>
                                                            <p>Secure other greater pleasures</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/13.jpg')}}"
                                                            data-holder-rendered="true">
                                                        <div class="carousel-item-background d-none d-md-block"></div>
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3>Slide label</h3>
                                                            <p>Secure other greater pleasures</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carousel-captions" role="button"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carousel-captions" role="button"
                                                    data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Carousel with top controls</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="carousel-indicators1" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators carousel-top-indicators">
                                                    <button type="button" data-bs-target="#carousel-indicators1"
                                                        data-bs-slide-to="0" class="active"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators1"
                                                        data-bs-slide-to="1"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators1"
                                                        data-bs-slide-to="2"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators1"
                                                        data-bs-slide-to="3"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators1"
                                                        data-bs-slide-to="4"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/14.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/15.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/16.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/17.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/18.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Carousel with top-right controls</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="carousel-indicators2" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators carousel-top-right-indicators">
                                                    <button type="button" data-bs-target="#carousel-indicators2"
                                                        data-bs-slide-to="0" class="active"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators2"
                                                        data-bs-slide-to="1"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators2"
                                                        data-bs-slide-to="2"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators2"
                                                        data-bs-slide-to="3"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators2"
                                                        data-bs-slide-to="4"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/19.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/20.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/21.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/22.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/23.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Carousel with top-left controls</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="carousel-indicators3" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators carousel-top-left-indicators">
                                                    <button type="button" data-bs-target="#carousel-indicators3"
                                                        data-bs-slide-to="0" class="active"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators3"
                                                        data-bs-slide-to="1"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators3"
                                                        data-bs-slide-to="2"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators3"
                                                        data-bs-slide-to="3"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators3"
                                                        data-bs-slide-to="4"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/24.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/25.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/1.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/2.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/3.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Carousel with bottom-right controls</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="carousel-indicators4" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators carousel-bottom-right-indicators">
                                                    <button type="button" data-bs-target="#carousel-indicators4"
                                                        data-bs-slide-to="0" class="active"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators4"
                                                        data-bs-slide-to="1"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators4"
                                                        data-bs-slide-to="2"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators4"
                                                        data-bs-slide-to="3"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators4"
                                                        data-bs-slide-to="4"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/4.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/5.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/6.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/7.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/8.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Carousel with bottom-left controls</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="carousel-indicators5" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators carousel-bottom-left-indicators">
                                                    <button type="button" data-bs-target="#carousel-indicators5"
                                                        data-bs-slide-to="0" class="active"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators5"
                                                        data-bs-slide-to="1"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators5"
                                                        data-bs-slide-to="2"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators5"
                                                        data-bs-slide-to="3"></button>
                                                    <button type="button" data-bs-target="#carousel-indicators5"
                                                        data-bs-slide-to="4"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/9.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/10.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/11.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/12.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/13.jpg')}}"
                                                            data-holder-rendered="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Carousel with Background color captions</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="carousel-captions2" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/28.jpg')}}"
                                                            data-holder-rendered="true">
                                                        <div class="carousel-caption">
                                                            <h3>Slide label</h3>
                                                            <p>The wise man therefore always holds in these matters to this
                                                                principle of selection he rejects pleasures.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/29.jpg')}}"
                                                            data-holder-rendered="true">
                                                        <div class="carousel-item-background d-none d-md-block"></div>
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3>Slide label</h3>
                                                            <p>The wise man therefore always holds in these matters to this
                                                                principle of selection he rejects pleasures.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{asset('build/assets/images/media/30.jpg')}}"
                                                            data-holder-rendered="true">
                                                        <div class="carousel-item-background d-none d-md-block"></div>
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3>Slide label</h3>
                                                            <p>The wise man therefore always holds in these matters to this
                                                                principle of selection he rejects pleasures.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carousel-captions2" role="button"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carousel-captions2" role="button"
                                                    data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')


@endsection