<br>
<br>
<br>
<br>

<script type="text/javascript">
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
</script>



<div class="container">
  <ol class="breadcrumb">
    <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / <a href="#">Lainnya</a> / Konfirmasi Pembayaran</li>
  </ol>
  <h3><b>&nbsp;&nbsp;Konfirmasi</b> Pembayaran</h3>
  <hr>
      <div class="alert alert-info">
      <strong>Info!</strong><i> Bagi anda yang telah melakukan konfirmasi pembayaran silahkan tunggu sampai pembayaran dikonfirmasi oleh tata usaha. Klik <a data-toggle="tooltip" data-placement="top" title="Cek proses!" href="index.php?content=cek-proses">disini</a> untuk mengecek.<br><br>
      <p><i>No. Rekening: 999322332 (BNI) A.N. SMK Mandalahayu II Bekasi</i></p></i>
      </div>
  <br>
  <br>
  <br>
  <br>

  <form class="form-horizontal" action="config/add-konfirmasi-bayar.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id_pembayaran">
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
                  <label class="col-sm-2">Pembayaran</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="b_daftar" name="b_daftar">
                      <option>-- Pilih Pembayaran --</option>
                      <option value="pendaftaran">Pendaftaran</option>
                      <option value="pangkallunas">Uang Pangkal Lunas</option>
                      <option value="cicilpertama">Uang Pangkal Cicilan Pertama</option>
                      <option value="cicilkedua">Uang Pangkal Cicilan Kedua</option>
                      <option value="cicilketiga">Uang Pangkal Cicilan Ketiga</option>
                      <option value="daftarulang1">Daftar Ulang Naik Kelas 11</option>
                      <option value="daftarulang2">Daftar Ulang Naik Kelas 12</option>
                    </select>
                  </div>
                </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-2">Bukti Pembayaran</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-5">
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
        </div>
        <input type="hidden" name="validasi_daftar" value="0">
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <button class="btn btn-primary" type="submit" name="submit" value="Konfirmasi Pembayaran">Konfirmasi Pembayaran</button>
            </div>
        </div>
</div>

<br>
<br>
