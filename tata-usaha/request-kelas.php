<style type="text/css">

  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even){
    background-color: #bbdfed;
  }

  th {
      background-color: #3bacd6;
      color: white;
      font-size: 14px;
  }

  td {
    font-size: 14px;

  }

</style>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="#">Kelas</a> / Request Kelas</li>
    </ol>
</div>
   
<div class="col-md-10" style="">
  	<h3><b>Request</b> Kelas</h3>
    <hr>
       <form class="form-inline" action="" method="POST">
      <div class="form-group" style="float:right;">
        <input size="30px" type="text" name="pencarian" class="form-control" placeholder="Pencarian">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
        <a href="tu.php?content=request-kelas"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
      </div>
    </form>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-fw"></i>Request Kelas</button>
    <br>
    <br>
</div>

<div class="col-md-10">
  <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Jumlah Murid</th>
            <th>Status</th>
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
                        $sql = "SELECT * FROM tbl_request_kelas WHERE nama_kelas LIKE '%$pencarian%' OR jumlah_murid LIKE '%$pencarian%'";
                        $query = $sql;
                        $queryJml = $sql;
                      } else {
                        $query = "SELECT * FROM tbl_request_kelas LIMIT $posisi, $batas ";
                        $queryJml = "SELECT * FROM tbl_request_kelas";
                        $no = $posisi + 1;
                      }
                    } else {
                      $query = "SELECT * FROM tbl_request_kelas LIMIT $posisi, $batas ";
                      $queryJml = "SELECT * FROM tbl_request_kelas";
                      $no = $posisi + 1;
                    }

            
            $querydata = mysqli_query($konek, $query)or die(mysqli_error($konek));

                    if(mysqli_num_rows($querydata) == 0){
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($querydata)){
                        ?>
                        <tr>
                        <td><?php echo $no ?></td>
                        <td><?php
                        $kalimat = $data['nama_kelas'];
                        $kalimat_new = ucwords($kalimat);
                        echo $kalimat_new;
                        ?></td>
                        <td><?php echo $data['jumlah_murid'] ?></td>
                        <td><?php if ($data['status']==0) echo "Belum Dikonfirmasi"; else echo "Sudah Dikonfirmasi"; ?></td>
                      </tr>
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
                echo "<li><a href=\"tu.php?content=request-kelas&&hal=$i\">$i</a></li>";
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
            <h4 class="modal-title" align="center"><b>Request Kelas</b></h4>
          </div>
          <div class="modal-body">
            <form action="../config/add-request-kelas.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Nama Kelas</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                      <input type="text" style="text-transform: capitalize;" class="form-control" name="nama_kelas" placeholder="Nama Kelas" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Jumlah Murid</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                      <input type="number" min="1" max="30" class="form-control" name="jumlah_murid" placeholder="Jumlah Kelas" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-5"></label>
                  <div class="col-sm-6" align="right">
                      <button class="btn btn-primary">Request</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div></div>
