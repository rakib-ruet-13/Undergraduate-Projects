<?php
include '../rmcenter_admin/init_access.php';
$_SESSION["page"]="";
?>


<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>





<!DOCTYPE HTML>  
<html>
<head>
<title>edit</title>
 <link rel="stylesheet" type="text/css" href="../rmcenter_admin/rmc_style_admin_page.css">
</head>
<body>  

<div class="main">




    <div>

    
   
     <h3 style='color: white; padding:0px; text-align:center'>DOCTOR's Schedule</h3>
 

    <?php

 
   
     

     $conn = new mysqli($servername, $user, $pass,$db);

      if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 

      $sql="select * from rmc_doctor";

      $reslt=$conn->query($sql);
      
      $cnt=1;

      echo "<table style='background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat; border: 2px solid black; color:black; text-align: center; margin-bottom:20px; font-size:16px;width:100%'>";

      if($reslt->num_rows > 0 )
         {
         echo "<tr  style='text-align: center ;padding:10px; border:solid black; float:center;'>";
          echo "<th style='text-align: center ;padding:10px; border:solid black;'>Serial</th>";
         echo "<th style='text-align: center ;padding:10px; border:solid black;'>Name</th>";
         echo "<th style='text-align: center ;padding:10px; border:solid black;'>Designation</th>";
         echo "<th style='text-align: center ;padding:10px; border:solid black;'>Mobile</th>";
          echo "<th style='text-align: center ;padding:10px; border:solid black;'>Sat-Wed(Duty time)</th>";
           echo "<th style='text-align: center ;padding:10px; border:solid black;'>Thrusday(Duty  time)</th>";
         echo "</tr>";

         echo "<br>";

          while($row=$reslt->fetch_assoc())
          {
           echo "<tr style='text-align: center ;padding:10px; border:solid black; float:center;'>";

         
          echo "<td style='text-align: center ;padding:10px; border:solid black;'>";
            echo " $row[serial]";
          echo "</td>";

          echo "<td style='text-align: center ;padding:10px; border:solid black;'>";
            echo " $row[name]";
          echo "</td>";

          echo "<td style='text-align: center ;padding:10px; border:solid black;'>";
            echo " $row[designation]";
          echo "</td>";

          echo "<td style='text-align: center ;padding:10px; border:solid black;'>";
            echo " $row[phone]";
          echo "</td>";

          echo "<td style='text-align: center ;padding:10px; border:solid black;'>";
            echo " $row[regular_start]-$row[regular_end]";
          echo "</td>";

          echo "<td style='text-align: center ;padding:10px; border:solid black;'>";
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
