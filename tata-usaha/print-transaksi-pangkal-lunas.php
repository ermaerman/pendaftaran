 <!DOCTYPE html>
<html>
<head>
  <title>Print Transaksi Keuangan Pangkal Lunas</title>
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
        <div class="panel-heading"><p align="center"><b>Transaksi Keuangan Pangkal Lunas</b></p></div>
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
                <th>Bukti Pembayaran</th>
              </tr>
            </thead>
            <tbody>
 <?php
error_reporting(0);
            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_pembayaran WHERE b_pangkal_lunas='1' ORDER BY id_pembayaran DESC")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="8" align="center"><i>Tidak ada data!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                       while($data = mysqli_fetch_array($query)){  
                      ?>
                        <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data['kode_daftar'] ?></td>
                        <td><img src='<?php echo $data['bukti_pangkal_lunas'];?>' width='30' height='50'></td>
                        </tr>
                      <?php
                        $no++;  
                      }
                    }
                  $edit    = "SELECT COUNT(validasi_pangkal_lunas) AS jumlah FROM tbl_pembayaran WHERE validasi_pangkal_lunas='1'";
                                 $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                                 $data    = mysqli_fetch_array($hasil);  

                                 $jumlah  = $data['jumlah'];

                                 $edit    = "SELECT * FROM tbl_biaya WHERE tahun_pelajaran='2018 / 2019'";
                                 $hasil   = mysqli_query($konek, $edit)or die(mysqli_error($konek));
                                 $data    = mysqli_fetch_array($hasil);  

                                 $pangkal = $data['total_pangkal'];

                                 $total5   = ceil($jumlah * $pangkal);

                                 echo '<br>';
                                 echo '<hr>';
                                  echo '<table>';
                                  echo '<tr>';
                                  echo '<td width="300"><b>Total Uang Pangkal Lunas</b></td><td>:</td> <td><i>Rp '.$total5.'</i></td></tr>';
                                  echo '</table>';
                ?>
                     </tbody>
      </table>
    </body>
    </html>

                    