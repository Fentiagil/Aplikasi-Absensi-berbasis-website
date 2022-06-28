<?php 
  //memanggil file koneksi.php yang berisi koneski ke database
  include ('../config/koneksi.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../asset/style-mahs.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu Riwayat Absensi</title>
</head>
<body>
<div class="wrapper">
  <input type="checkbox" id="btn" hidden>
  <label for="btn" class="menu-btn">
  <i class="fas fa-bars"></i>
  <i class="fas fa-times"></i>
  </label>
  <nav id="sidebar">
        <?php
                include "../config/koneksi.php";
                  $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

                 while($hasil = mysqli_fetch_array($data)){
        ?>
 <div class="title"><div class="name">E-Absensi</div></div>
 <div class="img2"></div>
 <ul class="list-items">
          <li><div><?php echo "<img src='../img/$hasil[foto]' width='70' height='90' />";?>
          <div class="username"><?php echo $hasil['npm'];  ?></div></li>
          <li><a href="mahasiswa.php"><i class="fas fa-home"></i>Home</a></li>
          <li><a href="daftarmatkul.php"><i class="fas fa-book"></i>Mata Kuliah</a></li>
          <li><a href="menuAbsen.php"><i class="fas fa-address-book"></i>Absensi</a></li>
          <li><a href="menuRiwayatAbsen.php"><i class="fas fa-history"></i>Histori Absensi</a></li>
          <li><a href="profile_mhs.php"><i class="fas fa-user"></i>Profile</a></li>
          <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i>LogOut</a></li>
          <?php 
    }
    ?>
  </div>
  </div>
  </ul>

  </nav>
  </div>
   <div class="header">
      <div class="name">E-Absensi</div>
        <div class="img"><a href="mahasiswa.php"></div></a></div></div>
        <div class="formbody">
	<br>
  
    <h3>Menu Riwayat Absensi</h3><hr><br>
  <table  class="table5"> 
                      <tr bgcolor="99FF66">
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Keterangan</th>
                        <th>bukti</th>
                      </tr>
                       <?php
                      include "../config/koneksi.php";
                       $data = mysqli_query($koneksi, "SELECT * FROM data_absen");

                      while($row = mysqli_fetch_array($data)){
                 
                       ?>
                        <tr>
                          <td><?php echo $row['tanggal'];  ?></td>
                          <td><?php echo $row['jam'];  ?></td>
                          <td><?php echo $row['ket'];  ?></td>
                          <td><?php echo $row['bukti'];  ?></td> 
                        </tr>
                          <?php 
                          } 
                          ?>
</table>
<br/><br/>

<h3>Menu Riwayat Izin</h3><hr><br>
<table  class="table5">
      <tr bgcolor="99FF66">
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Alasan</th>
                        <th>Comment</th>
                        <th>bukti</th>
                      </tr>
                       <?php
                      include "../config/koneksi.php";
                       $data = mysqli_query($koneksi, "SELECT * FROM data_izin");

                      while($row = mysqli_fetch_array($data)){
                 
                       ?>
                        <tr>
                          <td><?php echo $row['tanggal'];  ?></td>
                          <td><?php echo $row['jam'];  ?></td>
                          <td><?php echo $row['alasan'];  ?></td>
                          <td><?php echo $row['komen'];  ?></td>
                          <td><?php echo $row['bukti'];  ?></td> 
                        </tr>
                          <?php 
                          } 
                          ?>
</table>

</div>
      </div>
    </div>
  </div>
</div>
</body>
</html>