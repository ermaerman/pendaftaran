<br>
<br>
<br>
<br>

<div class="container">
  <ol class="breadcrumb">
    <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / Ukuran Baju</li>
  </ol>
  <h3><b>&nbsp;&nbsp;Halaman Ukuran Baju</b></h3>
      <hr>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <form class="form-horizontal" action="config/add-ukuran-baju.php" method="POST">
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Kode Daftar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input onkeypress="return hanyaAngka(event)" class="form-control" name="kode_daftar" type="text" placeholder="Masukkan kode daftar anda" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Masukkan Ukuran Baju</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input class="form-control" name="ukuran_baju" type="text" placeholder="Masukkan ukuran baju anda" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
            </div>
        </div>
</div>
  
<br>
<br>
<br>
<br>
     
</div>
  