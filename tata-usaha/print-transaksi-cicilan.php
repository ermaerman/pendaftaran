 <!DOCTYPE html>
<html>
<head>
  <title>Print Transaksi Keuangan Pangkal Cicilan</title>
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
        <div class="panel-heading"><p align="center"><b>Transaksi Keuangan Pangkal Cicilan</b></p></div>
        <div class="panel-body">
          <table class="table">
            <tr>
            <td><p align="center">
                  <img src="../gambar/manda.png" height="100"><br>
                  <font size="4px"><b>YAYASAN MANDALAHAYU</b></font><br>
                    <font size="5px"><b>SMK MANDALAHAYU II BEKASI</b></font><br>Jl. Pengasinan Tengah No.99, Pengasinan, Rawalumbu, Kota Bks, Jawa Barat 17115</p><hr></td>
            </tr>
          </table>
           <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Daftar</th>
            <th>Cicilan 1</th>
            <th>Bukti Cicilan 1</th>
            <th>Cicilan 2</th>
            <th>Bukti Cicilan 2</th>
            <th>Cicilan 3</th>
            <th>Bukti Cicilan 3</th>
          </tr>
        </thead>
        <tbody>
 <?php
 error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT id_pembayaran, kode_daftar, b_pangkal_cicil1, bukti_pangkal_cicil1, validasi_pangkal_cicil1, b_pangkal_cicil2, bukti_pangkal_cicil2, validasi_pangkal_cicil2, b_pangkal_cicil3, bukti_pangkal_cicil3, validasi_pangkal_cicil3 FROM tbl_pembayaran WHERE b_pangkal_cicil1='1' ORDER BY id_pembayaran DESC")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){
                      echo '<tr><td colspan="12" align="center"><i>Tidak ada data!</i></td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($query)){
                      ?>
                         <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data['kode_daftar'] ?></td>
                        <td><?php if ($data['b_pangkal_cicil1']==0) echo "Belum"; else echo "Sudah"; ?></td>
                        <td><img src='<?php echo $data['bukti_pangkal_cicil1'];?>' width='30' height='50'></td>
                        <td><?php if ($data['b_pangkal_cicil2']==0) echo "Belum"; else echo "Sudah"; ?></td>
                        <td><img src='<?php echo $data['bukti_pangkal_cicil2'];?>' width='30' height='50'></td>
                        <td><?php if ($data['b_pangkal_cicil3']==0) echo "Belum"; else echo "Sudah"; ?></td>
                        <td><img src='<?php echo $data['bukti_pangkal_cicil3'];?>' width='30' height='50'></td>
                      </tr>
                      <?php
                        $no++;
                      }
                    }
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

                                  $total2   = ceil($jumlah * $cicil);

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

                                  $total3   = ceil($jumlah * $cicil);

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

                                  $total4   = ceil($jumlah * $cicil);

                                  echo '<br>';
                                  echo '<hr>';
                                  echo '<table>';
                                  echo '<tr>';
                                  echo '<td width="300"><b>Total Keuangan Cicilan Pertama</b></td><td>:</td> <td><i>Rp '.$total2.'</i></td></tr>';
                                  echo '<tr><td width="300"><b>Total Keuangan Cicilan Kedua</b></td><td>:</td> <td><i>Rp '.$total3.'</i></td>';
                                  echo '</tr>';
                                  echo '<tr><td width="300"><b>Total Keuangan Cicilan Ketiga</b></td><td>:</td> <td><i>Rp '.$total4.'</i></td>';
                                  echo '</tr>';
                                  echo '</table>';
                ?>
                </tbody>
      </table>
    </body>
    </html>
