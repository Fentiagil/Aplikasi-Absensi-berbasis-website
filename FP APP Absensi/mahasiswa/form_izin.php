<?php
include '../config/koneksi.php';
// menyimpan data kedalam variabel
$npm            = $_POST['npm'];
$tanggal        = $_POST['tanggal'];
$jam          = $_POST['jam'];
$alasan         = $_POST['alasan'];
$komen           = $_POST['komen'];
$bukti         = $_POST['bukti'];
// query SQL untuk insert data
$query="INSERT INTO data_izin SET npm='$npm',tanggal='$tanggal',jam='$jam',alasan='$alasan',komen='$komen',bukti='$bukti'";
$insert = mysqli_query($koneksi, $query);
if($insert){
            echo "<script>alert('Perizinan Success!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=MenuRiwayatAbsen.php\">";
          }else{
            echo "gagal";
          }
?>