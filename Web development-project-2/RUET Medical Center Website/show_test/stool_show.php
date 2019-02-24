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
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>




<?php

$flag = 0;


$patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
$patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";

$amerr=$conerr=$colerr=$muerr=$blerr=$helerr=$reerr=$ocerr=$rederr=$rbcerr=$puerr=$macerr=$vegerr=$muserr=$staerr=$chaerr=$floerr=$proerr=$hiserr=$colierr=$giaerr=$alerr=$aderr=$tterr=$larerr=$othererr="";
$am=$con=$col=$mu=$bl=$hel=$re=$oc=$red=$rbc=$pu=$mac=$veg=$mus=$sta=$cha=$flo=$pro=$his=$coli=$gia=$al=$ad=$tt=$lar=$other="";




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }



   $patient_role= $_SESSION["ptype"] ;
               $id= $_SESSION["pid"];


              $conn = new mysqli($servername, $user, $pass,$db);
                   if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      } 
                    else
                    {
                      //echo "entering database<br>";
                    }



               $sql="select * from stool where patient_role='$patient_role' and id='$id'  order by serial_no desc; ";
             

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




      <div  style="color: black; float: center; background: white;padding-left: 80px;padding-right: 80px; padding-top:20px;">

      

      <h2> STOOL EXAMINATION REPORT  </h2>


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

            $am=$row['am'];
            $con=$row['con'];
            $col=$row['col'];
            $mu=$row['mu'];
            $bl=$row['bl'];
            $hel=$row['hel'];
            $re=$row['re'];
            $oc=$row['oc'];
            $red=$row['red'];
            $rbc=$row['rbc'];
            $pu=$row['pu'];
            $mac=$row['mac'];
            $veg=$row['veg'];
            $mus=$row['mus'];
            $sta=$row['sta'];
            $cha=$row['cha'];
            $flo=$row['flo'];
            $pro=$row['pro'];
            $his=$row['his'];
            $coli=$row['coli'];
            $gia=$row['gia'];
            $al=$row['al'];
            $ad=$row['ad'];
            $tt=$row['tt'];
            $lar=$row['lar'];
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




echo '<div style="color: black; float:center;">

<br>

      <table class="table table" style="color: black">
    <thead>
      <tr>
        <th style="width:50%; text-align:center; ">Test</th>
        <th style="width:50%; text-align:center;">Result</th>
      </tr>
    </thead>';

  
   echo "<tbody>
    <tr>

       <td> <b>PHYSICAL EXAMINATION:</b></td> <td></td> 
    </tr>


        <tr>

          <td> AMOUNT</td>  <td>  $am   </td> 
        </tr>




        <tr>
        <td> CONSISTENCY</td> <td>    $con  </td> 
        </tr>

        <tr>
          <td> COLOUR</td>  <td> $col</td> 
       
       </tr>";


        
       
       echo " <tr>
         <td> MUCUS</td> <td>  $mu  </td>
        </tr>    

      
          <tr>
         <td> BLOOD</td>     <td>  $bl</td> 
        
         </tr>  
 
 
          <tr>
          <td> HELMINTHS</td>        <td>$hel </td> 
       
          </tr>      

<tr>


       <td> <b>CHEMICAL EXAMINATION:</b></td> <td></td> 
       </tr>
          <tr>
          <td> REACTION</td><td>    $re    </td> 
         </tr>

     
          <tr>
          <td> OCCULT BLOOD TEST</td><td>  $oc    </td> 
        
         </tr>


          <tr>
         <td> REDUCING SUBSTANCE</td> <td>    $red     </td> 
          </tr>
<tr>

       <td><b> MICROSCOPIC EXAMINATION:</b></td> <td></td> 
       </tr>
<tr>

       <td> <b>EPITHELIAL CELL</b></td> <td></td> 
       </tr>
          <tr>
          <td> R.B.C</td><td>     $rbc     </td>        
          </tr>


          <tr>
          <td> PUSH CELLS</td> <td>   $pu      </td> 
          </tr>
          

          <tr>
          <td> MACROPHAGES</td> <td>    $mac        </td> 

          </tr>
   <tr>
          <td> VEGETABLE CELLS</td> <td>   $veg       </td> 

          </tr>
   <tr>
          <td> MUSCLE FIBRES</td> <td>   $mus        </td> 

          </tr>
   <tr>
          <td> STARCH</td> <td>      $sta     </td> 

          </tr>
          <tr>

       <td> <b>FAT(GLOBULES)</b></td> <td></td> 
       </tr>
   <tr>
          <td> CHARCOT LEYDEN CRYSTALS</td> <td>    $cha      </td>

          </tr>
   <tr>
          <td> FLOATATION TEST</td> <td>   $flo   </td>

          </tr>
          <tr>

       <td> <b>MUCUS</b></td> <td></td> 
       </tr>
   <tr>
          <td> PROTOZOA(TROPHOZOITE)</td> <td>      $pro    </td> 

          </tr>
   <tr>
          <td> CYSTS OF-E,HISTOLYTICA</td> <td>  $his         </td> 
          </tr>
   <tr>
          <td> CYSTS OF-E COLI</td> <td>     $coli     </td> 

          </tr>
   <tr>
          <td> CYSTS OF-GIARDIA</td> <td>   $gia       </td> 

          </tr>
   <tr>
          <td> OVA OF-ASCARIS(AL)</td> <td>   $al      </td> 

          </tr>
   <tr>
          <td> OVA OF-ANKYLOSTOMA(AD)</td> <td>    $ad   </td>

          </tr>
   <tr>
          <td> OVA OF-TRICHURIS(T.T)</td> <td>    $tt       </td>

          </tr>
   <tr>
          <td> LARVA OF.</td> <td>   $lar      </td> 

          </tr>
   <tr>
          <td> OTHERS</td> <td>  $other       </td> 

          </tr>

           <tr>
          <td>  </td><td></td> 

          </tr>

          </tbody>
          </table>
          </div>";

           $test_name='stool';

            echo "<a style='color:white;text-decoration:none;' href='../show_test/stool_delete.php? id=$row[serial_no]&test=$test_name'>";
             echo '<button type="button" class="btn btn-danger">';
            echo " Delete";
             echo '</button>';
            echo " </a>";
           

             echo "&nbsp"; echo "&nbsp";

              echo "<a style='color:white;text-decoration:none;' href='../show_test/print_stool.php? id=$row[serial_no]' >";
             echo '<button type="button" class="btn btn-success">';
            echo "Printable page format";
             echo '</button>';
            echo " </a>";

             echo "<br>"; echo "<br>";
             echo "<br>"; 
        }
      }
      else
      {
        echo "<br>";
         echo "<p style='margin: 20px; padding :10 px ; font-size: 30px ; '> No records available !!!!!</p>";
         echo "<br>";

      }

      echo "<br>";


?>

  
       
      
</div>
</div>
</body>
</html>

<?php

echo "<br>";
include ('../front_page/footer.php');
?>
