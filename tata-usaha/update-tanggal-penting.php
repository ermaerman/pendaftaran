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
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="#">Update</a> / Update Tanggal Penting</li>
  </ol>
</div>
   
<div class="col-md-10" style="min-height:500px">
  <h3><b>Manajemen Update</b> Tanggal Penting</h3>
    <hr>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal Awal Masuk</th>
            <th>Tanggal Awal Daftar</th>
            <th>Tanggal Akhir Daftar</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          //error_reporting();

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_informasi_tanggal")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['tgl_awal_masuk'].'</td>';
                        echo '<td>'.$data['tgl_awal_daftar'].'</td>';
                        echo '<td>'.$data['tgl_akhir_daftar'].'</td>';
                         echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=tu.php?content=edit-tanggal-penting&&id_informasi_tanggal='.$data['id_informasi_tanggal'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
                    
        </tbody>
      </table>
    </form>
  </div>

