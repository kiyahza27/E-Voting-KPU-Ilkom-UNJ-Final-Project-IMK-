<?php

	$data_id = $_SESSION["ses_id"];

	$sql = $koneksi->query("select * from tb_pengguna where id_pengguna=$data_id");
	while ($data= $sql->fetch_assoc()) {

	$status=$data['status'];
	$status2=$data['status2'];
	$status3=$data['status3'];
}
?>

<!--status per pemilu -->

<?php if($status==1){ ?>

	<div class="alert alert-warning alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4>
		<i class="icon fas fa-info"></i>Info Prodi</h4>
	<h3>Anda belum melakukan Pemilu pada tingkat Prodi!</h3>
</div>

<!-- /.card-body -->
<?php }elseif ($status==0) { ?>

<div class="alert alert-info alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4>
		<i class="icon fas fa-info"></i>Info Prodi</h4>
	<h3>Anda sudah menggukan Hak Suara dengan baik, Terimakasih.</h3>
</div>

<?php } ?> 


<?php if($status2==1){ ?>

	<div class="alert alert-warning alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4>
		<i class="icon fas fa-info"></i>Info Prodi</h4>
	<h3>Anda belum melakukan Pemilu pada tingkat Fakultas!</h3>
</div>

<!-- /.card-body -->
<?php }elseif ($status2==0) { ?>

<div class="alert alert-info alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4>
		<i class="icon fas fa-info"></i>Info Prodi</h4>
	<h3>Anda sudah menggukan Hak Suara dengan baik, Terimakasih.</h3>
</div>

<?php }  
?> 

<?php if($status3==1){ ?>

<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h4>
	<i class="icon fas fa-info"></i>Info Prodi</h4>
<h3>Anda belum melakukan Pemilu pada tingkat Universitas!</h3>
</div>

<!-- /.card-body -->
<?php }elseif ($status3==0) { ?>

<div class="alert alert-info alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h4>
	<i class="icon fas fa-info"></i>Info Prodi</h4>
<h3>Anda sudah menggukan Hak Suara dengan baik, Terimakasih.</h3>
</div>

<?php }  
?> 