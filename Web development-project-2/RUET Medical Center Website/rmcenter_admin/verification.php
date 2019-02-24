<?php
include 'init_restrict_access.php';
$_SESSION["page"]='admin';
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

         <meta name="viewport" content = "width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../rmcenter_admin/rmc_style_admin_page.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  
  <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="nivo-slider/bootstrap.min.js">
  <link rel="stylesheet" type="text/css" href="style/bootstrap.min.js">

  <link href="nivo-slider/themes/bar/bar.css" rel="stylesheet" type="text/css"/>
  <link href="nivo-slider/themes/dark/dark.css" rel="stylesheet" type="text/css"/>
  <link href="nivo-slider/themes/light/light.css" rel="stylesheet" type="text/css"/>
  <link href="nivo-slider/themes/default/default.css" rel="stylesheet" type="text/css"/>
  <link href="nivo-slider/themes/nivo-slider.css" rel="stylesheet" type="text/css"/>

  <script type="text/javascript" src="nivo-slider/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.pack.js"></script>
</head>

<body>







    <div class="show_log" style="font-size:15px color:white ">
      
    <p style="color: pink ; padding-left:28px;">welcome .. <?php echo $admin_id ?>
     <?php echo " &nbsp &nbsp  "?>

    <a style="color:white; text-decoration:none;" href="../rmcenter_admin/rmc_admin_logout.php"> <button type="button" class="btn btn-danger">Logout</button></a>
   
    </p>

    </div>



<div class="main" style="float: center;"">

    <div class="menu" style="font-size:15px; color:white ; align: center; width:100%;"  >

      <ul >
         <li align:center ><a style="color:white" href="../rmcenter_admin/rmc_stud_options.php ">Students</a></li>
        <li><a style="color:white hover: color:red" href="../rmcenter_admin/rmc_staff_options.php">Staffs</a></li>
        <li><a style="color:white" href="../rmcenter_admin/rmc_teacher_options.php">Teachers</a></li>
        
      </ul>
     </div>


</div>


</body>
</html>

<?php

include ('../front_page/footer.php');
?>

