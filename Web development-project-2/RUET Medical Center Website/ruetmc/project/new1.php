<?php
include '../rmcenter_admin/init_access.php';
$_SESSION['page']="admin";
?>

<?php
include '../front_page/header.php';
?>
<br>
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
<form action="new.php" method="post">
<div>
<input type="text" name="name" placeholder="User name">
</div>
<div>
<input type="text" name="phn_no" placeholder="Phone number">
</div>
<div>
<input type="text" name="age" placeholder=" Enter age">
</div>
<div>
<input type="textarea" name="test" placeholder="Name of test">
</div>
<input type="submit" name="submit" value="Submit" class="btn_login">
</form>
</div>
</body>
</html>
<?php
?>
<html>
<head>

</head>

<style type="text/css">
body{
background-image: url(../rmcenter_admin/rmc_admin_background.jpg);
    background-repeat: repeat;
}
.container{
	height:320px;
	width:500px;
	text-align:center;
	
	border-radius:4px;
	margin:0 auto;
	margin-top:80px;
}
input type:before
{margin-top:25px;
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
input[type="textarea"]
{
	height:50px;
	width:300px;
	font-size:18px;
	background-color:#fff;
	padding-left:20px;
	margin-bottom:10px;
	margin-top:20px;
	

}

.btn_login{
	padding:10px 25px;
	margin-top:20px;
	color:#fff;
	background-color:#00C;
	font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
	border-radius:4px;
}

header
{
	
	width:900px;
	margin-left:200px;
	
}
</style>

</html>
<?php
echo "<br>";
include '../front_page/footer.php';
?>
