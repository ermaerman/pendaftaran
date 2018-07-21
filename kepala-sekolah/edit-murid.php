<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_calon_murid = $_GET['id_calon_murid'];

  $edit    = "SELECT * FROM tbl_data_calon_murid WHERE id_calon_murid = '$id_calon_murid'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="kepsek.php?content=home-kepala-sekolah">Home</a> / <a href="kepsek.php?content=laporan-data-murid">Data Murid</a> / Data Lengkap Murid</li>
  </ol>
</div>
  
<div class="col-md-10" style="min-height:500px">
  <h3><b>Data Lengkap</b> Murid</h3>
    <hr>
    <form class="form-horizontal" action="#" method="POST">
    <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
    <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Data Lengkap Murid</div>
      <div class="panel-body">
        <table class="table">
          <tr>
          <th><br><p align="center"><img src="../gambar/manda.png" height="100"></p></th>
          <td><br><p align="center"><font size="5px"><b>YAYASAN MANDALAHAYU</b></font><br>
                  <font size="6px"><b>SMK MANDALAHAYU II BEKASI</b></font><br>Jl. Pengasinan Tengah No.99, Pengasinan, Rawalumbu, Kota Bks, Jawa Barat 17115</p></td>
          </tr>
        </table>
    
    <table class="table table-bordered">  
      <tr>
        <input type="hidden" name="id_calon_murid" value="<?php echo $id_calon_murid?>">
        <th><font size="2px">Tahun Pelajaran</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tahun_pelajaran'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Program Studi</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['prodi'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Daftar</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kode_daftar'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">NISN</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nisn'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Nama Lengkap</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nama'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Nama Panggilan</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nama_panggilan'];?></font></i></td>
      </tr>
       <tr>
        <th><font size="2px">Jenis Kelamin</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jenis_kelamin'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tempat Lahir</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tempat_lahir'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tanggal Lahir</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tgl_lahir'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Agama</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['agama'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kewarganegaraan</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kewarganegaraan'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Anak Ke</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['anak_ke'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Status Perwalian</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['status_perwalian'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Perwalian Oleh</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['perwalian_oleh'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Jumlah Saudara Kandung</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jml_saudara_kandung'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Jumlah Saudara Tiri</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jml_saudara_tiri'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Jumlah Saudara Angkat</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jml_saudara_angkat'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Status Keluarga</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['status_keluarga'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Bahasa Sehari-hari</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['bahasa'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Alamat</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['alamat'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Telepon Rumah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['telepon_rumah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Status Tinggal</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['status_tinggal'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Jarak dari rumah ke sekolah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jarak'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Transportasi ke sekolah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['transportasi'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Asal Sekolah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['asal_sekolah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Nomor Ijazah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nomor_ijazah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tanggal Ijazah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tgl_ijazah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Lama Belajar</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['lama_belajar'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Jumlah UN</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jml_un'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Berat Badan</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['berat_badan'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tinggi Badan</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tinggi_badan'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Golongan Darah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['goldar'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Penyakit yang diderita</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['penyakit'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kelainan yang diderita</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kelainan'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Nama Ayah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nama_ayah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tempat Lahir Ayah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tempat_lahir_ayah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tanggal Lahir Ayah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tgl_lahir_ayah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Pekerjaan Ayah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['pekerjaan_ayah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Penghasilan Ayah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['penghasilan_ayah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Pendidikan Ayah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['pendidikan_ayah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kewarganegaraan Ayah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kewarganegaraan_ayah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Nama Ibu</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nama_ibu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tempat Lahir Ibu</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tempat_lahir_ibu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tanggal Lahir Ibu</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tgl_lahir_ibu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Pekerjaan Ibu</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['pekerjaan_ibu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Penghasilan Ibu</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['penghasilan_ibu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Pendidikan Ibu</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['pendidikan_ibu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kewarganegaraan Ibu</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kewarganegaraan_ibu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Alamat Orang Tua</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['alamat_orangtua'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">No. Telepon Orang Tua</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nomor_hp'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Pengeluaran Orang Tua Perbulan</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['pengeluaran'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Jumlah Keluarga yang Bekerja</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jml_keluarga_kerja'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Jumlah Keluarga yang Menikah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jml_keluarga_menikah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Nama Wali</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nama_wali'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tempat Lahir Wali</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tempat_lahir_wali'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tanggal Lahir Wali</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tgl_lahir_wali'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Pekerjaan Wali</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['pekerjaan_wali'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Penghasilan Wali</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['penghasilan_wali'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Pendidikan Wali</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['pendidikan_wali'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kewarganegaraan Wali</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kewarganegaraan_wali'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Alamat Wali</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['alamat_wali'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Nomor HP Wali</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nomor_hp_wali'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Pengeluaran Wali Perbulan</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['pengeluaran_wali'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Jumlah Keluarga Wali yang Bekerja</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jml_wali_kerja'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Jumlah Keluarga Wali yang Menikah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jml_wali_menikah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kesenian</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kesenian'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Olahraga</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['olahraga'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Hasta Karya</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['hasta_karya'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Bakat Lulus</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['bakat_lulus'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Cita-cita</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['cita_cita'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tanggal Daftar</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tgl_daftar'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Syarat NISN</font></th>
        <td width="800"><i><font size="2px"><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['syarat_nisn'] ?>" target="_blank"><?php echo $data['syarat_nisn'] ?></a></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Syarat Ijazah</font></th>
        <td width="800"><i><font size="2px"><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['syarat_ijazah'] ?>" target="_blank"><?php echo $data['syarat_ijazah'] ?></a></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Syarat KK</font></th>
        <td width="800"><i><font size="2px"><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['syarat_kk'] ?>" target="_blank"><?php echo $data['syarat_kk'] ?></a></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Syarat Akte</font></th>
        <td width="800"><i><font size="2px"><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['syarat_akte'] ?>" target="_blank"><?php echo $data['syarat_akte'] ?></a></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Syarat Foto</font></th>
        <td width="800"><i><font size="2px"><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['syarat_foto'] ?>" target="_blank"><?php echo $data['syarat_foto'] ?></a></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tanggal Daftar</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tgl_daftar'];?></font></i></td>
      </tr>
  </table>
  <p align="right"><a target ="_blank" role="button" href="print-data-murid-detail.php?id_calon_murid=<?php echo $data['id_calon_murid']; ?>"><button type="button" class="btn btn-success btn-md"><i class="fa fa-print fa-fw"></i> Print</button></a>&nbsp;&nbsp;<a href="kepsek.php?content=laporan-data-murid"><button type="button" class="btn btn-primary">Kembali</button></a></p>

</div>
</div>
</form> 
</div>
</div>
</div>