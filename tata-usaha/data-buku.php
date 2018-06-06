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
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / Data LKS</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Data</b> LKS</h3>
    <hr>
    <br>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Daftar</th>
            <th>LKS</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

           error_reporting(0);

            include '../config/koneksi.php';

            $id_lks = $_GET['id_lks'];
            $kode_daftar = $_GET['kode_daftar'];

            $query = mysqli_query($konek, "SELECT * FROM tbl_lks")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($query)){
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '<td>'.$data['lks'].'</td>';
                        echo '<td>'.$data['keterangan'].'</td>';
                        echo '<td>'.$data['status_buku'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="right" title="Edit Keterangan" href=tu.php?content=edit-buku&&kode_daftar='.$data['kode_daftar'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;
                      }
                    }

                ?>

        </tbody>
      </table>
    </form>
  </div>

  </div>
</div>
