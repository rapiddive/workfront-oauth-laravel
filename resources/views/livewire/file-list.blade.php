@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <div class="page-leftheader">
                                <h4 class="page-title mb-0 text-primary">File list</h4>
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
                            <div class="col-lg-12 col-xl-12">
                                <div class="row row-sm">
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}"><img
                                                    src="{{asset('build/assets/images/media/39.jpg')}}" alt="img"
                                                    class="file-list-manger w-100"></a>
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
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
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
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}"><img
                                                    src="{{asset('build/assets/images/media/43.jpg')}}" alt="img"
                                                    class="file-list-manger w-100"></a>
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
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}" class="mx-auto my-3"><img
                                                    src="{{asset('build/assets/images/pngs/3.png')}}" alt="img" class="filelist-img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-0 fw-semibold text-break me-1">excel.xls</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">34 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}"><img
                                                    src="{{asset('build/assets/images/media/42.jpg')}}" alt="img"
                                                    class="file-list-manger w-100"></a>
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
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}" class="mx-auto my-3"><img
                                                    src="{{asset('build/assets/images/pngs/5.png')}}" alt="img" class="filelist-img"></a>
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
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}"><img
                                                    src="{{asset('build/assets/images/media/38.jpg')}}" alt="img"
                                                    class="file-list-manger w-100"></a>
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
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}" class="mx-auto my-3"><img
                                                    src="{{asset('build/assets/images/pngs/9.png')}}" alt="img" class="filelist-img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-0 fw-semibold text-break">video.mp4</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto mt-3">
                                                        <span class="text-muted mb-0">320 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}" class="mx-auto my-3"><img
                                                    src="{{asset('build/assets/images/pngs/1.png')}}" alt="img" class="filelist-img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-0 fw-semibold text-break">word.doc</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">320 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}"><img
                                                    src="{{asset('build/assets/images/media/37.jpg')}}" alt="img"
                                                    class="file-list-manger w-100"></a>
                                            <div class="card-footer">
                                                <div class="d-flex flex-wrap">
                                                    <div>
                                                        <h5 class="mb-0 fw-semibold text-break me-1">mountain.jpg</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">320 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
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
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}" class="mx-auto my-3"><img
                                                    src="{{asset('build/assets/images/pngs/3.png')}}" alt="img" class="filelist-img"></a>
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
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}" class="mx-auto my-3"><img
                                                    src="{{asset('build/assets/images/pngs/5.png')}}" alt="img" class="filelist-img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-0 fw-semibold text-break">profile.ppt</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">67 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}"><img
                                                    src="{{asset('build/assets/images/media/40.jpg')}}" alt="img"
                                                    class="file-list-manger w-100"></a>
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
                                    <div class="col-xl-3 col-md-4 col-sm-4 col-xxl-2">
                                        <div class="card overflow-hidden">
                                            <a href="{{url('file-details')}}" class="mx-auto my-3"><img
                                                    src="{{asset('build/assets/images/pngs/7.png')}}" alt="img" class="filelist-img"></a>
                                            <div class="card-footer">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-0 fw-semibold text-break">exe.zip</h5>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <span class="text-muted mb-0">320 KB</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- END ROW -->

@endsection

@section('scripts')


@endsection