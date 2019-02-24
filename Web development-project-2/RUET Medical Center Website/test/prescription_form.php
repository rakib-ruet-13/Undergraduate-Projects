
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
    $id_err = "ID is required";
  }

 else {
    $id = test_input($_POST["id"]);
     $flag+=1;
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }




   if($flag>=2)
          {


              $_SESSION["ptype"]= $patient_role;
              $_SESSION["pid"]=$id;

            
                header("refresh:0;url=../show_test/prescription_show.php");
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

<div class="main" style="float:center; color:white;" >



    

      

      <h4> Fill in the ID of the Patient </h4>

      <h4><span class="error">* required field.</span></h4>

      <form class="rform" method="post" style=" float: center ; padding-left: 80px; padding-right: 80px;"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      

      <div style="color: black; float: center; width:100% ; padding: 25px; font-size:20px; ">
      
      <b>Patient Role:</b>
      <select name="patient_role">
       <option value="student">STUDENT</option>
       <option  value="teacher">TEACHER</option>
       <option  value="staff">STAFF</option>
      </select>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



      <b>ID no.</b> <input style="color:black;"   type="text" name="id" value="<?php echo $id;?>">
      <span class="error">* <?php echo $id_err;?></span>

      <br><br>

      <input type="submit"  class="btn btn-success" name="submit" value="Submit">

      </form>
   
      
</div>
</div>
</body>
</html>

<?php
echo "<br>";
include ('../front_page/footer.php');
?>
