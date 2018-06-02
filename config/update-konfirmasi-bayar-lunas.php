<?php

	include 'koneksi.php';

     $id_pembayaran          = $_POST['id_pembayaran'];
		 $kode_daftar            = $_POST['kode_daftar'];

    $update     = "UPDATE tbl_pembayaran SET validasi_pangkal_lunas='1', status_pembayaran='1', jenis_pembayaran='1' WHERE kode_daftar='$kode_daftar'";
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
