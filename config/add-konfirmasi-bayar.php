<?php

	// error_reporting(0);

	include 'koneksi.php';

	$id_pembayaran				= $_POST["id_pembayaran"];
	$kode_daftar					= $_POST["kode_daftar"];
	$b_daftar  						= $_POST["b_daftar"];
	$validasi_daftar			= $_POST["validasi_daftar"];

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
	&& $imageFileType != "GIF" ) {
	    echo "";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "";

	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	    } else {
	        echo "";
	    }
	}

	 if($b_daftar=='pendaftaran')
	{
		$update 		= "UPDATE tbl_pembayaran SET kode_daftar='$kode_daftar', b_daftar='1', bukti_daftar='$target_file', 			   validasi_daftar='0' WHERE kode_daftar='$kode_daftar'";
		$updatebayar	= mysqli_query($konek, $update)or die(mysqli_error($konek));

		if ($updatebayar)
    	{
    		echo "<br><br><br><strong><center><i>Anda berhasil mengkonfirmasi pembayaran pendaftaran!";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?content=cek-proses">';
    	}
		else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
	}
	elseif ($b_daftar=='pangkallunas')
	{
		$update 		= "UPDATE tbl_pembayaran SET kode_daftar='$kode_daftar', b_pangkal_lunas='1',
						   bukti_pangkal_lunas='$target_file', validasi_pangkal_lunas='0' WHERE kode_daftar='$kode_daftar'";
		$updatebayar	= mysqli_query($konek, $update)or die(mysqli_error($konek));

		if ($updatebayar)
    	{
    		echo "<br><br><br><strong><center><i>Anda berhasil mengkonfirmasi pembayaran pangkal lunas!";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?content=cek-proses">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
	}
	elseif ($b_daftar=='cicilpertama')
	{
		$update 		= "UPDATE tbl_pembayaran SET kode_daftar='$kode_daftar', b_pangkal_cicil1='1',
						   bukti_pangkal_cicil1='$target_file', validasi_pangkal_cicil1='0' WHERE kode_daftar='$kode_daftar'";
		$updatebayar	= mysqli_query($konek, $update)or die(mysqli_error($konek));

		if ($updatebayar)
    	{
    		echo "<br><br><br><strong><center><i>Anda berhasil mengkonfirmasi pembayaran pangkal cicilan pertama!";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?content=cek-proses">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
	}
	elseif ($b_daftar=='cicilkedua')
	{
		$update 		= "UPDATE tbl_pembayaran SET kode_daftar='$kode_daftar', b_pangkal_cicil2='1',
						   bukti_pangkal_cicil2='$target_file', validasi_pangkal_cicil2='0' WHERE kode_daftar='$kode_daftar'";
		$updatebayar	= mysqli_query($konek, $update)or die(mysqli_error($konek));

		if ($updatebayar)
    	{
    		echo "<br><br><br><strong><center><i>Anda berhasil mengkonfirmasi pembayaran pangkal cicilan kedua!";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?content=cek-proses">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
	}
	elseif ($b_daftar=='cicilketiga')
	{
		$update 		= "UPDATE tbl_pembayaran SET kode_daftar='$kode_daftar', b_pangkal_cicil3='1',
						   bukti_pangkal_cicil3='$target_file', validasi_pangkal_cicil3='0' WHERE kode_daftar='$kode_daftar'";
		$updatebayar	= mysqli_query($konek, $update)or die(mysqli_error($konek));

		if ($updatebayar)
    	{
    		echo "<br><br><br><strong><center><i>Anda berhasil mengkonfirmasi pembayaran pangkal cicilan ketiga!";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?content=cek-proses">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
	}
	elseif ($b_daftar=='daftarulang1')
	{
		$update 		= "UPDATE tbl_pembayaran SET kode_daftar='$kode_daftar', b_daftar_ulang1='1',
						   bukti_daftar_ulang1='$target_file', validasi_daftar_ulang1='0' WHERE kode_daftar='$kode_daftar'";
		$updatebayar	= mysqli_query($konek, $update)or die(mysqli_error($konek));

		if ($updatebayar)
    	{
    		echo "<br><br><br><strong><center><i>Anda berhasil mengkonfirmasi pembayaran daftar ulang naik kelas 11!";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?content=konfirmasi-pembayaran">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
	}
		elseif ($b_daftar=='daftarulang2')
		{
			$update 		= "UPDATE tbl_pembayaran SET kode_daftar='$kode_daftar', b_daftar_ulang2='1',
							   bukti_daftar_ulang2='$target_file', validasi_daftar_ulang2='0' WHERE kode_daftar='$kode_daftar'";
			$updatebayar	= mysqli_query($konek, $update)or die(mysqli_error($konek));

			if ($updatebayar)
	    	{
	    		echo "<br><br><br><strong><center><i>Anda berhasil mengkonfirmasi pembayaran daftar ulang naik kelas 12!";
				echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?content=konfirmasi-pembayaran">';
	    	}
		else {
	    		print"
	    			<script>
	    				alert(\"Balasan gagal ditambah!\");
	    				history.back(-1);
	    			</script>";
	    	}
		}
?>
