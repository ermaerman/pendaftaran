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
      font-size: 11px;
  }

  td {
    font-size: 14px;
  }

</style>

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="#">Transaksi Keuangan</a> / Uang Pangkal / Cicilan</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Transaksi Keuangan</b> Uang Pangkal Cicilan</h3>
  <hr>
     <form class="form-inline" action="" method="POST">
    <div class="form-group">
      <input size="127px" type="text" name="pencarian" class="form-control" placeholder="Masukkan kode daftar">
      <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
      <a href="tu.php?content=transaksi-cicilan"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
      <a target ="_blank" role="button" href="print-transaksi-cicilan.php"><button type="button" class="btn btn-success"><i class="fa fa-print fa-fw"></i></button></a>  
    </div>
  </form>
  
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Daftar</th>
            <th>Cicilan 1</th>
            <th>Bukti Cicilan 1</th>
            <th>Validasi Cicilan 1</th>
            <th>Cicilan 2</th>
            <th>Bukti Cicilan 2</th>
            <th>Validasi Cicilan 2</th>
            <th>Cicilan 3</th>
            <th>Bukti Cicilan 3</th>
            <th>Validasi Cicilan 3</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
                  include '../config/koneksi.php';
                  error_reporting(0);

                  $batas  = 10;
                  $hal    = @$_GET['hal'];
                  if (empty($hal)) {
                    $posisi = 0;
                    $hal    = 1;
                  } else {
                    $posisi = ($hal - 1) * $batas;
                  }
                  if($_SERVER['REQUEST_METHOD'] == "POST") {
                    $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT id_pembayaran, kode_daftar, b_pangkal_cicil1, bukti_pangkal_cicil1, validasi_pangkal_cicil1, b_pangkal_cicil2, bukti_pangkal_cicil2, validasi_pangkal_cicil2, b_pangkal_cicil3, bukti_pangkal_cicil3, validasi_pangkal_cicil3 FROM tbl_pembayaran WHERE b_pangkal_cicil1='1' AND kode_daftar LIKE '%$pencarian%' ORDER BY id_pembayaran DESC";
                      $query = $sql;
                      $queryJml = $sql;
                    } else {
                      $query = "SELECT id_pembayaran, kode_daftar, b_pangkal_cicil1, bukti_pangkal_cicil1, validasi_pangkal_cicil1, b_pangkal_cicil2, bukti_pangkal_cicil2, validasi_pangkal_cicil2, b_pangkal_cicil3, bukti_pangkal_cicil3, validasi_pangkal_cicil3 FROM tbl_pembayaran WHERE b_pangkal_cicil1='1' ORDER BY id_pembayaran DESC LIMIT $posisi, $batas ";
                      $queryJml = "SELECT id_pembayaran, kode_daftar, b_pangkal_cicil1, bukti_pangkal_cicil1, validasi_pangkal_cicil1, b_pangkal_cicil2, bukti_pangkal_cicil2, validasi_pangkal_cicil2, b_pangkal_cicil3, bukti_pangkal_cicil3, validasi_pangkal_cicil3 FROM tbl_pembayaran WHERE b_pangkal_cicil1='1' ORDER BY id_pembayaran DESC";
                      $no = $posisi + 1;
                    }
                  } else {
                    $query = "SELECT id_pembayaran, kode_daftar, b_pangkal_cicil1, bukti_pangkal_cicil1, validasi_pangkal_cicil1, b_pangkal_cicil2, bukti_pangkal_cicil2, validasi_pangkal_cicil2, b_pangkal_cicil3, bukti_pangkal_cicil3, validasi_pangkal_cicil3 FROM tbl_pembayaran WHERE b_pangkal_cicil1='1' ORDER BY id_pembayaran DESC LIMIT $posisi, $batas ";
                    $queryJml = "SELECT id_pembayaran, kode_daftar, b_pangkal_cicil1, bukti_pangkal_cicil1, validasi_pangkal_cicil1, b_pangkal_cicil2, bukti_pangkal_cicil2, validasi_pangkal_cicil2, b_pangkal_cicil3, bukti_pangkal_cicil3, validasi_pangkal_cicil3 FROM tbl_pembayaran WHERE b_pangkal_cicil1='1' ORDER BY id_pembayaran DESC";
                    $no = $posisi + 1;
                  }

            $querydata = mysqli_query($konek, $query)or die(mysqli_error());
                    if(mysqli_num_rows($querydata) == 0){
                      echo '<tr><td colspan="12" align="center"><i>Tidak ada data!</i></td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($querydata)){
                      ?>
                        <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data['kode_daftar'] ?></td>
                        <td><?php if ($data['b_pangkal_cicil1']==0) echo "Belum"; else echo "Sudah"; ?></td>
                        <td><?php echo $data['bukti_pangkal_cicil1'] ?></td>
                        <td><?php if ($data['validasi_pangkal_cicil1']==0) echo "Belum Konfirmasi"; else echo "Dikonfirmasi"; ?></td>
                        <td><?php if ($data['b_pangkal_cicil2']==0) echo "Belum"; else echo "Sudah"; ?></td>
                        <td><?php echo $data['bukti_pangkal_cicil2'] ?></td>
                        <td><?php if ($data['validasi_pangkal_cicil2']==0) echo "Belum Konfirmasi"; else echo "Dikonfirmasi"; ?></td>
                        <td><?php if ($data['b_pangkal_cicil3']==0) echo "Belum"; else echo "Sudah"; ?></td>
                        <td><?php echo $data['bukti_pangkal_cicil3'] ?></td>
                        <td><?php if ($data['validasi_pangkal_cicil3']==0) echo "Belum Konfirmasi"; else echo "Dikonfirmasi"; ?></td>
                        <td><a data-toggle="tooltip" data-placement="left" title="Edit" href=tu.php?content=edit-konfirmasi-bayar-cicilan&&kode_daftar=<?php echo $data['kode_daftar']?>><i class='fa fa-edit fa-fw'></i></a></td></tr>
                      <?php
                        $no++;
                      }
                    }

                ?>

        </tbody>
      </table>
    </form>
    <?php
     if($_SERVER['REQUEST_METHOD'] == "POST") {
            $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
        echo "<div style=\"float:left;\">";
        $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
        echo "Data Hasil Pencarian: <b>$jml</b>";
        echo "</div>";
      } else { ?>
        <div style="float:left;">
          <?php
          $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
          echo "Jumlah Data: <b>$jml</b>";
          ?>
        </div>
        <div style="float:right;">
          <ul class="pagination pagination-sm" style="margin: 0">
            <?php
            $jml_hal = ceil($jml / $batas);
            for ($i=1; $i <= $jml_hal; $i++) {
              if ($i != $hal) {
                echo "<li><a href=\"tu.php?content=transaksi-cicilan&&hal=$i\">$i</a></li>";
              } else {
                echo "<li class=\"active\"><a>$i</a></li>";
              }
            }
            ?>
          </ul>
        </div>
        <?php
      }
                      $edit    = "SELECT COUNT(validasi_pangkal_cicil1) AS jumlah FROM tbl_pembayaran WHERE validasi_pangkal_cicil1='1'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $jumlah  = $data['jumlah'];
                      // echo $jumlah;

                      $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $pangkal = $data['total_pangkal'];
                      // echo '<br>';
                      // echo $pangkal;

                      $cicil   = $pangkal / 3;
                      // echo '<br>';
                      // echo $cicil;

                      $total2   = ceil($jumlah * $cicil);

                      $edit    = "SELECT COUNT(validasi_pangkal_cicil2) AS jumlah FROM tbl_pembayaran WHERE validasi_pangkal_cicil2='1'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $jumlah  = $data['jumlah'];
                      // echo $jumlah;

                      $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $pangkal = $data['total_pangkal'];
                      // echo '<br>';
                      // echo $pangkal;

                      $cicil   = $pangkal / 3;
                      // echo '<br>';
                      // echo $cicil;

                      $total3   = ceil($jumlah * $cicil);

                      $edit    = "SELECT COUNT(validasi_pangkal_cicil3) AS jumlah FROM tbl_pembayaran WHERE validasi_pangkal_cicil3='1'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $jumlah  = $data['jumlah'];
                      // echo $jumlah;

                      $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $pangkal = $data['total_pangkal'];
                      // echo '<br>';
                      // echo $pangkal;

                      $cicil   = $pangkal / 3;
                      // echo '<br>';
                      // echo $cicil;

                      $total4   = ceil($jumlah * $cicil);

                      echo '<br>';
                      echo '<hr>';
                      echo '<table>';
                      echo '<tr>';
                      echo '<td width="300"><b>Total Keuangan Cicilan Pertama</b></td><td>:</td> <td><i>Rp '.$total2.'</i></td></tr>';
                      echo '<tr><td width="300"><b>Total Keuangan Cicilan Kedua</b></td><td>:</td> <td><i>Rp '.$total3.'</i></td>';
                      echo '</tr>';
                      echo '<tr><td width="300"><b>Total Keuangan Cicilan Ketiga</b></td><td>:</td> <td><i>Rp '.$total4.'</i></td>';
                      echo '</tr>';
                      echo '</table>';
    ?>
    <br>
    <br>
    <form class="form-horizontal" method="POST">
      <div class="form-group">
        <label class="control-label col-sm-4">Tahun Ajaran :</label>
        <div class="col-sm-6">
            <select class="form-control" name="id_tahun" id="tahun">
                <option>--Pilih Tujuan--</option>
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
      </div><!-- 
      <div class="form-group">
        <label class="control-label col-sm-4">Cicilan :</label>
        <div class="col-sm-6">
            <select class="form-control" name="cicilan" id="cicil">
                <option value="cicilan1">Cicilan Pertama</option>
                <option value="cicilan2">Cicilan Kedua</option>
                <option value="cicilan3">Cicilan Ketiga</option>
            </select>
        </div>
      </div> -->
      <div class="form-group">
        <label class=""></label>
        <div class="col-sm-6">
            <input class="form-control" name="cicil1" id="total1" readonly>
                
            </input>
        </div>
      </div>
      <div class="form-group">
        <label class=""></label>
        <div class="col-sm-6">
            <input class="form-control" name="cicil2" id="total2" readonly>
                
            </input>
        </div>
      </div>

      <div class="form-group">
        <label class=""></label>
        <div class="col-sm-6">
            <input class="form-control" name="cicil3" id="total3" readonly>
                
            </input>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran dari penumpang&kelas -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);

      $.ajax({
        url: "./ajax_total_cicilan.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#total1").val(result);
          // $("#total2").val(result);
          // $("#cicil3").val(result);
        }
      });
    });

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);

      $.ajax({
        url: "./ajax_total_cicilan2.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#total2").val(result);
        }
      });
    });
    
    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);

      $.ajax({
        url: "./ajax_total_cicilan3.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
           $("#total3").val(result);
        }
      });
    });
</script>