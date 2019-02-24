<?php
include '../rmcenter_admin/init_access.php';
$_SESSION['page']="admin";
?>
<?php

include '../rmcenter_admin/cmo_access.php'; 
?>
<?php
include '../front_page/header.php';
?>
<br>
<?php
include '../index_option/index.php';



$test_no=$_GET['id'];

if(!empty($test_no))
$_SESSION['num'] = $test_no;

?>

<?php


$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$Status=$_POST['status'];

$Number= $_SESSION['num'];




$sql="UPDATE report_tab set report_status='$Status' where code_no='$Number'";


if (mysqli_query($connect, $sql)) {
    echo "<p style='text-align:center ; color: yellow;'> Record updated successfully</p>";
} else {
    echo "Error updating record: " . mysqli_error($connect);
}

header("refresh:2;url=report.php");

}

?>


<html>
<head>
</head>
<body>
<header>
</header>
<div class="container">


<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

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
	background-image: url(../rmcenter_admin/rmc_admin_background.jpg);
    background-repeat: repeat;
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

.btn_login{
	padding:10px 25px;
	margin-top:20px;
	color:#fff;
	background-color:#00C;
	font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
	border-radius:4px;
}


</style>

</html>
<?php
echo "<br>";
include '../front_page/footer.php';
?>
