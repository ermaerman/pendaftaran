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
        <li class="active"><a href="#">Kelas</a> / Request Kelas</li>
    </ol>
</div>
   
<div class="col-md-10" style="">
  	<h3><b>Request</b> Kelas</h3>
    <hr>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-fw"></i>Request Kelas</button>
    <br>
    <br>
</div>

<div class="col-md-10">
  <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Jumlah Murid</th>
            <th>Status</th>
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
                        <td><?php echo $data['jumlah_murid'] ?></td>
                        <td><?php if ($data['status']==0) echo "Belum Dikonfirmasi"; else echo "Sudah Dikonfirmasi"; ?></td>
                      </tr>
                        <?php
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
            <h4 class="modal-title" align="center"><b>Request Kelas</b></h4>
          </div>
          <div class="modal-body">
            <form action="../config/add-request-kelas.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Nama Kelas</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                      <input type="text" style="text-transform: capitalize;" class="form-control" name="nama_kelas" placeholder="Nama Kelas" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Jumlah Murid</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                      <input type="number" min="1" max="30" class="form-control" name="jumlah_murid" placeholder="Jumlah Kelas" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-5"></label>
                  <div class="col-sm-6" align="right">
                      <button class="btn btn-primary">Request</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div></div>
