<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$nama_kelas		   	= $_POST["nama_kelas"];

	$insert			= "INSERT INTO tbl_request_kelas VALUES ('','$nama_kelas','0')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Anda berhasil menambahkan request kelas!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=request-kelas">';  

?>
