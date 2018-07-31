<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_pembayaran = $_GET['id_pembayaran'];
  $kode_daftar = $_GET['kode_daftar'];

  $edit    = "SELECT tbl_pembayaran.kode_daftar, tbl_pembayaran.id_pembayaran, tbl_pembayaran.validasi_daftar,  tbl_pembayaran.bukti_daftar, tbl_data_calon_murid.nama FROM tbl_pembayaran, tbl_data_calon_murid WHERE tbl_pembayaran.id_pembayaran = '$id_pembayaran' AND tbl_data_calon_murid.kode_daftar = tbl_pembayaran.kode_daftar";
  $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
  $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="tu.php?content=transaksi-pendaftaran"></a> Validasi Transaksi Pendaftaran (Validasi)</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Validasi</b> Transaksi Pendaftaran </h3>
    <hr>
    <br>
        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
        <input type="hidden" name="kode_daftar" value="<?php echo $data['kode_daftar']?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Validasi</div>
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

                <tr>
                  <th><font size="2px">Bukti Pembayaran</font></th>
                  <td><i><font size="2px"><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['bukti_daftar'] ?>" target="_blank"><?php echo $data['bukti_daftar'] ?></a></font></i></td>
                </tr>
                <tr>
                  <th><font size="2px">Status</font></th>
                  <td><font size="2px"><i><?php if ($data['validasi_daftar']==0) echo "Belum dikonfirmasi <i class='fa fa-times fa-fw'></i>"; else echo "Sudah dikonfirmasi <i class='fa fa-check fa-fw'></i>"; ?></td></i></font>
                </tr>
              </table>
              <p align="right">
                <?php
                  if ($data['validasi_daftar']==1) {
                    //echo "<button type='submit' formaction='../config/batal-konfirmasi-bayar-pendaftaran.php' class='btn btn-danger'>Batal Konfirmasi</button>";
                  } else {
                    echo "<button type='submit' formaction='../config/update-konfirmasi-bayar-pendaftaran.php' class='btn btn-primary'>Konfirmasi</button>";
                  }
                ?>
                
               
                <a href="tu.php?content=transaksi-pendaftaran"><button type="button" class="btn btn-default">Kembali</button></a></p>
            </div>
          </div>
      </form>
  </div>
</div>
