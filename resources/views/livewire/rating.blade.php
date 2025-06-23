@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Ratings</h4>
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
                            <div class="row row-cards">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Star Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-1" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Heart Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-2" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Multi Star Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-3" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Multi Heart Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-6" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Multi circle Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-4" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Thumbs-up Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-5" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row row-cards">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Basic Star Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Rounded star Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars  block my-rating-4" data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                gradients Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-5" data-rating="5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Execute callback when rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-6" data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                read only mode
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-7" data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Use fullstars
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-8" data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                On hover event
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-9" data-rating="2">
                                            </div>
                                            <span class="live-rating"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                rating level colors
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-10" data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- STAR RATING JS -->
        <script src="{{asset('build/assets/plugins/rating/jquery-rate-picker.js')}}"></script>
        <script src="{{asset('build/assets/plugins/rating/rating-picker.js')}}"></script>

        <!-- STAR RATING-1 JS -->
        <script src="{{asset('build/assets/plugins/ratings-2/jquery.star-rating.js')}}"></script>
        <script src="{{asset('build/assets/plugins/ratings-2/star-rating.js')}}"></script>

        <!-- INTERNAL RATING JS -->
        <script src="{{asset('build/assets/plugins/rating/jquery.rating-stars.js')}}"></script>
        <script src="{{asset('build/assets/plugins/rating/jquery.barrating.js')}}"></script>
        <script src="{{asset('build/assets/plugins/rating/js/examples.js')}}"></script>

@endsection