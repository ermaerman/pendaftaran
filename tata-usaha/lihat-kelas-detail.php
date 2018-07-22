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
      font-size: 12px;
  }

  td {
    font-size: 14px;
  }

</style>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="#">Kelas</a> / <a href="tu.php?content=lihat-kelas">Kelas</a> / Lihat Kelas Detail</li>
    </ol>
</div>
   
<div class="col-md-10" style="">
    <h3><b>Lihat</b> Kelas Detail</h3>
    <hr>
       <form class="form-inline" action="" method="POST">
      <div class="form-group">
        <input size="127px" type="text" name="pencarian" class="form-control" placeholder="Masukkan kode daftar atau nama murid">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
        <a href="tu.php?content=lihat-kelas-detail"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
         <a href="tu.php?content=lihat-kelas"><button type="button" class="btn btn-default"><i class="fa fa-undo fa-fw"></i></button></a>
      </div>
    </form>
</div>

<div class="col-md-10">
  <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>ID</th>
            <th>Tahun Pelajaran</th>
            <th>Kode Daftar</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
          <?php

            include '../config/koneksi.php';
             //error_reporting(0);

             $id_request_kelas = $_GET['id_request_kelas'];
             echo $id_request_kelas;

            $batas  = 8;
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
                $sql = "SELECT tbl_kelas.id_request_kelas, tbl_request_kelas.nama_kelas, tbl_kelas.kode_daftar, tbl_data_calon_murid.nama, tbl_data_calon_murid.tahun_pelajaran, tbl_request_kelas.nama_kelas FROM tbl_kelas, tbl_data_calon_murid, tbl_request_kelas WHERE tbl_kelas.id_request_kelas = '$id_request_kelas' AND tbl_data_calon_murid.kode_daftar = tbl_kelas.kode_daftar AND tbl_kelas.id_request_kelas = tbl_request_kelas.id_request_kelas AND tbl_kelas.kode_daftar LIKE '%$pencarian%' OR tbl_data_calon_murid.nama LIKE '%$pencarian%' OR tbl_kelas.id_request_kelas LIKE '%$pencarian%'";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT tbl_kelas.id_request_kelas, tbl_request_kelas.nama_kelas, tbl_kelas.kode_daftar, tbl_data_calon_murid.nama, tbl_data_calon_murid.tahun_pelajaran, tbl_request_kelas.nama_kelas FROM tbl_kelas, tbl_data_calon_murid, tbl_request_kelas WHERE tbl_kelas.id_request_kelas = '$id_request_kelas' AND tbl_data_calon_murid.kode_daftar = tbl_kelas.kode_daftar AND tbl_kelas.id_request_kelas = tbl_request_kelas.id_request_kelas LIMIT $posisi, $batas ";
                $queryJml = "SELECT tbl_kelas.id_request_kelas, tbl_request_kelas.nama_kelas, tbl_kelas.kode_daftar, tbl_data_calon_murid.nama, tbl_data_calon_murid.tahun_pelajaran, tbl_request_kelas.nama_kelas FROM tbl_kelas, tbl_data_calon_murid, tbl_request_kelas WHERE tbl_kelas.id_request_kelas = '$id_request_kelas' AND tbl_data_calon_murid.kode_daftar = tbl_kelas.kode_daftar AND tbl_kelas.id_request_kelas = tbl_request_kelas.id_request_kelas";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT tbl_kelas.id_request_kelas, tbl_request_kelas.nama_kelas, tbl_kelas.kode_daftar, tbl_data_calon_murid.nama, tbl_data_calon_murid.tahun_pelajaran, tbl_request_kelas.nama_kelas FROM tbl_kelas, tbl_data_calon_murid, tbl_request_kelas WHERE tbl_kelas.id_request_kelas = '$id_request_kelas' AND tbl_data_calon_murid.kode_daftar = tbl_kelas.kode_daftar AND tbl_kelas.id_request_kelas = tbl_request_kelas.id_request_kelas LIMIT $posisi, $batas ";
              $queryJml = "SELECT tbl_kelas.id_request_kelas, tbl_request_kelas.nama_kelas, tbl_kelas.kode_daftar, tbl_data_calon_murid.nama, tbl_data_calon_murid.tahun_pelajaran, tbl_request_kelas.nama_kelas FROM tbl_kelas, tbl_data_calon_murid, tbl_request_kelas WHERE tbl_kelas.id_request_kelas = '$id_request_kelas' AND tbl_data_calon_murid.kode_daftar = tbl_kelas.kode_daftar AND tbl_kelas.id_request_kelas = tbl_request_kelas.id_request_kelas";
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
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['id_calon_murid'].'</td>';
                        echo '<td>'.$data['tahun_pelajaran'].'</td>';
                        echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        ?>
                        <td>
                          <?php
                            
                            $id_request_kelas = $data['id_request_kelas'];
                            $query_kelas = "SELECT * FROM tbl_request_kelas WHERE id_request_kelas = '$id_request_kelas'";
                            $hasil = mysqli_query($konek, $query_kelas)or die(mysqli_error());
                            $tampil = mysqli_fetch_array($hasil);

                            echo $tampil['nama_kelas'];
                          ?> 
                        </td>
                        <?php
                        // echo '<td>'.$data['id_request_kelas']=.'</td>';
                        echo '<td  width="20"><center><a data-toggle="tooltip" data-placement="left" title="Edit Kelas" href=tu.php?content=edit-murid&&id_calon_murid='.$data['id_calon_murid'].'><i class="fa fa-bars fa-fw"></i></a></center></td>';
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
                echo "<li><a href=\"admin.php?content=lihat-kelas&&hal=$i\">$i</a></li>";
              } else {
                echo "<li class=\"active\"><a>$i</a></li>";
              }
            }
          }
            ?>  
          </ul>
        </div>
</div>