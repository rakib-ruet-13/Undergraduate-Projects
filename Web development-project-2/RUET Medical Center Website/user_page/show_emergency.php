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

<div style="width:100%;">


    
   
     <h1 style='color: white; padding:0px; text-align:center'>Contact for Emergency Ambulance </h1>
 

    <?php

 
   
     

     $conn = new mysqli($servername, $user, $pass,$db);

      if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 

      $sql="select * from emergency";

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
        
         echo "</tr>";

         echo "<br>";

          while($row=$reslt->fetch_assoc())
          {
           echo "<tr style='text-align: center ;padding:10px;  float:center;'>";

         
          echo "<td style='text-align: center ;padding:10px; ;'>";
            echo " $row[serial_no]";
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
           

            echo "</tr>";
          }
          


         }
        echo "</table>";

    
     ?>

     <br>
     <br>
         
     </div>

     </div>
     </body>
     </html>

<?php

include '../front_page/footer.php';
?>
