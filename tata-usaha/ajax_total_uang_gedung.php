<?php
	include "../config/koneksi.php";
	$tahun_pelajaran  = $_GET["tahun_pelajaran"];
	// $cicil 			  = $_GET["cicil"];
	$edit    = "SELECT COUNT(validasi_pangkal_lunas) AS jumlah FROM tbl_pembayaran WHERE validasi_pangkal_lunas='1' AND tahun_pelajaran = '$tahun_pelajaran'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  
	$jumlahlunas  = $data['jumlah'];

	$edit    = "SELECT COUNT(validasi_pangkal_cicil1) AS cicil FROM tbl_pembayaran WHERE validasi_pangkal_cicil1='1' AND tahun_pelajaran = '$tahun_pelajaran'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  
	$jumlahcicil  = $data['cicil'];
	
	$edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='$tahun_pelajaran'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  
	$uang_gedung = $data['uang_gedung'];
	
	$lunas   = $jumlahlunas * $uang_gedung;
	$cicil 	 = $jumlahcicil * $uang_gedung;

	$totaluanggedung   = ceil($lunas+$cicil);
	
	echo $totaluanggedung;
	
	
?>