<style type="text/css">

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
        <li class="active"><a href="#">Update</a> / Update Tanggal Ujian Masuk</li>
    </ol>
</div>
   
<div class="col-md-10" style="">
  	<h3><b>Update</b> Tanggal Ujian Masuk</h3>
    <hr>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-fw"></i>Tambah Tanggal Ujian Masuk</button>
    <br>
    <br>
</div>

<div class="col-md-10">
  <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Pukul</th>
            <th>Tempat</th>
            <th>Pakaian</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include '../config/koneksi.php';
            error_reporting(0);

            
            $query = mysqli_query($konek, "SELECT * FROM tbl_tanggal_ujian ORDER BY id_tanggal_ujian DESC")or die(mysqli_error($konek));

                    if(mysqli_num_rows($query) == 0){
                      echo '<tr><td colspan="6" align="center">Tidak ada data!</td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($query)){
                         echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['tanggal'].'</td>';
                        echo '<td>'.$data['pukul'].'</td>';
                        echo '<td>'.$data['tempat'].'</td>';
                        echo '<td>'.$data['pakaian'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=tu.php?content=edit-tanggal-ujian&&id_tanggal_ujian='.$data['id_tanggal_ujian'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/delete-tanggal-ujian.php?id_tanggal_ujian='.$data['id_tanggal_ujian'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;
                      }
                    }

                ?>

        </tbody>
      </table>
    </form>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#3bacd6";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p align="center"><img src="../gambar/manda.png" alt="" height="100px" width="130px"></p>
            <p align="center"><font size="2px"><i>Sistem Informasi Pendaftaran SMK Mandalahayu II Bekasi</i></font></p>
            <h4 class="modal-title" align="center"><b>Tambah Tanggal Ujian Masuk</b></h4>
          </div>
          <div class="modal-body">
            <form action="../config/add-tanggal-ujian.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Tanggal</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                      <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Pukul</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="pukul" placeholder="Masukkan Waktu" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Tempat</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="tempat" placeholder="Masukkan Tempat" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Pakaian</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="pakaian" placeholder="Masukkan Pakaiam" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-5"></label>
                  <div class="col-sm-6" align="right">
                      <button class="btn btn-primary">Tambah</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div></div>
