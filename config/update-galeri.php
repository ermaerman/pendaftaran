<?php

	include 'koneksi.php';

    $id_galeri      = $_POST['id_galeri'];
	$caption 		= $_POST['caption'];
	$tgl_update	 	= $_POST['tgl_update'];


	$update 	= "UPDATE tbl_galeri SET caption='$caption', tgl_update='$tgl_update' WHERE id_galeri='$id_galeri'";
	$updateuser	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updateuser)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?content=galeri">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>