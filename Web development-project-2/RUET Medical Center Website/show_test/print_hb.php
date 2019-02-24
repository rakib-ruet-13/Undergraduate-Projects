
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
$rpgerr=$fbserr=$ppbserr=$aberr=$gluerr=$creerr=$hbaierr="";
$rpg=$fbs=$ppbs=$ab=$glu=$cre=$hbai="";


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



               $sql="select * from hb where patient_role='$patient_role' and id='$id' and serial_no=$sn order by serial_no desc; ";
             

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

<body style="background:white;">

<div  style="float:center;background:white;" >



      

      <div  style="color: black; float: center; background: white;padding-left: 80px;padding-right: 80px; padding-top:20px;">

      

      <h2> HAEMATOLOGY & BIOCHEMICAL ANALYSIS REPORT </h2>

      

       <?php

        if($result->num_rows > 0 )
         {

           while($row=$result->fetch_assoc())
          {

            $patient_role=$row['patient_role'];
            $id=$row['id'];
            $lab_no=$row['lab_no'];
            $date=$row['dot'];
            $name=$row['name'];
            $age=$row['age'];
            $sex=$row['sex'];
            $ref_doctor=$row['ref_doctor'];


            $rpg=$row['rpg'];

            $fbs=$row['fbs'];
            $ppbs=$row['ppbs'];
            $ab=$row['ab'];
            $glu=$row['glu'];
            $cre=$row['cre'];
            $hbai=$row['hbai'];

          




       echo ' <div style="color: black; float: center; width:100% ; padding: 25px; ">';


      
       echo 'Patient Role: &nbsp;';
       echo "$patient_role";
      
       echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';




       echo 'ID no :';
        echo "&nbsp";
       echo "$id";

       echo "<br>";
      

       echo 'Lab no:  ';
        echo "&nbsp";
          echo "$lab_no";

           echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';


       echo  'Date:  ';
        echo "&nbsp";
          echo "$date";

           echo "<br>";


       echo 'Patient Name: '; 
        echo "&nbsp";
          echo "$name";
           echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

       echo 'Age : ';
        echo "&nbsp";
          echo "$age";
           echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';



       echo 'Sex: ';
        echo "&nbsp";
          echo "$sex";

           echo "<br>";

       

       echo 'Ref_by_doctor : '; 
        echo "&nbsp";
          echo "$ref_doctor";

      echo '</div>';


echo '
<div style="color: black; float:center;">

<br>

      <table class="table table" style="color: black">
    <thead>
      <tr>
        <th style="text-align:center;width:35%;">Test</th>
        <th style="text-align:center;width:25%;">Result</th>
        <th style="text-align:center;width:40%;">Result Normal range</th>
         
      </tr>
    </thead>';

  echo " <tbody>
      <tr>

       <td>Random Plasma Glucose: </td>  <td>    $rpg        </td> <td> (Coresponding urine sugar): 3.7-7.0 mmol/L</td> 
        </tr>




        <tr>
        <td>   FBS:</td> <td>      $fbs    </td> <td> (Coresponding urine sugar): 3.3-6.1 mmol/L</td> 
        </tr>

        <tr>
          <td> PPBS: </td><td>   $ppbs      </td> <td> (Coresponding urine sugar): <7.8 mmol/L</td>
       
       </tr>



          <tr>
          <td> 2 hrs after breakfast:</td><td>     $ab        </td> <td> (Coresponding urine sugar): <8.0 mmol/L</td> 
          </tr>    


      
          <tr>
         <td>  2 hrs after 75 gram glucose:</td> <td>     $glu      </td> <td> (Coresponding urine sugar): 8.8.0 mmol/L</td>
        
         </tr>  


          <tr>
          <td> S.Creatinine: </td><td> $cre        </td> <td> <1.4 mg/dl</td> 
       
          </tr>      


          <tr>
          <td> HbAIC:</td><td>        $hbai          </td> <td> 4.5-6.3%</td> 
         </tr>

          <tr>
          <td> </td><td>        </td> <td> </td> 
         </tr>


 

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
</body>
</html>
