@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Form Treeview</h4>
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
                                <div class="col-xl-4 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul id="treeview1">
                                                <li><a href="javascript:void(0);">TECH</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports</li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li>XRP
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports</li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul id="treeview2">
                                                <li><a href="javascript:void(0);">TECH</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports</li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li>XRP
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports</li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul id="treeview3">
                                                <li><a href="javascript:void(0);">TECH</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports</li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li>XRP
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports</li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-xl-4 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul id="tree1">
                                                <li><a href="javascript:void(0);">Treeview1</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview2</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview3</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview4</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview5</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview6</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul id="tree2">
                                                <li><a href="javascript:void(0);">Treeview1</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview2</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview3</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview4</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview5</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview6</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul id="tree3">
                                                <li><a href="javascript:void(0);">Treeview1</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview2</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview3</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview4</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview5</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.
                                                                            <ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Treeview6</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.
                                                                    <ul>
                                                                        <li>Reports
                                                                            <ul>
                                                                                <li>Report1</li>
                                                                                <li>Report2</li>
                                                                                <li>Report3</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Employee Maint.<ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAL TREEVIEW JS -->
        <script src="{{asset('build/assets/plugins/treeview/treeview.js')}}"></script>

@endsection