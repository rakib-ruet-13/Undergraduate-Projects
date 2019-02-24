<?php
include 'init_restrict_access.php';
$_SESSION['page']="admin";

?>

<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/option.php';
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

     <a style="color:white; text-decoration:none;" href="../rmcenter_admin/rmc_admin_logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
   
    </p>

    </div>


    <div class="menu" style="font-size:15px; width:100%;">

      <ul >
        
        <li><a style="color:white" href="/rmcenter_admin/rmc_teacher_profile_show.php">Search Teachers</a></li>
        <li><a style="color:white" href="/rmcenter_admin/rmc_teacher_info_create.php">Create teacher Profile</a></li>
      </ul>
     </div>





  


</div>



</body>
</html>
<?php
include '../front_page/footer.php';
?>
