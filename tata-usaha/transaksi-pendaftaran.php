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
    <li class="active"><a href="#">Transaksi Keuangan</a> / Pendaftaran</li>
  </ol>

</div>
  <div class="col-md-10" style="min-height:500px">
  <h3><b>Transaksi Keuangan</b> Pendaftaran</h3>
    <hr>
     <form class="form-inline" action="" method="POST">
    <div class="form-group">
      <input size="127px" type="text" name="pencarian" class="form-control" placeholder="Masukkan kode daftar">
      <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
      <a href="tu.php?content=transaksi-pendaftaran"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
      <a target ="_blank" role="button" href="print-transaksi-pendaftaran.php"><button type="button" class="btn btn-success"><i class="fa fa-print fa-fw"></i></button></a>  
    </div>
  </form>
   
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Daftar</th>
            <th>Bukti Pembayaran</th>
            <th>Validasi</th>
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
              $sql = "SELECT * FROM tbl_pembayaran WHERE b_daftar=1 AND kode_daftar LIKE '%$pencarian%' ORDER BY id_pembayaran DESC";
              $query = $sql;
              $queryJml = $sql;
            } else {
              $query = "SELECT * FROM tbl_pembayaran WHERE b_daftar=1 ORDER BY id_pembayaran DESC LIMIT $posisi, $batas ";
              $queryJml = "SELECT * FROM tbl_pembayaran WHERE b_daftar=1 ORDER BY id_pembayaran DESC";
              $no = $posisi + 1;
            }
          } else {
            $query = "SELECT * FROM tbl_pembayaran WHERE b_daftar=1 ORDER BY id_pembayaran DESC LIMIT $posisi, $batas ";
            $queryJml = "SELECT * FROM tbl_pembayaran WHERE b_daftar=1 ORDER BY id_pembayaran DESC";
            $no = $posisi + 1;
          }

            $querydata = mysqli_query($konek, $query)or die(mysqli_error($konek));
                    if(mysqli_num_rows($querydata) == 0){
                      echo '<tr><td colspan="8" align="center"><i>Tidak ada data!</i></td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($querydata)){
                      ?>
                        <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data['kode_daftar'] ?></td>
                        <td><?php echo($data['bukti_daftar']);?></td>
                        <td><?php if ($data['validasi_daftar']==0) echo "<i class='fa fa-times fa-fw'></i>"; else echo "<i class='fa fa-check fa-fw'></i>"; ?></td>
                        <td><a data-toggle="tooltip" data-placement="right" title="Validasi" href=tu.php?content=edit-konfirmasi-bayar-daftar&&id_pembayaran=<?php echo $data['id_pembayaran'] ?>><i class='fa fa-edit fa-fw'></i></a></td></tr>
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
                echo "<li><a href=\"tu.php?content=transaksi-pendaftaran&&hal=$i\">$i</a></li>";
              } else {
                echo "<li class=\"active\"><a>$i</a></li>";
              }
            }
            ?>
          </ul>
        </div>
        <?php
            }
            // $edit    = "SELECT COUNT(validasi_daftar) AS jumlah FROM tbl_pembayaran WHERE validasi_daftar='1'";
            // $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
            // $data    = mysqli_fetch_array($hasil);  

            // $jumlah  = $data['jumlah'];

            // $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
            // $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
            // $data    = mysqli_fetch_array($hasil);  

            // $pendaftaran = ceil($data['biaya_pendaftaran']);

            // $total1   = $jumlah * $pendaftaran;
            // echo '<br>';
            // echo '<hr>';
            //  echo '<table>';
            //  echo '<tr>';
            //  echo '<td width="300"><b>Total Keuangan Administrasi Pendaftaran</b></td><td>:</td> <td><i>Rp '.$total1.'</i></td></tr>';
            //  echo '</table>';
          ?>
          <br>
          <br>
          <form class="form-horizontal" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-2"><p align="left">Tahun Ajaran</p></label>
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
               <label class="control-label col-sm-2"><p align="left">Total Keuangan</p></label>
               <label class="control-label col-sm-1">:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="pendaftaran" id="total" readonly>
                  
                  </input>
              </div>
            </div>
          </form>
  </div>
</div>

<!-- Javascript untuk memanggil Kelas dari Tujuan dan Jumlah Pembayaran -->
<script type="text/javascript">

    $( "#tahun" ).change(function() {
      var tahun_pelajaran = $("#tahun").val();
      console.log(tahun);
      $.ajax({
        url: "./ajax_total_pendaftaran.php?tahun_pelajaran=" + tahun_pelajaran,
        success: function(result){
            console.log(result);
          $("#total").val(result);
        }
      });
    });
</script>