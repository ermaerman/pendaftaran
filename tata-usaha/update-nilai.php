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
      font-size: 12px;
  }

  td {
    font-size: 14px;
  }

</style>

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / <a href="#">Update</a> / Update Hasil Ujian Masuk</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Update</b> Hasil Ujian Masuk</h3>
  <hr>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Daftar</th>
            <th>Nilai Bahasa Indonesia</th>
            <th>Nilai Matematika</th>
            <th>Nilai Bahasa Inggris</th>
            <th>Nilai Kejuruan</th>
            <th>Tes Buta Warna</th>
            <th>Tes Urine / Bebas Narkoba</th>
            <th>Tes Fisik</th>
            <th>Hasil</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_pengumuman ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="11" align="center"><i>Belum ada pengumuman kelulusan!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '<td>'.$data['bahasa_indonesia'].'</td>';
                        echo '<td>'.$data['matematika'].'</td>';
                        echo '<td>'.$data['bahasa_inggris'].'</td>';
                        echo '<td>'.$data['kejuruan'].'</td>';
                        echo '<td>'.$data['buta_warna'].'</td>';
                        echo '<td>'.$data['urine'].'</td>';
                        echo '<td>'.$data['fisik'].'</td>';
                        echo '<td>'.$data['hasil'].'</td>';
                        echo '<td  width="20"><center><a data-toggle="tooltip" data-placement="left" title="Update" href=tu.php?content=edit-pengumuman&&id_pengumuman='.$data['id_pengumuman'].'><i class="fa fa-edit fa-fw"></i></a></center></td>';
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
            <h4 class="modal-title" align="center"><b>Tambahkan Pengumuman Kelulusan</b></h4>
          </div>
          <div class="modal-body">
            <form action="../config/add-pengumuman.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Nama</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-3">Kode Daftar</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                      <input type="number" class="form-control" name="kode_daftar" placeholder="Kode Daftar" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-3">Pengumuman</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-6">
                    <select  type="text" class="form-control" name="pengumuman">
                      <option>-- Pilih --</option>
                      <option>Lulus</option>
                      <option>Tidak Lulus</option>
                    </select>  
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-7" align="right">
                      <button class="btn btn-primary">Tambah</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>

</div>


    