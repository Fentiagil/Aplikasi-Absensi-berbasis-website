<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman admin</title>
	<link rel="stylesheet" type="text/css" href="../asset/styleadm.css">
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
                  $data = mysqli_query($koneksi, "SELECT * FROM admin");

                 while($hasil = mysqli_fetch_array($data)){
        ?>
        <div class="title"><div class="name">E-Absensi</div></div>
        <div class="img2"></div>
        <ul class="list-items">
          <li><div><?php echo "<img src='../img/$hasil[foto]' width='70' height='90' />";?>
          <div class="username"><?php echo "$hasil[email]"; ?></div></li>
          <li><a href="dasboardadmin.php"><i class="fas fa-home"></i>Home</a></li>
          <li><a href="datamahasiswa.php" style="font-size: 15px;"><i class="fas fa-user-check"></i>Daftar Mahasiswa</a></li>
          <li><a href="datadosen.php" style="font-size: 15px;"><i class="fas fa-user-check"></i>Daftar Dosen</a></li>
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
        <div class="img"><a href="admin.php"></div></a></div></div>
        <div class="body">
          <div class="isi1"><i class="fas fa-graduation-cap fa-5x" style="margin-top: 30px;"></i><a href="datamahasiswa.php"><br><button>MAHASISWA</a></button></div>
          <div class="isi2"><i class="fas fa-user-secret fa-5x" style="margin-top: 30px;"></i><a href="datadosen.php"><br><button>DOSEN</a></button></div>
        </div>

</body>
</html>