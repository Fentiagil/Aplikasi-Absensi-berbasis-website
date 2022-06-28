<?php
include '../config/koneksi.php';
// menyimpan data kedalam variabel
$npm            = $_POST['npm'];
$nama           = $_POST['nama'];
$tanggal        = $_POST['tanggal'];
$jam          = $_POST['jam'];
$ket         = $_POST['ket'];
$bukti         = $_POST['bukti'];
// query SQL untuk insert data
$query="INSERT INTO data_absen SET npm='$npm',nama='$nama',tanggal='$tanggal',jam='$jam',ket='$ket',bukti='$bukti'";
$insert = mysqli_query($koneksi, $query);
if($insert){
            echo "<script>alert('Absen Success!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=MenuRiwayatAbsen.php\">";
          }else{
            echo "gagal";
          }
?>