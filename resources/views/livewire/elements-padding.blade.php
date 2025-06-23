@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Padding</h4>
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
                                            <div class="card-title">Padding Positions</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap">
                                                <div class="w-9 h-9 bg-light  my-1 p-1">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .p-1
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light  my-1 ps-1 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .ps-1
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light  my-1 pe-1 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .pe-1
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light  my-1 pt-1 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .pt-1
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light  my-1 pb-1 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .pb-1
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light  my-1 px-1 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .px-1
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light  my-1 py-1 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .py-1
                                                    </div>
                                                </div>
                                            </div>
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
                                                            <td><code class="pd-0">class="p-1"</code></td>
                                                            <td>Add padding all sides to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="ps-1"</code></td>
                                                            <td>Add padding left side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="pe-1"</code></td>
                                                            <td>Add padding right side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="pt-1"</code></td>
                                                            <td>Add padding top side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="pb-1"</code></td>
                                                            <td>Add padding bottom side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="px-1"</code></td>
                                                            <td>Add padding horizonatl sides to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="py-1"</code></td>
                                                            <td>Add padding vertical sides to element.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Padding values</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap">
                                                <div class="w-9 h-9 bg-light my-1 p-1">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .p-1
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light my-1 p-2 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .p-2
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light my-1 p-3 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .p-3
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light my-1 p-4 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .p-4
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light my-1 p-5 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .p-5
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light my-1 p-6 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .p-6
                                                    </div>
                                                </div>
                                            </div>
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
                                                            <td><code class="pd-0">class="p-1"</code></td>
                                                            <td>Add padding p-1 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="p-2"</code></td>
                                                            <td>Add padding p-2 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="p-3"</code></td>
                                                            <td>Add padding p-3 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="p-4"</code></td>
                                                            <td>Add padding p-4 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="p-5"</code></td>
                                                            <td>Add padding p-5 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="p-6"</code></td>
                                                            <td>Add padding p-6 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="p-7"</code></td>
                                                            <td>Add padding p-7 to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="p-8"</code></td>
                                                            <td>Add padding p-8 to element.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Remove Padding</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap">
                                                <div class="w-9 h-9 bg-light my-1 p-0">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .p-0
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light my-1 p-1 ps-0 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .ps-0
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light my-1 p-1 pe-0 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .pe-0
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light my-1 p-1 pt-0 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .pt-0
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light my-1 p-1 pb-0 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .pb-0
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light my-1 p-1 px-0 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .px-0
                                                    </div>
                                                </div>
                                                <div class="w-9 h-9 bg-light my-1 p-1 py-0 ms-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center h-100 bg-light2">
                                                        .py-0
                                                    </div>
                                                </div>
                                            </div>
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
                                                            <td><code class="pd-0">class="p-0"</code></td>
                                                            <td>Remove padding all sides to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="ps-0"</code></td>
                                                            <td>Remove padding left side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="pe-0"</code></td>
                                                            <td>Remove padding right side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="pt-0"</code></td>
                                                            <td>Remove padding top side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="pb-0"</code></td>
                                                            <td>Remove padding bottom side to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="px-0"</code></td>
                                                            <td>Remove padding horizonatl sides to element.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code class="pd-0">class="py-0"</code></td>
                                                            <td>Remove padding vertical sides to element.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Media Query Padding</div>
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
                                                                <code class="pd-0 bg-light mb-1">.pt-[size]-[value]</code>
                                                                <code class="pd-0 bg-light mb-1">.pb-[size]-[value]</code>
                                                                <code class="pd-0 bg-light mb-1">.pe-[size]-[value]</code>
                                                                <code class="pd-0 bg-light mb-1">.ps-[size]-[value]</code>
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