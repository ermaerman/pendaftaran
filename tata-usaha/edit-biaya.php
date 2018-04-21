<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_biaya = $_GET['id_biaya'];

    $edit    = "SELECT * FROM tbl_biaya WHERE id_biaya = '$id_biaya'";
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
        <li class="active"><a href="#">Update</a> / <a href="tu.php?content=update-biaya">Update Informasi Biaya</a> / Edit Informasi Biaya</li>
    </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit</b> Biaya </h3>
    <hr><br><br>

    <form class="form-horizontal" action="../config/update-biaya.php" method="POST">
        <input type="hidden" name="id_biaya" value="<?php echo $id_biaya?>">
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Tahun Pelajaran</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="tahun_pelajaran" type="text" value="<?php echo $data['tahun_pelajaran']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Biaya Pendaftaran</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="biaya_pendaftaran" id="biaya_pendaftaran"  onkeyup="sum();" / type="text" value="<?php echo $data['biaya_pendaftaran']; ?>" required>
            </div>
        </div>
        <ol class="breadcrumb" style="margin:0;border-radius:0;">
        </ol>
        <br>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Uang Gedung</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="uang_gedung" id="uang_gedung"  onkeyup="sum();" / type="text" value="<?php echo $data['uang_gedung']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Biaya MOS</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="biaya_mos" type="text" id="biaya_mos"  onkeyup="sum();" / value="<?php echo $data['biaya_mos']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Biaya SPP Awal</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="biaya_spp" type="text" id="biaya_spp"  onkeyup="sum();" / value="<?php echo $data['biaya_spp']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Seragam Putih Abu</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="seragam_putih_abu" type="text" id="seragam_putih_abu"  onkeyup="sum();" / value="<?php echo $data['seragam_putih_abu']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Baju Olahraga</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="seragam_olahraga" type="text" id="seragam_olahraga"  onkeyup="sum();" / value="<?php echo $data['seragam_olahraga']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Seragam Batik</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="seragam_batik" type="text" id="seragam_batik"  onkeyup="sum();" / value="<?php echo $data['seragam_batik']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Seragam Pramuka</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="seragam_pramuka" type="text" id="seragam_pramuka"  onkeyup="sum();" / value="<?php echo $data['seragam_pramuka']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Baju Muslim</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="baju_muslim" type="text" id="baju_muslim"  onkeyup="sum();" / value="<?php echo $data['baju_muslim']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Topi</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="topi" type="text" id="topi"  onkeyup="sum();" / value="<?php echo $data['topi']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Dasi</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="dasi" type="text" id="dasi"  onkeyup="sum();" / value="<?php echo $data['dasi']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Ikat Pinggang</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="ikat_pinggang" type="text" id="ikat_pinggang"  onkeyup="sum();" / value="<?php echo $data['ikat_pinggang']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">KBM Pramuka</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="kbm_pramuka" type="text" id="kbm_pramuka"  onkeyup="sum();" / value="<?php echo $data['kbm_pramuka']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">KBM Praktek</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="kbm_praktek" type="text" id="kbm_praktek"  onkeyup="sum();" / value="<?php echo $data['kbm_praktek']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">KBM Ekstrakurikuler</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="kbm_ekstra" type="text" id="kbm_ekstra"  onkeyup="sum();" / value="<?php echo $data['kbm_ekstra']; ?>" required>
            </div>
        </div>

        <ol class="breadcrumb" style="margin:0;border-radius:0;">
        </ol>
        <br>

        <div class="form-group">
            <label class="col-sm-2"></label>
            <label class="col-sm-3">Total Pangkal</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-4">
                <input class="form-control" name="total_pangkal" type="text" id="total_pangkal" value="<?php echo $data['total_pangkal']; ?>" required>
            </div>
        </div>  

        <div class="form-group">
            <label class="col-sm-10">
                <p align="right">
                    <a data-toggle="tooltip" data-placement="left" title="Edit dan Simpan Biaya" href="">
                        <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save fa-fw"></i> Simpan</button>
                    </a>
                </p>
            </label>
        </div> 
    </form>
</div>