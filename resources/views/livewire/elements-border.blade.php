@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Borders</h4>
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
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Set Border</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap">
                                                <div class="w-9 h-9 border m-2 bg-light2"></div>
                                                <div class="w-9 h-9 border-start m-2 bg-light2"></div>
                                                <div class="w-9 h-9 border-end m-2 bg-light2"></div>
                                                <div class="w-9 h-9 border-bottom m-2 bg-light2"></div>
                                                <div class="w-9 h-9 border-top m-2 bg-light2"></div>
                                                <div class="w-9 h-9 border-top-bottom m-2 bg-light2"></div>
                                                <div class="w-9 h-9 border-start-right m-2 bg-light2"></div>
                                            </div>
                                            <div class="table-responsive mt-5">
                                                <table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-30p">Class</th>
                                                            <th class="wd-70p">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code class="pd-0">class="border"</code></td>
                                                            <td>Add border in all sides of an element using default color
                                                                and
                                                                width.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-start"</code></td>
                                                            <td>Add border to left side of element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-end"</code></td>
                                                            <td>Add border to right side of element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-bottom"</code></td>
                                                            <td>Add border to bottom side of element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-top"</code></td>
                                                            <td>Add border to top side of element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-top-bottom"</code></td>
                                                            <td>Add border to top and bottom side of element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-start-right"</code></td>
                                                            <td>Add border to left and right side of element.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Border Width</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap">
                                                <div class="w-9 h-9 border m-2 bg-light2 border-wd-1"></div>
                                                <div class="w-9 h-9 border m-2 bg-light2 border-wd-2"></div>
                                                <div class="w-9 h-9 border m-2 bg-light2 border-wd-3"></div>
                                                <div class="w-9 h-9 border m-2 bg-light2 border-wd-4"></div>
                                                <div class="w-9 h-9 border m-2 bg-light2 border-wd-5"></div>
                                            </div>
                                            <div class="table-responsive mt-5">
                                                <table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-30p">Class</th>
                                                            <th class="wd-70p">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-wd-1"</code></td>
                                                            <td>Set 1px border to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-wd-2"</code></td>
                                                            <td>Set 2px border to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-wd-3"</code></td>
                                                            <td>Set 3px border to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-wd-4"</code></td>
                                                            <td>Set 4px border to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-wd-5"</code></td>
                                                            <td>Set 5px border to element.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Border Color</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap">
                                                <div class="w-9 h-9 border m-2 bg-light2 border-primary border-wd-2"></div>
                                                <div class="w-9 h-9 border m-2 bg-light2 border-secondary border-wd-2">
                                                </div>
                                                <div class="w-9 h-9 border m-2 bg-light2 border-info border-wd-2"></div>
                                                <div class="w-9 h-9 border m-2 bg-light2 border-success border-wd-2"></div>
                                                <div class="w-9 h-9 border m-2 bg-light2 border-warning border-wd-2"></div>
                                                <div class="w-9 h-9 border m-2 bg-light2 border-danger border-wd-2"></div>
                                                <div class="w-9 h-9 border m-2 bg-light2 border-light border-wd-2"></div>
                                                <div class="w-9 h-9 border m-2 bg-light2 border-dark border-wd-2"></div>	
                                            </div>
                                            <div class="table-responsive mt-5">
                                                <table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-30p">Class</th>
                                                            <th class="wd-70p">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-primary"</code></td>
                                                            <td>Set Border Color primary to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-secondary"</code></td>
                                                            <td>Set Border Color secondary to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-info"</code></td>
                                                            <td>Set Border Color info to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-success"</code></td>
                                                            <td>Set Border Color success to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-warning"</code></td>
                                                            <td>Set Border Color warning to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-danger"</code></td>
                                                            <td>Set Border Color danger to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-light"</code></td>
                                                            <td>Set Border Color light to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-dark"</code></td>
                                                            <td>Set Border Color dark to element.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Remove Border</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap">
                                                <div class="w-9 h-9 border-0 m-2 bg-light2"></div>
                                                <div class="w-9 h-9 border border-start-0 m-2 bg-light2"></div>
                                                <div class="w-9 h-9 border border-end-0 m-2 bg-light2"></div>
                                                <div class="w-9 h-9 border border-bottom-0 m-2 bg-light2"></div>
                                                <div class="w-9 h-9 border border-top-0 m-2 bg-light2"></div>
                                                <div class="w-9 h-9 border border-top-bottom-0 m-2 bg-light2"></div>
                                                <div class="w-9 h-9 border border-start-right-0 m-2 bg-light2"></div>
                                            </div>
                                            <div class="table-responsive mt-5">
                                                <table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-30p">Class</th>
                                                            <th class="wd-70p">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-0"</code></td>
                                                            <td>Remove border in all sides of an element using default color
                                                                and
                                                                width.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-start-0"</code></td>
                                                            <td>Remove border to left side of element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-end-0"</code></td>
                                                            <td>Remove border to right side of element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-bottom-0"</code></td>
                                                            <td>Remove border to bottom side of element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-top-0"</code></td>
                                                            <td>Remove border to top side of element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-top-bottom-0"</code></td>
                                                            <td>Remove border to top and bottom side of element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="border-start-right-0"</code></td>
                                                            <td>Remove border to left and right side of element.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')


@endsection