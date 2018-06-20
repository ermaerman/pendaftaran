<br>
<br>
<br>
<br>



<script type="text/javascript">
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
</script>

<ol class="breadcrumb">
  <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / Pendaftaran</li>
</ol>

<h3><b>&nbsp;&nbsp;Pendaftaran</b> Murid Baru</h3>
      
<div class="alert alert-info">
  <span class="label label-primary">Info!</span></h6><i><font size="2px"> Silahkan isi form dibawah ini dengan lengkap dengan benar! Terimakasih.</font></i>
</div>
    
<hr>

            <form class="form-horizontal" action="config/add-pendaftaran.php" method="POST" enctype="multipart/form-data">
                <ol class="breadcrumb">
                    <li class="active"><b>FORM PENDAFTARAN CALON MURID BARU SMK MANDALAHAYU II BEKASI</b></li>
                </ol>
                <input type="hidden" name="id_calon_murid">
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Tahun Pelajaran</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="tahun_pelajaran" id="tahun_pelajaran">
                    <option>-- Pilih Tahun Pelajaran --</option>
                    <?php
                    $tujuan = "SELECT * FROM tbl_tahun_pelajaran";
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
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Program Studi</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="prodi" name="prodi">
                      <option>-- Pilih Program Studi --</option>
                      <option>Multimedia</option>
                      <option>Teknik Komputer dan Jaringan</option>
                    </select> 
                  </div>
                </div>
                <br>
               <ol class="breadcrumb">
                    <li class="active"><b>A. KETERANGAN PRIBADI CALON MURID</b></li>
                </ol>
             <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">NISN (Nomor Induk Siswa Nasional)</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" onkeypress="return hanyaAngka(event)" name="nisn" type="text" placeholder="Masukkan NISN anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Nama Lengkap <span class="label label-danger">Sesuai dengan ijazah</span></label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="nama" type="text" placeholder="Masukkan nama lengkap anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Nama Panggilan</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="nama_panggilan" type="text" placeholder="Masukkan nama panggilan anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Jenis Kelamin</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                      <option>-- Pilih Jenis Kelamin --</option>
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select> 
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Tempat Lahir</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="tempat_lahir" type="text" placeholder="Masukkan tempat lahir anda" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Tanggal Lahir</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control input-md" class="input-group date" name="tgl_lahir" type="date" placeholder="Masukkan tanggal lahir anda" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Agama</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="agama" name="agama">
                      <option>-- Pilih Agama --</option>
                      <option>Islam</option>
                      <option>Katholik</option>
                      <option>Protestan</option>
                      <option>Hindu</option>
                      <option>Budha</option>
                      <option>Kong Hu Cu</option>
                    </select> 
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Kewarganegaraan</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="kewarganegaraan" type="text" placeholder="Masukkan kewarganegaraan anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Anak Keberapa</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" onkeypress="return hanyaAngka(event)" name="anak_ke" type="text" placeholder="Anak keberapakah anda?" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Status Perwalian Keluarga</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="status_perwalian" name="status_perwalian">
                      <option>-- Pilih Status Perwalian Keluarga --</option>
                      <option>Anak Kandung</option>
                      <option>Anak Tiri</option>
                      <option>Anak Angkat</option>
                      <option>Anak Asuh</option>
                    </select> 
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Status Perwalian Oleh</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="perwalian_oleh" type="text" placeholder="Status perwalian anda oleh?" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Jumlah Saudara Kandung</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" onkeypress="return hanyaAngka(event)" name="jml_saudara_kandung" type="text" placeholder="Masukkan jumlah saudara kandung anda">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Jumlah Saudara Tiri</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" onkeypress="return hanyaAngka(event)" name="jml_saudara_tiri" type="text" placeholder="Masukkan jumlah saudara tiri anda">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Jumlah Saudara Angkat</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" onkeypress="return hanyaAngka(event)" name="jml_saudara_angkat" type="text" placeholder="Masukkan jumlah saudara angkat anda">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Status Keluarga</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="status_keluarga" name="status_keluarga">
                      <option>-- Pilih Status Keluarga --</option>
                      <option>Anak Yatim</option>
                      <option>Anak Piatu</option>
                      <option>Anak Yatim Piatu</option>
                      <option>Tidak Yatim/Piatu/Yatim Piatu</option>
                    </select> 
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Bahasa Sehari-hari di Rumah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="bahasa" type="text" placeholder="Masukkan bahasa sehari-hari anda" required>
                  </div>
                </div>

                <br>

                <ol class="breadcrumb">
                    <li class="active"><b>B. KETERANGAN TEMPAT TINGGAL</b></li>
                </ol>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Alamat Lengkap</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="alamat" type="text" placeholder="Masukkan alamat lengkap anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">No. Telepon Rumah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" onkeypress="return hanyaAngka(event)" name="telepon_rumah" type="text" placeholder="Masukkan nomer telepon rumah anda">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Status Tinggal</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="status_tinggal" name="status_tinggal">
                      <option>-- Pilih Status Tinggal --</option>
                      <option>Dengan Orangtua/Wali</option>
                      <option>Menumpang</option>
                      <option>Di Asrama</option>
                    </select> 
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Jarak dari tempat tinggal ke sekolah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="jarak" type="text" placeholder="Masukkan jarak dari tempat tinggal anda hingga ke sekolah" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Transportasi Ke Sekolah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="transportasi" type="text" placeholder="Masukkan media transportasi anda untuk pergi ke sekolah" required>
                  </div>
                </div>

                <br>

                <ol class="breadcrumb">
                    <li class="active"><b>C. KETERANGAN PENDIDIKAN SEBELUMNYA</b></li>
                </ol>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Asal Sekolah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="asal_sekolah" type="text" placeholder="Masukkan asal sekolah anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Nomor Ijazah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="nomor_ijazah" type="text" placeholder="Masukkan nomor ijazah anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Tanggal dan Tahun Ijazah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="tgl_ijazah" type="date" placeholder="Masukkan tanggal dan tahun ijazah anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Lama Belajar</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="lama_belajar" type="text" placeholder="Masukkan lama belajar anda saat jenjang sekolah sebelumnya" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Jumlah STK/Nilai Ujian Nasional (UN)</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="jml_un" type="text" placeholder="Masukkan jumlah STK/Nilai Ujian Nasional (UN) anda" required>
                  </div>
                </div>

                <br>

                <ol class="breadcrumb">
                    <li class="active"><b>D. KETERANGAN KESEHATAN</b></li>
                </ol>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Berat Badan</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="berat_badan" type="text" placeholder="Masukkan berat badan anda" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Tinggi Badan</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="tinggi_badan" type="text" placeholder="Masukkan tinggi badan anda" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Golongan Darah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="goldar" type="text" placeholder="Masukkan golongan darah anda" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Penyakit</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="penyakit" type="text" placeholder="Masukkan penyakit yang pernah anda derita (jika ada)">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Kelainan Jasmaniah/lainnya</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="kelainan" type="text" placeholder="Masukkan kelainan jasmaniah/lainnya yang anda miliki (jika ada)">
                  </div>
                </div>

                <br>

                <ol class="breadcrumb">
                    <li class="active"><b>E. KETERANGAN ORANGTUA/WALI</b></li>
                </ol>

                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Nama Ayah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="nama_ayah" type="text" placeholder="Masukkan nama ayah anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Tempat Lahir Ayah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="tempat_lahir_ayah" type="text" placeholder="Masukkan tempat lahir ayah anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Tanggal Lahir Ayah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="tgl_lahir_ayah" type="date" placeholder="Masukkan tanggal lahir ayah anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Pekerjaan Ayah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="pekerjaan_ayah" type="text" placeholder="Masukkan pekerjaan ayah anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Penghasilan Perbulan Ayah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="penghasilan_ayah" type="text" placeholder="Masukkan penghasilan ayah anda perbulannya" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Pendidikan Terakhir Ayah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="pendidikan_ayah" type="text" placeholder="Masukkan pendidikan terakhir ayah anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Kewarganegaraan Ayah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="kewarganegaraan_ayah" type="text" placeholder="Masukkan kewarganegaraan ayah anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Nama Ibu</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="nama_ibu" type="text" placeholder="Masukkan nama ibu anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Tempat Lahir Ibu</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="tempat_lahir_ibu" type="text" placeholder="Masukkan tempat lahir ibu anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Tanggal Lahir Ibu</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="tgl_lahir_ibu" type="date" placeholder="Masukkan tanggal lahir ibu anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Pekerjaan Ibu</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="pekerjaan_ibu" type="text" placeholder="Masukkan pekerjaan ibu anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Penghasilan Perbulan Ibu</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="penghasilan_ibu" type="text" placeholder="Masukkan penghasilan ibu anda perbulannya">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Pendidikan Terakhir Ibu</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="pendidikan_ibu" type="text" placeholder="Masukkan pendidikan terakhir ibu anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Kewarganegaraan Ibu</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="kewarganegaraan_ibu" type="text" placeholder="Masukkan kewarganegaraan ibu anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Alamat Tempat Tinggal</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="alamat_orangtua" type="text" placeholder="Masukkan alamat tempat tinggal" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Nomor Telepon/Handphone</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" onkeypress="return hanyaAngka(event)" name="nomor_hp" type="text" placeholder="Masukkan nomor telpon/handphone orangtua anda" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Pengeluaran Keluarga Perbulan</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="pengeluaran" type="text" placeholder="Masukkan pengeluaran keluarga anda perbulan" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Jumlah Anggota Keluarga yang Bekerja</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="jml_keluarga_kerja" type="text" placeholder="Masukkan jumlah anggota keluarga anda yang bekerja" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Jumlah Anggota Keluarga yang Menikah dan Tinggal Dalam Satu Rumah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="jml_keluarga_menikah" type="text" placeholder="Masukkan jumlah anggota keluarga anda yg menikah dan tinggal dalam satu rumah" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Nama Wali</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="nama_wali" type="text" placeholder="Masukkan nama wali anda">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Tempat Lahir Wali Murid</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="tempat_lahir_wali" type="text" placeholder="Masukkan tempat lahir wali anda">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Tanggal Lahir Wali Murid</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="tgl_lahir_wali" type="date" placeholder="Masukkan tanggal lahir wali anda">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Pekerjaan Wali Murid</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="pekerjaan_wali" type="text" placeholder="Masukkan pekerjaan wali anda">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Penghasilan Perbulan Wali Murid</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="penghasilan_wali" type="text" placeholder="Masukkan penghasilan wali anda perbulannya">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Pendidikan Terakhir Wali Murid</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="pendidikan_wali" type="text" placeholder="Masukkan pendidikan terakhir wali anda">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Kewarganegaraan Wali Murid</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="kewarganegaraan_wali" type="text" placeholder="Masukkan kewarganegaraan wali anda">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Alamat Tempat Tinggal Wali Murid</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="alamat_wali" type="text" placeholder="Masukkan alamat tempat tinggal wali anda">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Nomor Telepon/Handphone Wali Murid</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" onkeypress="return hanyaAngka(event)" name="nomor_hp_wali" type="text" placeholder="Masukkan nomor telpon/handphone wali anda">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Pengeluaran Keluarga Perbulan Wali Murid</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="pengeluaran_wali" type="text" placeholder="Masukkan pengeluaran wali anda perbulan">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Jumlah Anggota Keluarga Wali Murid yang Bekerja</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" onkeypress="return hanyaAngka(event)" name="jml_wali_kerja" type="text" placeholder="Masukkan jumlah anggota keluarga wali anda yang bekerja">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Jumlah Anggota Keluarga Wali Murid yang Menikah dan Tinggal Dalam Satu Rumah</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" onkeypress="return hanyaAngka(event)" name="jml_wali_menikah" type="text" placeholder="Masukkan jumlah anggota wali  anda yg menikah dan tinggal dalam satu rumah">
                  </div>
                </div>

                <br>

                <ol class="breadcrumb">
                    <li class="active"><b>F. KEGEMARAN/BAKAT/MINAT DAN CITA-CITA</b></li>
                </ol>

                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Kesenian</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="kesenian" type="text" placeholder="Masukkan minat anda pada kesenian">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Olahraga</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="olahraga" type="text" placeholder="Masukkan minat anda pada olahraga">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Kemasyarakatan Organisasi</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="organisasi" type="text" placeholder="Masukkan minat anda pada kemasyarakatan organisasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Hasta Karya</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="hasta_karya" type="text" placeholder="Masukkan minat anda pada hasta karya">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Bakat/Minat Setelah Lulus</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="bakat_lulus" type="text" placeholder="Masukkan bakat/minat anda setelah lulus">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Cita-cita</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="cita_cita" type="text" placeholder="Masukkan cita-cita anda">
                  </div>
                </div>
                <input type="hidden" name="tgl_daftar" value="<?php $tgl=date('d-m-Y'); echo $tgl; ?>">

                 <br>

                <ol class="breadcrumb">
                    <li class="active"><b>G. UPLOAD PERSYARATAN</b></li>
                </ol>

                 <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">NISN <span class="label label-danger">Scan</span></label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="file" name="fileToUploadNisn" id="fileToUploadNisn">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Ijazah <span class="label label-danger">Scan</span></label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="file" name="fileToUploadIjazah" id="fileToUploadIjazah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Kartu Keluarga <span class="label label-danger">Scan</span></label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="file" name="fileToUploadKk" id="fileToUploadKk">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Akte Kelahiran <span class="label label-danger">Scan</span></label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="file" name="fileToUploadAkte" id="fileToUploadAkte">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Foto 3x4</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <input type="file" name="fileToUploadFoto" id="fileToUploadFoto">
                  </div>
                </div>
                
                <br>

                <div class="form-group">
                  <div class="col-sm-12">
                    <i><font size="2px">* Data ini saya tuliskan dengan benar dan sejujur-jujurnya, bila suatu saat terjadi kesalahan saya siap untuk menanggung secara hukum.</font></i>
                  </div>
                </div>


                </div>                
                <div class="form-group">
                    <label class="col-sm-3"></label>
                    <label class="col-sm-1"></label>
                    <div class="col-sm-8" align="Right">
                        <button class="btn btn-primary" type="submit">Daftar</button>
                    </div>
                </div>
            </form>