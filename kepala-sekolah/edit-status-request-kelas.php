<?php

    //error_reporting(0);

    include '../config/koneksi.php';

    $id_request_kelas   = $_GET['id_request_kelas'];

    $edit    = "SELECT * FROM tbl_request_kelas WHERE id_request_kelas = '$id_request_kelas'";
    $hasil   = mysqli_query($konek, $edit)or die(mysqli_error());
    $data    = mysqli_fetch_array($hasil);

?>

<div class="col-md-10" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li class="active"><a href="kepsek.php?content=home-kepala-sekolah">Home</a> / Edit Status Request Kelas</li>
    </ol>
</div>

<div class="col-md-10" style="min-height:500px">
  <h3><b>Edit</b> Status Request Kelas</h3>
    <hr> 
        <form class="form-horizontal" method="POST">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Validasi Request Kelas</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <input type="hidden" name="id_request_kelas">
                <tr>
                  <tr>
                  <th><font size="2px">Nama Kelas</font></th>
                  <td width="800"><i><font size="2px"><?php echo $data['nama_kelas'];?></font></i></td>
                </tr>
                <tr>
                  <th><font size="2px">Status</font></th>
                  <td><font size="2px"><i><?php echo $data['status']; ?></i></font></td>
                </tr>
                <tr>
                  <th><font size="2px">Jumlah Murid</font></th>
                  <td><font size="2px"><i><?php echo $data['jumlah_murid']; ?></i></font></td>
                </tr>
              </table>
              <p align="right">
                <button type="submit" formaction="../config/update-request-kelas.php?id_request_kelas=<?php echo $data['id_request_kelas'] ?>" class="btn btn-primary">Konfirmasi</button>
                <a href="kepsek.php?content=data-request-kelas"><button type="button" class="btn btn-default">Kembali</button></a></p>
            </div>
          </div>
      </form>
  </div>
</div>
