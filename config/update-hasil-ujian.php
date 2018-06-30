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

		if($hasil=='Lulus')
	 {
	 	$update 		= "UPDATE tbl_pengumuman SET kode_daftar='$kode_daftar', bahasa_indonesia='$bahasa_indonesia', matematika='$matematika', bahasa_inggris='$bahasa_inggris', kejuruan='$kejuruan', buta_warna='$buta_warna', urine='$urine', fisik='$fisik', hasil='1' WHERE kode_daftar='$kode_daftar'";
	 	$updatehasil	= mysqli_query($konek, $update)or die(mysqli_error($konek));

		$update 		= "UPDATE tbl_data_calon_murid SET status='1' WHERE kode_daftar='$kode_daftar'";
	 	$updatehasil	= mysqli_query($konek, $update)or die(mysqli_error($konek));

	 	$update 		= "INSERT INTO tbl_lks (kode_daftar) SELECT kode_daftar FROM tbl_pengumuman ORDER BY id_pengumuman DESC LIMIT 1";
	 	$updatehasil	= mysqli_query($konek, $update)or die(mysqli_error($konek));

	 	$update 		= "INSERT INTO tbl_kelas (kode_daftar) SELECT kode_daftar FROM tbl_pengumuman ORDER BY id_pengumuman DESC LIMIT 1";
	 	$updatehasil	= mysqli_query($konek, $update)or die(mysqli_error($konek));

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
	 }
	 elseif ($hasil=='TidakLulus')
	 {
		 $update 		= "UPDATE tbl_pengumuman SET kode_daftar='$kode_daftar', bahasa_indonesia='$bahasa_indonesia', matematika='$matematika', bahasa_inggris='$bahasa_inggris', kejuruan='$kejuruan', buta_warna='$buta_warna', urine='$urine', fisik='$fisik', hasil='0' WHERE kode_daftar='$kode_daftar'";
 	 	$updatehasil	= mysqli_query($konek, $update)or die(mysqli_error($konek));

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
	 }
