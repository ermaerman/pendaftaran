<?php

    //error_reporting(0);

    include '../config/koneksi.php';

    $id_kelas = $_GET['id_kelas'];
    $kode_daftar = $_GET['kode_daftar'];

    $edit    = "SELECT * FROM tbl_kelas WHERE kode_daftar = '$kode_daftar'";
    $hasil   = mysqli_query($konek, $edit)or die(mysqli_error());
    $data    = mysqli_fetch_array($hasil);

    $id_request_kelas = $data['id_request_kelas'];
    // echo $id_request_kelas;

    $select  = "SELECT tbl_kelas.tahun_pelajaran, tbl_request_kelas.id_request_kelas, tbl_request_kelas.keterangan FROM tbl_kelas, tbl_request_kelas WHERE tbl_kelas.kode_daftar = '$kode_daftar' AND tbl_kelas.id_request_kelas = tbl_request_kelas.id_request_kelas";
    $que     = mysqli_query($konek,$select)or die(mysqli_error());
    $tampil  = mysqli_fetch_array($que);



    $keterangan   = $tampil['keterangan'];

    $tahun        = $tampil['tahun_pelajaran'];

    $replace      = str_replace('/', '', $tahun);

    $thn          = $replace+20002;

    $thn2         = $replace+10001;
    
    $thn3         = $replace+30003;

    $pertama      = substr($thn, 0,4);
    
    $kedua        = substr($thn, 4,8);

    $pertama2      = substr($thn2, 0,4);
    
    $kedua2        = substr($thn2, 4,8);

    $thn_pelajaran2= $pertama2.'/'.$kedua2;

    $pertama3      = substr($thn3, 0,4);
    
    $kedua3        = substr($thn3, 4,8);

    $thn_pelajaran3= $pertama3.'/'.$kedua3;

    $thn_pelajaran= $pertama.'/'.$kedua;

    $ket          = $keterangan+2;


?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="#">Kelas</a> / <a href="tu.php?content=naik-kelas">Lulus</a> / Edit Lulus</li>
    </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit</b> Lulus</h3>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form class="form-horizontal" action="../config/add-lulus.php" method="POST">
        <input type="hidden" name="id_kelas" value="<?php echo $id_kelas ?>">
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Kode Daftar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="kode_daftar" type="text" value="<?php echo $data['kode_daftar']; ?>" required readonly>
            </div>
        </div>
        <?php

            //untuk mendapatkan prodi si siswa berdasarkan kode daftar
            $data    = "SELECT * FROM tbl_data_calon_murid WHERE kode_daftar = '$kode_daftar'";
            $query   = mysqli_query($konek,$data)or die(mysqli_error());
            $tampil  = mysqli_fetch_array($query);

            $prodi   = $tampil['prodi'];


        ?>
        <div class="form-group">
                  <label class="col-sm-2"></label>
                  <label class="col-sm-2">Lulus</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                    <select class="form-control" name="kelas" id="kelas">
                    <option>Lulus</option>
                    </select>
                  </div>
                </div>
                <input type="text" name="thn_pelajaran" value="<?php echo $thn_pelajaran ?>">
                <input type="text" name="tahun" value="<?php echo $tahun ?>">
                <input type="text" name="thn_pelajaran2" value="<?php echo $thn_pelajaran2 ?>">
                <input type="text" name="thn_pelajaran3" value="<?php echo $thn_pelajaran3 ?>">
                <input type="text" name="keterangan" value="<?php echo $keterangan ?>">
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>
</div>