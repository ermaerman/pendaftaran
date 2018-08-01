<?php

    // error_reporting(0);
    
    include 'koneksi.php';

    $kode_daftar  	   = $_POST['kode_daftar'];
    $kd_daftar  	   = $_GET['kode_daftar'];
    $thn_pelajaran     = $_POST['thn_pelajaran'];
    $thn_pelajaran2     = $_POST['thn_pelajaran2'];
    $thn_pelajaran3     = $_POST['thn_pelajaran3'];
    $kelas 			   = $_POST['kelas'];
    $keterangan 	   = $_POST['keterangan'];
    $tahun             = $_POST['tahun'];


   
    	$insert         = "INSERT INTO tbl_kelas VALUES ('','$thn_pelajaran3','$kode_daftar','3', '1','1','1','1')";
    	$simpan         = mysqli_query($konek, $insert)or die(mysqli_error($konek));
    	
    	$update 		= "UPDATE tbl_kelas SET lulus='1' WHERE kode_daftar='$kd_daftar'";
    	$edit           = mysqli_query($konek, $update)or die(mysqli_error($konek));

        $update         = "UPDATE tbl_kelas SET lulus='1' WHERE kode_daftar='$kode_daftar' AND tahun_pelajaran='$tahun'";
        $edit           = mysqli_query($konek, $update)or die(mysqli_error($konek));

         $update         = "UPDATE tbl_kelas SET lulus='1' WHERE kode_daftar='$kode_daftar' AND tahun_pelajaran='$thn_pelajaran2'";
        $edit           = mysqli_query($konek, $update)or die(mysqli_error($konek));

         $update         = "UPDATE tbl_kelas SET lulus='1' WHERE kode_daftar='$kode_daftar' AND tahun_pelajaran='$thn_pelajaran3'";
        $edit           = mysqli_query($konek, $update)or die(mysqli_error($konek));

         $update         = "UPDATE tbl_kelas SET lulus='1' WHERE kode_daftar='$kode_daftar' AND tahun_pelajaran='$thn_pelajaran'";
        $edit           = mysqli_query($konek, $update)or die(mysqli_error($konek));


    	echo "<br><br><br><strong><center><i>Anda berhasil menambahkan data naik kelas!";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=naik-kelas2">';	
    
   /* elseif ($keterangan=='11') {
    	$insert         = "INSERT INTO tbl_kelas VALUES ('','$thn_pelajaran','$kode_daftar','$kelas', '1','1','1')";
    	$simpan         = mysqli_query($konek, $insert)or die(mysqli_error($konek));

    	$update 		= "UPDATE tbl_kelas SET duabelas='1' WHERE kode_daftar='$kd_daftar'";
    	$edit           = mysqli_query($konek, $update)or die(mysqli_error($konek));
    	echo "<br><br><br><strong><center><i>Anda berhasil menambahkan data naik kelas!";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=naik-kelas">';	
    }*/
      

?>
