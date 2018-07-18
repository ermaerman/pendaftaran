<br>
<br>
<br>
<br>

<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_biaya = $_GET['id_biaya'];

  $edit    = "SELECT * FROM tbl_biaya ORDER BY id_biaya DESC LIMIT 1";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<div class="container">
 	<ol class="breadcrumb">
        <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / <a href="#">Lainnya</a> / Informasi Biaya</li>
    </ol>
      	<h3><b>&nbsp;&nbsp;Informasi </b>Biaya</h3>
      	<hr>
        <p><i>&nbsp;&nbsp;&nbsp;No. Rekening: 999322332 (BNI) A.N. SMK Mandalahayu II Bekasi</i></p>
      	<br>
    <form class="form-horizontal" method="POST">
    <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Informasi Biaya Pendaftaran</div>
      <div class="panel-body">
      <table class="table table-bordered">
      <tr>
        <input type="hidden" name="id_biaya" value="<?php echo $id_biaya?>">
        <th><font size="2px">Tahun Pelajaran</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tahun_pelajaran'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Biaya Pendaftaran</font></th>
        <td width="800"><i><font size="2px">Rp. <?php echo $data['biaya_pendaftaran'];?></font></i></td>
      </tr>
    </table>
    <ol class="breadcrumb">
    </ol>
    <table class="table table-bordered">
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
        <th><font size="2px">Seragam Olahraga</font></th>
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
        <td width="800"><i><font size="2px"><b>Rp. <?php echo $data['total_pangkal'];?></b></font></i></td>
      </tr>
      </table>
    </form>
    <br>
    <p><i><font size="2px">NOTE:</font></i></p>
    <p><i><font size="2px">1. Biaya Pendidikan yang sudah disetorkan / dibayar tidak dapat ditarik kembali kecuali Calon Siswa Tidak Lulus Ujian Nasional dengan dibuktikan surat keterangan dari sekolah asal.</font></i></p>
    <p><i><font size="2px">2. Apabila sebelum tanggal 31 Juli (tahun menyesuaikan) pendaftaran sudah memenuhi target yang direncanakan, maka pendaftaran akan ditutup tanpa adanya pemberitahuan.</font></i></p>
    <p><i><font size="2px">3. Tidak ada pembayaran / pembelian buku paket.</font></i></p>
    <p><i><font size="2px">4. Tidak ada biaya ulangan umum atau UTS.</font></i></p>
    <p><i><font size="2px">5. Biaya total pangkal belum termasuk uang pendaftaran</font></i></p>
  </div></div></div>

   <div class="panel panel-primary">
      <div class="panel-heading">Informasi Biaya Daftar Ulang Saat Naik Kelas</div>
      <div class="panel-body">
      <table class="table table-bordered">
        <tr>
          <th><font size="2px">Daftar Ulang Kelas 11</font></th>
          <td width="800"><i><font size="2px">Rp. <?php echo $data['daftar_ulang1'];?></font></i></td>
        </tr>
         <tr>
          <th><font size="2px">Daftar Ulang Kelas 12</font></th>
          <td width="800"><i><font size="2px">Rp. <?php echo $data['daftar_ulang2'];?></font></i></td>
        </tr>
      </table>
    </div></div></div>
</div>


  