
            <div class="hor-header header">
                <div class="container main-container">
                    <div class="d-flex">
                        <div class="app-sidebar__toggle d-flex align-items-center" data-bs-toggle="sidebar">
							<a class="open-toggle" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg" class="feather feather-align-left header-icon"
									width="24" height="24" viewBox="0 0 24 24">
									<path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
								</svg>
							</a>
						</div>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="{{url('index')}}">
                            <img src="{{asset('build/assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="logo">
                            <img src="{{asset('build/assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto main-header-end">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="true"
                                aria-label="Toggle navigation">
                                <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                            </button>
                            <div class="navbar navbar-expand-lg navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="header-nav-right p-4 bg-white">
                                        <a href="{{url('login1')}}" class="fw-bold me-2 btn btn-primary btn-icon"
                                            target="_blank"> <i class="fe fe-log-in me-2"></i>Login
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>