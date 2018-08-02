<br>
<br>
<br>
<br>

<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $edit    = "SELECT * FROM tbl_informasi_tanggal";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

   $edit2    = "SELECT * FROM tbl_tanggal_ujian";
  $hasil2   = mysqli_query($konek, $edit2)or die(mysql_error());
  $data2    = mysqli_fetch_array($hasil2);

?>

<div class="container">
    <ol class="breadcrumb"> <table class="table">
                                        <tr>
                                        <th><br><p align="center"></th>
                                        <td><br><p align="center"><img src="gambar/manda.png" height="100"><br><font size="5px"><b>YAYASAN MANDALAHAYU</b></font><br>
                                                <font size="6px"><b>SMK MANDALAHAYU II BEKASI</b></font><br>Jl. Pengasinan Tengah No.99, Pengasinan, Rawalumbu, Kota Bks, Jawa Barat 17115</p></td>
                                        </tr>
                                      </table>
  </ol>
  <ol class="breadcrumb">
    <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / Informasi Tanggal</li>
  </ol>
  <h3><b>&nbsp;&nbsp;Informasi</b> Tanggal</h3>
  <hr>
   <div class="panel panel-primary">
      <div class="panel-heading">Informasi Tanggal - Tanggal Penting</div>
      <div class="panel-body">
      <table class="table table-bordered">
        <tr>
          <th><font size="2px">Tanggal Pendaftaran Dibuka</font></th>
          <td width="800"><i><font size="2px"><?php echo $data['tgl_awal_daftar'];?></font></i></td>
        </tr>
         <tr>
          <th><font size="2px">Tanggal Pendaftaran Ditutup</font></th>
          <td width="800"><i><font size="2px"><?php echo $data['tgl_akhir_daftar'];?></font></i></td>
        </tr>
        <tr>
          <th><font size="2px">Tanggal Ujian Tes Masuk</font></th>
          <td width="800"><i><font size="2px"><?php echo $data2['tanggal'];?></font></i></td>
        </tr>
         <tr>
          <th><font size="2px">Tanggal Awal Masuk Sekolah</font></th>
          <td width="800"><i><font size="2px"><?php echo $data['tgl_awal_masuk'];?></font></i></td>
        </tr>
      </table>
    </div>
</div>
</div>