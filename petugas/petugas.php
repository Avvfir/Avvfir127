<?php 
session_start();
if(empty($_SESSION['id_petugas'])){
    echo"<script>
    alert('Maaf Anda Belum Login'); 
    window.location.assign('../index2.php');
    </script>";
}
if($_SESSION['level']!='petugas'){
    echo"<script>
    alert('Maaf Anda Bukan Sesi petugas'); 
    window.location.assign('../index2.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas - aplikasi pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
   
<h3> Aplikasi pembayaran SPP</h3>
<div class="alert alert-info">
    Anda Login Sebagai Petugas <b><?= $_SESSION ['nama_petugas']?></b> Aplikasi Pembayaran SPP
</div>
    <a href="petugas.php" class="btn btn-primary">Petugas</a>
    <a href="petugas.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
    <a href="petugas.php?url=logout" class="btn btn-primary">Logout</a>


    <div class="card mt-2">
        <div class="card-body">
            <!-- ini isi web kita -->
             <?php
             $file = @$_GET['url'];
             if(empty($file)){
                echo"<h4>Selamat Datang Di Halaman Petugas</h4>";
                echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran 
                siswa/siswi di sekolah";

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