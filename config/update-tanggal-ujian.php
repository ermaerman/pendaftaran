<?php

	include 'koneksi.php';

    $id_tanggal_ujian           = $_POST['id_tanggal_ujian'];
    $tanggal                    = $_POST['tanggal'];
    $pukul                      = $_POST['pukul'];
    $tempat                     = $_POST['tempat'];
    $pakaian                    = $_POST['pakaian'];

    $update     = "UPDATE tbl_tanggal_ujian SET tanggal='$tanggal', pukul='$pukul', tempat='$tempat', pakaian='$pakaian' WHERE id_tanggal_ujian='$id_tanggal_ujian'";
	$update	    = mysqli_query($konek, $update)or die(mysqli_error());

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Berhasil Edit Tanggal Ujian!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=update-tanggal">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>
