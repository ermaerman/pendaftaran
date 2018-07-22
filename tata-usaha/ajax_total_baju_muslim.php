<?php
	include "../config/koneksi.php";

	$tahun_pelajaran  = $_GET["tahun_pelajaran"];
	// $cicil 			  = $_GET["cicil"];

	$edit    = "SELECT COUNT(validasi_pangkal_lunas) AS jumlah FROM tbl_pembayaran WHERE validasi_pangkal_lunas='1'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  

	$jumlah  = $data['jumlah'];
	

	$edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='$tahun_pelajaran'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  

	$baju_muslim = $data['baju_muslim'];
	
	$totalbajumuslim   = ceil($baju_muslim);
	
	echo $baju_muslim;
	
	
?>