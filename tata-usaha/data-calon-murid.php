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

<div class="col-md-10" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="tu.php?content=home-tata-usaha">Home</a> / Data Calon Murid</li>
      </ol>
  </div>
   
<div class="col-md-10" style="min-height:100px">
  <h3><b>Data</b> Calon Murid</h3>
  <hr>
  <input size="300px" type="text" id="myInput" onkeyup="myFunction()" placeholder="Masukkan nama calon murid disini" title="Masukkan kode daftar anda">
</div>

 
<div class="col-md-10" style="min-height:100px">
  <form class="form-horizontal" method="POST">
      <table id="myTable" class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Tahun Pelajaran</th>
            <th>Program Studi</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Nomer Telepon</th>
            <th>Tanggal Daftar</th>
            <th>Kode Daftar</th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
          <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_data_calon_murid WHERE status='0' order by id_calon_murid DESC")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['tahun_pelajaran'].'</td>';
                        echo '<td>'.$data['prodi'].'</td>';
                        echo '<td>'.$data['nisn'].'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['tgl_lahir'].'</td>';
                        echo '<td>'.$data['agama'].'</td>';
                        echo '<td>'.$data['telepon_rumah'].'</td>';
                        echo '<td>'.$data['tgl_daftar'].'</td>';
                        echo '<td>'.$data['kode_daftar'].'</td>';
                        echo '<td  width="20"><center><a data-toggle="tooltip" data-placement="left" title="Lihat Data Lengkap" href=tu.php?content=edit-calon-murid&&id_calon_murid='.$data['id_calon_murid'].'><i class="fa fa-bars fa-fw"></i></a></center></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
                ?>     
        </tbody>
      </table>
    </form>
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