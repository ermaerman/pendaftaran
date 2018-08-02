  <!DOCTYPE html>
<html>
<head>
  <title>Print Rekap Keuangan Pertahun</title>
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
        <div class="panel-heading"><p align="center"><b>Print Rekap Keuangan Pertahun</b></p></div>
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
                    <th>Tahun Pelajaran</th>
                    <th>Total Keuangan</th>
                  </tr>
                </thead>
                <tbody>
 <?php

            include '../config/koneksi.php';

            
            $query = mysqli_query($konek, "SELECT DISTINCT * FROM tbl_rekap")or die(mysqli_error($konek));

                    if(mysqli_num_rows($query) == 0){
                      echo '<tr><td colspan="6" align="center">Tidak ada data!</td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($query)){
                        echo '<tr>';
                        echo '<td width="50">'.$no.'</td>';
                        echo '<td>'.$data['tahun_pelajaran'].'</td>';
                        echo '<td>Rp.'.number_format($data['rekap']).'</td>';
                        $no++;
                      }
                    }

                ?>
                                                                   </tbody>
      </table>
    </body>