<style>

  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even){background-color: #bbdfed;}

  th {
      background-color: #3bacd6;
      color: white;
  }

  td {
    font-size: 14px;
  }

</style>

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="#">Transaksi Keuangan</a> / Detail Keuangan</li>
  </ol>
</div>
   
<div class="col-md-10" style="min-height:500px">
  <h3><b>Detail</b> Keuangan Proses Pendaftaran</h3>
    <hr>
          <form class="form-horizontal" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-3"></label>
              <label class="control-label col-sm-2"><p align="left">Tahun Pelajaran</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <select class="form-control" name="id_tahun" id="tahun">
                      <option>--Pilih Tahun Pelajaran--</option>
                      <?php
                      $tahun       = "SELECT * FROM tbl_tahun_pelajaran";
                      $queryTahun  = mysqli_query($konek,$tahun);
                      while ($dataTahun = mysqli_fetch_array($queryTahun)) { ?>
                          <option value="<?php echo $dataTahun['tahun_pelajaran'] ?>"><?php echo $dataTahun["tahun_pelajaran"] ?>
                          </option>
                      <?php
                      }
                      ?>
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
               <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Pendaftaran</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="pendaftaran" id="total" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Uang Gedung</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="uang_gedung" id="totaluanggedung" readonly>
                  
                  </input>
              </div>
            </div>
             <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Biaya MOS</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="biaya_mos" id="totalbiayamos" readonly>
                  
                  </input>
              </div>
            </div>
             <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Biaya SPP 1 Bulan</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="biaya_spp" id="totalbiayaspp" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Seragam Putih Abu</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="" id="totalseragamputihabu" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Seragam Olahraga</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="seragam_olahraga" id="totalseragamolahraga" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Seragam Batik</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="seragam_batik" id="totalseragambatik" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Seragam Pramuka</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="seragam_pramuka" id="totalseragampramuka" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Baju Muslim</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="baju_muslim" id="totalbajumuslim" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Topi</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="topi" id="totaltopi" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Dasi</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="dasi" id="totaldasi" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Ikat Pinggang</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="ikat_pinggang" id="totalikatpinggang" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">KBM Pramuka</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="kbm_pramuka" id="totalkbmpramuka" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">KBM Praktek</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="kbm_praktek" id="totalkbmpraktek" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">LKS</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="kbm_ekstra" id="totallks" readonly>
                  
                  </input>
              </div>
            </div>
            <!-- <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Total Pangkal</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="total_pangkal" id="totalpangkallunas" readonly>
                  
                  </input>
              </div>
            </div> -->
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Daftar Ulang 11</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="totaldu1" id="totaldu1" readonly>
                  
                  </input>
              </div>
            </div>
            <div class="form-group">
              <label class=""></label>
              <label class="control-label col-sm-3"></label>
               <label class="control-label col-sm-2"><p align="left">Daftar Ulang 12</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="totaldu2" id="totaldu2" readonly>
                  
                  </input>
              </div>
            </div>
          </form>
  </div>
  </div>


</div>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_daftar.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#total").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_uang_gedung.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totaluanggedung").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_biaya_mos.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totalbiayamos").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_biaya_spp.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totalbiayaspp").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_seragam_putih_abu.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totalseragamputihabu").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_seragam_olahraga.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totalseragamolahraga").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_seragam_batik.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totalseragambatik").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_seragam_pramuka.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totalseragampramuka").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_baju_muslim.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totalbajumuslim").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_topi.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totaltopi").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_dasi.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totaldasi").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_ikat_pinggang.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totalikatpinggang").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_kbm_pramuka.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totalkbmpramuka").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_kbm_praktek.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totalkbmpraktek").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_lks.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totallks").val(result);
        }
      });
    });
</script>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_lunas.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totalpangkallunas").val(result);
        }
      });
    });
</script>

<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_du1.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totaldu1").val(result);
        }
      });
    });
</script>

<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_du2.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#totaldu2").val(result);
        }
      });
    });
</script>