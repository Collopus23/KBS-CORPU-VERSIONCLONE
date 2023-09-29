<!DOCTYPE html>
<html lang="en" id="demo">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Favicon -->
	<link rel="icon" href="{{ asset('assets/user-area/img/favicon.png') }}" type="image/x-icon" />

	<!-- Title -->
	<title>KBS Corporate University</title>

	<!-- Bootstrap css-->
	<link  id="style" href="{{ asset('assets/user-area/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>

	<!-- Icons css-->
	<link href="{{ asset('assets/user-area/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/user-area/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/user-area/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />

	<!-- Style css-->
	<link href="{{ asset('assets/user-area/css/style.css') }}" rel="stylesheet">

	<!-- Select2 css-->
	<link href="{{ asset('assets/user-area/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

	<!-- Mutipleselect css-->
	<link rel="stylesheet" href="{{ asset('assets/user-area/plugins/multipleselect/multiple-select.css') }}">

	{{-- Custom css --}}
	<link rel="stylesheet" href="{{ asset('assets/user-area/css/custom.css') }}">

</head>

<body class="ltr main-body leftmenu">

	<!-- Loader -->
	<div id="global-loader">
		<img src="{{ asset('assets/user-area/img/loader.svg') }}" class="loader-img" alt="Loader">
	</div>
	<!-- End Loader -->


	<!-- Page -->
	<div class="page">

		<!-- Main Header-->
		<div class="main-header side-header sticky">
			<div class="main-container container-fluid">
				<div class="main-header-left">
					<a class="main-header-menu-icon" href="javascript:void(0)" id="mainSidebarToggle"><span></span></a>
					<div class="hor-logo">
						<a class="main-logo" href="{{ url('/dashboard') }}">
							<img src="{{ asset('assets/user-area/img/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
							<img src="{{ asset('assets/user-area/img/brand/logo-light.png') }}" class="header-brand-img desktop-logo-dark"
								alt="logo">
						</a>
					</div>
				</div>
				<div class="main-header-center">
					<div class="responsive-logo">
						<a href="{{ url('/dashboard') }}"><img src="{{ asset('assets/user-area/img/brand/logo.png') }}" class="mobile-logo" alt="logo"></a>
						<a href="{{ url('/dashboard') }}"><img src="{{ asset('assets/user-area/img/brand/logo-light.png') }}" class="mobile-logo-dark" alt="logo"></a>
					</div>
				</div>
				<div class="main-header-right">
					<button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
						aria-expanded="false" aria-label="Toggle navigation">
						<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
					</button><!-- Navresponsive closed -->
					<div
						class="navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
						<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
							<div class="d-flex order-lg-2 ms-auto">
								<div class="max-w-10">
									<select class="form-control select2">
										<option class="mr-2" selected value="2023">Tahun: 2023</option>
									</select>
								</div>
								<!-- Theme-Layout -->
								<div class="dropdown d-flex main-header-theme">
									<a class="nav-link icon layout-setting">
										<span class="dark-layout">
											<i class="fe fe-sun header-icons"></i>
										</span>
										<span class="light-layout">
											<i class="fe fe-moon header-icons"></i>
										</span>
									</a>
								</div>
								<!-- Theme-Layout -->
								<!-- Full screen -->
								<div class="dropdown ">
									<a class="nav-link icon full-screen-link">
										<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
										<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
									</a>
								</div>
								<!-- Full screen -->
								<!-- Notification -->
								<div class="dropdown main-header-notification">
									<a class="nav-link icon" href="">
										<i class="fe fe-bell header-icons"></i>
										<span class="badge bg-danger nav-link-badge">1</span>
									</a>
									<div class="dropdown-menu">
										<div class="main-notification-list">
											<div class="media new">
												<div class="main-img-user online"><img alt="avatar"
														src="{{ asset('assets/user-area/img/users/5.jpg') }}"></div>
												<div class="media-body">
													<p>Congratulate <strong>Olivia James</strong> for New template
														start</p>
													<span>Oct 15 12:32pm</span>
												</div>
											</div>
										</div>
										<div class="dropdown-footer">
											<a href="javascript:void(0)">View All Notifications</a>
										</div>
									</div>
								</div>
								<!-- Notification -->
								<!-- Profile -->
								<div class="dropdown main-profile-menu">
									@php
										$profilepic = asset('assets/user-area/img/no-user.jpg');
										if(session('authUserData')->user->profilepic) {
											$profilepic = session('authUserData')->user->profilepic;
										}
									@endphp
									<a class="d-flex" href="javascript:void(0)">
										<span class="main-img-user"><img alt="avatar" src="{{ $profilepic }}"></span>
									</a>
									<div class="dropdown-menu">
										<div class="header-navheading">
											<h6 class="main-notification-title">{{ session('authUserData')->user->name }}</h6>
											<p class="main-notification-text">Role Aktif: {{ session('defaultRole')->name }}</p>
										</div>
										@php
											if(session('SSOAuthed')) {
												$profile_link = env('SSO_DOMAIN') . 'profile';
											}
											else {
												$profile_link = url('/profil');
											}
										@endphp
										<a target="_blank" class="dropdown-item border-top" href="{{ $profile_link }}">
											<i class="fe fe-user"></i> Profil
										</a>
										<a class="dropdown-item" data-bs-target="#modalChangeRole" data-bs-toggle="modal" href="javascript:void(0);">
											<i class="fe fe-edit"></i> Ganti Role
										</a>
										<a class="dropdown-item" data-bs-target="#modalLogOut" data-bs-toggle="modal" href="javascript:void(0);"><i class="fe fe-power"></i> Sign Out
										</a>
									</div>
								</div>
								<!-- Profile -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main Header-->

		<!-- Sidemenu -->
		@include('lms/side-menu')
		<!-- End Sidemenu -->

		<!-- Main Content-->
		@yield('lms/content')
		<!-- End Main Content-->

		<!-- Main Footer-->
		<div class="main-footer text-center">
			<div class="container">
				<div class="row row-sm">
					<div class="col-md-12">
						<span>Copyright © 2022 <a href="javascript:void(0)">Spruha</a>. Designed by <a
								href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
					</div>
				</div>
			</div>
		</div>
		<!--End Footer-->

		<!-- Sidebar -->
		<div class="sidebar sidebar-right sidebar-animate">
			<div class="sidebar-icon">
				<a href="javascript:void(0)" class="text-end float-end text-dark fs-20" data-bs-toggle="sidebar-right"
					data-bs-target=".sidebar-right"><i class="fe fe-x"></i></a>
			</div>
			<div class="sidebar-body">
				<h5>Todo</h5>
				<div class="d-flex p-3">
					<label class="ckbox"><input checked type="checkbox"><span>Hangout With friends</span></label>
					<span class="ms-auto">
						<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top">
					<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
					<span class="ms-auto">
						<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top">
					<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
					<span class="ms-auto">
						<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top">
					<label class="ckbox"><input checked type="checkbox"><span>System Updated</span></label>
					<span class="ms-auto">
						<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top">
					<label class="ckbox"><input type="checkbox"><span>Do something more</span></label>
					<span class="ms-auto">
						<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top">
					<label class="ckbox"><input type="checkbox"><span>System Updated</span></label>
					<span class="ms-auto">
						<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top">
					<label class="ckbox"><input type="checkbox"><span>Find an Idea</span></label>
					<span class="ms-auto">
						<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top mb-0">
					<label class="ckbox"><input type="checkbox"><span>Project review</span></label>
					<span class="ms-auto">
						<i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
							data-bs-placement="top" data-bs-original-title="Delete"></i>
					</span>
				</div>
				<h5>Overview</h5>
				<div class="p-4">
					<div class="main-traffic-detail-item">
						<div>
							<span>Founder &amp; CEO</span> <span>24</span>
						</div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20"
								class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
						</div><!-- progress -->
					</div>
					<div class="main-traffic-detail-item">
						<div>
							<span>UX Designer</span> <span>1</span>
						</div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15"
								class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
						</div><!-- progress -->
					</div>
					<div class="main-traffic-detail-item">
						<div>
							<span>Recruitment</span> <span>87</span>
						</div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45"
								class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
						</div><!-- progress -->
					</div>
					<div class="main-traffic-detail-item">
						<div>
							<span>Software Engineer</span> <span>32</span>
						</div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25"
								class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
						</div><!-- progress -->
					</div>
					<div class="main-traffic-detail-item">
						<div>
							<span>Project Manager</span> <span>32</span>
						</div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25"
								class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
						</div><!-- progress -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

	</div>
	<!-- End Page -->

	{{-- Modal Change Role --}}
	<div class="modal fade" id="modalChangeRole">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-content-demo">
				<div class="modal-header">
					<h6 class="modal-title">Ganti Role</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
				</div>
				<form>
					<div class="modal-body">
						<div class="form-group">
							<select required name="role_id" class="form-control select2" data-placeholder="Pilih">
								@php
									if(is_array(session('authUserData')->roles)) {
										foreach (session('authUserData')->roles as $role) {
											$selected = "";
											if(session('defaultRole')->id == $role->id) {
												$selected = "selected";
											}
											echo "<option $selected value='$role->id'>$role->name</option>";
										}
									}
								@endphp
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button id="btnSetRole" class="btn ripple btn-success" type="button">Submit</a>
						<button class="btn ripple btn-light" data-bs-dismiss="modal" type="button">Batalkan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	{{-- End Modal Change Role --}}

	{{-- Modal Logut --}}
	<div class="modal fade" id="modalLogOut">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-content-demo">
				<div class="modal-header">
					<h6 class="modal-title">Konfirmasi</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
				</div>
				<div class="modal-body">
					<p>Apakah anda yakin ingin keluar dari aplikasi?</p>
				</div>
				<div class="modal-footer">
					<a href="{{ url('/logout').'/'.session('authUserData')->sessionRequest }}" class="btn ripple btn-success" type="button">Ya, keluar</a>
					<button class="btn ripple btn-light" data-bs-dismiss="modal" type="button">Batalkan</button>
				</div>
			</div>
		</div>
	</div>
	{{-- End Modal Logout --}}

	<!-- Back-to-top -->
	<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>
	
	@include('lms/main-script')

</body>
</html>