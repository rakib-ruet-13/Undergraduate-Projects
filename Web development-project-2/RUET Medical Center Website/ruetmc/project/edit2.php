<?php
include '../rmcenter_admin/init_restrict_access.php';
$_SESSION['page']="admin";
?>
<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';

$test_no=$_GET['id'];
$_SESSION['number']= $test_no;
?>



<html>
<head>
</head>
<body>
<header>
</header>
<div class="container">
<form action="edit.php" method="post">
<h1><b>Change your status</b></h1>
<div style="font-size: 20px; color: black;">
 status 
        <select name="status">
       <option value="yes">yes</option>
       <option value="no">no</option>
      
      </select><br><br>
</div>
 <input type="submit" class="btn btn-danger" name="submit" value="Submit"">
</form>
<br>

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
	background-image:url(download.jpg);
}
.container{
	
	width:500px;
	text-align:center;
    	background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat;
	border-radius:4px;
	margin:0 auto;
	margin-top:80px;
}
input:before
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


</style>

</html>
<?php

echo "<br>";
include '../front_page/footer.php';
?>
