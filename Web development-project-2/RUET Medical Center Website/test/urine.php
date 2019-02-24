
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

$quanerr=$colerr=$apperr=$sederr=$speerr=$reaerr=$phperr=$alerr=$suerr=$bierr=$calerr=$aperr=$tperr=$eperr=$puerr=$rbcerr="";
$quan=$col=$app=$sed=$spe=$rea=$php=$al=$su=$bi=$cal=$ap=$tp=$ep=$pu=$rbc="";
$date='mm/dd/yyyy';




if ($_SERVER["REQUEST_METHOD"] == "POST") {

$flag=0;


   if (empty($_POST["patient_role"])) {
    $patient_role_err = "patient role is required";
  }

 else {
    $patient_role = test_input($_POST["patient_role"]);
     $flag+=1;
  }




  
  
  if (empty($_POST["id"])) {
    $id_err = "id no. is required";
  }
   else {
    $id = test_input($_POST["id"]);
     $flag+=1;
  
}


  if (empty($_POST["lab_no"])) {
    $lab_no_err = "labb no is required";
  }
   else {
    $lab_no= test_input($_POST["lab_no"]);
     $flag+=1;
  
}


  if (empty($_POST["date"])) {
    $date_err = "date is required";
  }
   else {
    $date = test_input($_POST["date"]);
     $flag+=1;
  
}


  if (empty($_POST["name"])) {
    $name_err = "Patient name is required";
  }
   else {
    $name = test_input($_POST["name"]);
     $flag+=1;
  
}


  if (empty($_POST["age"])) {
    $age_err = "age is  required";
  }
   else {
    $age = test_input($_POST["age"]);
     $flag+=1;
  
}


  if (empty($_POST["sex"])) {
    $sex_err = "Sex is required";
  }
   else {
    $sex = test_input($_POST["sex"]);
     $flag+=1;
  
}


  if (empty($_POST["ref_doctor"])) {
    $ref_doctor_err = "Ref. Doctor is required";
  }
   else {
    $ref_doctor= test_input($_POST["ref_doctor"]);
     $flag+=1;
  
}



 if (empty($_POST["quan"])) {
    $quanerr = "quan is required";
  }

 else {
    $quan= test_input($_POST["quan"]);
     $flag+=1;
  }
if (empty($_POST["col"])) {
    $colerr = "col is required";
  }

 else {
     $col= test_input($_POST["col"]);
     $flag+=1;
  }

if (empty($_POST["app"])) {
    $apperr = "app is required";
  }

 else {
     $app= test_input($_POST["app"]);
     $flag+=1;
  }

if (empty($_POST["sed"])) {
    $sederr = "sed is required";
  }

 else {
     $sed= test_input($_POST["sed"]);
     $flag+=1;
  }

if (empty($_POST["spe"])) {
    $speerr = "spe is required";

  }
 else {
     $spe= test_input($_POST["spe"]);
     $flag+=1;
  }

if (empty($_POST["rea"])) {
    $reaerr = "rea is required";
  }

 else {
     $rea= test_input($_POST["rea"]);
     $flag+=1;
  }

if (empty($_POST["php"])) {
    $phperr = "php is required";
  }

 else {
     $php= test_input($_POST["php"]);
     $flag+=1;
  }

if (empty($_POST["al"])) {
    $alerr = "al is required";
  }

 else {
     $al= test_input($_POST["al"]);
     $flag+=1;
  }

if (empty($_POST["su"])) {
    $suerr= "su is required";
  }

 else {
     $su= test_input($_POST["su"]);
     $flag+=1;
  }

if (empty($_POST["bi"])) {
    $bierr= "bi is required";
  }

 else {
     $bi= test_input($_POST["bi"]);
     $flag+=1;
  }

if (empty($_POST["cal"])) {
    $calerr= "cal is required";
  }

 else {
     $cal= test_input($_POST["cal"]);
     $flag+=1;
  }

if (empty($_POST["ap"])) {
    $aperr= "ap is required";
  }

 else {
     $ap= test_input($_POST["ap"]);
     $flag+=1;
  }
if (empty($_POST["tp"])) {
    $tperr= "tp is required";
  }

 else {
     $tp= test_input($_POST["tp"]);
     $flag+=1;
  }
if (empty($_POST["ep"])) {
    $eperr= "ep is required";
  }

 else {
     $ep= test_input($_POST["ep"]);
     $flag+=1;
  }
if (empty($_POST["pu"])) {
    $puerr= "pu is required";
  }

 else {
     $pu= test_input($_POST["pu"]);
     $flag+=1;
  }

if (empty($_POST["rbc"])) {
    $rbcerr= "rbc is required";
  }

 else {
     $rbc= test_input($_POST["rbc"]);
     $flag+=1;
  }






}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }



   if($flag>=24)
          {

             $_SESSION["ptype"]= $patient_role;
                $_SESSION["pid"]=$id;


              echo "<br> ";
              $conn = new mysqli($servername, $user, $pass,$db);
                   if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      } 
                    else
                    {
                      //echo "entering database<br>";
                    }

               $dot = strtotime($date);
               $dot = date('Y-m-d H:i:s', $dot);

               $sql="insert into urine(patient_role,id,lab_no,name,dot,age,sex,ref_doctor,
               
              quan,col,app,sed,spe,rea,php,al,su,bi,cal,ap,tp,ep,pu,rbc) 

               VALUES ('$patient_role','$id','$lab_no','$name','$dot','$age','$sex', '$ref_doctor',

               '$quan','$col','$app','$sed','$spe','$rea','$php','$al','$su','$bi','$cal','$ap','$tp','$ep','$pu','$rbc')";
             


              if($conn->query($sql) == true)
              {


                $patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
                $patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";


                $quanerr=$colerr=$apperr=$sederr=$speerr=$reaerr=$phperr=$alerr=$suerr=$bierr=$calerr=$aperr=$tperr=$eperr=$puerr=$rbcerr="";
                $quan=$col=$app=$sed=$spe=$rea=$php=$al=$su=$bi=$cal=$ap=$tp=$ep=$pu=$rbc="";

            
                
                
                
                echo "<br>";
                echo "<p style='color: yellow;'>";
                echo "successfully inserted";
                echo "</p>";

                 header("refresh:2;url=../show_test/urine_show.php");
              }

           }
           else
           {
               echo "<br>";
               echo "<p style='color: yellow;'>";
                echo "Fill up all necessary fields";
                echo "</p>";
           }



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
      
        </div>

      <div  style="color: black; float: center; background: white;padding-left: 80px;padding-right: 80px; padding-top:20px;">

      

      <h2> URINE TEST  </h2>

      <h4><span class="error">* required field.</span></h4>

      <form class="rform" method="post" style="background:white; float: center ; padding-left: 80px; padding-right: 80px;"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      

      <div style="color: black; float: center; width:100% ; padding: 25px; ">
      
      Patient Role:
      <select name="patient_role">
       <option value="student">STUDENT</option>
       <option  value="teacher">TEACHER</option>
       <option  value="staff">STAFF</option>
      </select>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      ID no. <input style="color:black;"   type="text" name="id" value="<?php echo $id;?>">
      <span class="error">* <?php echo $id_err;?></span>
      <br><br>

      Lab no. <input style="color:black;"   type="text" name="lab_no" value="<?php echo $lab_no;?>">
      <span class="error">* <?php echo $lab_no_err;?></span> 

      Date <input style="color:black;"   type="date" name="date" value="<?php echo $date;?>">
      <span class="error">* <?php echo $date_err;?></span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     

      <br><br>

      Patient Name <input style="color:black;"  type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $name_err;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

       Age <input style="color:black;"  type="text" name="age" value="<?php echo $age;?>">
      <span class="error">* <?php echo $age_err;?></span>

     <br><br>




       Sex 
        <select name="sex">
       <option value="male">male</option>
       <option value="female">female</option>
      
      </select><br><br>

       Ref_by_doctor <input style="color:black;"  type="text" name="ref_doctor" value="<?php echo $ref_doctor;?>">
      <span class="error">* <?php echo $ref_doctor_err;?></span><br><br>

      </div>



<div style="color: black; float:center;">

<br>

      <table class="table table" style="color: black">
    <thead>
      <tr>
        <th style="width:40%; text-align:center;">Test</th>
        <th style="width:55%; text-align:center;">Result</th>
      </tr>
    </thead>

    <tbody>
     <tr>

       <td><b>Physical Examination:</b></td> 
       </tr>
      <tr>

       <td> Quantity</td>  <td><input style="color:black;" type="text" name="quan" value="<?php echo $quan;?>"> <span class="error">* <?php echo $quanerr;?></span> </td> <td></td> 
        </tr>




        <tr>
        <td> Colour</td> <td><input style="color:black;" type="text" name="col" value="<?php echo $col;?>"> <span class="error">* <?php echo $colerr;?></span></td> <td> </td> 
        </tr>

        <tr>
          <td> Appearance</td><td><input style="color:black;" type="text" name="app" value="<?php echo $app;?>"> <span class="error">* <?php echo $apperr;?></span>
       </td> <td> </td>
       
       </tr>



          <tr>
          <td> Sediment</td><td> <input style="color:black;" type="text" name="sed" value="<?php echo $sed;?>"> <span class="error">* <?php echo $sederr;?></span> </td> <td> </td> 
          </tr>    


      
          <tr>
         <td> Specific Gravity</td> <td><input style="color:black;" type="text" name="spe" value="<?php echo $spe;?>"><span class="error">* <?php echo $speerr;?></span></td> <td></td>
        
         </tr>  

<tr>

       <td><b>Chemical Examination:</b></td> 
       </tr>
          <tr>
          <td> Reaction</td><td><input style="color:black;" type="text" name="rea" value="<?php echo $rea;?>"> <span class="error">* <?php echo $reaerr;?></span></td> <td> </td> 
       
          </tr>    

          <tr>
          <td> Excess of phosphate</td><td> <input style="color:black;" type="text" name="php" value="<?php echo $php;?>"> <span class="error">* <?php echo $phperr;?></span></td> <td> </td> 
         </tr>

         
          <tr>
          <td> Albumin</td><td><input style="color:black;" type="text" name="al" value="<?php echo $al;?>"><span class="error">* <?php echo $alerr;?></span></td> <td> </td> 
        
         </tr>


          <tr>
         <td> Sugar</td> <td><input style="color:black;" type="text" name="su" value="<?php echo $su;?>">  <span class="error">* <?php echo $suerr;?></span></td> <td></td> 
          </tr>
             <tr>
         <td> Bile salt</td> <td><input style="color:black;" type="text" name="bi" value="<?php echo $bi;?>">  <span class="error">* <?php echo $bierr;?></span></td> <td></td> 
          </tr>
<tr>

       <td> <b>Microscopic Examination:</b></td> 
       </tr>
<tr>

       <td> <b>Unorganized deposits:</b></td> 
       </tr>

          <tr>
          <td> Calocium Oxalate </td><td><input style="color:black;" type="text" name="cal" value="<?php echo $cal;?>"> <span class="error">* <?php echo $calerr;?></span></td> <td> </td>        
          </tr>


          <tr>
          <td> Amorphous phosphate</td> <td><input style="color:black;" type="text" name="ap" value="<?php echo $ap;?>"><span class="error">* <?php echo $aperr;?></span></td> <td></td> 
          </tr>
          

          <tr>
          <td> Triple phosphate</td> <td><input style="color:black;" type="text" name="tp" value="<?php echo $tp;?>">  <span class="error">* <?php echo $tperr;?></span></td> <td> </td>

          </tr>
          <tr>

       <td> <b>Organized deposits:</b></td> 
       </tr>
 <tr>
          <td> Epithelial cells</td> <td><input style="color:black;" type="text" name="ep" value="<?php echo $ep;?>">  <span class="error">* <?php echo $eperr;?></span></td> <td></td>

          </tr>
              <td> Pus cells</td> <td><input style="color:black;" type="text" name="pu" value="<?php echo $pu;?>">  <span class="error">* <?php echo $pu;?></span></td> <td></td>

          </tr>
              <td> R.B.C.</td> <td><input style="color:black;" type="text" name="rbc" value="<?php echo $rbc;?>">  <span class="error">* <?php echo $rbcerr;?></span></td> <td></td>

          </tr>
          </tbody>
          </table>
          </div>

  <input type="submit"  class="btn btn-success" name="submit" value="Submit">

      </form>
      <br>
      
</div>
</div>
</body>
</html>

<?php

echo "<br>";

include ('../front_page/footer.php');
?>
