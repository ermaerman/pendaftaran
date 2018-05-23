<?php

	include 'koneksi.php';

    $id_pengumuman      = $_POST['id_pengumuman'];
	$kode_daftar    	= $_POST['kode_daftar'];
    $bahasa_indonesia   = $_POST['bahasa_indonesia'];
    $matematika         = $_POST['matematika'];
	$bahasa_inggris		= $_POST['bahasa_inggris'];
    $kejuruan           = $_POST['kejuruan'];
    $buta_warna         = $_POST['buta_warna'];
    $urine              = $_POST['urine'];
    $fisik              = $_POST['fisik'];
    $hasil              = $_POST['hasil'];    


	$update 	= "UPDATE tbl_pengumuman SET kode_daftar='$kode_daftar', bahasa_indonesia='$bahasa_indonesia', matematika='$matematika', bahasa_inggris='$bahasa_inggris', kejuruan='$kejuruan', buta_warna='$buta_warna', urine='$urine', fisik='$fisik', hasil='$hasil' WHERE id_pengumuman='$id_pengumuman'";
	$updatehasil	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updatehasil)
    	{
    		echo "<br><br><br><strong><center><i>Hasil Ujian Berhasil di Update!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=update-nilai">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>