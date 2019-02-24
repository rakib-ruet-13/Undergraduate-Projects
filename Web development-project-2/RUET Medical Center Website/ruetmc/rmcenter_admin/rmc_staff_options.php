<?php
include 'init_restrict_access.php';

$_SESSION['page']="admin";

?>


<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>



<!DOCTYPE html>
<html>

<head>
  <title>ruetmedicalcentre.com</title>
    <link rel="stylesheet" type="text/css" href="/rmcenter_admin/rmc_style_admin_page.css">
</head>

<body>

<div class="main">



    <div class="show_log" style="font-size:15px color:white ">
     
    <p style="color: pink ; padding-left:28px;">welcome .. <?php echo $admin_id ?>
     <?php echo " &nbsp &nbsp  "?>

     <button type="button" class="btn btn-danger"><a style="color:white; text-decoration:none;" href="../rmcenter_admin/rmc_admin_logout.php">Logout</a></button>
   
    </p>

    </div>


    <div class="menu" style="font-size:15px; width:100%;">

      <ul >
    
        <li><a style="color:white" href="/rmcenter_admin/rmc_staff_profile_show.php">Search Staffs</a></li>
        <li><a style="color:white" href="/rmcenter_admin/rmc_staff_info_create.php">Create staff Profile</a></li>  
     
      </ul>
     </div>





  
</div>




</body>
</html>
<?php
include '../front_page/footer.php';
?>
