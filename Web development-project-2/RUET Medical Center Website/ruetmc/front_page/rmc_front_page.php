<?php
 session_start();
 error_reporting(E_ERROR | E_PARSE);
 $_SESSION["page"]="";
?>

<?php
include '../front_page/header.php';
?>



<?php
include '../index_option/index.php';
?>




<!DOCTYPE html>
<html>
<head>
	<title>RUET MEDICAL CENTRE</title>
	 <meta name="viewport" content = "width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" type="text/css" href="../rmcenter_admin/rmc_style_admin_page.css">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	
	<link rel="stylesheet" type="text/css" href="style/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="nivo-slider/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.js">

	<link href="nivo-slider/themes/bar/bar.css" rel="stylesheet" type="text/css"/>
	<link href="nivo-slider/themes/dark/dark.css" rel="stylesheet" type="text/css"/>
	<link href="nivo-slider/themes/light/light.css" rel="stylesheet" type="text/css"/>
	<link href="nivo-slider/themes/default/default.css" rel="stylesheet" type="text/css"/>
	<link href="nivo-slider/themes/nivo-slider.css" rel="stylesheet" type="text/css"/>

	<script type="text/javascript" src="nivo-slider/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="nivo-slider/jquery.nivo.slider.pack.js"></script>

	
</head>


<body>
	

	<div  class="main" style="width:95%; color:black; background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat; height:40%; padding-bottom: 5px;">

	  <div style="width:25%; float:left;float:center; font-size:13px; background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat; height:350px; " >
      <br>
      
      <p style="float:center; text-align:center;">
	 		<a href="hd.html"><img src="logo.png" height=40% width=50%></a>
	 </p>
	 	
	 	<br><br>
	 	
	 		<p style="font-family:faramond; font-size:18px; color: brown; padding:5%; font-size:14px;text-align:center;">RUET medical center provides primary and basic health care facilities to the students (residential and non-residential) free of charges.</p>
	 </div>








	  <div style="width:50%;  float:left;height:350px; padding-bottom:5px;">

	

	

     

			<div id="slider" class="nivoSlider" style="height: 89% ; color: black; ">

			<img   style="height:82%" src="nivo-slider/images/toystory.jpg" data-thumb="images/toystory.jpg" alt="" title="Front side of RUET Medical Center" />

			<img    style="height:82%" src="nivo-slider/images/up.jpg" data-thumb="images/up.jpg" alt="" title="Front side of RUET Medical Center" />

			<img     style="height:82%" src="nivo-slider/images/walle.jpg" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft"  title="Front side of RUET Medical Center"/>

			<img     style="height:82%" src="nivo-slider/images/nemo.jpg" data-thumb="images/nemo.jpg" alt=""  style="text-align:center;" title="Front side of RUET Medical Center" />

			</div>


				  <script type="text/javascript"> 
			$(window).on('load', function() {
			    $('#slider').nivoSlider(); 
			}); 
			</script>



	    </div>








	  <div style="width:25%;float:right; background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
       background-repeat: repeat; padding-left: 20px; text-align:center; height:350px; ul li:hover {background: #555;} ">

           <p style="color: black ; font-size:20px;"><button type="button" class="btn btn-primary" style="height: 85%; width:100%;"> Information Center</button> </p>

           <br>

          <div class="list-group" style="overflow:hidden;">
         
	       <a href="../user_page/doctor_schedule.php" class="list-group-item" style="background: rgb(255,204,204);">
	         <button type="button" class="btn btn-primary" style="height:100%; width:100%; margin-bottom:10px;">Doctors schedule</button> </a>
			
			
			<a href="../project/report_info.php" class="list-group-item" style=" background: rgb(188,191,255);">
			<button type="button" class="btn btn-primary" style="height:100%; width:100%;  margin-bottom:10px;">Report information</button> </a> 
					
				
			<a href="../project/user_eqip.php" class="list-group-item" style="background: rgb(255,204,204);"><button type="button" class="btn btn-primary" style="height:100%; width:100%;  margin-bottom:10px;"> Lab Facility</button> </a>



				
			<a href="../user_page/show_emergency.php" class="list-group-item" style=" background: rgb(188,191,255);">
			<button type="button" class="btn btn-primary" style="height:100%; width:100%;  margin-bottom:10px;">Emergency contact</button> </a>
	
		  </div>

	  </div>

	</div>

	
</body>
</html>

<?php

include ('../front_page/footer.php');
?>

