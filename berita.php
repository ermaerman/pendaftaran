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
    <li class="active"><a data-toggle="tooltip" data-placement="top" title="Click me!" href="index.php">SMK Mandalahayu II Bekasi</a> / Berita</li>
  </ol>
    <h3><b>&nbsp;&nbsp;Berita</b></h3>
    <?php
    $python = `python python.py`;
    echo $python;
    ?>
    <hr>
     <form class="form-horizontal" method="POST">
          <?php
          

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tbl_berita ORDER BY id_berita DESC")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<center><i>';
                      echo 'Belum ada berita!';
                      echo '</i></center>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<div class="col-md-12">';
                        echo '<div class="thumbnail">';
                        echo '<br>';
                        echo '<p><b>'.$data['judul'].'</b></p>';
                        echo '<hr>';
                        echo '<p align="justify">'.substr($data['berita'], 0,300).'&nbsp;<a data-toggle="tooltip" data-placement="bottom" title="Baca selanjutnya" href=index.php?content=lihat-berita&&id_berita='.$data['id_berita'].'>baca selanjutnya ..</a></p>';
                        echo '<p align="right"><i><font size="1px">'.$data['tgl_berita'].'&nbsp;&nbsp;&nbsp;</font></i></p>';
                        echo '</div>';
                        echo '</div>';
                        $no++;  
                      }
                    }
              
                ?>
                    
        </tbody>
      </table>
    </form>
   
  </div>
</div>
  