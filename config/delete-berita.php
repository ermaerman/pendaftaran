<?php

	include 'koneksi.php';

	$id_berita = $_GET ['id_berita'];

	$hapus 	 = "DELETE FROM tbl_berita WHERE id_berita='$id_berita'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Berita berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/admin.php?content=berita'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }	

?>