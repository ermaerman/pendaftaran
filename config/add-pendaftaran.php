<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$tahun_pelajaran					= $_POST["tahun_pelajaran"];
	$prodi								= $_POST["prodi"];
	$nisn								= $_POST["nisn"];
	$nama								= $_POST["nama"];
	$nama_panggilan						= $_POST["nama_panggilan"];
	$jenis_kelamin						= $_POST["jenis_kelamin"];
	$tempat_lahir						= $_POST["tempat_lahir"];
	$tgl_lahir							= $_POST["tgl_lahir"];
	$agama								= $_POST["agama"];
	$kewarganegaraan					= $_POST["kewarganegaraan"];
	$anak_ke							= $_POST["anak_ke"];
	$status_perwalian					= $_POST["status_perwalian"];
	$perwalian_oleh						= $_POST["perwalian_oleh"];
	$jml_saudara_kandung				= $_POST["jml_saudara_kandung"];
	$jml_saudara_tiri					= $_POST["jml_saudara_tiri"];
	$jml_saudara_angkat					= $_POST["jml_saudara_angkat"];
	$status_keluarga					= $_POST["status_keluarga"];
	$bahasa								= $_POST["bahasa"];
	$alamat								= $_POST["alamat"];
	$telepon_rumah						= $_POST["telepon_rumah"];
	$status_tinggal						= $_POST["status_tinggal"];
	$jarak								= $_POST["jarak"];
	$transportasi						= $_POST["transportasi"];
	$asal_sekolah						= $_POST["asal_sekolah"];
	$nomor_ijazah						= $_POST["nomor_ijazah"];
	$tgl_ijazah							= $_POST["tgl_ijazah"];
	$lama_belajar						= $_POST["lama_belajar"];
	$jml_un								= $_POST["jml_un"];
	$berat_badan						= $_POST["berat_badan"];
	$tinggi_badan						= $_POST["tinggi_badan"];
	$goldar								= $_POST["goldar"];
	$penyakit							= $_POST["penyakit"];
	$kelainan							= $_POST["kelainan"];
	$nama_ayah							= $_POST["nama_ayah"];
	$tempat_lahir_ayah					= $_POST["tempat_lahir_ayah"];
	$tgl_lahir_ayah						= $_POST["tgl_lahir_ayah"];
	$pekerjaan_ayah						= $_POST["pekerjaan_ayah"];
	$penghasilan_ayah					= $_POST["penghasilan_ayah"];
	$pendidikan_ayah					= $_POST["pendidikan_ayah"];
	$kewarganegaraan_ayah				= $_POST["kewarganegaraan_ayah"];
	$nama_ibu							= $_POST["nama_ibu"];
	$tempat_lahir_ibu					= $_POST["tempat_lahir_ibu"];
	$tgl_lahir_ibu						= $_POST["tgl_lahir_ibu"];
	$pekerjaan_ibu						= $_POST["pekerjaan_ibu"];
	$penghasilan_ibu					= $_POST["penghasilan_ibu"];
	$pendidikan_ibu						= $_POST["pendidikan_ibu"];
	$kewarganegaraan_ibu				= $_POST["kewarganegaraan_ibu"];
	$alamat_orangtua					= $_POST["alamat_orangtua"];
	$nomor_hp							= $_POST["nomor_hp"];
	$pengeluaran						= $_POST["pengeluaran"];
	$jml_keluarga_kerja 				= $_POST["jml_keluarga_kerja"];
	$jml_keluarga_menikah 				= $_POST["jml_keluarga_menikah"];
	$nama_wali 							= $_POST["nama_wali"];
	$tempat_lahir_wali 					= $_POST["tempat_lahir_wali"];
	$tgl_lahir_wali 					= $_POST["tgl_lahir_wali"];
	$pekerjaan_wali 					= $_POST["pekerjaan_wali"];
	$penghasilan_wali 					= $_POST["penghasilan_wali"];
	$pendidikan_wali 					= $_POST["pendidikan_wali"];
	$kewarganegaraan_wali 				= $_POST["kewarganegaraan_wali"];
	$alamat_wali 						= $_POST["alamat_wali"];
	$nomor_hp_wali 						= $_POST["nomor_hp_wali"];
	$pengeluaran_wali 					= $_POST["pengeluaran_wali"];
	$jml_wali_kerja 					= $_POST["jml_wali_kerja"];
	$jml_wali_menikah 					= $_POST["jml_wali_menikah"];
	$kesenian		 					= $_POST["kesenian"];
	$olahraga		 					= $_POST["olahraga"];
	$organisasi		 					= $_POST["organisasi"];
	$hasta_karya						= $_POST["hasta_karya"];
	$bakat_lulus						= $_POST["bakat_lulus"];
	$cita_cita							= $_POST["cita_cita"];
	$tgl_daftar							= $_POST["tgl_daftar"];
	$kode_daftar						= mt_rand(1000,9999);

	//UPLOADS NISN
	$target_dirnisn = "../nisn/";
	$target_nisn 	= $target_dirnisn . basename($_FILES["fileToUploadNisn"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_nisn,PATHINFO_EXTENSION);
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUploadNisn"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check file size
	if ($_FILES["fileToUploadNisn"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
	&& $imageFileType != "GIF" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUploadNisn"]["tmp_name"], $target_nisn)) {
	        echo "The file ". basename( $_FILES["fileToUploadNisn"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

	

	//UPLOADS IJAZAH
	$target_dirijazah = "../ijazah/";
	$target_ijazah 	= $target_dirijazah . basename($_FILES["fileToUploadIjazah"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_ijazah,PATHINFO_EXTENSION);
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUploadIjazah"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	
	// Check file size
	if ($_FILES["fileToUploadIjazah"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
	&& $imageFileType != "GIF" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUploadIjazah"]["tmp_name"], $target_ijazah)) {
	        echo "The file ". basename( $_FILES["fileToUploadIjazah"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

	if ($uploadOk == 1){
		$target_ijazah 	  = $target_dirijazah . basename($_FILES["fileToUploadIjazah"]["name"]);
	}
	else {
		$target_ijazah 	  = 0;
	}

	//UPLOADS KK
	$target_dirkk = "../kartu-keluarga/";
	$target_kk 	  = $target_dirkk . basename($_FILES["fileToUploadKk"]["name"]);
	$uploadOk     = 1;
	$imageFileType = pathinfo($target_kk,PATHINFO_EXTENSION);
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUploadKk"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	
	// Check file size
	if ($_FILES["fileToUploadKk"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
	&& $imageFileType != "GIF" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUploadKk"]["tmp_name"], $target_kk)) {
	        echo "The file ". basename( $_FILES["fileToUploadKk"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

	if ($uploadOk == 1){
		$target_kk 	  = $target_dirkk . basename($_FILES["fileToUploadKk"]["name"]);
	}
	else {
		$target_kk 	  = 0;
	}

	//UPLOADS AKTE
	$target_dirakte = "../akte/";
	$target_akte 	= $target_dirakte . basename($_FILES["fileToUploadAkte"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_akte,PATHINFO_EXTENSION);
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUploadAkte"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	
	// Check file size
	if ($_FILES["fileToUploadAkte"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
	&& $imageFileType != "GIF" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUploadAkte"]["tmp_name"], $target_akte)) {
	        echo "The file ". basename( $_FILES["fileToUploadAkte"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
	if ($uploadOk == 1){
		$target_akte 	  = $target_dirakte . basename($_FILES["fileToUploadAkte"]["name"]);
	}
	else {
		$target_akte 	  = 0;
	}

	//UPLOADS FOTO
	$target_dirfoto   = "../foto/";
	$target_foto 	  = $target_dirfoto . basename($_FILES["fileToUploadFoto"]["name"]);
	$uploadOk         = 1;
	$imageFileType    = pathinfo($target_foto,PATHINFO_EXTENSION);
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUploadFoto"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	
	// Check file size
	if ($_FILES["fileToUploadFoto"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
	&& $imageFileType != "GIF" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUploadFoto"]["tmp_name"], $target_foto)) {
	        echo "The file ". basename( $_FILES["fileToUploadFoto"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

	if ($uploadOk == 1){
		$target_foto 	  = $target_dirfoto . basename($_FILES["fileToUploadFoto"]["name"]);
	}
	else {
		$target_foto 	  = 0;
	} 

	$simpan	= "INSERT INTO tbl_data_calon_murid VALUES ('','$tahun_pelajaran', '$prodi', '$nisn', '$nama', '$nama_panggilan', '$jenis_kelamin', '$tempat_lahir', '$tgl_lahir', '$agama', '$kewarganegaraan', '$anak_ke', '$status_perwalian', '$perwalian_oleh', '$jml_saudara_kandung', '$jml_saudara_tiri', '$jml_saudara_angkat', '$status_keluarga', '$bahasa', '$alamat', '$telepon_rumah', '$status_tinggal', '$jarak', '$transportasi', '$asal_sekolah', '$nomor_ijazah', '$tgl_ijazah', '$lama_belajar', '$jml_un', '$berat_badan', '$tinggi_badan', '$goldar', '$penyakit', '$kelainan', '$nama_ayah', '$tempat_lahir_ayah', '$tgl_lahir_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$pendidikan_ayah', '$kewarganegaraan_ayah', '$nama_ibu', '$tempat_lahir_ibu', '$tgl_lahir_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$pendidikan_ibu', '$kewarganegaraan_ibu', '$alamat_orangtua', '$nomor_hp', '$pengeluaran', '$jml_keluarga_kerja', '$jml_keluarga_menikah', '$nama_wali', '$tempat_lahir_wali', '$tgl_lahir_wali', '$pekerjaan_wali', '$penghasilan_wali', '$pendidikan_wali', '$kewarganegaraan_wali', '$alamat_wali', '$nomor_hp_wali', '$pengeluaran_wali', '$jml_wali_kerja', '$jml_wali_menikah', '$kesenian', '$olahraga', '$organisasi', '$hasta_karya', '$bakat_lulus', '$cita_cita', '$tgl_daftar', '$target_nisn', '$target_ijazah', '$target_kk', '$target_akte' , '$target_foto', '$kode_daftar','0')";

	$masuk	= mysqli_query($konek,$simpan)or die(mysqli_error($konek));

	
	//query untuk memanggil data yang tersimpan di tabel data calon murid mengambil dr id yang terakhir yang tersimpan.
		$querykode 				= "SELECT * FROM tbl_data_calon_murid WHERE nama='$nama' ORDER BY id_calon_murid DESC LIMIT 1";
		$cekquery				= mysqli_query($konek, $querykode)or die(mysqli_error($konek));
		$data 					= mysqli_fetch_array($cekquery);


	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='0; URL=../index.php?content=kode_daftar&&id_calon_murid=$data[id_calon_murid]'>"; 

?>