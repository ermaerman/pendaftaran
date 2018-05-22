<style>
  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even){background-color: #f76f6f;}

  th {
      background-color: #bf1e29;
      color: white;
      font-size: 12px;
  }

  td {
    font-size: 14px;
  }
</style>

<br>
<br>
<br>
<br>

<div class="container">
 	<ol class="breadcrumb">
        <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / Pengumuman</li>
    </ol>
    <h3><b>&nbsp;&nbsp;Pengumuman Kelulusan </b>Ujian Masuk</h3>
    <hr> 
    <div class="alert alert-danger">
	  <strong>Info!</strong><hr><i>- Keputusan dibawah ini adalah mutlak hasil penilaian penguji SMK Mandalahayu II Bekasi. Perlu diperhatikan bahwa keputusan tidak dapat diganggu gugat.<br> 
        - Bagi anda yang <b>lulus</b> dapat membayar biaya uang pangkal masuk. Untuk rincian biaya dapat klik disini.<br>
        - Bagi anda yang <b>tidak lulus</b> mohon maaf segala bentuk biaya yang telah dibayarkan tidak dapat dikembalikan. Terimakasih.</i>
	</div>
    
    <div class="form-group">
        <div class="col-sm-12">
            <div class="input-group">
                <input type="text" id="myInput" onkeyup="myFunction()" title="Masukkan kode daftar anda" class="form-control" name="" placeholder="Masukkan kode daftar anda" required>
                <span class="input-group-addon"><a href="#"><span class="glyphicon glyphicon-search"></span></a></span>
              </div><br>
        </div>
    </div>

    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Daftar</th>
            <th>Hasil</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_pengumuman")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="3"><i>Belum ada pengumuman kelulusan!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '<td>'.$data['hasil'].'</td>';
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
  