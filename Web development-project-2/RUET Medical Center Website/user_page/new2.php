<?php
include '../rmcenter_admin/init_access.php';
$_SESSION["page"]="";
?>



<?php

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
$Name=$_POST['name'];
$code=$_POST['code'];
if(isset($_POST['submit']))
{
	$valueToSearch=$_POST['code'];
	$query="SELECT * FROM `report_tab` WHERE code_no='$code' ";
	$search_result=mysqli_query($connect,$query);

}

if($data=mysqli_fetch_assoc($search_result)){
	if($data['report_status']=="No")
{
	
echo "<script>
alert('Sorry,your report is not ready');
window.location.href='new3.php';
</script>";
}
else
{
	  	  

echo "<script>
alert('Your report is ready now');
window.location.href='new3.php';
</script>";
}
	
}
if(mysqli_num_rows($search_result)==0){
echo "<script>
alert('Sorry,code no doesn't exist');
window.location.href='new3.php';
</script>";
}
?> 


 