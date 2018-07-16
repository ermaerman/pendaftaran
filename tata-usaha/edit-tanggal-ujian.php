<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_tanggal_ujian = $_GET['id_tanggal_ujian'];

    $edit    = "SELECT * FROM tbl_tanggal_ujian WHERE id_tanggal_ujian = '$id_tanggal_ujian'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="#">Update</a> / <a href="tu.php?content=update-tanggal">Update Tanggal Ujian</a> / Edit Tanggal Ujian</li>
    </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit</b> Tanggal Ujian Masuk</h3>
    <hr>
    <br><br>
    <br><br>
    <br><br>
     <form class="form-horizontal" action="../config/update-tanggal-ujian.php" method="POST">
        <input type="hidden" name="id_tanggal_ujian" value="<?php echo $id_tanggal_ujian ?>">
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Tanggal</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="tanggal" type="date" value="<?php echo $data['tanggal']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Pukul</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="pukul" type="text" value="<?php echo $data['pukul']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Tempat</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="tempat" type="text" value="<?php echo $data['tempat']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Pakaian</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="pakaian" type="text" value="<?php echo $data['pakaian']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <button type="submit" class="btn btn-primary">Edit Tanggal Ujian Masuk</button>
            </div>
        </div>
    </form>
</div>
