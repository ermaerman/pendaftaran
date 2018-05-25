<style>
* {
  box-sizing: border-box;
}

#myInput {
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 14px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
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
        - Bagi anda yang <b>lulus</b> dapat membayar biaya uang pangkal masuk dan konfirmasi <a data-toggle="tooltip" data-placement="top" title="Konfirmasi Pembayaran" href="index.php?content=konfirmasi-pembayaran">disini</a>. Untuk informasi biaya dapat klik <a data-toggle="tooltip" data-placement="right" title="Informasi Biaya" href="index.php?content=biaya">disini</a>.<br>
        - Bagi anda yang <b>tidak lulus</b> mohon maaf segala bentuk biaya yang telah dibayarkan tidak dapat dikembalikan. Terimakasih.</i>
	</div>
    
    <div class="form-group">
        <div class="col-sm-12">
            <div class="input-group">
                <input size="300px" type="text" id="myInput" onkeyup="myFunction()" placeholder="Masukkan kode daftar anda disini" title="Masukkan kode daftar anda">
              </div><br>
        </div>
    </div>

    <form class="form-horizontal" method="POST">
      <table id="myTable" class="table table-striped">
        <thead>
          <tr>
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
                        echo '<tr  class="header">';
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


<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

  