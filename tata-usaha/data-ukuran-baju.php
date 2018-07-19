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
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / Data Ukuran Baju</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Data</b> Ukuran Baju</h3>
    <hr>
       <form class="form-inline" action="" method="POST">
      <div class="form-group">
        <input size="127px" type="text" name="pencarian" class="form-control" placeholder="Masukkan kode daftar">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
        <a href="tu.php?content=data-ukuran-baju"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
        <a target ="_blank" role="button" href="print-data-ukuran-baju.php"><button type="button" class="btn btn-success"><i class="fa fa-print fa-fw"></i></button></a>  
      </div>
    </form>

    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Daftar</th>
            <th>Ukuran Baju</th>
            <th>Keterangan</th>
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
                $sql = "SELECT * FROM tbl_ukuran_baju WHERE kode_daftar LIKE '%$pencarian%' ORDER BY id_ukuran_baju DESC";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT * FROM tbl_ukuran_baju ORDER BY id_ukuran_baju DESC LIMIT $posisi, $batas ";
                $queryJml = "SELECT * FROM tbl_ukuran_baju ORDER BY id_ukuran_baju DESC";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT * FROM tbl_ukuran_baju ORDER BY id_ukuran_baju DESC LIMIT $posisi, $batas ";
              $queryJml = "SELECT * FROM tbl_ukuran_baju ORDER BY id_ukuran_baju DESC";
              $no = $posisi + 1;
            }


            $querydata = mysqli_query($konek, $query)or die(mysqli_error());
                    if(mysqli_num_rows($querydata) == 0){
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($querydata)){
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '<td>'.$data['ukuran_baju'].'</td>';
                        echo '<td>'.$data['keterangan'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="right" title="Edit Keterangan" href=tu.php?content=edit-keterangan&&kode_daftar='.$data['kode_daftar'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '</tr>';
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
                echo "<li><a href=\"tu.php?content=data-ukuran-baju&&hal=$i\">$i</a></li>";
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

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#3bacd6";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p align="center"><img src="../gambar/manda.png" alt="" height="100px" width="130px"></p>
            <p align="center"><font size="2px"><i>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</i></font></p>
            <h4 class="modal-title" align="center"><b>Tambahkan Tahun Pelajaran Baru</b></h4>
          </div>
          <div class="modal-body">
            <form action="../config/add-tahun-pelajaran.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="control-label col-sm-4">Tahun Pelajaran :</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="tahun_pelajaran" placeholder="Tahun Pelajaran" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-7" align="right">
                      <button class="btn btn-primary">Tambah</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
          </div>
      </div>
    </div>
  </div>
</div>
