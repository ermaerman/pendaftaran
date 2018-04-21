<?php

	include 'koneksi.php';

    $id_biaya           = $_POST['id_biaya'];
	$tahun_pelajaran    = $_POST['tahun_pelajaran'];
    $biaya_pendaftaran  = $_POST['biaya_pendaftaran'];
    $uang_gedung        = $_POST['uang_gedung'];
    $biaya_mos          = $_POST['biaya_mos'];
    $biaya_spp          = $_POST['biaya_spp'];
    $seragam_putih_abu  = $_POST['seragam_putih_abu'];
    $seragam_olahraga   = $_POST['seragam_olahraga'];
    $seragam_batik      = $_POST['seragam_batik'];
    $seragam_pramuka    = $_POST['seragam_pramuka'];
    $baju_muslim        = $_POST['baju_muslim'];
    $topi               = $_POST['topi'];
    $dasi               = $_POST['dasi'];
    $ikat_pinggang      = $_POST['ikat_pinggang'];
    $kbm_pramuka        = $_POST['kbm_pramuka'];
    $kbm_praktek        = $_POST['kbm_praktek'];
    $kbm_ekstra         = $_POST['kbm_ekstra'];
    $total_pangkal      = $_POST['total_pangkal'];



	$update 	= "UPDATE tbl_biaya SET tahun_pelajaran='$tahun_pelajaran', biaya_pendaftaran='$biaya_pendaftaran', uang_gedung='$uang_gedung', biaya_mos='$biaya_mos', biaya_spp='$biaya_spp', seragam_putih_abu='$seragam_putih_abu', seragam_olahraga='$seragam_olahraga', seragam_batik='$seragam_batik', seragam_pramuka='$seragam_pramuka', baju_muslim='$baju_muslim', topi='$topi', dasi='$dasi', ikat_pinggang='$ikat_pinggang', kbm_pramuka='$kbm_pramuka', kbm_praktek='$kbm_praktek', kbm_ekstra='$kbm_ekstra', total_pangkal='$total_pangkal' WHERE id_biaya='$id_biaya'";
	$updatebiaya	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updatebiaya)
    	{
    		echo "<br><br><br><strong><center><i>Data berhasil diedit dan disimpan!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=update-biaya">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>