<?php

    error_reporting(0);
    
    include 'koneksi.php';

    $nama           = $_POST["nama"];
    $kode_daftar    = $_POST["kode_daftar"];
    $kelas     		= $_POST["kelas"];

    $insert         = "INSERT INTO tbl_kelas VALUES ('','$kode_daftar','$kelas')";

    $simpan         = mysqli_query($konek, $insert)or die(mysqli_error($konek));

    echo "<br><br><br><strong><center><i>Anda berhasil menambahkan data naik kelas!";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=naik-kelas">';  

?>
