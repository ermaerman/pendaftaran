<br>
<br>
<br>
<br>

<div class="container">
 	<ol class="breadcrumb">
    <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / FAQ & Helpdesk</li>
  </ol>
  <h3><b>&nbsp;&nbsp;FAQ </b> (Frequently Answer Question)</h3>
  <hr>

	<ul class="list-group">
  		<li class="list-group-item active">Bagaimana caranya mendaftar menjadi murid di <a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php"><font color="white">SMK Mandalahayu II Bekasi</font></a>?</li>
  		<li class="list-group-item">Silahkan baca <a data-toggle="tooltip" data-placement="bottom" title="Alur Pendaftaran Murid Baru" href="index.php?content=alur-pendaftaran">alur pendaftaran</a> dan ikutin petunjuk pendaftaran murid baru.</li>
	</ul>

  <ul class="list-group">
      <li class="list-group-item active">Kemanakah saya harus transfer pembayaran?</li>
      <li class="list-group-item">No. Rekening: 999322332 (BNI) A.N. SMK Mandalahayu II Bekasi</li>
  </ul>

  <ul class="list-group">
  		<li class="list-group-item active">Saya sudah transfer pembayaran, apa yang harus saya lakukan selanjutnya?</li>
  		<li class="list-group-item">Silahkan pergi ke halaman <a data-toggle="tooltip" data-placement="bottom" title="Konfirmasi Pembayaran" href=index.php?content=konfirmasi-pembayaran>konfirmasi pembayaran</a>, jika belum jelas silahkan baca kembali <a data-toggle="tooltip" data-placement="right" title="Alur Pendaftaran Murid Baru" href="index.php?content=alur-pendaftaran">alur pendaftaran</a>.</li>
	</ul>


  <br>

   <h3><b>&nbsp;&nbsp;Helpdesk</b></h3>
  <hr>
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
                <button class="btn btn-primary">Kirim</button>
            </div>
        </div>

         <form class="form-horizontal" method="POST">
          <?php

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT nama, comment, balasan, tanggal FROM tbl_faq ORDER BY tanggal DESC ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center"><i>Belum ada pertanyaan / komentar!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){ 
                         echo '<div class="media">
                               <div class="media-left">
                                  <img src="gambar/faq.png" class="media-object" style="width:45px">
                               </div>';
                         echo '<div class="media-body">';
                         echo '<h4 class="media-heading"><b>'.$data['nama'].'</b> &nbsp;&nbsp;<small ><i>'.$data['tanggal'].'</i></small></h4>
                            <p>'.$data['comment'].'</p>';
                        echo '<div class="media">
                        <div class="media-left">
                            <img src="gambar/manda.png" class="media-object" style="width:60px">
                        </div>';
                        echo '<div class="media-body">';
                        echo '<h4 class="media-heading">Balasan</h4>
                          <p>'.$data['balasan'].'</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '<hr>';
                      }
                    }
              
                ?>

    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
