@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Form Editor</h4>
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
                            <div class="row row-cards">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Form Editor style1</h3>
                                        </div>
                                        <div class="card-body">
                                            <textarea class="content" name="example"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Form Editor
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="ql-wrapper ql-wrapper-demo">
                                                <div id="quillEditor">
                                                    <p><strong>Quill</strong> is a free, open source <a
                                                            href="https://github.com/quilljs/quill/">WYSIWYG editor</a>
                                                        built
                                                        for the modern web. With its <a
                                                            href="https://quilljs.com/docs/modules/">modular
                                                            architecture</a>
                                                        and expressive API, it is completely customizable to fit any need.
                                                    </p>
                                                    <br>
                                                    <p>The icons use here as a replacement to default svg icons are from <a
                                                            href="https://icons8.com/line-awesome">Line Awesome Icons</a>.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Form Editor in Modal
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center p-4 bg-light border">
                                                <a class="btn btn-primary" data-bs-target="#modalQuill"
                                                    data-bs-toggle="modal" href="javascript:void(0);">View Live Demo</a>
                                            </div><!-- pd-y-30 -->
                                            <div class="modal">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header pd-20">
                                                            <h6 class="modal-title">Create New Document</h6>
                                                            <button aria-label="Close" class="btn-close"
                                                                data-bs-dismiss="modal" type="button"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body pd-0">
                                                            <div class="ql-wrapper ql-wrapper-modal ht-250">
                                                                <div class="flex-1" id="quillEditorModal">
                                                                    <p><strong>Quill</strong> is a free, open source <a
                                                                            href="https://github.com/quilljs/quill/">WYSIWYG
                                                                            editor</a> built for the modern web. With its <a
                                                                            href="https://quilljs.com/docs/modules/">modular
                                                                            architecture</a> and expressive API, it is
                                                                        completely customizable to fit any need.</p><br>
                                                                    <p>The icons use here as a replacement to default svg
                                                                        icons
                                                                        are from <a
                                                                            href="https://icons8.com/line-awesome">Line
                                                                            Awesome Icons</a>.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer pd-20">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-header">
                                            <div class="card-title">
                                                From Inline-Edit Editor
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="wd-xl-100p ht-350">
                                                <div class="ql-scrolling-demo bg-light p-4 border" id="scrolling-container">
                                                    <div id="quillInline">
                                                        <h2>Try to select me and edit</h2>
                                                        <p><br></p>
                                                        <p>It is a long established fact that a reader will be distracted by
                                                            the
                                                            readable content of a page when looking at its layout. The point
                                                            of
                                                            using Lorem Ipsum is that it has a more-or-less normal
                                                            distribution
                                                            of letters, as opposed to using 'Content here, content here',
                                                            making
                                                            it look like readable English. Many desktop publishing packages
                                                            and
                                                            web page editors now use Lorem Ipsum as their default model
                                                            text,
                                                            and a search for 'lorem ipsum' will uncover many web sites still
                                                            in
                                                            their infancy. Various versions have evolved over the years,
                                                            sometimes by accident, sometimes on purpose (injected humour and
                                                            the
                                                            like</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- MODAL -->
                            <div class="modal" id="modalQuill">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header pd-20">
                                            <h6 class="modal-title">Create New Document</h6><button aria-label="Close" class="btn-close"
                                                data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body pd-0">
                                            <div class="ql-wrapper ql-wrapper-modal ht-250">
                                                <div class="flex-1" id="quillEditorModal2">
                                                    <p><strong>Quill</strong> is a free, open source <a
                                                            href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern
                                                        web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and
                                                        expressive API, it is completely customizable to fit any need.</p><br>
                                                    <p>The icons use here as a replacement to default svg icons are from <a
                                                            href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer pd-20">
                                            <button class="btn btn-primary" type="button">Save changes</button>
                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL -->

@endsection

@section('scripts')

        <!-- INTERNAL WYSIWYG EDITOR JS -->
        <script src="{{asset('build/assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
        @vite('resources/assets/js/form-editor.js')>


        <!-- INTERNAL QUILL JS -->
        <script src="{{asset('build/assets/plugins/quill/quill.min.js')}}"></script>
        @vite('resources/assets/js/form-editor2.js')


@endsection