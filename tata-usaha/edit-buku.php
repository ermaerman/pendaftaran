<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_lks = $_GET['id_lks'];
    $kode_daftar = $_GET['kode_daftar'];

    $edit    = "SELECT * FROM tbl_lks WHERE kode_daftar = '$kode_daftar'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / Edit Keterangan LKS</li>
    </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit</b> Keterangan LKS</h3>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form class="form-horizontal" action="../config/edit-keterangan-buku.php" method="POST">
        <input type="" name="id_lks" value="<?php echo $id_lks ?>">
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Kode Daftar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="kode_daftar" type="text" value="<?php echo $data['kode_daftar']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">LKS</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="lks" type="text" value="<?php echo $data['lks']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Keterangan</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="keterangan" type="text" value="<?php echo $data['keterangan']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Status</label>
            <label class="col-sm-1">:</label>
         <div class="col-sm-5">
                    <select class="form-control" id="status_buku" name="status_buku" value="<?php echo $data['status_buku']; ?>">
                      <option>Belum Diterima</option>
                      <option>Sudah Diterima</option>
                    </select> 
        </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>
</div>