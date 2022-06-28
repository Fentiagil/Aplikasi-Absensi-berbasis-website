<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
  <title>Data Dosen</title>
  <link rel="stylesheet" type="text/css" href="../asset/styledsn.css">
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
        <h3>Data Dosen</h3>
        <hr><br>

        <a class="add-btn" href="<?php echo "tambahdosen.php"; ?>">Tambah Data</a><br><br>
        <table class="table6">
                <tr bgcolor="99FF66">
                  <th>No</th>
                  <th>NIDN</th>
                  <th>NAMA</th>
                  <th>EMAIL</th>
                  <th>FOTO</th>
                  <th>AKSI</th>
                </tr>
                <?php
                include "../config/koneksi.php";
                  $data = mysqli_query($koneksi, "SELECT * FROM dosen");
                  $no = 0;

                 while($hasil = mysqli_fetch_array($data)){
                  $no++;
                    ?>
                  
                  <tr>
                    <td><?php echo $no  ?></td>
                    <td><?php echo $hasil['nidn'];  ?></td>
                    <td><?php echo $hasil['nama_dosen'];  ?></td>
                    <td><?php echo $hasil['email_dosen'];  ?></td>
                    <td><?php echo "<img class='imgtable' src='../img/$hasil[foto]' width='70' height='90' />";?></td> 
                    <td>
                      <a href="<?php echo "editdsn.php?nidn=".$hasil['nidn']; ?>" class="edit-btn"> Update</a>
                      |
                       <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapusdsn.php?nidn=<?php echo $hasil['nidn']; ?>' }" class="hapus-btn"  ><span class="glyphicon glyphicon-remove">Delete</a>
                    </td>
                  </tr>
                 
        <?php 
    } 
    ?>
</table>
<br/><br/>
</div>
      </div>
    </div>
  </div>
</div>
</body>
</html>