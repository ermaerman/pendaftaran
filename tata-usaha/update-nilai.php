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
      font-size: 12px;
  }

  td {
    font-size: 14px;
  }

</style>

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="#">Update</a> / Update Hasil Ujian Masuk</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Update</b> Hasil Ujian Masuk</h3>
  <hr>
     <form class="form-inline" action="" method="POST">
    <div class="form-group">
      <input size="127px" type="text" name="pencarian" class="form-control" placeholder="Masukkan kode daftar">
      <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
      <a href="tu.php?content=update-nilai"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
      <a target ="_blank" role="button" href="print-nilai.php"><button type="button" class="btn btn-success"><i class="fa fa-print fa-fw"></i></button></a>  
    </div>
  </form>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Daftar</th>
            <th>Nilai Bahasa Indonesia</th>
            <th>Nilai Matematika</th>
            <th>Nilai Bahasa Inggris</th>
            <th>Nilai Kejuruan</th>
            <th>Tes Buta Warna</th>
            <th>Tes Urine / Bebas Narkoba</th>
            <th>Tes Fisik</th>
            <th>Hasil</th>
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
                $sql = "SELECT * FROM tbl_pengumuman WHERE kode_daftar LIKE '%$pencarian%' ORDER BY id_pengumuman DESC";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT * FROM tbl_pengumuman ORDER BY id_pengumuman DESC LIMIT $posisi, $batas ";
                $queryJml = "SELECT * FROM tbl_pengumuman ORDER BY id_pengumuman DESC";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT * FROM tbl_pengumuman ORDER BY id_pengumuman DESC LIMIT $posisi, $batas ";
              $queryJml = "SELECT * FROM tbl_pengumuman ORDER BY id_pengumuman DESC";
              $no = $posisi + 1;
            }


            $querydata = mysqli_query($konek, $query)or die(mysqli_error($konek));
                    if(mysqli_num_rows($querydata) == 0){ 
                      echo '<tr><td colspan="11" align="center"><i>Belum ada pengumuman kelulusan!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($querydata )){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '<td>'.$data['bahasa_indonesia'].'</td>';
                        echo '<td>'.$data['matematika'].'</td>';
                        echo '<td>'.$data['bahasa_inggris'].'</td>';
                        echo '<td>'.$data['kejuruan'].'</td>';
                        echo '<td>'.$data['buta_warna'].'</td>';
                        echo '<td>'.$data['urine'].'</td>';
                        echo '<td>'.$data['fisik'].'</td>';?>
                        <td><?php if ($data['hasil']==0) echo "Tidak Lulus"; else echo "Lulus"; ?></td>
                        <?php
                        echo '<td  width="20"><center><a data-toggle="tooltip" data-placement="left" title="Update" href=tu.php?content=edit-pengumuman&&kode_daftar='.$data['kode_daftar'].'><i class="fa fa-edit fa-fw"></i></a></center></td>';
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


    