@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Tables</h4>
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
                            <!-- END PAGE-HEADER -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Basic Table</h3>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table card-table table-vcenter text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>Samantha May</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>$43,198</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- table-responsive -->
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Striped Rows</h3>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped card-table table-vcenter text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>Samantha May</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>$43,198</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- bd -->
                                        </div><!-- bd -->
                                    </div><!-- bd -->

                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Bordered Table</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered card-table table-vcenter text-nowrap">
                                                    <thead>
                                                        <tr class="border-top">
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <th scope="row">5</th>
                                                            <td>Samantha May</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>$43,198</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Hoverable Rows Table</h3>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover card-table table-vcenter text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Primary Table</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered card-table table-primary table-vcenter text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <th scope="row">5</th>
                                                            <td>Samantha May</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>$43,198</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Success Table</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered card-table table-success table-vcenter text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <th scope="row">5</th>
                                                            <td>Samantha May</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>$43,198</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Warning Table</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered card-table table-warning table-vcenter text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <th scope="row">5</th>
                                                            <td>Samantha May</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>$43,198</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Danger Table</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered card-table table-danger table-vcenter text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <th scope="row">5</th>
                                                            <td>Samantha May</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>$43,198</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Info Table</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered card-table table-info table-vcenter text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <th scope="row">5</th>
                                                            <td>Samantha May</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>$43,198</td>
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