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
    <li class="active"><a href="#">Update</a> / Galeri</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Galeri</b></h3>
  <hr>
  <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-fw"></i>Tambah Galeri Foto</button>
      <br>
      <br>
      <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Caption</th>
            <th>Tanggal Update</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_galeri ORDER BY id_galeri DESC")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center"><i>Belum ada post galeri!<i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['gambar'].'</td>';
                        echo '<td>'.$data['caption'].'</td>';
                        echo '<td>'.$data['tgl_update'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=admin.php?content=edit-galeri&&id_galeri='.$data['id_galeri'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/delete-galeri.php?id_galeri='.$data['id_galeri'].'><i class="fa fa-trash fa-fw"></i></a></td>';
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
            <h4 class="modal-title" align="center"><b>Tambahkan Galeri Foto</b></h4>
          </div>
          <div class="modal-body">
            <form action="../config/add-galeri.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-2">Gambar</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-7">
                      <input type="file" name="fileToUpload" id="fileToUpload">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-2">Caption</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" id="inputlg" name="caption" placeholder="Tulis Caption" required>
                  </div>
              </div>
              <input type="hidden" name="tgl_update" value="<?php $tgl=date('d-m-Y'); echo $tgl; ?>">
              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-7" align="right">
                      <button type="submit" class="btn btn-primary">Update</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
</div>