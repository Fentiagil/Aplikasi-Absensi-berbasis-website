<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <title>E-Absensi</title>
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
        <div class="formbody">
                <div>
                  <h3>Tambah Matkul</h3></div>

    <form method="POST" action="">
    <table class="tabel5">
    
      <tr>
          <td>Kode Matkul</td>
          <td>:</td>
          <td><input type="text" name="kode_matkul" required="required" style="width: 120px;"></td>
      </tr>
      <tr>
          <td>Nama Matkul</td>
          <td>:</td>
          <td><input type="text" name="nama_matkul" required="required"></td>
      </tr>
      <tr>
          <td>Nama Dosen</td>
          <td>:</td>
           <?php
                include "../config/koneksi.php";
                  $data = mysqli_query($koneksi, "SELECT * FROM dosen");

                 while($hasil = mysqli_fetch_array($data)){
        ?>
          <td><input value="<?php echo $hasil['nama_dosen'];  ?>" name="nama_dosen" readonly="readonly" ></td>
           
      </tr>
      <tr>
      <td>NIDN</td>
          <td>:</td>
          <td><input value="<?php echo $hasil['nidn'];  ?>" name="nidn"  readonly="readonly" ></td>
          <?php 
                } 
                ?>
      </tr>
      <tr>
          <td>Jadwal Hari Matkul</td>
          <td>:</td>
          <td><select id="jadwal" name="jadwal">
          <option value=" ">-</option>
          <option value="senin">Senin</option>
          <option value="selasa">Selasa</option>
          <option value="rabu">Rabu</option>
          <option value="kamis">Kamis</option>
          </td>
      </tr>
      <tr>
          <td>Jam Mulai</td>
          <td>:</td>
          <td><input type="time" name="jam_masuk" required="required"></td>
      </tr>
      <tr>
          <td>Jam Selesai</td>
          <td>:</td>
          <td><input type="time" name="jam_selesai" required="required"></td>
      </tr>
      <tr>
          <td>Password Matkul</td>
          <td>:</td>
          <td><input type="password" name="password_matkul" required="required" style="width: 120px;"></td>
      </tr>  
     
     
</table>
        <button class="btn-add" type="submit" name="simpan" value="Simpan">Simpan</button></a> 
</form>

<?php
          include '../config/koneksi.php';
          if(isset($_POST['simpan'])){
          $insert = mysqli_query($koneksi, "INSERT INTO mata_kuliah VALUES
                    ('".$_POST['kode_matkul']."', '".$_POST['nama_matkul']."', '".$_POST['nama_dosen']."', '".$_POST['nidn']."','".$_POST['jadwal']."', '".$_POST['jam_masuk']."', '".$_POST['jam_selesai']."','".$_POST['password_matkul']."')");
          if($insert){
            echo "<script>alert('Add Success!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=matkuldosen.php\">";
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
