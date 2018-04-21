<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_galeri = $_GET['id_galeri'];

    $edit    = "SELECT * FROM tbl_galeri WHERE id_galeri = '$id_galeri'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="admin.php?content=home-admin">Home</a> / <a href="#">Update</a> / <a href="admin.php?content=galeri">Galeri</a> / Edit Galeri Foto</li>
    </ol>
</div>
  
<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit</b> Galeri Foto</h3>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <form class="form-horizontal" action="../config/update-galeri.php" method="POST">
        <input type="hidden" name="id_galeri" value="<?php echo $id_galeri ?>">
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-1">Gambar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-6">
                <a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['gambar'] ?>" target="_blank"><img width="70" height="50" src="<?php echo $data['gambar'] ?>"></a>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-1">Caption</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-6">
                <input class="form-control" name="caption" type="text" value="<?php echo $data['caption']; ?>" required>
            </div>
        </div>
        <input type="hidden" name="tgl_update" value="<?php $tgl=date('d-m-Y'); echo $tgl; ?>">
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>
</div>