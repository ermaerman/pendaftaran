<?php
  //menyambungkan koneksi
  include '../config/koneksi.php';

//session_start();
//if(isset($_SESSION['username']) ){
//header("Location: 404.php");}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMK Mandalahayu II Bekasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../layout.css">
  <script src="../bootstrap/jquery-3.2.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/script.js"></script>
</head>

<style type="text/css">
      footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
</style>

<script>
  $(document).ready(function() 
  {
    $('[data-toggle="tooltip"]').tooltip();   
  });
</script>

<body align="center">

  <br>
  <br>
  <br>
  <br>
  <br>

<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
          <br>
          <img src="../gambar/login.png" alt="Nature" height="100" width="100">
          <div class="caption">
            <h4><b>LOGIN</b></h4>
            <p><font size="2"><i>Sistem Informasi Pendaftaran Murid Baru <br> SMK Mandalahayu II Bekasi</i></font></p>
            <br>
            <form action="../config/proseslogin.php" method="POST">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Masukkan username anda" required>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Masukkan password anda" required>
              </div>
              <br>
              <button class="btn btn-primary btn-block" type="submit" value="Login">Login</button>
            </form>
          </div>
      </div>
    </div>
  <div class="row">
  <div class="col-md-4"></div>
  </div>
</div>
</div>
</div>

<br>
<br>
<br>
<br>

<footer class="container-fluid text-center">
  <div class="container-fluid text-center">
    <p>2018 © Kerja Praktek | Erma Noviana | 2015230014 | <a href="http://www.unsada.ac.id/" data-toggle="tooltip" data-placement="top" title="Universitas Darma Persada">Universitas Darma Persada</a>. All Rights Reserved.</p>
    <p>Powered by: <a data-toggle="tooltip" data-placement="right" title="Click me!" href="../index.php">SMK Mandalahayu II Bekasi</a></p>
  </div>
</footer>

</body>
</html>
