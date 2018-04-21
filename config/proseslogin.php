<?php

	include "koneksi.php";

	$username  = $_POST["username"];
	$password  = md5($_POST["password"]);

	$query     ="SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";

	$login     = mysqli_query($konek,$query) or die(mysqli_error($konek));
	$jlhrecord = mysqli_num_rows($login);

	$data      = mysqli_fetch_array($login,MYSQLI_BOTH);

	$username  = $data['username'];
	$password  = $data['password'];
	$nama	   = $data['nama'];
	$level	   = $data['level'];


if($jlhrecord > 0){

	session_start();
	$_SESSION['id_user']=$id_user;
	$_SESSION['username']=$username;
	$_SESSION['nama']=$nama;
	$_SESSION['level']=$level;

	//redirect level
		if($level == admin){
			header('Location:../admin/admin.php?content=home-admin');
		}
		elseif ($level == tatausaha){
			header('Location:../tata-usaha/tu.php?content=home-tata-usaha');
		}
		elseif($level == kepalasekolah){
			header('Location:../kepala-sekolah/kepsek.php?content=home-kepala-sekolah');
		}
}

else{

	echo "<br><br><br><strong><center><i>Maaf anda gagal login. Mungkin Username atau Password yang anda masukkan salah.<br>Silahkan masukkan Username atau Password dengan benar!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../admin/index.php">';  
}

?>