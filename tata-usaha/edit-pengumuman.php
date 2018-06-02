<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_pengumuman = $_GET['id_pengumuman'];
    $kode_daftar = $_GET['kode_daftar'];

    $edit    = "SELECT * FROM tbl_pengumuman WHERE kode_daftar = '$kode_daftar'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="#">Update</a> / <a href="tu.php?content=update-nilai">Update Hasil Ujian Masuk</a> / Edit Hasil Ujian Masuk</li>
    </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit</b> Hasil Ujian Masuk</h3>
    <hr><br><br>
     <form class="form-horizontal" action="../config/update-hasil-ujian.php" method="POST">
        <input type="hidden" name="id_pengumuman" value="<?php echo $id_pengumuman ?>">
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
            <label class="col-sm-2">Nilai Bahasa Indonesia</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="bahasa_indonesia" type="text" value="<?php echo $data['bahasa_indonesia']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Nilai Matematika</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="matematika" type="text" value="<?php echo $data['matematika']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Nilai Bahasa Inggris</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="bahasa_inggris" type="text" value="<?php echo $data['bahasa_inggris']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Nilai Kejuruan</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="kejuruan" type="text" value="<?php echo $data['kejuruan']; ?>" required>
            </div>
        </div>
        <div class="form-group">
                  <label class="col-sm-2"></label>
                  <label class="col-sm-2">Buta Warna</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="buta_warna" name="buta_warna">
                      <option>Lulus</option>
                      <option>Tidak Lulus</option>
                    </select>
                  </div>
        </div>
        <div class="form-group">
                  <label class="col-sm-2"></label>
                  <label class="col-sm-2">Urine / Bebas Narkoba</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="urine" name="urine">
                      <option>Lulus</option>
                      <option>Tidak Lulus</option>
                    </select>
                  </div>
        </div>
        <div class="form-group">
                  <label class="col-sm-2"></label>
                  <label class="col-sm-2">Fisik</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="fisik" name="fisik">
                      <option>Lulus</option>
                      <option>Tidak Lulus</option>
                    </select>
                  </div>
        </div>
        <hr>
       <div class="form-group">
                  <label class="col-sm-2"></label>
                  <label class="col-sm-2">Hasil</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                    <select  type="text" class="form-control" name="hasil">
                      <option value="Lulus">Lulus</option>
                      <option value="TidakLulus">Tidak Lulus</option>
                    </select>
                  </div>
              </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <button type="submit" class="btn btn-primary">Edit Hasil Ujian Masuk</button>
            </div>
        </div>
    </form>
</div>
