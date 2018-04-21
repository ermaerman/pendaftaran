<?php

	include 'koneksi.php';

    $id_faq         = $_POST['id_faq'];
	$nama    		= $_POST['nama'];
    $email          = $_POST['email'];
    $comment        = $_POST['comment'];
	$balasan 		= $_POST['balasan'];


	$update 	= "UPDATE tbl_faq SET nama='$nama', email='$email', comment='$comment', balasan='$balasan' WHERE id_faq='$id_faq'";
	$updatefaq	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updatefaq)
    	{
    		echo "<br><br><br><strong><center><i>Balasan berhasil ditambah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?content=faq">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>