<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <title>E-Absensi</title>
    <link rel="stylesheet" href="../asset/styles.css">
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
      <div class="card">
        <?php
                include "../config/koneksi.php";
                  $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                  $no = 0;

                 while($hasil = mysqli_fetch_array($data)){
                
                    ?>
        <center><h1>Selamat Datang <?php echo $hasil['nama'];  ?></h1></center>
         </div>

                    <div class="card2">
                    <center>
                      <?php echo "<img class='imgtable' src='../img/$hasil[foto]' width='70' height='90' />";?>
                      <br>
                    </center>
                  </div>
                   <center>
                  <div class="card-category">
                      <table>
                       
                        <tr>NPM : </tr>
                        <tr><?php echo $hasil['npm'];  ?></tr><br>

                        <tr>Email : </tr>
                        <tr><?php echo $hasil['email'];  ?></tr><br>
                     
                      </table>
                   
                <?php 
                } 
                ?>
                 <center>
                  </div>
    </div>
  </body>
</html>