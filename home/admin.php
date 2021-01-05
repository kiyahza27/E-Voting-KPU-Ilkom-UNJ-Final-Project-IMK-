<?php
  $sql = $koneksi->query("SELECT COUNT(ID_CALON) as tot_calon  from tb_calon");
  while ($data= $sql->fetch_assoc()) {
    $calon=$data['tot_calon'];
  }

  $sql = $koneksi->query("SELECT COUNT(ID_CALON) as tot_calon  from tb_calon2");
  while ($data= $sql->fetch_assoc()) {
    $calon_fak=$data['tot_calon'];
  }

  $sql = $koneksi->query("SELECT COUNT(ID_CALON) as tot_calon  from tb_calon3");
  while ($data= $sql->fetch_assoc()) {
    $calon_uni=$data['tot_calon'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pengguna) as tot_pemilih  from tb_pengguna where level='Pemilih'");
  while ($data= $sql->fetch_assoc()) {
    $pemilih=$data['tot_pemilih'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pengguna) as sudah  from tb_pengguna where level='Pemilih' and status='0'");
  while ($data= $sql->fetch_assoc()) {
    $sudah=$data['sudah'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pengguna) as belum  from tb_pengguna where level='Pemilih' and status='1'");
  while ($data= $sql->fetch_assoc()) {
    $belum=$data['belum'];
  }


  $sql = $koneksi->query("SELECT COUNT(id_pengguna) as sudah  from tb_pengguna where level='Pemilih' and status2='0'");
  while ($data= $sql->fetch_assoc()) {
    $sudah2=$data['sudah'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pengguna) as belum  from tb_pengguna where level='Pemilih' and status2='1'");
  while ($data= $sql->fetch_assoc()) {
    $belum2=$data['belum'];
  }

  
  $sql = $koneksi->query("SELECT COUNT(id_pengguna) as sudah  from tb_pengguna where level='Pemilih' and status3='0'");
  while ($data= $sql->fetch_assoc()) {
    $sudah3=$data['sudah'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pengguna) as belum  from tb_pengguna where level='Pemilih' and status3='1'");
  while ($data= $sql->fetch_assoc()) {
    $belum3=$data['belum'];
  }

?>

<style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  border-style: solid;
  border: 1px;
  padding: 3px;
}

.small-box_bg-info{
	background: blue;
	color: white;
	border-radius: 8px;
}

.small-box_bg-success{
	background: green;
	color: white;
	border-radius: 8px;
}

.small-box_bg-warning{
	background: orange;
	color: white;
	border-radius: 8px;
}

.small-box_bg-danger{
	background: #800000;
	color: white;
	border-radius: 8px;
}

.row{
	margin-left:3px;
	margin-top:3px;
}

h5 {
	margin-left:5px;
	margin-top:10px;
}

p {
	margin-left:5px;
	margin-top:5px;
}

.icon {
	margin-left:5px;
	margin-top:5px;
}

</style>
<br>
<a><b>Prodi</b></a>
<div class="row">
	<div class="column">
		<!-- small box -->
		<div class="small-box_bg-info">
			<div class="inner">
				<h5>
					<?php echo $calon; ?>
				</h5>

				<p>Jumlah Kandidat</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="" class="small-box-footer">
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="column">
		<!-- small box -->
		<div class="small-box_bg-success">
			<div class="inner">
				<h5>
					<?php echo $pemilih; ?>
				</h5>

				<p>Jumlah Pemilih</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="" class="small-box-footer">
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="column">
		<!-- small box -->
		<div class="small-box_bg-warning">
			<div class="inner">
				<h5>
					<?php echo $sudah; ?>
				</h5>

				<p>Sudah Memilih</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="column">
		<!-- small box -->
		<div class="small-box_bg-danger">
			<div class="inner">
				<h5>
					<?php echo $belum; ?>
				</h5>

				<p>Belum Memlih</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">
			</a>
		</div>
	</div>
</div>
<br>
<br>

<a><b>Fakultas</b></a>
<div class="row">
	<div class="column">
		<!-- small box -->
		<div class="small-box_bg-info">
			<div class="inner">
				<h5>
					<?php echo $calon_fak; ?>
				</h5>

				<p>Jumlah Kandidat</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="" class="small-box-footer">
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="column">
		<!-- small box -->
		<div class="small-box_bg-success">
			<div class="inner">
				<h5>
					<?php echo $pemilih; ?>
				</h5>

				<p>Jumlah Pemilih</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="" class="small-box-footer">
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="column">
		<!-- small box -->
		<div class="small-box_bg-warning">
			<div class="inner">
				<h5>
					<?php echo $sudah2; ?>
				</h5>

				<p>Sudah Memilih</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="column">
		<!-- small box -->
		<div class="small-box_bg-danger">
			<div class="inner">
				<h5>
					<?php echo $belum2; ?>
				</h5>

				<p>Belum Memlih</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">
			</a>
		</div>
	</div>
</div>
<br>

<br>
<a><b>Universitas</b></a>
<div class="row">
	<div class="column">
		<!-- small box -->
		<div class="small-box_bg-info">
			<div class="inner">
				<h5>
					<?php echo $calon_uni; ?>
				</h5>

				<p>Jumlah Kandidat</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="" class="small-box-footer">
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="column">
		<!-- small box -->
		<div class="small-box_bg-success">
			<div class="inner">
				<h5>
					<?php echo $pemilih; ?>
				</h5>

				<p>Jumlah Pemilih</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="" class="small-box-footer">
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="column">
		<!-- small box -->
		<div class="small-box_bg-warning">
			<div class="inner">
				<h5>
					<?php echo $sudah3; ?>
				</h5>

				<p>Sudah Memilih</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="column">
		<!-- small box -->
		<div class="small-box_bg-danger">
			<div class="inner">
				<h5>
					<?php echo $belum3; ?>
				</h5>

				<p>Belum Memlih</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">
			</a>
		</div>
	</div>
</div>
<br>