@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Chat 2</h4>
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
                                    <div class="col-lg-5 col-xl-4">
                                        <div class="overflow-hidden mb-0 mb-lg-0">
                                            <div class="card-body p-0">
                                                <div class="main-content-left main-content-left-chat">
                                                    <div class="p-4 pb-0 border-bottom">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Search Friends...">
                                                            <button type="button" class="btn btn-primary ">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="main-chat-contacts-wrapper">
                                                        <label class="form-label mb-2 fs-13">Active Contacts (28)</label>
                                                        <div class="main-chat-contacts" id="chatActiveContacts">
                                                            <div>
                                                                <div class="main-img-user online"><img alt=""
                                                                        src="{{asset('build/assets/images/users/12.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <small>Kecia</small>
                                                            </div>
                                                            <div>
                                                                <div class="main-img-user online"><img alt=""
                                                                        src="{{asset('build/assets/images/users/2.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <small>Copp</small>
                                                            </div>
                                                            <div>
                                                                <div class="main-img-user online"><img alt=""
                                                                        src="{{asset('build/assets/images/users/14.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <small>Edwina</small>
                                                            </div>
                                                            <div>
                                                                <div class="main-img-user online"><img alt=""
                                                                        src="{{asset('build/assets/images/users/2.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <small>Uriarte</small>
                                                            </div>
                                                            <div>
                                                                <div class="main-img-user online"><img alt=""
                                                                        src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <small>Ambrose
                                                                    Cawthon</small>
                                                            </div>
                                                            <div>
                                                                <div class="main-img-user online"><img alt=""
                                                                        src="{{asset('build/assets/images/users/3.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <small>Cawthon</small>
                                                            </div>
                                                            <div>
                                                                <div class="main-img-user online"><img alt=""
                                                                        src="{{asset('build/assets/images/users/11.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <small>Celesta</small>
                                                            </div>
                                                            <div>
                                                                <div class="main-img-user online"><img alt=""
                                                                        src="{{asset('build/assets/images/users/1.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <small>Briones</small>
                                                            </div>
                                                            <div>
                                                                <div class="main-chat-contacts-more">
                                                                    20+
                                                                </div><small>More</small>
                                                            </div>
                                                        </div><!-- main-active-contacts -->
                                                    </div><!-- main-chat-active-contacts -->
                                                    <div class="main-chat-list" id="ChatList">
                                                        <a href="javascript:void(0);">
                                                            <div class="media new">
                                                                <div class="main-img-user online">
                                                                    <img alt="" src="{{asset('build/assets/images/users/2.jpg')}}"
                                                                        class="avatar avatar-md brround"><span>2</span>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Melodi Maul</span> <span>2 hours</span>
                                                                    </div>
                                                                    <p>culpa qui officia deserunt...</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="media new">
                                                                <div class="main-img-user">
                                                                    <img alt="" src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                        class="avatar avatar-md brround"><span>1</span>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Lourdes Eiland</span> <span>3 hours</span>
                                                                    </div>
                                                                    <p>Et harum quidem rerum facilis est</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="media selected">
                                                                <div class="main-img-user online"><img alt=""
                                                                        src="{{asset('build/assets/images/users/3.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Zofia Mccutcheon</span> <span>10 hours</span>
                                                                    </div>
                                                                    <p>Nam libero tempore, cum soluta nobis </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="media">
                                                                <div class="main-img-user"><img alt=""
                                                                        src="{{asset('build/assets/images/users/13.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Erlinda Leeder</span> <span>2 days</span>
                                                                    </div>
                                                                    <p>omnis voluptas assumrighta est</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="media">
                                                                <div class="main-img-user"><img alt=""
                                                                        src="{{asset('build/assets/images/users/14.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Randy Booze</span> <span>2 days</span>
                                                                    </div>
                                                                    <p>Temporibus autem quibusdam et </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="media new">
                                                                <div class="main-img-user">
                                                                    <img alt="" src="{{asset('build/assets/images/users/2.jpg')}}"
                                                                        class="avatar avatar-md brround"> <span>1</span>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Camelia Kimber</span> <span>3 days</span>
                                                                    </div>
                                                                    <p>saepe eveniet ut et voluptates </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="media">
                                                                <div class="main-img-user"><img alt=""
                                                                        src="{{asset('build/assets/images/users/7.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Jerome Vowell</span> <span>4 days</span>
                                                                    </div>
                                                                    <p>reicirightis voluptatibus maiores </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="media">
                                                                <div class="main-img-user"><img alt=""
                                                                        src="{{asset('build/assets/images/users/5.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Regine Mccrystal</span> <span>5 days</span>
                                                                    </div>
                                                                    <p>we denounce with righteous indignation</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="media">
                                                                <div class="main-img-user"><img alt=""
                                                                        src="{{asset('build/assets/images/users/6.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Nigel Knarr</span> <span>5 days</span>
                                                                    </div>
                                                                    <p>certain circumstances and owing to the claims</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="media">
                                                                <div class="main-img-user"><img alt=""
                                                                        src="{{asset('build/assets/images/users/12.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Marva Constante</span> <span>5 days</span>
                                                                    </div>
                                                                    <p>Mae cenas tempus, tellus eget co ndimen</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="media">
                                                                <div class="main-img-user"><img alt=""
                                                                        src="{{asset('build/assets/images/users/6.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Twila Hammers</span> <span>6 days</span>
                                                                    </div>
                                                                    <p>certain circumstances and owing to the claims</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="media">
                                                                <div class="main-img-user"><img alt=""
                                                                        src="{{asset('build/assets/images/users/7.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Vertie Raap</span> <span>6 days</span>
                                                                    </div>
                                                                    <p>certain circumstances and owing to the claims </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <div class="media">
                                                                <div class="main-img-user"><img alt=""
                                                                        src="{{asset('build/assets/images/users/8.jpg')}}"
                                                                        class="avatar avatar-md brround"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Cory Gardenhire</span> <span>7 days</span>
                                                                    </div>
                                                                    <p>certain circumstances and owing to the claims...</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div><!-- main-chat-list -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-xl-8">
                                        <div class="border-start">
                                            <div class="main-content-body main-content-body-chat">
                                                <div class="main-chat-header">
                                                    <div class="main-img-user"><img alt=""
                                                            src="{{asset('build/assets/images/users/2.jpg')}}"
                                                            class="avatar avatar-md brround"></div>
                                                    <div class="main-chat-msg-name">
                                                        <h6>Patrenna</h6><small>Last seen: 1 minute ago</small>
                                                    </div>
                                                    <nav class="nav">
                                                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown" >
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-start">
                                                            <li>
                                                                <a href="javascript:void(0);"><i class="fe fe-phone-call me-1"></i>
                                                                    Call</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"><i class="fe fe-video me-1"></i>
                                                                    Videocall</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"><i class="fe fe-mail me-1"></i> New
                                                                    Message</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"><i class="fe fe-settings me-1"></i>
                                                                    Settings</a>
                                                            </li>
                                                        </ul>
                                                        <a class="nav-link d-none d-sm-block" data-bs-toggle="tooltip"
                                                            href="javascript:void(0);" title="Call"><i class="fe fe-phone text-muted"></i></a>
                                                        <a class="nav-link d-none d-sm-block" data-bs-toggle="tooltip"
                                                            href="javascript:void(0);" title="Archive"><i
                                                                class="fe fe-folder-plus text-muted"></i></a>
                                                        <a class="nav-link d-none d-sm-block" data-bs-toggle="tooltip"
                                                            href="javascript:void(0);" title="Trash"><i
                                                                class="fe fe-trash-2 text-muted"></i></a>
                                                        <a class="nav-link d-none d-sm-block" data-bs-toggle="tooltip"
                                                            href="javascript:void(0);" title="View Info"><i
                                                                class="fe fe-alert-octagon text-muted"></i></a>
                                                    </nav>
                                                </div><!-- main-chat-header -->
                                                <div class="main-chat-body" id="ChatBody">
                                                    <div class="content-inner">
                                                        <label class="main-chat-time"><span class="bg-primary-transparent">3
                                                                days ago</span></label>
                                                        <div class="media flex-row-reverse">
                                                            <div class="main-img-user online"><img alt=""
                                                                    src="{{asset('build/assets/images/users/2.jpg')}}"
                                                                    class="avatar avatar-md brround"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Ut enim ad minima veniam, quis nostrum exercitationem
                                                                    ullam
                                                                    corporis suscipit laboriosam, nisi ut aliquid ex ea
                                                                    commodi
                                                                </div>
                                                                <div class="main-msg-wrapper">
                                                                    sed quia non numquam eius modi tempora incidunt ut
                                                                    labore
                                                                </div>
                                                                <div class="main-msg-wrapper">
                                                                    sed quia non numquam eius modi tempora incidunt ut
                                                                    labore
                                                                </div>
                                                                <div>
                                                                    <span>9:48 am</span> <a href="javascript:void(0);"><i
                                                                            class="icon ion-android-more-horizontal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media">
                                                            <div class="main-img-user online"><img alt=""
                                                                    src="{{asset('build/assets/images/users/14.jpg')}}"
                                                                    class="avatar avatar-md brround"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Nor again is there anyone who loves or pursues or
                                                                    desires to
                                                                    obtain pain of itself
                                                                </div>
                                                                <div class="main-msg-wrapper">
                                                                    pursues or desires to obtain pain of itself
                                                                </div>
                                                                <div class="main-msg-wrapper">
                                                                    who loves or pursues or Nor again is there anyone
                                                                </div>
                                                                <div>
                                                                    <span>9:32 am</span> <a href="javascript:void(0);"><i
                                                                            class="icon ion-android-more-horizontal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media flex-row-reverse">
                                                            <div class="main-img-user online"><img alt=""
                                                                    src="{{asset('build/assets/images/users/2.jpg')}}"
                                                                    class="avatar avatar-md brround"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Nullam dictum felis eu pede mollis pretium
                                                                </div>
                                                                <div>
                                                                    <span>11:22 am</span> <a href="javascript:void(0);"><i
                                                                            class="icon ion-android-more-horizontal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div><label class="main-chat-time"><span
                                                                class="bg-primary-transparent">Yesterday</span></label>
                                                        <div class="media">
                                                            <div class="main-img-user online"><img alt=""
                                                                    src="{{asset('build/assets/images/users/14.jpg')}}"
                                                                    class="avatar avatar-md brround"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                                    elit.
                                                                    Aenean commodo ligula eget dolor.
                                                                </div>
                                                                <div>
                                                                    <span>9:32 am</span> <a href="javascript:void(0);"><i
                                                                            class="icon ion-android-more-horizontal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media flex-row-reverse">
                                                            <div class="main-img-user online"><img alt=""
                                                                    src="{{asset('build/assets/images/users/2.jpg')}}"
                                                                    class="avatar avatar-md brround"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    To take a trivial example, which of us ever undertakes
                                                                    laborious physical exercise, except to obtain some
                                                                    advantage
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media flex-row-reverse mt-1">
                                                            <div class="main-img-user online"><img alt=""
                                                                    src="{{asset('build/assets/images/users/2.jpg')}}"
                                                                    class="avatar avatar-md brround"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Et harum quidem rerum facilis est et expedita distinctio
                                                                </div>
                                                                <div>
                                                                    <span>9:48 am</span> <a href="javascript:void(0);"><i
                                                                            class="icon ion-android-more-horizontal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label class="main-chat-time"><span
                                                                class="bg-primary-transparent">Today</span></label>
                                                        <div class="media">
                                                            <div class="main-img-user online"><img alt=""
                                                                    src="{{asset('build/assets/images/users/14.jpg')}}"
                                                                    class="avatar avatar-md brround"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Et harum quidem rerum facilis est et expedita distinctio
                                                                </div>
                                                                <div class="main-msg-wrapper">
                                                                    To take a trivial example, which of us ever undertakes
                                                                    laborious physical exercise, except to obtain some
                                                                    advantage
                                                                </div>
                                                                <div>
                                                                    <span>10:12 am</span> <a href="javascript:void(0);"><i
                                                                            class="icon ion-android-more-horizontal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media flex-row-reverse">
                                                            <div class="main-img-user online"><img alt=""
                                                                    src="{{asset('build/assets/images/users/2.jpg')}}"
                                                                    class="avatar avatar-md brround"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Et harum quidem rerum facilis est et expedita distinctio
                                                                </div>
                                                                <div class="main-msg-wrapper">
                                                                    To take a trivial example, which of us ever undertakes
                                                                    laborious physical exercise, except to obtain some
                                                                    advantage
                                                                </div>
                                                                <div>
                                                                    <span>09:40 am</span> <a href="javascript:void(0);"><i
                                                                            class="icon ion-android-more-horizontal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-chat-footer">
                                                    <nav class="nav">
                                                        <a href="javascript:void(0);" class="nav-link"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Camera"><i
                                                                class="fe fe-camera fs-20 text-muted"></i></a>
                                                        <a href="javascript:void(0);" class="nav-link"
                                                            data-bs-toggle="tooltip" title="" data-bs-original-title="Emoji"><i
                                                                class="fa fa-smile-o fs-20 text-muted"></i></a>
                                                        <a href="javascript:void(0);" class="nav-link"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Attach"><i
                                                                class="fe fe-paperclip fs-20 text-muted"></i></a>
                                                    </nav>
                                                    <input class="form-control" placeholder="Type your message here..."
                                                        type="text"> <a class="main-msg-send" href="javascript:void(0);"><i
                                                            class="fa fa-paper-plane-o text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')

        <!-- LIGHTSLIDER JS -->
        <script src="{{asset('build/assets/plugins/lightslider/js/lightslider.min.js')}}"></script>

        <!-- INTERNAL CHAT JS -->
        @vite('resources/assets/js/chat2.js')


@endsection