<?php
  //menyambungkan koneksi
  include 'config/koneksi.php';

  if(isset($_GET['content'])) $content = $_GET['content']; 
      else $content = "index";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMK Mandalahayu II Bekasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <script src="bootstrap/jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<style type="text/css">
      footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
</style>

<script>
  $(document).ready(function() 
  {
    $('[data-toggle="tooltip"]').tooltip();   
  });
</script>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      </button>
      <a class="navbar-brand" href="index.php">SMK Mandalahayu II Bekasi</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php?content=berita">Berita</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">Jurusan
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?content=multimedia">Multimedia</a></li>
            <li><a href="index.php?content=tkj">Teknik Komputer & Jaringan</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">Tentang Kami
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?content=visi-misi">Visi & Misi</a></li>
            <li><a href="index.php?content=sejarah-sekolah">Sejarah Sekolah</a></li>
            <li><a href="index.php?content=galeri">Galeri</a></li>
          </ul>
        </li>
        <li><a href="index.php?content=hubungi-kami">Hubungi Kami</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?content=alur-pendaftaran">Alur Pendaftaran</a></li>
        <li><a href="index.php?content=konfirmasi-pembayaran">Konfirmasi Pembayaran</a></li>
        <li><a href="index.php?content=pendaftaran"><span class="glyphicon glyphicon-log-in"></span> Pendaftaran</a></li>
      </ul>
    </div>
  </div>
</nav>


<?php
    if ($content=='index')
    include 'carousel.php';
?>

<div class="container">
      <div>
         <?php
            if ($content=='berita')
              include 'berita.php';
            else if ($content=='multimedia')
              include 'multimedia.php';
            else if ($content=='tkj')
              include 'tkj.php';
            else if ($content=='visi-misi')
              include 'visi-misi.php';
            else if ($content=='sejarah-sekolah')
              include 'sejarah-sekolah.php';
            else if ($content=='galeri')
              include 'galeri.php';
            else if ($content=='hubungi-kami')
              include 'hubungi-kami.php';
            else if ($content=='alur-pendaftaran')
              include 'alur-pendaftaran.php';
            else if ($content=='konfirmasi-pembayaran')
              include 'konfirmasi-pembayaran.php';
            else if ($content=='pendaftaran')
              include 'pendaftaran.php';
         ?>
      </div>
</div>


<br>
<br>
<br>


<footer class="container-fluid text-center">
  <div class="container-fluid text-center">
    <p>2018 © Kerja Praktek | Erma Noviana | 2015230014 | <a href="http://www.unsada.ac.id/" data-toggle="tooltip" data-placement="top" title="Universitas Darma Persada">Universitas Darma Persada</a>. All Rights Reserved.</p>
    <p>Powered by: <a data-toggle="tooltip" data-placement="right" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a></p>
  </div>
</footer>

</body>
</html>
