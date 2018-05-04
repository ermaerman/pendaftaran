<?php

  error_reporting(0);

?>

<br>
<br>
<br>
<br>

<div class="container">
  <ol class="breadcrumb">
    <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / <a href="#">Lainnya</a> / Cek Proses</li>
  </ol>
  <h3><b>&nbsp;&nbsp;Cek</b> Proses</h3>
  <hr>
  
  <div class="alert alert-info">
  <strong>Info!</strong> <i>Silahkan cek proses dengan memasukkan kode daftar yang anda dapatkan saat mendaftar.</i>
  </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  <form class="form-horizontal" action="" method="POST">
  <div class="form-group">
    <label class="col-sm-2"></label>
    <label class="col-sm-2">Kode Daftar</label>
    <label class="col-sm-1">:</label>
  <div class="col-sm-5">
    <input class="form-control" name="kode_daftar" type="text" placeholder="Masukkan kode daftar anda" required>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4"></label>
      <div class="col-sm-6" align="right">
          <button type="submit" class="btn btn-primary" value="pencarian" name="cek">Cek Proses</button>
      </div>
  </div>
</div>
  
  <br>
  <br>
  <br>

  <?php
    
    include 'config/koneksi.php';

    if(isset($_POST['cek'])){
      $kode_daftar = $_POST['kode_daftar'];
    }

    $query = mysqli_query($konek,"SELECT * FROM tbl_pembayaran WHERE kode_daftar = '$kode_daftar'")or die(mysqli_error($konek));
      if(mysqli_num_rows($query) == 0){

      }
      else{
        echo "<center>";
        $data = mysqli_fetch_array($query);
          
          //belum dikonfirmasi admin
          if ($data['b_daftar']==0 AND $data['validasi_daftar']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda belum membayar biaya pendaftaran.</i><br>";
              echo "<i>Silahkan membayar biaya pendaftaran anda, jika sudah membayar pendaftaran silahkan klik <a data-toggle='tooltip' data-placement='top' title='Konfirmasi Pembayaran' href='index.php?content=konfirmasi-pembayaran'>disini</a> untuk konfirmasi pembayaran.<br> Atau klik <a data-toggle='tooltip' data-placement='bottom' title='Informasi Biaya' href='index.php?content=biaya'>disini</a> untuk melihat informasi biaya.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda sudah membayar biaya pendaftaran tetapi pembayaran belum dikonfirmasi oleh tata usaha kami.</i><br>";
              echo "<i>Silahkan tunggu beberapa saat lagi sampai dikonfirmasi oleh tatausaha kami. Kemudian cek proses kembali.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda sudah membayar biaya pendaftaran dan pembayaran telah dikonfirmasi oleh tata usaha kami.</i><br>";
              echo "<i>Selanjutnya, silahkan lihat <a data-toggle='tooltip' data-placement='bottom' title='Lihat Tanggal Ujian' href='index.php?content=tgl-ujian'>disini</a> untuk informasi selanjutnya.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['b_pangkal_lunas']==1 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil']==0 AND $data['validasi_pangkal_cicil']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda sudah membayar biaya uang pangkal lunas tetapi pembayaran belum dikonfirmasi oleh tata usaha.</i><br>";
              echo "<i>Silahkan tunggu beberapa saat lagi.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['b_pangkal_lunas']==1 AND $data['validasi_pangkal_lunas']==1 AND $data['b_pangkal_cicil']==0 AND $data['validasi_pangkal_cicil']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda sudah membayar biaya uang pangkal lunas dan pembayaran sudah dikonfirmasi oleh tata usaha.</i><br>";
              echo "<i>Terimakasih karena anda telah melunasi biaya administrasi dan uang pangkal. Untuk informasi selanjutnya silahkan lihat <a href='#'>disini</a>.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['b_pangkal_lunas']==1 AND $data['validasi_pangkal_lunas']==1 AND $data['b_pangkal_cicil']==1 AND $data['validasi_pangkal_cicil']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda sudah membayar biaya cicilan uang pangkal tetapi pembayaran belum dikonfirmasi oleh tata usaha.</i><br>";
              echo "<i>Silahkan tunggu beberapa saat lagi.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['b_pangkal_lunas']==1 AND $data['validasi_pangkal_lunas']==1 AND $data['b_pangkal_cicil']==1 AND $data['validasi_pangkal_cicil']==1) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda sudah membayar biaya cicilan uang pangkal dan pembayaran sudah dikonfirmasi oleh tata usaha.</i><br>";
              echo "<i>Silahkan tunggu beberapa saat lagi.</i>";
          }
      }
?>