
				<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
				<div class="sticky">
					<aside class="app-sidebar">
						<div class="app-sidebar__logo">
							<a class="header-brand" href="{{url('index')}}">
								<img src="{{asset('build/assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo"
									alt="Azea logo">
								<img src="{{asset('build/assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo"
									alt="Azea logo">
								<img src="{{asset('build/assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo"
									alt="Azea logo">
								<img src="{{asset('build/assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo"
									alt="Azea logo">
							</a>
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left">
								<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
									viewBox="0 0 24 24">
									<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
								</svg>
							</div>
							<ul class="side-menu app-sidebar3">
								<li class="side-item side-item-category">Main</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('index')}}">
										<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24"
											height="24" viewBox="0 0 24 24">
											<path
												d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z" />
										</svg>
										<span class="side-menu__label">Dashboard</span></a>
								</li>
								<li class="side-item side-item-category">Components</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
										<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24"
											height="24" viewBox="0 0 24 24">
											<path
												d="M20 17V7c0-2.168-3.663-4-8-4S4 4.832 4 7v10c0 2.168 3.663 4 8 4s8-1.832 8-4zM12 5c3.691 0 5.931 1.507 6 1.994C17.931 7.493 15.691 9 12 9S6.069 7.493 6 7.006C6.069 6.507 8.309 5 12 5zM6 9.607C7.479 10.454 9.637 11 12 11s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2V9.607zM6 17v-2.393C7.479 15.454 9.637 16 12 16s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2z" />
										</svg>
										<span class="side-menu__label">Elements</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs sidemenu-tabs">
														<li><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side2" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Chat</p></a></li>
														<li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side4" data-bs-toggle="tab"><i class="fe fe-codepen"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side1">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0);">Elements</a></li>
															<li><a href="{{url('accordion')}}" class="slide-item"> Accordion</a></li>
															<li><a href="{{url('alerts')}}" class="slide-item"> Alerts</a></li>
															<li><a href="{{url('avatars')}}" class="slide-item"> Avatars</a></li>
															<li><a href="{{url('badges')}}" class="slide-item"> Badges</a></li>
															<li><a href="{{url('breadcrumbs')}}" class="slide-item"> Breadcrumb</a></li>
															<li><a href="{{url('buttons')}}" class="slide-item"> Buttons</a></li>
															<li><a href="{{url('cards')}}" class="slide-item"> Cards</a></li>
															<li><a href="{{url('cards-image')}}" class="slide-item"> Card Images</a></li>
															<li><a href="{{url('carousel')}}" class="slide-item"> Carousel</a></li>
															<li><a href="{{url('dropdown')}}" class="slide-item"> Dropdown</a></li>
															<li><a href="{{url('footers')}}" class="slide-item"> Footers</a></li>
															<li><a href="{{url('list-group')}}" class="slide-item"> List Group</a></li>
															<li><a href="{{url('media-object')}}" class="slide-item"> Media Obejct</a></li>
															<li><a href="{{url('modals')}}" class="slide-item"> Modals</a></li>
															<li><a href="{{url('navigation')}}" class="slide-item"> Navigation</a></li>
															<li><a href="{{url('pagination')}}" class="slide-item"> Pagination</a></li>
															<li><a href="{{url('panels')}}" class="slide-item"> Panel</a></li>
															<li><a href="{{url('popover')}}" class="slide-item"> Popover</a></li>
															<li><a href="{{url('progress')}}" class="slide-item"> Progress</a></li>
															<li><a href="{{url('tabs')}}" class="slide-item"> Tabs</a></li>
															<li><a href="{{url('toast')}}" class="slide-item"> Toast</a></li>
															<li><a href="{{url('tags')}}" class="slide-item"> Tags</a></li>
															<li><a href="{{url('tooltip')}}" class="slide-item"> Tooltips</a></li>
														</ul>
														<div class="menutabs-content">
															<h5 class="mt-5 mb-4">Account</h5>
															<ul class="side-account">
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-download text-success me-2 fs-20"></i> Downloads
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-folder-plus text-secondary me-2 fs-20"></i> Archive
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-rss text-danger me-2 fs-20"></i> Feed Manager
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-settings text-warning me-2 fs-20"></i> Settings
																	</a>
																</li>
															</ul>
															<h5 class="mt-5 mb-4">Followers</h5>
															<div class="followers">
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}">
																	<span class="avatar-status bg-red"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1 bg-success">+34</span>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side2">
														<h5 class="mt-3 mb-4">Chat</h5>
														<div class="input-group d-none mb-4">
															<input type="text" class="form-control" placeholder="Search ...">
															<button class="btn btn-secondary" type="button">Search</button>
														</div>
														<div>
															<div class="list-group-item d-flex  align-items-center p-1 ">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Olivia</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Lily May</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Eric Walsh</strong> Okay...I will be waiting for you
																	<div class="small text-muted">
																		12 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Alison White</strong> Hi we can explain our new project......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Jacob Lewis</strong> New product Launching...
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side3">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<span class="fs-11 text-muted mb-2">23 May, 2019</span>
																	<p class="fs-11">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
																	<span class="mb-2 fs-11 text-muted">21 May, 2019</span>
																	<p>sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<span class="mb-2 fs-11 text-muted">18 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<span class="mb-2 fs-11 text-muted">16 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<span class="mb-2 fs-11 text-muted">15 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<span class="mb-2 fs-11 text-muted">07 May, 2019</span>
																	<p>sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side4">
														<h5 class="mt-3 mb-4">Activity</h5>
														<div class="activity mt-3">
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/4.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/5.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/6.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/1.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
										<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24"
											height="24" viewBox="0 0 24 24">
											<path
												d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z" />
										</svg>
										<span class="side-menu__label">Apps</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu ">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs sidemenu-tabs">
														<li><a href="#side5" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side6" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Chat</p></a></li>
														<li><a href="#side7" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side8" data-bs-toggle="tab"><i class="fe fe-codepen"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side5">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0);">Charts</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span class="sub-side-menu__label">Chat</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('chat')}}">Chat 01</a></li>
																	<li><a class="sub-slide-item" href="{{url('chat2')}}">Chat 02</a></li>

																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span
																		class="sub-side-menu__label">Contact</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('contact-list')}}">Contact list 01</a>
																	</li>
																	<li><a class="sub-slide-item" href="{{url('contact-list2')}}">Contact list 02</a>
																	</li>
																</ul>
															</li>
															<li><a href="{{url('calendar')}}" class="slide-item"> Calendar</a></li>
															<li><a href="{{url('cookies')}}" class="slide-item"> Cookies</a></li>
															<li><a href="{{url('counters')}}" class="slide-item"> Counters</a></li>
															<li><a href="{{url('draggablecards')}}" class="slide-item"> Draggable Cards</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span class="sub-side-menu__label">File
																		Manager</span><i class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('filemanager')}}">File Manager 01</a>
																	</li>
																	<li><a class="sub-slide-item" href="{{url('filemanager-list')}}">File Manager
																			02</a>
																	</li>
																	<li><a class="sub-slide-item" href="{{url('file-list')}}">File List</a></li>
																	<li><a class="sub-slide-item" href="{{url('file-details')}}">File Details</a></li>
																	<li><a class="sub-slide-item" href="{{url('file-attachments')}}">File
																			Attachment</a>
																	</li>
																</ul>
															</li>
															<li><a href="{{url('img-crop')}}" class="slide-item"> Image Crop</a></li>
															<li><a href="{{url('loaders')}}" class="slide-item"> Loaders</a></li>
															<li><a href="{{url('notify')}}" class="slide-item"> Notifications</a></li>
															<li><a href="{{url('page-session')}}" class="slide-item"> Page-sessiontimeout</a>
															</li>
															<li><a href="{{url('rangeslider')}}" class="slide-item"> Range slider</a></li>
															<li><a href="{{url('rating')}}" class="slide-item"> Rating</a></li>
															<li><a href="{{url('sweet-alert')}}" class="slide-item"> Sweet alerts</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span class="sub-side-menu__label">Todo
																		List</span><i class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('todo-list1')}}">Todo List 01</a></li>
																	<li><a class="sub-slide-item" href="{{url('todo-list2')}}">Todo List 02</a></li>
																	<li><a class="sub-slide-item" href="{{url('todo-list3')}}">Todo List 03</a></li>
																</ul>
															</li>
															<li><a href="{{url('time-line')}}" class="slide-item"> Time Line</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span class="sub-side-menu__label">User
																		List</span><i class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('users-list1')}}">User List 01</a></li>

																	<li><a class="sub-slide-item" href="{{url('users-list3')}}">User List 03</a></li>

																</ul>
															</li>
														</ul>
														<div class="menutabs-content">
															<h5 class="mt-5 mb-4">Account</h5>
															<ul class="side-account">
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-download text-success me-2 fs-20"></i> Downloads
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-folder-plus text-secondary me-2 fs-20"></i> Archive
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-rss text-danger me-2 fs-20"></i> Feed Manager
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-settings text-warning me-2 fs-20"></i> Settings
																	</a>
																</li>
															</ul>
															<h5 class="mt-5 mb-4">Followers</h5>
															<div class="followers">
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}">
																	<span class="avatar-status bg-red"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1 bg-success">+34</span>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side6">
														<h5 class="mt-3 mb-4">Chat</h5>
														<div class="input-group d-none mb-4">
															<input type="text" class="form-control" placeholder="Search ...">
															<button class="btn btn-secondary" type="button">Search</button>
														</div>
														<div>
															<div class="list-group-item d-flex  align-items-center p-1 ">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Olivia</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Lily May</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Eric Walsh</strong> Okay...I will be waiting for you
																	<div class="small text-muted">
																		12 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Alison White</strong> Hi we can explain our new project......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Jacob Lewis</strong> New product Launching...
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side7">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<span class="fs-11 text-muted mb-2">23 May, 2019</span>
																	<p class="fs-11">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
																	<span class="mb-2 fs-11 text-muted">21 May, 2019</span>
																	<p>sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<span class="mb-2 fs-11 text-muted">18 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<span class="mb-2 fs-11 text-muted">16 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<span class="mb-2 fs-11 text-muted">15 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<span class="mb-2 fs-11 text-muted">07 May, 2019</span>
																	<p>sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side8">
														<h5 class="mt-3 mb-4">Activity</h5>
														<div class="activity mt-3">
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/4.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/5.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/6.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/1.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
										<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24"
											height="24" viewBox="0 0 24 24">
											<path
												d="M22 8a.76.76 0 0 0 0-.21v-.08a.77.77 0 0 0-.07-.16.35.35 0 0 0-.05-.08l-.1-.13-.08-.06-.12-.09-9-5a1 1 0 0 0-1 0l-9 5-.09.07-.11.08a.41.41 0 0 0-.07.11.39.39 0 0 0-.08.1.59.59 0 0 0-.06.14.3.3 0 0 0 0 .1A.76.76 0 0 0 2 8v8a1 1 0 0 0 .52.87l9 5a.75.75 0 0 0 .13.06h.1a1.06 1.06 0 0 0 .5 0h.1l.14-.06 9-5A1 1 0 0 0 22 16V8zm-10 3.87L5.06 8l2.76-1.52 6.83 3.9zm0-7.72L18.94 8 16.7 9.25 9.87 5.34zM4 9.7l7 3.92v5.68l-7-3.89zm9 9.6v-5.68l3-1.68V15l2-1v-3.18l2-1.11v5.7z" />
										</svg>
										<span class="side-menu__label">Advanced UI</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs sidemenu-tabs">
														<li><a href="#side9" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side10" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Chat</p></a></li>
														<li><a href="#side11" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side12" data-bs-toggle="tab"><i class="fe fe-codepen"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side9">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0);">Advanced UI</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);">
																	<span class="sub-side-menu__label">Utilities</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a href="{{url('elements-border')}}" class="sub-slide-item"> Border</a></li>
																	<li><a href="{{url('elements-colors')}}" class="sub-slide-item"> Colors</a></li>
																	<li><a href="{{url('elements-display')}}" class="sub-slide-item"> Display</a></li>
																	<li><a href="{{url('elements-flex')}}" class="sub-slide-item"> Flex Items</a></li>
																	<li><a href="{{url('elements-height')}}" class="sub-slide-item"> Height</a></li>
																	<li><a href="{{url('elements-margin')}}" class="sub-slide-item"> Margin</a></li>
																	<li><a href="{{url('elements-padding')}}" class="sub-slide-item"> Padding</a></li>
																	<li><a href="{{url('elements-typography')}}" class="sub-slide-item">Typhography</a></li>
																	<li><a href="{{url('elements-width')}}" class="sub-slide-item"> Width</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);">
																	<span class="sub-side-menu__label">Widgets</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a href="{{url('widgets2')}}" class="sub-slide-item">Chart Widgets</a></li>
																	<li><a href="{{url('widgets1')}}" class="sub-slide-item">Widgets</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);">
																	<span class="sub-side-menu__label">Charts</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a href="{{url('chart-apex')}}" class="sub-slide-item"> Apex Charts</a></li>
																	<li><a href="{{url('chart-chartist')}}" class="sub-slide-item">Chartjs Charts</a></li>
																	<li><a href="{{url('chart-echart')}}" class="sub-slide-item"> Echart Charts</a></li>
																	<li><a href="{{url('chart-flot')}}" class="sub-slide-item"> Flot Charts</a></li>
																	<li><a href="{{url('chart-morris')}}" class="sub-slide-item"> Morris Charts</a></li>
																	<li><a href="{{url('chart-peity')}}" class="sub-slide-item"> Peity Charts</a></li>
																	<li><a href="{{url('chart-c3')}}" class="sub-slide-item">C3 Charts</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);">
																	<span class="sub-side-menu__label">Tables</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a href="{{url('tables')}}" class="sub-slide-item">Default table</a></li>
																	<li><a href="{{url('datatable')}}" class="sub-slide-item">Data Table</a></li>
																</ul>
															</li>
														</ul>
														<div class="menutabs-content">
															<h5 class="mt-5 mb-4">Account</h5>
															<ul class="side-account">
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-download text-success me-2 fs-20"></i> Downloads
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-folder-plus text-secondary me-2 fs-20"></i> Archive
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-rss text-danger me-2 fs-20"></i> Feed Manager
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-settings text-warning me-2 fs-20"></i> Settings
																	</a>
																</li>
															</ul>
															<h5 class="mt-5 mb-4">Followers</h5>
															<div class="followers">
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}">
																	<span class="avatar-status bg-red"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1 bg-success">+34</span>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side10">
														<h5 class="mt-3 mb-4">Chat</h5>
														<div class="input-group d-none mb-4">
															<input type="text" class="form-control" placeholder="Search ...">
															<button class="btn btn-secondary" type="button">Search</button>
														</div>
														<div>
															<div class="list-group-item d-flex  align-items-center p-1 ">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Olivia</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Lily May</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Eric Walsh</strong> Okay...I will be waiting for you
																	<div class="small text-muted">
																		12 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Alison White</strong> Hi we can explain our new project......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Jacob Lewis</strong> New product Launching...
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side11">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<span class="fs-11 text-muted mb-2">23 May, 2019</span>
																	<p class="fs-11">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
																	<span class="mb-2 fs-11 text-muted">21 May, 2019</span>
																	<p>sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<span class="mb-2 fs-11 text-muted">18 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<span class="mb-2 fs-11 text-muted">16 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<span class="mb-2 fs-11 text-muted">15 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<span class="mb-2 fs-11 text-muted">07 May, 2019</span>
																	<p>sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side12">
														<h5 class="mt-3 mb-4">Activity</h5>
														<div class="activity mt-3">
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/4.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/5.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/6.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/1.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="{{url('landing-page')}}" target="_blank">
										<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M2.76 20.2a2.73 2.73 0 0 0 2.15.85 8.86 8.86 0 0 0 3.37-.86 9 9 0 0 0 12.27-10.9c1.31-2.23 1.75-4.26.67-5.48a2.94 2.94 0 0 0-2.57-1A5 5 0 0 0 16.1 4 9 9 0 0 0 3.58 15.14c-1.06 1.21-2.05 3.68-.82 5.06zm1.5-1.32c-.22-.25 0-1.07.37-1.76a9.26 9.26 0 0 0 1.57 1.74c-1.03.3-1.71.28-1.94.02zm14.51-5.17A7 7 0 0 1 15.58 18 7.12 7.12 0 0 1 12 19a6.44 6.44 0 0 1-1.24-.13 30.73 30.73 0 0 0 4.42-3.29 31.5 31.5 0 0 0 3.8-4 6.88 6.88 0 0 1-.21 2.13zm.09-8.89a.94.94 0 0 1 .87.32c.23.26.16.94-.26 1.93a9.2 9.2 0 0 0-1.61-1.86 2.48 2.48 0 0 1 1-.39zM5.22 10.31A6.94 6.94 0 0 1 8.41 6 7 7 0 0 1 12 5a6.9 6.9 0 0 1 6 3.41 5.19 5.19 0 0 1 .35.66 27.43 27.43 0 0 1-4.49 5A27.35 27.35 0 0 1 8.35 18a7 7 0 0 1-3.13-7.65z"></path></svg>
										<span class="side-menu__label">Landing Page</span></a>
								</li>
								<li class="side-item side-item-category">Icons </li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
										<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24"
											height="24" viewBox="0 0 24 24">
											<path
												d="M20 7h-1.209A4.92 4.92 0 0 0 19 5.5C19 3.57 17.43 2 15.5 2c-1.622 0-2.705 1.482-3.404 3.085C11.407 3.57 10.269 2 8.5 2 6.57 2 5 3.57 5 5.5c0 .596.079 1.089.209 1.5H4c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zm-4.5-3c.827 0 1.5.673 1.5 1.5C17 7 16.374 7 16 7h-2.478c.511-1.576 1.253-3 1.978-3zM7 5.5C7 4.673 7.673 4 8.5 4c.888 0 1.714 1.525 2.198 3H8c-.374 0-1 0-1-1.5zM4 9h7v2H4V9zm2 11v-7h5v7H6zm12 0h-5v-7h5v7zm-5-9V9.085L13.017 9H20l.001 2H13z" />
										</svg>
										<span class="side-menu__label">Icons</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs sidemenu-tabs">
														<li><a href="#side13" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side14" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Chat</p></a></li>
														<li><a href="#side15" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side16" data-bs-toggle="tab"><i class="fe fe-codepen"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side13">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0);">Icons</a></li>
															<li><a href="{{url('icons')}}" class="slide-item"> Font Awesome</a></li>
															<li><a href="{{url('icons2')}}" class="slide-item"> Material Design Icons</a></li>
															<li><a href="{{url('icons3')}}" class="slide-item"> Simple Line Icons</a></li>
															<li><a href="{{url('icons4')}}" class="slide-item"> Feather Icons</a></li>
															<li><a href="{{url('icons5')}}" class="slide-item"> Ionic Icons</a></li>
															<li><a href="{{url('icons6')}}" class="slide-item"> Flag Icons</a></li>
															<li><a href="{{url('icons7')}}" class="slide-item"> pe7 Icons</a></li>
															<li><a href="{{url('icons8')}}" class="slide-item"> Themify Icons</a></li>
															<li><a href="{{url('icons9')}}" class="slide-item">Typicons Icons</a></li>
															<li><a href="{{url('icons10')}}" class="slide-item">Weather Icons</a></li>
															<li><a href="{{url('icons11')}}" class="slide-item">Material Svgs</a></li>
															<li><a href="{{url('icons12')}}" class="slide-item">Bootstrap Svgs</a></li>
														</ul>
														<div class="menutabs-content">
															<h5 class="mt-5 mb-4">Account</h5>
															<ul class="side-account">
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-download text-success me-2 fs-20"></i> Downloads
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-folder-plus text-secondary me-2 fs-20"></i> Archive
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-rss text-danger me-2 fs-20"></i> Feed Manager
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-settings text-warning me-2 fs-20"></i> Settings
																	</a>
																</li>
															</ul>
															<h5 class="mt-5 mb-4">Followers</h5>
															<div class="followers">
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}">
																	<span class="avatar-status bg-red"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1 bg-success">+34</span>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side14">
														<h5 class="mt-3 mb-4">Chat</h5>
														<div class="input-group d-none mb-4">
															<input type="text" class="form-control" placeholder="Search ...">
															<button class="btn btn-secondary" type="button">Search</button>
														</div>
														<div>
															<div class="list-group-item d-flex  align-items-center p-1 ">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Olivia</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Lily May</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Eric Walsh</strong> Okay...I will be waiting for you
																	<div class="small text-muted">
																		12 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Alison White</strong> Hi we can explain our new project......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Jacob Lewis</strong> New product Launching...
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side15">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<span class="fs-11 text-muted mb-2">23 May, 2019</span>
																	<p class="fs-11">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
																	<span class="mb-2 fs-11 text-muted">21 May, 2019</span>
																	<p>sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<span class="mb-2 fs-11 text-muted">18 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<span class="mb-2 fs-11 text-muted">16 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<span class="mb-2 fs-11 text-muted">15 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<span class="mb-2 fs-11 text-muted">07 May, 2019</span>
																	<p>sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side16">
														<h5 class="mt-3 mb-4">Activity</h5>
														<div class="activity mt-3">
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/4.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/5.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/6.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/1.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="side-item side-item-category">Maps</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
										<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24"
											height="24" viewBox="0 0 24 24">
											<path
												d="m21.447 6.105-6-3a1 1 0 0 0-.895 0L9 5.882 3.447 3.105A1 1 0 0 0 2 4v13c0 .379.214.725.553.895l6 3a1 1 0 0 0 .895 0L15 18.118l5.553 2.776a.992.992 0 0 0 .972-.043c.295-.183.475-.504.475-.851V7c0-.379-.214-.725-.553-.895zM10 7.618l4-2v10.764l-4 2V7.618zm-6-2 4 2v10.764l-4-2V5.618zm16 12.764-4-2V5.618l4 2v10.764z" />
										</svg>
										<span class="side-menu__label">Map</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs sidemenu-tabs">
														<li><a href="#side17" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side18" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Chat</p></a></li>
														<li><a href="#side19" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side20" data-bs-toggle="tab"><i class="fe fe-codepen"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side17">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0);">Maps</a></li>
															<li><a href="{{url('maps2')}}" class="slide-item">Leaflet Maps</a></li>
															<li><a href="{{url('maps')}}" class="slide-item">Vector Maps</a></li>
															<li><a href="{{url('mapel-maps')}}" class="slide-item">Mapel Maps</a></li>
														</ul>
														<div class="menutabs-content">
															<h5 class="mt-5 mb-4">Account</h5>
															<ul class="side-account">
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-download text-success me-2 fs-20"></i> Downloads
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-folder-plus text-secondary me-2 fs-20"></i> Archive
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-rss text-danger me-2 fs-20"></i> Feed Manager
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-settings text-warning me-2 fs-20"></i> Settings
																	</a>
																</li>
															</ul>
															<h5 class="mt-5 mb-4">Followers</h5>
															<div class="followers">
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}">
																	<span class="avatar-status bg-red"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1 bg-success">+34</span>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side18">
														<h5 class="mt-3 mb-4">Chat</h5>
														<div class="input-group d-none mb-4">
															<input type="text" class="form-control" placeholder="Search ...">
															<button class="btn btn-secondary" type="button">Search</button>
														</div>
														<div>
															<div class="list-group-item d-flex  align-items-center p-1 ">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Olivia</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Lily May</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Eric Walsh</strong> Okay...I will be waiting for you
																	<div class="small text-muted">
																		12 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Alison White</strong> Hi we can explain our new project......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Jacob Lewis</strong> New product Launching...
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side19">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<span class="fs-11 text-muted mb-2">23 May, 2019</span>
																	<p class="fs-11">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
																	<span class="mb-2 fs-11 text-muted">21 May, 2019</span>
																	<p>sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<span class="mb-2 fs-11 text-muted">18 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<span class="mb-2 fs-11 text-muted">16 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<span class="mb-2 fs-11 text-muted">15 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<span class="mb-2 fs-11 text-muted">07 May, 2019</span>
																	<p>sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side20">
														<h5 class="mt-3 mb-4">Activity</h5>
														<div class="activity mt-3">
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/4.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/5.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/6.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/1.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="side-item side-item-category">Custom & Sub Menus</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
										<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24"
											height="24" viewBox="0 0 24 24">
											<path
												d="M3 11h8V3H3zm2-6h4v4H5zM3 21h8v-8H3zm2-6h4v4H5zm8-12v8h8V3zm6 6h-4V5h4zm-5.99 4h2v2h-2zm2 2h2v2h-2zm-2 2h2v2h-2zm4 0h2v2h-2zm2 2h2v2h-2zm-4 0h2v2h-2zm2-6h2v2h-2zm2 2h2v2h-2z" />
										</svg>
										<span class="side-menu__label">Custom Pages</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs sidemenu-tabs">
														<li><a href="#side25" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side26" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Chat</p></a></li>
														<li><a href="#side27" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side28" data-bs-toggle="tab"><i class="fe fe-codepen"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side25">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0);">Custom Pages</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span
																		class="sub-side-menu__label">Register</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('register1')}}">Register 01</a></li>
																	<li><a class="sub-slide-item" href="{{url('register2')}}">Register 02</a></li>
																	<li><a class="sub-slide-item" href="{{url('register3')}}">Register 03</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span class="sub-side-menu__label">Login</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('login1')}}">Login 01</a></li>
																	<li><a class="sub-slide-item" href="{{url('login2')}}">Login 02</a></li>
																	<li><a class="sub-slide-item" href="{{url('login3')}}">Login 03</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span class="sub-side-menu__label">Forget
																		Password</span><i class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('forgot-password1')}}">Forget Password
																			01</a>
																	</li>
																	<li><a class="sub-slide-item" href="{{url('forgot-password2')}}">Forget Password
																			02</a>
																	</li>
																	<li><a class="sub-slide-item" href="{{url('forgot-password3')}}">Forget Password
																			03</a>
																	</li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span class="sub-side-menu__label">Reset
																		Password</span><i class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('reset-password1')}}">Reset Password
																			01</a>
																	</li>
																	<li><a class="sub-slide-item" href="{{url('reset-password2')}}">Reset Password
																			02</a>
																	</li>
																	<li><a class="sub-slide-item" href="{{url('reset-password3')}}">Reset Password
																			03</a>
																	</li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span class="sub-side-menu__label">Lock
																		Screen</span><i class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('lockscreen1')}}">Lock Screen 01</a>
																	</li>
																	<li><a class="sub-slide-item" href="{{url('lockscreen2')}}">Lock Screen 02</a>
																	</li>
																	<li><a class="sub-slide-item" href="{{url('lockscreen3')}}">Lock Screen 03</a>
																	</li>
																</ul>
															</li>
															<li><a href="{{url('construction')}}" class="slide-item"> Under Construction</a></li>
															<li><a href="{{url('coming')}}" class="slide-item"> Coming Soon</a></li>
														</ul>
														<div class="menutabs-content">
															<h5 class="mt-5 mb-4">Account</h5>
															<ul class="side-account">
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-download text-success me-2 fs-20"></i> Downloads
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-folder-plus text-secondary me-2 fs-20"></i> Archive
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-rss text-danger me-2 fs-20"></i> Feed Manager
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-settings text-warning me-2 fs-20"></i> Settings
																	</a>
																</li>
															</ul>
															<h5 class="mt-5 mb-4">Followers</h5>
															<div class="followers">
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}">
																	<span class="avatar-status bg-red"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1 bg-success">+34</span>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side26">
														<h5 class="mt-3 mb-4">Chat</h5>
														<div class="input-group d-none mb-4">
															<input type="text" class="form-control" placeholder="Search ...">
															<button class="btn btn-secondary" type="button">Search</button>
														</div>
														<div>
															<div class="list-group-item d-flex  align-items-center p-1 ">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Olivia</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Lily May</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Eric Walsh</strong> Okay...I will be waiting for you
																	<div class="small text-muted">
																		12 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Alison White</strong> Hi we can explain our new project......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Jacob Lewis</strong> New product Launching...
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side27">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<span class="fs-11 text-muted mb-2">23 May, 2019</span>
																	<p class="fs-11">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
																	<span class="mb-2 fs-11 text-muted">21 May, 2019</span>
																	<p>sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<span class="mb-2 fs-11 text-muted">18 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<span class="mb-2 fs-11 text-muted">16 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<span class="mb-2 fs-11 text-muted">15 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<span class="mb-2 fs-11 text-muted">07 May, 2019</span>
																	<p>sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side28">
														<h5 class="mt-3 mb-4">Activity</h5>
														<div class="activity mt-3">
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/4.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/5.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/6.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/1.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
										<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24"
											height="24" viewBox="0 0 24 24">
											<path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
										</svg>
										<span class="side-menu__label">Sub Menus</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu ">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs sidemenu-tabs">
														<li><a href="#side29" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side30" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Chat</p></a></li>
														<li><a href="#side31" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side32" data-bs-toggle="tab"><i class="fe fe-codepen"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side29">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0);">Sub Menus</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span class="sub-side-menu__label">Submenu
																		1</span><i class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="javascript:void(0);">Submenu 1.1</a>
																	</li>
																	<li class="sub-slide2">
																		<a class="sub-slide-item2" data-bs-toggle="sub-slide2"
																			href="javascript:void(0);"><span
																				class="sub-side-menu__label2">Submenu
																				1.2</span><i class="sub-angle2 fe fe-chevron-right"></i></a>
																		<ul class="sub-slide-menu2">
																			<li><a href="javascript:void(0);" class="sub-slide-item2">Submenu
																					1.2.1</a>
																			</li>
																			<li><a href="javascript:void(0);" class="sub-slide-item2">Submenu
																					1.2.2</a>
																			</li>
																			<li><a href="javascript:void(0);" class="sub-slide-item2">Submenu
																					1.2.3</a>
																			</li>
																		</ul>
																	</li>
																	<li><a class="sub-slide-item" href="javascript:void(0);">Submenu 1.3</a>
																	</li>
																</ul>
															</li>
															<li><a href="javascript:void(0);" class="slide-item">Submenu 2</a></li>
															<li><a href="javascript:void(0);" class="slide-item">Submenu 3</a></li>
															<li><a href="javascript:void(0);" class="slide-item">Submenu 4</a></li>
														</ul>
														<div class="menutabs-content">
															<h5 class="mt-5 mb-4">Account</h5>
															<ul class="side-account">
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-download text-success me-2 fs-20"></i> Downloads
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-folder-plus text-secondary me-2 fs-20"></i> Archive
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-rss text-danger me-2 fs-20"></i> Feed Manager
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-settings text-warning me-2 fs-20"></i> Settings
																	</a>
																</li>
															</ul>
															<h5 class="mt-5 mb-4">Followers</h5>
															<div class="followers">
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}">
																	<span class="avatar-status bg-red"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1 bg-success">+34</span>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side30">
														<h5 class="mt-3 mb-4">Chat</h5>
														<div class="input-group d-none mb-4">
															<input type="text" class="form-control" placeholder="Search ...">
															<button class="btn btn-secondary" type="button">Search</button>
														</div>
														<div>
															<div class="list-group-item d-flex  align-items-center p-1 ">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Olivia</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Lily May</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Eric Walsh</strong> Okay...I will be waiting for you
																	<div class="small text-muted">
																		12 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Alison White</strong> Hi we can explain our new project......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Jacob Lewis</strong> New product Launching...
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side31">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<span class="fs-11 text-muted mb-2">23 May, 2019</span>
																	<p class="fs-11">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
																	<span class="mb-2 fs-11 text-muted">21 May, 2019</span>
																	<p>sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<span class="mb-2 fs-11 text-muted">18 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<span class="mb-2 fs-11 text-muted">16 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<span class="mb-2 fs-11 text-muted">15 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<span class="mb-2 fs-11 text-muted">07 May, 2019</span>
																	<p>sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side32">
														<h5 class="mt-3 mb-4">Activity</h5>
														<div class="activity mt-3">
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/4.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/5.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/6.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/1.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="side-item side-item-category">Pages & Error Pages</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
										<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24"
											height="24" viewBox="0 0 24 24">
											<path
												d="M22 7.999a1 1 0 0 0-.516-.874l-9.022-5a1.003 1.003 0 0 0-.968 0l-8.978 4.96a1 1 0 0 0-.003 1.748l9.022 5.04a.995.995 0 0 0 .973.001l8.978-5A1 1 0 0 0 22 7.999zm-9.977 3.855L5.06 7.965l6.917-3.822 6.964 3.859-6.918 3.852z" />
											<path
												d="M20.515 11.126 12 15.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z" />
											<path
												d="M20.515 15.126 12 19.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z" />
										</svg>
										<span class="side-menu__label">Pages</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs sidemenu-tabs">
														<li><a href="#side33" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side34" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Chat</p></a></li>
														<li><a href="#side35" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side36" data-bs-toggle="tab"><i class="fe fe-codepen"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side33">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0);">Pages</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span
																		class="sub-side-menu__label">Profile</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('profile1')}}">Profile 01</a></li>
																	<li><a class="sub-slide-item" href="{{url('profile2')}}">Profile 02</a></li>
																	<li><a class="sub-slide-item" href="{{url('profile3')}}">Profile 03</a></li>
																</ul>
															</li>
															<li><a href="{{url('edit-profile')}}" class="slide-item"> Edit Profile</a></li>
															<li><a href="{{url('notification-list')}}" class="slide-item"> Notification List</a></li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span class="sub-side-menu__label">Email</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('email-compose')}}">Email Compose</a>
																	</li>
																	<li><a class="sub-slide-item" href="{{url('email-inbox')}}">Email Inbox</a></li>
																	<li><a class="sub-slide-item" href="{{url('email-read')}}">Email Read</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span
																		class="sub-side-menu__label">Pricing</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('pricing1')}}">Pricing 01</a></li>
																	<li><a class="sub-slide-item" href="{{url('pricing2')}}">Pricing 02</a></li>
																	<li><a class="sub-slide-item" href="{{url('pricing3')}}">Pricing 03</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span
																		class="sub-side-menu__label">Invoice</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('invoice-list')}}">Invoice list</a></li>
																	<li><a class="sub-slide-item" href="{{url('invoice1')}}">Invoice 01</a></li>
																	<li><a class="sub-slide-item" href="{{url('invoice2')}}">Invoice 02</a></li>
																	<li><a class="sub-slide-item" href="{{url('invoice3')}}">Invoice 03</a></li>
																	<li><a class="sub-slide-item" href="{{url('invoice-add')}}">Add Invoice</a></li>
																	<li><a class="sub-slide-item" href="{{url('invoice-edit')}}">Edit Invoice</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span class="sub-side-menu__label">Blog</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('blog')}}">Blog 01</a></li>
																	<li><a class="sub-slide-item" href="{{url('blog2')}}">Blog 02</a></li>
																	<li><a class="sub-slide-item" href="{{url('blog3')}}">Blog 03</a></li>
																	<li><a class="sub-slide-item" href="{{url('blog-styles')}}">Blog Styles</a></li>
																	<li><a class="sub-slide-item" href="{{url('blog-details')}}">Blog Details</a></li>
																	<li><a class="sub-slide-item" href="{{url('blog-add')}}">Blog Add</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);">
																	<span class="side-side-menu__label">E-Commerce</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a href="{{url('shop')}}" class="sub-slide-item"> Products</a></li>
																	<li><a href="{{url('add-product')}}" class="sub-slide-item"> Add Products</a></li>
																	<li><a href="{{url('product-details')}}" class="sub-slide-item">Product Details</a></li>
																	<li><a href="{{url('cart')}}" class="sub-slide-item"> Shopping Cart</a></li>
																	<li><a href="{{url('checkout')}}" class="sub-slide-item"> Checkout</a></li>
																	<li><a href="{{url('wishlist')}}" class="sub-slide-item">Wishlist</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="sub-side-menu__item" data-bs-toggle="sub-slide"
																	href="javascript:void(0);"><span class="sub-side-menu__label">Forms</span><i
																		class="sub-angle fe fe-chevron-right"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-slide-item" href="{{url('form-elements')}}">Form Elements</a></li>
																	<li><a class="sub-slide-item" href="{{url('form-layouts')}}">Form Layouts</a></li>
																	<li><a class="sub-slide-item" href="{{url('form-advanced')}}">Advanced Forms</a></li>
																	<li><a class="sub-slide-item" href="{{url('form-wizard')}}">Form Wizard</a></li>
																	<li><a class="sub-slide-item" href="{{url('form-editor')}}">Form Editor</a></li>
																	<li><a class="sub-slide-item" href="{{url('form-sizes')}}">Form Element Sizes</a></li>
																	<li><a class="sub-slide-item" href="{{url('form-treeview')}}">Form Treeview</a></li>
																	<li><a class="sub-slide-item" href="{{url('form-validations')}}">Form Validations</a></li>
																</ul>
															</li>
															<li><a href="{{url('gallery')}}" class="slide-item"> Gallery</a></li>
															<li><a href="{{url('faq')}}" class="slide-item"> FAQS</a></li>
															<li><a href="{{url('terms')}}" class="slide-item"> Terms</a></li>
															<li><a href="{{url('search')}}" class="slide-item"> Search</a></li>
															<li><a href="{{url('empty-page')}}" class="slide-item"> Empty Page</a></li>
															<li><a href="{{url('switcher')}}" class="slide-item"> Switcher</a></li>
														</ul>
														<div class="menutabs-content">
															<h5 class="mt-5 mb-4">Account</h5>
															<ul class="side-account">
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-download text-success me-2 fs-20"></i> Downloads
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-folder-plus text-secondary me-2 fs-20"></i> Archive
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-rss text-danger me-2 fs-20"></i> Feed Manager
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-settings text-warning me-2 fs-20"></i> Settings
																	</a>
																</li>
															</ul>
															<h5 class="mt-5 mb-4">Followers</h5>
															<div class="followers">
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}">
																	<span class="avatar-status bg-red"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1 bg-success">+34</span>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side34">
														<h5 class="mt-3 mb-4">Chat</h5>
														<div class="input-group d-none mb-4">
															<input type="text" class="form-control" placeholder="Search ...">
															<button class="btn btn-secondary" type="button">Search</button>
														</div>
														<div>
															<div class="list-group-item d-flex  align-items-center p-1 ">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Olivia</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Lily May</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Eric Walsh</strong> Okay...I will be waiting for you
																	<div class="small text-muted">
																		12 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Alison White</strong> Hi we can explain our new project......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Jacob Lewis</strong> New product Launching...
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side35">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<span class="fs-11 text-muted mb-2">23 May, 2019</span>
																	<p class="fs-11">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
																	<span class="mb-2 fs-11 text-muted">21 May, 2019</span>
																	<p>sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<span class="mb-2 fs-11 text-muted">18 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<span class="mb-2 fs-11 text-muted">16 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<span class="mb-2 fs-11 text-muted">15 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<span class="mb-2 fs-11 text-muted">07 May, 2019</span>
																	<p>sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side36">
														<h5 class="mt-3 mb-4">Activity</h5>
														<div class="activity mt-3">
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/4.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/5.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/6.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/1.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
										<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24"
											height="24" viewBox="0 0 24 24">
											<path
												d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z" />
											<path d="M11 6h2v8h-2zm0 10h2v2h-2z" />
										</svg>
										<span class="side-menu__label">Error Pages</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs sidemenu-tabs">
														<li><a href="#side37" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side38" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Chat</p></a></li>
														<li><a href="#side39" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side40" data-bs-toggle="tab"><i class="fe fe-codepen"></i><p>Activity</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side37">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0);">Error Pages</a></li>
															<li><a href="{{url('error400')}}" class="slide-item"> 400</a></li>
															<li><a href="{{url('error401')}}" class="slide-item"> 401</a></li>
															<li><a href="{{url('error403')}}" class="slide-item"> 403</a></li>
															<li><a href="{{url('error404')}}" class="slide-item"> 404</a></li>
															<li><a href="{{url('error500')}}" class="slide-item"> 500</a></li>
															<li><a href="{{url('error503')}}" class="slide-item"> 503</a></li>
														</ul>
														<div class="menutabs-content">
															<h5 class="mt-5 mb-4">Account</h5>
															<ul class="side-account">
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-download text-success me-2 fs-20"></i> Downloads
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-folder-plus text-secondary me-2 fs-20"></i> Archive
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-rss text-danger me-2 fs-20"></i> Feed Manager
																	</a>
																</li>
																<li class="acc-link" >
																	<a href="#">
																		<i class="fe fe-settings text-warning me-2 fs-20"></i> Settings
																	</a>
																</li>
															</ul>
															<h5 class="mt-5 mb-4">Followers</h5>
															<div class="followers">
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}">
																	<span class="avatar-status bg-red"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}">
																	<span class="avatar-status bg-green"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
																	<span class="avatar-status bg-warning"></span>
																</span>
																<span class="avatar brround avatar-md cover-image m-1 bg-success">+34</span>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side38">
														<h5 class="mt-3 mb-4">Chat</h5>
														<div class="input-group d-none mb-4">
															<input type="text" class="form-control" placeholder="Search ...">
															<button class="btn btn-secondary" type="button">Search</button>
														</div>
														<div>
															<div class="list-group-item d-flex  align-items-center p-1 ">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Olivia</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Madeleine</strong> Hey! there I' am available....
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span>
																</div>
																<div>
																	<strong>Anthony</strong> New product Launching...
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Lily May</strong> New Schedule Realease......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Eric Walsh</strong> Okay...I will be waiting for you
																	<div class="small text-muted">
																		12 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
																</div>
																<div>
																	<strong>Alison White</strong> Hi we can explain our new project......
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center p-2">
																<div class="me-3">
																	<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-green"></span></span>
																</div>
																<div>
																	<strong>Jacob Lewis</strong> New product Launching...
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side39">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head">Employees Meeting</a></h6>
																	<span class="fs-11 text-muted mb-2">23 May, 2019</span>
																	<p class="fs-11">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Ramazan Festival  Celebration</a></h6>
																	<span class="mb-2 fs-11 text-muted">21 May, 2019</span>
																	<p>sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Best Employee Announcement</a></h6>
																	<span class="mb-2 fs-11 text-muted">18 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Weekend trip</a></h6>
																	<span class="mb-2 fs-11 text-muted">16 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">New Project Started..</a></h6>
																	<span class="mb-2 fs-11 text-muted">15 May, 2019</span>
																	<p>sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head">Gradening working</a></h6>
																	<span class="mb-2 fs-11 text-muted">07 May, 2019</span>
																	<p>sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane tab-content-double" id="side40">
														<h5 class="mt-3 mb-4">Activity</h5>
														<div class="activity mt-3">
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/4.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/5.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/6.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
																	<small class="text-muted ">30 mins ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/1.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
																	<small class="text-muted ">1 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
																	<small class="text-muted ">3 days ago</small>
																</div>
															</div>
															<img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="img-activity">
															<div class="time-activity">
																<div class="item-activity">
																	<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
																	<small class="text-muted ">5 days ago</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
							<div class="slide-right" id="slide-right">
								<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
									viewBox="0 0 24 24">
									<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
								</svg>
							</div>
						</div>
					</aside>
				</div>