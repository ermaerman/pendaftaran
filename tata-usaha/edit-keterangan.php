<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_ukuran_baju = $_GET['$id_ukuran_baju'];
  $kode_daftar    = $_GET['kode_daftar'];

  $edit    = "SELECT tbl_ukuran_baju.kode_daftar,tbl_ukuran_baju.id_ukuran_baju, tbl_data_calon_murid.kode_daftar, tbl_ukuran_baju.ukuran_baju, tbl_data_calon_murid.nama FROM tbl_ukuran_baju, tbl_data_calon_murid WHERE tbl_ukuran_baju.kode_daftar = '$kode_daftar' AND tbl_data_calon_murid.kode_daftar = '$kode_daftar'";
  $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
  $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="tu.php?content=transaksi-pendaftaran"></a> <a href="tu.php?content=data-ukuran-baju">Data Ukuran Baju Validasi</a> / Edit Keterangan</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit Keterangan</b> Ukuran Baju</h3>
    <hr>
    <br>
        <form class="form-horizontal" action="../config/edit-keterangan-baju.php" method="POST">
        <input type="hidden" name="id_ukuran_baju" value="<?php echo $data['id_ukuran_baju']?>">
        <input type="hidden" name="kode_daftar" value="<?php echo $data['kode_daftar']?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Edit Keterangan Ukuran Baju</div>
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
                  <th><font size="2px">Ukuran Baju</font></th>
                  <td><font size="2px"><i><?php echo $data['ukuran_baju']; ?></i></font></td>
                </tr>
                <tr>
                  <th><font size="2px">Keterangan</font></th>
                    <td><select class="form-control" id="keterangan" name="keterangan">
                      <option>Belum Diterima</option>
                      <option>Sudah Diterima</option>
                    </select></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit"class="btn btn-primary">Simpan</button>
                <a href="tu.php?content=data-ukuran-baju"><button type="button" class="btn btn-default">Kembali</button></a></p>
            </div>
          </div>
      </form>
  </div>
</div>
