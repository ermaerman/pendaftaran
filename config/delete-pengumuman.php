<?php

	include 'koneksi.php';

	$id_pengumuman = $_GET ['id_pengumuman'];

	$hapus 	 = "DELETE FROM tbl_pengumuman WHERE id_pengumuman='$id_pengumuman'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../tata-usaha/tu.php?content=update-pengumuman'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

?>