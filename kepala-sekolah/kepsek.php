<?php session_start();

  if(isset($_SESSION['username'])){
      
      include "../config/koneksi.php";


     if(isset($_GET['content'])) $content = $_GET['content']; 
        else $content = "home-kepala-sekolah";
?>

<!doctype>
<html lang='ind'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../assets/css/styles-menu-admin.css">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/bootstrap.min.js"></script>
   <script src="../assets/js/script.js"></script>
   <title>SMK Mandalahayu II Bekasi</title>
</head>

<script>
  $(document).ready(function() 
  {
    $('[data-toggle="tooltip"]').tooltip();   
  });
</script>

<body>
    <div class="col-md-2 colmenu" style="padding:0;height:3150;">
      <div class="col-md-12" style="padding:10px;"><center><img src="../gambar/manda.png" alt="" height="100px" width="130px"></center>
        <p align="center"><b>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</b></p>
      </div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"><center><i>Anda Login Sebagai <br>Kepala Sekolah</i></center></div>
        <?php 
          include "menu.php"; 
        ?>  
      </div>

        <?php
            if ($content=='home-kepala-sekolah')
              include 'home-kepala-sekolah.php';
            else if ($content=='data-calon-murid')
              include 'data-calon-murid.php';
            else if ($content=='data-request-kelas')
              include 'data-request-kelas.php';
            else if ($content=='laporan-data-murid')
              include 'laporan-data-murid.php';
            else if ($content=='laporan-keuangan')
              include 'laporan-keuangan.php';
            else if ($content=='edit-calon-murid')
              include 'edit-calon-murid.php';
            else if ($content=='edit-status-request-kelas')
              include 'edit-status-request-kelas.php';
            else if ($content=='edit-murid')
              include 'edit-murid.php';
            else if ($content=='laporan-keuangan-detail')
              include 'laporan-keuangan-detail.php';
           ?>
  
    <div class="col-md-12" style="background:black;padding:8px;color:#fff;">
      <footer class="container-fluid text-center">
      <div class="container-fluid text-center">
        <p>2018 © Kerja Praktek | Erma Noviana | 2015230014 | <a href="http://www.unsada.ac.id/" data-toggle="tooltip" data-placement="top" title="Universitas Darma Persada">Universitas Darma Persada</a>. All Rights Reserved.</p>
        <p>Powered by: <a data-toggle="tooltip" data-placement="right" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a></p>
      </div>
      </footer>
   </div>

</body>
<html>

<?php
  }else{
    header("location:../admin/index.php");
  }
?>