
<?php
include '../rmcenter_admin/init_access.php';
$_SESSION['page']="admin";
?>



<?php

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
$Name=$_POST['name'];
$Phn_no=$_POST['phn_no'];
$code=$_POST['code'];
if(isset($_POST['submit']))
{
	$valueToSearch=$_POST['code'];
	$query="SELECT * FROM `report_tab` WHERE code_no='$code' ";
	$search_result=filterTable($query);
}

function filterTable($query)
{
	$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';
$dbname = 'medical_center';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
$filter_result=mysqli_query($connect,$query);
return $filter_result;
}
if($data=mysqli_fetch_assoc($search_result)){
	
	echo "".$data['report']."";
}
else
{
	echo"Sorry,no information for you";
}
	
	
?> 


 