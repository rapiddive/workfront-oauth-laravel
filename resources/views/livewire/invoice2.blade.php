@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Invoice 2</h4>
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
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="invoice-header text-end d-block mb-5">
                                                <h1 class="invoice-title font-weight-bold text-uppercase mb-1 text-primary">
                                                    Invoice</h1>

                                            </div><!-- invoice-header -->
                                            <div class="row mt-4">
                                                <div class="col-md">
                                                    <label class="font-weight-bold">Billed To</label>
                                                    <div class="billed-to">
                                                        <h6>Goerge</h6>
                                                        <p>2406 Raoul Wallenberg Place<br>
                                                            Tel No: 203-875-4147<br>
                                                            Email: goerge234@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="billed-from text-md-right">
                                                        <label class="font-weight-bold">Billed From</label>
                                                        <h6>Spruko Pvt Ltd.</h6>
                                                        <p>201 Something St., Something Town, YT 242, Country 6546<br>
                                                            Tel No: 324 445-4544<br>
                                                            Email: info@spruko.com</p>
                                                    </div><!-- billed-from -->
                                                </div>
                                            </div>
                                            <div class="table-responsive mt-4">
                                                <table class="table table-bordered border text-nowrap mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-20p">Product</th>
                                                            <th class="tx-center">QNTY</th>
                                                            <th class="tx-right">Unit Price</th>
                                                            <th class="tx-right">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="font-weight-bold">Website design & development</td>
                                                            <td class="tx-center">6</td>
                                                            <td class="tx-right">$250.00</td>
                                                            <td class="tx-right">$1500.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Branding</td>
                                                            <td class="tx-center">1</td>
                                                            <td class="tx-right">$900.00</td>
                                                            <td class="tx-right">$900.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Redesign Service</td>
                                                            <td class="tx-center">1</td>
                                                            <td class="tx-right">$500.00</td>
                                                            <td class="tx-right">$500.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Wordpress Plugins</td>
                                                            <td class="tx-center">5</td>
                                                            <td class="tx-right">$360.00</td>
                                                            <td class="tx-right">$1800.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="valign-middle" colspan="2" rowspan="4">
                                                                <div class="invoice-notes">
                                                                    <label
                                                                        class="main-content-label tx-13 font-weight-semibold">Notes</label>
                                                                    <p> voluptatum deleniti atque corrupti explicabo.</p>
                                                                </div><!-- invoice-notes -->
                                                            </td>
                                                            <td class="tx-right font-weight-semibold">Sub-Total</td>
                                                            <td class="tx-right font-weight-semibold">$4700.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tx-right font-weight-semibold">Tax (5%)</td>
                                                            <td class="tx-right font-weight-semibold">$235.50</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tx-right font-weight-semibold">Discount</td>
                                                            <td class="tx-right font-weight-semibold">-$50.00</td>
                                                        </tr>
                                                        <tr class="text-danger">
                                                            <td class="text-uppercase text-danger font-weight-semibold">Total Due</td>
                                                            <td class="tx-right">
                                                                <h4 class="font-weight-bold text-danger">$4,885.50</h4>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="float-end">
                                                <button type="button" class="btn btn-primary mt-4"
                                                    onClick="javascript:window.print();"><i class="si si-wallet"></i> Pay
                                                    Invoice</button>
                                                <button type="button" class="btn btn-success mt-4"
                                                    onClick="javascript:window.print();"><i class="si si-paper-plane"></i>
                                                    Send
                                                    Invoice</button>
                                                <button type="button" class="btn btn-secondary mt-4"
                                                    onClick="javascript:window.print();"><i class="si si-printer"></i> Print
                                                    Invoice</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')


@endsection