<!DOCTYPE html>
<html>
<head>
	<title>Print Kartu Ujian Masuk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="layout.css">
	<script src="bootstrap/jquery-3.2.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body onload="window.print()">

		<?php

			include 'config/koneksi.php';

			error_reporting();

			$kode_daftar    = $_GET['kode_daftar'];

			$query     = "SELECT * FROM tbl_data_calon_murid WHERE kode_daftar='$kode_daftar'";
			$cek       = mysqli_query($konek, $query)or die(mysqli_error($konek));
			$data      = mysqli_fetch_array($cek);

		?>

		<form class="form-horizontal" action="" method="POST">
	    <div class="panel-group">
	    <div class="panel panel-primary">
	      <div class="panel-heading"><p align="center"><b>KARTU UJIAN MASUK SMK MANDALAHAYU II BEKASI</b></p></div>
	      <div class="panel-body">
	        <table class="table">
	          <tr>
	          <td><br><p align="center">
	          			<img src="gambar/manda.png" height="100"><br>
	          			<font size="5px"><b>YAYASAN MANDALAHAYU</b></font><br>
	                  <font size="6px"><b>SMK MANDALAHAYU II BEKASI</b></font><br>Jl. Pengasinan Tengah No.99, Pengasinan, Rawalumbu, Kota Bks, Jawa Barat 17115</p><hr></td>
	          </tr>
	        </table>
	        <p align="center"><img height="160" width="125" src="foto/<?php echo $data['syarat_foto'] ?>""></p>
	        <br>
	        <br>
	     <table class="table table-bordered">  
	     	<tr>
	        <th width="200">Kode Daftar</th>
	        <td><i><?php echo $data['kode_daftar']; ?></i></td>
	      </tr> 
	      <tr>
	        <th>NISN</th>
	        <td><i><?php echo $data['nisn']; ?></i></td>
	      </tr>  
	       <tr>
	        <th>Nama Lengkap</th>
	        <td><i><?php echo $data['nama']; ?></i></td>
	      </tr>   
	      <tr>
	        <th>Tahun Pelajaran</th>
	        <td><i><?php echo $data['tahun_pelajaran']; ?></i></td>
	      </tr>
	      <tr>
	        <th>Program Studi</th>
	        <td><i><?php echo $data['prodi'] ?></i></td>
	      </tr> 
	      <tr>
	        <th>Tes Buta Warna</th>
	        <td><i></i></td>
	      </tr>  
	       <tr>
	        <th>Tes Urine / Bebas Narkoba</th>
	        <td><i></i></td>
	      </tr> 
	      <tr>
	        <th>Tes Fisik</th>
	        <td><i></i></td>
	      </tr>
	  </table>
	<p align="right">Bekasi, <?php
			date_default_timezone_set('Asia/Jakarta');
			echo date("d M Y");
			?>
		</p>
	</div>
</body>
</html>