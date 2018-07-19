<?php

	include "../config/koneksi.php";

	$id_berangkat = $_GET["id_berangkat"];

	$tahun   = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='$tahun_pelajaran'";
    $query   = mysqli_query($konek, $tahun)or die(mysqli_error($konek));
    $tampil  = mysqli_fetch_array($query);
	
?>	

	<option value="cicilan1">Cicilan Pertama</option>
	<option value="cicilan2">Cicilan Kedua</option>
	<option value="cicilan3">Cicilan Ketiga</option>	
	
<!-- ?> -->