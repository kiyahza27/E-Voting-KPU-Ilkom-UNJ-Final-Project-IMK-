<?php

	$data_username = $_SESSION["ses_username"];

	$sql = $koneksi->query("select * from tb_pengguna where username=$data_username");
	while ($data= $sql->fetch_assoc()) {

	$status=$data['status'];

}
?>

<?php if($status==1){ ?>
<h4><b>Prodi</b></h4>
<div class="row">
	<tbody>

		<?php
		$sql = $koneksi->query("select * from tb_calon");
		while ($data= $sql->fetch_assoc()) {
		?>
		<!-- Profile Image -->

		<div class="col-md-4">
			<div class="card card-primary card-outline">
				<div class="card-body ">
					<h4 class="profile-username text-center">
						<?php echo $data['id_calon']; ?>
					</h4>
					<div class="text-center">
						<img src="foto/<?php echo $data['foto_calon']; ?>" width="235px" height="235px" />
					</div>

					<h3 class="profile-username text-center">
						<?php echo $data['nama_calon']; ?>
					</h3>

					<center>
						<a href="?page=view&kode=<?php echo $data['id_calon']; ?>" class="btn btn-success btn">
							<i class="fa fa-file"></i> Detail
						</a>
						<a href="?page=buka-calon&kode=<?php echo $data['id_calon']; ?>" class="btn btn-primary">
							<i class="fa fa-edit"></i> Pilih
						</a>
					</center>
				</div>
			</div>
		</div>

		<!-- /.card -->
		<?php
              }
            ?>
	</tbody>
</div>

<!-- /.card-body -->
<?php }elseif ($status==0) { ?>

<div class="alert alert-info alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4>
		<i class="icon fas fa-info"></i>Info</h4>
	<h3>Anda sudah menggukan Hak Suara di tingkat Prodi, Terimakasih.</h3>
</div>

<?php }  