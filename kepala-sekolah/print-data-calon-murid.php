 <!DOCTYPE html>
<html>
<head>
  <title>Print Data Murid</title>
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
        <div class="panel-heading"><p align="center"><b>Print Data Calon Murid</b></p></div>
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
             <th>No</th>
            <th>Tahun Pelajaran</th>
            <th>Program Studi</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Nomer Telepon</th>
            <th>Tanggal Daftar</th>
            <th>Kode Daftar</th>
          </tr>
        </thead>
        <tbody>
<?php
          error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_data_calon_murid WHERE status='0' ORDER BY id_calon_murid DESC")or die(mysqli_error($konek));
                    if(mysqli_num_rows($query) == 0){
                      echo '<tr><td colspan="8" align="center"><i>Tidak ada data!</i></td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($query)){
                     echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['tahun_pelajaran'].'</td>';
                        echo '<td>'.$data['prodi'].'</td>';
                        echo '<td>'.$data['nisn'].'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['tgl_lahir'].'</td>';
                        echo '<td>'.$data['agama'].'</td>';
                        echo '<td>'.$data['telepon_rumah'].'</td>';
                        echo '<td>'.$data['tgl_daftar'].'</td>';
                        echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '</tr>';
                        $no++;
                      }
                    }
                                ?>
             </tbody>
      </table>
    </body>
    </html>