<!DOCTYPE html>
<html>
<head>
  <title>Print Transaksi Keuangan Pendaftaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <script src="../bootstrap/jquery-3.2.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>

 <body onload="window.print()">
   <div class="panel-group">
      <div class="panel panel-primary">
        <div class="panel-heading"><p align="center"><b>Transaksi Keuangan Pendaftaran</b></p></div>
        <div class="panel-body">
          <table class="table">
            <tr>
            <td><p align="center">
                  <img src="../gambar/manda.png" height="100"><br>
                  <font size="4px"><b>YAYASAN MANDALAHAYU</b></font><br>
                    <font size="5px"><b>SMK MANDALAHAYU II BEKASI</b></font><br>Jl. Pengasinan Tengah No.99, Pengasinan, Rawalumbu, Kota Bks, Jawa Barat 17115</p><hr></td>
            </tr>
          </table>
 <table class="table table-bordered">
        <thead>
          <tr>
            <th><center>No</center></th>
            <th><center>Kode Daftar</center></th>
            <th><center>Bukti Pembayaran</center></th>
          </tr>
        </thead>
        <tbody>
          <?php
          error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_pembayaran WHERE b_daftar=1 ORDER BY id_pembayaran DESC")or die(mysqli_error($konek));
                    if(mysqli_num_rows($query) == 0){
                      echo '<tr><td colspan="8" align="center"><i>Tidak ada data!</i></td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($query)){
                      ?>
                        <tr>
                        <td><center><?php echo $no ?></center></td>
                        <td><?php echo $data['kode_daftar'] ?></td>
                        <td><img src='<?php echo $data['bukti_daftar'];?>' width='30' height='50'> <?php echo $data['bukti_daftar'];?></td>
                       </tr>
                      <?php
                        $no++;
                      }
                    }
                      $edit    = "SELECT COUNT(validasi_daftar) AS jumlah FROM tbl_pembayaran WHERE validasi_daftar='1'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $jumlah  = $data['jumlah'];

                      $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
                      $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                      $data    = mysqli_fetch_array($hasil);  

                      $pendaftaran = $data['biaya_pendaftaran'];

                      $total1   = ceil($jumlah * $pendaftaran);
                      echo '<br>';
                      echo '<hr>';
                       echo '<table>';
                       echo '<tr>';
                       echo '<td width="300"><b>Total Keuangan Administrasi Pendaftaran</b></td><td>:</td> <td><i>Rp '.$total1.'</i></td></tr>';
                       echo '</table>';
                                ?>
        </tbody>
      </table>
    </body>
    </html>