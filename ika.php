<?php
  
  include 'config/koneksi.php';
 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="ap1" sizes="76x76" href="image/ap1.png">
	<link rel="icon" type="image/png" href="image/ap1.png">	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Angkasa Pura Flight Information Display System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
	  <link href="assets/css/gsdk.css" rel="stylesheet" />  
    <link href="assets/css/demo.css" rel="stylesheet" /> 
    
    <!--     Font Awesome     -->
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  </head>
  <body>
  <div id="navbar-full">
    <div class="container">
        <nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                        <div class="logo">
                            <img src="image/ap1.png" width="270px" height="100px">
                        </div>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
           
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
    
   
<div id="carousel">
    <!--    
            IMPORTANT - This carousel can have a special class for a smooth transition "gsdk-transition". Since javascript cannot be overwritten, if you want to use it, you can use the bootstrap.js or bootstrap.min.js from the GSDKit or you can open your bootstrap.js file, search for "emulateTransitionEnd(600)" and change it with "emulateTransitionEnd(1200)"     
            
    -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" align="center">
        <div class="item active">
          <img src="image/gambar1.jpg" alt="Awesome Image" width="1400px" height="600px">
        </div>
        <div class="item">
          <img src="image/gambar2.jpg" alt="Awesome Image" width="1400px" height="600px">
        </div>
      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="fa fa-angle-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="fa fa-angle-right"></span>
      </a>
    </div>
</div> <!-- end carousel -->
<div class="main">
    <div class="container tim-container">
        <div class="col-sm-4">
          <br>
      <select name="bandara" class="form-control">
      <option>-- Select Airport --</option>
      <option value="01">Bandara Internasional Ngurah Rai</option>
      <option value="02">Bandara Adi Sumarmo</option>
      <option value="03">Bandara Adi Sujipto</option>
      <option value="04">Bandara Internasional Ahmad Yani</option>
      <option value="05">Bandara Internasional El-Tari</option>
      <option value="06">Bandara Fans Kaisepo</option>
      <option value="07">Bandara Sultan Hasanudin</option>
      <option value="08">Bandara Internasional Juanda</option>
      <option value="09">Bandara Internasional Lombok</option>
      <option value="10">Bandara Selaparang</option>
      <option value="11">Bandara Pattimura</option>
      <option value="12">Bandara Sam Ratulangi</option>
      </select>
       </div>  
        <div class="col-sm-4">
          <br>
      <select name="flight" class="form-control">
      <option>-- Select Flight--</option>
      <option value="01">Domestic</option>
      <option value="02">International</option>
      </select>
       </div>  
         <div class="col-sm-4">
          <br>
      <select name="track" class="form-control">
      <option>-- Select Track--</option>
      <option value="01">Arrival</option>
      <option value="02">Departure</option>
      </select> &nbsp;&nbsp;&nbsp;
       <button type="submit" class="btn btn-info btn-fill" name="select" align="center">Search</button>
       <br>
       <br>
      </div> 
      <div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
              <thread>
                <tr>
                  <th>No.</th>
                  <th>Airlines</th>
                  <th>Flight</th>
                  <th>Destination</th>
                  <th>Schedule</th>
                  <th>Status</th>
                </tr>  
              </thread>
               <?php

                include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM fids")or die(mysqli_error($konek));
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['airlines'].'</td>';
                        echo '<td>'.$data['flight'].'</td>';
                        echo '<td>'.$data['destination'].'</td>';
                        echo '<td>'.$data['schedule'].'</td>';
                        echo '<td>'.$data['status'].'</td>';
                        $no++;  
                      }
                    }
              
                ?>
              </table>
    </div>
<!-- end container -->
<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Ika Wastiningsih | 2015230010 | Kerja Praktek | Teknik Informatika | Universitas Darma Persada
          </small>
        </div>
      </div>
    </footer>
</div>
</div>
</div>



</body>

    <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/gsdk-checkbox.js"></script>
	<script src="assets/js/gsdk-radio.js"></script>
	<script src="assets/js/gsdk-bootstrapswitch.js"></script>
	<script src="assets/js/get-shit-done.js"></script>
    <script src="assets/js/custom.js"></script>

<script type="text/javascript">
         
    $('.btn-tooltip').tooltip();
    $('.label-tooltip').tooltip();
    $('.pick-class-label').click(function(){
        var new_class = $(this).attr('new-class');  
        var old_class = $('#display-buttons').attr('data-class');
        var display_div = $('#display-buttons');
        if(display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
        }
    });
    $( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
	});
	$( "#slider-default" ).slider({
			value: 70,
			orientation: "horizontal",
			range: "min",
			animate: true
	});
	$('.carousel').carousel({
      interval: 4000
    });
      
    
</script>
</html>