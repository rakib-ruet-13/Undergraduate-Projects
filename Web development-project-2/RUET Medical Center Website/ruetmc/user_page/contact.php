<?php
include '../rmcenter_admin/init_access.php';
$_SESSION['page']="contact";
?>

<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>





	

<html>
<head>

<title>
	rmcenter_about
</title>

<link rel="stylesheet" type="text/css" href="../rmcenter_admin/rmc_style_admin_page.css">

</head>

<body>

<br>
<br>

<div class="main" style=" width:95%; float:center; background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat; margin-left: 2.5%;">
    <br>
    <br>
		<p style="color:  rgb(102,41,26); font-size:20px; text-align:center; ">Contact Info</p>

		<table style="width:95%; padding: 0px; margin-left:2.5%; text-align:center ;">
			<tr style="color:  rgb(102,41,26); font-size:15px;">
				<td style="width:24%;"><img src="email.png" style="height:20px; width:28%;"/></td>
				<td   style="width:24%;"><img src="phn.png" style="height:20px; width:15%;"/>&nbsp;</td>

				<td  style="width:24%;"><img src="mail.png" style="height:20px; width:9%;"></td>
				<td  style="width:24%;"> <img src="direction.png" style="height:20px; width:14%;"></td>
			</tr>
			
			<tr>
				<td style="width: 24%; padding:10px; background: rgb(128,191,255); "><E-mail>cse.ruet.ac.bd</br><a href="me.gmail.com" style="text-decoration:none; color:green; font-size:15px;">ruet.ac.bd</br>Send an e-mail now...</a></E-mail></td>
				<td style="color: rgb(102,41,26);background: rgb(255,204,204); padding: 10px ; width: 24%;">01915-997662111</br>01712-637265</td>
				<td style="color: rgb(102,41,26) ; width: 24%; background: rgb(128,191,255); padding:10px;">Rajshahi, Bangladesh.</td>
				<td style="color: rgb(102,41,26); width: 24%;padding:10px; background: rgb(255,204,204); padding: 20px ; ; "><address>Rajshahi, Bangladesh.</address><a href="https://www.google.com.bd/maps/place/RUET+CSE+Building/@24.3643328,88.6297711,21z/data=!4m5!3m4!1s0x0:0x62cf7318141ac5ff!8m2!3d24.3643624!4d88.6298686?hl=en" target="_new" style="text-decoration:none; color: red; font-size:15px;">Get direction</a></td>
			</tr>

			<tr>
			</tr>

			<br>

		</table>
		<be>

		<br>
		<br>

	</div>

</body>
</head>
</html>



<?php

echo "<br>";

include '../front_page/footer.php';
?>
