
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>E-Absensi</title>
   <link rel="stylesheet" href="../asset/styleadd.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
    <div class="img"><a href="mahasiswa.php">
    </div></a></div></div>
    <div class="formbody">
                <div>
                  <h3>Menu Izin</h3></div>
	
		<form action="form_izin.php" method="post">
				
		<table class="tabel5">
      <tr>
          <td>NPM</td>
          <td>:</td>
          <?php
                include "../config/koneksi.php";
                  $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

                 while($hasil = mysqli_fetch_array($data)){
        ?>
          <td><input value="<?php echo $hasil['npm'];  ?>" name="npm" readonly="readonly" ></td>
                 <?php 
                } 
                ?>
      </tr>
       <tr>
          <td>Tanggal</td>
          <td>:</td>
          <td><input value="<?php echo date('Y/m/j'); ?>" name="tanggal" readonly="readonly"></td>
  

      </tr>
      <tr>
          <td>Jam</td>
          <td>:</td>
          <td><input value="<?php echo date('H:i'); ?>" name="jam" readonly="readonly" ></td>
  

      </tr>
      <tr>
          <td>Alasan</td>
          <td>:</td>
          <td>
          	<select id="alasan" name="alasan">
			    <option value="Sakit">Sakit</option>
			    <option value="Luar Kota">Luar Kota</option>
			    <option value="Lainnya">Lainnya</option>
			  	</select>
					</td>

      </tr>
      <tr>
          <td>Comment</td>
          <td>:</td>
          <td><input type="area"  name="komen" required="required" style="width: 120px;"></td>
      </tr>
      <tr>
          <td>Bukti</td>
          <td>:</td>
          <td><input type="file" name="bukti" required="required" style="width: 120px;"></td>
      </tr>  
</table>
          <button class="btn-add" type="submit" name="simpan" value="SimpanIzin">Simpan</button></a> 
</form>

</body>
</html>