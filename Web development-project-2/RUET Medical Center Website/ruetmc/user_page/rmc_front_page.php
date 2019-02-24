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
	<div style="width:960px; float:center; margin:25px;">


	

	

	<div>

		<div style="height:400px; width:20%; float:left; background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat;  ">
	  	  <center>
			<p style="color:black; font-size:21px; font-family:verdana;">Medical Centre</p>
	 		<a href="hd.html"><img src="logo.png" height="30%" width="70%"></a>
	 		<p style="font-family:faramond; font-size:16px; color:black;">RUET medical center provides primary and basic health care facilities to the students (residential and non-residential) free of charges.</p>
	      </center>	
		</div>
	


		<div style="height:400px; width:20%; background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
             background-repeat: repeat; float:right;">
			<table style="color:green; font-size:20px; padding:15px">
				<tr>
				<td align="center"><a href="../user_page/doctor_schedule.php" style="text-decoration:none; font-size:18px; color:green;font-family:Arial; text-align: center; padding-left:25px;">Doctors schedule</a><br><br></td>
				
				</tr>
				<br>
				<tr>
				<td align="center"><a href="" style="text-decoration:none; font-size:18px; font-family:Arial; text-align: center;color:green;padding-left:25px;">Report information</a><br><br></td>
				
				</tr>
				<br>
				<tr>
				<td align="center"><a href="" style="text-decoration:none; font-size:18px; font-family:Arial;text-align: center;color:green;padding-left:25px;">Lab Facility</a>	<br><br></td>

				</tr>
				<br>
				
			</table>
		</div>

		<div style="height:400px; width:60%; float:left;"><br>
		  <center>
			<img src="medical.jpg" style="height:100%; width:95%;" />
		  </center>
		</div>
	</div>	

	</div>

	<br> <br>

</body>
</html>


<?php
include '../front_page/footer.php';
?>
