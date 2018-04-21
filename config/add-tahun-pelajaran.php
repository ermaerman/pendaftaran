<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$tahun_pelajaran 	= $_POST["tahun_pelajaran"];

	$insert				= "INSERT INTO tbl_tahun_pelajaran VALUES ('','$tahun_pelajaran')";

	$simpan				= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=tahun-pelajaran">';  

?>
