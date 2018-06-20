<?php

	include 'koneksi.php';

    $id_request_kelas           = $_POST['id_request_kelas'];
    $nama_kelas                 = $_POST['nama_kelas'];
    $status                     = $_POST['status'];

    $update     = "UPDATE tbl_request_kelas SET nama_kelas='$nama_kelas', status='1' WHERE id_request_kelas='$id_request_kelas'";
	$update	    = mysqli_query($konek, $update)or die(mysqli_error());

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Berhasil Validasi!";
    		//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../kepala-sekolah/kepsek.php?content=data-request-kelas">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>
