<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$nama		   	= $_POST["nama"];
	$email			= $_POST["email"];
	$comment		= $_POST["comment"];
	$balasan		= $_POST["balasan"];
	$tanggal		= $_POST["tanggal"];

	$insert			= "INSERT INTO tbl_faq VALUES ('','$nama','$email','$comment','$balasan', '$tanggal')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Anda berhasil menambahkan pertanyaan / komentar!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?content=hubungi-kami">';  

?>
