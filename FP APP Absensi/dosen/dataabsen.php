<?php 
  //memanggil file koneksi.php yang berisi koneski ke database
  include ('../config/koneksi.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <title>E-Absensi</title>
    <link rel="stylesheet" href="../asset/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                  $data = mysqli_query($koneksi, "SELECT * FROM dosen");

                 while($hasil = mysqli_fetch_array($data)){
        ?>
        <div class="title"><div class="name">E-Absensi</div></div>
        <div class="img2"></div>
        <ul class="list-items">
          <li><div><?php echo "<img src='../img/$hasil[foto]' width='70' height='90' />";?>
          <div class="username"><?php echo $hasil['nidn'];  ?></div></li>
          <li><a href="dosen.php"><i class="fas fa-home"></i>Home</a></li>
          <li><a href="matkuldosen.php"><i class="fas fa-book"></i>Jadwal MatKul</a></li>
          <li><a href="tambahmatkul.php"><i class="fas fa-plus"></i>Tambah MatKul</a></li>
          <li><a href="dataabsen.php"><i class="fas fa-history"></i>Data Absensi</a></li>
          <li><a href="profile_dosen.php"><i class="fas fa-user"></i>Profile</a></li>
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
        <div class="img"><a href="dosen.php"></div></a></div></div>
      <br>
  <center>
    <h1>Data Absensi</h1>
  </center> <center><br><br>
  <table border="1 px" cellspacing="3 px"> 
   
             <thead>
                      <tr>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Keterangan</th>
                        <th>bukti</th>
                      </tr>
                   </thead>
                         <tbody>
                        <?php
                      include "../config/koneksi.php";
                       $data = mysqli_query($koneksi, "SELECT * FROM data_absen");

                      while($row = mysqli_fetch_array($data)){
                 
                       ?>
                        <tr>
                          <td><?php echo $row['npm'];  ?></td>
                          <td><?php echo $row['nama'];  ?></td>
                          <td><?php echo $row['tanggal'];  ?></td>
                          <td><?php echo $row['jam'];  ?></td>
                          <td><?php echo $row['ket'];  ?></td>
                          <td><?php echo "<img class='imgtable' src='../img/$row[bukti]' width='70' height='90' />";?></td> 
                        </tr>
                          <?php 
                          } 
                          ?>
                    </tbody>
          </table><br><br><br>

    <h1>Data Izin Mahasiswa </h1><br><br>
<table  border="1 px" cellspacing="3 px">
      <tr >
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
                          <td><?php echo "<img class='imgtable' src='../img/$row[bukti]' width='70' height='90' />";?></td> 
                        </tr>
                          <?php 
                          } 
                          ?>
</table>
</center>

    </div>
  </body>
</html>
