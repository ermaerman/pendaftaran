<?php

	include 'koneksi.php';

	$id_galeri = $_GET ['id_galeri'];

	$hapus 	 = "DELETE FROM tbl_galeri WHERE id_galeri='$id_galeri'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Foto berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/admin.php?content=galeri'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Galeri Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

?>