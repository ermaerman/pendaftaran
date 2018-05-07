<br>
<br>
<br>
<br>

<div class="container">
  <ol class="breadcrumb">
    <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / <a href="#">Tentang Kami</a> / Galeri</li>
  </ol>
    <h3><b>&nbsp;&nbsp;Galeri</b></h3>
    <hr>
     <form class="form-horizontal" method="POST">
          <?php

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_galeri ORDER BY id_galeri DESC")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<center><i>';
                      echo 'Belum ada post galeri!';
                      echo '</i></center>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<div class="col-md-4">';
                        echo '<div class="thumbnail">';
                      ?>
                      <p><a data-toggle="tooltip" data-placement="top" title="Lihat Gambar" href="galeri/<?php echo $data['gambar'] ?>" target="_blank"><img src="galeri/<?php echo $data['gambar'] ?>"></a></p>
                      <?php  
                        echo '<hr>';
                        echo '<div class="caption"><p>'.$data['caption'].'</p></div>';
                        echo '<p align="right"><font size="1px"><i>'.$data['tgl_update'].'&nbsp;&nbsp;&nbsp;</i></font></p>';
                        echo '</div>';
                        echo '</div>';
                        $no++;  
                      }
                    }
              
                ?>
    </form>
   
  </div>
</div>
  