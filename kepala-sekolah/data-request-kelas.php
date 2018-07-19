<style>

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
        <li class="active"><a href="#">Home</a> / Data Request Kelas</li>
    </ol>
</div>
   
<div class="col-md-10" style="">
  	<h3><b>Data</b> Request Kelas</h3>
    <hr>
       <form class="form-inline" action="" method="POST">
      <div class="form-group">
        <input size="134x" type="text" name="pencarian" class="form-control" placeholder="Masukkan nama kelas">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
        <a href="kepsek.php?content=data-request-kelas"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a> 
      </div>
    </form>
</div>

<div class="col-md-10">
  <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Status</th>
            <th><center>Action</center></th>
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
                $sql = "SELECT * FROM tbl_request_kelas WHERE nama_kelas LIKE '%$pencarian%'";
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
                        <td><?php if ($data['status']==0) echo "Belum Dikonfirmasi"; else echo "Sudah Dikonfirmasi"; ?></td>
                        <?php
                         echo '<td  width="20"><center><a data-toggle="tooltip" data-placement="left" title="Edit Status" href=kepsek.php?content=edit-status-request-kelas&&id_request_kelas='.$data['id_request_kelas'].'><i class="fa fa-edit fa-fw"></i></a></center></td>';
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
                echo "<li><a href=\"kepsek.php?content=data-request-kelas&&hal=$i\">$i</a></li>";
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

