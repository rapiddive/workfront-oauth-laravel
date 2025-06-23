@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Contact List 2</h4>
                                </div>
                                <div class="page-rightheader">
                                    <div>
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
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW -->
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-xl-3">
                                        <div class="border-end">
                                            <div class="main-content-left main-content-left-contacts">
                                                <div class="card-header">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Search Contacts">
                                                        <button type="button" class="btn btn-primary ">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="main-contacts-list" id="mainContactList">
                                                    <div class="main-contact-label bg-light">
                                                        A
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/12.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Arlena Soles</h6><span class="phone">+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user"><img alt=""
                                                                src="{{asset('build/assets/images/users/1.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Athena Manske</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user"><img alt=""
                                                                src="{{asset('build/assets/images/users/3.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Amalia Peng</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user"><img alt=""
                                                                src="{{asset('build/assets/images/users/3.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Anita Garza</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-label bg-light">
                                                        B
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user"><img alt=""
                                                                src="{{asset('build/assets/images/users/4.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Bret Guadalupe</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/5.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Britney Labares</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/5.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Basil Ambrose</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-label bg-light">
                                                        C
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user"><img alt=""
                                                                src="{{asset('build/assets/images/users/6.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Cinda Hope</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/6.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Chassidy Kerr</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/7.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Chau Weldy</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-label bg-light">
                                                        D
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/7.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Daniela Agrawal</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user"><img alt=""
                                                                src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Dori Daring</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Dalton Gracia</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/7.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Daniela Agrawal</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user"><img alt=""
                                                                src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Dori Daring</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Dalton Gracia</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/7.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Daniela Agrawal</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user"><img alt=""
                                                                src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Dori Daring</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Dalton Gracia</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/7.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Daniela Agrawal</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user"><img alt=""
                                                                src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Dori Daring</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Dalton Gracia</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/7.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Daniela Agrawal</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user"><img alt=""
                                                                src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Dori Daring</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Dalton Gracia</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-label bg-light">
                                                        E
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user"><img alt=""
                                                                src="{{asset('build/assets/images/users/4.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Eret Guadalupe</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/5.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Eritney Labares</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/5.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Easil Ambrose</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/7.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Daniela Agrawal</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user"><img alt=""
                                                                src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Dori Daring</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Dalton Gracia</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-item">
                                                        <div class="main-img-user online"><img alt=""
                                                                src="{{asset('build/assets/images/users/7.jpg')}}"
                                                                class="avatar avatar-md brround"></div>
                                                        <div class="main-contact-body">
                                                            <h6>Daniela Agrawal</h6><span>+1-457-658-856</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-9">
                                        <div>
                                            <div class="main-content-body main-content-body-contacts">
                                                <div class="main-contact-info-header bg-contacthead">
                                                    <div class="media">
                                                        <div class="main-img-user brround">
                                                            <img alt="" src="{{asset('build/assets/images/users/2.jpg')}}"
                                                                class="w-100 h-100 br-7">
                                                            <a href="javascript:void(0);"><i class="fe fe-camera"></i></a>
                                                        </div>
                                                        <div class="media-body text-white">
                                                            <h4 class="text-white">Patrenna</h4>
                                                            <p>Web Designer</p>
                                                            <nav class="nav contact-icons">
                                                                <a role="button"
                                                                    class="btn text-white bg-white-50 me-2 mb-2"
                                                                    href="javascript:void(0);"><i class="fe fe-phone"></i>
                                                                    Call</a>
                                                                <a role="button"
                                                                    class="btn text-white bg-white-50 me-2 mb-2"
                                                                    href="javascript:void(0);"><i class="fe fe-mail"></i>
                                                                    Message</a>
                                                                <a role="button"
                                                                    class="btn text-white bg-white-50 me-2 mb-2"
                                                                    href="javascript:void(0);"><i
                                                                        class="fe fe-user-plus"></i>
                                                                    Add to Group</a>
                                                                <a role="button"
                                                                    class="btn text-white bg-white-50 me-2 mb-2"
                                                                    href="javascript:void(0);"><i class="fe fe-slash"></i>
                                                                    Block</a>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                    <div class="main-contact-action">
                                                        <a href="javascript:void(0);" class="btn btn-success"> Edit Profile</a>
                                                        <a href="javascript:void(0);" class="btn btn-primary">Delete</a>
                                                    </div>
                                                </div>
                                                <div class="main-contact-info-body">
                                                    <div class="card-body">
                                                        <h6 class="text-primary">Biography</h6>
                                                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus
                                                            error
                                                            sit voluptatem accusantium doloremque uis aute irure dolor in
                                                            reprehrighterit in voluptate velit esse cillum dolore eu fugiat
                                                            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                            sunt
                                                            in culpa qui officia deserunt mollit anim id est laborum.
                                                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                                            aut
                                                            fugit, sed quia consequuntur magni dolores eos qui ratione
                                                            voluptatem sequi nesciunt.</p>
                                                        <p class="text-muted"> aute irure dolor in reprehrighterit in
                                                            voluptate
                                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                                            sint
                                                            occaecat cupidatat non proident, sunt in culpa qui officia
                                                            deserunt
                                                            mollit anim id est laborum. laudantium, totam rem aperiam, eaque
                                                            ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                                            vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                                            voluptas
                                                            sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                                            dolores eos qui ratione voluptatem sequiSed ut perspiciatis unde
                                                            omnis iste natus error sit voluptatem accusantium doloremque
                                                            uisSed
                                                            ut perspiciatis unde omnis iste natus error sit voluptatem
                                                            accusantium doloremque uis nesciunt.</p>
                                                    </div>
                                                    <div class="media-list p-0">
                                                        <div class="media py-4 mt-0">
                                                            <div class="media-body">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="media-icon bg-primary-transparent border-primary me-3 mt-1">
                                                                        <i class="fa fa-phone"></i>
                                                                    </div>
                                                                    <div class="w-70">
                                                                        <label>Work</label> <span
                                                                            class="font-weight-normal1 fs-14">+1 (425) 857
                                                                            5463</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="media-icon bg-primary-transparent border-primary me-3 mt-1">
                                                                        <i class="fa fa-phone"></i>
                                                                    </div>
                                                                    <div class="w-70">
                                                                        <label>Personal</label> <span
                                                                            class="font-weight-normal1 fs-14">+1 (547) 542
                                                                            3568</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media py-4 border-top mt-0">
                                                            <div class="media-body">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="media-icon bg-primary-transparent border-primary me-3 mt-1">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </div>
                                                                    <div class="w-70">
                                                                        <label>Gmail Account</label> <span
                                                                            class="font-weight-normal1 fs-14">arlena.soles@gmail.com</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="media-icon bg-primary-transparent border-primary me-3 mt-1">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </div>
                                                                    <div class="w-70">
                                                                        <label>Other Account</label> <span
                                                                            class="font-weight-normal1 fs-14">me@spruko.com</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media py-4 border-top mt-0">
                                                            <div class="media-body">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="media-icon bg-primary-transparent border-primary me-3 mt-1">
                                                                        <i class="fa fa-map-marker"></i>
                                                                    </div>
                                                                    <div class="w-70">
                                                                        <label>Current Address</label> <span
                                                                            class="font-weight-normal1 fs-14">012 San
                                                                            Francisco,
                                                                            California 13245</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="media-icon bg-primary-transparent border-primary me-3 mt-1">
                                                                        <i class="fa fa-clock-o"></i>
                                                                    </div>
                                                                    <div class="w-70">
                                                                        <label>Call History</label> <a
                                                                            class="font-weight-normal1 fs-14"
                                                                            href="javascript:void(0);">Duration of last
                                                                            call: 2m
                                                                            32sec</a>
                                                                    </div>
                                                                </div>
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

@endsection

@section('scripts')

        <!-- INTERNAL CONTACT JS -->
        @vite('resources/assets/js/contact.js')
        

@endsection