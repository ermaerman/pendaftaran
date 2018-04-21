<?php

	include 'koneksi.php';

	$id_biaya = $_GET['id_biaya'];

	$hapus 	 = "DELETE FROM tbl_biaya WHERE id_biaya='$id_biaya'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../tata-usaha/tu.php?content=update-biaya'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }	

?>