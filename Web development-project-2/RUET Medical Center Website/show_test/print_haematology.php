
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

$patient_rollerr=$iderr=$hemoerr=$esrerr=$tcnterr=$wbcerr=$diffcnterr=$neutroerr=$lymphoerr=$monoerr=$eosinerr=$basoerr=$blasterr=$othererr="";
$patient_roll=$id=$hemo=$esr=$tcnt=$wbc=$diffcnt=$neutro=$lympho=$mono=$eosin=$baso=$blast=$other="";


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



               $sql="select * from haematology where patient_role='$patient_role' and id='$id' and serial_no=$sn order by serial_no desc; ";
             

               $result=$conn->query($sql);



?>


<!DOCTYPE html>
<html>

<head>
  <title>ruet medical center</title>
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




      

      <div  style="color: black; float: center; background: white;padding-left: 80px;padding-right: 80px; padding-top:20px;">

      

      <h2> HAEMATOLOGY REPORT  </h2>

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

          
            $hemo=$row['hemo'];
            $esr=$row['esr'];
            $tcnt=$row['tcnt'];
            $wbc=$row['wbc'];
            $diffcnt=$row['diffcnt'];
            $neutro=$row['neutro'];
            $lympho=$row['lympho'];
            $mono=$row['mono'];
            $eosin=$row['eosin'];
            $baso=$row['baso'];
            $blast=$row['blast'];
            $other=$row['other'];




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


     echo '<div style="color: black; float:center;">';


    echo '<table class="table table" style="color: black">';
    echo '<thead>';
     echo ' <tr>';
       echo ' <th style="text-align:center;width:33%;">Test</th>';
       echo ' <th style="text-align:center;width:33%;">Result</th>';
       echo ' <th style="text-align:center;width:34%;">Ref_result</th>';
       echo ' </tr>';
   echo ' </thead>';

   echo '  <tbody>';
     echo ' <tr>';

      echo " <td>Hemoglobin: </td>  <td>$hemo </td> <td> M=13.18 gm/dl / F=11.5-16.5 gm/dl</td> 
        </tr>";




         echo " <tr>
        <td>   E.S.R:</td> <td> $esr</td> <td> M=0.10 mm in 1st hr / F=0.12 mm in 1st hr</td> 
        </tr>";

          echo " <tr>
          <td> Total Count: </td><td> $tcnt
       </td> <td></td>
       
       </tr>



          <tr>
          <td> W.B.C:</td><td> $wbc </td> <td> 4000-11000/cmm</td> 
          </tr>    


      
          <tr>
         <td>  Differential Count:</td> <td> $diffcnt</td> <td></td>
        
         </tr>  


          <tr>
          <td> Neutrophils: </td><td> $neutro</td> <td> 40-75%</td> 
       
          </tr>      


          <tr>
          <td> Lymphocytes:</td><td>$lympho </td> <td> 20-45%</td> 
         </tr>

         
          <tr>
          <td> Monocytes: </td><td> $mono</td> <td> 2-10%</td> 
        
         </tr>


          <tr>
         <td> Eosinphils:</td> <td> $eosin</td> <td> 1-6%</td> 
          </tr>


          <tr>
          <td> Basophilis: </td><td>$baso</td> <td> < 1% </td>        
          </tr>


          <tr>
          <td> Blast:</td> <td> $blast</td> <td></td> 
          </tr>
          

          <tr>
          <td> Other:</td> <td>$other <td></td>

          </tr>

          <tr>
          <td></td> <td> <td></td>

          </tr>

          </tbody>
          </table>";
         echo ' </div>';

         
           

          echo "<br><br><br>";


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
</body>
</html>



