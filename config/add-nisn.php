<?php

	error_reporting(0);
    
    include 'koneksi.php';

	$kode_daftar    = $_POST['kode_daftar'];

    $target_dir = "../nisn/";
    $target_file = $target_dir . basename($_FILES["fileToUploadNisn"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
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
    if ($_FILES["fileToUploadNisn"]["size"] > 50000000) {
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
        if (move_uploaded_file($_FILES["fileToUploadNisn"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUploadNisn"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


	$update 	= "UPDATE tbl_data_calon_murid SET syarat_nisn='$target_file' WHERE kode_daftar='$kode_daftar'";
	$updatenisn	= mysqli_query($konek, $update)or die(mysqli_error($konek));

	if ($updatenisn)
    	{
    		echo "<br><br><br><strong><center><i>Berhasil upload NISN!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?content=upload-file">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>