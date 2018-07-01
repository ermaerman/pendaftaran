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
        <li class="active"><a href="#">Kelas</a> / Naik Kelas</li>
    </ol>
</div>
   
<div class="col-md-10" style="">
  	<h3><b>Naik</b> Kelas</h3>
    <hr>
    <br>
    <div class="form-group">
        <div class="col-sm-12">
            <div class="input-group">
                <input type="text" class="form-control" name="" placeholder="Cari .." required>
                <span class="input-group-addon"><a href="#"><i class="fa fa-search fa-fw"></i></a></span>
              </div>
        </div>
    </div>
</div>

<div class="col-md-10">
<hr>
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
                        echo '<td>'.$data['kelas'].'</td>';
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
