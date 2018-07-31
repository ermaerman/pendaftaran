<?php

	include '../config/koneksi.php';

	$tahun_pelajaran 	= $_GET['tahun_pelajaran'];

	$edit    = "SELECT COUNT(validasi_daftar) AS jumlah FROM tbl_pembayaran WHERE validasi_daftar='1' AND tahun_pelajaran='$tahun_pelajaran'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  

	$jumlah  = $data['jumlah'];

	$select  = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='$tahun_pelajaran'";
	$query   = mysqli_query($konek, $select)or die(mysqli_error($konek));
	$tampil  = mysqli_fetch_array($query);  

	$pendaftaran = $tampil['biaya_pendaftaran'];

	$total   = $jumlah * $pendaftaran;

	echo $total;


?>