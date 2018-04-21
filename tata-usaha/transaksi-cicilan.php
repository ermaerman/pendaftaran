<style>

  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even){background-color: #bbdfed;}

  th {
      background-color: #3bacd6;
      color: white;
  }

  td {
    font-size: 14px;
  }

</style>

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="#">Transaksi Keuangan</a> / Uang Pangkal / Cicilan</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Transaksi Keuangan</b> Uang Pangkal Cicilan</h3>
  <hr>
  <br>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Daftar</th>
            <th>Pembayaran</th>
            <th>Bukti Pembayaran</th>
            <th>Tanggal Konfirmasi Pembayaran</th>
            <th>Validasi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT id_pembayaran, kode_daftar, pembayaran, bukti_pembayaran, tgl_konfirmasi_bayar, validasi FROM tbl_pembayaran WHERE pembayaran='Uang Pangkal Cicilan Pertama/Kedua'")or die(mysqli_error());
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
                        <td><?php echo $data['pembayaran'] ?></td>
                        <td><?php echo($data['bukti_pembayaran']);?></td>
                        <td><?php echo $data['tgl_konfirmasi_bayar'] ?></td>
                        <td><?php if ($data['validasi']==0) echo "Belum Dikonfirmasi"; else echo "Dikonfirmasi"; ?></td>
                        <td><a data-toggle="tooltip" data-placement="left" title="Edit" href=tu.php?content=edit-konfirmasi-bayar-cicilan&&id_pembayaran=<?php echo $data['id_pembayaran']?>><i class='fa fa-edit fa-fw'></i></a></td></tr>
                      <?php
                        $no++;  
                      }
                    }
                  
                ?>
                    
        </tbody>
      </table>
    </form>
  </div>
</div>


    