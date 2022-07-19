@extends('layouts.admin')
@section('content')

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

		<div class="posts" style="margin-top:5% ;">
			<div class="container">
				<div class="row">
					<form class="lh-lg" action="{{ route('post.store') }}" method="post">
						@csrf
						<div class="mb-3">
							<label class="title">Title</label>
							<input type="text" name="title" class="form-control" id="title" placeholder="Title">
						</div>
						<div class="mb-3">
							<label class="title">content</label>
							<textarea type="text" name="content" class="form-control" id="content" placeholder="content"></textarea>
						</div>
						<div class="mb-3">
							<label class="title">Image</label>
							<input type="text" name="image" class="form-control" id="image" placeholder="Image">
						</div>
						<button type="submit" class="btn btn-primary">Create</button>
					</form>
				</div>
			</div>
		</div>

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


	@endsection