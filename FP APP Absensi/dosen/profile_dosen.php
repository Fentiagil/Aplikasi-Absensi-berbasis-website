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
        <?php
                include "../config/koneksi.php";
                  $data = mysqli_query($koneksi, "SELECT * FROM dosen");
                  $no = 0;

                 while($hasil = mysqli_fetch_array($data)){
                
                    ?>
        <center><h1>Selamat Datang <?php echo $hasil['nama_dosen'];  ?></h1></center>
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
                       
                        <tr>NIDN : </tr>
                        <tr><?php echo $hasil['nidn'];  ?></tr><br>

                        <tr>Email Dosen : </tr>
                        <tr><?php echo $hasil['email_dosen'];  ?></tr><br>
                        
                        <tr>Email Login : </tr>
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