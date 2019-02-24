
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
$rpgerr=$fbserr=$ppbserr=$aberr=$gluerr=$creerr=$hbaierr="";
$rpg=$fbs=$ppbs=$ab=$glu=$cre=$hbai="";
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



 if (empty($_POST["rpg"])) {
    $rpgerr = "rpg is required";
  }

 else {
    $rpg= test_input($_POST["rpg"]);
     $flag+=1;
  }
if (empty($_POST["fbs"])) {
    $fbserr = "fbs is required";
  }

 else {
     $fbs= test_input($_POST["fbs"]);
     $flag+=1;
  }

if (empty($_POST["ppbs"])) {
    $ppbserr = "ppbs is required";
  }

 else {
     $ppbs= test_input($_POST["ppbs"]);
     $flag+=1;
  }

if (empty($_POST["ab"])) {
    $aberr = "ab is required";
  }

 else {
     $ab= test_input($_POST["ab"]);
     $flag+=1;
  }

if (empty($_POST["glu"])) {
    $gluerr = "glu is required";
  }

 else {
     $glu= test_input($_POST["glu"]);
     $flag+=1;
  }

if (empty($_POST["cre"])) {
    $creerr = "cre is required";
  }

 else {
     $cre= test_input($_POST["cre"]);
     $flag+=1;
  }

if (empty($_POST["hbai"])) {
    $hbaierr = "hbai is required";
  }

 else {
     $hbai= test_input($_POST["hbai"]);
     $flag+=1;
  }

echo $flag;








}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }




   if($flag>=15)
          {

             $_SESSION["ptype"]= $patient_role;
                $_SESSION["pid"]=$id;


              echo "connecting ";
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

               $sql="insert into hb(patient_role,id,lab_no,name,dot,age,sex,ref_doctor,
               rpg,fbs,ppbs,ab,glu,cre,hbai

              )

                VALUES ('$patient_role','$id','$lab_no','$name','$dot','$age','$sex',
               '$ref_doctor',
               '$rpg', '$fbs', '$ppbs', '$ab', '$glu', '$cre', '$hbai')";
             

           
              if($conn->query($sql) == true)
              {
                 $patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
                 $patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";

                $rpgerr=$fbserr=$ppbserr=$aberr=$gluerr=$creerr=$hbaierr="";
                $rpg=$fbs=$ppbs=$ab=$glu=$cre=$hbai="";


               
                
               echo "<br>";
                echo "<p style='color: yellow;'>";
                echo "successfully inserted";
                echo "</p>";

                header("refresh:2;url=../show_test/hb_show.php");
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

      

      <h2> HAEMATOLOGY & BIOCHEMICAL ANALYSIS REPORT </h2>

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
        <th style="text-align:center;width:35%;">Test</th>
        <th style="text-align:center;width:25%;">Result</th>
        <th style="text-align:center;width:40%;">Result Normal range</th>
         
      </tr>
    </thead>

    <tbody>
      <tr>

       <td>Random Plasma Glucose: </td>  <td><input style="color:black;" type="text" name="rpg" value="<?php echo $rpg;?>"> <span class="error">* <?php echo $rpg3err;?></span> </td> <td> (Coresponding urine sugar): 3.7-7.0 mmol/L</td> 
        </tr>




        <tr>
        <td>   FBS:</td> <td><input style="color:black;" type="text" name="fbs" value="<?php echo $fbs;?>"> <span class="error">* <?php echo $fbserr;?></span></td> <td> (Coresponding urine sugar): 3.3-6.1 mmol/L</td> 
        </tr>

        <tr>
          <td> PPBS: </td><td><input style="color:black;" type="text" name="ppbs" value="<?php echo $ppbs;?>"> <span class="error">* <?php echo $ppbserr;?></span></td> <td> (Coresponding urine sugar): <7.8 mmol/L</td>
       
       </tr>



          <tr>
          <td> 2 hrs after breakfast:</td><td> <input style="color:black;" type="text" name="ab" value="<?php echo $ab;?>"> <span class="error">* <?php echo $aberr;?></span> </td> <td> (Coresponding urine sugar): <8.0 mmol/L</td> 
          </tr>    


      
          <tr>
         <td>  2 hrs after 75 gram glucose:</td> <td><input style="color:black;" type="text" name="glu" value="<?php echo $glu;?>"><span class="error">* <?php echo $gluerr;?></span></td> <td> (Coresponding urine sugar): 8.8.0 mmol/L</td>
        
         </tr>  


          <tr>
          <td> S.Creatinine: </td><td><input style="color:black;" type="text" name="cre" value="<?php echo $cre;?>"> <span class="error">* <?php echo $creerr;?></span></td> <td> <1.4 mg/dl</td> 
       
          </tr>      


          <tr>
          <td> HbAIC:</td><td> <input style="color:black;" type="text" name="hbai" value="<?php echo $hbai;?>"> <span class="error">* <?php echo $hbaierr;?></span></td> <td> 4.5-6.3%</td> 
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
