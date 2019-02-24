<?php
include '../rmcenter_admin/init_restrict_access.php';

?>

<?php

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
$Status=$_POST['status'];
$Number=$_POST['number'];
$sql="UPDATE report_tab set report_status='$Status' where code_no='$Number'";
if (mysqli_query($connect, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($connect);
}

header("refresh:2;url=report.php");

?>