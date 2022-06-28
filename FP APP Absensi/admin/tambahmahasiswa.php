<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="../asset/styletambah.css">
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
          <div class="username"><?php echo $hasil['email'];  ?></div></li>
          <li><a href="dasboardadmin.php"><i class="fas fa-home"></i>Home</a></li>
          <li><a href="tambahmahasiswa.php" style="font-size: 14px;"><i class="fas fa-user-plus"></i>Tambah Mahasiswa</a></li>
          <li><a href="datamahasiswa.php" style="font-size: 15px;"><i class="fas fa-user-check"></i>Daftar Mahasiswa</a></li>
          <li><a href="tambahdosen.php" style="font-size: 14px;"><i class="fas fa-user-plus"></i>Tambah Dosen</a></li>
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
        <div class="img"><a href="dasboardadmin.php"></div></a></div></div>
        <div class="formbody">
                <div>
                  <h3>Tambah Mahasiswa Baru</h3></div>

    <form method="POST" action="">
    <table class="tabel5">
      <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type="text" name="email" required="required"></td>
      </tr>
      <tr>
          <td>NPM</td>
          <td>:</td>
          <td><input type="text" name="npm" required="required"></td>
      </tr>
      <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="nama" required="required"></td>
      </tr>
      <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="password" required="required" style="width: 220px;"></td>
      </tr>
      <tr>
          <td>Foto</td>
          <td>:</td>
          <td><input type="file" name="foto" required="required"></td>
      </tr>
</table>
          <button class="simpan" type="submit" name="simpan" value="Simpan">Simpan</button></a>
</form>

<?php
          include '../config/koneksi.php';
          if(isset($_POST['simpan'])){
          $insert = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES
                    ('".$_POST['email']."','".$_POST['npm']."', '".$_POST['nama']."', '".$_POST['password']."', '".$_POST['foto']."')");
          if($insert){
            echo "<script>alert('Add Success!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=datamahasiswa.php\">";
          }else{
            echo "gagal";
          }
        }
          ?>
      </div>
    </div>
  </div>
</div>
</body>
</html>
