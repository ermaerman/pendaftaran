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
                <input onkeypress="return hanyaAngka(event)" class="form-control" name="kode_daftar" type="text" placeholder="Masukkan kode daftar anda">
            </div>
            <button class="btn btn-danger" type="submit" value="pencarian" name="cek">Cek Kekurangan File</button>
        </div>
      </form>
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
          
          //1 1 1 1 1
          if ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda sudah mengupload semua syarat, terimakasih.</b></i><br>";
          }
          //1 1 1 1 0
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload syarat foto.</b></i><br>";
          }
          //1 1 1 0 1
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload syarat akte kelahiran.</b></i><br>";
          }
          //1 1 1 0 0
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload syarat akte kelahiran dan foto.</b></i><br>";
          }
          //1 1 0 1 1
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload syarat kartu keluarga.</b></i><br>";
          }
          //1 1 0 1 0
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload syarat kartu keluarga dan foto.</b></i><br>";
          }
          //1 1 0 0 1
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload syarat kartu keluarga dan akte kelahiran.</b></i><br>";
          }
          //1 1 0 0 0
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload syarat kartu keluarga, akte kelahiran dan foto.</b></i><br>";
          }
           //1 0 1 1 1
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload ijazah.</b></i><br>";
          }
          //1 0 1 1 0
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload ijazah dan foto.</b></i><br>";
          }
          //1 0 1 0 1
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload ijazah dan akte kelahiran.</b></i><br>";
          }
          //1 0 1 0 0
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload ijazah, akte kelahiran dan foto.</b></i><br>";
          }
          //1 0 0 1 1
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload ijazah dan kartu keluarga.</b></i><br>";
          }
          //1 0 0 1 0
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload ijazah, kartu keluarga dan foto.</b></i><br>";
          }
          //1 0 0 0 1
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload ijazah, kartu keluarga dan akte.</b></i><br>";
          }
          //1 0 0 0 0
          elseif ($data['syarat_nisn']!='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload ijazah, kartu keluarga, akte dan foto.</b></i><br>";
          }
          //0 1 1 1 1
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN.</b></i><br>";
          }
          //0 1 1 1 0
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN dan foto.</b></i><br>";
          }
          //0 1 1 0 1
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN dan akte.</b></i><br>";
          }
          //0 1 1 0 0
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN, akte dan foto.</b></i><br>";
          }
          //0 1 0 1 1
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN dan kartu keluarga.</b></i><br>";
          }
          //0 1 0 1 0
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN, kartu keluarga dan foto.</b></i><br>";
          }
          //0 1 0 0 1
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN, kartu keluarga dan akte.</b></i><br>";
          }
          //0 1 0 0 0
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']!='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN, kartu keluarga, akte dan foto.</b></i><br>";
          }
          //0 0 1 1 1 
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN dan ijazah.</b></i><br>";
          }
           //0 0 1 1 0
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN, ijazah dan foto.</b></i><br>";
          }
          //0 0 1 0 1
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN, ijazah dan akte kelahiran.</b></i><br>";
          }
          //0 0 1 0 0
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']!='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN, ijazah, akte kelahiran dan foto.</b></i><br>";
          }
          //0 0 0 1 1
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN, ijazah dan kartu keluarga.</b></i><br>";
          }
          //0 0 0 1 0
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']!='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN, ijazah, kartu keluarga dan foto.</b></i><br>";
          }
           //0 0 0 0 1
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']!='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload NISN, ijazah, kartu keluarga dan akte.</b></i><br>";
          }
          //0 0 0 0 0
          elseif ($data['syarat_nisn']=='0' AND $data['syarat_ijazah']=='0' AND $data['syarat_kk']=='0' AND $data['syarat_akte']=='0' AND $data['syarat_foto']=='0')   {
              echo "<br>";
              echo "<h2>Cek Kekurangan File</h2><hr>";
              echo "<i><b>Anda belum mengupload semua syarat.</b></i><br>";
          }
      }
?>
        <hr>
        <i>&nbsp;&nbsp;&nbsp;&nbsp;Pilih button sesuai kekurangan file yang ingin diupload :</i>
        <br>
        <br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;
        <button data-toggle="modal" data-target="#myModal1" type="button" class="btn btn-danger">NISN</button>
        <button data-toggle="modal" data-target="#myModal2" type="button" class="btn btn-danger">Ijazah</button>
        <button data-toggle="modal" data-target="#myModal3" type="button" class="btn btn-danger">Kartu Keluarga</button>
        <button data-toggle="modal" data-target="#myModal4" type="button" class="btn btn-danger">Akte Kelahiran</button>
        <button data-toggle="modal" data-target="#myModal5" type="button" class="btn btn-danger">Foto 3x4</button>
        </p>

        <!-- Modal NISN -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#db4e66";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p align="center"><img src="gambar/manda.png" alt="" height="100px" width="130px"></p>
            <p align="center"><font size="2px"><i>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</i></font></p>
            <h4 class="modal-title" align="center"><b>Upload kekurangan NISN</b></h4>
          </div>
          <br>
          <div class="modal-body">
            <form action="config/add-nisn.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label class="col-sm-2"></label>
                <label class="col-sm-3">Kode Daftar</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="kode_daftar" placeholder="Kode Daftar" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2"></label>
                <label class="col-sm-3">Upload NISN</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-4">
                      <input type="file" name="fileToUploadNisn" id="fileToUploadNisn">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-6" align="right">
                      <button type="submit" class="btn btn-danger">Upload</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
</div>

        <!-- Modal Ijazah -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#db4e66";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p align="center"><img src="gambar/manda.png" alt="" height="100px" width="130px"></p>
            <p align="center"><font size="2px"><i>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</i></font></p>
            <h4 class="modal-title" align="center"><b>Upload kekurangan Ijazah</b></h4>
          </div>
          <br>
          <div class="modal-body">
            <form action="../config/add-ijazah.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="col-sm-2"></label>
                <label class="col-sm-3">Kode Daftar</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="kode_daftar" placeholder="Kode Daftar" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2"></label>
                <label class="col-sm-3">Upload Ijazah</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-4">
                      <input type="file" name="fileToUploadIjazah" id="fileToUploadIjazah">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-6" align="right">
                      <button class="btn btn-danger">Upload</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
</div>

        <!-- Modal Kartu Keluarga -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#db4e66";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p align="center"><img src="gambar/manda.png" alt="" height="100px" width="130px"></p>
            <p align="center"><font size="2px"><i>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</i></font></p>
            <h4 class="modal-title" align="center"><b>Upload kekurangan Kartu Keluarga</b></h4>
          </div>
          <br>
          <div class="modal-body">
            <form action="../config/add-kk.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="col-sm-2"></label>
                <label class="col-sm-3">Kode Daftar</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="kode_daftar" placeholder="Kode Daftar" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2"></label>
                <label class="col-sm-3">Upload Kartu Keluarga</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-4">
                      <input type="file" name="fileToUploadKk" id="fileToUploadKk">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-6" align="right">
                      <button class="btn btn-danger">Upload</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
</div>


        <!-- Modal Akte Kelahiran -->
<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#db4e66";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p align="center"><img src="gambar/manda.png" alt="" height="100px" width="130px"></p>
            <p align="center"><font size="2px"><i>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</i></font></p>
            <h4 class="modal-title" align="center"><b>Upload kekurangan Akte Kelahiran</b></h4>
          </div>
          <br>
          <div class="modal-body">
            <form action="../config/add-akte.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="col-sm-2"></label>
                <label class="col-sm-3">Kode Daftar</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="kode_daftar" placeholder="Kode Daftar" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2"></label>
                <label class="col-sm-3">Upload Akte Kelahiran</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-4">
                      <input type="file" name="fileToUploadAkte" id="fileToUploadAkte">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-6" align="right">
                      <button class="btn btn-danger">Upload</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
</div>
        <!-- Modal Foto -->
<div id="myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#db4e66";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p align="center"><img src="gambar/manda.png" alt="" height="100px" width="130px"></p>
            <p align="center"><font size="2px"><i>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</i></font></p>
            <h4 class="modal-title" align="center"><b>Upload kekurangan Foto</b></h4>
          </div>
          <br>
          <div class="modal-body">
            <form action="../config/add-foto.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="col-sm-2"></label>
                <label class="col-sm-3">Kode Daftar</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="kode_daftar" placeholder="Kode Daftar" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2"></label>
                <label class="col-sm-3">Upload Foto</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-4">
                      <input type="file" name="fileToUploadFoto" id="fileToUploadFoto">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-6" align="right">
                      <button class="btn btn-danger">Upload</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
</div>


</div>


  
