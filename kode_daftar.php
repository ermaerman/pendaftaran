<?php
  
  $id_calon_murid = $_GET['id_calon_murid'];

  $query     = "SELECT * FROM tbl_data_calon_murid WHERE id_calon_murid='$id_calon_murid'";
  $cek       = mysqli_query($konek, $query)or die(mysqli_error($konek));
  $data      = mysqli_fetch_array($cek);

?>

<br>
<br>
<br>
<br>

<div class="container">
  <ol class="breadcrumb">
    <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / Kode Daftar</li>
  </ol>
    <h3><b>&nbsp;&nbsp;Notifikasi</b> Kode Daftar</h3>
    <hr>
    <br>
    <br>
   
    <h2 align="center">Hallo, <b><?php echo $data['nama'] ?></b>! Pendaftaran anda telah berhasil.</h2>
    <h5 align="center">Terimakasih telah mendaftar sebagai <b>Calon Murid</b> <a data-toggle="tooltip" data-placement="right" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a>. </h5>
    <p align="center">Berikut adalah <b>kode daftar</b> anda:</p>
    <h1 align="center"><b><font size="300px"><?php echo $data['kode_daftar'] ?></font></b></h1><br>
    <p align="center">Harap simpan baik-baik kode daftar anda. Kode tersebut digunakan untuk <a data-toggle="tooltip" data-placement="top" title="Cek Proses" href="index.php?content=cek-proses">cek proses</a> serta <a data-toggle="tooltip" data-placement="top" title="Konfirmasi Pembayaran" href="index.php?content=konfirmasi-pembayaran">konfirmasi pembayaran</a> anda.</p>
    <p align="center">Klik <a data-toggle="tooltip" data-placement="bottom" title="Cek Proses" href="index.php?content=cek-proses">disini</a> untuk langkah selanjutnya.</p>
</div>
  
<br>
<br>

<?php
  
  $queryinput   = "INSERT INTO tbl_pembayaran (kode_daftar, tahun_pelajaran) SELECT kode_daftar, tahun_pelajaran FROM tbl_data_calon_murid ORDER BY id_calon_murid DESC LIMIT 1";
  $simpan       = mysqli_query($konek, $queryinput)or die(mysqli_error($konek)); 

?>