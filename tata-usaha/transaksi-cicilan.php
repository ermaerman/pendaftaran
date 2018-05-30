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
      font-size: 11px;
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
            <th>Cicilan 1</th>
            <th>Bukti Cicilan 1</th>
            <th>Validasi Cicilan 1</th>
            <th>Cicilan 2</th>
            <th>Bukti Cicilan 2</th>
            <th>Validasi Cicilan 2</th>
            <th>Cicilan 3</th>
            <th>Bukti Cicilan 3</th>
            <th>Validasi Cicilan 3</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT id_pembayaran, kode_daftar, b_pangkal_cicil1, bukti_pangkal_cicil1, validasi_pangkal_cicil1, b_pangkal_cicil2, bukti_pangkal_cicil2, validasi_pangkal_cicil2, b_pangkal_cicil3, bukti_pangkal_cicil3, validasi_pangkal_cicil3 FROM tbl_pembayaran WHERE b_pangkal_cicil1='1'")or die(mysqli_error());
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
                        <td><?php echo $data['b_pangkal_cicil1'] ?></td>
                        <td><?php echo $data['bukti_pangkal_cicil1'] ?></td>
                        <td><?php echo $data['validasi_pangkal_cicil1'] ?></td>
                        <td><?php echo $data['b_pangkal_cicil2'] ?></td>
                        <td><?php echo $data['bukti_pangkal_cicil2'] ?></td>
                        <td><?php echo $data['validasi_pangkal_cicil2'] ?></td>
                        <td><?php echo $data['b_pangkal_cicil3'] ?></td>
                        <td><?php echo $data['bukti_pangkal_cicil3'] ?></td>
                        <td><?php echo $data['validasi_pangkal_cicil3'] ?></td>
                        <td><a data-toggle="tooltip" data-placement="left" title="Edit" href=tu.php?content=edit-konfirmasi-bayar-cicilan&&kode_daftar=<?php echo $data['kode_daftar']?>><i class='fa fa-edit fa-fw'></i></a></td></tr>
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
