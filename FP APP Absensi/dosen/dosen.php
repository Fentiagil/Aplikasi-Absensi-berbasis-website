<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <title>E-Absensi</title>
    <link rel="stylesheet" type="text/css" href="../asset/styles.css">
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

    <div class="body">
      <div class="card">
               <center><h1>Selamat Datang Dosen</h1></center>
         </div>

                    <div class="card2">
                    <center>
                      <img src="../img/logo.png">
                      <br>
                      <b>UPN Veteran Jawa Timur</b>
                    </center>
                  </div>
                  <div class="card-category">
                    <center>
Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Kota SBY, Jawa Timur 60294
  <br>Email : upnvjatim@gmail.com Telp.08121234567
                    </center>
                  </div>
    </div>
  </body>
</html>
