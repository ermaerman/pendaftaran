<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_pembayaran = $_GET['id_pembayaran'];

    $edit    = "SELECT * FROM tbl_pembayaran WHERE id_pembayaran = '$id_pembayaran'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="tu.php?content=transaksi-cicilan"></a> / Edit Transaksi Cicilan (Validasi)</li>
    </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit Transaksi Pendaftaran (Validasi)</b> </h3>
    <hr><br><br>
    <br>
    <br>
    <form class="form-horizontal" action="../config/update-konfirmasi-bayar-cicilan.php" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
        <div class="form-group">
            <label class="col-sm-3"></label>
            <label class="col-sm-3">Kode Daftar</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-1"><?php echo $data['kode_daftar'];?></label>
        </div>
        <div class="form-group">
            <label class="col-sm-3"></label>
            <label class="col-sm-3">Pembayaran</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-2"><?php echo $data['pembayaran'];?></label>
        </div>
        <div class="form-group">
            <label class="col-sm-3"></label>
            <label class="col-sm-3">Bukti Pembayaran</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-2"><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar!" href="<?php echo $data['bukti_pembayaran'] ?>" target="_blank"><img width="50" height="70" src="<?php echo $data['bukti_pembayaran'] ?>"></a></label>
        </div>
        <div class="form-group">
            <label class="col-sm-3"></label>
            <label class="col-sm-3">Tanggal Konfirmasi Pembayaran</label>
            <label class="col-sm-1">:</label>
            <label class="col-sm-2"><?php echo $data['tgl_konfirmasi_bayar']; ?></label>
        </div>
        <div class="form-group">
            <label class="col-sm-7"></label>
            <label class="col-sm-1"><button type="submit" class="btn btn-primary">Konfirmasi</button></label>
            <label class="col-sm-1"><a href="tu.php?content=transaksi-cicilan"><button type="button" class="btn btn-danger">Kembali</button></a></label>
            <label class="col-sm-1"></label>
        </div>   
    </form>
</div>