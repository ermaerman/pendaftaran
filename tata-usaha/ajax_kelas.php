<?php
	include "../config/koneksi.php";

	$tahun_pelajaran  = $_GET["tahun_pelajaran"];


	$edit    = "SELECT * FROM tbl_kelas WHERE id_request_kelas='$' AND tahun_pelajaran='$tahun_pelajaran'";
	$hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
	$data    = mysqli_fetch_array($hasil);  

	$jumlah  = $data['jumlah'];

	$tahun   = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='$tahun_pelajaran'";
    $query   = mysqli_query($konek, $tahun)or die(mysqli_error($konek));
    $tampil  = mysqli_fetch_array($query);  

    $pendaftaran = ceil($tampil['biaya_pendaftaran']);

    $total   = $jumlah * $pendaftaran;

	echo $total;
	
?>