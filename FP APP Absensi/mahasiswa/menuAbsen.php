<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>E-Absensi</title>
  <link rel="stylesheet" type="text/css" href="../asset/style-mahs.css">
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

        <div class="body">
          <center><h1>Menu Absensi</h1></center>
<table class="table5">
                <tr bgcolor="99FF66">
                  <th>Kode Matkul</th>
                  <th>Mata Kuliah</th>
                  <th>AKSI</th>
                </tr>
                <?php
                include "../config/koneksi.php";
                  $data = mysqli_query($koneksi, "SELECT * FROM daftar_matkul");

                 while($hasil = mysqli_fetch_array($data)){
                 
                ?>
                  
                  <tr>
                    <td><?php echo $hasil['kode_matkul'];  ?></td>
                    <td><?php echo $hasil['matkul'];  ?></td>
                    <td>
                       <a href="menuAbsen2.php" class="edit-btn">Absensi</a>
                      |
                      <a href="menuIzin.php" class="hapus-btn"><span class="glyphicon glyphicon-remove">Izin</a>
                    </td>
                  </tr>
                 
        <?php 
    } 
    ?>
</table>
        </div>
</body>
</html>
