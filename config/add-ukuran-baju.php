<?php

	error_reporting(0);

	include 'koneksi.php';

	$kode_daftar		   	= $_POST["kode_daftar"];
	$ukuran_baju		   	= $_POST["ukuran_baju"];

	$insert			= "INSERT INTO tbl_ukuran_baju VALUES ('','$kode_daftar','$ukuran_baju','Belum Diterima')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Anda berhasil menambahkan ukuran baju!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php">';

?>
