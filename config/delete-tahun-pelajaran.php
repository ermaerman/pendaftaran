<?php

	include 'koneksi.php';

	$id_tahun_pelajaran = $_GET ['id_tahun_pelajaran'];

	$hapus 	 = "DELETE FROM tbl_tahun_pelajaran WHERE id_tahun_pelajaran='$id_tahun_pelajaran'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../tata-usaha/tu.php?content=tahun-pelajaran'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>