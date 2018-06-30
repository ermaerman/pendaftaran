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

    $query = mysqli_query($konek,"SELECT tbl_pengumuman.kode_daftar, tbl_pengumuman.hasil, tbl_pembayaran.kode_daftar, tbl_pembayaran.b_daftar, tbl_pembayaran.validasi_daftar, tbl_pembayaran.b_pangkal_lunas, tbl_pembayaran.validasi_pangkal_lunas, tbl_pembayaran.b_pangkal_cicil1, tbl_pembayaran.validasi_pangkal_cicil1, tbl_pembayaran.b_pangkal_cicil2, tbl_pembayaran.validasi_pangkal_cicil2, tbl_pembayaran.b_pangkal_cicil3, tbl_pembayaran.validasi_pangkal_cicil3 FROM tbl_pembayaran, tbl_pengumuman WHERE tbl_pembayaran.kode_daftar = '$kode_daftar' AND tbl_pembayaran.kode_daftar = tbl_pengumuman.kode_daftar ")or die(mysqli_error($konek));
      if(mysqli_num_rows($query) == 0){

      }
      else{
        echo "<center>";
        $data = mysqli_fetch_array($query);
          
          //belum dikonfirmasi admin
          if ($data['b_daftar']==0 AND $data['validasi_daftar']==0 AND $data['hasil']==0 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==0 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda belum membayar biaya pendaftaran.</i><br>";
              echo "<i>Silahkan membayar biaya pendaftaran anda, jika sudah membayar pendaftaran silahkan klik <a data-toggle='tooltip' data-placement='top' title='Konfirmasi Pembayaran' href='index.php?content=konfirmasi-pembayaran'>disini</a> untuk konfirmasi pembayaran.<br> Atau klik <a data-toggle='tooltip' data-placement='bottom' title='Informasi Biaya' href='index.php?content=biaya'>disini</a> untuk melihat informasi biaya.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==0 AND $data['hasil']==0 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==0 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda sudah membayar biaya pendaftaran tetapi pembayaran belum dikonfirmasi oleh tata usaha kami.</i><br>";
              echo "<i>Silahkan tunggu beberapa saat lagi sampai dikonfirmasi oleh tatausaha kami. Kemudian cek proses kembali.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==0 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==0 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda sudah membayar biaya pendaftaran dan pembayaran telah dikonfirmasi oleh tata usaha kami.</i><br>";
              echo "<i>Selanjutnya, silahkan lihat <a data-toggle='tooltip' data-placement='bottom' title='Lihat Tanggal Ujian' href='index.php?content=tgl-ujian&&kode_daftar=$kode_daftar'>disini</a> untuk informasi selanjutnya.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==0 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Selamat, anda telah lulus dalam mengikuti ujian tes masuk SMK Mandalahayu II Bekasi.</i><br>";
              echo "<i>Selanjutnya, silahkan bayar dan <a href='index.php?content=konfirmasi-pembayaran'>konfirmasi pembayaran</a> uang pangkal anda.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==1 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==0 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda sudah membayar biaya uang pangkal lunas tetapi pembayaran belum dikonfirmasi oleh tata usaha kami.</i><br>";
              echo "<i>Silahkan tunggu beberapa saat lagi sampai dikonfirmasi oleh tatausaha kami. Kemudian cek proses kembali.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==1 AND $data['validasi_pangkal_lunas']==1 AND $data['b_pangkal_cicil1']==0 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Terimakasih, Anda sudah membayar biaya uang pangkal lunas dan pembayaran sudah dikonfirmasi oleh tata usaha kami.</i><br>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==1 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda telah membayar biaya uang pangkal cicilan pertama tetapi pembayaran belum dikonfirmasi oleh tatausaha kami.</i><br>";
              echo "<i>Silahkan tunggu beberapa saat lagi sampai dikonfirmasi oleh tatausaha kami. Kemudian cek proses kembali.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==1 AND $data['validasi_pangkal_cicil1']==1 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda telah membayar biaya uang pangkal pertama dan  pembayaran telah dikonfirmasi oleh tatausaha kami.</i><br>";
              echo "<i>Silahkan membayar pembayaran uang pangkal kedua, klik <a data-toggle='tooltip' data-placement='bottom' title='Konfirmasi Pembayaran Uang Pangkal Cicil Kedua' href='index.php?content=konfirmasi-pembayaran'>disini</a> untuk konfirmasi pembayaran.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==1 AND $data['validasi_pangkal_cicil1']==1 AND $data['b_pangkal_cicil2']==1 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda telah membayar biaya uang pangkal cicilan kedua tetapi pembayaran belum dikonfirmasi oleh tatausaha kami.</i><br>";
               echo "<i>Silahkan tunggu beberapa saat lagi sampai dikonfirmasi oleh tatausaha kami. Kemudian cek proses kembali.</i>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==1 AND $data['validasi_pangkal_cicil1']==1 AND $data['b_pangkal_cicil2']==1 AND $data['validasi_pangkal_cicil2']==1 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda telah membayar biaya uang pangkal cicilan kedua dan pembayaran telah dikonfirmasi oleh tatausaha kami.</i><br>";
               echo "<i>Silahkan membayar pembayaran uang pangkal ketiga, klik <a data-toggle='tooltip' data-placement='bottom' title='Konfirmasi Pembayaran Uang Pangkal Cicil Ketiga' href='index.php?content=konfirmasi-pembayaran'>disini</a> untuk konfirmasi pembayaran.</i>";
          }
           elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==1 AND $data['validasi_pangkal_cicil1']==1 AND $data['b_pangkal_cicil2']==1 AND $data['validasi_pangkal_cicil2']==1 AND $data['b_pangkal_cicil3']==1 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Anda telah membayar biaya uang pangkal cicilan ketiga tetapi pembayaran belum dikonfirmasi oleh tatausaha kami.</i><br>";
               echo "<i>Silahkan tunggu beberapa saat lagi sampai dikonfirmasi oleh tatausaha kami. Kemudian cek proses kembali.</i>";
          }
           elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==1 AND $data['validasi_pangkal_cicil1']==1 AND $data['b_pangkal_cicil2']==1 AND $data['validasi_pangkal_cicil2']==1 AND $data['b_pangkal_cicil3']==1 AND $data['validasi_pangkal_cicil3']==1) {
              echo "<h2>Cek Proses</h2><hr>";
              echo "<i>Terimakasih, Anda telah membayar biaya uang pangkal cicilan ketiga dan pembayaran telah dikonfirmasi oleh tatausaha kami. <br>Pembayaran uang pangkal telah dilakukan sebanyak 3 kali cicilan dan telah lunas.</i><br>";
          }
      }
?>