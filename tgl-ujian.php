<?php

	
	include 'config/koneksi.php';

	$kode_daftar    = $_GET['kode_daftar'];
	$kode_dftr    	= $_POST['kode_daftar'];

	$query     = "SELECT * FROM tbl_data_calon_murid WHERE kode_daftar='$kode_daftar'";
	$cek       = mysqli_query($konek, $query)or die(mysqli_error($konek));
	$data      = mysqli_fetch_array($cek);


?>
<br>
<br>
<br>
<br>


<body>
	<div class="container">
	 	<ol class="breadcrumb">
	        <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / Perihal Ujian Masuk</li>
	    </ol>
	    	<h3><b>&nbsp;&nbsp;Perihal</b> Ujian Masuk</h3>
	      	<hr>
	      	<div class="alert alert-info">
		  <strong>Info!</strong> <i>Hallo, terimakasih karena anda telah melunasi biaya administrasi pendaftaran<br>Berikut ini adalah informasi yang harus kamu ketahui:</i>
	</div>
		<form class="form-horizontal" action="#" method="POST">
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
	        <th>Kode Daftar</th>
	        <td width="500"><i><?php echo $data['kode_daftar']; ?></i></td>
	      </tr> 
	      <tr>
	        <th width="100">NISN</th>
	        <td width="500"><i><?php echo $data['nisn']; ?></i></td>
	      </tr>  
	       <tr>
	        <th>Nama Lengkap</th>
	        <td width="500"><i><?php echo $data['nama']; ?></i></td>
	      </tr>   
	      <tr>
	        <th>Tahun Pelajaran</th>
	        <td width="500"><i><?php echo $data['tahun_pelajaran']; ?></i></td>
	      </tr>
	      <tr>
	        <th>Program Studi</th>
	        <td width="500"><i><?php echo $data['prodi'] ?></i></td>
	      </tr> 
	      <tr>
	        <th>Tes Buta Warna</th>
	        <td width="500"><i></i></td>
	      </tr>  
	       <tr>
	        <th>Tes Urine / Bebas Narkoba</th>
	        <td width="500"><i></i></td>
	      </tr> 
	      <tr>
	        <th>Tes Fisik</th>
	        <td width="500"><i></i></td>
	      </tr>
	  </table>
	<p align="right">Bekasi, <?php
			date_default_timezone_set('Asia/Jakarta');
			echo date("d M Y");
			?>
		</p>
	</div>
		</div>
		<br>
		<p align="right"><a href="print-kartu.php?kode_daftar=<?php echo $kode_daftar ?>" target ="_blank" role="button" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span> &nbsp;Print Kartu Ujian</button></a></p>
		</div>
		</div>	
</body>



  