<?php
	include "../config/koneksi.php";
	$tahun_pelajaran  = $_GET["tahun_pelajaran"];
	$edit    = "SELECT COUNT(validasi_pangkal_cicil2) AS jumlah FROM tbl_pembayaran WHERE validasi_pangkal_cicil2='1'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  
	$jumlah  = $data['jumlah'];
	
	$edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='$tahun_pelajaran'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  
	$pangkal = $data['total_pangkal'];
	$cicil   = $pangkal / 3;
	
	$total2   = ceil($jumlah * $cicil);
	
	echo $total2;
	// $total = $row["harga"] * $penumpang;
	
	
?>