@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">List</h4>
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
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Basic List Group</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">Cras justo odio</li>
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                                <li class="list-group-item">Morbi leo risus</li>
                                                <li class="list-group-item">Porta ac consectetur ac</li>
                                                <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Active List item</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item active">Cras justo odio</li>
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                                <li class="list-group-item">Morbi leo risus</li>
                                                <li class="list-group-item">Porta ac consectetur ac</li>
                                                <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Default Active Link List</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="panel panel-default">
                                                <div class="list-group">
                                                    <a href="javascript:void(0);" class="list-group-item">Cras justo
                                                        odio</a>
                                                    <a href="javascript:void(0);" class="list-group-item active">Dapibus ac
                                                        facilisis in</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Morbi leo
                                                        risus</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Porta ac
                                                        consectetur
                                                        ac</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Vestibulum at
                                                        eros</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Primary Active Link List</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="panel panel-primary">
                                                <div class="list-group">
                                                    <a href="javascript:void(0);" class="list-group-item">Cras justo
                                                        odio</a>
                                                    <a href="javascript:void(0);" class="list-group-item active">Dapibus ac
                                                        facilisis in</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Morbi leo
                                                        risus</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Porta ac
                                                        consectetur
                                                        ac</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Vestibulum at
                                                        eros</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Success Active Link List</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="panel panel-success">
                                                <div class="list-group">
                                                    <a href="javascript:void(0);" class="list-group-item">Cras justo
                                                        odio</a>
                                                    <a href="javascript:void(0);" class="list-group-item active">Dapibus ac
                                                        facilisis in</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Morbi leo
                                                        risus</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Porta ac
                                                        consectetur
                                                        ac</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Vestibulum at
                                                        eros</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Info Active Link List</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="panel panel-info">
                                                <div class="list-group">
                                                    <a href="javascript:void(0);" class="list-group-item">Cras justo
                                                        odio</a>
                                                    <a href="javascript:void(0);" class="list-group-item active">Dapibus ac
                                                        facilisis in</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Morbi leo
                                                        risus</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Porta ac
                                                        consectetur
                                                        ac</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Vestibulum at
                                                        eros</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Warning Active Link List</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="panel panel-warning">
                                                <div class="list-group">
                                                    <a href="javascript:void(0);" class="list-group-item">Cras justo
                                                        odio</a>
                                                    <a href="javascript:void(0);" class="list-group-item active">Dapibus ac
                                                        facilisis in</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Morbi leo
                                                        risus</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Porta ac
                                                        consectetur
                                                        ac</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Vestibulum at
                                                        eros</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">list styles</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="panel panel-danger">
                                                <div class="list-group">
                                                    <a href="javascript:void(0);" class="list-group-item">Cras justo
                                                        odio</a>
                                                    <a href="javascript:void(0);" class="list-group-item active">Dapibus ac
                                                        facilisis in</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Morbi leo
                                                        risus</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Porta ac
                                                        consectetur
                                                        ac</a>
                                                    <a href="javascript:void(0);" class="list-group-item">Vestibulum at
                                                        eros</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Order list</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="listorder">Cras justo odio</li>
                                                <li class="listorder">Dapibus ac facilisis in</li>
                                                <li class="listorder">Morbi leo risus</li>
                                                <li class="listorder">Porta ac consectetur ac</li>
                                                <li class="listorder">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Unorder list</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="listunorder">Cras justo odio</li>
                                                <li class="listunorder">Dapibus ac facilisis in</li>
                                                <li class="listunorder">Morbi leo risus</li>
                                                <li class="listunorder">Porta ac consectetur ac</li>
                                                <li class="listunorder">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Disabled List item</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item disabled">Cras justo odio</li>
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                                <li class="list-group-item">Morbi leo risus</li>
                                                <li class="list-group-item">Porta ac consectetur ac</li>
                                                <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Contextual classes with List Group</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                                <li class="list-group-item list-group-item-success">Dapibus ac facilisis in
                                                </li>
                                                <li class="list-group-item list-group-item-info">Cras sit amet nibh libero
                                                </li>
                                                <li class="list-group-item list-group-item-warning">Porta ac consectetur ac
                                                </li>
                                                <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">List Group with icons</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><i class="fa fa-check me-2"
                                                        aria-hidden="true"></i>
                                                    Cras justo odio</li>
                                                <li class="list-group-item"><i class="fa fa-check me-2"
                                                        aria-hidden="true"></i>
                                                    Dapibus ac facilisis in</li>
                                                <li class="list-group-item"><i class="fa fa-check me-2"
                                                        aria-hidden="true"></i>
                                                    Morbi leo risus</li>
                                                <li class="list-group-item"><i class="fa fa-check me-2"
                                                        aria-hidden="true"></i>
                                                    Porta ac consectetur ac</li>
                                                <li class="list-group-item"><i class="fa fa-check me-2"
                                                        aria-hidden="true"></i>
                                                    Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">List Group with colored icons</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><i class="fa fa-cog text-primary me-2"
                                                        aria-hidden="true"></i> Dapibus ac facilisis in</li>
                                                <li class="list-group-item"><i class="fa fa-cog text-danger me-2"
                                                        aria-hidden="true"></i> Dapibus ac facilisis in</li>
                                                <li class="list-group-item"><i class="fa fa-cog text-success me-2"
                                                        aria-hidden="true"></i> Cras sit amet nibh libero</li>
                                                <li class="list-group-item"><i class="fa fa-cog text-warning me-2"
                                                        aria-hidden="true"></i> Porta ac consectetur ac</li>
                                                <li class="list-group-item"><i class="fa fa-cog text-info me-2"
                                                        aria-hidden="true"></i> Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Unorder List Style</h3>
                                        </div>
                                        <div class="card-body ps-5 pe-5">
                                            <ul class="list-style">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Unorder List Style2</h3>
                                        </div>
                                        <div class="card-body ps-5 pe-5">
                                            <ul class="list-style2">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Unorder List Style3</h3>
                                        </div>
                                        <div class="card-body ps-5 pe-5">
                                            <ul class="list-style3">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Unorder List Style4</h3>
                                        </div>
                                        <div class="card-body ps-5 pe-5">
                                            <ul class="list-style4">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Unorder List Style5</h3>
                                        </div>
                                        <div class="card-body ps-5 pe-5">
                                            <ul class="list-style5">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Unorder List Style6</h3>
                                        </div>
                                        <div class="card-body ps-5 pe-5">
                                            <ul class="list-style6">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Order list</h3>
                                        </div>
                                        <div class="card-body ps-5 pe-5">
                                            <ol class="order-list">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ol class="order-list">
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ol>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Order With unorder</h3>
                                        </div>
                                        <div class="card-body ps-5 pe-5">
                                            <ol class="order-list">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul class="list-style4 ps-5">
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">List Group With defalut badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    Cras justo odio
                                                    <span class="badgetext badge badge-default rounded-pill">14</span>
                                                </li>
                                                <li class="list-group-item">
                                                    Dapibus ac facilisis in
                                                    <span class=" badgetext badge badge-default rounded-pill">2</span>
                                                </li>
                                                <li class="list-group-item">
                                                    Morbi leo risus
                                                    <span class=" badgetext badge badge-default rounded-pill">1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">List Group With color badges</h3>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item justify-content-between">
                                                    Cras justo odio
                                                    <span class="badgetext badge bg-primary rounded-pill">14</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Dapibus ac facilisis in
                                                    <span class="badgetext badge bg-danger rounded-pill">2</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Morbi leo risus
                                                    <span class="badgetext badge bg-success rounded-pill">1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">List Group With Custom content</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="list-group">
                                                <a href="javascript:void(0);"
                                                    class="list-group-item list-group-item-action flex-column active">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small>3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                                        Maecenas
                                                        sed diam eget risus varius blandit.</p>
                                                    <small>Donec id elit non mi porta.</small>
                                                </a>
                                                <a href="javascript:void(0);"
                                                    class="list-group-item list-group-item-action flex-column">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                                        Maecenas
                                                        sed diam eget risus varius blandit.</p>
                                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                                </a>
                                                <a href="javascript:void(0);"
                                                    class="list-group-item list-group-item-action flex-column">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                                        Maecenas
                                                        sed diam eget risus varius blandit.</p>
                                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">List Group With Disabled Custom content</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="list-group">
                                                <a href="javascript:void(0);"
                                                    class="list-group-item list-group-item-action flex-column disabled">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small>3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                                        Maecenas
                                                        sed diam eget risus varius blandit.</p>
                                                    <small>Donec id elit non mi porta.</small>
                                                </a>
                                                <a href="javascript:void(0);"
                                                    class="list-group-item list-group-item-action flex-column disabled">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                                        Maecenas
                                                        sed diam eget risus varius blandit.</p>
                                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                                </a>
                                                <a href="javascript:void(0);"
                                                    class="list-group-item list-group-item-action flex-column disabled">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                                        Maecenas
                                                        sed diam eget risus varius blandit.</p>
                                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')


@endsection