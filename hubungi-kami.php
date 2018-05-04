<br>
<br>
<br>
<br>

<div class="container">
 	<ol class="breadcrumb">
    <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / Hubungi Kami</li>
  </ol>
  <h3><b>&nbsp;&nbsp;Hubungi Kami </b> / FAQ</h3>
  <hr>

	<ul class="list-group">
  		<li class="list-group-item active">Bagaimana caranya mendaftar menjadi murid di <a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php"><font color="white">SMK Mandalahayu II Bekasi</font></a>?</li>
  		<li class="list-group-item">Silahkan baca <a data-toggle="tooltip" data-placement="bottom" title="Alur Pendaftaran Murid Baru" href="index.php?content=alur-pendaftaran">alur pendaftaran</a> dan ikutin petunjuk pendaftaran murid baru.</li>
	</ul>

	<ul class="list-group">
  		<li class="list-group-item active">Saya sudah transfer pembayaran, apa yang harus saya lakukan selanjutnya?</li>
  		<li class="list-group-item">Silahkan pergi ke halaman <a data-toggle="tooltip" data-placement="bottom" title="Konfirmasi Pembayaran" href=index.php?content=konfirmasi-pembayaran>konfirmasi pembayaran</a>, jika belum jelas silahkan baca kembali <a data-toggle="tooltip" data-placement="right" title="Alur Pendaftaran Murid Baru" href="index.php?content=alur-pendaftaran">alur pendaftaran</a>.</li>
	</ul>

  <br>

  <ol class="breadcrumb">
    <li class="active"><b>TULIS PERTANYAAN / KOMENTAR</b></li>
  </ol>
      <form class="form-horizontal" action="config/add-faq.php" method="POST">
        <input type="hidden" name="id_berita">
        <div class="form-group">
            <label class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;Nama</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
                <input class="form-control" name="nama" placeholder="Masukkan nama anda" type="text" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;Email</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
                <input class="form-control" name="email" placeholder="Masukkan email anda" type="email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;Pertanyaan / Komentar</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="comment" placeholder="Masukkan pertanyaan atau komentar anda" type="text" required></textarea>
            </div>
        </div>
        <input type="hidden" name="tanggal" value="<?php $tgl=date('d-m-Y:h:i:s'); echo $tgl; ?>">
        <div class="form-group">

            <div class="col-sm-12" align="right">
                <button class="btn btn-primary">Send</button>
            </div>
        </div>

         <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Pertanyaan / Komentar</th>
            <th>Balasan Kami</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT nama, comment, balasan FROM tbl_faq ORDER BY tanggal DESC ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center"><i>Belum ada pertanyaan / komentar!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><b>'.$data['nama'].'</b></td>';
                        echo '<td><i>'.$data['comment'].'</i></td>';
                        echo '<td><i>'.$data['balasan'].'</i></td>';  
                      }
                    }
              
                ?>
                    
        </tbody>
      </table>
    </form>
</div>
</div>
  