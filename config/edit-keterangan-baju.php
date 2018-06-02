<?php

	include 'koneksi.php';

    $kode_daftar            = $_POST['kode_daftar'];
    $keterangan            = $_POST['keterangan'];

    $update     = "UPDATE tbl_ukuran_baju SET keterangan='$keterangan' WHERE kode_daftar='$kode_daftar'";

	$update	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Berhasil Edit Keterangan!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=data-ukuran-baju">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>
