<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$tanggal		   	= $_POST["tanggal"];
	$pukul			   	= $_POST["pukul"];
	$tempat			   	= $_POST["tempat"];
	$pakaian		   	= $_POST["pakaian"];

	$insert			= "INSERT INTO tbl_tanggal_ujian VALUES ('','$tanggal','$pukul','$tempat','$pakaian')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Anda berhasil menambahkan tanggal ujian masuk!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=update-tanggal">';  

?>
