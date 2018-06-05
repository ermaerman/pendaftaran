<?php

	include 'koneksi.php';

    $kode_daftar            = $_POST['kode_daftar'];
    $lks = $_POST['lks'];
    $status_buku = $_POST['status_buku'];
    $keterangan            = $_POST['keterangan'];

    $update     = "UPDATE tbl_lks SET lks='$lks', status_buku='$status_buku', keterangan='$keterangan' WHERE kode_daftar='$kode_daftar'";

	$update	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Berhasil Edit Keterangan!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=data-buku">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>
