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
      font-size: 12px;
  }

  td {
    font-size: 14px;
  }

</style>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="#">Kelas</a> / Pembagian Kelas</li>
    </ol>
</div>
   
<div class="col-md-10" style="">
    <h3><b>Pembagian</b> Kelas</h3>
    <hr>

   
</div>

<div class="col-md-10">

  <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Daftar</th>
            <th>Kelas</th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
          <?php

            include '../config/koneksi.php';

            
            $query = mysqli_query($konek, "SELECT * FROM tbl_kelas")or die(mysqli_error($konek));

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
                        ?>
                        <td>
                          <?php
                            
                            if ($data['id_request_kelas']==0){
                              echo 'Belum Dapat Kelas';
                            } 
                            else {
                              $id_request_kelas = $data['id_request_kelas'];
                              $query_kelas = "SELECT * FROM tbl_request_kelas WHERE id_request_kelas = '$id_request_kelas'";
                              $hasil   = mysqli_query($konek, $query_kelas)or die(mysql_error());
                              $tampil  = mysqli_fetch_array($hasil);

                              echo $tampil['nama_kelas'];

                            }
                          ?> 
                        </td>
                        <?php
                        // echo '<td>'.$data['id_request_kelas']=.'</td>';
                        echo '<td  width="20"><center><a data-toggle="tooltip" data-placement="left" title="Edit Kelas" href=tu.php?content=edit-kelas&&kode_daftar='.$data['kode_daftar'].'><i class="fa fa-edit fa-fw"></i></a></center></td>';
                        echo '</tr>';
                        $no++;
                      }
                    }

                ?>

        </tbody>
      </table>
    </form>
</div>