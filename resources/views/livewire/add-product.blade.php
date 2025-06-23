@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Add products</h4>
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

                            <!-- ROW OPEN -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Add New Product</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Product Name :</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="Product Name">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Price :</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Categories :</label>
                                                <div class="col-md-9">
                                                    <select name="country" class="form-control form-select select2"
                                                        data-bs-placeholder="Select Country">
                                                        <option value="br">Electronics</option>
                                                        <option value="cz">Fashion</option>
                                                        <option value="de">Home Decor</option>
                                                        <option value="pl">Furniture</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Row -->
                                            <div class="row">
                                                <label class="col-md-3 form-label mb-4">Product Description :</label>
                                                <div class="col-md-9 mb-4">
                                                    <textarea class="content" name="example"></textarea>
                                                </div>
                                            </div>
                                            <!--End Row-->

                                            <!--Row-->
                                            <div class="row">
                                                <label class="col-md-3 form-label mb-4">Product Upload :</label>
                                                <div class="col-md-9">
                                                    <input id="demo" type="file" name="files"
                                                        accept=".jpg, .png, image/jpeg, image/png" multiple>
                                                </div>
                                            </div>
                                            <!--End Row-->
                                        </div>
                                        <div class="card-footer">
                                            <!--Row-->
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-9">
                                                    <a href="javascript:void(0);" class="btn btn-primary">Add Product</a>
                                                    <a href="javascript:void(0);" class="btn btn-light float-end">Discard</a>
                                                </div>
                                            </div>
                                            <!--End Row-->
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
        

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
        @vite('resources/assets/js/select2.js')


        <!-- INTERNAL FILE-UPLOADS JS -->
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

@endsection