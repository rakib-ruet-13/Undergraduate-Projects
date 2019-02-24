
<?php
include '../rmcenter_admin/init_restrict_access.php';
$_SESSION["page"]="admin";
?>



<?php

 if(empty($_SESSION["admin_id"]))
 {
           header("Location: ../rmcenter_admin/rmc_admin_login.php");
            exit;
 }
?>






<?php

$flag = 0;

$patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
$patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";

$md1=$md2=$md3=$md4=$md5=$md6=$md7=$md8=$md9=$md10="";
$qty1=$qty2=$qty3=$qty4=$qty5=$qty6=$qty7=$qty8=$qty9=$qty10="";

$dis="";



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }


               $patient_role= $_SESSION["ptype"] ;
               $id= $_SESSION["pid"];

               $sn=$_GET['id'];


              $conn = new mysqli($servername, $user, $pass,$db);
                   if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      } 
                    else
                    {
                      //echo "entering database<br>";
                    }



               $sql="select * from prescription where patient_role='$patient_role' and id='$id' and serial_no=$sn order by serial_no desc; ";
             

               $result=$conn->query($sql);




?>


<!DOCTYPE html>
<html>

<head>
  <title>ruetmedicalcentre.com</title>
    <link rel="stylesheet" type="text/css" href="/rmcenter_admin/rmc_style_register.css">
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

<body style="background: white;">

<div  style="float:center;" >


 <div  style="color: black; float: center; background: white;padding-left: 50px;padding-right: 50px; padding-top:20px;">

      

      <h2> Prescription </h2>

       <?php


       //echo " no of rows= $result->num_rows";

        if($result->num_rows > 0 )
         {


           while($row=$result->fetch_assoc())
          {

             $patient_role=$row['patient_role'];
            $id=$row['id'];
          
            $date=$row['dot'];
            $name=$row['name'];
            $ref_doctor=$row['ref_doctor'];

           $md1=$row["md1"];
            $md2=$row["md2"];
             $md3=$row["md3"];
              $md4=$row["md4"];
               $md5=$row["md5"];
                $md6=$row["md6"];
                 $md7=$row["md7"];
                  $md8=$row["md8"];
                   $md9=$row["md9"];
                    $md10=$row["md10"];
     
             $qty1=$row["qty1"];
              $qty2=$row["qty2"];
               $qty3=$row["qty3"];
                $qty4=$row["qty4"];
                 $qty5=$row["qty5"];
                  $qty6=$row["qty6"];
                   $qty7=$row["qty7"];
                    $qty8=$row["qty8"];
                     $qty9=$row["qty9"];
                      $qty10=$row["qty10"];

    $dis=$row["dis"];

    
       echo ' <div style="color: black; float: center; width:100% ; padding: 25px; ">';


      
       echo 'Patient Role: &nbsp;';
       echo "$patient_role";
      
       echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';




       echo 'ID no :';
        echo "&nbsp";
       echo "$id";

       echo "<br>";
      

       echo 'Patient Name: '; 
        echo "&nbsp";
          echo "$name";
           echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';



       echo  'Date:  ';
        echo "&nbsp";
          echo "$date";

           echo "<br>";

           echo "<br>";

       
       echo 'Prescribed by : '; 
        echo "&nbsp";
          echo "$ref_doctor";

      echo '</div>';

      

echo '
<div style="color: black; float:center; margin-bottom:20px;border: solid black 1px;">

<div style="float:left; width: 40%; height: 450px; border: solid black 1px;">
  <p style="color: black; font-size: 20px; text-align: center;"> <b>Description of diesease</b></p>';

echo "<br><br> $dis
   <br><br>
</div>";



echo '<div style="float:right; width: 60%;height: 450px; border: solid black 1px;">

<p style="color: black; font-size: 20px; text-align: center;"> <b>Medicine list</b></p>



      <table class="table table" style="color: black; float:center; width:100%;height:380px; margin-left:0%;">
    <thead>
      <tr>
        <th style="text-align:center;width:50%;">Name</th>
        <th style="text-align:center;width:50%;">Quantity</th>
      </tr>
    </thead>';
     
echo "
         <tbody>
       <tr>
         <td> $md1 </td>
        <td>$qty1 </td>
       </tr>

       <tr>
        <td>$md2 </td>
         <td>$qty2 </td>
       </tr>

       <tr>
   <td> $md3 </td>
       <td> $qty3 </td>
       </tr>

       <tr>
      <td>$md4 </td>
        <td> $qty4 </td>
       </tr>

       <tr>
         <td>$md5 </td>
        <td>$qty5 </td>
       </tr>

       <tr>
         <td>$md6 </td>
         <td> $qty6 </td>
       </tr>

       <tr>
       <td>$md7 </td>
       <td>$qty7 </td>
       </tr>

       <tr>
       <td>$md8 </td>
         <td>$qty8</td>
       </tr>

                 <tr>
                  <td>$md9</td>
                  <td>$qty9 </td>
                 </tr>

                 <tr>
                   <td>$md10 </td>
                  <td> $qty10 </td>
                 </tr

                

             </tbody>
            </table>

          </div>";
          
        
            }
          }
           else
     {
         echo "<br>";
         echo "<p style='margin: 20px; padding :10 px ; font-size: 30px ; '> No records available !!!!!</p>";
         echo "<br>";

         

     }
?>

</div>
</div>
</div>

</body>
</html>
