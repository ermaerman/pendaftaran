<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_biaya = $_GET['id_biaya'];

  $edit    = "SELECT * FROM tbl_biaya ORDER BY id_biaya DESC LIMIT 1";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

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
    <br>
    <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Tahun Pelajaran</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="tahun_pelajaran" id="tahun_pelajaran" onchange="changeValue(this.value)">
                    <option>-- Pilih Tahun Pelajaran --</option>
                    <?php
                    $tujuan = "SELECT * FROM tbl_biaya";
                    $queryTujuan = mysqli_query($konek,$tujuan);
                    while ($dataTujuan = mysqli_fetch_array($queryTujuan)) { ?>
                         <option value="<?php echo $dataTujuan['tahun_pelajaran'] ?>"><?php echo $dataTujuan["tahun_pelajaran"] ?>
                        </option>
                    <?php
                    }
                    ?>
                    </select> 
                  </div>
                </div>
    <br>
    <br>
    <form class="form-horizontal" method="POST">
    <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Informasi Biaya</div>
      <div class="panel-body">
      <table class="table table-bordered">  
      <tr>
        <input type="hidden" name="id_biaya" value="<?php echo $data['id_biaya'];?>">
        <th><font size="2px">Tahun Pelajaran</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tahun_pelajaran'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Biaya Pendaftaran</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['biaya_pendaftaran'];?></font></i></td>
      </tr>
      <tr>
        <td colspan="2"><br>
      <ol class="breadcrumb"></ol></td>
    </tr>
      <tr>
        <th><font size="2px">Uang Gedung</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['uang_gedung'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Biaya MOS</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['biaya_mos'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Biaya SPP awal</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['biaya_spp'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Seragam Putih Abu</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['seragam_putih_abu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Baju Olahraga</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['seragam_olahraga'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Seragam Batik</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['seragam_batik'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Seragam Pramuka</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['seragam_pramuka'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Baju Muslim</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['baju_muslim'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Topi</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['topi'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Dasi</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['dasi'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Ikat Pinggang</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['ikat_pinggang'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">KBM Pramuka</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['kbm_pramuka'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">KBM Praktek</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['kbm_praktek'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">KBM Ekstrakulikuler</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['kbm_ekstra'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Total Pangkal</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['total_pangkal'];?></font></i></td>
      </tr>
      </table>
      <p align="right">
        <a data-toggle="tooltip" data-placement="left" title="Edit Informasi Biaya" href="tu.php?content=edit-biaya&&id_biaya=<?php echo $data['id_biaya'] ?>"><button type="button" class="btn btn-warning"><i class='fa fa-edit fa-fw'></i> Edit</button></a>&nbsp;<a data-toggle="tooltip" data-placement="left" title="Hapus Informasi Biaya" href="../config/delete-biaya.php?id_biaya=<?php echo $data['id_biaya']?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i> Hapus</button></a>&nbsp;<button type="button" class="btn btn-success"><i class="fa fa-print fa-fw"></i> Print</button>&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-fw"></i>Tambah Informasi Biaya</button>
      </p>
    </form>
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
              <ol class="breadcrumb">
              </ol>
               <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Total Pangkal</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="total_pangkal" id="total_pangkal" onkeyup="sum();" / placeholder="Total Pangkal" required>
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