<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$tahun_pelajaran   	= $_POST["tahun_pelajaran"];
	$nama_kelas		   	= $_POST["kelas"];
	$prodi			   	= $_POST["prodi"];

	$kelas  			= $nama_kelas."-".$prodi;

	if ($nama_kelas=='X') {
		$kls = '10';
	} elseif ($nama_kelas=='XI') {
		$kls = '11';
	} else {
		$kls = '12';
	}

	$insert			= "INSERT INTO tbl_request_kelas VALUES ('','$tahun_pelajaran','$kelas','0','0','$kls')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Anda berhasil menambahkan request kelas!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=request-kelas">';  

?>
