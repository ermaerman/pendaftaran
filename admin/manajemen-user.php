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
    <li class="active"><a href="admin.php?content=home-admin">Home</a> / Manajemen User</li>
  </ol>
</div>
   
<div class="col-md-10" style="min-height:500px">
  <h3><b>Manajemen</b> User</h3>
  <hr>
   <form class="form-inline" action="" method="POST">
    <div class="form-group" style="float: right;">
      <input size="34px" type="text" name="pencarian" class="form-control" placeholder="Pencarian">
      <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
      <a href="admin.php?content=manajemen-user"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
    </div>
  </form>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-fw"></i>Tambah User</button>
    <br><br>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th colspan="2"><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
          <?php

            include '../config/koneksi.php';
                       error_reporting(0);

                       $batas  = 8;
                       $hal    = @$_GET['hal'];
                       if (empty($hal)) {
                         $posisi = 0;
                         $hal    = 1;
                       } else {
                         $posisi = ($hal - 1) * $batas;
                       }
                       if($_SERVER['REQUEST_METHOD'] == "POST") {
                         $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
                         if ($pencarian != '') {
                           $sql = "SELECT id_user, nama, username, password, level FROM tbl_user WHERE nama LIKE '%$pencarian%' OR username LIKE '%$pencarian%'";
                           $query = $sql;
                           $queryJml = $sql;
                         } else {
                           $query = "SELECT id_user, nama, username, password, level FROM tbl_user LIMIT $posisi, $batas ";
                           $queryJml = "SELECT id_user, nama, username, password, level FROM tbl_user";
                           $no = $posisi + 1;
                         }
                       } else {
                         $query = "SELECT id_user, nama, username, password, level FROM tbl_user LIMIT $posisi, $batas ";
                         $queryJml = "SELECT id_user, nama, username, password, level FROM tbl_user";
                         $no = $posisi + 1;
                       }

            $querydata = mysqli_query($konek, $query)or die(mysqli_error());
                    if(mysqli_num_rows($querydata) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($querydata)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['username'].'</td>';
                        echo '<td>'.$data['password'].'</td>';
                        echo '<td>'.$data['level'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=admin.php?content=edit-user&&id_user='.$data['id_user'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/delete-user.php?id_user='.$data['id_user'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
                    
        </tbody>
      </table>
    </form>
    <?php
     if($_SERVER['REQUEST_METHOD'] == "POST") {
            $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
        echo "<div style=\"float:left;\">";
        $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
        echo "Data Hasil Pencarian: <b>$jml</b>";
        echo "</div>";
      } else { ?>
        <div style="float:left;">
          <?php
          $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
          echo "Jumlah Data: <b>$jml</b>";
          ?>
        </div>
        <div style="float:right;">
          <ul class="pagination pagination-sm" style="margin: 0">
            <?php
            $jml_hal = ceil($jml / $batas);
            for ($i=1; $i <= $jml_hal; $i++) {
              if ($i != $hal) {
                echo "<li><a href=\"admin.php?content=manajemen-user&&hal=$i\">$i</a></li>";
              } else {
                echo "<li class=\"active\"><a>$i</a></li>";
              }
            }
          }
            ?>  
          </ul>
        </div>
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
            <h4 class="modal-title" align="center"><b>Tambahkan User</b></h4>
          </div>
          <div class="modal-body">
            <form action="../config/add-user.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="col-sm-2"></label>
                <label class="col-sm-2">Nama</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2"></label>
                <label class="col-sm-2">Username</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                      <input type="username" class="form-control" name="username" placeholder="Username" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2"></label>
                  <label class="col-sm-2">Password</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                      <input type="password" class="form-control" name="password" placeholder="Password" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2"></label>
                  <label class="col-sm-2">Level</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                    <select  type="level" class="form-control" name="level">
                      <option>admin</option>
                      <option>tatausaha</option>
                    </select>  
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-6" align="right">
                      <button class="btn btn-primary">Simpan</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
  </div>


    