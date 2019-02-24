
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


 if (empty($_POST["to"])) {
    $tooerr = "to is required";
  }

 else {
    $to= test_input($_POST["to"]);
     $flag+=1;
  }
if (empty($_POST["th"])) {
    $therr = "th is required";
  }

 else {
     $th= test_input($_POST["th"]);
     $flag+=1;
  }

if (empty($_POST["ao"])) {
    $aoerr = "ao is required";
  }

 else {
     $ao= test_input($_POST["ao"]);
     $flag+=1;
  }

if (empty($_POST["ah"])) {
    $aherr = "ah is required";
  }

 else {
     $ah= test_input($_POST["ah"]);
     $flag+=1;
  }

if (empty($_POST["bo"])) {
    $boerr = "bo is required";

  }
 else {
     $bo= test_input($_POST["bo"]);
     $flag+=1;
  }

if (empty($_POST["bh"])) {
    $bherr = "bh is required";
  }

 else {
     $bh= test_input($_POST["bh"]);
     $flag+=1;
  }

if (empty($_POST["ox2"])) {
    $ox2err = "ox2 is required";
  }

 else {
     $ox2= test_input($_POST["ox2"]);
     $flag+=1;
  }

if (empty($_POST["ox19"])) {
    $ox19err = "ox19 is required";
  }

 else {
     $ox19= test_input($_POST["ox19"]);
     $flag+=1;
  }

if (empty($_POST["oxk"])) {
    $oxkerr= "oxk is required";
  }

 else {
     $oxk= test_input($_POST["oxk"]);
     $flag+=1;
  }

if (empty($_POST["abo"])) {
    $aboerr= "abo is required";
  }

 else {
     $abo= test_input($_POST["abo"]);
     $flag+=1;
  }

  if (empty($_POST["rh"])) {
    $rherr = "rh is required";
  }

 else {
     $rh= test_input($_POST["rh"]);
     $flag+=1;
  }

  if (empty($_POST["hb"])) {
    $hberr = "bh is required";
  }

 else {
     $hb= test_input($_POST["hb"]);
     $flag+=1;
  }

  if (empty($_POST["kal"])) {
    $kalerr = "kal is required";
  }

 else {
     $kal= test_input($_POST["kal"]);
     $flag+=1;
  }









}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }




   if($flag>=18)
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

               $sql="insert into serology(patient_role,id,lab_no,name,dot,age,sex,ref_doctor,too,th,ao,ah,bo,bh,ox2,ox19,oxk,abo,rh,hb,kal) VALUES ('$patient_role','$id','$lab_no','$name','$dot','$age','$sex', '$ref_doctor','$to','$th','$ao','$ah','$bo','$bh','$ox2','$ox19','$oxk','$abo','$rh','$hb','$kal')";
             


              if($conn->query($sql) == true)
              {


                $patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
                $patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";

                $toerr=$therr=$aoerr=$aherr=$boerr=$bherr=$ox2err=$ox19err=$oxkerr=$aboerr=$rherr=$hberr=$kalerr="";
                $to=$th=$ao=$ah=$bo=$bh=$ox2=$ox19=$oxk=$abo=$rh=$hb=$kal="";


                
                
                
                echo "<br>";
                echo "<p style='color: yellow;'>";
                echo "successfully inserted";
                echo "</p>";

                header("refresh:2;url=../show_test/serology_show.php");
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

      

      <h2> SEROLOGY REPORT  </h2>

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
        <th style="width:40%; text-align:center;">Result</th>
        <th style="width:40%; text-align:center;">Normal_value</th>
      </tr>
    </thead>

    <tbody>
     <tr>

       <td><b>Widal Test:</b></td> 
       </tr>
      <tr>

       <td> TO</td>  <td><input style="color:black;" type="text" name="to" value="<?php echo $to;?>"> <span class="error">* <?php echo $toerr;?></span> </td> <td> 1:80 dil</td> 
        </tr>




        <tr>
        <td>   TH</td> <td><input style="color:black;" type="text" name="th" value="<?php echo $th;?>"> <span class="error">* <?php echo $therr;?></span></td> <td> 1:80 dil</td> 
        </tr>

        <tr>
          <td> AO</td><td><input style="color:black;" type="text" name="ao" value="<?php echo $ao;?>"> <span class="error">* <?php echo $aoerr;?></span>
       </td> <td> 1:80 dil</td>
       
       </tr>



          <tr>
          <td> AH</td><td> <input style="color:black;" type="text" name="ah" value="<?php echo $ah;?>"> <span class="error">* <?php echo $aherr;?></span> </td> <td> 1:80 dil</td> 
          </tr>    


      
          <tr>
         <td>  BO</td> <td><input style="color:black;" type="text" name="bo" value="<?php echo $bo;?>"><span class="error">* <?php echo $boerr;?></span></td> <td> 1:80 dil</td>
        
         </tr>  


          <tr>
          <td> BH</td><td><input style="color:black;" type="text" name="bh" value="<?php echo $bh;?>"> <span class="error">* <?php echo $bherr;?></span></td> <td> 1:80 dil</td> 
       
          </tr>      
<tr>

       <td> <b>Weil Felix Test:</b></td> 
       </tr>

          <tr>
          <td> OX 2</td><td> <input style="color:black;" type="text" name="ox2" value="<?php echo $ox2;?>"> <span class="error">* <?php echo $ox2err;?></span></td> <td> 1:80 dil</td> 
         </tr>

         
          <tr>
          <td> OX 19</td><td><input style="color:black;" type="text" name="ox19" value="<?php echo $ox19;?>"><span class="error">* <?php echo $ox19err;?></span></td> <td> 1:80 dil</td> 
        
         </tr>


          <tr>
         <td> OX K</td> <td><input style="color:black;" type="text" name="oxk" value="<?php echo $oxk;?>">  <span class="error">* <?php echo $oxkerr;?></span></td> <td> 1:80 dil</td> 
          </tr>
<tr>

       <td> <b>Blood Group</b></td> 
       </tr>

          <tr>
          <td> ABO type </td><td><input style="color:black;" type="text" name="abo" value="<?php echo $abo;?>"> <span class="error">* <?php echo $aboerr;?></span></td> <td> </td>        
          </tr>


          <tr>
          <td> Rh.-D</td> <td><input style="color:black;" type="text" name="rh" value="<?php echo $rh;?>"><span class="error">* <?php echo $rherr;?></span></td> <td> positive/negative</td> 
          </tr>
          

          <tr>
          <td> HBsAg</td> <td><input style="color:black;" type="text" name="hb" value="<?php echo $hb;?>">  <span class="error">* <?php echo $hberr;?></span></td> <td> positive/negative</td>

          </tr>
 <tr>
          <td> ICT for Kalaazar</td> <td><input style="color:black;" type="text" name="kal" value="<?php echo $kal;?>">  <span class="error">* <?php echo $kalerr;?></span></td> <td> positive/negative</td>

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
