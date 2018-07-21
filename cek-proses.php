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
          
          if ($data['b_daftar']==0 AND $data['validasi_daftar']==0 AND $data['hasil']==0 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==0 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo '<div class="col-md-4"></div>';
              echo '<div class="col-md-4">';
              echo '<div class="thumbnail">';
              echo '<div class="caption" align="left">
                    <table>
                    <tr><td width="500"<a href="index.php?content=konfirmasi-pembayaran">Pendaftaran</a></td><td><span class="glyphicon glyphicon-remove"><span class="glyphicon glyphicon-remove"></td></tr>
                    </table></div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4"></div>';
              echo "<br>";
              echo '<div class="col-md-12">';
              echo "<i>Anda belum membayar biaya pendaftaran.</i><br>";
              echo "<i>Silahkan membayar biaya pendaftaran anda, jika sudah membayar pendaftaran silahkan klik button dibawah ini untuk konfirmasi pembayaran.<br> Atau klik <a data-toggle='tooltip' data-placement='bottom' title='Informasi Biaya' href='index.php?content=biaya'>disini</a> untuk melihat informasi biaya.</i><br><br>";
                echo "<button data-toggle='modal' data-target='#myModaldaftar' type='button' class='btn btn-danger'>Konfirmasi Pembayaran</button>";
              echo "</div>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==0 AND $data['hasil']==0 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==0 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo '<div class="col-md-4"></div>';
              echo '<div class="col-md-4">';
              echo '<div class="thumbnail">';
              echo '<div class="caption" align="left">
                    <table>
                    <tr><td width="500">Pendaftaran</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-remove"></td></tr>
                    </table></div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4"></div>';
              echo "<br>";
              echo '<div class="col-md-12">';
              echo "<i>Anda sudah membayar biaya pendaftaran tetapi pembayaran belum dikonfirmasi oleh tata usaha kami.</i><br>";
              echo "<i>Silahkan tunggu beberapa saat lagi sampai dikonfirmasi oleh tatausaha kami. Kemudian cek proses kembali.</i>";
              echo "</div>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==0 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==0 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo '<div class="col-md-4"></div>';
              echo '<div class="col-md-4">';
              echo '<div class="thumbnail">';
              echo '<div class="caption" align="left">
                    <table>
                    <tr><td width="500">Pendaftaran</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Ujian Tes Masuk</td><td><span class="glyphicon glyphicon-remove"</td></tr>
                    </table></div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4"></div>';
              echo "<br>";
              echo '<div class="col-md-12">';
              echo "<i>Anda sudah membayar biaya pendaftaran dan pembayaran telah dikonfirmasi oleh tata usaha kami.</i><br>";
              echo "<i>Selanjutnya, silahkan lihat <a data-toggle='tooltip' data-placement='bottom' title='Lihat Tanggal Ujian' href='index.php?content=tgl-ujian&&kode_daftar=$kode_daftar'>disini</a> untuk informasi selanjutnya.</i>";
              echo "</div>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==0 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
               echo '<div class="col-md-4"></div>';
              echo '<div class="col-md-4">';
              echo '<div class="thumbnail">';
              echo '<div class="caption" align="left">
                    <table>
                    <tr><td width="500">Pendaftaran</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Ujian Tes Masuk</td><td><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500"><a href="index.php?content=konfirmasi-pembayaran">Uang Pangkal Langsung Lunas</a></td><td><span class="glyphicon glyphicon-remove"><span class="glyphicon glyphicon-remove"></td></tr>
                    <tr><td width="500"><a href="index.php?content=konfirmasi-pembayaran">Uang Pangkal Cicilan 1</a></td><td><span class="glyphicon glyphicon-remove"><span class="glyphicon glyphicon-remove"></td></tr>
                    <tr><td width="500"<a href="index.php?content=konfirmasi-pembayaran">Uang Pangkal Cicilan 2</a></td><td><span class="glyphicon glyphicon-remove"><span class="glyphicon glyphicon-remove"></td></tr>
                    <tr><td width="500"><a href="index.php?content=konfirmasi-pembayaran">Uang Pangkal Cicilan 3</a></td><td><span class="glyphicon glyphicon-remove"><span class="glyphicon glyphicon-remove"></td></tr>
                    </table></div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4"></div>';
              echo "<br>";
              echo '<div class="col-md-12">';
              echo "<i>Selamat, anda telah lulus dalam mengikuti ujian tes masuk SMK Mandalahayu II Bekasi.</i><br>";
              echo "<i>Selanjutnya, silahkan bayar dan konfirmasi uang pangkal anda. Klik pada button dibawah ini untuk konfirmasi pembayaran.</i>";
                echo "<button data-toggle='modal' data-target='#myModaldaftar' type='button' class='btn btn-danger'>Konfirmasi Pembayaran</button>";
              echo "</div>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==1 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==0 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
               echo '<div class="col-md-4"></div>';
              echo '<div class="col-md-4">';
              echo '<div class="thumbnail">';
              echo '<div class="caption" align="left">
                    <table>
                    <tr><td width="500">Pendaftaran</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Lunas</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-remove"></td></tr>
                    </table></div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4"></div>';
              echo "<br>";
              echo '<div class="col-md-12">';
              echo "<i>Anda sudah membayar biaya uang pangkal lunas tetapi pembayaran belum dikonfirmasi oleh tata usaha kami.</i><br>";
              echo "<i>Silahkan tunggu beberapa saat lagi sampai dikonfirmasi oleh tatausaha kami. Kemudian cek proses kembali.</i>";
              echo "</div>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==1 AND $data['validasi_pangkal_lunas']==1 AND $data['b_pangkal_cicil1']==0 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
                echo '<div class="col-md-4"></div>';
              echo '<div class="col-md-4">';
              echo '<div class="thumbnail">';
              echo '<div class="caption" align="left">
                    <table>
                    <tr><td width="500">Pendaftaran</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Lunas</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    </table></div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4"></div>';
              echo "<br>";
              echo '<div class="col-md-12">';
              echo "<i>Terimakasih, Anda sudah membayar biaya uang pangkal lunas dan pembayaran sudah dikonfirmasi oleh tata usaha kami.</i><br>";
              echo "</div>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==1 AND $data['validasi_pangkal_cicil1']==0 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
               echo '<div class="col-md-4"></div>';
              echo '<div class="col-md-4">';
              echo '<div class="thumbnail">';
              echo '<div class="caption" align="left">
                    <table>
                    <tr><td width="500">Pendaftaran</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 1</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-remove"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 2</td><td><span class="glyphicon glyphicon-remove"><span class="glyphicon glyphicon-remove"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 3</td><td><span class="glyphicon glyphicon-remove"><span class="glyphicon glyphicon-remove"></td></tr>
                    </table></div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4"></div>';
              echo "<br>";
              echo '<div class="col-md-12">';
              echo "<i>Anda telah membayar biaya uang pangkal cicilan pertama tetapi pembayaran belum dikonfirmasi oleh tatausaha kami.</i><br>";
              echo "<i>Silahkan tunggu beberapa saat lagi sampai dikonfirmasi oleh tatausaha kami. Kemudian cek proses kembali.</i>";
              echo "</div>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==1 AND $data['validasi_pangkal_cicil1']==1 AND $data['b_pangkal_cicil2']==0 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
               echo '<div class="col-md-4"></div>';
              echo '<div class="col-md-4">';
              echo '<div class="thumbnail">';
              echo '<div class="caption" align="left">
                    <table>
                    <tr><td width="500">Pendaftaran</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 1</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500"><a href="#">Uang Pangkal Cicilan 2</a></td><td><span class="glyphicon glyphicon-remove"><span class="glyphicon glyphicon-remove"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 3</td><td><span class="glyphicon glyphicon-remove"><span class="glyphicon glyphicon-remove"></td></tr>
                    </table></div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4"></div>';
              echo "<br>";
              echo '<div class="col-md-12">';
              echo "<i>Anda telah membayar biaya uang pangkal pertama dan  pembayaran telah dikonfirmasi oleh tatausaha kami.</i><br>";
              echo "<i>Silahkan membayar pembayaran uang pangkal kedua, klik button dibawah ini untuk konfirmasi pembayaran.</i><br><br>";
              echo "<button data-toggle='modal' data-target='#myModalcicil2' type='button' class='btn btn-danger'>Konfirmasi Pembayaran</button>";
              echo "</div>";
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==1 AND $data['validasi_pangkal_cicil1']==1 AND $data['b_pangkal_cicil2']==1 AND $data['validasi_pangkal_cicil2']==0 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
              echo '<div class="col-md-4"></div>';
              echo '<div class="col-md-4">';
              echo '<div class="thumbnail">';
              echo '<div class="caption" align="left">
                    <table>
                    <tr><td width="500">Pendaftaran</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 1</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 2</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-remove"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 3</td><td><span class="glyphicon glyphicon-remove"><span class="glyphicon glyphicon-remove"></td></tr>
                    </table></div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4"></div>';
              echo "<br>";
              echo '<div class="col-md-12">';
              echo "<i>Anda telah membayar biaya uang pangkal cicilan kedua tetapi pembayaran belum dikonfirmasi oleh tatausaha kami.</i><br>";
               echo "<i>Silahkan tunggu beberapa saat lagi sampai dikonfirmasi oleh tatausaha kami. Kemudian cek proses kembali.</i>";
              echo '</div>';
              
          }
          elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==1 AND $data['validasi_pangkal_cicil1']==1 AND $data['b_pangkal_cicil2']==1 AND $data['validasi_pangkal_cicil2']==1 AND $data['b_pangkal_cicil3']==0 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
               echo '<div class="col-md-4"></div>';
              echo '<div class="col-md-4">';
              echo '<div class="thumbnail">';
              echo '<div class="caption" align="left">
                    <table>
                    <tr><td width="500">Pendaftaran</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 1</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 2</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500"><a href="#">Uang Pangkal Cicilan 3</a></td><td><span class="glyphicon glyphicon-remove"><span class="glyphicon glyphicon-remove"></td></tr>
                    </table></div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4"></div>';
              echo "<br>";
              echo '<div class="col-md-12">';
              echo "<i>Anda telah membayar biaya uang pangkal cicilan kedua dan pembayaran telah dikonfirmasi oleh tatausaha kami.</i><br>";
               echo "<i>Silahkan membayar pembayaran uang pangkal ketiga, klik <a data-toggle='tooltip' data-placement='bottom' title='Konfirmasi Pembayaran Uang Pangkal Cicil Ketiga' href='index.php?content=konfirmasi-pembayaran'>disini</a> untuk konfirmasi pembayaran.</i><br><br>";
                 echo "<button data-toggle='modal' data-target='#myModalcicil3' type='button' class='btn btn-danger'>Konfirmasi Pembayaran</button>";
               echo "</div>";
          }
           elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==1 AND $data['validasi_pangkal_cicil1']==1 AND $data['b_pangkal_cicil2']==1 AND $data['validasi_pangkal_cicil2']==1 AND $data['b_pangkal_cicil3']==1 AND $data['validasi_pangkal_cicil3']==0) {
              echo "<h2>Cek Proses</h2><hr>";
               echo '<div class="col-md-4"></div>';
              echo '<div class="col-md-4">';
              echo '<div class="thumbnail">';
              echo '<div class="caption" align="left">
                    <table>
                    <tr><td width="500">Pendaftaran</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 1</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 2</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 3</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-remove"></td></tr>
                    </table></div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4"></div>';
              echo "<br>";
              echo '<div class="col-md-12">';
              echo "<i>Anda telah membayar biaya uang pangkal cicilan ketiga tetapi pembayaran belum dikonfirmasi oleh tatausaha kami.</i><br>";
               echo "<i>Silahkan tunggu beberapa saat lagi sampai dikonfirmasi oleh tatausaha kami. Kemudian cek proses kembali.</i>";
               echo "</div>";
          }
           elseif ($data['b_daftar']==1 AND $data['validasi_daftar']==1 AND $data['hasil']==1 AND $data['b_pangkal_lunas']==0 AND $data['validasi_pangkal_lunas']==0 AND $data['b_pangkal_cicil1']==1 AND $data['validasi_pangkal_cicil1']==1 AND $data['b_pangkal_cicil2']==1 AND $data['validasi_pangkal_cicil2']==1 AND $data['b_pangkal_cicil3']==1 AND $data['validasi_pangkal_cicil3']==1) {
              echo "<h2>Cek Proses</h2><hr>";
               echo '<div class="col-md-4"></div>';
              echo '<div class="col-md-4">';
              echo '<div class="thumbnail">';
              echo '<div class="caption" align="left">
                    <table>
                    <tr><td width="500">Pendaftaran</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 1</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 2</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    <tr><td width="500">Uang Pangkal Cicilan 3</td><td><span class="glyphicon glyphicon-ok"><span class="glyphicon glyphicon-ok"></td></tr>
                    </table></div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4"></div>';
              echo "<br>";
              echo '<div class="col-md-12">';
              echo "<i>Terimakasih, Anda telah membayar biaya uang pangkal cicilan ketiga dan pembayaran telah dikonfirmasi oleh tatausaha kami. <br>Pembayaran uang pangkal telah dilakukan sebanyak 3 kali cicilan dan telah lunas.</i><br>";
              echo "</div>";
          }
      }
?>
</form></div>

<!-- Modal daftar -->
<div id="myModaldaftar" class="modal fade" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#db4e66";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p align="center"><img src="gambar/manda.png" alt="" height="100px" width="130px"></p>
            <p align="center"><font size="2px"><i>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</i></font></p>
            <h4 class="modal-title" align="center"><b>Konfirmasi Pembayaran</b></h4>
          </div>
          <br>
          <div class="modal-body">
             <form class="form-horizontal" action="config/add-konfirmasi-bayar.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id_pembayaran">
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-4">Kode Daftar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input onkeypress="return hanyaAngka(event)" class="form-control" name="kode_daftar" value="<?php echo $data['kode_daftar']; ?>" type="text" placeholder="Masukkan kode daftar anda" required>
            </div>
        </div>
        <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-4">Pembayaran</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="b_daftar" name="b_daftar" required>
                      <option>-- Pilih Pembayaran --</option>
                      <option value="pendaftaran">Pendaftaran</option>
                    </select>
                  </div>
                </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-4">Bukti Pembayaran</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input type="file" name="fileToUpload" id="fileToUpload" required>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="control-label col-sm-5"></label>
            <div class="col-sm-6" align="right">
                <button class="btn btn-danger" type="submit" name="submit" value="Konfirmasi Pembayaran">Konfirmasi Pembayaran</button>
            </div>
        </div>
</div>
</form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
</div>

<!-- Modal cicil 2 -->
<div id="myModalcicil2" class="modal fade" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#db4e66";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p align="center"><img src="gambar/manda.png" alt="" height="100px" width="130px"></p>
            <p align="center"><font size="2px"><i>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</i></font></p>
            <h4 class="modal-title" align="center"><b>Konfirmasi Pembayaran</b></h4>
          </div>
          <br>
          <div class="modal-body">
             <form class="form-horizontal" action="config/add-konfirmasi-bayar.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id_pembayaran">
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-4">Kode Daftar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input onkeypress="return hanyaAngka(event)" class="form-control" name="kode_daftar" value="<?php echo $data['kode_daftar']; ?>" type="text" placeholder="Masukkan kode daftar anda" required>
            </div>
        </div>
        <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-4">Pembayaran</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="b_daftar" name="b_daftar" required>
                      <option>-- Pilih Pembayaran --</option>
                      <option value="cicilkedua">Uang Pangkal Cicilan Kedua</option>
                    </select>
                  </div>
                </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-4">Bukti Pembayaran</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input type="file" name="fileToUpload" id="fileToUpload" required>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="control-label col-sm-5"></label>
            <div class="col-sm-6" align="right">
                <button class="btn btn-danger" type="submit" name="submit" value="Konfirmasi Pembayaran">Konfirmasi Pembayaran</button>
            </div>
        </div>
</div>
</form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
</div>


