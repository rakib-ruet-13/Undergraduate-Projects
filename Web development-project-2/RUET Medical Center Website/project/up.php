<?php
include '../rmcenter_admin/init_restrict_access.php';
$_SESSION['page']="admin";
?>



<!DOCTYPE html>
<html>
<head>
    <title>Insert Image</title>
</head>
<body>
<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
   
   
   
    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
    $sql = "insert into report_tab (image) values(?)";
 
    $stmt = mysqli_prepare($con,$sql);
 
    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);
    mysqli_close($con);
}
?>
<form action="up.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <button>Upload</button>
</form>
<?php
    echo $msg;
?>
</body>
</html