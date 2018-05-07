<?php

  error_reporting(0);

?>

<br>
<br>
<br>
<br>

<div class="container">
 	<ol class="breadcrumb">
        <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / <a href="#">Lainnya</a> / Upload File </li>
    </ol>
    	<h3><b>&nbsp;&nbsp;Upload</b> Kekurangan File</h3>
      	<hr>
         <div class="alert alert-danger">
          <strong>Info!</strong><i> Bagi anda yang belum meng-upload semua file, silahkan upload melalui form dibawah ini sesuai file yang kurang.</i>
          </div>
      
  <br>
  <br>
  <br>
  <br>  
  <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
    
        <input type="hidden" name="id_pembayaran">
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Kode Daftar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-3">
                <input onkeypress="return hanyaAngka(event)" class="form-control" name="kode_daftar" type="text" placeholder="Masukkan kode daftar anda" required>
            </div>
            <button class="btn btn-danger" type="submit" value="pencarian" name="cek">Cek Kekurangan File</button>
        </div>
        <br>
        <br>
        <br>
        <?php
    
    include 'config/koneksi.php';

    if(isset($_POST['cek'])){
      $kode_daftar = $_POST['kode_daftar'];
    }

    $query = mysqli_query($konek,"SELECT * FROM tbl_data_calon_murid WHERE kode_daftar = '$kode_daftar'")or die(mysqli_error($konek));
      if(mysqli_num_rows($query) == 0){

      }
      else{
        echo "<center>";
        $data = mysqli_fetch_array($query);
          
          //belum dikonfirmasi admin
          if ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload semua syarat</b></i><br>";
              echo "<i><b>Silahkan mengupload scan semua syarat.</b></i>";
          }
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']!='0') {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda sudah mengupload:</b></i><br>"; 
              echo "<i><b>1. NISN</b></i><br>";
              echo "<hr>";
              echo "<i><b>Anda belum mengupload:</b></i><br>"; 
              echo "<i><b>1. ijazah</b></i><br>";
              echo "<i><b>2. Kartu Keluarga</b></i><br>";
              echo "<i><b>3. Akte Kelahiran</b></i><br>";
              echo "<i><b>4. Foto</b></i><br>";
              echo "<i><b>Silahkan mengupload scan perihal tersebut anda</b></i>";
          }      
            /*elseif ($data['syarat_kk']=='') {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload syarat Kartu Keluarga</b></i><br>";
              echo "<i><b>Silahkan mengupload scan Kartu Keluarga anda</b></i>";
          } 
          elseif ($data['syarat_akte']=='') {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload syarat Akte Kelahiran</b></i><br>";
              echo "<i><b>Silahkan mengupload scan Akte Kelahiran anda</b></i>";
          } 
          elseif ($data['syarat_foto']=='') {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload syarat Foto 3 x 4</b></i><br>";
              echo "<i><b>Silahkan mengupload scan Foto 3 x 4 anda</b></i>";
          } 
          */
      }
?>
        <hr>
        <i>&nbsp;&nbsp;&nbsp;&nbsp;Pilih button sesuai kekurangan file yang ingin diupload :</i>
        <br>
        <br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-danger">NISN</button>
        <button type="button" class="btn btn-danger">Ijazah</button>
        <button type="button" class="btn btn-danger">Kartu Keluarga</button>
        <button type="button" class="btn btn-danger">Akte Kelahiran</button>
        <button type="button" class="btn btn-danger">Foto 3x4</button>
        </p>
</div>
</div>
  
