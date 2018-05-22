<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_berita = $_GET['id_berita'];

    $edit    = "SELECT * FROM tbl_berita WHERE id_berita = '$id_berita'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="admin.php?content=home-admin">Home</a> / <a href="#">Update</a> / <a href="admin.php?content=berita">Berita</a> / Edit Berita</li>
    </ol>
</div>
  
<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit</b> Berita</h3>
    <hr>
    <br>
    <br>
    <form class="form-horizontal" action="../config/update-berita.php" method="POST">
        <input type="hidden" name="id_berita" value="<?php echo $id_berita ?>">
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Judul</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="judul" type="text" value="<?php echo $data['judul']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Tanggal Berita</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="tgl_berita" type="text" value="<?php echo $data['tgl_berita']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Gambar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="../berita/<?php echo $data['gambar'] ?>" target="_blank"><img width="70" height="70" src="../berita/<?php echo $data['gambar'] ?>"></a>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Berita</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <textarea class="form-control" name="berita" type="text"><?php echo $data['berita']; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-7" align="right">
                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>
</div>