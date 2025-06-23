@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Form Wizard</h4>
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
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Form Wizard</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="smartwizard-3">
                                                <ul>
                                                    <li><a href="#step-10">Login</a></li>
                                                    <li><a href="#step-11">New User</a></li>
                                                    <li><a href="#step-12">End</a></li>
                                                </ul>
                                                <div>
                                                    <div id="step-10">
                                                        <form>
                                                            <div class="form-group">
                                                                <label>Email address</label>
                                                                <input type="email" class="form-control"
                                                                    id="exampleInputEmail6"
                                                                    placeholder="Enter email address">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <input type="password" class="form-control"
                                                                    id="exampleInputPassword7" placeholder="Password">
                                                            </div>
                                                            <div class="checkbox">
                                                                <div class="custom-checkbox custom-control">
                                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                                        class="custom-control-input" id="checkbox-9">
                                                                    <label class="custom-control-label">Check me Out</label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="step-11">
                                                        <form>
                                                            <div class="form-group">
                                                                <label>User Name</label>
                                                                <input type="text" class="form-control" id="inputtext"
                                                                    placeholder="Enter User Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email address</label>
                                                                <input type="email" class="form-control"
                                                                    id="exampleInputEmail8"
                                                                    placeholder="Enter email address">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <input type="password" class="form-control"
                                                                    id="exampleInputPassword9" placeholder="Password">
                                                            </div>
                                                            <div class="checkbox">
                                                                <div class="custom-checkbox custom-control">
                                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                                        class="custom-control-input" id="checkbox-3">
                                                                    <label for="checkbox-3"
                                                                        class="custom-control-label">Check
                                                                        me Out</label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="step-12">
                                                        <div class="checkbox">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" data-checkboxes="mygroup"
                                                                    class="custom-control-input" id="checkbox2">
                                                                <label for="checkbox2" class="custom-control-label">I agree
                                                                    terms & Conditions</label>
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
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Accordion-Wizard-Form</h3>
                                        </div>
                                        <div class="card-body">
                                            <form id="form">
                                                <div class="list-group">
                                                    <div class="list-group-item" data-acc-step>
                                                        <h5 class="mb-0 d-flex" data-acc-title><span
                                                                class="form-wizard-title">Name &amp; Email</span></h5>
                                                        <div data-acc-content>
                                                            <div class="my-3">
                                                                <div class="form-group">
                                                                    <label>Name:</label>
                                                                    <input type="text" name="name" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Email:</label>
                                                                    <input type="text" name="email" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item" data-acc-step>
                                                        <h5 class="mb-0 d-flex" data-acc-title><span
                                                                class="form-wizard-title">Contact</span></h5>
                                                        <div data-acc-content>
                                                            <div class="my-3">
                                                                <div class="form-group">
                                                                    <label>Telephone:</label>
                                                                    <input type="text" name="telephone"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Mobile:</label>
                                                                    <input type="text" name="mobile" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item" data-acc-step>
                                                        <h5 class="mb-0 d-flex" data-acc-title><span
                                                                class="form-wizard-title">Payment</span></h5>
                                                        <div data-acc-content>
                                                            <div class="my-3">
                                                                <div class="form-group">
                                                                    <label>Credit card:</label>
                                                                    <input type="text" name="card" class="form-control">
                                                                </div>
                                                                <div class="form-group form-row">
                                                                    <div class="col-sm-4">
                                                                        <label>Expiry:</label>
                                                                        <input type="text" name="expiry"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label>CVV:</label>
                                                                        <input type="text" name="cvv" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Basic Content Wizard
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="wizard1">
                                                <h3>Personal Information</h3>
                                                <section>
                                                    <h2 class="d-none">Personal Information</h2>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" class="form-control required" placeholder="Name">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" class="form-control required"
                                                            placeholder="Email Address">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Phone Number</label>
                                                        <input type="number" class="form-control required"
                                                            placeholder="Number">
                                                    </div>
                                                    <div class="control-group form-group mb-0">
                                                        <label class="form-label">Address</label>
                                                        <input type="text" class="form-control required"
                                                            placeholder="Address">
                                                    </div>
                                                </section>
                                                <h3>Billing Information</h3>
                                                <section>
                                                    <h2 class="d-none">Billing Information</h2>
                                                    <div class="table-responsive mg-t-20">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Cart Subtotal</td>
                                                                    <td class="text-end">$792.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span>Totals</span></td>
                                                                    <td class="text-end text-muted"><span>$792.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span>Order Total</span></td>
                                                                    <td>
                                                                        <h2 class="price text-end mb-0">$792.00</h2>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </section>
                                                <h3>Payment Details</h3>
                                                <section>
                                                    <h2 class="d-none">Payment Details</h2>
                                                    <div class="form-group">
                                                        <label class="form-label">CardHolder Name</label>
                                                        <input type="text" class="form-control" id="name1"
                                                            placeholder="First Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Card number</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Search for...">
                                                            <button class="btn btn-info btn-sm" type="button"><i
                                                                    class="fa fa-cc-visa"></i> &nbsp; <i
                                                                    class="fa fa-cc-amex"></i> &nbsp;
                                                                <i class="fa fa-cc-mastercard"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group mb-sm-0">
                                                                <label class="form-label">Expiration</label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control"
                                                                        placeholder="MM" name="expiremonth">
                                                                    <input type="number" class="form-control"
                                                                        placeholder="YY" name="expireyear">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 ">
                                                            <div class="form-group mb-0">
                                                                <label class="form-label">CVV <i
                                                                        class="fa fa-question-circle"></i></label>
                                                                <input type="number" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Basic Wizard With Validation
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="wizard2">
                                                <h3>Personal Information</h3>
                                                <section>
                                                    <h2 class="d-none">Personal Information</h2>
                                                    <div class="row ">
                                                        <div class="col-md-5 col-lg-4 mb-4">
                                                            <label class="form-control-label">Firstname: <span
                                                                    class="tx-danger">*</span></label>
                                                            <input class="form-control" id="firstname" name="firstname"
                                                                placeholder="Enter firstname" required="" type="text">
                                                        </div>
                                                        <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                                                            <label class="form-control-label">Lastname: <span
                                                                    class="tx-danger">*</span></label>
                                                            <input class="form-control" id="lastname" name="lastname"
                                                                placeholder="Enter lastname" required="" type="text">
                                                        </div>
                                                    </div>
                                                </section>
                                                <h3>Billing Information</h3>
                                                <section>
                                                    <h2 class="d-none">Billing Information</h2>
                                                    <p>Wonderful transition effects.</p>
                                                    <div class="form-group wd-xs-300">
                                                        <label class="form-control-label">Email: <span
                                                                class="tx-danger">*</span></label>
                                                        <input class="form-control" id="email" name="email"
                                                            placeholder="Enter email address" required="" type="email">
                                                    </div>
                                                </section>
                                                <h3>Payment Details</h3>
                                                <section>
                                                    <h2 class="d-none">Payment Details</h2>
                                                    <div class="form-group">
                                                        <label class="form-label">CardHolder Name</label>
                                                        <input type="text" class="form-control" id="name11"
                                                            placeholder="First Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Card number</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Search for...">
                                                            <button class="btn btn-info btn-sm" type="button"><i
                                                                    class="fa fa-cc-visa"></i> &nbsp; <i
                                                                    class="fa fa-cc-amex"></i> &nbsp;
                                                                <i class="fa fa-cc-mastercard"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group mb-sm-0">
                                                                <label class="form-label">Expiration</label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control"
                                                                        placeholder="MM" name="expiremonth">
                                                                    <input type="number" class="form-control"
                                                                        placeholder="YY" name="expireyear">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 ">
                                                            <div class="form-group mb-0">
                                                                <label class="form-label">CVV <i
                                                                        class="fa fa-question-circle"></i></label>
                                                                <input type="number" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Vertical Orientation Wizard
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="wizard3">
                                                <h3>Personal Information</h3>
                                                <section>
                                                    <h2 class="d-none">Personal Information</h2>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" class="form-control required" placeholder="Name">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" class="form-control required"
                                                            placeholder="Email Address">
                                                    </div>
                                                    <div class="control-group form-group">
                                                        <label class="form-label">Phone Number</label>
                                                        <input type="number" class="form-control required"
                                                            placeholder="Number">
                                                    </div>
                                                    <div class="control-group form-group mb-0">
                                                        <label class="form-label">Address</label>
                                                        <input type="text" class="form-control required"
                                                            placeholder="Address">
                                                    </div>
                                                </section>
                                                <h3>Billing Information</h3>
                                                <section>
                                                    <h2 class="d-none">Billing Information</h2>
                                                    <div class="table-responsive mg-t-20">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Cart Subtotal</td>
                                                                    <td class="text-end">$792.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span>Totals</span></td>
                                                                    <td class="text-end text-muted"><span>$792.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span>Order Total</span></td>
                                                                    <td>
                                                                        <h2 class="price text-end mb-0">$792.00</h2>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </section>
                                                <h3>Payment Details</h3>
                                                <section>
                                                    <h2 class="d-none">Payment Details</h2>
                                                    <div class="form-group">
                                                        <label class="form-label">CardHolder Name</label>
                                                        <input type="text" class="form-control" id="name12"
                                                            placeholder="First Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Card number</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Search for...">
                                                            <button class="btn btn-info btn-sm" type="button"><i
                                                                    class="fa fa-cc-visa"></i> &nbsp; <i
                                                                    class="fa fa-cc-amex"></i> &nbsp;
                                                                <i class="fa fa-cc-mastercard"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group mb-sm-0">
                                                                <label class="form-label">Expiration</label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control"
                                                                        placeholder="MM" name="expiremonth">
                                                                    <input type="number" class="form-control"
                                                                        placeholder="YY" name="expireyear">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 ">
                                                            <div class="form-group mb-0">
                                                                <label class="form-label">CVV <i
                                                                        class="fa fa-question-circle"></i></label>
                                                                <input type="number" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- INTERNAl JQUERY.STEPS JS -->
        <script src="{{asset('build/assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/parsleyjs/parsley.min.js')}}"></script>

        <!-- INTERNAl FORM-WIZARD JS -->
        <script src="{{asset('build/assets/plugins/formwizard/jquery.smartWizard.js')}}"></script>
        <script src="{{asset('build/assets/plugins/formwizard/fromwizard.js')}}"></script>

        <!-- INTERNAl ACCORDION-WIZARD-FORM JS -->
        <script src="{{asset('build/assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js')}}"></script>
        @vite('resources/assets/js/form-wizard.js')


        @vite('resources/assets/js/form-wizard2.js')


@endsection