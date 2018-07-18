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
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / Data Calon Murid</li>
      </ol>
  </div>
   
<div class="col-md-10" style="min-height:100px">
  <h3><b>Data</b> Calon Murid</h3>
  <hr>
  <form class="form-inline" action="" method="POST">
    <div class="form-group">
      <input size="134px" type="text" name="pencarian" class="form-control" placeholder="Pencarian">
      <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
      <a href="tu.php?content=data-calon-murid"><button type="button" class="btn btn-success"><i class="fa fa-refresh fa-fw"></i></button></a>  
    </div>
  </form>
</div>

 
<div class="col-md-10" style="min-height:100px">
  <form class="form-horizontal" method="POST">
      <table id="myTable" class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Tahun Pelajaran</th>
            <th>Program Studi</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Nomer Telepon</th>
            <th>Tanggal Daftar</th>
            <th>Kode Daftar</th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
          <?php


            include '../config/koneksi.php';


          $batas  = 6;
          $hal    = @$_GET['hal'];
          if (empty($hal)) {
            $posisi = 1;
            $hal    = 1;
          } else {
            $posisi = ($hal - 1) * $batas;
          }
          if($_SERVER['REQUEST_METHOD'] == "POST") {
            $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
            if ($pencarian != '') {
              $sql = "SELECT * FROM tbl_data_calon_murid WHERE status='0' AND nama LIKE '%$pencarian%' OR kode_daftar LIKE '%$pencarian' OR tahun_pelajaran LIKE '%$pencarian' OR prodi LIKE '%$pencarian' OR nisn LIKE '%$pencarian' OR agama LIKE '%$pencarian'";
              $query = $sql;
              $queryJml = $sql;
            } else {
              $query = "SELECT * FROM tbl_data_calon_murid WHERE status='0' LIMIT $posisi, $batas ";
              $queryJml = "SELECT * FROM tbl_data_calon_murid WHERE status='0' C";
              $no = $posisi + 1;
            }
          } else {
            $query = "SELECT * FROM tbl_data_calon_murid WHERE status='0'  LIMIT $posisi, $batas ";
            $queryJml = "SELECT * FROM tbl_data_calon_murid WHERE status='0'";
            $no = $posisi + 1;
          }

            $sqldata = mysqli_query($konek, $query)or die(mysqli_error($konek));
                    if(mysqli_num_rows($sqldata) == 0){ 
                      echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($sqldata)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['tahun_pelajaran'].'</td>';
                        echo '<td>'.$data['prodi'].'</td>';
                        echo '<td>'.$data['nisn'].'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['tgl_lahir'].'</td>';
                        echo '<td>'.$data['agama'].'</td>';
                        echo '<td>'.$data['telepon_rumah'].'</td>';
                        echo '<td>'.$data['tgl_daftar'].'</td>';
                        echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '<td  width="20"><center><a data-toggle="tooltip" data-placement="left" title="Lihat Data Lengkap" href=tu.php?content=edit-calon-murid&&id_calon_murid='.$data['id_calon_murid'].'><i class="fa fa-bars fa-fw"></i></a></center></td>';
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
                echo "<li><a href=\"tu.php?content=data-calon-murid&&hal=$i\">$i</a></li>";
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
