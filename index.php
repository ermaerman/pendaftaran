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
        <li><a href="index.php?content=pengumuman">Pengumuman</a></li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">Jurusan
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?content=multimedia">Multimedia</a></li>
            <li><a href="index.php?content=tkj">Teknik Komputer dan Jaringan</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">Tentang Kami
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?content=visi-misi">Visi & Misi</a></li>
            <li><a href="index.php?content=profil-sekolah">Profil Sekolah</a></li>
            <li><a href="index.php?content=galeri">Galeri</a></li>
            <li><a href="index.php?content=fasilitas">Fasilitas</a></li>
          </ul>
        </li>
        <li><a href="index.php?content=hubungi-kami">FAQ & Helpdesk</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?content=alur-pendaftaran">Alur Pendaftaran</a></li>

<?php

    error_reporting(0);

    include 'config/koneksi.php';

    $edit    = "SELECT * FROM tbl_informasi_tanggal";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

function CekPendaftaran($todays_date,$start_date,$end_date)
{
   $start_date = strtotime($start_date); 
   $end_date = strtotime($end_date);
   $todays_date = strtotime($todays_date); 
   if ($todays_date >= $start_date && $todays_date <= $end_date) 
   { 
      return 0;//BUKA
   } 
   else 
   { 
      if($todays_date < $start_date)
      {
         return 1; //BELUM
      }
      else
      {
         return 2; //LEWAT
      }
   }
}
//Cara memanggilnya
$DATE_NOW=date("Y-m-d");
$START_DATE=$data['tgl_awal_daftar'];
$END_DATE=$data['tgl_akhir_daftar'];
$CekStatus=CekPendaftaran($DATE_NOW,$START_DATE,$END_DATE);
//Sekarang $CekStatus memiliki nilai array yang terdiri dari 3 (0 atau 1 atau 2)
if($CekStatus==1) //1 BELUM BUKA
{
   
} 
elseif($CekStatus==2) //2 SUDAH TUTUP
{
   
} 
elseif($CekStatus==0) //0 SEDANG BUKA
{
   echo '<li><a href="index.php?content=pendaftaran"><span class="glyphicon glyphicon-log-in"></span> Pendaftaran</a></li>';
}
?>
        
        <li class="dropdown">
          <a class="dropdown-toggle" href="" data-toggle="dropdown">Lainnya
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?content=cek-proses">Cek Proses</a></li>
            <li><a href="index.php?content=konfirmasi-pembayaran">Konfirmasi Pembayaran</a></li>
            <li><a href="index.php?content=biaya">Informasi Biaya</a></li>
            <li><a href="index.php?content=tanggal">Informasi Tanggal</a></li>
            <li><a href="index.php?content=upload-file">Upload Kekurangan File</a></li>
          </ul>
        </li>
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
              else if ($content=='profil-sekolah')
                include 'profil-sekolah.php';
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
              else if ($content=='kode_daftar')
                include 'kode_daftar.php';
              else if ($content=='cek-proses')
                include 'cek-proses.php';
              else if ($content=='pengumuman')
                include 'pengumuman.php';
              else if ($content=='ukuran-baju')
                include 'ukuran-baju.php';
              else if ($content=='biaya')
                include 'biaya.php';
              else if ($content=='fasilitas')
                include 'fasilitas.php';
              else if ($content=='lihat-berita')
                include 'lihat-berita.php';
              else if ($content=='upload-file')
                include 'upload-file.php';
              else if ($content=='tgl-ujian')
                include 'tgl-ujian.php';
              else if ($content=='alur-dua')
                include 'alur-dua.php';
              else if ($content=='alur-tiga')
                include 'alur-tiga.php';
              else if ($content=='alur-empat')
                include 'alur-empat.php';
              else if ($content=='alur-lima')
                include 'alur-lima.php';
              else if ($content=='alur-enam')
                include 'alur-enam.php';
              else if ($content=='alur-tujuh')
                include 'alur-tujuh.php';
              else if ($content=='alur-delapan')
                include 'alur-delapan.php';
              else if ($content=='alur-sembilan')
                include 'alur-sembilan.php';
              else if ($content=='alur-sepuluh')
                include 'alur-sepuluh.php';
              else if ($content=='tanggal')
                include 'tanggal.php';
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
