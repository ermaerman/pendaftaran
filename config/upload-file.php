<?php

	error_reporting(0);
	
	include 'koneksi.php';

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

$simpan	= "INSERT INTO tbl_data_calon_murid VALUES ('','$target_nisn', '$target_ijazah', '$target_kk', '$target_akte' , '$target_foto', '$kode_daftar')";