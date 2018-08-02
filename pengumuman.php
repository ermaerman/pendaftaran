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
  <ol class="breadcrumb"> <table class="table">
                                        <tr>
                                        <th><br><p align="center"></th>
                                        <td><br><p align="center"><img src="gambar/manda.png" height="100"><br><font size="5px"><b>YAYASAN MANDALAHAYU</b></font><br>
                                                <font size="6px"><b>SMK MANDALAHAYU II BEKASI</b></font><br>Jl. Pengasinan Tengah No.99, Pengasinan, Rawalumbu, Kota Bks, Jawa Barat 17115</p></td>
                                        </tr>
                                      </table>
  </ol>
 	<ol class="breadcrumb">
        <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / Pengumuman</li>
    </ol>
    <h3><b>&nbsp;&nbsp;Pengumuman Kelulusan </b>Ujian Masuk</h3>
    <hr>
    <div class="alert alert-danger">
	  <strong>Info!</strong><hr><i>- Keputusan dibawah ini adalah mutlak hasil penilaian penguji SMK Mandalahayu II Bekasi. Perlu diperhatikan bahwa keputusan tidak dapat diganggu gugat.<br>
        - Bagi anda yang <b>Lulus</b> dapat membayar biaya uang pangkal masuk dan konfirmasi <a data-toggle="tooltip" data-placement="top" title="Konfirmasi Pembayaran" href="index.php?content=konfirmasi-pembayaran">disini</a>. Untuk informasi biaya dapat klik <a data-toggle="tooltip" data-placement="right" title="Informasi Biaya" href="index.php?content=biaya">disini</a>.<br>
        - Bagi anda yang tidak tidak terdapat kode daftarnya dibawah ini maka mohon maaf anda dinyatakan <b>Tidak Lulus</b>, <br>&nbsp;&nbsp;pembayaran pendaftaran / administrasi yang telah dibayarkan tidak dapat dikembalikan. Terimakasih.</i>
	</div>

    <div class="form-group">
        

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#all">Semua Data</a></li>
            <li><a data-toggle="tab" href="#menu1">Lulus</a></li>
            <li><a data-toggle="tab" href="#menu2">Tidak Lulus</a></li>
          </ul>

          <div class="tab-content">
            <div id="all" class="tab-pane fade in active">
              <br>
              <div class="col-sm-12">
                  <div class="input-group">
                      <input size="300px" type="text" id="myInput" onkeyup="myFunction()" placeholder="Masukkan kode daftar anda disini" title="Masukkan kode daftar anda">
                    </div><br>
              </div>
              <br>
              <p> 
                <form class="form-horizontal" method="POST">
      <table border="1px" id="myTable" class="table table-striped">
        <thead>
          <tr>
            <th><center>Kode Daftar</center></th>
            <th><center>Bahasa Indonesia</center></th>
            <th><center>Matematika</center></th>
            <th><center>Bahasa Inggris</center></th>
            <th><center>Kejuruan</center></th>
            <th><center>Buta Warna</center></th>
            <th><center>Urine</center></th>
            <th><center>Fisik</center></th>
            <th><center>Hasil</center></th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
          <?php

          error_reporting();

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_pengumuman ORDER BY id_pengumuman DESC")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){
                      echo '<tr><td colspan="3"><i>Belum ada pengumuman kelulusan!</i></td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($query)){
                        echo '<tr  class="header">';
                        echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '<td>'.$data['bahasa_indonesia'].'</td>';
                        echo '<td>'.$data['matematika'].'</td>';
                        echo '<td>'.$data['bahasa_inggris'].'</td>';
                        echo '<td>'.$data['kejuruan'].'</td>';
                        echo '<td>'.$data['buta_warna'].'</td>';
                        echo '<td>'.$data['urine'].'</td>';
                        echo '<td>'.$data['fisik'].'</td>';
                        ?>
                        <td><?php if ($data['hasil']==1) { 
                          echo "Lulus"; 
                          echo '<td><center><a data-toggle="tooltip" data-placement="right" title="Klik disini untuk input ukuran baju" href=index.php?content=ukuran-baju&&kode_daftar='.$data['kode_daftar'].'><span class="glyphicon glyphicon-circle-arrow-right"></span> Input Ukuran Baju</a></center></td>';
                          echo '</tr>'; }

                          else  { 
                            echo "Tidak Lulus";
                             echo '<td></td>';
                          echo '</tr>'; } 
                          ?></td>
                        <?php
                       
                        $no++;
                      }
                    }

                ?>

        </tbody>
      </table>
    </form></p>
            </div>
            <div id="menu1" class="tab-pane fade">
              <br>
              <p><form class="form-horizontal" method="POST">
      <table border="1px" id="myTable" class="table table-striped">
        <thead>
          <tr>
            <th><center>Kode Daftar</center></th>
            <th><center>Bahasa Indonesia</center></th>
            <th><center>Matematika</center></th>
            <th><center>Bahasa Inggris</center></th>
            <th><center>Kejuruan</center></th>
            <th><center>Buta Warna</center></th>
            <th><center>Urine</center></th>
            <th><center>Fisik</center></th>
            <th><center>Hasil</center></th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
          <?php

          error_reporting();

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_pengumuman WHERE hasil='1' ORDER BY id_pengumuman DESC")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){
                      echo '<tr><td colspan="3"><i>Belum ada pengumuman kelulusan!</i></td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($query)){
                        echo '<tr  class="header">';
                        echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '<td>'.$data['bahasa_indonesia'].'</td>';
                        echo '<td>'.$data['matematika'].'</td>';
                        echo '<td>'.$data['bahasa_inggris'].'</td>';
                        echo '<td>'.$data['kejuruan'].'</td>';
                        echo '<td>'.$data['buta_warna'].'</td>';
                        echo '<td>'.$data['urine'].'</td>';
                        echo '<td>'.$data['fisik'].'</td>';
                        ?>
                        <td><?php if ($data['hasil']==1) { 
                          echo "Lulus"; 
                          echo '<td><center><a data-toggle="tooltip" data-placement="right" title="Klik disini untuk input ukuran baju" href=index.php?content=ukuran-baju&&kode_daftar='.$data['kode_daftar'].'><span class="glyphicon glyphicon-circle-arrow-right"></span> Input Ukuran Baju</a></center></td>';
                          echo '</tr>'; }

                          else  { 
                            echo "Tidak Lulus";
                             echo '<td></td>';
                          echo '</tr>'; } 
                          ?></td>
                        <?php
                       
                        $no++;
                      }
                    }

                ?>

        </tbody>
      </table>
    </form></p>
            </div>
            <div id="menu2" class="tab-pane fade">
              <br>
              <p><form class="form-horizontal" method="POST">
      <table border="1px" id="myTable" class="table table-striped">
        <thead>
          <tr>
           <th><center>Kode Daftar</center></th>
            <th><center>Bahasa Indonesia</center></th>
            <th><center>Matematika</center></th>
            <th><center>Bahasa Inggris</center></th>
            <th><center>Kejuruan</center></th>
            <th><center>Buta Warna</center></th>
            <th><center>Urine</center></th>
            <th><center>Fisik</center></th>
            <th><center>Hasil</center></th>
          </tr>
        </thead>
        <tbody>
          <?php

          error_reporting();

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_pengumuman WHERE hasil='0' ORDER BY id_pengumuman DESC")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){
                      echo '<tr><td colspan="3"><i>Belum ada pengumuman kelulusan!</i></td></tr>';
                    }
                      else
                    {
                      $no = 1;
                      while($data = mysqli_fetch_array($query)){
                        echo '<tr  class="header">';
                         echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '<td>'.$data['bahasa_indonesia'].'</td>';
                        echo '<td>'.$data['matematika'].'</td>';
                        echo '<td>'.$data['bahasa_inggris'].'</td>';
                        echo '<td>'.$data['kejuruan'].'</td>';
                        echo '<td>'.$data['buta_warna'].'</td>';
                        echo '<td>'.$data['urine'].'</td>';
                        echo '<td>'.$data['fisik'].'</td>';
                        ?>
                        <td><?php if ($data['hasil']==1) { 
                          echo "Lulus"; 
                          echo '<td><center><a data-toggle="tooltip" data-placement="right" title="Klik disini untuk input ukuran baju" href=index.php?content=ukuran-baju&&kode_daftar='.$data['kode_daftar'].'><span class="glyphicon glyphicon-circle-arrow-right"></span> Input Ukuran Baju</a></center></td>';
                          echo '</tr>'; }

                          else  { 
                            echo "Tidak Lulus";
                          echo '</tr>'; } 
                          ?></td>
                        <?php
                       
                        $no++;
                      }
                    }

                ?>

        </tbody>
      </table>
    </form></p>
            </div>
            <div id="menu3" class="tab-pane fade">
              <h3>Menu 3</h3>
              <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
          </div>
    </div>

   
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
