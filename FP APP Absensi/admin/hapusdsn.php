<?php 

  include ('../config/koneksi.php'); 
  
  if(isset($_GET['nidn'])){
          $delete = mysqli_query ($koneksi, "DELETE FROM dosen WHERE nidn = '".$_GET['nidn']."'"); 
 
          if($delete){
            echo "<script>alert('Delete Success!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=datadosen.php\">";
          }else{
            echo "gagal";
          }
        }

    
  ?>