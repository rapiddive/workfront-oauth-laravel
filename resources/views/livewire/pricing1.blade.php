@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Pricing</h4>
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
                                <div class="col-sm-6 col-xl-3">
                                    <div class="panel price panel-color">
                                        <div class="panel-heading bg-primary text-white p-0 pb-0 text-center">
                                            <h3>Personal</h3>
                                        </div>
                                        <div class="bg-primary-transparent">
                                            <div class="panel-body text-center mb-3">
                                                <p class="lead text-primary"><strong>$15 </strong>/ month</p>
                                            </div>
                                            <ul class="text-center">
                                                <li class="mb-4"> <strong> 2 Free</strong> Domain Name</li>
                                                <li class="mb-4"><strong>3 </strong> One-Click Apps</li>
                                                <li class="mb-4"><strong> 1 </strong> Databases</li>
                                                <li class="mb-4"><strong> Money </strong> BackGuarantee</li>
                                                <li class="mb-6"><strong> 24/7</strong> support</li>
                                            </ul>
                                            <div class="panel-footer  bg-primary-transparent text-center border-top-0">
                                                <a class="btn btn-lg btn-primary" href="javascript:void(0);">Purchase
                                                    Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-sm-6 col-xl-3">
                                    <div class="panel price panel-color">
                                        <div class="panel-heading bg-danger text-white p-0 text-center">
                                            <h3>Team</h3>
                                        </div>
                                        <div class="bg-danger-transparent">
                                            <div class="panel-body text-center mb-3">
                                                <p class="lead text-danger"><strong>$25 </strong>/ month</p>
                                            </div>
                                            <ul class="text-center">
                                                <li class="mb-4"><strong> 3 Free</strong> Domain Name</li>
                                                <li class="mb-4"> <strong>4 </strong> One-Click Apps</li>
                                                <li class="mb-4"><strong> 2 </strong> Databases</li>
                                                <li class="mb-4"><strong> Money </strong> BackGuarantee</li>
                                                <li class="mb-6"> <strong> 24/7</strong> support</li>
                                            </ul>
                                            <div class="panel-footer bg-danger-transparent text-center border-top-0">
                                                <a class="btn btn-lg btn-danger" href="javascript:void(0);">Purchase
                                                    Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-sm-6 col-xl-3">
                                    <div class="panel price panel-color">
                                        <div class="panel-heading bg-warning text-white p-0 text-center">
                                            <h3>Corporate</h3>
                                        </div>
                                        <div class="bg-warning-transparent">
                                            <div class="panel-body text-center mb-3">
                                                <p class="lead text-warning"><strong>$99 </strong>/ month</p>
                                            </div>
                                            <ul class="text-center">
                                                <li class="mb-4"><strong> 5 Free</strong> Domain Name</li>
                                                <li class="mb-4"><strong>8 </strong> One-Click Apps</li>
                                                <li class="mb-4"><strong> 2 </strong> Databases</li>
                                                <li class="mb-4"><strong> Money </strong> BackGuarantee</li>
                                                <li class="mb-6"><strong> 24/7</strong> support</li>
                                            </ul>
                                            <div class="panel-footer bg-warning-transparent text-center border-top-0 mb-0">
                                                <a class="btn btn-lg btn-warning" href="javascript:void(0);">Purchase
                                                    Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-sm-6 col-xl-3">
                                    <div class="panel price panel-color">
                                        <div class="panel-heading bg-success text-white p-0 text-center">
                                            <h3>Business</h3>
                                        </div>
                                        <div class="bg-success-transparent">
                                            <div class="panel-body text-center mb-3">
                                                <p class="lead text-success"><strong>$35 </strong>/ month</p>
                                            </div>
                                            <ul class="text-center">
                                                <li class="mb-4"><strong> 4 Free</strong> Domain Name</li>
                                                <li class="mb-4"> <strong>6 </strong> One-Click Apps</li>
                                                <li class="mb-4"><strong> 2 </strong> Databases</li>
                                                <li class="mb-4"><strong> Money </strong> BackGuarantee</li>
                                                <li class="mb-6"><strong> 24/7</strong> support</li>
                                            </ul>
                                            <div class="panel-footer text-center bg-success-transparent border-top-0 mb-0">
                                                <a class="btn btn-lg btn-success" href="javascript:void(0);">Purchase
                                                    Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="card px-5 pt-5">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-3">
                                        <div class="card shadow-none border overflow-hidden">
                                            <div class="card-header bg-primary text-white align-items-center">
                                                <div class="card-title mx-auto text-center">
                                                    <h3 class=" font-weight-semibold mt-3 mb-2">Team</h3>
                                                    <div class="mb fs-13">$159 PER USER/MONTH</div>
                                                    <p class="fs-12">billed anually</p>
                                                </div>
                                            </div>
                                            <div class="card-body text-center  pricing px-0">
                                                <ul class="list-unstyled leading-loose">
                                                    <li class="text-muted border-bottom"><strong>20 </strong> FreeDomain
                                                        Name
                                                    </li>
                                                    <li class="text-muted border-bottom"><span
                                                            class="text-primary fs-16 font-weight-bold">New!</span>
                                                        <strong>16</strong> One-Click Apps
                                                    </li>
                                                    <li class="text-muted border-bottom"><strong>6</strong> Databases</li>
                                                    <li class="text-muted border-bottom"><strong>Money</strong> BackGuarntee
                                                    </li>
                                                    <li class="text-muted border-bottom"><strong>24/7</strong> Support</li>
                                                </ul>
                                                <div class="text-center mt-5 px-4">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-lg btn-outline-primary d-grid">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-3">
                                        <div class="card shadow-none border overflow-hidden">
                                            <div class="card-header bg-success text-white align-items-center">
                                                <div class="card-title mx-auto text-center">
                                                    <h3 class=" font-weight-semibold mt-3 mb-2">Personal</h3>
                                                    <div class="mb fs-13">$29 PER USER/MONTH</div>
                                                    <p class="fs-12">billed anually</p>
                                                </div>
                                            </div>
                                            <div class="card-body text-center  pricing px-0">
                                                <ul class="list-unstyled leading-loose">
                                                    <li class="text-muted border-bottom"><strong>5 </strong> FreeDomain Name
                                                    </li>
                                                    <li class="text-muted border-bottom"><strong>7</strong> One-Click Apps
                                                    </li>
                                                    <li class="text-muted border-bottom"><strong>6</strong> Databases</li>
                                                    <li class="text-muted border-bottom"><span
                                                            class="text-success fs-16 font-weight-bold">New!</span>
                                                        <strong>Money</strong> BackGuarntee
                                                    </li>
                                                    <li class="text-muted border-bottom"><strong>24/7</strong> Support</li>
                                                </ul>
                                                <div class="text-center mt-5 px-4">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-lg btn-outline-success d-grid">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-3">
                                        <div class="card shadow-none border overflow-hidden">
                                            <div class="card-header bg-secondary text-white align-items-center">
                                                <div class="card-title mx-auto text-center">
                                                    <h3 class=" font-weight-semibold mt-3 mb-2">Corporate</h3>
                                                    <div class="mb fs-13">$49 PER USER/MONTH</div>
                                                    <p class="fs-12">billed anually</p>
                                                </div>
                                            </div>
                                            <div class="card-body text-center  pricing px-0">
                                                <ul class="list-unstyled leading-loose">
                                                    <li class="text-muted border-bottom"><strong>12 </strong> FreeDomain
                                                        Name
                                                    </li>
                                                    <li class="text-muted border-bottom"><strong>10</strong> One-Click Apps
                                                    </li>
                                                    <li class="text-muted border-bottom"><strong>6</strong> Databases</li>
                                                    <li class="text-muted border-bottom"><strong>Money</strong> BackGuarntee
                                                    </li>
                                                    <li class="text-muted border-bottom"><span
                                                            class="text-secondary fs-16 font-weight-bold">New!</span>
                                                        <strong>24/7</strong> Support
                                                    </li>
                                                </ul>
                                                <div class="text-center mt-5 px-4">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-lg btn-outline-secondary d-grid">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-3">
                                        <div class="card shadow-none border overflow-hidden">
                                            <div class="card-header bg-danger text-white align-items-center">
                                                <div class="card-title mx-auto text-center">
                                                    <h3 class=" font-weight-semibold mt-3 mb-2">Unlimited</h3>
                                                    <div class="mb fs-13">$249 PER USER/MONTH</div>
                                                    <p class="fs-12">billed anually</p>
                                                </div>
                                            </div>
                                            <div class="card-body text-center  pricing px-0	">
                                                <ul class="list-unstyled leading-loose">
                                                    <li class="text-muted border-bottom"><strong>12 </strong> FreeDomain
                                                        Name
                                                    </li>
                                                    <li class="text-muted border-bottom"><strong>10</strong> One-Click Apps
                                                    </li>
                                                    <li class="text-muted border-bottom"><span
                                                            class="text-danger fs-16 font-weight-bold">New!</span>
                                                        <strong>6</strong> Databases
                                                    </li>
                                                    <li class="text-muted border-bottom"><strong>Money</strong> BackGuarntee
                                                    </li>
                                                    <li class="text-muted border-bottom"><strong>24/7</strong> Support</li>
                                                </ul>
                                                <div class="text-center mt-5 px-4">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-lg btn-outline-danger d-grid">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card p-6 text-center">
                                        <h3 class="fw-semibold text-primary pt-0 mb-2">Personal</h3>
                                        <p class="text-dark mb-2"><span class="fs-35 fw-semibold"> $15</span><span class="mx-1 text-muted">/</span> month</p>
                                        <p class="fs-13">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Iure quos debitis.</p>
                                        <ul class="pt-3">
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i> <strong> 2 Free</strong> Domain Name</li>
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i><strong>3 </strong> One-Click Apps</li>
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i><strong> 1 </strong> Databases</li>
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i><strong> Money </strong> BackGuarantee</li>
                                            <li class="mb-6 "><i class="fe fe-check me-1 text-primary"></i><strong> 24/7</strong> support</li>
                                        </ul>
                                        <div class="text-center border-top-0">
                                            <a class="btn btn-primary btn-block" href="javascript:void(0);">Purchase Now!</a>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card p-6 text-center">
                                        <h3 class="fw-semibold text-success pt-0 mb-2">Unlimited</h3>
                                        <p class="text-dark mb-2"><span class="fs-35 fw-semibold"> $13</span><span class="mx-1 text-muted">/</span> month</p>
                                        <p class="fs-13">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Iure quos debitis.</p>
                                        <ul class="pt-3">
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i> <strong> 2 Free</strong> Domain Name</li>
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i><strong>3 </strong> One-Click Apps</li>
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i><strong> 1 </strong> Databases</li>
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i><strong> Money </strong> BackGuarantee</li>
                                            <li class="mb-6"><i class="fe fe-check me-1 text-primary"></i><strong> 24/7</strong> support</li>
                                        </ul>
                                        <div class="text-center border-top-0">
                                            <a class="btn btn-success btn-block" href="javascript:void(0);">Purchase Now!</a>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card p-6 text-center">
                                        <h3 class="fw-semibold text-info pt-0 mb-2">Enterprice</h3>
                                        <p class="text-dark mb-2"><span class="fs-35 fw-semibold"> $17</span><span class="mx-1 text-muted">/</span> month</p>
                                        <p class="fs-13">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Iure quos debitis.</p>
                                        <ul class="pt-3">
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i> <strong> 2 Free</strong> Domain Name</li>
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i><strong>3 </strong> One-Click Apps</li>
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i><strong> 1 </strong> Databases</li>
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i><strong> Money </strong> BackGuarantee</li>
                                            <li class="mb-6"><i class="fe fe-check me-1 text-primary"></i><strong> 24/7</strong> support</li>
                                        </ul>
                                        <div class="text-center border-top-0">
                                            <a class="btn btn-info btn-block" href="javascript:void(0);">Purchase Now!</a>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card p-6 text-center">
                                        <h3 class="fw-semibold text-danger pt-0 mb-2">Team</h3>
                                        <p class="text-dark mb-2"><span class="fs-35 fw-semibold"> $12</span><span class="mx-1 text-muted">/</span> month</p>
                                        <p class="fs-13">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Iure quos debitis.</p>
                                        <ul class="pt-3">
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i> <strong> 2 Free</strong> Domain Name</li>
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i><strong>3 </strong> One-Click Apps</li>
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i><strong> 1 </strong> Databases</li>
                                            <li class="mb-4"><i class="fe fe-check me-1 text-primary"></i><strong> Money </strong> BackGuarantee</li>
                                            <li class="mb-6"><i class="fe fe-check me-1 text-primary"></i><strong> 24/7</strong> support</li>
                                        </ul>
                                        <div class="text-center border-top-0">
                                            <a class="btn btn-danger btn-block" href="javascript:void(0);">Purchase Now!</a>
                                        </div>
                                    </div>
                                </div><!-- COL-END -->
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="ribbon ribbon-top-left text-primary"><span class="bg-primary">Popular</span></div>
                                            <div class="d-flex align-items-center">
                                                <span class="pricing-icon me-2 bg-primary-transparent"><i class="fe fe-zap text-primary"></i></span>
                                                <h4 class="fw-semibold text-primary pt-0 mb-2">Personal</h4>
                                            </div>
                                            <p class="text-dark mb-2 mt-3"><span class="fs-40 fw-semibold"> $15</span><span class="mx-1 text-muted">/</span> month</p>
                                            <p class="mb-3">Best for Business</p>
                                            <div class="text-center border-top-0">
                                                <a class="btn btn-outline-primary btn-block mb-4 btn-pill" href="javascript:void(0);">Purchase Now!</a>
                                            </div>
                                            <p class="fs-13 fw-semibold">Lorem ipsum dolor sit amet
                                                consectetur adipisicing.</p>
                                            <ul class="pt-3 mb-0">
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-primary"></i> <strong> 2 Free</strong> Domain Name</li>
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-primary"></i><strong>3 </strong> Projects</li>
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-primary"></i><strong>3 </strong> One-Click Apps</li>
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-primary"></i><strong> 1 </strong> Databases</li>
                                                <li class="mb-4 text-muted"><i class="bx bxs-x-circle me-2"></i><strong> Money </strong> BackGuarantee</li>
                                                <li class="mb-0 text-muted"><i class="bx bxs-x-circle me-2"></i><strong> 24/7</strong> support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="ribbon ribbon-top-left text-success"><span class="bg-success">Free</span></div>
                                            <div class="d-flex align-items-center">
                                                <span class="pricing-icon me-2 bg-success-transparent"><i class="fe fe-layers text-success"></i></span>
                                                <h4 class="fw-semibold text-success pt-0 mb-2">Business</h4>
                                            </div>
                                            <p class="text-dark mb-2 mt-3"><span class="fs-40 fw-semibold"> $21</span><span class="mx-1 text-muted">/</span> month</p>
                                            <p class="mb-3">Best for Business</p>
                                            <div class="text-center border-top-0">
                                                <a class="btn btn-outline-success btn-block mb-4 btn-pill" href="javascript:void(0);">Purchase Now!</a>
                                            </div>
                                            <p class="fs-13 fw-semibold">Lorem ipsum dolor sit amet
                                                consectetur adipisicing.</p>
                                            <ul class="pt-3 mb-0">
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-success"></i> <strong> 2 Free</strong> Domain Name</li>
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-success"></i><strong>3 </strong> Projects</li>
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-success"></i><strong>3 </strong> One-Click Apps</li>
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-success"></i><strong> 1 </strong> Databases</li>
                                                <li class="mb-4 text-muted"><i class="bx bxs-x-circle me-2"></i><strong> Money </strong> BackGuarantee</li>
                                                <li class="mb-0 text-muted"><i class="bx bxs-x-circle me-2"></i><strong> 24/7</strong> support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Popular</span></div>
                                            <div class="d-flex align-items-center">
                                                <span class="pricing-icon me-2 bg-danger-transparent"><i class="fe fe-users text-danger"></i></span>
                                                <h4 class="fw-semibold text-danger pt-0 mb-2">Team</h4>
                                            </div>
                                            <p class="text-dark mb-2 mt-3"><span class="fs-40 fw-semibold"> $18</span><span class="mx-1 text-muted">/</span> month</p>
                                            <p class="mb-3">Best for Business</p>
                                            <div class="text-center border-top-0">
                                                <a class="btn btn-outline-danger btn-block mb-4 btn-pill" href="javascript:void(0);">Purchase Now!</a>
                                            </div>
                                            <p class="fs-13 fw-semibold">Lorem ipsum dolor sit amet
                                                consectetur adipisicing.</p>
                                            <ul class="pt-3 mb-0">
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-danger"></i> <strong> 2 Free</strong> Domain Name</li>
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-danger"></i><strong>3 </strong> Projects</li>
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-danger"></i><strong>3 </strong> One-Click Apps</li>
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-danger"></i><strong> 1 </strong> Databases</li>
                                                <li class="mb-4 text-muted"><i class="bx bxs-x-circle me-2"></i><strong> Money </strong> BackGuarantee</li>
                                                <li class="mb-0 text-muted"><i class="bx bxs-x-circle me-2"></i><strong> 24/7</strong> support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="ribbon ribbon-top-left text-warning"><span class="bg-warning">Popular</span></div>
                                            <div class="d-flex align-items-center">
                                                <span class="pricing-icon me-2 bg-warning-transparent"><i class="fe fe-box text-warning"></i></span>
                                                <h4 class="fw-semibold text-warning pt-0 mb-2">Enterprice</h4>
                                            </div>
                                            <p class="text-dark mb-2 mt-3"><span class="fs-40 fw-semibold"> $12</span><span class="mx-1 text-muted">/</span> month</p>
                                            <p class="mb-3">Best for Business</p>
                                            <div class="text-center border-top-0">
                                                <a class="btn btn-outline-warning btn-block mb-4 btn-pill" href="javascript:void(0);">Purchase Now!</a>
                                            </div>
                                            <p class="fs-13 fw-semibold">Lorem ipsum dolor sit amet
                                                consectetur adipisicing.</p>
                                            <ul class="pt-3 mb-0">
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-warning"></i> <strong> 2 Free</strong> Domain Name</li>
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-warning"></i><strong>3 </strong> Projects</li>
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-warning"></i><strong>3 </strong> One-Click Apps</li>
                                                <li class="mb-4"><i class="bx bxs-check-circle me-2 text-warning"></i><strong> 1 </strong> Databases</li>
                                                <li class="mb-4 text-muted"><i class="bx bxs-x-circle me-2"></i><strong> Money </strong> BackGuarantee</li>
                                                <li class="mb-0 text-muted"><i class="bx bxs-x-circle me-2"></i><strong> 24/7</strong> support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')


@endsection