<?php

	error_reporting(0);

	include 'koneksi.php';

	$kode_daftar				= $_POST["kode_daftar"];
	$seragam_putih_abu			= $_POST["seragam_putih_abu"];
	$seragam_olahraga			= $_POST["seragam_olahraga"];
	$seragam_batik				= $_POST["seragam_batik"];
	$seragam_pramuka			= $_POST["seragam_pramuka"];
	$baju_muslim				= $_POST["baju_muslim"];
	$topi						= $_POST["topi"];
	$dasi						= $_POST["dasi"];
	$ikat_pinggang				= $_POST["ikat_pinggang"];

	$insert			= "INSERT INTO tbl_pembelian VALUES ('','$kode_daftar','$seragam_putih_abu','$seragam_olahraga','$seragam_batik','$seragam_pramuka','$baju_muslim','$topi','$dasi','$ikat_pinggang')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Anda berhasil menambahkan data!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=tambah-baju">';

?>
