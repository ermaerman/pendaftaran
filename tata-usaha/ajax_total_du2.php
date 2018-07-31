<?php
	include "../config/koneksi.php";
	$tahun_pelajaran  = $_GET["tahun_pelajaran"];
	$edit    = "SELECT COUNT(validasi_daftar_ulang2) AS jumlah FROM tbl_pembayaran WHERE validasi_daftar_ulang2='1'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  
	$jumlah  = $data['jumlah'];
	$tahun   = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='$tahun_pelajaran'";
    $query   = mysqli_query($konek, $tahun)or die(mysqli_error($konek));
    $tampil  = mysqli_fetch_array($query);  
    $du2 = ceil($tampil['daftar_ulang2']);
    $totaldu2   = $jumlah * $du2;
	echo $totaldu2;
	
?>