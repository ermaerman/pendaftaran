<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_kelas = $_GET['id_kelas'];
    $kode_daftar = $_GET['kode_daftar'];


    $edit    = "SELECT * FROM tbl_kelas WHERE kode_daftar = '$kode_daftar'";
    $hasil   = mysqli_query($konek, $edit)or die(mysqli_error());
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
        <?php

            $data    = "SELECT * FROM tbl_data_calon_murid WHERE kode_daftar = '$kode_daftar'";
            $query   = mysqli_query($konek,$data)or die(mysqli_error());
            $tampil  = mysqli_fetch_array($query);

            $prodi   = $tampil['prodi'];
            echo $prodi;
            // echo '<br>';

            $select  = "SELECT COUNT(tbl_kelas.id_request_kelas) AS jumlah FROM tbl_kelas, tbl_request_kelas WHERE tbl_request_kelas.nama_kelas LIKE '%$prodi%' AND tbl_request_kelas.id_request_kelas = tbl_kelas.id_request_kelas";
            $mysqli  = mysqli_query($konek,$select)or die(mysqli_error($konek));
            $muncul  = mysqli_fetch_array($mysqli);

            $jumlah  = $muncul['jumlah'];

            echo $jumlah;

        ?>
        <div class="form-group">
                  <label class="col-sm-2"></label>
                  <label class="col-sm-2">Kelas</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                    <select class="form-control" name="kelas" id="kelas">
                    <option>-- Pilih Kelas --</option>
                    <?php
                        $kelas = "SELECT * FROM tbl_request_kelas WHERE jumlah_murid != '$jumlah' AND nama_kelas LIKE '%$prodi%'";
                        $querykelas = mysqli_query($konek,$kelas);
                        while ($datakelas = mysqli_fetch_array($querykelas)) { ?>
                            <option value="<?php echo $datakelas['id_request_kelas']; ?>">
                                <?php echo $datakelas['nama_kelas']; ?>
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