<?php

	include 'koneksi.php';

    $id_pembayaran          = $_POST['id_pembayaran'];
    $kode_daftar            = $_POST['kode_daftar'];

    $update     = "UPDATE tbl_pembayaran SET validasi_daftar_ulang2='1' WHERE kode_daftar='$kode_daftar'";
	$update	    = mysqli_query($konek, $update)or die(mysqli_error());

    $insert         = "INSERT INTO tbl_ukuran_baju VALUES ('','$kode_daftar','','Belum Diterima')";
    $simpan         = mysqli_query($konek, $insert)or die(mysqli_error($konek));

     $insert2         = "INSERT INTO tbl_lks VALUES ('','$kode_daftar','','Belum Diterima','')";
     $simpan2         = mysqli_query($konek, $insert2)or die(mysqli_error($konek));

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Berhasil Validasi!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=daftar-ulang">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>
