@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">File attachments</h4>
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

                            <!-- ROW-1 OPEN -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Color Square File_Attachment</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="tags">
                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-primary text-white"><i
                                                            class="mdi mdi-file-image me-2"></i>
                                                        Image_file.jpg
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-close text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-secondary text-white"><i
                                                            class="mdi mdi-file-word me-2"></i>
                                                        Word_file.doc
                                                    </button>
                                                    <button type="button" class="btn btn-secondary  btn-close text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-success text-white">
                                                        <i class="mdi mdi-file-excel me-2"></i>
                                                        Excel_file.xls
                                                    </button>
                                                    <button type="button" class="btn btn-success  btn-close text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-warning text-white">
                                                        <i class="mdi mdi-file-pdf me-2"></i>
                                                        pdf_file.pdf
                                                    </button>
                                                    <button type="button" class="btn btn-warning  btn-close text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-danger text-white"><i
                                                            class="mdi mdi-file-video me-2"></i>
                                                        Video_file.mp4
                                                    </button>
                                                    <button type="button" class="btn btn-danger  btn-close text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-info text-white"><i
                                                            class="mdi mdi-file-music me-2"></i>
                                                        Audio_file.mp3
                                                    </button>
                                                    <button type="button" class="btn btn-info  btn-close text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Color Rounded File_Attachment</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="tags">
                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-primary text-white"><i
                                                            class="mdi mdi-file-image me-2"></i>
                                                        Image_file.jpg
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-pill btn-primary  btn-close text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-secondary text-white"><i
                                                            class="mdi mdi-file-word me-2"></i>
                                                        Word_file.doc
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-pill btn-secondary btn-close text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-success text-white"><i
                                                            class="mdi mdi-file-excel me-2"></i>
                                                        Excel_file.xls
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-pill btn-success btn-close text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-warning text-white"><i
                                                            class="mdi mdi-file-pdf me-2"></i>
                                                        pdf_file.pdf
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-pill btn-warning btn-close text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-danger text-white"><i
                                                            class="mdi mdi-file-video me-2"></i>
                                                        Video_file.mp4
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-pill btn-danger btn-close text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-info text-white"><i
                                                            class="mdi mdi-file-music me-2"></i>
                                                        Audio_file.mp3
                                                    </button>
                                                    <button type="button" class="btn btn-pill btn-info btn-close text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Outline Square File_Attachment</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="tags">
                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-primary"><i
                                                            class="mdi mdi-file-image me-2"></i>
                                                        Image_file.jpg
                                                    </button>
                                                    <button type="button" class="btn btn-close btn-outline-primary text-primary"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-secondary"><i
                                                            class="mdi mdi-file-word me-2"></i>
                                                        Word_file.doc
                                                    </button>
                                                    <button type="button" class="btn btn-close btn-outline-secondary text-secondary"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-success"><i
                                                            class="mdi mdi-file-excel me-2"></i>
                                                        Excel_file.xls
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-close btn-outline-success text-success"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-warning"><i
                                                            class="mdi mdi-file-pdf me-2"></i>
                                                        pdf_file.pdf
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-close btn-outline-warning text-warning"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-danger"><i
                                                            class="mdi mdi-file-video me-2"></i>
                                                        Video_file.mp4
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-close btn-outline-danger text-danger"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-info"><i
                                                            class="mdi mdi-file-music me-2"></i>
                                                        Audio_file.mp3
                                                    </button>
                                                    <button type="button" class="btn btn-close btn-outline-info text-info"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Outline Rounded File_Attachment</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="tags">
                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-outline-primary"><i
                                                            class="mdi mdi-file-image me-2"></i>
                                                        Image_file.jpg
                                                    </button>
                                                    <button type="button" class="btn btn-close btn-pill btn-outline-primary text-primary"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-outline-secondary"><i
                                                            class="mdi mdi-file-word me-2"></i>
                                                        Word_file.doc
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-close btn-pill btn-outline-secondary text-secondary"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-outline-success"><i
                                                            class="mdi mdi-file-excel me-2"></i>
                                                        Excel_file.xls
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-close btn-pill btn-outline-success text-success"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-outline-warning"><i
                                                            class="mdi mdi-file-pdf me-2"></i>
                                                        pdf_file.pdf
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-close btn-pill btn-outline-warning text-warning"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-outline-danger"><i
                                                            class="mdi mdi-file-video me-2"></i>
                                                        Video_file.mp4
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-close btn-pill btn-outline-danger text-danger"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-outline-info"><i
                                                            class="mdi mdi-file-music me-2"></i>
                                                        Audio_file.mp3
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-close btn-pill btn-outline-info text-info"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Transparent Square File_Attachment</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="tags">
                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn bg-primary-transparent"><i
                                                            class="mdi mdi-file-image me-2"></i>
                                                        Image_file.jpg
                                                    </button>
                                                    <button type="button" class="btn btn-close bg-primary-transparent"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn bg-secondary-transparent"><i
                                                            class="mdi mdi-file-word me-2"></i>
                                                        Word_file.doc
                                                    </button>
                                                    <button type="button" class="btn btn-close  bg-secondary-transparent"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn bg-success-transparent"><i
                                                            class="mdi mdi-file-excel me-2"></i>
                                                        Excel_file.xls
                                                    </button>
                                                    <button type="button" class="btn btn-close bg-success-transparent"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn bg-warning-transparent"><i
                                                            class="mdi mdi-file-pdf me-2"></i>
                                                        pdf_file.pdf
                                                    </button>
                                                    <button type="button" class="btn btn-close  bg-warning-transparent"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn bg-danger-transparent"><i
                                                            class="mdi mdi-file-video me-2"></i>
                                                        Video_file.mp4
                                                    </button>
                                                    <button type="button" class="btn btn-close bg-danger-transparent"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn bg-info-transparent"><i
                                                            class="mdi mdi-file-music me-2"></i>
                                                        Audio_file.mp3
                                                    </button>
                                                    <button type="button" class="btn btn-close bg-info-transparent"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Transparent Rounded File_Attachment</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="tags">
                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn bg-primary-transparent btn-pill"><i
                                                            class="mdi mdi-file-image me-2"></i>
                                                        Image_file.jpg </button>
                                                    <button type="button"
                                                        class="btn btn-close bg-primary-transparent btn-pill"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn bg-secondary-transparent btn-pill"><i
                                                            class="mdi mdi-file-word me-2"></i>
                                                        Word_file.doc
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-close bg-secondary-transparent btn-pill"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn bg-success-transparent btn-pill"><i
                                                            class="mdi mdi-file-excel me-2"></i>
                                                        Excel_file.xls
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-close bg-success-transparent btn-pill"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn bg-warning-transparent btn-pill"><i
                                                            class="mdi mdi-file-pdf me-2"></i>
                                                        pdf_file.pdf
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-close bg-warning-transparent btn-pill"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn bg-danger-transparent btn-pill"><i
                                                            class="mdi mdi-file-video me-2"></i>
                                                        Video_file.mp4
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-close bg-danger-transparent btn-pill"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn bg-info-transparent btn-pill"><i
                                                            class="mdi mdi-file-music me-2"></i>
                                                        Audio_file.mp3
                                                    </button>
                                                    <button type="button" class="btn btn-close bg-info-transparent btn-pill"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Square File_Attachment with link</h3>
                                        </div>
                                        <div class="card-body p-4 p-sm-5">
                                            <p>Square File_Attachment with <code class="highlighter-rouge">&lt;a&gt;</code>
                                                tag.
                                            </p>
                                            <div class="tags">
                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <a role="button" class="btn btn-primary text-white"><i
                                                            class="mdi mdi-file-image mx-2"></i>Image01..._jpg</a>
                                                    <a role="button" class="btn btn-close btn-primary text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <a role="button" class="btn btn-outline-secondary text-secondary"><i
                                                            class="mdi mdi-file-image me-2"></i>
                                                        Image_file.jpg </a>
                                                        <a role="button"
                                                            class="btn btn-close btn-outline-secondary text-secondary"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </a>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <a role="button" class="btn bg-success-transparent"><i
                                                            class="mdi mdi-file-image me-2"></i> Image_file.jpg </a>
                                                    <a role="button" class="btn btn-close bg-success-transparent"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Rounded File_Attachment with link</h3>
                                        </div>
                                        <div class="card-body p-4 p-sm-5">
                                            <p>Rounded File_Attachment with <code class="highlighter-rouge">&lt;a&gt;</code>
                                                tag.</p>
                                            <div class="tags">
                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <a role="button" class="btn btn-pill btn-info text-white"><i
                                                            class="mdi mdi-file-image mx-2"></i>Image01..._jpg</a>
                                                    <a role="button" class="btn btn-close btn-pill btn-info text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <a role="button"
                                                        class="btn btn-pill btn-outline-warning text-warning"><i
                                                            class="mdi mdi-file-image me-2"></i>
                                                        Image_file.jpg </a>
                                                        <a role="button"
                                                            class="btn btn-close btn-pill btn-outline-warning text-warning"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </a>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <a role="button" class="btn btn-pill bg-danger-transparent"><i
                                                            class="mdi mdi-file-image me-2"></i> Image_file.jpg
                                                    </a>
                                                    <a role="button" class="btn btn-close btn-pill bg-danger-transparent"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Square File Attachment Sizes</h3>
                                        </div>
                                        <div class="card-body p-4 p-sm-5">
                                            <div class="tags">
                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-sm btn-primary text-white"><i
                                                            class="mdi mdi-file-image mx-2"></i>Image01..._jpg</button>
                                                    <button type="button"
                                                        class="btn btn-close btn-sm btn-primary text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button class="btn btn-secondary text-white"><i
                                                            class="mdi mdi-file-excel me-2"></i>Document.exl</button>
                                                    <button class="btn btn-close btn-secondary text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-lg btn-pink"><i
                                                            class="mdi mdi-file-pdf fs-20 me-2"></i>AMN0012.pdf</button>
                                                    <button type="button" class="btn btn-close btn-lg btn-pink text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Rounded File Attachment Sizes</h3>
                                        </div>
                                        <div class="card-body p-4 p-sm-5">
                                            <div class="tags">
                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button"
                                                        class="btn btn-pill btn-sm btn-primary text-white"><i
                                                            class="mdi mdi-file-image mx-2"></i>Image01..._jpg</button>
                                                    <button type="button"
                                                        class="btn btn-close btn-pill btn-sm btn-primary text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-secondary"><i
                                                            class="mdi mdi-file-excel me-2"></i>Document.exl</button>
                                                    <button type="button"
                                                        class="btn btn-pill btn-close btn-secondary text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <button type="button" class="btn btn-pill btn-lg btn-pink"><i
                                                            class="mdi mdi-file-pdf fs-20 me-2"></i>AMN0012.pdf</button>
                                                    <button type="button"
                                                        class="btn btn-close btn-pill btn-lg btn-pink text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Square File Attachment Sizes with link</h3>
                                        </div>
                                        <div class="card-body p-4 p-sm-5">
                                            <p>Square File_Attachment Sizes with <code
                                                    class="highlighter-rouge">&lt;a&gt;</code> tag.</p>
                                            <div class="tags">
                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <a class="btn btn-sm btn-primary text-white"><i
                                                            class="mdi mdi-file-image mx-2"></i>Image01..._jpg</a>
                                                    <a class="btn btn-close btn-sm btn-primary text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <a class="btn btn-secondary text-white"><i
                                                            class="mdi mdi-file-excel me-2"></i>Document.exl</a>
                                                    <a class="btn btn-close btn-secondary text-white" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <a class="btn btn-lg btn-pink text-white"><i
                                                            class="mdi mdi-file-pdf fs-20 me-2"></i>AMN0012.pdf</a>
                                                    <a class="btn btn-close btn-lg btn-pink text-white" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card custom-card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Rounded File Attachment Sizes with link</h3>
                                        </div>
                                        <div class="card-body p-4 p-sm-5">
                                            <p>Rounded File_Attachment Sizes with <code
                                                    class="highlighter-rouge">&lt;a&gt;</code> tag.</p>
                                            <div class="tags">
                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <a class="btn btn-pill btn-sm btn-primary text-white"><i
                                                            class="mdi mdi-file-image mx-2"></i>Image01..._jpg</a>
                                                    <a class="btn btn-close btn-pill btn-sm btn-primary text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <a class="btn btn-pill btn-secondary text-white"><i
                                                            class="mdi mdi-file-excel me-2"></i>Document.exl</a>
                                                    <a class="btn btn-close btn-pill btn-secondary text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>

                                                <div class="btn-group file-attach m-2" role="group"
                                                    aria-label="Basic example">
                                                    <a class="btn btn-pill btn-lg btn-pink text-white"><i
                                                            class="mdi mdi-file-pdf fs-20 me-2"></i>AMN0012.pdf</a>
                                                    <a class="btn btn-close btn-pill btn-lg btn-pink text-white"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-1 CLOSED -->

                            <!-- ROW-2 OPEN -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Image File_Attachment</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                                                            <div class="file-image p-2">
                                                                <a href="{{url('file-details')}}">
                                                                    <img src="{{asset('build/assets/images/media/49.jpg')}}" alt=""
                                                                        class="w-100 br-5">
                                                                </a>
                                                                <ul class=" icons">
                                                                    <li><a href="javascript:void(0);"
                                                                            class="btn bg-danger"><i
                                                                                class="fe fe-trash"></i></a></li>
                                                                    <li><a href="javascript:void(0);"
                                                                            class="btn bg-secondary"><i
                                                                                class="fe fe-download"></i></a></li>
                                                                    <li><a href="{{url('file-details')}}"
                                                                            class="btn bg-primary"><i
                                                                                class="fe fe-eye"></i></a>
                                                                    </li>
                                                                </ul>
                                                                <a href="javascript:void(0);"><span
                                                                        class="file-name">Image01.jpg</span></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                                                            <div class="file-image p-2">
                                                                <a href="{{url('file-details')}}">
                                                                    <img src="{{asset('build/assets/images/media/45.jpg')}}" alt=""
                                                                        class="w-100 br-5">
                                                                </a>
                                                                <ul class="icons">
                                                                    <li><a href="javascript:void(0);"
                                                                            class="btn bg-danger"><i
                                                                                class="fe fe-trash"></i></a></li>
                                                                    <li><a href="javascript:void(0);"
                                                                            class="btn bg-secondary"><i
                                                                                class="fe fe-download"></i></a></li>
                                                                    <li><a href="{{url('file-details')}}"
                                                                            class="btn bg-primary"><i
                                                                                class="fe fe-eye"></i></a>
                                                                    </li>
                                                                </ul>
                                                                <a href="javascript:void(0);"><span
                                                                        class="file-name">Image02.jpg</span></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                                                            <div class="file-image p-2">
                                                                <a href="{{url('file-details')}}">
                                                                    <img src="{{asset('build/assets/images/media/46.jpg')}}" alt=""
                                                                        class="w-100 br-5">
                                                                </a>
                                                                <ul class="icons">
                                                                    <li><a href="javascript:void(0);"
                                                                            class="btn bg-danger"><i
                                                                                class="fe fe-trash"></i></a></li>
                                                                    <li><a href="javascript:void(0);"
                                                                            class="btn bg-secondary"><i
                                                                                class="fe fe-download"></i></a></li>
                                                                    <li><a href="{{url('file-details')}}"
                                                                            class="btn bg-primary"><i
                                                                                class="fe fe-eye"></i></a>
                                                                    </li>
                                                                </ul>
                                                                <a href="javascript:void(0);"><span
                                                                        class="file-name">Image03.jpg</span></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                                                            <div class="file-image p-2">
                                                                <a href="{{url('file-details')}}">
                                                                    <img src="{{asset('build/assets/images/media/47.jpg')}}" alt=""
                                                                        class="w-100 br-5">
                                                                </a>
                                                                <ul class="icons">
                                                                    <li><a href="javascript:void(0);"
                                                                            class="btn bg-danger"><i
                                                                                class="fe fe-trash"></i></a></li>
                                                                    <li><a href="javascript:void(0);"
                                                                            class="btn bg-secondary"><i
                                                                                class="fe fe-download"></i></a></li>
                                                                    <li><a href="{{url('file-details')}}"
                                                                            class="btn bg-primary"><i
                                                                                class="fe fe-eye"></i></a>
                                                                    </li>
                                                                </ul>
                                                                <a href="javascript:void(0);"><span
                                                                        class="file-name">Image04</span></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                                                            <div class="file-image p-2">
                                                                <a href="{{url('file-details')}}">
                                                                    <img src="{{asset('build/assets/images/media/48.jpg')}}" alt=""
                                                                        class="w-100 br-5">
                                                                </a>
                                                                <ul class="icons">
                                                                    <li><a href="javascript:void(0);"
                                                                            class="btn bg-danger"><i
                                                                                class="fe fe-trash"></i></a></li>
                                                                    <li><a href="javascript:void(0);"
                                                                            class="btn bg-secondary"><i
                                                                                class="fe fe-download"></i></a></li>
                                                                    <li><a href="{{url('file-details')}}"
                                                                            class="btn bg-primary"><i
                                                                                class="fe fe-eye"></i></a>
                                                                    </li>
                                                                </ul>
                                                                <a href="javascript:void(0);"><span
                                                                        class="file-name">Image05.jpg</span></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                                                            <div class="file-image p-2">
                                                                <a href="{{url('file-details')}}">
                                                                    <img src="{{asset('build/assets/images/media/44.jpg')}}" alt=""
                                                                        class="w-100 br-5">
                                                                </a>
                                                                <ul class="icons">
                                                                    <li><a href="javascript:void(0);"
                                                                            class="btn bg-danger"><i
                                                                                class="fe fe-trash"></i></a></li>
                                                                    <li><a href="javascript:void(0);"
                                                                            class="btn bg-secondary"><i
                                                                                class="fe fe-download"></i></a></li>
                                                                    <li><a href="{{url('file-details')}}"
                                                                            class="btn bg-primary"><i
                                                                                class="fe fe-eye"></i></a>
                                                                    </li>
                                                                </ul>
                                                                <a href="javascript:void(0);"><span
                                                                        class="file-name">Image06.jpg</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-2 CLOSED -->

                            <!-- ROW-3 OPEN -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Image File_Attachment Small Size</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <div class="file-image-1 file-images-noraml">
                                                    <a href="{{url('file-details')}}">
                                                        <img src="{{asset('build/assets/images/media/49.jpg')}}" class="br-5" alt="">
                                                    </a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Image01.jpg</span>
                                                </div>
                                                <div class="file-image-1 file-images-noraml">
                                                    <a href="{{url('file-details')}}"><img
                                                            src="{{asset('build/assets/images/pngs/1.png')}}" alt=""></a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Word.doc</span>
                                                </div>
                                                <div class="file-image-1 file-images-noraml">
                                                    <a href="{{url('file-details')}}"><img
                                                            src="{{asset('build/assets/images/pngs/3.png')}}" alt=""></a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Excel.xls</span>
                                                </div>
                                                <div class="file-image-1 file-images-noraml">
                                                    <a href="{{url('file-details')}}"><img
                                                            src="{{asset('build/assets/images/pngs/2.png')}}" alt=""></a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Document.pdf</span>
                                                </div>
                                                <div class="file-image-1 file-images-noraml">
                                                    <a href="{{url('file-details')}}">
                                                        <img src="{{asset('build/assets/images/pngs/8.png')}}" class="br-5"
                                                            alt="">
                                                    </a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Image02.jpg</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-3 CLOSED -->

                            <!-- ROW-4 OPEN -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Image File_Attachment Medium Size</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <div class="file-image-1 file-images-md">
                                                    <a href="{{url('file-details')}}">
                                                        <img src="{{asset('build/assets/images/media/49.jpg')}}" class="br-5" alt="">
                                                    </a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Image01.jpg</span>
                                                </div>
                                                <div class="file-image-1 file-images-md">
                                                    <a href="{{url('file-details')}}"><img
                                                            src="{{asset('build/assets/images/pngs/1.png')}}" alt=""></a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Word.doc</span>
                                                </div>
                                                <div class="file-image-1 file-images-md">
                                                    <a href="{{url('file-details')}}"><img
                                                            src="{{asset('build/assets/images/pngs/3.png')}}" alt=""></a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Excel.xls</span>
                                                </div>
                                                <div class="file-image-1 file-images-md">
                                                    <a href="{{url('file-details')}}"><img
                                                            src="{{asset('build/assets/images/pngs/2.png')}}" alt=""></a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Document.pdf</span>
                                                </div>
                                                <div class="file-image-1 file-images-md">
                                                    <a href="{{url('file-details')}}">
                                                        <img src="{{asset('build/assets/images/pngs/8.png')}}" class="br-5"
                                                            alt="">
                                                    </a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Image02.jpg</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-4 CLOSED -->

                            <!-- ROW-5 OPEN -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Image File_Attachment Large Size</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <div class="file-image-1 file-images-lg">
                                                    <a href="{{url('file-details')}}">
                                                        <img src="{{asset('build/assets/images/media/49.jpg')}}" class="br-5" alt="">
                                                    </a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Image01.jpg</span>
                                                </div>
                                                <div class="file-image-1 file-images-lg">
                                                    <a href="{{url('file-details')}}"><img
                                                            src="{{asset('build/assets/images/pngs/1.png')}}" alt=""></a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Word.doc</span>
                                                </div>
                                                <div class="file-image-1 file-images-lg">
                                                    <a href="{{url('file-details')}}"><img
                                                            src="{{asset('build/assets/images/pngs/3.png')}}" alt=""></a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Excel.xls</span>
                                                </div>
                                                <div class="file-image-1 file-images-lg">
                                                    <a href="{{url('file-details')}}"><img
                                                            src="{{asset('build/assets/images/pngs/2.png')}}" alt=""></a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Document.pdf</span>
                                                </div>
                                                <div class="file-image-1 file-images-lg">
                                                    <a href="{{url('file-details')}}">
                                                        <img src="{{asset('build/assets/images/pngs/8.png')}}" class="br-5"
                                                            alt="">
                                                    </a>
                                                    <ul class="icons">
                                                        <li><a href="javascript:void(0);" class="btn bg-danger"><i
                                                                    class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0);" class="btn bg-secondary"><i
                                                                    class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn bg-primary"><i
                                                                    class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Image02.jpg</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-5 CLOSED -->

@endsection

@section('scripts')

        <!-- OWL CAROUSEL JS -->
        <script src="{{asset('build/assets/plugins/owl-carousel/owl.carousel.js')}}"></script>

        <!-- OWL CAROUSEL JS -->
        <script src="{{asset('build/assets/plugins/owl-carousel/carousel.js')}}"></script>

@endsection