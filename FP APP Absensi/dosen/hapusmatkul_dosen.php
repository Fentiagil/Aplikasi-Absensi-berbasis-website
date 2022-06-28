<?php 

  include ('../config/koneksi.php'); 
  
  if(isset($_GET['kode_matkul'])){
          $delete = mysqli_query ($koneksi, "DELETE FROM mata_kuliah WHERE kode_matkul = '".$_GET['kode_matkul']."'"); 
 
          if($delete){
            echo "<script>alert('Delete Success!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=matkuldosen.php\">";
          }else{
            echo "gagal";
          }
        }

    
  ?>