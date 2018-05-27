<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_pembayaran = $_GET['id_pembayaran'];

    $edit    = "SELECT tbl_pembayaran.kode_daftar, tbl_pembayaran.id_pembayaran, tbl_pembayaran.validasi_pangkal_cicil1, tbl_pembayaran.bukti_pangkal_cicil1, tbl_pembayaran.validasi_pangkal_cicil2, tbl_pembayaran.bukti_pangkal_cicil2, tbl_pembayaran.validasi_pangkal_cicil3, tbl_pembayaran.bukti_pangkal_cicil3, tbl_data_calon_murid.nama FROM tbl_pembayaran, tbl_data_calon_murid WHERE tbl_pembayaran.kode_daftar = '$kode_daftar'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="tu.php?content=transaksi-cicilan"></a> Edit Transaksi Cicilan (Validasi)</li>
    </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit Transaksi</b> Cicilan (Validasi)</h3>
    <hr><br>
    <form class="form-horizontal" action="../config/edit-konfirmasi-bayar-cicilansatu.php" method="POST">
    <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
    <input type="hidden" name="kode_daftar" value="<?php echo $data['kode_daftar'];?>">
      <div class="panel-group">
      <div class="panel panel-primary">
        <div class="panel-heading">Validasi Cicilan Pertama</div>
        <div class="panel-body">
          <table class="table table-bordered">
            <tr>
              <th><font size="2px">Kode Daftar</font></th>
              <td width="800"><i><font size="2px"><?php echo $data['kode_daftar'];?></font></i></td>
            </tr>
            <tr>
              <tr>
              <th><font size="2px">Nama Lengkap</font></th>
              <td width="800"><i><font size="2px"><?php echo $data['nama'];?></font></i></td>
            </tr>
              <th><font size="2px">Bukti Pembayaran</font></th>
              <td><i><font size="2px"><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['bukti_pangkal_cicil1'] ?>" target="_blank"><?php echo $data['bukti_pangkal_cicil1'] ?></a></font></i></td>
            </tr>
            <tr>
              <th><font size="2px">Status</font></th>
              <td><font size="2px"><i><?php echo $data['validasi_pangkal_cicil1']; ?></i></font></td>
            </tr>
          </table>
          <p><i><font size=2px>&nbsp;&nbsp;Keterangan: <br>&nbsp;&nbsp;Jika status = 0 maka pembayaran cicilan pertama <b>belum</b> dikonfirmasi / divalidasi.<br>&nbsp;&nbsp;Jika status = 1 maka pembayaran cicilan pertama <b>sudah</b> dikonfirmasi / divalidasi.<br>&nbsp;&nbsp;Mohon lihat bukti pembayaran dengan cermat dan teliti.</font></i></p>
          <p align="right">
          <button type="submit" class="btn btn-primary">Konfirmasi</button>
          <a href="../config/batal-konfirmasi-bayar-cicil1.php"><button type="button" class="btn btn-danger">Batal Konfirmasi</button></a>
          <a href="tu.php?content=transaksi-cicilan"><button type="button" class="btn btn-default">Kembali</button></a></p>
        </div>
      </div>
  </form>

  <hr>
  <form class="form-horizontal" action="../config/edit-konfirmasi-bayar-cicilankedua.php" method="POST">
  <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
  <input type="hidden" name="kode_daftar" value="<?php echo $data['kode_daftar'];?>">
    <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Validasi Cicilan Kedua</div>
      <div class="panel-body">
        <table class="table table-bordered">
          <tr>
            <th><font size="2px">Kode Daftar</font></th>
            <td width="800"><i><font size="2px"><?php echo $data['kode_daftar'];?></font></i></td>
          </tr>
          <tr>
            <tr>
            <th><font size="2px">Nama Lengkap</font></th>
            <td width="800"><i><font size="2px"><?php echo $data['nama'];?></font></i></td>
          </tr>
            <th><font size="2px">Bukti Pembayaran</font></th>
            <td><i><font size="2px"><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['bukti_pangkal_cicil2'] ?>" target="_blank"><?php echo $data['bukti_pangkal_cicil2'] ?></a></font></i></td>
          </tr>
          <tr>
            <th><font size="2px">Status</font></th>
            <td><font size="2px"><i><?php echo $data['validasi_pangkal_cicil1']; ?></i></font></td>
          </tr>
        </table>
        <p><i><font size=2px>&nbsp;&nbsp;Keterangan: <br>&nbsp;&nbsp;Jika status = 0 maka pembayaran cicilan kedua <b>belum</b> dikonfirmasi / divalidasi.<br>&nbsp;&nbsp;Jika status = 1 maka pembayaran cicilan kedua <b>sudah</b> dikonfirmasi / divalidasi.<br>&nbsp;&nbsp;Mohon lihat bukti pembayaran dengan cermat dan teliti.</font></i></p>
        <p align="right">
        <button type="submit" class="btn btn-primary">Konfirmasi</button>
        <a href="../config/batal-konfirmasi-bayar-cicil2.php"><button type="button" class="btn btn-danger">Batal Konfirmasi</button></a>
        <a href="tu.php?content=transaksi-cicilan"><button type="button" class="btn btn-default">Kembali</button></a></p>
      </div>
    </div>
</form>

<hr>
<form class="form-horizontal" action="../config/edit-konfirmasi-bayar-cicilanketiga.php" method="POST">
<input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
<input type="hidden" name="kode_daftar" value="<?php echo $data['kode_daftar'];?>">
  <div class="panel-group">
  <div class="panel panel-primary">
    <div class="panel-heading">Validasi Cicilan Ketiga</div>
    <div class="panel-body">
      <table class="table table-bordered">
        <tr>
          <th><font size="2px">Kode Daftar</font></th>
          <td width="800"><i><font size="2px"><?php echo $data['kode_daftar'];?></font></i></td>
        </tr>
        <tr>
          <tr>
          <th><font size="2px">Nama Lengkap</font></th>
          <td width="800"><i><font size="2px"><?php echo $data['nama'];?></font></i></td>
        </tr>
          <th><font size="2px">Bukti Pembayaran</font></th>
          <td><i><font size="2px"><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['bukti_pangkal_cicil3'] ?>" target="_blank"><?php echo $data['bukti_pangkal_cicil3'] ?></a></font></i></td>
        </tr>
        <tr>
          <th><font size="2px">Status</font></th>
          <td><font size="2px"><i><?php echo $data['validasi_pangkal_cicil3']; ?></i></font></td>
        </tr>
      </table>
      <p><i><font size=2px>&nbsp;&nbsp;Keterangan: <br>&nbsp;&nbsp;Jika status = 0 maka pembayaran cicilan ketiga <b>belum</b> dikonfirmasi / divalidasi.<br>&nbsp;&nbsp;Jika status = 1 maka pembayaran cicilan ketiga <b>sudah</b> dikonfirmasi / divalidasi.<br>&nbsp;&nbsp;Mohon lihat bukti pembayaran dengan cermat dan teliti.</font></i></p>
      <p align="right">
      <button type="submit" class="btn btn-primary">Konfirmasi</button>
      <a href="../config/batal-konfirmasi-bayar-cicil3.php"><button type="button" class="btn btn-danger">Batal Konfirmasi</button></a>
      <a href="tu.php?content=transaksi-cicilan"><button type="button" class="btn btn-default">Kembali</button></a></p>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>
