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
    <li class="active"><a href="admin.php?content=home-admin">Home</a> / FAQ</li>
  </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Helpdesk</b></h3>
  <hr>
  <br>
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Waktu</th>
            <th>FAQ</th>
            <th>Balasan</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_faq ORDER BY tanggal DESC")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="7" align="center"><i>Belum ada pertanyaan / komentar!<i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['email'].'</td>';
                        echo '<td>'.$data['tanggal'].'</td>';
                        echo '<td>'.$data['comment'].'</td>';
                        echo '<td>'.$data['balasan'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=admin.php?content=edit-faq&&id_faq='.$data['id_faq'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/delete-faq.php?id_faq='.$data['id_faq'].'><i class="fa fa-trash fa-fw"></i></a></td>';
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


    