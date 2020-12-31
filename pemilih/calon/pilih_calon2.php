<?php
$data_username = $_SESSION["ses_username"];

    if(isset($_GET['kode'])){
		$sql_simpan = "INSERT INTO tb_vote2 (id_calon, id_pemilih) VALUES (
            '".$_GET['kode']."',
            '".$data_username."');";
        $sql_simpan .= "UPDATE tb_pengguna set 
			status2='0'
			WHERE username='".$data_username."'";
        $query_simpan = mysqli_multi_query($koneksi, $sql_simpan);
		mysqli_close($koneksi);
		
		if ($query_simpan) {
			echo "<script>
			Swal.fire({title: 'Anda Berhasil Memilih',text: '',icon: 'success',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=bilik-suara2';
				}
			})</script>";
			}else{
			echo "<script>
			Swal.fire({title: 'Anda Gagal Memilih',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=bilik-suara2';
				}
			})</script>";
		  }}
		   //selesai proses simpan data
	  