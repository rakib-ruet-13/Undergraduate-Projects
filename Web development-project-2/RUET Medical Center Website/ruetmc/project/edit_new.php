<?php
include '../rmcenter_admin/init_restrict_access.php';
$_SESSION['page']="admin";
?>
<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>





<html>
<head>
</head>
<body>
<header>
</header>
<div class="container">
<form action="edit6.php" method="post">
<h1><b>Fill the form</b></h1>
<div>
<input type="text" name="name" placeholder="Test name">
</div>
<div>
<input type="text" name="status" placeholder="status">
</div>
<input type="submit" value="Insert" class="btn">
</form>
</div>
<style>
body
{
	background-image:url(images/Capture1.PNG);
	background-repeat:repeat;
}
.container{
	height:320px;
	width:500px;
	text-align:center;
    	background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat;
	border-radius:4px;
	margin:0 auto;
	margin-top:80px;
}
input[type="text"]
{
	height:30px;
	width:300px;
	font-size:18px;
	background-color:#fff;
	padding-left:20px;
	margin-bottom:10px;
	margin-top:20px;
	

}
.btn
{
	padding:10px 25px;
	margin-top:20px;
	color:#fff;
	background-color:#00C;
	font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
	border-radius:4px;
}
</style>
</body>
</html>

<?php

echo "<br>";
include '../front_page/footer.php';
?>
