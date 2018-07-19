<style>

  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      text-align: left;
      padding: 7px;
  }

  tr:nth-child(even){background-color: #bbdfed;}

  th {
      background-color: #3bacd6;
      color: white;
      font-size: 12px;
  }

  td {
    font-size: 14px;
  }

</style>

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="#">Transaksi Keuangan</a> / Daftar Ulang</li>
  </ol>

</div>
  <div class="col-md-10" style="min-height:500px">
  <h3><b>Transaksi Keuangan</b> Daftar Ulang</h3>
    <hr>
       <form class="form-inline" action="" method="POST">
      <div class="form-group">
        <input size="127px" type="text" name="pencarian" class="form-control" placeholder="Masukkan kode daftar">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
        <a href="tu.php?content=daftar-ulang"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
        <a target ="_blank" role="button" href="print-transaksi-daftar-ulang.php"><button type="button" class="btn btn-success"><i class="fa fa-print fa-fw"></i></button></a>  
      </div>
    </form>
  
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Daftar</th>
            <th>Bukti Daftar Ulang 11</th>
            <th>Validasi Daftar Ulang 11</th>
            <th>Bukti Daftar Ulang 12</th>
            <th>Validasi Daftar Ulang 12</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            error_reporting(0);
            include '../config/koneksi.php';
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
                $sql = "SELECT * FROM tbl_pembayaran WHERE status_pembayaran=1 AND kode_daftar LIKE '%$pencarian%' ORDER BY id_pembayaran DESC";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT * FROM tbl_pembayaran WHERE status_pembayaran=1 ORDER BY id_pembayaran DESC LIMIT $posisi, $batas ";
                $queryJml = "SELECT * FROM tbl_pembayaran WHERE status_pembayaran=1 ORDER BY id_pembayaran DESC";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT * FROM tbl_pembayaran WHERE status_pembayaran=1 ORDER BY id_pembayaran DESC LIMIT $posisi, $batas ";
              $queryJml = "SELECT * FROM tbl_pembayaran WHERE status_pembayaran=1 ORDER BY id_pembayaran DESC";
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
                        <td><?php echo($data['bukti_daftar_ulang1']);?></td>
                        <td><?php if ($data['validasi_daftar_ulang1']==0) echo "Belum Dikonfirmasi"; else echo "Dikonfirmasi"; ?></td>
                        <td><?php echo($data['bukti_daftar_ulang2']);?></td>
                        <td><?php if ($data['validasi_daftar_ulang2']==0) echo "Belum Dikonfirmasi"; else echo "Dikonfirmasi"; ?></td>
                        <td><a data-toggle="tooltip" data-placement="right" title="Validasi" href=tu.php?content=edit-konfirmasi-daftar-ulang&&id_pembayaran=<?php echo $data['id_pembayaran'] ?>><i class='fa fa-edit fa-fw'></i></a></td></tr>
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
    ?>
  </div>
</div>
