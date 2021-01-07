<?php
$koneksi = new mysqli ("localhost","root","","db_vote");
?>
<div class="realtime">
	<div class="card card-info autoload">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-chart-pie"></i> Perolehan Suara Prodi</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
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
					$no = 1;
					$sql = $koneksi->query("select * from tb_calon");
					while ($data= $sql->fetch_assoc()) {

						$id_calon = $data["id_calon"];
					?>

						<tr>
							<td>
								<?php echo $data['id_calon']; ?>
							</td>
							<td>
								<?php echo $data['nama_calon']; ?>
							</td>
							<td align="center">
								<img src="foto/<?php echo $data['foto_calon']; ?>" width="150px" />
							</td>
							<td>
								<h4>
									<?php
								$sql_hitung = "SELECT COUNT(id_vote) from tb_vote  where id_calon='$id_calon'";
								$q_hit= mysqli_query($koneksi, $sql_hitung);
								while($row = mysqli_fetch_array($q_hit)) {
								echo $row[0]." Suara";
								}
							?>
								</h4>
							</td>
						</tr>

						<?php
						}
						?>
					</tbody>
					</tfoot>
				</table>
			</div>
		</div>
		<!-- /.card-body -->
	</div>

	<br><br>

	<div class="realtime">
	<div class="card card-info autoload">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-chart-pie"></i> Perolehan Suara Fakultas</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
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
					$no = 1;
					$sql = $koneksi->query("select * from tb_calon2");
					while ($data= $sql->fetch_assoc()) {

						$id_calon = $data["id_calon"];
					?>

						<tr>
							<td>
								<?php echo $data['id_calon']; ?>
							</td>
							<td>
								<?php echo $data['nama_calon']; ?>
							</td>
							<td align="center">
								<img src="foto/<?php echo $data['foto_calon']; ?>" width="150px" />
							</td>
							<td>
								<h4>
									<?php
								$sql_hitung = "SELECT COUNT(id_vote) from tb_vote2  where id_calon='$id_calon'";
								$q_hit= mysqli_query($koneksi, $sql_hitung);
								while($row = mysqli_fetch_array($q_hit)) {
								echo $row[0]." Suara";
								}
							?>
								</h4>
							</td>
						</tr>

						<?php
						}
						?>
					</tbody>
					</tfoot>
				</table>
			</div>
		</div>
		<!-- /.card-body -->
	</div>

	<br><br>

	<div class="realtime">
	<div class="card card-info autoload">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-chart-pie"></i> Perolehan Suara Universitas</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
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
					$no = 1;
					$sql = $koneksi->query("select * from tb_calon3");
					while ($data= $sql->fetch_assoc()) {

						$id_calon = $data["id_calon"];
					?>

						<tr>
							<td>
								<?php echo $data['id_calon']; ?>
							</td>
							<td>
								<?php echo $data['nama_calon']; ?>
							</td>
							<td align="center">
								<img src="foto/<?php echo $data['foto_calon']; ?>" width="150px" />
							</td>
							<td>
								<h4>
									<?php
								$sql_hitung = "SELECT COUNT(id_vote) from tb_vote3  where id_calon='$id_calon'";
								$q_hit= mysqli_query($koneksi, $sql_hitung);
								while($row = mysqli_fetch_array($q_hit)) {
								echo $row[0]." Suara";
								}
							?>
								</h4>
							</td>
						</tr>

						<?php
						}
						?>
					</tbody>
					</tfoot>
				</table>
			</div>
		</div>
		<!-- /.card-body -->
	</div>