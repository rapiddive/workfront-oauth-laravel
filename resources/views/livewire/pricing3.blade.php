@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Pricing 3</h4>
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
                            <!--End Page header-->

                            <!-- ROW -->
                            <div class="pricing-tabs">
                                <div class="text-center">
                                    <div class="pri-tabs-heading">
                                        <ul class="nav nav-price">
                                            <li><a data-bs-toggle="tab" href="#month">Month</a></li>
                                            <li><a class="active show" data-bs-toggle="tab" href="#year">Year</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane pb-0 active show" id="year">
                                            <div class="row row-sm pricing-style01">
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="panel price panel-color bg-white">
                                                        <div
                                                            class="panel-heading bg-primary text-white p-0 pb-0 text-center">
                                                            <h3>Personal</h3>
                                                        </div>
                                                        <div class="bg-primary-transparent">
                                                            <div class="panel-body text-center mb-3">
                                                                <p class="lead text-primary"><strong>$175
                                                                    </strong>/
                                                                    year</p>
                                                            </div>
                                                            <ul class="text-center">
                                                                <li class="mb-4"> <strong> 2 Free</strong> Domain Name</li>
                                                                <li class="mb-4"><strong>3 </strong> One-Click Apps</li>
                                                                <li class="mb-4"><strong> 1 </strong> Databases</li>
                                                                <li class="mb-4"><strong> Money </strong> BackGuarantee</li>
                                                                <li class="mb-6"><strong> 24/7</strong> support</li>
                                                            </ul>
                                                            <div
                                                                class="panel-footer  bg-primary-transparent text-center border-top-0">
                                                                <a class="btn btn-lg btn-primary"
                                                                    href="javascript:void(0);">Purchase Now!</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="panel price panel-color bg-white">
                                                        <div class="panel-heading bg-danger text-white p-0 text-center">
                                                            <h3>Team</h3>
                                                        </div>
                                                        <div class="bg-danger-transparent">
                                                            <div class="panel-body text-center mb-3">
                                                                <p class="lead text-danger"><strong>$225 </strong>/
                                                                    year
                                                                </p>
                                                            </div>
                                                            <ul class="text-center">
                                                                <li class="mb-4"><strong> 3 Free</strong> Domain Name</li>
                                                                <li class="mb-4"> <strong>4 </strong> One-Click Apps</li>
                                                                <li class="mb-4"><strong> 2 </strong> Databases</li>
                                                                <li class="mb-4"><strong> Money </strong> BackGuarantee</li>
                                                                <li class="mb-6"> <strong> 24/7</strong> support</li>
                                                            </ul>
                                                            <div
                                                                class="panel-footer bg-danger-transparent text-center border-top-0">
                                                                <a class="btn btn-lg btn-danger"
                                                                    href="javascript:void(0);">Purchase Now!</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="panel price panel-color bg-white">
                                                        <div class="panel-heading bg-warning text-white p-0 text-center">
                                                            <h3>Corporate</h3>
                                                        </div>
                                                        <div class="bg-warning-transparent">
                                                            <div class="panel-body text-center mb-3">
                                                                <p class="lead text-warning"><strong
                                                                        class="">$1029 </strong>/
                                                                    year</p>
                                                            </div>
                                                            <ul class="text-center">
                                                                <li class="mb-4"><strong> 5 Free</strong> Domain Name</li>
                                                                <li class="mb-4"><strong>8 </strong> One-Click Apps</li>
                                                                <li class="mb-4"><strong> 2 </strong> Databases</li>
                                                                <li class="mb-4"><strong> Money </strong> BackGuarantee</li>
                                                                <li class="mb-6"><strong> 24/7</strong> support</li>
                                                            </ul>
                                                            <div
                                                                class="panel-footer bg-warning-transparent text-center border-top-0 mb-0">
                                                                <a class="btn btn-lg btn-warning"
                                                                    href="javascript:void(0);">Purchase Now!</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="panel price panel-color bg-white">
                                                        <div class="panel-heading bg-success text-white p-0 text-center">
                                                            <h3>Business</h3>
                                                        </div>
                                                        <div class="bg-success-transparent">
                                                            <div class="panel-body text-center mb-3">
                                                                <p class="lead text-success"><strong>$435
                                                                    </strong>/
                                                                    year</p>
                                                            </div>
                                                            <ul class="text-center">
                                                                <li class="mb-4"><strong> 4 Free</strong> Domain Name</li>
                                                                <li class="mb-4"> <strong>6 </strong> One-Click Apps</li>
                                                                <li class="mb-4"><strong> 2 </strong> Databases</li>
                                                                <li class="mb-4"><strong> Money </strong> BackGuarantee</li>
                                                                <li class="mb-6"><strong> 24/7</strong> support</li>
                                                            </ul>
                                                            <div
                                                                class="panel-footer text-center bg-success-transparent border-top-0 mb-0">
                                                                <a class="btn btn-lg btn-success"
                                                                    href="javascript:void(0);">Purchase Now!</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="month">
                                            <div class="row row-sm pricing-style01">
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="panel price panel-color bg-white">
                                                        <div
                                                            class="panel-heading bg-primary text-white p-0 pb-0 text-center">
                                                            <h3>Personal</h3>
                                                        </div>
                                                        <div class="bg-primary-transparent">
                                                            <div class="panel-body text-center mb-3">
                                                                <p class="lead text-primary"><strong>$15 </strong>/
                                                                    month</p>
                                                            </div>
                                                            <ul class="text-center">
                                                                <li class="mb-4"> <strong> 2 Free</strong> Domain Name</li>
                                                                <li class="mb-4"><strong>3 </strong> One-Click Apps</li>
                                                                <li class="mb-4"><strong> 1 </strong> Databases</li>
                                                                <li class="mb-4"><strong> Money </strong> BackGuarantee</li>
                                                                <li class="mb-6"><strong> 24/7</strong> support</li>
                                                            </ul>
                                                            <div
                                                                class="panel-footer  bg-primary-transparent text-center border-top-0">
                                                                <a class="btn btn-lg btn-primary"
                                                                    href="javascript:void(0);">Purchase Now!</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="panel price panel-color bg-white">
                                                        <div class="panel-heading bg-danger text-white p-0 text-center">
                                                            <h3>Team</h3>
                                                        </div>
                                                        <div class="bg-danger-transparent">
                                                            <div class="panel-body text-center mb-3">
                                                                <p class="lead text-danger"><strong>$25 </strong>/
                                                                    month
                                                                </p>
                                                            </div>
                                                            <ul class="text-center">
                                                                <li class="mb-4"><strong> 3 Free</strong> Domain Name</li>
                                                                <li class="mb-4"> <strong>4 </strong> One-Click Apps</li>
                                                                <li class="mb-4"><strong> 2 </strong> Databases</li>
                                                                <li class="mb-4"><strong> Money </strong> BackGuarantee</li>
                                                                <li class="mb-6"> <strong> 24/7</strong> support</li>
                                                            </ul>
                                                            <div
                                                                class="panel-footer bg-danger-transparent text-center border-top-0">
                                                                <a class="btn btn-lg btn-danger"
                                                                    href="javascript:void(0);">Purchase Now!</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="panel price panel-color bg-white">
                                                        <div class="panel-heading bg-warning text-white p-0 text-center">
                                                            <h3>Corporate</h3>
                                                        </div>
                                                        <div class="bg-warning-transparent">
                                                            <div class="panel-body text-center mb-3">
                                                                <p class="lead text-warning"><strong>$99 </strong>/
                                                                    month</p>
                                                            </div>
                                                            <ul class="text-center">
                                                                <li class="mb-4"><strong> 5 Free</strong> Domain Name</li>
                                                                <li class="mb-4"><strong>8 </strong> One-Click Apps</li>
                                                                <li class="mb-4"><strong> 2 </strong> Databases</li>
                                                                <li class="mb-4"><strong> Money </strong> BackGuarantee</li>
                                                                <li class="mb-6"><strong> 24/7</strong> support</li>
                                                            </ul>
                                                            <div
                                                                class="panel-footer bg-warning-transparent text-center border-top-0 mb-0">
                                                                <a class="btn btn-lg btn-warning"
                                                                    href="javascript:void(0);">Purchase Now!</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="panel price panel-color bg-white">
                                                        <div class="panel-heading bg-success text-white p-0 text-center">
                                                            <h3>Business</h3>
                                                        </div>
                                                        <div class="bg-success-transparent">
                                                            <div class="panel-body text-center mb-3">
                                                                <p class="lead"><strong class=" text-success">$35 </strong>/
                                                                    month</p>
                                                            </div>
                                                            <ul class="text-center">
                                                                <li class="mb-4"><strong> 4 Free</strong> Domain Name</li>
                                                                <li class="mb-4"> <strong>6 </strong> One-Click Apps</li>
                                                                <li class="mb-4"><strong> 2 </strong> Databases</li>
                                                                <li class="mb-4"><strong> Money </strong> BackGuarantee</li>
                                                                <li class="mb-6"><strong> 24/7</strong> support</li>
                                                            </ul>
                                                            <div
                                                                class="panel-footer text-center bg-success-transparent border-top-0 mb-0">
                                                                <a class="btn btn-lg btn-success"
                                                                    href="javascript:void(0);">Purchase Now!</a>
                                                            </div>
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
                            <div class="pricing-tabs">
                                <div class="text-center">
                                    <div class="pri-tabs-heading pri-tabs-heading2">
                                        <ul class="nav nav-price">
                                            <li><a class="active show" data-bs-toggle="tab" href="#month1">Month</a></li>
                                            <li><a data-bs-toggle="tab" href="#year1">Year</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane pb-0 active show" id="month1">
                                            <!-- Row -->
                                            <div class="row text-center">
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="card plan-card shadow-none border">
                                                        <div>
                                                            <div class="pt-4 pb-4">
                                                                <i class="fa fa-plane plan-icon bg-primary mb-5"></i>
                                                                <h6
                                                                    class="text-uppercase font-weight-semibold text-primary">
                                                                    Starter Pack</h6>
                                                            </div>
                                                            <div>
                                                                <h1
                                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                    $19 <span class="text-muted m-l-10"><sup>Per
                                                                            Month</sup></span></h1>
                                                                <div class="plan-div-border"></div>
                                                            </div>
                                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                                <p><strong>2 </strong> FreeDomain Name</p>
                                                                <p><strong>2</strong> One-Click Apps</p>
                                                                <p><strong>1</strong> Databases</p>
                                                                <p><strong>Money</strong> BackGuarntee</p>
                                                                <p><strong>24/7</strong> Support</p>
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-primary mt-4">Sign Up Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="card plan-card shadow-none border">
                                                        <div>
                                                            <div class="pt-4 pb-4">
                                                                <i class="fa fa-trophy plan-icon bg-success mb-5"></i>
                                                                <h6
                                                                    class="text-uppercase font-weight-semibold text-success">
                                                                    Professional Pack</h6>
                                                            </div>
                                                            <div>
                                                                <h1
                                                                    class="plan-price padding-b-15 display-4 mb-0  font-weight-semibold">
                                                                    $29 <span class="text-muted m-l-10"><sup>Per
                                                                            Month</sup></span></h1>
                                                                <div class="plan-div-border"></div>
                                                            </div>
                                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                                <p><strong>3 </strong> FreeDomain Name</p>
                                                                <p><strong>5</strong> One-Click Apps</p>
                                                                <p><strong>3</strong> Databases</p>
                                                                <p><strong>Money</strong> BackGuarntee</p>
                                                                <p><strong>24/7</strong> Support</p>
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-success mt-4">Sign Up Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="card plan-card shadow-none border">
                                                        <div>
                                                            <div class="pt-4 pb-4">
                                                                <i class="fa fa-umbrella plan-icon bg-info mb-5"></i>
                                                                <h6 class="text-uppercase font-weight-semibold text-info">
                                                                    Enterprise Pack</h6>
                                                            </div>
                                                            <div>
                                                                <h1
                                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                    $39 <span class="text-muted m-l-10"><sup>Per
                                                                            Month</sup></span></h1>
                                                                <div class="plan-div-border"></div>
                                                            </div>
                                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                                <p><strong>10 </strong> FreeDomain Name</p>
                                                                <p><strong>10</strong> One-Click Apps</p>
                                                                <p><strong>8</strong> Databases</p>
                                                                <p><strong>Money</strong> BackGuarntee</p>
                                                                <p><strong>24/7</strong> Support</p>
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-info mt-4">Sign Up Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="card plan-card shadow-none border">
                                                        <div>
                                                            <div class="pt-4 pb-4">
                                                                <i class="fa fa-cube plan-icon bg-danger mb-5"></i>
                                                                <h6 class="text-uppercase font-weight-semibold text-danger">
                                                                    Unlimited Pack</h6>
                                                            </div>
                                                            <div>
                                                                <h1
                                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                    $49 <span class="text-muted m-l-10"><sup>Per
                                                                            Month</sup></span></h1>
                                                                <div class="plan-div-border"></div>
                                                            </div>
                                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                                <p><strong>12 </strong> FreeDomain Name</p>
                                                                <p><strong>10</strong> One-Click Apps</p>
                                                                <p><strong>6</strong> Databases</p>
                                                                <p><strong>Money</strong> BackGuarntee</p>
                                                                <p><strong>24/7</strong> Support</p>
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-danger mt-4">Sign Up Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                        <div class="tab-pane pb-0" id="year1">
                                            <!-- Row -->
                                            <div class="row text-center">
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="card plan-card shadow-none border">
                                                        <div>
                                                            <div class="pt-4 pb-4">
                                                                <i class="fa fa-plane plan-icon bg-primary mb-5"></i>
                                                                <h6
                                                                    class="text-uppercase font-weight-semibold text-primary">
                                                                    Starter Pack</h6>
                                                            </div>
                                                            <div>
                                                                <h1
                                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                    $119 <span class="text-muted m-l-10"><sup>Per
                                                                            Year</sup></span></h1>
                                                                <div class="plan-div-border"></div>
                                                            </div>
                                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                                <p><strong>2 </strong> FreeDomain Name</p>
                                                                <p><strong>2</strong> One-Click Apps</p>
                                                                <p><strong>1</strong> Databases</p>
                                                                <p><strong>Money</strong> BackGuarntee</p>
                                                                <p><strong>24/7</strong> Support</p>
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-primary mt-4">Sign Up Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="card plan-card shadow-none border">
                                                        <div>
                                                            <div class="pt-4 pb-4">
                                                                <i class="fa fa-trophy plan-icon bg-success mb-5"></i>
                                                                <h6
                                                                    class="text-uppercase font-weight-semibold text-success">
                                                                    Professional Pack</h6>
                                                            </div>
                                                            <div>
                                                                <h1
                                                                    class="plan-price padding-b-15 display-4 mb-0  font-weight-semibold">
                                                                    $129 <span class="text-muted m-l-10"><sup>Per
                                                                            Year</sup></span></h1>
                                                                <div class="plan-div-border"></div>
                                                            </div>
                                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                                <p><strong>3 </strong> FreeDomain Name</p>
                                                                <p><strong>5</strong> One-Click Apps</p>
                                                                <p><strong>3</strong> Databases</p>
                                                                <p><strong>Money</strong> BackGuarntee</p>
                                                                <p><strong>24/7</strong> Support</p>
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-success mt-4">Sign Up Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="card plan-card shadow-none border">
                                                        <div>
                                                            <div class="pt-4 pb-4">
                                                                <i class="fa fa-umbrella plan-icon bg-info mb-5"></i>
                                                                <h6 class="text-uppercase font-weight-semibold text-info">
                                                                    Enterprise Pack</h6>
                                                            </div>
                                                            <div>
                                                                <h1
                                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                    $139 <span class="text-muted m-l-10"><sup>Per
                                                                            Year</sup></span></h1>
                                                                <div class="plan-div-border"></div>
                                                            </div>
                                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                                <p><strong>10 </strong> FreeDomain Name</p>
                                                                <p><strong>10</strong> One-Click Apps</p>
                                                                <p><strong>8</strong> Databases</p>
                                                                <p><strong>Money</strong> BackGuarntee</p>
                                                                <p><strong>24/7</strong> Support</p>
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-info mt-4">Sign Up Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="card plan-card shadow-none border">
                                                        <div>
                                                            <div class="pt-4 pb-4">
                                                                <i class="fa fa-cube plan-icon bg-danger mb-5"></i>
                                                                <h6 class="text-uppercase font-weight-semibold text-danger">
                                                                    Unlimited Pack</h6>
                                                            </div>
                                                            <div>
                                                                <h1
                                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                    $149 <span class="text-muted m-l-10"><sup>Per
                                                                            Year</sup></span></h1>
                                                                <div class="plan-div-border"></div>
                                                            </div>
                                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                                <p><strong>12 </strong> FreeDomain Name</p>
                                                                <p><strong>10</strong> One-Click Apps</p>
                                                                <p><strong>6</strong> Databases</p>
                                                                <p><strong>Money</strong> BackGuarntee</p>
                                                                <p><strong>24/7</strong> Support</p>
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-danger mt-4">Sign Up Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="pricing-tabs">
                                <div class="text-center">
                                    <div class="pri-tabs-heading pri-tabs-heading3">
                                        <ul class="nav nav-price">
                                            <li><a data-bs-toggle="tab" href="#week">Week</a></li>
                                            <li><a data-bs-toggle="tab" href="#month2">Month</a></li>
                                            <li><a class="active show" data-bs-toggle="tab" href="#year2">Year</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane pb-0 active show" id="year2">
                                            <!-- Row -->
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-xl-3 mt-2">
                                                    <div class="card shadow-none">
                                                        <div class="card-header bg-primary text-white align-items-center">
                                                            <div class="card-title mx-auto text-center">
                                                                <h3 class=" font-weight-semibold mt-3 mb-2">Team</h3>
                                                                <div class="mb fs-13">$159 PER USER/MONTH</div>
                                                                <p class="fs-12">billed anually</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center  pricing">
                                                            <ul class="list-unstyled leading-loose">
                                                                <li class="text-muted border-bottom"><strong>20 </strong>
                                                                    FreeDomain Name</li>
                                                                <li class="text-muted border-bottom"><span
                                                                        class="text-primary fs-16 font-weight-bold">New!</span>
                                                                    <strong>16</strong> One-Click Apps
                                                                </li>
                                                                <li class="text-muted border-bottom"><strong>6</strong>
                                                                    Databases</li>
                                                                <li class="text-muted border-bottom"><strong>Money</strong>
                                                                    BackGuarntee</li>
                                                                <li class="text-muted border-bottom"><strong>24/7</strong>
                                                                    Support</li>
                                                            </ul>
                                                            <div class="text-center mt-5">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-outline-primary d-grid">Buy
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-xl-3 mt-2">
                                                    <div class="card shadow-none">
                                                        <div class="card-header bg-success text-white align-items-center">
                                                            <div class="card-title mx-auto text-center">
                                                                <h3 class=" font-weight-semibold mt-3 mb-2">Personal</h3>
                                                                <div class="mb fs-13">$129 PER USER/MONTH</div>
                                                                <p class="fs-12">billed anually</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center  pricing">
                                                            <ul class="list-unstyled leading-loose">
                                                                <li class="text-muted border-bottom"><strong>5 </strong>
                                                                    FreeDomain Name</li>
                                                                <li class="text-muted border-bottom"><strong>7</strong>
                                                                    One-Click Apps</li>
                                                                <li class="text-muted border-bottom"><strong>6</strong>
                                                                    Databases</li>
                                                                <li class="text-muted border-bottom"><span
                                                                        class="text-success fs-16 font-weight-bold">New!</span>
                                                                    <strong>Money</strong> BackGuarntee
                                                                </li>
                                                                <li class="text-muted border-bottom"><strong>24/7</strong>
                                                                    Support</li>
                                                            </ul>
                                                            <div class="text-center mt-5">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-outline-success d-grid">Buy
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-xl-3 mt-2">
                                                    <div class="card shadow-none plan-card border">
                                                        <div class="card-header bg-secondary text-white align-items-center">
                                                            <div class="card-title mx-auto text-center">
                                                                <h3 class=" font-weight-semibold mt-3 mb-2">Corporate</h3>
                                                                <div class="mb fs-13">$149 PER USER/MONTH</div>
                                                                <p class="fs-12">billed anually</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center  pricing">
                                                            <ul class="list-unstyled leading-loose">
                                                                <li class="text-muted border-bottom"><strong>12 </strong>
                                                                    FreeDomain Name</li>
                                                                <li class="text-muted border-bottom"><strong>10</strong>
                                                                    One-Click Apps</li>
                                                                <li class="text-muted border-bottom"><strong>6</strong>
                                                                    Databases</li>
                                                                <li class="text-muted border-bottom"><strong>Money</strong>
                                                                    BackGuarntee</li>
                                                                <li class="text-muted border-bottom"><span
                                                                        class="text-secondary fs-16 font-weight-bold">New!</span>
                                                                    <strong>24/7</strong> Support
                                                                </li>
                                                            </ul>
                                                            <div class="text-center mt-5">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-outline-secondary d-grid">Buy
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-xl-3 mt-2">
                                                    <div class="card shadow-none">
                                                        <div class="card-header bg-danger text-white align-items-center">
                                                            <div class="card-title mx-auto text-center">
                                                                <h3 class=" font-weight-semibold mt-3 mb-2">Unlimited</h3>
                                                                <div class="mb fs-13">$249 PER USER/MONTH</div>
                                                                <p class="fs-12">billed anually</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center  pricing">
                                                            <ul class="list-unstyled leading-loose">
                                                                <li class="text-muted border-bottom"><strong>12 </strong>
                                                                    FreeDomain Name</li>
                                                                <li class="text-muted border-bottom"><strong>10</strong>
                                                                    One-Click Apps</li>
                                                                <li class="text-muted border-bottom"><span
                                                                        class="text-danger fs-16 font-weight-bold">New!</span>
                                                                    <strong>6</strong> Databases
                                                                </li>
                                                                <li class="text-muted border-bottom"><strong>Money</strong>
                                                                    BackGuarntee</li>
                                                                <li class="text-muted border-bottom"><strong>24/7</strong>
                                                                    Support</li>
                                                            </ul>
                                                            <div class="text-center mt-5">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-outline-danger d-grid">Buy Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                        <div class="tab-pane pb-0" id="month2">
                                            <!-- Row -->
                                            <div class="row pt-7">
                                                <div class="col-xs-6 col-sm-6 col-xl-3 mt-2">
                                                    <div class="card shadow-none">
                                                        <div class="card-header bg-primary text-white align-items-center">
                                                            <div class="card-title mx-auto text-center">
                                                                <h3 class=" font-weight-semibold mt-3 mb-2">Team</h3>
                                                                <div class="mb fs-13">$15 PER USER/MONTH</div>
                                                                <p class="fs-12">billed Monthly</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center  pricing">
                                                            <ul class="list-unstyled leading-loose">
                                                                <li class="text-muted border-bottom"><strong>20 </strong>
                                                                    FreeDomain Name</li>
                                                                <li class="text-muted border-bottom"><span
                                                                        class="text-primary fs-16 font-weight-bold">New!</span>
                                                                    <strong>16</strong> One-Click Apps
                                                                </li>
                                                                <li class="text-muted border-bottom"><strong>6</strong>
                                                                    Databases</li>
                                                                <li class="text-muted border-bottom"><strong>Money</strong>
                                                                    BackGuarntee</li>
                                                                <li class="text-muted border-bottom"><strong>24/7</strong>
                                                                    Support</li>
                                                            </ul>
                                                            <div class="text-center mt-5">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-outline-primary d-grid">Buy
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-xl-3 mt-2">
                                                    <div class="card shadow-none">
                                                        <div class="card-header bg-success text-white align-items-center">
                                                            <div class="card-title mx-auto text-center">
                                                                <h3 class=" font-weight-semibold mt-3 mb-2">Personal</h3>
                                                                <div class="mb fs-13">$29 PER USER/MONTH</div>
                                                                <p class="fs-12">billed Monthly</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center  pricing">
                                                            <ul class="list-unstyled leading-loose">
                                                                <li class="text-muted border-bottom"><strong>5 </strong>
                                                                    FreeDomain Name</li>
                                                                <li class="text-muted border-bottom"><strong>7</strong>
                                                                    One-Click Apps</li>
                                                                <li class="text-muted border-bottom"><strong>6</strong>
                                                                    Databases</li>
                                                                <li class="text-muted border-bottom"><span
                                                                        class="text-success fs-16 font-weight-bold">New!</span>
                                                                    <strong>Money</strong> BackGuarntee
                                                                </li>
                                                                <li class="text-muted border-bottom"><strong>24/7</strong>
                                                                    Support</li>
                                                            </ul>
                                                            <div class="text-center mt-5">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-outline-success d-grid">Buy
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-xl-3 mt-2">
                                                    <div class="card shadow-none plan-card border">
                                                        <div class="card-header bg-secondary text-white align-items-center">
                                                            <div class="card-title mx-auto text-center">
                                                                <h3 class=" font-weight-semibold mt-3 mb-2">Corporate</h3>
                                                                <div class="mb fs-13">$49 PER USER/MONTH</div>
                                                                <p class="fs-12">billed Monthly</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center  pricing">
                                                            <ul class="list-unstyled leading-loose">
                                                                <li class="text-muted border-bottom"><strong>12 </strong>
                                                                    FreeDomain Name</li>
                                                                <li class="text-muted border-bottom"><strong>10</strong>
                                                                    One-Click Apps</li>
                                                                <li class="text-muted border-bottom"><strong>6</strong>
                                                                    Databases</li>
                                                                <li class="text-muted border-bottom"><strong>Money</strong>
                                                                    BackGuarntee</li>
                                                                <li class="text-muted border-bottom"><span
                                                                        class="text-secondary fs-16 font-weight-bold">New!</span>
                                                                    <strong>24/7</strong> Support
                                                                </li>
                                                            </ul>
                                                            <div class="text-center mt-5">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-outline-secondary d-grid">Buy
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-xl-3 mt-2">
                                                    <div class="card shadow-none">
                                                        <div class="card-header bg-danger text-white align-items-center">
                                                            <div class="card-title mx-auto text-center">
                                                                <h3 class=" font-weight-semibold mt-3 mb-2">Unlimited</h3>
                                                                <div class="mb fs-13">$49 PER USER/MONTH</div>
                                                                <p class="fs-12">billed monthly</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center  pricing">
                                                            <ul class="list-unstyled leading-loose">
                                                                <li class="text-muted border-bottom"><strong>12 </strong>
                                                                    FreeDomain Name</li>
                                                                <li class="text-muted border-bottom"><strong>10</strong>
                                                                    One-Click Apps</li>
                                                                <li class="text-muted border-bottom"><span
                                                                        class="text-danger fs-16 font-weight-bold">New!</span>
                                                                    <strong>6</strong> Databases
                                                                </li>
                                                                <li class="text-muted border-bottom"><strong>Money</strong>
                                                                    BackGuarntee</li>
                                                                <li class="text-muted border-bottom"><strong>24/7</strong>
                                                                    Support</li>
                                                            </ul>
                                                            <div class="text-center mt-5">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-outline-danger d-grid">Buy Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                        <div class="tab-pane pb-0" id="week">
                                            <!-- Row -->
                                            <div class="row pt-7">
                                                <div class="col-xs-6 col-sm-6 col-xl-3 mt-2">
                                                    <div class="card shadow-none">
                                                        <div class="card-header bg-primary text-white align-items-center">
                                                            <div class="card-title mx-auto text-center">
                                                                <h3 class=" font-weight-semibold mt-3 mb-2">Team</h3>
                                                                <div class="mb fs-13">$0 PER USER/Week</div>
                                                                <p class="fs-12">billed weekly</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center  pricing">
                                                            <ul class="list-unstyled leading-loose">
                                                                <li class="text-muted border-bottom"><strong>20 </strong>
                                                                    FreeDomain Name</li>
                                                                <li class="text-muted border-bottom"><span
                                                                        class="text-primary fs-16 font-weight-bold">New!</span>
                                                                    <strong>16</strong> One-Click Apps
                                                                </li>
                                                                <li class="text-muted border-bottom"><strong>6</strong>
                                                                    Databases</li>
                                                                <li class="text-muted border-bottom"><strong>Money</strong>
                                                                    BackGuarntee</li>
                                                                <li class="text-muted border-bottom"><strong>24/7</strong>
                                                                    Support</li>
                                                            </ul>
                                                            <div class="text-center mt-5">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-outline-primary d-grid">Buy
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-xl-3 mt-2">
                                                    <div class="card shadow-none">
                                                        <div class="card-header bg-success text-white align-items-center">
                                                            <div class="card-title mx-auto text-center">
                                                                <h3 class=" font-weight-semibold mt-3 mb-2">Personal</h3>
                                                                <div class="mb fs-13">$9 PER USER/Week</div>
                                                                <p class="fs-12">billed weekly</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center  pricing">
                                                            <ul class="list-unstyled leading-loose">
                                                                <li class="text-muted border-bottom"><strong>5 </strong>
                                                                    FreeDomain Name</li>
                                                                <li class="text-muted border-bottom"><strong>7</strong>
                                                                    One-Click Apps</li>
                                                                <li class="text-muted border-bottom"><strong>6</strong>
                                                                    Databases</li>
                                                                <li class="text-muted border-bottom"><span
                                                                        class="text-success fs-16 font-weight-bold">New!</span>
                                                                    <strong>Money</strong> BackGuarntee
                                                                </li>
                                                                <li class="text-muted border-bottom"><strong>24/7</strong>
                                                                    Support</li>
                                                            </ul>
                                                            <div class="text-center mt-5">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-outline-success d-grid">Buy
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-xl-3 mt-2">
                                                    <div class="card shadow-none plan-card border">
                                                        <div class="card-header bg-secondary text-white align-items-center">
                                                            <div class="card-title mx-auto text-center">
                                                                <h3 class=" font-weight-semibold mt-3 mb-2">Corporate</h3>
                                                                <div class="mb fs-13">$9 PER USER/Week</div>
                                                                <p class="fs-12">billed weekly</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center  pricing">
                                                            <ul class="list-unstyled leading-loose">
                                                                <li class="text-muted border-bottom"><strong>12 </strong>
                                                                    FreeDomain Name</li>
                                                                <li class="text-muted border-bottom"><strong>10</strong>
                                                                    One-Click Apps</li>
                                                                <li class="text-muted border-bottom"><strong>6</strong>
                                                                    Databases</li>
                                                                <li class="text-muted border-bottom"><strong>Money</strong>
                                                                    BackGuarntee</li>
                                                                <li class="text-muted border-bottom"><span
                                                                        class="text-secondary fs-16 font-weight-bold">New!</span>
                                                                    <strong>24/7</strong> Support
                                                                </li>
                                                            </ul>
                                                            <div class="text-center mt-5">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-outline-secondary d-grid">Buy
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-xl-3 mt-2">
                                                    <div class="card shadow-none">
                                                        <div class="card-header bg-danger text-white align-items-center">
                                                            <div class="card-title mx-auto text-center">
                                                                <h3 class=" font-weight-semibold mt-3 mb-2">Unlimited</h3>
                                                                <div class="mb fs-13">$19 PER USER/Week</div>
                                                                <p class="fs-12">billed weekly</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center  pricing">
                                                            <ul class="list-unstyled leading-loose">
                                                                <li class="text-muted border-bottom"><strong>12 </strong>
                                                                    FreeDomain Name</li>
                                                                <li class="text-muted border-bottom"><strong>10</strong>
                                                                    One-Click Apps</li>
                                                                <li class="text-muted border-bottom"><span
                                                                        class="text-danger fs-16 font-weight-bold">New!</span>
                                                                    <strong>6</strong> Databases
                                                                </li>
                                                                <li class="text-muted border-bottom"><strong>Money</strong>
                                                                    BackGuarntee</li>
                                                                <li class="text-muted border-bottom"><strong>24/7</strong>
                                                                    Support</li>
                                                            </ul>
                                                            <div class="text-center mt-5">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-lg btn-outline-danger d-grid">Buy Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')


@endsection