
<?php
$koneksi = mysqli_connect("localhost","root","","db_vote");
//get records from database

$query = $koneksi->query("select * from tb_pengguna where jenis='PST'");
if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "KPU_". date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('ID', 'Name', 'Username', 'Password', 'Angkatan', 'Status Prodi', 'Status Fakultas', 'Status Universitas');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($data = $query->fetch_assoc()){
        $status = ($data['status'] == '1')?'Belum Memilih':'Sudah Memilih';
        $status2 = ($data['status2'] == '1')?'Belum Memilih':'Sudah Memilih';
        $status3 = ($data['status3'] == '1')?'Belum Memilih':'Sudah Memilih';
        $lineData = array($data['id_pengguna'], $data['nama_pengguna'], $data['username'], $data['password'], $data['angkatan'], $status, $status2, $status3);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>