<?php

	//error_reporting(0);

	include 'koneksi.php';

	$tahun_pelajaran		   	= $_POST["tahun_pelajaran"];
	$pendaftaran				= $_POST["pendaftaran"];
	$uang_gedung				= $_POST["uang_gedung"];
	$biaya_mos					= $_POST["biaya_mos"];
	$biaya_spp					= $_POST["biaya_spp"];
	$seragam_putih_abu			= $_POST["seragam_putih_abu"];
	$seragam_olahraga			= $_POST["seragam_olahraga"];
	$seragam_batik				= $_POST["seragam_batik"];
	$seragam_pramuka			= $_POST["seragam_pramuka"];
	$baju_muslim				= $_POST["baju_muslim"];
	$topi						= $_POST["topi"];
	$dasi						= $_POST["dasi"];
	$ikat_pinggang				= $_POST["ikat_pinggang"];
	$kbm_pramuka				= $_POST["kbm_pramuka"];
	$kbm_praktek				= $_POST["kbm_praktek"];
	$kbm_ekstra					= $_POST["kbm_ekstra"];
	$totaldu1					= $_POST["totaldu1"];
	$totaldu2					= $_POST["totaldu2"];

	$rekap = $pendaftaran + $uang_gedung + $biaya_mos + $biaya_spp + $seragam_putih_abu + $seragam_olahraga + $seragam_batik + $seragam_pramuka + $baju_muslim + $topi + $dasi + $ikat_pinggang + $kbm_pramuka + $kbm_praktek + $kbm_ekstra + $totaldu1 + $totaldu2;

	var_dump($rekap);

	$insert			= "INSERT INTO tbl_rekap VALUES ('','$tahun_pelajaran','$pendaftaran','$uang_gedung','$biaya_mos', '$biaya_spp','$seragam_putih_abu','$seragam_olahraga','$seragam_batik','$seragam_pramuka','$baju_muslim','$topi','$dasi','$ikat_pinggang','$kbm_pramuka','$kbm_praktek','$kbm_ekstra','$totaldu1','$totaldu2','$rekap')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Anda berhasil menambahkan rekap!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=detail-keuangan">';

?>
