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






<?php

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
$Name=$_POST['name'];
$Phn_no=$_POST['phn_no'];
$Age=$_POST['age'];
$Test=$_POST['test'];
$report="NO";
function generateRandomString($length = 6) {
		$characters = '0123456789';
		$characterLength = strlen($characters);
		$randomString = '';

		for($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $characterLength - 1)];
		}
		return $randomString;
	}
$Code=generateRandomString();
$sql="INSERT INTO patient_tab(Name,Phn_no,code_no,Age,Test_name) VALUES('$Name','$Phn_no','$Code','$Age','$Test');";
$sql.="INSERT INTO report_tab(code_no,report_status) VALUES('$Code','$report')";

echo "<div style='color: white ; text-align:center; '>";

if(!mysqli_multi_query($connect,$sql))
{
	echo 'Not inserted';
}
echo "<h1>Patient Information:</h1></br>";
echo"<b>Name:</b>".$Name."";
echo "</br>";
echo"<b>Phone No:</b>".$Phn_no."";
echo "</br>";
echo"<b>Age:</b>".$Age."";
echo "</br>";
echo"<b>Test Name:</b>".$Test."";
echo "</br>";
echo"<b>Code no:</b>".$Code."";

echo "</div>";

?>

<?php
echo "<br>";
include '../front_page/footer.php';
?>
