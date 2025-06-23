@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Edit Invoice</h4>
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
                                        <div class="card-header">
                                            <div class="card-title text-primary">Edit Invoice</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-5 mb-2">
                                                            <label class="form-label">Invoice Title</label>
                                                            <input class="form-control" placeholder="Invoice title"
                                                                value="Invoice">
                                                        </div>
                                                        <div class="col-md-5 mb-2">
                                                            <label class="form-label">Payment Number</label>
                                                            <input class="form-control" placeholder="Payment Number"
                                                                value="23543">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="form-label">Payment Date</label>
                                                            <input class="form-control" type="number" value=""
                                                                placeholder="dd-mm-yy">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6 mb-2">
                                                            <label class="form-label">Bill To</label>
                                                            <textarea class="form-control" rows="4"
                                                                placeholder="Bill To">Street Address, State, City, Region, Postal Code, ctr@example.com</textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label">Subject</label>
                                                            <textarea class="form-control" placeholder="Subject of Invoice"
                                                                rows="4">Hi Patrenna Allen,This is the receipt for a payment of $450.00 (USD) for your works</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table nowrap text-nowrap border mt-5">
                                                    <thead>
                                                        <tr>
                                                            <th>PRODUCT</th>
                                                            <th class="w-40">DESCRIPTION</th>
                                                            <th>QNTY</th>
                                                            <th>UNIT PRICE</th>
                                                            <th>AMOUNT</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-control" placeholder="" type="text"
                                                                    value="Logo Creation"></td>
                                                            <td><textarea rows="1"
                                                                    class="form-control">Logo and business cards design</textarea>
                                                            </td>
                                                            <td><input class="form-control" placeholder="" type="text"
                                                                    value="2"></td>
                                                            <td><input class="form-control" placeholder="" type="text"
                                                                    value="$60.00"></td>
                                                            <td><input class="form-control" placeholder="" type="text"
                                                                    value="$120.00"></td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td><a class="btn btn-light" href="javascript:void(0);"><i
                                                                        class="fe fe-plus"></i> Add Product</a></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <label class="form-label">Vat Rate</label>
                                                    <input class="form-control" placeholder="Vat Rate" type="text"
                                                        value="20%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <a class="btn btn-success" href="javascript:void(0);">Save</a>
                                                    <a class="btn btn-secondary" href="javascript:void(0);">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')


@endsection