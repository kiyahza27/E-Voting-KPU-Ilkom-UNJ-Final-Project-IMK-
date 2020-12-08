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
	<!-- Ionicons 
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	-->
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
			<!-- Left navbar links -->
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
					<a href="#" class="nav-link" style="color:white">
						<b>Sistem Informasi E-Voting KPU Ilmu Komputer</b>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="#" class="brand-link">
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
							Nama User
						</a>
						<span class="badge badge-success">
							Pemilih
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa fa-edit"></i>
								<p>
									Bilik Suara
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?page=data-calon" class="nav-link">
										<i class="nav-icon far fa-circle text-success"></i>
										<p>Prodi</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=data-pemilih" class="nav-link">
										<i class="nav-icon far fa-circle text-success"></i>
										<p>Fakultas</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=data-pemilih" class="nav-link">
										<i class="nav-icon far fa-circle text-success"></i>
										<p>Universitas</p>
									</a>
								</li>
							</ul>
						</li>




						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
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

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. contect taro DISINI ############################################################################### -->
				<div class="realtime">
	<div class="card card-info autoload">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-chart-pie"></i> Perolehan Suara</h3>
		</div>

		<!-- /.card-header -->
		<div class="card-body">
        <h5>Prodi</h5>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No Urut</th>
							<th>Nama Kandidat</th>
							<th>
								<center>Foto Kandidat</center>
							</th>
							<th>Jumlah Suara </th>
						</tr>
					</thead>
					<tbody>

						<?php
                        ?>

						<tr>
							<td>
								<?php #echo $data['id_calon']; ?>
							</td>
							<td>
								<?php #echo $data['nama_calon']; ?>
							</td>
							<td align="center">
								<img src="foto/<?php #echo $data['foto_calon']; ?>" width="150px" />
							</td>
							<td>
								<h4>
									<?php
								#$sql_hitung = "SELECT COUNT(id_vote) from tb_vote  where id_calon='$id_calon'";
								#$q_hit= mysqli_query($koneksi, $sql_hitung);
								#while($row = mysqli_fetch_array($q_hit)) {
								#echo $row[0]." Suara";
								#}
							?>
								</h4>
							</td>
						</tr>

						<?php
						#}
						?>
					</tbody>
					</tfoot>
				</table>
			</div>
		</div>
        <div class="card-body">
        <h5>Fakultas</h5>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No Urut</th>
							<th>Nama Kandidat</th>
							<th>
								<center>Foto Kandidat</center>
							</th>
							<th>Jumlah Suara</th>
						</tr>
					</thead>
					<tbody>

						<?php
                        ?>

						<tr>
							<td>
								<?php #echo $data['id_calon']; ?>
							</td>
							<td>
								<?php #echo $data['nama_calon']; ?>
							</td>
							<td align="center">
								<img src="foto/<?php #echo $data['foto_calon']; ?>" width="150px" />
							</td>
							<td>
								<h4>
									<?php
								#$sql_hitung = "SELECT COUNT(id_vote) from tb_vote  where id_calon='$id_calon'";
								#$q_hit= mysqli_query($koneksi, $sql_hitung);
								#while($row = mysqli_fetch_array($q_hit)) {
								#echo $row[0]." Suara";
								#}
							?>
								</h4>
							</td>
						</tr>

						<?php
						#}
						?>
					</tbody>
					</tfoot>
				</table>
			</div>
		</div>
        <div class="card-body">
        <h5>Universitas</h5>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No Urut</th>
							<th>Nama Kandidat</th>
							<th>
								<center>Foto Kandidat</center>
							</th>
							<th>Jumlah Suara</th>
						</tr>
					</thead>
					<tbody>

						<?php
                        ?>

						<tr>
							<td>
								<?php #echo $data['id_calon']; ?>
							</td>
							<td>
								<?php #echo $data['nama_calon']; ?>
							</td>
							<td align="center">
								<img src="foto/<?php #echo $data['foto_calon']; ?>" width="150px" />
							</td>
							<td>
								<h4>
									<?php
								#$sql_hitung = "SELECT COUNT(id_vote) from tb_vote  where id_calon='$id_calon'";
								#$q_hit= mysqli_query($koneksi, $sql_hitung);
								#while($row = mysqli_fetch_array($q_hit)) {
								#echo $row[0]." Suara";
								#}
							?>
								</h4>
							</td>
						</tr>

						<?php
						#}
						?>
					</tbody>
					</tfoot>
				</table>
			</div>
		</div>
		<!-- /.card-body -->
	</div>
				<!-- sampe SINI ############################################################## -->
			</section>
			<!-- /.content -->
			
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				E-Voting KPU Ilmu Komputer UNJ
			</div>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

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