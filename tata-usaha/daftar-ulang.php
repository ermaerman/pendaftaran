<style>

  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      text-align: left;
      padding: 7px;
  }

  tr:nth-child(even){background-color: #bbdfed;}

  th {
      background-color: #3bacd6;
      color: white;
      font-size: 12px;
  }

  td {
    font-size: 14px;
  }

</style>

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="#">Transaksi Keuangan</a> / Daftar Ulang</li>
  </ol>

</div>
  <div class="col-md-10" style="min-height:500px">
  <h3><b>Transaksi Keuangan</b> Daftar Ulang</h3>
    <hr>
    <p align="right"><a href="print-kartu.php?kode_daftar=<?php echo $kode_daftar ?>" target ="_blank" role="button" class="btn btn-primary"><i class="fa fa-print fa-fw"></i> &nbsp;Print Data Transaksi Keuangan Daftar Ulang</button></a></p>
  
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Daftar</th>
            <th>Bukti Daftar Ulang 11</th>
            <th>Validasi Daftar Ulang 11</th>
            <th>Bukti Daftar Ulang 12</th>
            <th>Validasi Daftar Ulang 12</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_pembayaran WHERE status_pembayaran=1 ORDER BY id_pembayaran DESC")or die(mysqli_error($konek));
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
                        <td><?php echo($data['bukti_daftar_ulang1']);?></td>
                        <td><?php if ($data['validasi_daftar_ulang1']==0) echo "Belum Dikonfirmasi"; else echo "Dikonfirmasi"; ?></td>
                        <td><?php echo($data['bukti_daftar_ulang2']);?></td>
                        <td><?php if ($data['validasi_daftar_ulang2']==0) echo "Belum Dikonfirmasi"; else echo "Dikonfirmasi"; ?></td>
                        <td><a data-toggle="tooltip" data-placement="right" title="Validasi" href=tu.php?content=edit-konfirmasi-daftar-ulang&&id_pembayaran=<?php echo $data['id_pembayaran'] ?>><i class='fa fa-edit fa-fw'></i></a></td></tr>
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
