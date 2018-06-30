<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_kelas = $_GET['id_kelas'];
    $kode_daftar = $_GET['kode_daftar'];

    $edit    = "SELECT * FROM tbl_kelas WHERE kode_daftar = '$kode_daftar'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="#">Kelas</a> / <a href="#">Pembagian Kelas</a> / Edit Kelas</li>
    </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit</b> Kelas</h3>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form class="form-horizontal" action="../config/edit-keterangan-kelas.php" method="POST">
        <input type="hidden" name="id_kelas" value="<?php echo $id_kelas ?>">
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
                  <label class="col-sm-2">Kelas</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                    <select class="form-control" name="kelas" id="kelas">
                    <option>-- Pilih Kelas --</option>
                    <?php
                    $tujuan = "SELECT COUNT(tbl_kelas.kelas) AS jml, tbl_request_kelas.nama_kelas, tbl_request_kelas.jumlah_murid, tbl_request_kelas.status FROM tbl_kelas, tbl_request_kelas WHERE tbl_request_kelas.status='1' AND jml =! tbl_request_kelas.jumlah_murid";
                    $queryTujuan = mysqli_query($konek,$tujuan);
                    while ($dataTujuan = mysqli_fetch_array($queryTujuan)) { ?>
                         <option value="<?php echo $dataTujuan['nama_kelas'] ?>"><?php echo $dataTujuan["nama_kelas"] ?>
                        </option>
                    <?php
                    }
                    ?>
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