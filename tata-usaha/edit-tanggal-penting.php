<?php

    //error_reporting(0);

    include '../config/koneksi.php';

    $id_informasi_tanggal = $_GET['id_informasi_tanggal'];

    $edit    = "SELECT * FROM tbl_informasi_tanggal WHERE id_informasi_tanggal = '$id_informasi_tanggal'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error($konek));
    $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="#">Update</a> / <a href="tu.php?content=update-tanggal-penting">Update Tanggal Penting</a> / Edit Tanggal Penting</li>
    </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit</b> Tanggal Penting</h3>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form class="form-horizontal" action="../config/update-tanggal-penting.php" method="POST">
        <input type="hidden" name="id_informasi_tanggal" value="<?php echo $id_informasi_tanggal; ?>">
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Tanggal Awal Masuk</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="tgl_awal_masuk" type="text" value="<?php echo $data['tgl_awal_masuk']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Tanggal Awal Daftar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="tgl_awal_daftar" type="text" value="<?php echo $data['tgl_awal_daftar']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Tanggal Akhir Daftar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="tgl_akhir_daftar" type="text" value="<?php echo $data['tgl_akhir_daftar']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>
</div>