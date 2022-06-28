
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Edit Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="../asset/style-mahs.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
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
          <li><div><?php echo "<img class='img1' src='../img/$hasil[foto]' width='70' height='90' />";?>
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
        <div class="img"><a href="dosen.php"></div></a></div></div>
        <div class="formbody">
                <div>
                  <h3>Edit Mahasiswa</h3></div>
        <hr><br>
        <?php
              include '../config/koneksi.php';
              $a = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm = '".$_GET['npm']."'");
              $b = mysqli_fetch_array($a, MYSQLI_ASSOC)
          ?>
    	<a class="lihat"  href="<?php echo "datamahasiswa.php"; ?>">Lihat Data</a><br><br><br>

        <form  method="POST">
            
            <table class="table5">
              <tr>
                <td>NPM</td>
                <td style="text-align: center;">:</td>
                <td><input type="text" name="npm"  readonly="readonly" value="<?= $b['npm'] ?>"></td>
              </tr>
              <tr>
                <td>NAMA</td>
                <td style="text-align: center;">:</td>
                <td><input type="text" name="nama"  required="required" value="<?= $b['nama'] ?>"></td>
              </tr>
              <tr>
                <td>Email</td>
                <td style="text-align: center;">:</td>
                <td><input type="text" name="email"  required="required" value="<?= $b['email'] ?>"></td>
              <tr>
                <td>Password</td>
                <td style="text-align: center;">:</td>
                <td><input type="Password" name="password" required="required" value="<?= $b['password'] ?>"></td>
              </tr>
              <tr>
                <td>Foto</td>
                <td style="text-align: center;">:</td>
                <td><input type="file" name="foto" required="required" value="<?= $b['foto'] ?>"></td>
              </tr>
      
            </table>
          <button class="simpan" type="submit" name="update" value="Simpan">Simpan</button></a> 
          </form>

		  <?php
          if(isset($_POST['update'])){
            $update = mysqli_query($koneksi, "UPDATE mahasiswa SET npm = '".$_POST['npm']."', nama = '".$_POST['nama']."', email = '".$_POST['email']."', password = '".$_POST['password']."', foto = '".$_POST['foto']."' WHERE npm = '".$_GET['npm']."'");

          if($update){
             echo "<script>alert('Add Success!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=datamahasiswa.php\">";
          }else{
            echo "gagal disimpan";
          }
        }
          ?>
      </div>
    </div>
  </div>
</div>
</body>
</html>
