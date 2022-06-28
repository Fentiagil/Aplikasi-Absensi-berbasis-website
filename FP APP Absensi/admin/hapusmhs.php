<?php 

  include ('../config/koneksi.php'); 
  
  if(isset($_GET['npm'])){
          $delete = mysqli_query ($koneksi, "DELETE FROM mahasiswa WHERE npm = '".$_GET['npm']."'"); 
 
          if($delete){
            echo "<script>alert('Delete Success!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=datamahasiswa.php\">";
          }else{
            echo "gagal";
          }
        }

    
  ?>