<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_pembayaran = $_GET['id_pembayaran'];

  $edit    = "SELECT tbl_pembayaran.kode_daftar, tbl_pembayaran.id_pembayaran, tbl_pembayaran.validasi_daftar_ulang1,  tbl_pembayaran.bukti_daftar_ulang1, tbl_pembayaran.validasi_daftar_ulang2,  tbl_pembayaran.bukti_daftar_ulang2, tbl_data_calon_murid.nama FROM tbl_pembayaran, tbl_data_calon_murid WHERE tbl_pembayaran.id_pembayaran = '$id_pembayaran' AND tbl_data_calon_murid.kode_daftar = tbl_pembayaran.kode_daftar";
  $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
  $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / Laporan Keuangan</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Laporan</b> Keuangan </h3>
    <hr>
    <br>
        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Administrasi Pendaftaran</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. </font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=transaksi-pendaftaran" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form>

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Uang Pangkal Cicilan Pertama</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. </font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=transaksi-cicilan" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form> 

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Uang Pangkal Cicilan Kedua</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. </font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=transaksi-cicilan" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form>     

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Uang Pangkal Cicilan Ketiga</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. </font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=transaksi-cicilan" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form> 

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Uang Pangkal Lunas</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. </font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=transaksi-lunas" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form> 

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Daftar Ulang Naik Kelas 11</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. </font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=daftar-ulang" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form> 

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Daftar Ulang Naik Kelas 12</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. </font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=daftar-ulang" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form> 

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Keseluruhan</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. </font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="#" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form> 
      <hr>
       <p align="right"><button type="submit" formaction="#" class="btn btn-danger"><i class='fa fa-print fa-fw'></i> Print Semua Laporan Keuangan</button></p>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

