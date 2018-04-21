<?php session_start();

  if(isset($_SESSION['username']))

    {
    
    include "../config/koneksi.php";


    if(isset($_GET['content'])) $content = $_GET['content']; 
      else $content = "home-admin";
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
   <script src="../tinymce/js/tinymce/tinymce.min.js"></script>
   <script>tinymce.init({selector:"textarea"});</script>
   <title>SMK Mandalahayu II Bekasi</title>
</head>

<script>
  $(document).ready(function() 
  {
    $('[data-toggle="tooltip"]').tooltip();   
  });
</script>

<body>
   <div class="col-md-2 colmenu" style="padding:0;height:1200px">
      <div class="col-md-12" style="padding:10px;">
        <center><img src="../gambar/manda.png" alt="" height="100px" width="130px"></center>
          <p align="center"><b>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</b></p>
      </div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;">
        <center><i>Anda Login Sebagai Admin</i></center></div>
          <?php 
            include "menu.php"; 
          ?>  
      </div>

         <?php
            if ($content=='home-admin')
              include 'home-admin.php';
            else if ($content=='berita')
              include 'berita.php';
            else if ($content=='galeri')
              include 'galeri.php';
            else if ($content=='manajemen-user')
              include 'manajemen-user.php';
            else if ($content=='edit-user')
              include 'edit-user.php';
            else if ($content=='faq')
              include 'faq.php';
            else if ($content=='edit-faq')
              include 'edit-faq.php';
            else if ($content=='edit-galeri')
              include 'edit-galeri.php';
            else if ($content=='edit-berita')
              include 'edit-berita.php';
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
}
else
  {
    header("location:index.php");
  }
?>