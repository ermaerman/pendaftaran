<?php

	include 'koneksi.php';

	$id_request_kelas = $_GET ['id_request_kelas'];

	$hapus 	 = "DELETE FROM tbl_request_kelas WHERE id_request_kelas='$id_request_kelas'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../kepala-sekolah/kepsek.php?content=data-request-kelas'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }	

?>