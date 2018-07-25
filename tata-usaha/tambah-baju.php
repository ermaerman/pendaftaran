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
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="tu.php?content=data-ukuran-baju"> Data Ukuran Baju</a> / Tambah Data Pembelian Langsung </li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Tambah</b> Data Pembelian Langsung</h3>
    <hr>
    <form action="../config/add-pembelian.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="control-label col-sm-2"><p align="left">Kode Daftar</p></label>
                <label class="control-label col-sm-1">:</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" name="kode_daftar" placeholder="Kode Daftar" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2"><p align="left">Seragam Putih Abu</p></label>
                <label class="control-label col-sm-1">:</label>
                 <div class="col-sm-9">
                    <select class="form-control" id="seragam_putih_abu" name="seragam_putih_abu">
                      <option value="0">Tidak</option>
                      <option value="1">Ya</option>
                    </select> 
                  </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-2"><p align="left">Seragam Olahraga</p></label>
                <label class="control-label col-sm-1">:</label>
                 <div class="col-sm-9">
                    <select class="form-control" id="seragam_olahraga" name="seragam_olahraga">
                      <option value="0">Tidak</option>
                      <option value="1">Ya</option>
                    </select> 
                  </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-2"><p align="left">Seragam Batik</p></label>
                <label class="control-label col-sm-1">:</label>
                 <div class="col-sm-9">
                    <select class="form-control" id="seragam_batik" name="seragam_batik">
                      <option value="0">Tidak</option>
                      <option value="1">Ya</option>
                    </select> 
                  </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2"><p align="left">Seragam Pramuka</p></label>
                <label class="control-label col-sm-1">:</label>
                 <div class="col-sm-9">
                    <select class="form-control" id="seragam_pramuka" name="seragam_pramuka">
                     <option value="0">Tidak</option>
                      <option value="1">Ya</option>
                    </select> 
                  </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2"><p align="left">Baju Muslim</p></label>
                <label class="control-label col-sm-1">:</label>
                 <div class="col-sm-9">
                    <select class="form-control" id="baju_muslim" name="baju_muslim">
                    <option value="0">Tidak</option>
                      <option value="1">Ya</option>
                    </select> 
                  </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2"><p align="left">Topi</p></label>
                <label class="control-label col-sm-1">:</label>
                 <div class="col-sm-9">
                    <select class="form-control" id="topi" name="topi">
                      <option value="0">Tidak</option>
                      <option value="1">Ya</option>
                    </select> 
                  </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2"><p align="left">Dasi</p></label>
                <label class="control-label col-sm-1">:</label>
                 <div class="col-sm-9">
                    <select class="form-control" id="dasi" name="dasi">
                     <option value="0">Tidak</option>
                      <option value="1">Ya</option>
                    </select> 
                  </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-2"><p align="left">Ikat Pinggang</p></label>
                <label class="control-label col-sm-1">:</label>
                 <div class="col-sm-9">
                    <select class="form-control" id="ikat_pinggang" name="ikat_pinggang">
                  <option value="0">Tidak</option>
                      <option value="1">Ya</option>
                    </select> 
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-8  " align="right">
                      <button class="btn btn-primary">Tambah</button>
                  </div>
              </div>
            </form>
<hr>

           <form class="form-inline" action="" method="POST">
          <div class="form-group">
            <input size="134px" type="text" name="pencarian" class="form-control" placeholder="Masukkan kode daftar">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
            <a href="tu.php?content=tambah-baju"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
          </div>
        </form>

        <form class="form-horizontal" method="POST">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Daftar</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Seragam Putih Abu</th>
                <th>Seragam Olahraga</th>
                <th>Seragam Batik</th>
                <th>Seragam Pramuka</th>
                <th>Baju Muslim</th>
                <th>Topi</th>
                <th>Dasi</th>
                <th>Ikat Pinggang</th>
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
                    $sql = "SELECT * FROM tbl_pembelian WHERE kode_daftar LIKE '%$pencarian%'";
                    $query = $sql;
                    $queryJml = $sql;
                  } else {
                    $query = "SELECT * FROM tbl_pembelian LIMIT $posisi, $batas ";
                    $queryJml = "SELECT * FROM tbl_pembelian";
                    $no = $posisi + 1;
                  }
                } else {
                  $query = "SELECT * FROM tbl_pembelian LIMIT $posisi, $batas ";
                  $queryJml = "SELECT * FROM tbl_pembelian";
                  $no = $posisi + 1;
                }


                $querydata = mysqli_query($konek, $query)or die(mysqli_error());
                        if(mysqli_num_rows($querydata) == 0){
                          echo '<tr><td colspan="11" align="center">Tidak ada data!</td></tr>';
                        }
                          else
                        {
                          $no = 1;
                          while($data = mysqli_fetch_array($querydata)){
                            echo '<tr>';
                            echo '<td>'.$no.'</td>';
                            echo '<td>'.$data['kode_daftar'].'</td>';
                            echo '<td>'.$data['nama'].'</td>';
                            echo '<td>'.$data['nama'].'</td>';
                            echo '<td>'.$data['seragam_putih_abu'].'</td>';
                            echo '<td>'.$data['seragam_olahraga'].'</td>';
                            echo '<td>'.$data['seragam_batik'].'</td>';
                            echo '<td>'.$data['seragam_pramuka'].'</td>';
                            echo '<td>'.$data['baju_muslim'].'</td>';
                            echo '<td>'.$data['topi'].'</td>';
                            echo '<td>'.$data['dasi'].'</td>';
                            echo '<td>'.$data['ikat_pinggang'].'</td>';
                            echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit Keterangan Pembelian" href=tu.php?content=edit-keterangan-pembelian&&kode_daftar='.$data['kode_daftar'].'><i class="fa fa-edit fa-fw"></i></a></td>';
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
                    echo "<li><a href=\"tu.php?content=tambah-baju&&hal=$i\">$i</a></li>";
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


