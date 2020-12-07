<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aplikasi E Voting</title>
	<link rel="icon" href="dist/img/voting.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
	<!-- Auto Refresh -->
	<script src="jquery-3.1.1.js" type="text/javascript"></script>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-blue navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">
						<b>Sistem Informasi E-Voting KPU Ilmu Komputer</b>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<a href="index.php" class="brand-link">
				<img src="dist/img/voting.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text font-weight-light"> E - VOTING V.1.0</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">
							ADMIN 1
						</a>
						<span class="badge badge-success">
							Administrator
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-users"></i>
								<p>
									Kelola Data
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="data-kandidat.php" class="nav-link">
										<i class="nav-icon far fa-user-circle"></i>
										<p>Data Kandidat</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="data-pemilih.php" class="nav-link">
										<i class="nav-icon far fa-user-circle"></i>
										<p>Data Pemilih</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa fa-table"></i>
								<p>
									Kotak Suara
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa fa-chart-pie"></i>
								<p>
									Quick Count
									<span class="badge badge-warning">
										QC
									</span>
								</p>
							</a>
						</li>


						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Laporan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon far fa-circle text-info"></i>
										<p>Daftar Kandidat</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon far fa-circle text-info"></i>
										<p>Daftar pemilih</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon far fa-circle text-info"></i>
										<p>Perolehan Suara</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-header">Setting</li>
						<li class="nav-item">
							<a href="data-admin.php" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p>
									Users
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="#" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper -->
		<div class="content-wrapper">
			<!-- Header -->
			<section class="content-header">
					<div class="card-body">
						<div class="table-responsive">
						<h1> DATA KANDIDAT </h1>
							<div>
								<a href="tambah-kandidat.php" class="btn btn-primary">
									<i class="fa fa-edit"></i> Tambah Data Kandidat
								</a>
							</div>
						</div>	
					</div>	
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="card card-info">
						<div class="card-header bg-success">
							<h3 class="card-title">
								<i class="fa fa-table"></i> Data Kandidat BEM Univeritas </h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<br>
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No Urut</th>
											<th>Nama Kandidat</th>
											<th>Foto Kandidat</th>
											<th>Keterangan</th>
											<th>Edit</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
				
				<div class="container-fluid">
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">
								<i class="fa fa-table"></i> Data Kandidat BEM Fakultas </h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
							<br>
								<table id="example3" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No Urut</th>
											<th>Nama Kandidat</th>
											<th>Foto Kandidat</th>
											<th>Keterangan</th>
											<th>Edit</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
					
				<div class="container-fluid">
					<div class="card card-info">
						<div class="card-header bg-secondary">
							<h3 class="card-title">
								<i class="fa fa-table"></i> Data Kandidat BEM Prodi </h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
							<br>
								<table id="example5" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No Urut</th>
											<th>Nama Kandidat</th>
											<th>Foto Kandidat</th>
											<th>Keterangan</th>
											<th>Edit</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
				

			</section>
			<!-- /.content -->
		</div>
		<!-- /.Content Wrapper -->
	
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<a>E-Voting KPU Ilmu Komputer UNJ</a>
			</div>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark"></aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- /.Site wrapper -->


	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>
	
	<script>
		$(function() {
			$("#example3").DataTable();
			$('#example4').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>
	
	<script>
		$(function() {
			$("#example5").DataTable();
			$('#example6').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>