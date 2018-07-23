<?php

	include 'koneksi.php';

    $kode_daftar            = $_POST['kode_daftar'];
    $tahun_pelajaran        = $_POST['tahun_pelajaran'];
    $kelas                  = $_POST['kelas'];

    $update     = "UPDATE tbl_kelas SET kode_daftar='$kode_daftar', tahun_pelajaran='$tahun_pelajaran', id_request_kelas='$kelas', sepuluh='1' WHERE kode_daftar='$kode_daftar'";

	$update	= mysqli_query($konek, $update)or die(mysqli_error($konek));

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Berhasil Edit Kelas!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=pembagian-kelas">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>
