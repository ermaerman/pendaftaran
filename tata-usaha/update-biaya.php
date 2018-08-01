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
      font-size: 11px;
  }

  td {
    font-size: 11px;
  }

</style>

<script>
function sum() {
      var uang_gedung = document.getElementById('uang_gedung').value;
      var biaya_mos = document.getElementById('biaya_mos').value;
      var biaya_spp = document.getElementById('biaya_spp').value;
      var seragam_putih_abu = document.getElementById('seragam_putih_abu').value;
      var seragam_olahraga = document.getElementById('seragam_olahraga').value;
      var seragam_batik  = document.getElementById('seragam_batik').value;
      var seragam_pramuka = document.getElementById('seragam_pramuka').value;
      var baju_muslim = document.getElementById('baju_muslim').value;
      var topi = document.getElementById('topi').value;
      var dasi = document.getElementById('dasi').value;
      var ikat_pinggang = document.getElementById('ikat_pinggang').value;
      var kbm_pramuka = document.getElementById('kbm_pramuka').value;
      var kbm_praktek = document.getElementById('kbm_praktek').value;
      var kbm_ekstra = document.getElementById('kbm_ekstra').value;
      var result =  parseInt(uang_gedung) + parseInt(biaya_mos) + parseInt(biaya_spp) + parseInt(seragam_putih_abu) + parseInt(seragam_olahraga) + parseInt(seragam_batik) + parseInt(seragam_pramuka) + parseInt(baju_muslim) + parseInt(topi) + parseInt(dasi) + parseInt(ikat_pinggang) + parseInt(kbm_pramuka) + parseInt(kbm_praktek) + parseInt(kbm_ekstra);
      if (!isNaN(result)) {
         document.getElementById('total_pangkal').value = result;
      }
}
</script>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="#">Update</a> / Update Informasi Biaya</li>
    </ol>
</div>
   
<div class="col-md-10" style="min-height:500px">
  <h3><b>Update</b> Informasi Biaya</h3>
  <hr>
     <form class="form-inline" action="" method="POST">
    <div class="form-group" style="float: right;">
      <input size="30px" type="text" name="pencarian" class="form-control" placeholder="Masukkan Tahun Pelajaran">
      <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
      <a href="tu.php?content=update-biaya"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
    </div>
  </form>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-fw"></i>Tambah Informasi Biaya</button>
  <br>
  <br>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Tahun Pelajaran</th>
            <th>Pendaftaran</th>
            <th>Gedung</th>
            <th>MOS</th>
            <th>Biaya SPP</th>
            <th>Putih Abu</th>
            <th>Olahraga</th>
            <th>Batik</th>
            <th>Pramuka</th>
            <th>Baju Muslim</th>
            <th>Topi</th>
            <th>Dasi</th>
            <th>Ikat Pinggang</th>
            <th>Pramuka</th>
            <th>Praktek</th>
            <th>Ekskul</th>
            <th>Total Pangkal</th>
            <th>Daftar Ulang 11</th>
            <th>Daftar Ulang 12</th>
            <th colspan="2">Action</th>
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
                $sql = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran LIKE '%$pencarian%' ORDER BY id_biaya DESC";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT * FROM tbl_biaya ORDER BY id_biaya DESC LIMIT $posisi, $batas ";
                $queryJml = "SELECT * FROM tbl_biaya ORDER BY id_biaya DESC";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT * FROM tbl_biaya ORDER BY id_biaya DESC LIMIT $posisi, $batas ";
              $queryJml = "SELECT * FROM tbl_biaya ORDER BY id_biaya DESC";
              $no = $posisi + 1;
            }

            $querydata = mysqli_query($konek, $query)or die(mysqli_error());
                    if(mysqli_num_rows($querydata) == 0){ 
                      echo '<tr><td colspan="13" align="center"><i>Belum ada Informasi Biaya!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($querydata)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['tahun_pelajaran'].'</td>';
                        echo '<td>'.$data['biaya_pendaftaran'].'</td>';
                        echo '<td>'.$data['uang_gedung'].'</td>';
                        echo '<td>'.$data['biaya_mos'].'</td>';
                        echo '<td>'.$data['biaya_spp'].'</td>';
                        echo '<td>'.$data['seragam_putih_abu'].'</td>';
                        echo '<td>'.$data['seragam_olahraga'].'</td>';
                        echo '<td>'.$data['seragam_batik'].'</td>';
                        echo '<td>'.$data['seragam_pramuka'].'</td>';
                        echo '<td>'.$data['baju_muslim'].'</td>';
                        echo '<td>'.$data['topi'].'</td>';
                        echo '<td>'.$data['dasi'].'</td>';
                        echo '<td>'.$data['ikat_pinggang'].'</td>';
                        echo '<td>'.$data['kbm_pramuka'].'</td>';
                        echo '<td>'.$data['kbm_praktek'].'</td>';
                        echo '<td>'.$data['kbm_ekstra'].'</td>';
                        echo '<td>'.$data['total_pangkal'].'</td>';
                        echo '<td>'.$data['daftar_ulang1'].'</td>';
                        echo '<td>'.$data['daftar_ulang2'].'</td>';
                        echo '<td  width="20"><center><a data-toggle="tooltip" data-placement="left" title="Update" href=tu.php?content=edit-biaya&&id_biaya='.$data['id_biaya'].'><i class="fa fa-edit fa-fw"></i></a></center></td>';
                        echo '<td  width="20"><center><a data-toggle="tooltip" data-placement="left" title="Delete" href="../config/delete-biaya.php?id_biaya='.$data['id_biaya'].'"?><i class="fa fa-trash fa-fw"></i></a></center></td>';
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
</div>
</div></div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#3bacd6";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p align="center"><img src="../gambar/manda.png" alt="" height="100px" width="130px"></p>
            <p align="center"><font size="2px"><i>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</i></font></p>
            <h4 class="modal-title" align="center"><b>Tambahkan Informasi Biaya</b></h4>
          </div>
          <div class="modal-body">
            <form action="../config/add-biaya.php" class="form-horizontal" method="POST">
              <input type="hidden" name="id_biaya">
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Tahun Pelajaran</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="tahun_pelajaran" placeholder="Tahun Pelajaran" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Biaya Pendaftaran</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="biaya_pendaftaran" placeholder="Biaya Pendaftaran" required>
                  </div>
              </div>
              <ol class="breadcrumb">
              </ol>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Uang Gedung</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="uang_gedung" id="uang_gedung" onkeyup="sum();" / placeholder="Uang Gedung" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Biaya MOS</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="biaya_mos" id="biaya_mos" onkeyup="sum();" / placeholder="Biaya MOS" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Biaya SPP Awal</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="biaya_spp" id="biaya_spp" onkeyup="sum();" / placeholder="Biaya SPP" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Seragam Putih Abu</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="seragam_putih_abu" id="seragam_putih_abu" onkeyup="sum();" / placeholder="Seragam Putih Abu" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Baju Olahraga</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="seragam_olahraga" id="seragam_olahraga" onkeyup="sum();" / placeholder="Baju Olahraga" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Seragam Batik</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="seragam_batik" id="seragam_batik" onkeyup="sum();" / placeholder="Seragam Batik" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Seragam Pramuka</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="seragam_pramuka" id="seragam_pramuka" onkeyup="sum();" / placeholder="Seragam Pramuka" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Baju Muslim</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="baju_muslim" id="baju_muslim" onkeyup="sum();" / placeholder="Baju Muslim" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Topi</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="topi" id="topi" onkeyup="sum();" / placeholder="Topi" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Dasi</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="dasi" id="dasi" onkeyup="sum();" / placeholder="Dasi" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Ikat Pinggang</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="ikat_pinggang" id="ikat_pinggang" onkeyup="sum();" / placeholder="Ikat Pinggang" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">KBM Pramuka</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="kbm_pramuka" id="kbm_pramuka" onkeyup="sum();" / placeholder="KBM Pramuka" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">KBM Praktek</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="kbm_praktek" id="kbm_praktek" onkeyup="sum();" / placeholder="KBM Praktek" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">KBM Ektrakurikuler</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="kbm_ekstra" id="kbm_ekstra" onkeyup="sum();" / placeholder="KBM Ektrakurikuler" required>
                  </div>
              </div>
              <hr>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Total Pangkal</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="total_pangkal" id="total_pangkal" onkeyup="sum();" / placeholder="Total Pangkal" required>
                  </div>
              </div>
              <ol class="breadcrumb">
              </ol>
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Daftar Ulang Kelas 11</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="daftar_ulang1" placeholder="Daftar Ulang Kelas 11" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Daftar Ulang Kelas 12</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="daftar_ulang2" placeholder="Daftar Ulang Kelas 12" required>
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