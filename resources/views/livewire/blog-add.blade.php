@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <div class="page-leftheader">
                                <h4 class="page-title mb-0 text-primary">Blog add</h4>
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
                                    <div class="card-header">
                                        <div class="card-title">Add New Post</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <label class="col-md-3 form-label">Post Title :</label>
                                            <div>
                                                <input type="text" class="form-control" value="Typing.....">
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label class="col-md-3 form-label">Categories :</label>
                                            <div>
                                                <select name="country" class="form-control form-select select2"
                                                    data-bs-placeholder="Select Country">
                                                    <option value="br">Technology</option>
                                                    <option value="cz">Travel</option>
                                                    <option value="de">Food</option>
                                                    <option value="pl">Fashion</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Row -->
                                        <div>
                                            <label class="col-md-3 form-label mb-4">Post Description :</label>
                                            <textarea class="content" name="example"></textarea>
                                        </div>
                                        <!--End Row-->

                                        <div class="form-group mb-0">
                                            <label class="col-md-3 form-label my-4">File Upload :</label>
                                            <input id="demo" type="file" name="files"
                                                accept=".jpg, .png, image/jpeg, image/png" multiple>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="javascript:void(0);" class="btn btn-primary">Post</a>
                                        <a href="javascript:void(0);" class="btn btn-light float-end">Discard</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Recent Posts</div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="d-flex overflow-visible">
                                                <a href="{{url('blog-details')}}" class="card-recent-post cover-image">
                                                    <img src="{{asset('build/assets/images/media/3.jpg')}}" alt="img">
                                                </a>
                                                <div class="ps-3 flex-column">
                                                    <span class="badge bg-danger me-1 mb-1 mt-1">Lifestyle</span>
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
                                                    <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="img">
                                                </a>
                                                <div class="ps-3 flex-column">
                                                    <span class="badge bg-primary me-1 mb-1 mt-1">Business</span>
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
                                                    <img src="{{asset('build/assets/images/media/2.jpg')}}" alt="img">
                                                </a>
                                                <div class="ps-3 flex-column">
                                                    <span class="badge bg-secondary me-1 mb-1 mt-1">Travel</span>
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
                                                    <span class="badge bg-success me-1 mb-1 mt-1">Meeting</span>
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
                                        <div class="card-title">Professional Blog Writers</div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div
                                                class="d-flex justify-content-center align-content-center overflow-visible">
                                                <img class="avatar br-5 avatar-xl me-3"
                                                    src="{{asset('build/assets/images/users/6.jpg')}}" alt="avatar-img">
                                                <div class="media-body valign-middle">
                                                    <a href="{{url('profile3')}}" class="fw-bold text-dark">John Paige</a>
                                                    <p class="text-muted mb-0">There are many Lorem ipsum dolor sit
                                                        amet.variations of passages of
                                                        Lorem Ipsum available ...</p>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-5">
                                                <img class="avatar br-5 avatar-xl me-3"
                                                    src="{{asset('build/assets/images/users/9.jpg')}}" alt="avatar-img">
                                                <div class="media-body valign-middle">
                                                    <a href="{{url('profile3')}}" class="fw-bold text-dark">Peter Hill</a>
                                                    <p class="text-muted mb-0">There are many Lorem ipsum dolor sit amet
                                                        consectetur.variations of passages of
                                                        Lorem Ipsum available ...</p>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-5">
                                                <img class="avatar br-5 avatar-xl me-3"
                                                    src="{{asset('build/assets/images/users/11.jpg')}}" alt="avatar-img">
                                                <div class="media-body valign-middle">
                                                    <a href="{{url('profile3')}}" class="fw-bold text-dark">Irene Harris</a>
                                                    <p class="text-muted mb-0">There are many Lorem ipsum dolor, sit
                                                        amet
                                                        consectetur adipisicing.variations of passages of
                                                        Lorem Ipsum available ...</p>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-5">
                                                <img class="avatar br-5 avatar-xl me-3"
                                                    src="{{asset('build/assets/images/users/16.jpg')}}" alt="avatar-img">
                                                <div class="media-body valign-middle">
                                                    <a href="{{url('profile3')}}" class="fw-bold text-dark">Harry Fisher</a>
                                                    <p class="text-muted mb-0">There are many Lorem ipsum dolor sit amet
                                                        consectetur adipisicing elit. Saepe.variations of passages of
                                                        Lorem Ipsum available ...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW CLOSED -->

@endsection

@section('scripts')

        <!-- INTERNAL WYSIWYG EDITOR JS -->
        <script src="{{asset('build/assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
        @vite('resources/assets/js/form-editor.js')
        

        <!-- INTERNAL FILE-UPLOADS JS -->
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

        <!--INTERNAL SELECT2 JS  -->
        <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
        @vite('resources/assets/js/select2.js')

    
@endsection