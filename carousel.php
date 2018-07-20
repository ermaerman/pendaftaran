<br>
<br>
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
    font-size: 14px;
}

#myVideo {
    margin-top: 200;
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}

.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}

#myBtn {
    width: 200px;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
}

#myBtn:hover {
    background: #ddd;
    color: black;
}
</style>
<body>

<video autoplay muted loop id="myVideo">
  <source src="video/manda.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
  <table>
    <tr><td><img height="120" width="160" src="gambar/manda.png"></td>
      <td>
  <h1>SMK MANDALAHAYU II BEKASI</h1><hr>
  <p>Jl. Pengasinan Tengah No.99, Pengasinan, Rawalumbu, Kota Bks, Jawa Barat 17115</p>
  <p>Telp. (021) 82415236</p> <p>Email: smkmandalahayu2.sm2@gmail.com</p>
  <br></td></tr>
</table>
<div align="right">
  <button id="myBtn" onclick="myFunction()"><span class="glyphicon glyphicon-pause"></span> Pause</button>
</div></div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "<span class='glyphicon glyphicon-pause'></span> Pause";
  } else {
    video.pause();
    btn.innerHTML = "<span class='glyphicon glyphicon-play'></span> Play";
  }
}
</script>

</body>
