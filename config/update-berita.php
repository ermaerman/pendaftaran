<?php

	include 'koneksi.php';

    $id_berita      = $_POST['id_berita'];
	$judul    		= $_POST['judul'];
    $tgl_berita     = $_POST['tgl_berita'];
	$berita 		= $_POST['berita'];


	$update 	= "UPDATE tbl_berita SET judul='$judul', tgl_berita='$tgl_berita', berita='$berita' WHERE id_berita='$id_berita'";
	$updateberita	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updateberita)
    	{
    		echo "<br><br><br><strong><center><i>Berita berhasil diedit!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?content=berita">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>