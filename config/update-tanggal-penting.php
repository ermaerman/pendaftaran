<?php

	include 'koneksi.php';

    $id_informasi_tanggal           = $_POST['id_informasi_tanggal'];
    $tgl_awal_masuk                 = $_POST['tgl_awal_masuk'];
    $tgl_awal_daftar                = $_POST['tgl_awal_daftar'];
    $tgl_akhir_daftar               = $_POST['tgl_akhir_daftar'];

    $update     = "UPDATE tbl_informasi_tanggal SET tgl_awal_masuk='$tgl_awal_masuk', tgl_awal_daftar='$tgl_awal_daftar', tgl_akhir_daftar='$tgl_akhir_daftar' WHERE id_informasi_tanggal='$id_informasi_tanggal'";
	$update	    = mysqli_query($konek, $update)or die(mysqli_error($konek));

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Berhasil Edit Tanggal Penting!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=update-tanggal-penting">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>
