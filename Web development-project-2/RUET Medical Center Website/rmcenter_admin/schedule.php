<?php
include '../rmcenter_admin/init_access.php';
$_SESSION["page"]="";
?>
<?php

include '../rmcenter_admin/cmo_access.php'; 
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
   <link rel="stylesheet" type="text/css" href="../rmcenter_admin/rmc_style_admin_page.css">
  </head>

<body>
<div class="main">



    <div class="show_log" style="font-size:15px ;color:white; margin:0px; ">
    <p style="color: pink ; padding-left:28px;">welcome .. <?php echo $admin_id ?>
     <?php echo " &nbsp &nbsp  "?>
    <a style="color:white; text-decoration:none;" href="../rmcenter_admin/rmc_admin_logout.php"> <button type="button" class="btn btn-danger">Logout</button></a>
    </p>
    </div>


<br>
<div style="width:100%;">
     <p style="text-align:center;">
     <a style="color:orange; text-align:center; font-size:20px" href="../rmcenter_admin/edit_doctor_schedule.php"><button type="button" class="btn btn-success">Edit Doctors schedule</button></a>
     </p>
    
    <br>
     <h4 style='color: white; padding:0px; text-align:center'>DOCTOR's Schedule</h4>
 

    <?php

 
   
     

     $conn = new mysqli($servername, $user, $pass,$db);

      if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 

      $sql="select * from rmc_doctor";

      $reslt=$conn->query($sql);
      
      $cnt=1;

      echo '<table class="table table-hover" style="background: white;">';

      if($reslt->num_rows > 0 )
         {
         echo "<tr  style='text-align: center ;padding:10px;  float:center;'>";
          echo "<th style='text-align: center ;padding:10px; '>Serial</th>";
         echo "<th style='text-align: center ;padding:10px; '>Name</th>";
         echo "<th style='text-align: center ;padding:10px; '>Designation</th>";
         echo "<th style='text-align: center ;padding:10px; '>Mobile</th>";
          echo "<th style='text-align: center ;padding:10px; '>Sat-Wed(Duty time)</th>";
           echo "<th style='text-align: center ;padding:10px; '>Thrusday(Duty  time)</th>";
         echo "</tr>";

         echo "<br>";

          while($row=$reslt->fetch_assoc())
          {
           echo "<tr style='text-align: center ;padding:10px;  float:center;'>";

         
          echo "<td style='text-align: center ;padding:10px; '>";
            echo " $row[serial]";
          echo "</td>";

          echo "<td style='text-align: center ;padding:10px; '>";
            echo " $row[name]";
          echo "</td>";

          echo "<td style='text-align: center ;padding:10px; '>";
            echo " $row[designation]";
          echo "</td>";

          echo "<td style='text-align: center ;padding:10px; '>";
            echo " $row[phone]";
          echo "</td>";

          echo "<td style='text-align: center ;padding:10px; '>";
            echo " $row[regular_start]-$row[regular_end]";
          echo "</td>";

          echo "<td style='text-align: center ;padding:10px;'>";
            echo " $row[thursday_start]-$row[thursday_end]";
          echo "</td>";
           

            echo "</tr>";
          }
          


         }
        echo "</table>";

    
     ?>

    
         
     </div>
</div>
</body>
</html>

<?php

include '../front_page/footer.php';
?>
