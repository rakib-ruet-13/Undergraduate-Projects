<?php
 session_start();
 error_reporting(E_ERROR | E_PARSE);
 $_SESSION["page"]="";
?>

<?php
include '../front_page/header.php';
?>



<?php
include '../index_option/option.php';
?>




<!DOCTYPE html>
<html>
<head>
	<title>RUET MEDICAL CENTRE</title>
</head>


<body>
	

	<div style="width:100%; color:black; background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat; height:60%">

	  <div style="width:25%; float:left;float:center; font-size:13px; background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat; height:400px;" >
      <br>
      
      <p style="float:center; text-align:center;">
	 		<a href="hd.html"><img src="logo.png" height=40% width=50%></a>
	 </p>
	 	
	 	
	 		<p style="font-family:faramond; font-size:18px; color:black; padding:5%; font-size:14px;text-align:center;">RUET medical center provides primary and basic health care facilities to the students (residential and non-residential) free of charges.</p>
	 </div>


	  <div style="width:50%; background: red; float:left;height:400px;">

	  
	  <img style="float:center;" src="medical.jpg" height=100% width=100%>


	  </div>




	  <div style="width:25%;float:right; background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat; padding:25px;text-align:center;height:400px;">


            
            <br>
            <br>
              <p style="color: black ; font-size:20px;"> Information Center </p>
          
		  <br>
		  <br>
	        <a href="../user_page/doctor_schedule.php" style="text-decoration:none; font-size:16px; color:green;font-family:Arial; text-align: center; padding-left:25px;">Doctors schedule</a>
			<br>	
			<br>
			
			<a href="../project/report_info.php" style="text-decoration:none; font-size:16px; font-family:Arial; text-align: center;color:green;padding-left:25px;">Report information</a>
				<br>
				<br>	
				
			<a href="../project/user_eqip.php" style="text-decoration:none; font-size:16px; font-family:Arial;text-align: center;color:green;padding-left:25px;">Lab Facility</a>
			

	  </div>


     

     <br>
     <br>

	</div>
	<br>

	<div  style="color:black; background: rgba(122,222,124,0.2); color:white ; width:100% ; float:center ; text-align:center;">
      

        <p style="color:white;">&copy;RUETMedicalCenter <br>all rights reserved.<br></p>
         
    </div>


	
	

	
</body>
</html>

