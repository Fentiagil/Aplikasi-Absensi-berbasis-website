<?php 

  include ('../config/koneksi.php'); 
  
  if(isset($_GET['id'])){
          $delete = mysqli_query ($koneksi, "DELETE FROM daftar_matkul WHERE id = '".$_GET['id']."'"); 
 
          if($delete){
            echo "<script>alert('Delete Success!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=daftarmatkul.php\">";
          }else{
            echo "gagal";
          }
        }

    
  ?>