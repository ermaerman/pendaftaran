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
        <li class="active"><a href="#">Kelas</a> / Naik Kelas XII</li>
    </ol>
</div>
   
<div class="col-md-10" style="">
    <h3><b>Naik</b> Kelas XII</h3>
    <hr>
       <form class="form-inline" action="" method="POST">
      <div class="form-group">
        <input size="134px" type="text" name="pencarian" class="form-control" placeholder="Masukkan kode daftar atau nama murid">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
        <a href="tu.php?content=naik-kelas2"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
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
             error_reporting(0);

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
                $sql = "SELECT tbl_kelas.kode_daftar, tbl_kelas.tahun_pelajaran, tbl_kelas.id_request_kelas, tbl_request_kelas.nama_kelas, tbl_request_kelas.keterangan, tbl_data_calon_murid.nama FROM tbl_kelas, tbl_request_kelas, tbl_data_calon_murid WHERE tbl_kelas.id_request_kelas!=0 AND tbl_request_kelas.keterangan='11' AND tbl_kelas.sepuluh='1' AND tbl_kelas.sebelas='1' AND tbl_kelas.duabelas='0' AND tbl_kelas.id_request_kelas = tbl_request_kelas.id_request_kelas AND tbl_data_calon_murid.kode_daftar = tbl_kelas.kode_daftar AND tbl_kelas.kode_daftar LIKE '%$pencarian%' OR tbl_data_calon_murid.nama LIKE '%$pencarian%' OR tbl_kelas.id_request_kelas LIKE '%$pencarian%' ORDER BY tbl_kelas.tahun_pelajaran DESC";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT tbl_kelas.kode_daftar, tbl_kelas.tahun_pelajaran, tbl_kelas.id_request_kelas, tbl_request_kelas.nama_kelas, tbl_request_kelas.keterangan, tbl_data_calon_murid.nama FROM tbl_kelas, tbl_request_kelas, tbl_data_calon_murid WHERE tbl_kelas.id_request_kelas!=0 AND tbl_request_kelas.keterangan='11' AND tbl_kelas.sepuluh='1' AND tbl_kelas.sebelas='1' AND tbl_kelas.duabelas='0' AND tbl_kelas.id_request_kelas = tbl_request_kelas.id_request_kelas AND tbl_data_calon_murid.kode_daftar = tbl_kelas.kode_daftar ORDER BY tbl_kelas.tahun_pelajaran DESC LIMIT $posisi, $batas ";
                $queryJml = "SELECT tbl_kelas.kode_daftar, tbl_kelas.tahun_pelajaran, tbl_kelas.id_request_kelas, tbl_request_kelas.nama_kelas, tbl_request_kelas.keterangan, tbl_data_calon_murid.nama FROM tbl_kelas, tbl_request_kelas, tbl_data_calon_murid WHERE tbl_kelas.id_request_kelas!=0 AND tbl_request_kelas.keterangan='11' AND tbl_kelas.sepuluh='1' AND tbl_kelas.sebelas='1' AND tbl_kelas.duabelas='0' AND tbl_kelas.id_request_kelas = tbl_request_kelas.id_request_kelas AND tbl_data_calon_murid.kode_daftar = tbl_kelas.kode_daftar ORDER BY tbl_kelas.tahun_pelajaran DESC";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT tbl_kelas.kode_daftar, tbl_kelas.tahun_pelajaran, tbl_kelas.id_request_kelas, tbl_request_kelas.nama_kelas, tbl_request_kelas.keterangan, tbl_data_calon_murid.nama FROM tbl_kelas, tbl_request_kelas, tbl_data_calon_murid WHERE tbl_kelas.id_request_kelas!=0 AND tbl_request_kelas.keterangan='11' AND tbl_kelas.sepuluh='1' AND tbl_kelas.sebelas='1' AND tbl_kelas.duabelas='0' AND tbl_kelas.id_request_kelas = tbl_request_kelas.id_request_kelas AND tbl_data_calon_murid.kode_daftar = tbl_kelas.kode_daftar ORDER BY tbl_kelas.tahun_pelajaran DESC LIMIT $posisi, $batas ";
              $queryJml = "SELECT tbl_kelas.kode_daftar, tbl_kelas.tahun_pelajaran, tbl_kelas.id_request_kelas, tbl_request_kelas.nama_kelas, tbl_request_kelas.keterangan, tbl_data_calon_murid.nama FROM tbl_kelas, tbl_request_kelas, tbl_data_calon_murid WHERE tbl_kelas.id_request_kelas!=0 AND tbl_request_kelas.keterangan='11' AND tbl_kelas.sepuluh='1' AND tbl_kelas.sebelas='1' AND tbl_kelas.duabelas='0' AND tbl_kelas.id_request_kelas = tbl_request_kelas.id_request_kelas AND tbl_data_calon_murid.kode_daftar = tbl_kelas.kode_daftar ORDER BY tbl_kelas.tahun_pelajaran DESC";
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
                        echo '<td  width="20"><center><a data-toggle="tooltip" data-placement="left" title="Naik Kelas" href=tu.php?content=edit-naik-kelas2&&kode_daftar='.$data['kode_daftar'].'><i class="fa fa-edit fa-fw"></i></a></center></td>';
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
                echo "<li><a href=\"admin.php?content=naik-kelas2&&hal=$i\">$i</a></li>";
              } else {
                echo "<li class=\"active\"><a>$i</a></li>";
              }
            }
          }
            ?>  
          </ul>
        </div>
</div>