<?php
	include "../config/koneksi.php";
	$tahun_pelajaran  = $_GET["tahun_pelajaran"];
	// $cicil 			  = $_GET["cicil"];
	$edit    = "SELECT COUNT(validasi_pangkal_lunas) AS jumlah FROM tbl_pembayaran WHERE validasi_pangkal_lunas='1' AND tahun_pelajaran = '$tahun_pelajaran'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  
	$jumlahlunas  = $data['jumlah'];

	$edit    = "SELECT COUNT(validasi_pangkal_cicil2) AS cicil FROM tbl_pembayaran WHERE validasi_pangkal_cicil2='1' AND tahun_pelajaran = '$tahun_pelajaran'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  
	$jumlahcicil  = $data['cicil'];
	
	$edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='$tahun_pelajaran'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  
	$biaya_mos = $data['biaya_mos'];

	$lunas 		= $jumlahlunas * $biaya_mos;
	$cicil 		= $jumlahcicil * $biaya_mos;

	$totalbiayamos   = ceil($lunas+$cicil);
	
	echo $totalbiayamos;
	
	
?>