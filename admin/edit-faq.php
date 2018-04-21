<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_faq = $_GET['id_faq'];

    $edit    = "SELECT * FROM tbl_faq WHERE id_faq = '$id_faq'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="admin.php?content=home-admin">Home</a> / <a href="admin.php?content=faq">FAQ</a> / Edit FAQ</li>
    </ol>
</div>

<div class="col-md-10" style="min-height:500px">
    <h3><b>Edit Pernyataan / Komentar</b> </h3>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form class="form-horizontal" action="../config/update-faq.php" method="POST">
        <input type="hidden" name="id_faq" value="<?php echo $id_faq?>">
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Nama</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="nama" type="text" value="<?php echo $data['nama'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Email</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="email" type="email" value="<?php echo $data['email'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Waktu</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="tanggal" type="text" value="<?php echo $data['tanggal'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Pertanyaan / Komentar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="comment" type="text" value="<?php echo $data['comment'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Balasan</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="balasan" type="text" value="<?php echo $data['balasan']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-7" align="right">
                <button class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>