@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Heights</h4>
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
                                            <div class="card-title">
                                                Height Values
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div
                                                    class="d-flex align-items-center justify-content-center w-150 h-5 bg-gray-100">
                                                    .h-5
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-center w-150 h-9 bg-gray-100 ms-4">
                                                    .h-9
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-center w-150 h-200 bg-gray-100 ms-4">
                                                    .h-200
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <table class="table table-bordered text-nowrap mt-4">
                                                    <tbody>
                                                        <tr>
                                                            <td class="w-20"><b>Classes</b></td>
                                                            <td><code>.h-[value]</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-20"><b>Values</b></td>
                                                            <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="mt-3 table-responsive">
                                                <table class="table table-bordered text-nowrap mt-4 mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td class="w-20"><b>Classes</b></td>
                                                            <td><code>.h-[value]</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-20"><b>Values</b></td>
                                                            <td>100h | 150 | 200 | 250 | 300 | ... | 500 &nbsp; (step of 50)
                                                                Bigger Height</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="mt-3 table-responsive">
                                                <table class="table table-bordered text-nowrap mt-4 mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td class="w-20"><b>Classes</b></td>
                                                            <td><code>.h-[value]</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-20"><b>Values</b></td>
                                                            <td>10 | 15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5) %
                                                                Percentage Height</td>
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