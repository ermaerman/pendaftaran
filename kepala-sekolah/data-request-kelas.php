<style>

  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even){
    background-color: #bbdfed;
  }

  th {
      background-color: #3bacd6;
      color: white;
      font-size: 14px;
  }

  td {
    font-size: 14px;
  }

</style>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="#">Home</a> / Data Request Kelas</li>
    </ol>
</div>
   
<div class="col-md-10" style="">
  	<h3><b>Data</b> Request Kelas</h3>
    <hr>
    <br>
</div>

<div class="col-md-10">
  <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Status</th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
          <?php

            include '../config/koneksi.php';

            
            $query = mysqli_query($konek, "SELECT * FROM tbl_request_kelas")or die(mysqli_error($konek));

                    if(mysqli_num_rows($query) == 0){
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($query)){
                         ?>
                        <tr>
                        <td><?php echo $no ?></td>
                        <td><?php
                        $kalimat = $data['nama_kelas'];
                        $kalimat_new = ucwords($kalimat);
                        echo $kalimat_new;
                        ?></td>
                        <td><?php if ($data['status']==0) echo "Belum Dikonfirmasi"; else echo "Sudah Dikonfirmasi"; ?></td>
                        <?php
                         echo '<td  width="20"><center><a data-toggle="tooltip" data-placement="left" title="Edit Status" href=kepsek.php?content=edit-status-request-kelas&&id_request_kelas='.$data['id_request_kelas'].'><i class="fa fa-edit fa-fw"></i></a></center></td>';
                        echo '</tr>';
                        $no++;
                      }
                    }

                ?>

        </tbody>
      </table>
    </form>
</div>

