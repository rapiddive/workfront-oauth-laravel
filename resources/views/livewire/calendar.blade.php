@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Calendar</h4>
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
                            <div class="row	">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="card-body">
                                                <div class="mb-5 d-grid">
                                                    <a class="btn btn-primary w-100 fs-15" href="javascript:void(0);"
                                                        data-bs-toggle="modal" data-bs-target="#modalSetSchedule">Add New
                                                        Event</a>
                                                </div>
                                                <nav class="nav main-nav-column main-nav-calendar-event mb-2"
                                                    id="external-events-list">
                                                    <a class="nav-link d-flex mb-2 p-2 br-3 bg-primary-transparent fc-event"
                                                        data-class="bg-primary-transparent" href="javascript:void(0);">
                                                        <span class="p-1 bg-primary ms-2 me-3 br-3"></span>
                                                        <div>calendar Events</div>
                                                    </a>
                                                    <a class="nav-link d-flex mb-2 p-2 bg-success-transparent br-3 fc-event"
                                                        data-class="bg-success-transparent" href="javascript:void(0);">
                                                        <span class="p-1 bg-success ms-2 me-3 br-3"></span>
                                                        <div>Birthday Events</div>
                                                    </a>
                                                    <a class="nav-link d-flex mb-2 p-2 bg-info-transparent br-3 fc-event"
                                                        data-class="bg-info-transparent" href="javascript:void(0);">
                                                        <span class="p-1 bg-info ms-2 me-3 br-3"></span>
                                                        <div>Holiday calendar</div>
                                                    </a>
                                                    <a class="nav-link d-flex mb-2 p-2 bg-danger-transparent br-3 fc-event"
                                                        data-class="bg-danger-transparent" href="javascript:void(0);">
                                                        <span class="p-1 bg-danger ms-2 me-3 br-3"></span>
                                                        <div>Office Events</div>
                                                    </a>
                                                    <a class="nav-link d-flex mb-2 p-2 bg-warning-transparent br-3 fc-event"
                                                        data-class="bg-warning-transparent" href="javascript:void(0);">
                                                        <span class="p-1 bg-warning ms-2 me-3 br-3"></span>
                                                        <div>Other Events</div>
                                                    </a>
                                                    <a class="nav-link d-flex mb-2 p-2 bg-teal-transparent br-3 fc-event"
                                                        data-class="bg-teal-transparent" href="javascript:void(0);">
                                                        <span class="p-1 bg-teal ms-2 me-3 br-3"></span>
                                                        <div>Festival Events</div>
                                                    </a>
                                                    <a class="nav-link d-flex p-2 bg-dark-transparent br-3 fc-event"
                                                        data-class="bg-dark-transparent" href="javascript:void(0);">
                                                        <span class="p-1 bg-dark ms-2 me-3 br-3"></span>
                                                        <div>Timeline Events</div>
                                                    </a>
                                                </nav>
                                                <div class="calendar-image">
                                                    <img src="{{asset('build/assets/images/pngs/10.png')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- MODAL -->
                            <div aria-hidden="true" class="modal main-modal-calendar-schedule" id="modalSetSchedule" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Create New Event</h6><button aria-label="Close" class="btn-close"
                                                data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="mainFormcalendar" method="post" name="mainFormcalendar">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Add title" type="text">
                                                </div>
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="custom-control custom-radio me-4">
                                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1"
                                                            checked>
                                                        <span class="custom-control-label">Event</span>
                                                    </label>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1">
                                                        <span class="custom-control-label">Reminder</span>
                                                    </label>
                                                </div>
                                                <div class="form-group mg-t-30">
                                                    <label class="tx-13 mg-b-5 tx-gray-600">Start Date</label>
                                                    <div class="row row-xs">
                                                        <div class="col-7">
                                                            <input class="form-control" id="mainEventStartDate" placeholder="Select date"
                                                                type="text" value="">
                                                        </div><!-- col-7 -->
                                                        <div class="col-5">
                                                            <select class="select2 main-event-time" data-placeholder="Select time"
                                                                id="mainEventStartTime">
                                                                <option label="Select time">
                                                                    Select time
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="tx-13 mg-b-5 tx-gray-600">End Date</label>
                                                    <div class="row row-xs">
                                                        <div class="col-7">
                                                            <input class="form-control" id="EventEndDate" placeholder="Select date" type="text"
                                                                value="">
                                                        </div><!-- col-7 -->
                                                        <div class="col-5">
                                                            <select class="select2 main-event-time" data-placeholder="Select time"
                                                                id="EventEndTime">
                                                                <option label="Select time">
                                                                    Select time
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Write some description (optional)"
                                                        rows="2"></textarea>
                                                </div>
                                                <div class="d-flex mg-t-15 mg-lg-t-30">
                                                    <a class="btn btn-primary me-4" href="javascript:void(0);">Save</a>
                                                    <a class="btn btn-light" data-bs-dismiss="modal" href="javascript:void(0);">Discard</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL -->

                            <!-- MODAL -->
                            <div aria-hidden="true" class="modal main-modal-calendar-event" id="modalcalendarEvent" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <nav class="nav nav-modal-event">
                                                <a class="nav-link" href="javascript:void(0);"><i class="icon ion-md-open"></i></a>
                                                <a class="nav-link" href="javascript:void(0);"><i class="icon ion-md-trash"></i></a>
                                                <a class="nav-link" data-bs-dismiss="modal" href="javascript:void(0);">
                                                    <i class="icon ion-md-close"></i></a>
                                            </nav>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row row-sm">
                                                <div class="col-sm-6">
                                                    <label class="tx-13 tx-gray-600 mg-b-2">Start Date</label>
                                                    <p class="event-left-date"></p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="tx-13 mg-b-2">End Date</label>
                                                    <p class="event-right-date"></p>
                                                </div>
                                            </div><label class="tx-13 tx-gray-600 mg-b-2">Description</label>
                                            <p class="event-desc tx-gray-900 mg-b-30"></p><a class="btn btn-primary wd-80"
                                                data-bs-dismiss="modal" href="javascript:void(0);">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL -->

@endsection

@section('scripts')

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
        @vite('resources/assets/js/select2.js')


        <!-- INTERNAL Full-calendar js-->
        <script src="{{asset('build/assets/plugins/fullcalendar/moment.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('build/assets/app-calendar-events.js')}}"></script>
        @vite('resources/assets/js/app-calendar.js')


@endsection