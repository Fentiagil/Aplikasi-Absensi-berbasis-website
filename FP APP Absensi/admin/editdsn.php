
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Edit Dosen</title>
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
        <div class="img"><a href="dasboardadmin.php"></div></a></div></div>
        <div class="formbody">
                <div>
                  <h3>Edit Dosen</h3></div>
          <?php
              include '../config/koneksi.php';
              $a = mysqli_query($koneksi, "SELECT * FROM dosen WHERE nidn = '".$_GET['nidn']."'");
              $b = mysqli_fetch_array($a, MYSQLI_ASSOC)
          ?>
        <hr><br>
    	<a class="lihat"  href="<?php echo "datadosen.php"; ?>">Lihat Data</a><br><br><br>
    
        <form  method="POST" >
            
            <table class="table5" align="center">
              <tr>
                <td>NIDN</td>
                <td style="text-align: center;">:</td>
                <td><input type="text" name="nidn" readonly="readonly" value="<?= $b['nidn'] ?>"></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td style="text-align: center;">:</td>
                <td><input type="text" name="nama_dosen" required="required" value="<?= $b['nama_dosen'] ?>"></td>
              </tr>
              <tr>
                <td>Email</td>
                <td style="text-align: center;">:</td>
                <td><input type="text" name="email_dosen"  required="required" value="<?= $b['email_dosen'] ?>"></td>
              <tr>
                <td>Password</td>
                <td style="text-align: center;">:</td>
                <td><input type="text" name="password" quired="required" value="<?= $b['password'] ?>"></td>
              </tr>
              <tr>
                <td>Foto</td>
                <td style="text-align: center;">:</td>
                <td><input type="file" name="foto" required="required" value="<?= $b['foto'] ?>"></td>
              </tr>
      
            </table>
          <button class="simpan" type="submit" name="update" value="SIMPAN">Simpan</button></a> 
          </form>
          <?php
          if(isset($_POST['update'])){
            $update = mysqli_query($koneksi, "UPDATE dosen SET nidn = '".$_POST['nidn']."', nama_dosen = '".$_POST['nama_dosen']."', email_dosen = '".$_POST['email_dosen']."', password = '".$_POST['password']."' WHERE nidn = '".$_GET['nidn']."'");

          if($update){
             echo "<script>alert('Add Success!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=datadosen.php\">";
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