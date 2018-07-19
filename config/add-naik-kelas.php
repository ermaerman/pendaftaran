<?php

    error_reporting(0);
    
    include 'koneksi.php';

    $nama           = $_POST["nama"];
    $kode_daftar    = $_POST["kode_daftar"];
    $pengumuman     = $_POST["pengumuman"];

    $insert         = "INSERT INTO tbl_pengumuman VALUES ('','$nama','$kode_daftar','$pengumuman')";

    $simpan         = mysqli_query($konek, $insert)or die(mysqli_error($konek));

    echo "<br><br><br><strong><center><i>Anda berhasil menambahkan pengumuman!";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=update-pengumuman">';  

?>
