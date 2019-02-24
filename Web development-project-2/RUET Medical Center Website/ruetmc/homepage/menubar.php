<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
 
 ?>

<!DOCTYPE html>
<html>

<head>
	<title>Welcome to RUET MEDICAL CENTER</title>
	
	<meta name="viewport" content = "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../ruetmc/style/style/style.css">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	
	<link rel="stylesheet" type="text/css" href="../ruetmc/style/style/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../ruetmc/style/style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../ruetmc/style/style/bootstrap.min.js">

	<link href="../ruetmc/style/themes/bar/bar.css" rel="stylesheet" type="text/css"/>
	<link href="../ruetmc/style/themes/dark/dark.css" rel="stylesheet" type="text/css"/>
	<link href="../ruetmc/style/themes/light/light.css" rel="stylesheet" type="text/css"/>
	<link href="../ruetmc/style/themes/default/default.css" rel="stylesheet" type="text/css"/>
	<link href="../ruetmc/style/themes/nivo-slider.css" rel="stylesheet" type="text/css"/>

	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	
</head>

<body>

<div>





	<div class = "fix mainmanu">

		<ul>
		<?php
			if($_SESSION['page']=="")
		 	 	echo '<li class="active"><a href="../front_page/rmc_front_page.php">Home</a></li>';
		 	else
		 		echo '<li><a href="../ruetmc/front_page/rmc_front_page.php">Home</a></li>';

		 	if($_SESSION['page']=='about') 
		 	 	echo '<li class ="active"><a href="../user_page/about.php">About</a></li>';
		 	else
		 		echo '<li><a href="../ruetmc/user_page/about.php">About</a></li>';

		 	if($_SESSION['page']=='contact')
		 		echo '<li class="active"><a href="../user_page/contact.php">Contact Us</a></li>';
		 	else
		 		echo '<li><a href="..ruetmc//user_page/contact.php">Contact Us</a></li>';

		 	if($_SESSION['page']=='helpsupport')
		 		echo '<li class="active"><a href="../user_page/helpsupport.php">Help & Support</a></li>';
		 	else
		 		echo '<li><a href="../ruetmc/user_page/helpsupport.php">Help & Support</a></li>';


		 	if( $_SESSION['page']=='admin')
		 		echo '<li class="active"><a href="../rmcenter_admin/rmc_admin_login.php">Administration</a></li>';
		 	else
		 		echo '<li><a href="../rmcenter_admin/rmc_admin_login.php">Administration</a></li>';

		?>
		 </ul>
	</div>  <!-- end main manu -->

</div> <!-- End main div -->

</body>
</html>