@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Buttons</h4>
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
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Default Button</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0);" class="btn btn-light">Light</a>
                                                <a href="javascript:void(0);" class="btn btn-primary">Primary</a>
                                                <a href="javascript:void(0);" class="btn btn-secondary">Secondary</a>
                                                <a href="javascript:void(0);" class="btn btn-success">Success</a>
                                                <a href="javascript:void(0);" class="btn btn-info">Info</a>
                                                <a href="javascript:void(0);" class="btn btn-warning">Warning</a>
                                                <a href="javascript:void(0);" class="btn btn-danger">Danger</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Disabled buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0);" class="btn btn-light disabled">Light</a>
                                                <a href="javascript:void(0);" class="btn btn-primary disabled">Primary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-secondary disabled">Secondary</a>
                                                <a href="javascript:void(0);" class="btn btn-success disabled">Success</a>
                                                <a href="javascript:void(0);" class="btn btn-info disabled">Info</a>
                                                <a href="javascript:void(0);" class="btn btn-warning disabled">Warning</a>
                                                <a href="javascript:void(0);" class="btn btn-danger disabled">Danger</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Square buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0);" class="btn btn-square btn-light">Light</a>
                                                <a href="javascript:void(0);" class="btn btn-square btn-primary">Primary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-square btn-secondary">Secondary</a>
                                                <a href="javascript:void(0);" class="btn btn-square btn-success">Success</a>
                                                <a href="javascript:void(0);" class="btn btn-square btn-info">Info</a>
                                                <a href="javascript:void(0);" class="btn btn-square btn-warning">Warning</a>
                                                <a href="javascript:void(0);" class="btn btn-square btn-danger">Danger</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Rounded buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0);" class="btn btn-pill btn-light">Light</a>
                                                <a href="javascript:void(0);" class="btn btn-pill btn-primary">Primary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill btn-secondary">Secondary</a>
                                                <a href="javascript:void(0);" class="btn btn-pill btn-success">Success</a>
                                                <a href="javascript:void(0);" class="btn btn-pill btn-info">Info</a>
                                                <a href="javascript:void(0);" class="btn btn-pill btn-warning">Warning</a>
                                                <a href="javascript:void(0);" class="btn btn-pill btn-danger">Danger</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Light buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0);" class="btn bg-primary-transparent">Primary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn bg-secondary-transparent">Secondary</a>
                                                <a href="javascript:void(0);" class="btn bg-success-transparent">Success</a>
                                                <a href="javascript:void(0);" class="btn bg-info-transparent">Info</a>
                                                <a href="javascript:void(0);" class="btn bg-teal-transparent">Teal</a>
                                                <a href="javascript:void(0);" class="btn bg-warning-transparent">Warning</a>
                                                <a href="javascript:void(0);" class="btn bg-danger-transparent">Danger</a>
                                                <a href="javascript:void(0);" class="btn bg-dark-transparent">Dark</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Disabled Light buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0);"
                                                    class="btn bg-primary-transparent disabled">Primary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn bg-secondary-transparent disabled">Secondary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn bg-success-transparent disabled">Success</a>
                                                <a href="javascript:void(0);"
                                                    class="btn bg-info-transparent disabled">Info</a>
                                                <a href="javascript:void(0);"
                                                    class="btn bg-teal-transparent disabled">Teal</a>
                                                <a href="javascript:void(0);"
                                                    class="btn bg-warning-transparent disabled">Warning</a>
                                                <a href="javascript:void(0);"
                                                    class="btn bg-danger-transparent disabled">Danger</a>
                                                <a href="javascript:void(0);"
                                                    class="btn bg-dark-transparent disabled">Dark</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Light Rounded buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-primary-transparent">Primary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-secondary-transparent">Secondary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-success-transparent">Success</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-info-transparent">Info</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-teal-transparent">Teal</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-warning-transparent">Warning</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-danger-transparent">Danger</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-dark-transparent">Dark</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Disabled Light Rounded buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-primary-transparent disabled">Primary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-secondary-transparent disabled">Secondary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-success-transparent disabled">Success</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-info-transparent disabled">Info</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-teal-transparent disabled">Teal</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-warning-transparent disabled">Warning</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-danger-transparent disabled">Danger</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-pill bg-dark-transparent disabled">Dark</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Light Icon buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button" class="btn bg-primary-transparent"><i
                                                        class="fe fe-plus"></i></button>
                                                <button type="button" class="btn bg-warning-transparent"><i
                                                        class="fe fe-heart"></i></button>
                                                <button type="button" class="btn bg-success-transparent"><i
                                                        class="fe fe-check"></i></button>
                                                <button type="button" class="btn bg-danger-transparent"><i
                                                        class="fe fe-link"></i></button>
                                                <button type="button" class="btn bg-info-transparent"><i
                                                        class="fe fe-message-circle"></i></button>
                                                <button type="button" class="btn bg-teal-transparent"><i
                                                        class="fe fe-trash"></i></button>
                                                <button type="button" class="btn bg-dark-transparent"><i
                                                        class="fe fe-upload"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Toggle buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="button">Toggle button</button>
                                                <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">
                                                    Active toggle button
                                                </button>
                                                <button type="button" class="btn btn-primary" disabled data-bs-toggle="button">
                                                    Disabled toggle button
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Outline buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0);" class="btn btn-outline-light">Light</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Primary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-secondary">Secondary</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-success">Success</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-info">Info</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-warning">Warning</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-danger">Danger</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Outline Disabled buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-light disabled">Light</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-primary disabled">Primary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-secondary disabled">Secondary</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-success disabled">Success</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-info disabled">Info</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-warning disabled">Warning</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-outline-danger disabled">Danger</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Radio buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">

                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                                    <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                    <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                                    <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Checkbox buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                    <input type="checkbox" class="btn-check" id="btncheck1">
                                                    <label class="btn btn-outline-primary text-wrap" for="btncheck1">Checkbox 1</label>

                                                    <input type="checkbox" class="btn-check" id="btncheck2">
                                                    <label class="btn btn-outline-primary text-wrap" for="btncheck2">Checkbox 2</label>

                                                    <input type="checkbox" class="btn-check" id="btncheck3">
                                                    <label class="btn btn-outline-primary text-wrap" for="btncheck3">Checkbox 3</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-4 col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Button Toolbar</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <div class="btn-toolbar" role="toolbar"
                                                    aria-label="Toolbar with button groups">
                                                    <div class="btn-group me-2 mb-1 mb-sm-0" role="group" aria-label="First group">
                                                        <button type="button" class="btn btn-primary">1</button>
                                                        <button type="button" class="btn btn-primary">2</button>
                                                        <button type="button" class="btn btn-primary">3</button>
                                                        <button type="button" class="btn btn-primary">4</button>
                                                    </div>
                                                    <div class="btn-group me-2 mb-1 mb-sm-0" role="group" aria-label="Second group">
                                                        <button type="button" class="btn btn-primary">5</button>
                                                        <button type="button" class="btn btn-primary">6</button>
                                                        <button type="button" class="btn btn-primary">7</button>
                                                    </div>
                                                    <div class="btn-group mb-1 mb-sm-0" role="group" aria-label="Third group">
                                                        <button type="button" class="btn btn-primary">8</button>
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
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Button with icon</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary"><i
                                                        class="fe fe-plus me-2"></i>More</button>
                                                <button type="button" class="btn btn-teal"><i
                                                        class="fe fe-upload me-2"></i>Upload</button>
                                                <button type="button" class="btn btn-warning"><i
                                                        class="fe fe-heart me-2"></i>I
                                                    like</button>
                                                <button type="button" class="btn btn-success"><i
                                                        class="fe fe-check me-2"></i>I
                                                    agree</button>
                                                <button type="button" class="btn btn-danger"><i
                                                        class="fe fe-link me-2"></i>Link</button>
                                                <button type="button" class="btn btn-info"><i
                                                        class="fe fe-message-circle me-2"></i>Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Button with Svg icon</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary btn-svgs btn-svg-white"><svg
                                                        class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="20"
                                                        viewBox="0 0 24 24" width="24">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path
                                                            d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z"
                                                            opacity=".3"></path>
                                                        <path
                                                            d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z">
                                                        </path>
                                                    </svg> <span class="btn-svg-text">Like</span></button>
                                                <button type="button" class="btn btn-dark btn-svgs btn-svg-white"><svg
                                                        class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="20"
                                                        viewBox="0 0 24 24" width="24">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z"
                                                            opacity=".3"></path>
                                                        <path
                                                            d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z">
                                                        </path>
                                                    </svg><span class="btn-svg-text">File</span></button>
                                                <button type="button" class="btn btn-warning btn-svgs btn-svg-white"><svg
                                                        class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="20"
                                                        viewBox="0 0 24 24" width="24">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M5 19h14V8H5v11zm5.55-6v-3h2.91v3H16l-4 4-4-4h2.55z"
                                                            opacity=".3"></path>
                                                        <path
                                                            d="M16 13h-2.55v-3h-2.9v3H8l4 4zm4.54-7.77l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM19 19H5V8h14v11z">
                                                        </path>
                                                    </svg> <span class="btn-svg-text">Download</span></button>
                                                <button type="button" class="btn btn-success btn-svgs btn-svg-white"><svg
                                                        class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="20"
                                                        viewBox="0 0 24 24" width="24">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M5 8h14V6H5z" opacity=".3"></path>
                                                        <path
                                                            d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z">
                                                        </path>
                                                    </svg> <span class="btn-svg-text">Calendar</span></button>
                                                <button type="button" class="btn btn-danger  btn-svgs btn-svg-white"><svg
                                                        class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="20"
                                                        viewBox="0 0 24 24" width="24">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <circle cx="18" cy="5" opacity=".3" r="1"></circle>
                                                        <circle cx="6" cy="12" opacity=".3" r="1"></circle>
                                                        <circle cx="18" cy="19.02" opacity=".3" r="1"></circle>
                                                        <path
                                                            d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z">
                                                        </path>
                                                    </svg><span class="btn-svg-text"> Share</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Button sizes</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary btn-sm mb-1">Small
                                                    button</button>
                                                <button type="button" class="btn btn-success btn-md mb-1">Medium
                                                    button</button>
                                                <button type="button" class="btn btn-danger btn-lg mb-1">Large
                                                    button</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Width Buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary w-xs mb-1">XS</button>
                                                <button type="button" class="btn btn-teal w-sm mb-1">SM</button>
                                                <button type="button" class="btn btn-danger w-md mb-1">MD</button>
                                                <button type="button" class="btn btn-success w-lg mb-1">LG</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Block Level Button</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button"
                                                    class="btn bg-primary-transparent btn-lg btn-block">Block
                                                    level button</button>
                                                <button type="button" class="btn bg-info-transparent btn-md btn-block">Block
                                                    level button</button>
                                                <button type="button"
                                                    class="btn bg-success-transparent btn-sm btn-block">Block
                                                    level button</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Social buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-facebook"><i
                                                        class="fa fa-facebook me-2"></i>Facebook</button>
                                                <button type="button" class="btn btn-twitter"><i
                                                        class="fa fa-twitter me-2"></i>Twitter</button>
                                                <button type="button" class="btn btn-google"><i
                                                        class="fa fa-google me-2"></i>Google</button>
                                                <button type="button" class="btn btn-youtube"><i
                                                        class="fa fa-youtube me-2"></i>Youtube</button>
                                                <button type="button" class="btn btn-vimeo"><i
                                                        class="fa fa-vimeo me-2"></i>Vimeo</button>
                                                <button type="button" class="btn btn-dribbble"><i
                                                        class="fa fa-dribbble me-2"></i>Dribble</button>
                                                <button type="button" class="btn btn-github"><i
                                                        class="fa fa-github me-2"></i>Github</button>
                                                <button type="button" class="btn btn-instagram"><i
                                                        class="fa fa-instagram me-2"></i>Instagram</button>
                                                <button type="button" class="btn btn-pinterest"><i
                                                        class="fa fa-pinterest me-2"></i>Pinterest</button>
                                                <button type="button" class="btn btn-vk"><i
                                                        class="fa fa-vk me-2"></i>VKontakte</button>
                                                <button type="button" class="btn btn-rss"><i
                                                        class="fa fa-rss me-2"></i>RSS</button>
                                                <button type="button" class="btn btn-flickr"><i
                                                        class="fa fa-flickr me-2"></i>Flickr</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Color variations</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <a href="javascript:void(0);" class="btn btn-blue">Blue</a>
                                                <a href="javascript:void(0);" class="btn btn-azure">Azure</a>
                                                <a href="javascript:void(0);" class="btn btn-indigo">Indigo</a>
                                                <a href="javascript:void(0);" class="btn btn-purple">Purple</a>
                                                <a href="javascript:void(0);" class="btn btn-pink">Pink</a>
                                                <a href="javascript:void(0);" class="btn btn-red">Red</a>
                                                <a href="javascript:void(0);" class="btn btn-orange">Orange</a>
                                                <a href="javascript:void(0);" class="btn btn-yellow">Yellow</a>
                                                <a href="javascript:void(0);" class="btn btn-lime">Lime</a>
                                                <a href="javascript:void(0);" class="btn btn-green">Green</a>
                                                <a href="javascript:void(0);" class="btn btn-teal">Teal</a>
                                                <a href="javascript:void(0);" class="btn btn-cyan">Cyan</a>
                                                <a href="javascript:void(0);" class="btn btn-gray">Gray</a>
                                                <a href="javascript:void(0);" class="btn btn-gray-dark">Dark gray</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Social Icon buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-youtube"><i
                                                        class="fa fa-youtube"></i></button>
                                                <button type="button" class="btn btn-icon btn-vimeo"><i
                                                        class="fa fa-vimeo"></i></button>
                                                <button type="button" class="btn btn-icon btn-dribbble"><i
                                                        class="fa fa-dribbble"></i></button>
                                                <button type="button" class="btn btn-icon btn-github"><i
                                                        class="fa fa-github"></i></button>
                                                <button type="button" class="btn btn-icon btn-instagram"><i
                                                        class="fa fa-instagram"></i></button>
                                                <button type="button" class="btn btn-icon btn-pinterest"><i
                                                        class="fa fa-pinterest"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Icon buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-primary"><i
                                                        class="fe fe-activity"></i></button>
                                                <button type="button" class="btn btn-icon  btn-github"><i
                                                        class="fe fe-github"></i></button>
                                                <button type="button" class="btn btn-icon  btn-success"><i
                                                        class="fe fe-bell"></i></button>
                                                <button type="button" class="btn btn-icon  btn-warning"><i
                                                        class="fe fe-star"></i></button>
                                                <button type="button" class="btn btn-icon  btn-danger"><i
                                                        class="fe fe-trash"></i></button>
                                                <button type="button" class="btn btn-icon  btn-purple"><i
                                                        class="fe fe-bar-chart"></i></button>
                                                <button type="button" class="btn btn-icon  btn-secondary"><i
                                                        class="fe fe-git-merge"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Svg Icon Buttons</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-dark btn-icon btn-svg"><svg
                                                        class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="100%"
                                                        viewBox="0 0 24 24" width="100%">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z"
                                                            opacity=".3"></path>
                                                        <path
                                                            d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z">
                                                        </path>
                                                    </svg></button>
                                                <button type="button" class="btn btn-warning btn-icon btn-svg"><svg
                                                        class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="100%"
                                                        viewBox="0 0 24 24" width="100%">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M5 19h14V8H5v11zm5.55-6v-3h2.91v3H16l-4 4-4-4h2.55z"
                                                            opacity=".3"></path>
                                                        <path
                                                            d="M16 13h-2.55v-3h-2.9v3H8l4 4zm4.54-7.77l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM19 19H5V8h14v11z">
                                                        </path>
                                                    </svg></button>
                                                <button type="button" class="btn btn-success btn-icon btn-svg"><svg
                                                        class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="100%"
                                                        viewBox="0 0 24 24" width="100%">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M5 8h14V6H5z" opacity=".3"></path>
                                                        <path
                                                            d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z">
                                                        </path>
                                                    </svg></button>
                                                <button type="button" class="btn btn-primary btn-icon btn-svg"><svg
                                                        class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="100%"
                                                        viewBox="0 0 24 24" width="100%">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path
                                                            d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z"
                                                            opacity=".3"></path>
                                                        <path
                                                            d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z">
                                                        </path>
                                                    </svg></button>
                                                <button type="button" class="btn btn-danger btn-icon btn-svg"><svg
                                                        class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="100%"
                                                        viewBox="0 0 24 24" width="100%">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <circle cx="18" cy="5" opacity=".3" r="1"></circle>
                                                        <circle cx="6" cy="12" opacity=".3" r="1"></circle>
                                                        <circle cx="18" cy="19.02" opacity=".3" r="1"></circle>
                                                        <path
                                                            d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z">
                                                        </path>
                                                    </svg></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Button dropdown</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wrap">
                                                <p>Wrap the dropdown’s toggle using different colors and icons implemented
                                                    in
                                                    different dropdowns styles (your button or link) and the dropdown menu
                                                    within <code class="highlighter-rouge">.dropdown</code>, or another
                                                    element
                                                    that declares <code
                                                        class="highlighter-rouge">position: relative;</code>.
                                                    Dropdowns can be triggered from <code
                                                        class="highlighter-rouge">&lt;a&gt;</code> or <code
                                                        class="highlighter-rouge">&lt;button&gt;</code> elements to better
                                                    fit
                                                    your potential needs.</p>
                                                <div class="example">
                                                    <div class="btn-list">
                                                        <div class="dropdown">
                                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                                data-bs-toggle="dropdown">
                                                                <i class="fe fe-calendar"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown
                                                                    link</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown
                                                                    link</a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                                data-bs-toggle="dropdown">
                                                                <i class="fe fe-calendar me-2"></i>Show Calendar
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown
                                                                    link</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown
                                                                    link</a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn btn-danger dropdown-toggle"
                                                                data-bs-toggle="dropdown">
                                                                Show Calendar
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown
                                                                    link</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown
                                                                    link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Loading button</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-wra">
                                                <p>Add <code class="highlighter-rouge">.btn-loading</code> to use a loading
                                                    state on a button. The width of the button deprights on the length of
                                                    the
                                                    text inside Since the loading spinner is implemented using the element.
                                                </p>
                                                <div class="example">
                                                    <div class="btn-list btn-animation">
                                                        <button type="button"
                                                            class="btn btn-success btn-loaders btn-icon">Button</button>
                                                        <button type="button"
                                                            class="btn btn-primary btn-loaders btn-icon">Button</button>
                                                        <button type="button"
                                                            class="btn btn-warning btn-loaders btn-icon">Button</button>
                                                        <button type="button"
                                                            class="btn btn-info btn-loaders btn-icon">Button</button>
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


@endsection