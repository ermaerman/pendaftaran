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
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / Data LKS</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Data</b> LKS</h3>
    <hr>
       <form class="form-inline" action="" method="POST">
      <div class="form-group">
        <input size="134px" type="text" name="pencarian" class="form-control" placeholder="Masukkan kode daftar">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
        <a href="tu.php?content=data-buku"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
        <!-- a target ="_blank" role="button" href="print-data-buku.php"><button type="button" class="btn btn-success"><i class="fa fa-print fa-fw"></i></button></a> -->  
      </div>
    </form>

    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>ID</th>
            <th>Kode Daftar</th>
            <th>Nama</th>
            <th>LKS</th>
            <th>Keterangan</th>
            <th>Status</th>
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
                $sql = "SELECT DISTINCT tbl_lks.id_lks, tbl_lks.kode_daftar, tbl_lks.lks, tbl_lks.keterangan, tbl_lks.status_buku, tbl_data_calon_murid.kode_daftar, tbl_data_calon_murid.nama FROM tbl_lks, tbl_data_calon_murid WHERE tbl_data_calon_murid.kode_daftar=tbl_lks.kode_daftar AND tbl_lks.kode_daftar LIKE '%$pencarian%'";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT DISTINCT tbl_lks.id_lks, tbl_lks.kode_daftar, tbl_lks.lks, tbl_lks.keterangan, tbl_lks.status_buku, tbl_data_calon_murid.kode_daftar, tbl_data_calon_murid.nama FROM tbl_lks, tbl_data_calon_murid WHERE tbl_data_calon_murid.kode_daftar=tbl_lks.kode_daftar LIMIT $posisi, $batas ";
                $queryJml = "SELECT DISTINCT tbl_lks.id_lks, tbl_lks.kode_daftar, tbl_lks.lks, tbl_lks.keterangan, tbl_lks.status_buku, tbl_data_calon_murid.kode_daftar, tbl_data_calon_murid.nama FROM tbl_lks, tbl_data_calon_murid WHERE tbl_data_calon_murid.kode_daftar=tbl_lks.kode_daftar";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT DISTINCT tbl_lks.id_lks, tbl_lks.kode_daftar, tbl_lks.lks, tbl_lks.keterangan, tbl_lks.status_buku, tbl_data_calon_murid.kode_daftar, tbl_data_calon_murid.nama FROM tbl_lks, tbl_data_calon_murid WHERE tbl_data_calon_murid.kode_daftar=tbl_lks.kode_daftar LIMIT $posisi, $batas ";
              $queryJml = "SELECT DISTINCT tbl_lks.id_lks, tbl_lks.kode_daftar, tbl_lks.lks, tbl_lks.keterangan, tbl_lks.status_buku, tbl_data_calon_murid.kode_daftar, tbl_data_calon_murid.nama FROM tbl_lks, tbl_data_calon_murid WHERE tbl_data_calon_murid.kode_daftar=tbl_lks.kode_daftar";
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
                        echo '<td>'.$data['id_lks'].'</td>';
                        echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['lks'].'</td>';
                        echo '<td>'.$data['keterangan'].'</td>';
                        echo '<td>'.$data['status_buku'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="right" title="Edit Keterangan" href=tu.php?content=edit-buku&&id_lks='.$data['id_lks'].'&&kode_daftar='.$data['kode_daftar'].'><i class="fa fa-edit fa-fw"></i></a></td>';
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
                echo "<li><a href=\"tu.php?content=data-buku&&hal=$i\">$i</a></li>";
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
</div>
