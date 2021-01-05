<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_username"])==""){
	header("location: login");
    
    }else{
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
	  $data_level = $_SESSION["ses_level"];
	  $data_status = $_SESSION["ses_status"];
	  $data_jenis = $_SESSION["ses_jenis"];
    }

    //KONEKSI DB
    include "inc/koneksi.php"
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E-Voting KPU Ilkom UNJ 2020</title>
	<link rel="icon" href="dist/img/voting.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
	<!-- Auto Refresh -->
	<script src="jquery-3.1.1.js" type="text/javascript"></script>
	<script>
		setInterval(function() {
			$(".realtime").load("admin/suara/data_suara.php").fadeIn("slow");
		}, 1000);
	</script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #151e3d;
  padding: 30px 0px;
  position: fixed;
  top: 0;
  bottom: 0;
  overflow-y: scroll;
}

.wrapper .sidebar ul li{
  padding: 5px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
  font-size: 15px;
}

.wrapper .sidebar ul li a .fas{
  width: 15px;
}

.wrapper .sidebar ul li:hover{
  background-color: #111;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #2832c2;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info-EA{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info-EA div{
  margin-bottom: 20px;
}

@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}
	</style>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
			<!-- Sidebar -->
			<div class="sidebar">

					<div class="info-EA">
						<h4 href="index.php" class="d-block" style="margin-left:5px; color:white">
							<?php echo $data_nama; ?>
						</h4>
						<span class="badge badge-success" style="margin-left:5px; color:white" >
							<?php echo $data_level; ?>
						</span>
					</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul>

						<!-- Level  -->
						<?php
          if ($data_level=="Administrator"){
        ?>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<p style="font-family: 'Josefin Sans', sans-serif;"><i class="nav-icon fas fa-tachometer-alt"></i>  Dashboard</p>
							</a>
						</li>

						<li class="nav-item">
								<a href="#" class="nav-link">
								<p style="font-family: 'Josefin Sans', sans-serif;"><i class="nav-icon far fa-circle text-success"></i>  Manage</p>
								</a>
							</a>
						</li>

						<li class="nav-item">
									<a href="?page=data-calon" class="nav-link">
										<p style="font-size:10px">Data Kandidat Prodi</p>
									</a>
						</li>
						<li class="nav-item">
									<a href="?page=data-calon2" class="nav-link">
										<p style="font-size:10px">Data Kandidat Fakultas</p>
									</a>
						</li>
						<li class="nav-item">
									<a href="?page=data-calon3" class="nav-link">
										<p style="font-size:10px">Data Kandidat Universitas</p>
									</a>
						</li>
						<li class="nav-item">
									<a href="?page=data-pemilih" class="nav-link">
										<p style="font-size:10px">Data Pemilih</p>
									</a>
								</li>


						<li class="nav-item">
							<a href="?page=data-kotak" class="nav-link">
							<p style="font-family: 'Josefin Sans', sans-serif;"><i class="nav-icon far fa fa-table"></i>   Kotak Suara Prodi</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-kotak2" class="nav-link">
							<p style="font-family: 'Josefin Sans', sans-serif;"><i class="nav-icon far fa fa-table"></i>   Kotak Suara Fakultas</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-kotak3" class="nav-link">
							<p style="font-family: 'Josefin Sans', sans-serif;"><i class="nav-icon far fa fa-table"></i>   Kotak Suara Universitas</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-suara" class="nav-link">
							<p style="font-family: 'Josefin Sans', sans-serif;"><i class="nav-icon far fa fa-chart-pie"></i>   Quick Count</p>
							</a>
						</li>

						<?php
          				} elseif($data_level=="Pemilih"){
          				?>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
							<p style="font-family: 'Josefin Sans', sans-serif;"><i class="nav-icon fas fa-tachometer-alt"></i>   Dashboard</p>
							</a>
						</li>
						<li class="nav-item">
								<a href="#" class="nav-link">
								<p style="font-family: 'Josefin Sans', sans-serif;"><i class="nav-icon far fa fa-edit"></i>  Bilik Suara</p>
								</a>
							</a>
						</li>

						<li class="nav-item">
									<a href="?page=bilik-suara" class="nav-link">
										<p style="font-size:15px">Prodi</p>
									</a>
						</li>

						<li class="nav-item">
									<a href="?page=bilik-suara2" class="nav-link">
										<p style="font-size:15px">Fakultas</p>
									</a>
						</li>

						<li class="nav-item">
									<a href="?page=bilik-suara3" class="nav-link">
										<p style="font-size:15px">Universitas</p>
									</a>
						</li>



						<?php
							}
						?>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
							<p style="font-family: 'Josefin Sans', sans-serif;"><i class="nav-icon far fa-circle text-danger"></i>   Sign Out</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<div class="main_content">
        <div class="header"><h4 style="color:white">Sistem Informasi E-Voting KPU Ilkom</h4></div>  
        <div class="info">

					<?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {
              //Klik Halaman Home Pengguna
              	case 'admin':
                  include "home/admin.php";
                  break;
				case 'pemilih':
                  include "home/pemilih.php";
                  break;

					//calon
				case 'data-calon':
					include "admin/calon/data_calon.php";
					break;
				case 'data-calon2':
					include "admin/calon/data_calon2.php";
					break;
				case 'data-calon3':
					include "admin/calon/data_calon3.php";
					break;
				case 'add-calon':
					include "admin/calon/add_calon.php";
					break;
				case 'add-calon2':
					include "admin/calon/add_calon2.php";
					break;
				case 'add-calon3':
					include "admin/calon/add_calon3.php";
					break;
				case 'edit-calon':
					include "admin/calon/edit_calon.php";
					break;
				case 'edit-calon2':
					include "admin/calon/edit_calon2.php";
					break;
				case 'edit-calon3':
					include "admin/calon/edit_calon3.php";
					break;
				case 'del-calon':
					include "admin/calon/del_calon.php";
					break;
				case 'del-calon2':
					include "admin/calon/del_calon2.php";
					break;
				case 'del-calon3':
					include "admin/calon/del_calon3.php";
					break;
					
					//Pemilih
				case 'data-pemilih':
					include "admin/pemilih/data_pemilih.php";
					break;
				case 'add-pemilih':
					include "admin/pemilih/add_pemilih.php";
					break;
				case 'edit-pemilih':
					include "admin/pemilih/edit_pemilih.php";
					break;
				case 'del-pemilih':
					include "admin/pemilih/del_pemilih.php";
					break;
					
					//Bilik suara
				case 'bilik-suara':
					include "pemilih/calon/bilik_suara.php";
					break;
				case 'bilik-suara2':
					include "pemilih/calon/bilik_suara2.php";
					break;
				case 'bilik-suara3':
					include "pemilih/calon/bilik_suara3.php";
					break;
				case 'pilih-calon':
					include "pemilih/calon/pilih_calon.php";
					break;
				case 'pilih-calon2':
					include "pemilih/calon/pilih_calon2.php";
					break;
				case 'pilih-calon3':
					include "pemilih/calon/pilih_calon3.php";
					break;
				case 'buka-calon':
                  include "pemilih/calon/buka_calon.php";
				  break;
				case 'buka-calon2':
				  include "pemilih/calon/buka_calon2.php";
				  break;
				case 'buka-calon3':
				  include "pemilih/calon/buka_calon3.php";
				  break;
				case 'view':
                  include "pemilih/calon/view_calon.php";
				  break;
				case 'view2':
				  include "pemilih/calon/view_calon2.php";
				  break;
				case 'view3':
				  include "pemilih/calon/view_calon3.php";
				  break;



				//Kotak suara
				case 'data-kotak':
                  include "admin/kotak/data_kotak.php";
				  break;
				case 'data-kotak2':
				  include "admin/kotak/data_kotak2.php";
				  break;
				case 'data-kotak3':
				  include "admin/kotak/data_kotak3.php";
				  break;
				case 'data-suara':
                  include "admin/suara/data_suara.php";
                  break;


          
              //default
              default:
                  echo "<center><h1> PROGRESS !</h1></center>";
                  break;    
          }
      }else{
        // Auto Halaman Home Pengguna
          if($data_level=="Administrator"){
              include "home/admin.php";
              }
          elseif($data_level=="Pemilih"){
              include "home/pemilih.php";
              }
          }
    ?>

</div>
    </div>
</div>

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