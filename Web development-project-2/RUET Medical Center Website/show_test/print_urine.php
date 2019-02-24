
<?php
include '../rmcenter_admin/init_restrict_access.php';
$_SESSION["page"]="admin";
?>



<?php

 if(empty($_SESSION["admin_id"]))
 {
           header("Location: /rmcenter_admin/rmc_admin_login.php");
            exit;
 }
?>






<?php

$flag = 0;


$patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
$patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";

$quanerr=$colerr=$apperr=$sederr=$speerr=$reaerr=$phperr=$alerr=$suerr=$bierr=$calerr=$aperr=$tperr=$eperr=$puerr=$rbcerr="";
$quan=$col=$app=$sed=$spe=$rea=$php=$al=$su=$bi=$cal=$ap=$tp=$ep=$pu=$rbc="";





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



               $sql="select * from urine where patient_role='$patient_role' and id='$id' and serial_no=$sn order by serial_no desc; ";
             

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

<div  style="float:center; background:white;" >



      

      <h2> URINE TEST  </h2>

      

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

            $quan=$row['quan'];
            $col=$row['col'];
            $app=$row['app'];
            $sed=$row['sed'];
            $spe=$row['spe'];
            $rea=$row['rea'];
            $php=$row['php'];
            $al=$row['al'];
            $su=$row['su'];
            $bi=$row['bi'];
            $cal=$row['cal'];
            $ap=$row['ap'];
            $tp=$row['tp'];
            $ep=$row['ep'];
            $pu=$row['pu'];
            $rbc=$row['rbc'];
            


          
           




       echo ' <div style="color: black;  float: center; width:100% ; padding: 25px; ">';


      
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




echo '<div style="color: black; float:center;">

<br>

      <table class="table table" style="color: black">
    <thead>
      <tr>
        <th style="width:50%; text-align:center;">Test</th>
        <th style="width:50%; text-align:center;">Result</th>
      </tr>
    </thead>';

    echo "

    <tbody>
     <tr>

       <td><b>Physical Examination:</b></td>  <td> </td>
       </tr>
      <tr>

       <td> Quantity</td>  <td>   $quan      </td> <td></td> 
        </tr>




        <tr>
        <td> Colour</td> <td>  $col      </td> <td> </td> 
        </tr>

        <tr>
          <td> Appearance</td><td>   $app
       </td> <td> </td>
       
       </tr>



          <tr>
          <td> Sediment</td><td> $sed   </td> <td> </td> 
          </tr>    


      
          <tr>
         <td> Specific Gravity</td> <td>    $spe    </td> <td></td>
        
         </tr>  

<tr>

       <td><b>Chemical Examination:</b></td>  <td> </td>
       </tr>
          <tr>
          <td> Reaction</td><td> $rea  </td> <td> </td> 
       
          </tr>    

          <tr>
          <td> Excess of phosphate</td><td> $php   </td> <td> </td> 
         </tr>

         
          <tr>
          <td> Albumin</td><td> $al </td> <td> </td> 
        
         </tr>


          <tr>
         <td> Sugar</td> <td> $su   </td> <td></td> 
          </tr>
             <tr>
         <td> Bile salt</td> <td> $bi  </td> <td></td> 
          </tr>
<tr>

       <td> <b>Microscopic Examination:</b></td>  <td> </td>
       </tr>
<tr>

       <td> <b>Unorganized deposits:</b></td>  <td> </td>
       </tr>

          <tr>
          <td> Calocium Oxalate </td><td>    $cal    </td> <td> </td>        
          </tr>


          <tr>
          <td> Amorphous phosphate</td> <td>   $ap    </td> <td></td> 
          </tr>
          

          <tr>
          <td> Triple phosphate</td> <td>  $tp  </td> <td> </td>

          </tr>
          <tr>

       <td> <b>Organized deposits:</b></td>  <td> </td>
       </tr>
 <tr>
          <td> Epithelial cells</td> <td>  $ep     </td> <td></td>

          </tr>
              <td> Pus cells</td> <td>  $pu        </td> <td></td>

          </tr>
              <td> R.B.C.</td> <td> $rbc   </td> <td></td>

          </tr>
          </tr>
              <td></td> <td>  </td> <td></td>

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

