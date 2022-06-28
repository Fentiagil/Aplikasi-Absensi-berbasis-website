<?php 
 session_start();
include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../asset/stylelogin.css"rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>LOGIN</title>
</head>

<body style="width: 100%">

    <div class="container-fluid py-1" style="background-color: #E8E8E8;">
        <div class="container">
            <div class="row">
                    <img src="../img/logo.png" alt="" class="img-fluid" style="width: 150px; margin-top: 15px">
                <div class="col-xs-11">
                    <h1>E-Absensi</h1>
                    <h3 class="h3_ps">UPN “Veteran” Jawa Timur</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="h2_ps">LOGIN DOSEN</h2></div>
                <form method="POST">
                <div class="col-lg-12 text-center ">
                    <input type="text" name="nidn" class="form_login" placeholder="NIDN .." required="required">
                </div><br>
                <div class="col-lg-12 text-center ">
                     <input type="password" class="form_login" name="password" placeholder="Password" id="myPassword" ><br/></div><br>
                <div class="col-lg-12 text-center ">
                    <input type="submit" class="tombol_login" value="LOGIN" name="proseslog">
                    <br/></div>
                <center>
                    <a class="link" href="../index.php">kembali</a>
                </center>
                </form>
                <?php
                if(isset($_POST['proseslog'])){
                    $sql = mysqli_query($koneksi, "SELECT * FROM dosen WHERE nidn = '$_POST[nidn]' AND password = '$_POST[password]'");

                    $cek = mysqli_num_rows($sql);
                    if ($cek > 0) {
                        $_SESSION['nidn'] = $_POST['nidn'];
                        echo "<meta http-equiv=refresh content=0;URL='dosen.php'>";
                    }else{
                        echo "<p>Username atau Password Salah!</p>";
                        echo "<meta http-equiv=refresh content=2;URL='logindsn.php'>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #E8E8E8;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="h4_ps">INFORMASI</h3>
            </div>

    <div class="row align-items-center">
        <div class="col-4">
             <div class="scroll">
        
                Pengumuman No. 129/PL.22/KP/2022<br><br>

                Diumumkan kepada seluruh Mahasiswa dalam lingkungan Universitas Pembangunan Nasional "Veteran" Jawa Timur bahwa:<br>
                <ol>
                <li>Mulai tanggal 1 Juni 2022 absensi kehadiran harus menggunakan daftar hadir online melalui website E-Absensi yang tersedia sebagai bukti kehadiran dalam mengikuti mata kuliah.</li><br>

                <li>Untuk mengantisipasi permasalahan yang mungkin timbul dari daftar hadir online ini, maka untuk sementara masih diharapkan juga mengisi daftar hadir manual seperti biasa.</li><br>

                <li>Absensi kehadiran harus dilakukan pada jam mata kuliah tersebut, jika tidak mengisi pada jam tersebut maka mahasiswa dinyatakan tidak hadir.</li><br>

                <li>Absensi kehadiran dengan menggunakan daftar hadir online hanya dapat dilakukan ketika absensi tersebut dibuka oleh dosen.</li><br>
                </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>