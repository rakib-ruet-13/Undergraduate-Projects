<?php

include '../rmcenter_admin/cmo_access.php'; 
?>

<?php
include '../rmcenter_admin/init_restrict_access.php';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));

$Name=$_POST['name'];
$status=$_POST['status'];
$sql="INSERT INTO test_table(Test_Name,Status) VALUES('$Name','$status')";
if (mysqli_query($connect, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error updating record: " . mysqli_error($connect);
}

header("refresh:10;url=connect1.php")
?>