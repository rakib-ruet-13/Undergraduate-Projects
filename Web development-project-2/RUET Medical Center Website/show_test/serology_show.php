
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
include '../front_page/header.php';
?>
<br>

<?php
include '../index_option/index.php';
?>




<?php

$flag = 0;


$patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
$patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";

$toerr=$therr=$aoerr=$aherr=$boerr=$bherr=$ox2err=$ox19err=$oxkerr=$aboerr=$rherr=$hberr=$kalerr="";
$to=$th=$ao=$ah=$bo=$bh=$ox2=$ox19=$oxk=$abo=$rh=$hb=$kal="";




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }





               $patient_role= $_SESSION["ptype"];
               $id= $_SESSION["pid"];

              // echo "$patient_role and $id";



              $conn = new mysqli($servername, $user, $pass,$db);
                   if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      } 
                    else
                    {
                      //echo "entering database<br>";
                    }



               $sql="select * from serology where patient_role='$patient_role' and id='$id'  order by serial_no desc; ";
             

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

<body>



      <div class="main" style="float:center;" >



        <div class="logger" style="color:green; text-align:center; float:center;">
        <p>
      
        </p>
        </div>

      <div  style="color: black; float: center; background: white;padding-left: 80px;padding-right: 80px; padding-top:20px;">

      

      <h2> SEROLOGY REPORT  </h2>

       <?php


       //echo " no of rows= $result->num_rows";

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

            $to=$row['too'];
            $th=$row['th'];
            $ao=$row['ao'];
            $ah=$row['ah'];
            $bo=$row['bo'];
            $bh=$row['bh'];
            $ox2=$row['ox2'];
            $ox19=$row['ox19'];
            $oxk=$row['oxk'];
            $abo=$row['abo'];
            $rh=$row['rh'];
            $hb=$row['hb'];
            $kal=$row['kal'];

    
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



echo '<div style="color: black; float:center;">

<br>

      <table class="table table" style="color: black">
    <thead>
      <tr>
        <th style="width:33%; text-align:center;">Test</th>
        <th style="width:33%; text-align:center;">Result</th>
        <th style="width:34%; text-align:center;">Normal_value</th>
      </tr>
    </thead>';

  echo " <tbody>
     <tr>

       <td><b>Widal Test:</b></td> 
       </tr>
      <tr>

       <td> TO</td>  <td>  $to     </td> <td> 1:80 dil</td> 
        </tr>




        <tr>
        <td>   TH</td> <td>  $th    </td> <td> 1:80 dil</td> 
        </tr>

        <tr>
          <td> AO</td>  <td>   $ao 
       </td> <td> 1:80 dil</td>
       
       </tr>



          <tr>
          <td> AH</td><td>   $ah   </td> <td> 1:80 dil</td> 
          </tr>    


      
          <tr>
         <td>  BO</td> <td>  $bo  </td> <td> 1:80 dil</td>
        
         </tr>  


          <tr>
          <td> BH</td><td>  $bh  </td> <td> 1:80 dil</td> 
       
          </tr>      
<tr>

       <td> <b>Weil Felix Test:</b></td> 
       </tr>

          <tr>
          <td> OX 2</td><td>  $ox2   </td> <td> 1:80 dil</td> 
         </tr>

         
          <tr>
          <td> OX 19</td><td> $ox19   </td> <td> 1:80 dil</td> 
        
         </tr>


          <tr>
         <td> OX K</td> <td> $oxk  </td> <td> 1:80 dil</td> 
          </tr>
<tr>

       <td> <b>Blood Group</b></td> 
       </tr>

          <tr>
          <td> ABO type </td><td>  $abo  </td> <td> </td>        
          </tr>


          <tr>
          <td> Rh.-D</td> <td> $rh   </td> <td> positive/negative</td> 
          </tr>
          

          <tr>
          <td> HBsAg</td> <td>  $hb  </td> <td> positive/negative</td>

          </tr>
 <tr>
          <td> ICT for Kalaazar</td> <td> $kal </td> <td> positive/negative</td>

          </tr>

          <tr>
          <td></td> <td> <td></td>

          </tr>


          </tbody>
          </table>
          </div>";



           $test_name='serology';

            echo "<a style='color:white;text-decoration:none;' href='../show_test/serology_delete.php? id=$row[serial_no]&test=$test_name'>";
             echo '<button type="button" class="btn btn-danger">';
            echo " Delete";
             echo '</button>';
            echo " </a>";
           

             echo "&nbsp"; echo "&nbsp";

              echo "<a style='color:white;text-decoration:none;' href='../show_test/print_serology.php? id=$row[serial_no]' >";
             echo '<button type="button" class="btn btn-success">';
            echo "Printable page format";
             echo '</button>';
            echo " </a>";
           

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
</div>
</body>
</html>

<?php
echo "<br>";
include ('../front_page/footer.php');
?>
