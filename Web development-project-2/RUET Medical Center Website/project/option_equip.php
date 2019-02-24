<?php
include 'init_restrict_access.php';
$_SESSION['page']="admin";
?>


<?php

include '../rmcenter_admin/cmo_access.php'; 
?>

<?php

 $admin_id=$_SESSION["admin_id"];  
?>
<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>






<!DOCTYPE html>
<html>

<head><title>Equipmental status </title>

 <link rel="stylesheet" type="text/css" href="/rmcenter_admin/rmc_style_admin_page.css">
</head>
<body>

<div class="main">


<div class="show_log" style="font-size:15px color:white ">
     
    <p style="color: pink ; padding-left:28px;">welcome .. <?php echo $admin_id ?>
     <?php echo " &nbsp &nbsp  "?>

      <a style="color:white; text-decoration:none;" href="../rmcenter_admin/rmc_admin_logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
   
    </p>

</div>




 <div class="menu" style="font-size:15px; width:100%;">

      <ul >
        <li ><a style="color:white" href="../project/connect1.php">MEDICAL TESTS</a></li>
        <li><a style="color:white" href="../project/report.php">PATIENT'S REPORT</a></li>
      </ul>
 </div>

</div>

</body>
</html>

<?php
include '../front_page/footer.php';
?>

