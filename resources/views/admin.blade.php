<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin panel</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
		</div>

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-dark">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="{{ route('main.index')}}" class="nav-link">Главная</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Контакты</a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Navbar Search -->
				<li class="nav-item">
					<a class="nav-link" data-widget="navbar-search" href="#" role="button">
						<i class="fas fa-search"></i>
					</a>
					<div class="navbar-search-block">
						<form class="form-inline">
							<div class="input-group input-group-sm">
								<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
								<div class="input-group-append">
									<button class="btn btn-navbar" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<button class="btn btn-navbar" type="button" data-widget="navbar-search">
										<i class="fas fa-times"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Admin panel</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Пользователь</a>
					</div>
				</div>

				<!-- SidebarSearch Form -->
				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar">
								<i class="fas fa-search fa-fw"></i>
							</button>
						</div>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-edit"></i>
								<p>
									Forms
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/forms/general.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>General Elements</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/forms/advanced.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Advanced Elements</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/forms/editors.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Editors</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/forms/validation.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Validation</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Tables
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/tables/simple.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Simple Tables</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/tables/data.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>DataTables</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/tables/jsgrid.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>jsGrid</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-header">EXAMPLES</li>
						<li class="nav-item">
							<a href="pages/calendar.html" class="nav-link">
								<i class="nav-icon fas fa-calendar-alt"></i>
								<p>
									Calendar
									<span class="badge badge-info right">2</span>
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/gallery.html" class="nav-link">
								<i class="nav-icon far fa-image"></i>
								<p>
									Gallery
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-envelope"></i>
								<p>
									Mailbox
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/mailbox/mailbox.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Inbox</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/mailbox/compose.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Compose</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/mailbox/read-mail.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Read</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-book"></i>
								<p>
									Pages
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/examples/invoice.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Invoice</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/profile.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Profile</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/contacts.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Contacts</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/faq.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>FAQ</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/contact-us.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Contact us</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-plus-square"></i>
								<p>
									Extras
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>
											Login & Register v1
											<i class="fas fa-angle-left right"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">

										<li class="nav-item">
											<a href="pages/examples/register.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Register v1</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/examples/forgot-password.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Forgot Password v1</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="pages/examples/recover-password.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Recover Password v1</p>
											</a>
										</li>
									</ul>
								</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-search"></i>
								<p>
									Search
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/search/simple.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Simple Search</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/search/enhanced.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Enhanced</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">


			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">

				</div>
				<!--/. container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>


	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->
	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.js"></script>

	<!-- PAGE PLUGINS -->
	<!-- jQuery Mapael -->
	<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
	<script src="plugins/raphael/raphael.min.js"></script>
	<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
	<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
	<!-- ChartJS -->
	<script src="plugins/chart.js/Chart.min.js"></script>

	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>