<?php
include 'init_restrict_access.php';

$_SESSION['page']="admin";

?>

<?php


 $_SESSION["staff_id"]="";

 $admin_id=$_SESSION["admin_id"] ;

?>

<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>




<!DOCTYPE HTML>  
<html>
<head>
<title>Create staff profile </title>
  <link rel="stylesheet" type="text/css" href="/rmcenter_admin/rmc_style_register.css">
   
</head>
<body>  

<?php

$flag = 0;

// define variables and set to empty values

// Create connection

$nameErr =$rollErr =$dobErr=$bloodErr=$contactErr="";
$name = $roll=$dob=$blood=$contact="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

$flag=0;

 
 if (empty($_POST["name"])) {
    $userErr = "name is required";
  }

 else {
    $name = test_input($_POST["name"]);
     $flag+=1;
  }

  
  
  if (empty($_POST["roll"])) {
    $rollErr = "Staff ID is required";
  }
   else {
    $roll = test_input($_POST["roll"]);
     $flag+=1;
  }



    if (empty($_POST["blood"])) {
    $bloodErr = "Blood group is required";
  }
   else {
    $blood = test_input($_POST["blood"]);
     $flag+=1;
  }

    if (empty($_POST["contact"])) {
    $contactErr = "Contact no is required";
  }
   else {
    $contact = test_input($_POST["contact"]);
    $flag+=1;
    
  }

    if (empty($_POST["dob"])) {
    $dobErr = "Date of birth is required";
  }
   else {
    $dob = test_input($_POST["dob"]);
     $flag+=1;
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>



<div class="main" style="color: rgb(0,0,0);">


    <br><br>

    <div class="show_log" style="font-size:15px color:white ">
  
     <p style="color:orange;">welcome,<?php echo $admin_id ?>
     <?php echo ".  "?>
    <a href="/rmcenter_admin/rmc_admin_logout.php"> <img src="/rmcenter_admin/logout.jpg" alt="Log out" style="height:15px;width:50px"></a>
    </p>

    </div>


<div class="rform" >

<h2> Create Staff Profile: </h2>

<p><span class="error">* required field.</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  Staff ID: <input type="text" name="roll" value="<?php echo $roll;?>">
  <span class="error">* <?php echo $rollErr;?></span>
  <br><br>

  Blood Group: <input type="text" name="blood" value="<?php echo $blood;?>">
  <span class="error">* <?php echo $bloodErr;?></span>
  <br><br>

  Contact: <input type="text" name="contact" value="<?php echo $contact;?>">
  <span class="error">* <?php echo $contactErr;?></span>
  <br><br>

  Date of Birth : <input type="date" name="dob" value="<?php echo $dob;?>">
  <span class="error">* <?php echo $dobErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
  <br>

</form>
<br>

</div>
</div>



<div style="text-align:center; color:green;">
  

<?php 


if($flag==5)
{
      
      $conn = new mysqli($servername, $user, $pass,$db);
           if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 
            else
            {
              //echo "entering database<br>";
            }


      $sql="select id from staff_profile where id='$roll'";
       $reslt=$conn->query($sql);

     if($reslt->num_rows > 0)
     {
          echo "ID already exists. Try another .<br>";
     }
     else
     {

          $day1 = strtotime($dob);
         $day1 = date('Y-m-d H:i:s', $day1);

         $sql="insert into staff_profile(name,id,contact,blood,dob) VALUES ('$name','$roll','$contact','$blood','$day1')";
          $reslt=$conn->query($sql);

          echo "Congratulations !!! . Profile Created Successfully<br>";

           
          $_SESSION["staff_id"]=$roll;

           header("Location: /rmcenter_admin/rmc_staff_image_upload.php");
           exit;
          

    

 //conn->close();
    }

}

 ?>
  <br>

   <div  style="color:black;background:rgba(122,222,124,0.2); color:white ; width:100% ; float:center ; text-align:center ; font-size:14px; padding: 7px;">
  
        <p style="color:white">&copy;RUETMedicalCenter <br>all rights reserved.</p>

    </div>
  <br>

</div>
</body>
<html>

