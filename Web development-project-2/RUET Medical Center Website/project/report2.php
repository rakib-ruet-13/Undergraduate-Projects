<?php
include '../rmcenter_admin/init_restrict_access.php';
$_SESSION['page']="admin";
?>

<?php

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
if($_SERVER['REQUEST_METHOD']=='post')
{
	
	$name=$_FILES["image"]["name"];

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
	$sql="INSERT INTO report_tab(image)VALUES('$name')";
	mysqli_query($connect,$sql);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>upload image</title>
</head>
<body>
<div id="content">
<form method="post" action="report2.php"enctype="multipart/form-data>
<input type="hidden" name="size" value="1000000">
<div>
<input type="file" name="image">
</div>
<div>
<button>upload</button>
</div>
</form>
</div>
</body>
</html>

<html>
<head>
</head>
<body>
<style>
body{
	background-image:url(Capture1.PNG);
	background-repeat:repeat;
}
#content
{
	width:50px;
	margin:20px;
}
.btn_login{
	padding:10px 20px;
	margin-top:20px;
	color:#fff;
	background-color:#00C;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	border-radius:4px;
}
</style>
</body>
</html>