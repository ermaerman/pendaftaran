<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_user = $_GET['id_user'];

    $edit    = "SELECT id_user, nama, username, password FROM tbl_user WHERE id_user = '$id_user'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="admin.php?content=home-admin">Home</a> / <a href="admin.php?content=manajemen-user">Manajemen User</a> / Edit User</li>
    </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit</b> Manajemen User</h3>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form class="form-horizontal" action="../config/update-user.php" method="POST">
        <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-1">Nama</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-6">
                <input class="form-control" name="nama" type="text" value="<?php echo $data['nama']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-1">Username</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-6">
                <input class="form-control" name="username" type="text" value="<?php echo $data['username']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-1">Password</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-6">
                <input class="form-control" name="password" type="password" value="<?php echo $data['password']; ?>" required>
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