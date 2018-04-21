<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_berita = $_GET['id_berita'];

    $edit    = "SELECT * FROM tbl_berita WHERE id_berita = '$id_berita'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>
<br>
<br>
<br>
<br>

<div class="container">
<div class="col-md-12" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu 2 Bekasi</a> / <a data-toggle="tooltip" data-placement="top" title="Halaman Berita" href="index.php?content=berita">Berita</a> / Lihat Berita Selengkapnya</li>
    </ol>
</div>

<div class="col-md-12" style="min-height:500px">
  <h3><b>Lihat Berita</b> Selengkapnya</h3>
    <hr>
    <br>

    <div class="thumbnail">
        <div class="caption">
            <h2 align="center"><b>" <?php echo $data['judul']; ?> "</b></h2>
            <hr>
            <p align="center"><img src="berita/<?php echo $data['gambar']; ?>"></p>
            <br>
            <p><?php echo $data['berita']; ?></p>
        </div>
    </div>
</div>
</div>