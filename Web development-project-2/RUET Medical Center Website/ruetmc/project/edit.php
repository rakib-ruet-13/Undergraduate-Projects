<?php
include '../rmcenter_admin/init_restrict_access.php';
$_SESSION['page']="admin";
?>


<?php

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
$Status=$_POST['status'];
$Number=$_SESSION['number'];

$sql="UPDATE test_table set Status='$Status' where SL_No='$Number'";
if (mysqli_query($connect, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($connect);
}


header("refresh:2;url=connect1.php");
?>