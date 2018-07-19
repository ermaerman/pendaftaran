<?php

  //error_reporting(0);

  include '../config/koneksi.php';

  // $edit    = "SELECT * FROM tbl_pembayaran";
  // $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
  // $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="kepsek.php?content=home-kepala-sekolah">Home</a> / Laporan Keuangan</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Laporan</b> Keuangan </h3>
    <hr>
        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Administrasi Pendaftaran</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>
                  <?php
                      $edit    = "SELECT COUNT(validasi_daftar) AS jumlah FROM tbl_pembayaran WHERE validasi_daftar='1'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $jumlah  = $data['jumlah'];

                      $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $pendaftaran = $data['biaya_pendaftaran'];

                      $total   = $jumlah * $pendaftaran;
                      
                  ?>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. <?php echo $total; ?> </font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=transaksi-pendaftaran" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form>

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Uang Pangkal Cicilan Pertama</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>
                  <?php
                    
                      $edit    = "SELECT COUNT(validasi_pangkal_cicil1) AS jumlah FROM tbl_pembayaran WHERE validasi_pangkal_cicil1='1'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $jumlah  = $data['jumlah'];
                      // echo $jumlah;

                      $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $pangkal = $data['total_pangkal'];
                      // echo '<br>';
                      // echo $pangkal;

                      $cicil   = $pangkal / 3;
                      // echo '<br>';
                      // echo $cicil;

                      $total   = $jumlah * $cicil;
                      
                  ?>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. <?php echo $total; ?></font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=transaksi-cicilan" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form> 

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Uang Pangkal Cicilan Kedua</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>

                    <?php
                    
                      $edit    = "SELECT COUNT(validasi_pangkal_cicil2) AS jumlah FROM tbl_pembayaran WHERE validasi_pangkal_cicil2='1'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $jumlah  = $data['jumlah'];
                      // echo $jumlah;

                      $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $pangkal = $data['total_pangkal'];
                      // echo '<br>';
                      // echo $pangkal;

                      $cicil   = $pangkal / 3;
                      // echo '<br>';
                      // echo $cicil;

                      $total   = $jumlah * $cicil;
                      
                  ?>

                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. <?php echo $total; ?></font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=transaksi-cicilan" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form>     

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Uang Pangkal Cicilan Ketiga</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>


                    <?php
                    
                      $edit    = "SELECT COUNT(validasi_pangkal_cicil3) AS jumlah FROM tbl_pembayaran WHERE validasi_pangkal_cicil3='1'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $jumlah  = $data['jumlah'];
                      // echo $jumlah;

                      $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $pangkal = $data['total_pangkal'];
                      // echo '<br>';
                      // echo $pangkal;

                      $cicil   = $pangkal / 3;
                      // echo '<br>';
                      // echo $cicil;

                      $total   = $jumlah * $cicil;
                      
                  ?>

                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. <?php echo $total; ?></font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=transaksi-cicilan" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form> 

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Uang Pangkal Lunas</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>

                   <?php
                      $edit    = "SELECT COUNT(validasi_pangkal_lunas) AS jumlah FROM tbl_pembayaran WHERE validasi_pangkal_lunas='1'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $jumlah  = $data['jumlah'];

                      $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $pangkal = $data['total_pangkal'];

                      $total   = $jumlah * $pangkal;
                      
                  ?>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. <?php echo $total; ?></font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=transaksi-lunas" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form> 

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Daftar Ulang Naik Kelas 11</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>

                   <?php
                      $edit    = "SELECT COUNT(validasi_daftar_ulang1) AS jumlah FROM tbl_pembayaran WHERE validasi_daftar_ulang1='1'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $jumlah  = $data['jumlah'];

                      $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $du = $data['daftar_ulang1'];

                      $total   = $jumlah * $du;
                      
                  ?>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. <?php echo $total; ?></font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=daftar-ulang" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form> 

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Daftar Ulang Naik Kelas 12</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>

                   <?php
                      $edit    = "SELECT COUNT(validasi_daftar_ulang2) AS jumlah FROM tbl_pembayaran WHERE validasi_daftar_ulang2='1'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $jumlah  = $data['jumlah'];

                      $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $du = $data['daftar_ulang2'];

                      $total   = $jumlah * $du;
                      ?>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. <?php echo $total; ?></font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="tu.php?content=daftar-ulang" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form> 

      <br>

        <form class="form-horizontal" method="POST">
        <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran?>">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Laporan Keuangan Keseluruhan</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>
                  <th><font size="2px">Total Keuangan</font></th>
                  <td width="800"><i><font size="2px">Rp. </font></i></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="#" class="btn btn-primary">Detail Transaksi</button>
                <button type="submit" formaction="#" class="btn btn-success"><i class='fa fa-print fa-fw'></i> Print</button></p>
            </div>
          </div>
      </form> 
      <hr>
       <p align="right"><button type="submit" formaction="#" class="btn btn-danger"><i class='fa fa-print fa-fw'></i> Print Semua Laporan Keuangan</button></p>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

