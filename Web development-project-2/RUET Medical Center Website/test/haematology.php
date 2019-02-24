
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
<br>

<?php
include '../index_option/index.php';
?>




<?php

$flag = 0;


$patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
$patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";

$patient_rollerr=$iderr=$hemoerr=$esrerr=$tcnterr=$wbcerr=$diffcnterr=$neutroerr=$lymphoerr=$monoerr=$eosinerr=$basoerr=$blasterr=$othererr="";
$patient_roll=$id=$hemo=$esr=$tcnt=$wbc=$diffcnt=$neutro=$lympho=$mono=$eosin=$baso=$blast=$other="";
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



 if (empty($_POST["hemo"])) {
    $hemoerr = "hemo is required";
  }

 else {
    $hemo= test_input($_POST["hemo"]);
     $flag+=1;
  }
if (empty($_POST["esr"])) {
    $esrerr = "esr is required";
  }

 else {
     $esr= test_input($_POST["esr"]);
     $flag+=1;
  }

if (empty($_POST["tcnt"])) {
    $tcnterr = "tcnt is required";
  }

 else {
     $tcnt= test_input($_POST["tcnt"]);
     $flag+=1;
  }

if (empty($_POST["wbc"])) {
    $wbcerr = "wbc is required";
  }

 else {
     $wbc= test_input($_POST["wbc"]);
     $flag+=1;
  }

if (empty($_POST["diffcnt"])) {
    $diffcnterr = "diffcnt is required";
  }

 else {
     $diffcnt= test_input($_POST["diffcnt"]);
     $flag+=1;
  }

if (empty($_POST["neutro"])) {
    $neutroerr = "neutro is required";
  }

 else {
     $neutro= test_input($_POST["neutro"]);
     $flag+=1;
  }

if (empty($_POST["lympho"])) {
    $lymphoerr = "lympho is required";
  }

 else {
     $lympho= test_input($_POST["lympho"]);
     $flag+=1;
  }

if (empty($_POST["mono"])) {
    $monoerr = "mono is required";
  }

 else {
     $mono= test_input($_POST["mono"]);
     $flag+=1;
  }

if (empty($_POST["eosin"])) {
    $eosinerr= "eosin is required";
  }

 else {
     $eosin= test_input($_POST["eosin"]);
     $flag+=1;
  }

if (empty($_POST["baso"])) {
    $basoerr= "baso is required";
  }

 else {
     $baso= test_input($_POST["baso"]);
     $flag+=1;
  }

if (empty($_POST["blast"])) {
    $blasterr= "blast is required";
  }

 else {
     $blast= test_input($_POST["blast"]);
     $flag+=1;
  }

  if (empty($_POST["other"])) {
    $othererr= "blast is required";
  }

 else {
     $other= test_input($_POST["other"]);
     $flag+=0;
  }
echo $flag;








}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }




   if($flag>=18)
          {
              echo "<br> ";

                $_SESSION["ptype"]= $patient_role;
                $_SESSION["pid"]=$id;


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

               $sql="insert into haematology(patient_role,id,lab_no,name,dot,age,sex,ref_doctor,hemo,esr,tcnt,wbc,diffcnt,neutro,
               lympho,mono,eosin,baso,blast,other) VALUES ('$patient_role','$id','$lab_no','$name','$dot','$age','$sex',
               '$ref_doctor','$hemo','$esr','$tcnt','$wbc','$diffcnt','$neutro','$lympho','$mono','$eosin','$baso','$blast','$other')";
             

             echo "ok1";

              if($conn->query($sql) == true)
              {


                $patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
                $patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";

                $patient_rollerr=$iderr=$hemoerr=$esrerr=$tcnterr=$wbcerr=$diffcnterr=$neutroerr=$lymphoerr=$monoerr=$eosinerr=$basoerr=$blasterr=$othererr="";
                $patient_roll=$id=$hemo=$esr=$tcnt=$wbc=$diffcnt=$neutro=$lympho=$mono=$eosin=$baso=$blast=$other="";
                
                
                echo "<br>";
                echo "<p style='color: yellow;'>";
                echo "successfully inserted";
                echo "</p>";

                header("refresh:2;url=../show_test/haematology_show.php");
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
        <p>
      
        </p>
        </div>

      <div  style="color: black; float: center; background: white;padding-left: 80px;padding-right: 80px; padding-top:20px;">

      

      <h2> HAEMATOLOGY REPORT  </h2>

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
        <th style="text-align:center;width:40%;">Test</th>
        <th style="text-align:center;width:40%;">Result</th>
        <th style="text-align:center;width:40%;">Ref_result</th>
      </tr>
    </thead>

    <tbody>
      <tr>

       <td>Hemoglobin: </td>  <td><input style="color:black;" type="text" name="hemo" value="<?php echo $hemo;?>"> <span class="error">* <?php echo $hemoerr;?></span> </td> <td> M=13.18 gm/dl / F=11.5-16.5 gm/dl</td> 
        </tr>




        <tr>
        <td>   E.S.R:</td> <td><input style="color:black;" type="text" name="esr" value="<?php echo $esr;?>"> <span class="error">* <?php echo $esrerr;?></span></td> <td> M=0.10 mm in 1st hr / F=0.12 mm in 1st hr</td> 
        </tr>

        <tr>
          <td> Total Count: </td><td><input style="color:black;" type="text" name="tcnt" value="<?php echo $tcnt;?>"> <span class="error">* <?php echo $tcnterr;?></span>
       </td> <td></td>
       
       </tr>



          <tr>
          <td> W.B.C:</td><td> <input style="color:black;" type="text" name="wbc" value="<?php echo $wbc;?>"> <span class="error">* <?php echo $wbcerr;?></span> </td> <td> 4000-11000/cmm</td> 
          </tr>    


      
          <tr>
         <td>  Differential Count:</td> <td><input style="color:black;" type="text" name="diffcnt" value="<?php echo $diffcnt;?>"><span class="error">* <?php echo $diffcnterr;?></span></td> <td></td>
        
         </tr>  


          <tr>
          <td> Neutrophils: </td><td><input style="color:black;" type="text" name="neutro" value="<?php echo $neutro;?>"> <span class="error">* <?php echo $neutroerr;?></span></td> <td> 40-75%</td> 
       
          </tr>      


          <tr>
          <td> Lymphocytes:</td><td> <input style="color:black;" type="text" name="lympho" value="<?php echo $lympho;?>"> <span class="error">* <?php echo $lymphoerr;?></span></td> <td> 20-45%</td> 
         </tr>

         
          <tr>
          <td> Monocytes: </td><td><input style="color:black;" type="text" name="mono" value="<?php echo $mono;?>"><span class="error">* <?php echo $monoerr;?></span></td> <td> 2-10%</td> 
        
         </tr>


          <tr>
         <td> Eosinphils:</td> <td><input style="color:black;" type="text" name="eosin" value="<?php echo $eosin;?>">  <span class="error">* <?php echo $eosinerr;?></span></td> <td> 1-6%</td> 
          </tr>


          <tr>
          <td> Basophilis: </td><td><input style="color:black;" type="text" name="baso" value="<?php echo $baso;?>"> <span class="error">* <?php echo $basoerr;?></span></td> <td> < 1% </td>        
          </tr>


          <tr>
          <td> Blast:</td> <td><input style="color:black;" type="text" name="blast" value="<?php echo $blast;?>"><span class="error">* <?php echo $blasterr;?></span></td> <td></td> 
          </tr>
          

          <tr>
          <td> Other:</td> <td><input style="color:black;" type="text" name="other" value="<?php echo $other;?>">  <span class="error">* <?php echo $othererr;?></span></td> <td></td>

          </tr>

          </tbody>
          </table>
          </div>

  <input style="float:center ; text-align:center;" type="submit"  class="btn btn-success" name="submit" value="Submit">


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
