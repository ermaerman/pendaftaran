<?php

	include 'koneksi.php';

     $id_pembayaran          = $_POST['id_pembayaran'];

    $update     = "UPDATE tbl_pembayaran SET validasi_pangkal_lunas='1' WHERE id_pembayaran='$id_pembayaran'";
	$update	    = mysqli_query($konek, $update)or die(mysqli_error());

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Berhasil Validasi!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=transaksi-lunas">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>