<?php

	include 'koneksi.php';

	$id_tanggal_ujian = $_GET ['id_tanggal_ujian'];

	$hapus 	 = "DELETE FROM tbl_tanggal_ujian WHERE id_tanggal_ujian='$id_tanggal_ujian'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Tanggal Ujian berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../tata-usaha/tu.php?content=update-tanggal'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }	

?>