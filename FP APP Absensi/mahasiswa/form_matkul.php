<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <title>Daftar Matakuliah</title>
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
                <div>
                  <h3>Daftar Mata Kuliah</h3></div>

    <form method="POST" action="">
    <table class="tabel5">
      <tr>
        <?php
                include "../config/koneksi.php";
                
                  $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

                 while($hasil = mysqli_fetch_array($data)){
        ?>
        <td><input name="id" hidden readonly="readonly"></td>
      </tr>
      <tr>
          <td>NPM</td>
          <td>:</td>
          <td><input value="<?php echo $hasil['npm'];  ?>" name="npm" readonly="readonly" ></td>
                 <?php 
                } 
                ?>
      </tr>
      <tr>
          <td>Kode Matkul</td>
          <td>:</td>
          <td><select id="kode_matkul" name="kode_matkul">
          <option value=" ">-</option>
          <option value="FIK001">FIK001</option>
          <option value="FIK002">FIK002</option>
          </td>
      </tr>
      <tr>
          <td>Mata Kuliah</td>
          <td>:</td>
          <td><input type="text" name="matkul" required="required"></td>
      </tr>

      
</table>
          <button class="simpan" type="submit" name="simpan" value="Simpan">Simpan</button></a>
</form>

<?php
          include '../config/koneksi.php';
          if(isset($_POST['simpan'])){
          $insert = mysqli_query($koneksi, "INSERT INTO daftar_matkul VALUES
                    ('".$_POST['id']."', '".$_POST['npm']."','".$_POST['kode_matkul']."','".$_POST['matkul']."')");
          if($insert){
            echo "<script>alert('Add Success!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=daftarmatkul.php\">";
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