<?php 
session_start();
if(empty($_SESSION['nisn'])){
    echo"<script>
    alert('Maaf Anda Belum Login'); 
    window.location.assign('../index.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa- aplikasi pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
   
<h3> Aplikasi pembayaran SPP</h3>
<div class="alert alert-info">
    Anda Login Sebagai Siswa  <b><?=  $_SESSION['nama']?></b> Aplikasi Pembayaran SPP
</div>
    <a href="siswa.php" class="btn btn-primary">Siswa</a>
    <a href="siswa.php?url=logout" class="btn btn-primary">Logout</a>


    <div class="card mt-2">
        <div class="card-body">
            <!-- ini isi web kita -->
             <?php
             $file = @$_GET['url'];
             if(empty($file)){
                echo"<h4>Selamat Datang Di Halaman Siswa</h4>";
                echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran 
                siswa/siswi di sekolah";

                echo"<hr>";
                include'history-pembayaran.php';
                } else {
                include $file.'.php';
             }
             ?>
        </div>
    </div>
</div>

    
<script src="../js/boostrap.bundle.min.js"></script>
</body>
</html>