<?php 
  //memanggil file koneksi.php yang berisi koneski ke database
  include ('../config/koneksi.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <title>E-Absensi</title>
    <link rel="stylesheet" href="../asset/style-mahs.css">
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
          <li><a href="../logout.php"><i class="fas fa-logout"></i>Logout</a></li>
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

    <div class="body">
      <br>
  <center>
    <h1>Mata Kuliah </h1>
  </center> <center><br><br>
  <table border="1 px" cellspacing="3 px"> 
   
             <thead>
                      <tr>
                        <th>Kode Matkul</th>
                        <th>Nama Matkul</th>
                        <th>Nama Dosen</th>
                        <th>Jadwal Hari</th>
                        <th>Jam Masuk</th>
                        <th>Jam Selesai</th>
                        <th>Password Matkul</th>
                        <th>Aksi</th>
                      </tr>
                   </thead>
                         <tbody>
                       <?php
                include "../config/koneksi.php";
                  $data = mysqli_query($koneksi, "SELECT * FROM mata_kuliah");

        ?>

                       <?php while($row = mysqli_fetch_assoc($data)): ?>
                        <tr>
                          <td><?php echo $row['kode_matkul'];  ?></td>
                          <td><?php echo $row['nama_matkul'];  ?></td>
                          <td><?php echo $row['nama_dosen'];  ?></td>
                          <td><?php echo $row['jadwal'];  ?></td>
                          <td><?php echo $row['jam_masuk'];  ?></td>
                          <td><?php echo $row['jam_selesai'];  ?></td>
                          <td><?php echo $row['password_matkul'];  ?></td>
                          <td>
                       <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapusmatkul_dosen.php?kode_matkul=<?php echo $row['kode_matkul']; ?>' }" class="hapus-btn"><span class="glyphicon glyphicon-remove">Hapus</a>
                    </td>
                        </tr>
                       <?php endwhile ?>
                    </tbody>
          </table>
          </center>
</div>
    </div>
  </body>
</html>