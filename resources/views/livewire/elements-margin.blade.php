@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Margins</h4>
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
                                            <div class="card-title">Margin Positions</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="w-9 h-9 bg-light">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light">

                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light ms-4">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light">
                                                        .ms-4
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light ms-7">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light">
                                                        .ms-7
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 table-responsive">
                                                <table class="table table-bordered border-top text-nowrap mt-4 mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-30p">Class</th>
                                                            <th class="wd-70p">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code class="pd-0">class="m-1"</code></td>
                                                            <td>Add Margin all sides to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="ms-1"</code></td>
                                                            <td>Add Margin left side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="me-1"</code></td>
                                                            <td>Add Margin right side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="mt-1"</code></td>
                                                            <td>Add Margin top side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="mb-1"</code></td>
                                                            <td>Add Margin bottom side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="mx-1"</code></td>
                                                            <td>Add Margin horizonatl sides to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="my-1"</code></td>
                                                            <td>Add Margin vertical sides to element.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Margin values</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="mt-3 table-responsive">
                                                <table class="table table-bordered border-top text-nowrap mb-0 mg-t-10">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-30p">Class</th>
                                                            <th class="wd-70p">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code class="pd-0">class="m-1"</code></td>
                                                            <td>Add margin m-1 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="m-2"</code></td>
                                                            <td>Add margin m-2 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="m-3"</code></td>
                                                            <td>Add margin m-3 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="m-4"</code></td>
                                                            <td>Add margin m-4 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="m-5"</code></td>
                                                            <td>Add margin m-5 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="m-6"</code></td>
                                                            <td>Add margin m-6 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="m-7"</code></td>
                                                            <td>Add margin m-7 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="m-8"</code></td>
                                                            <td>Add margin m-8 to element.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Remove Margin</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="mt-3 table-responsive">
                                                <table class="table table-bordered border-top text-nowrap mb-0 mg-t-10">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-30p">Class</th>
                                                            <th class="wd-70p">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code class="pd-0">class="m-0"</code></td>
                                                            <td>Remove margin all sides to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="ms-0"</code></td>
                                                            <td>Remove margin left side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="me-0"</code></td>
                                                            <td>Remove margin right side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="mt-0"</code></td>
                                                            <td>Remove margin top side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="mb-0"</code></td>
                                                            <td>Remove margin bottom side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="mx-0"</code></td>
                                                            <td>Remove margin horizonatl sides to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="my-0"</code></td>
                                                            <td>Remove margin vertical sides to element.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Media Query margins</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="mt-3 table-responsive">
                                                <table class="table table-bordered border-top text-nowrap mg-t-0 mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-30p">Class</th>
                                                            <th class="wd-70p">Value</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <code class="pd-0 bg-light mb-1">.mt-[size]-[value]</code>
                                                                <code class="pd-0 bg-light mb-1">.mb-[size]-[value]</code>
                                                                <code class="pd-0 bg-light mb-1">.me-[size]-[value]</code>
                                                                <code class="pd-0 bg-light mb-1">.ms-[size]-[value]</code>
                                                            <td>
                                                                <p class="mg-b-5">size: xs | sm | md | lg | xl | xxl</p>
                                                                <p class="mg-b-0">value: the padding value (refer to code
                                                                    above)
                                                                </p>
                                                            </td>
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