
<?php
include 'init_restrict_access.php';
$_SESSION["page"]='admin';
?>


<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>



<?php

$serialErr=$nameErr = $designationErr = $phoneErr = $swstartErr = $swendErr = $tstaetErr = $tendErr ="";
$serial=$name = $designation = $phone = $swstart = $swend = $tstaet = $tend ="";

$flag = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$flag = 0;

  if (empty($_POST["serial"])) {
    $serialErr = "This Field is required";
    }
    else
    {
      $serial=$_POST["serial"];
      $flag++;

    }


    if (empty($_POST["name"])) {
    $nameErr = "This Field is required";
    }
     else
    {
       $name=$_POST["name"];
        $flag++;
    }

     if (empty($_POST["designation"])) {
    $designationErr = "This Field is required";
    }
     else
    {
      $designation=$_POST["designation"];
       $flag++;
    }

     if (empty($_POST["phone"])) {
    $phoneErr = "This Field is required";
    }
     else
    {
       $phone=$_POST["phone"];
        $flag++;
    }


     if (empty($_POST["swstart"])) {
    $swstartErr = "This Field is required";
    }
     else
    {
        $swstart=$_POST["swstart"];
         $flag++;
    }

     if (empty($_POST["swend"])) {
    $swendErr = "This Field is required";
    }
     else
    {
      $swend=$_POST["swend"];
       $flag++;
    }


     if (empty($_POST["tstart"])) {
    $tstartErr = "This Field is required";
    }
     else
    {
       $tstart=$_POST["tstart"];
        $flag++;

    }

   
    if (empty($_POST["tend"])) {
    $tendErr = "This Field is required";
    }
     else
    {
       $tend=$_POST["tend"];
        $flag++;
    }

       if (empty($_POST["query"])) {
    }
     else
    {
       $query=$_POST["query"];
        $flag++;
    }

}
   


?>


<!DOCTYPE HTML>  
<html>
<head>
<title>edit</title>
 <link rel="stylesheet" type="text/css" href="../rmcenter_admin/rmc_style_admin_page.css">
</head>
<body>  

<div class="main">


    <div class="show_log" style="font-size:15px ;color:white; margin:0px; ">
    <p style="color: pink ; padding-left:28px;">welcome .. <?php echo $admin_id ?>
     <?php echo " &nbsp &nbsp  "?>
     <button type="button" class="btn btn-danger"><a style="color:white; text-decoration:none;" href="../rmcenter_admin/rmc_admin_logout.php">Logout</a></button>
    </p>
    </div>




<div style="text-align:center; color:orange;">
  

<?php 




if($flag==9)
{
 

    
      if($query=="insert")
      {
      $sql= "insert into rmc_doctor(serial,name,designation,phone,regular_start,regular_end,thursday_start,thursday_end) values('$serial','$name','$designation','$phone','$swstart','$swend','$tstart','$tend')";
      }
      else
      {
      $sql="UPDATE `rmc_doctor` SET serial='$serial', `name` = '$name', `designation` = '$designation', `phone` = '$phone', `regular_start` = '$swstart', `regular_end` = '$swend', `thursday_start` = '$tstart', `thursday_end` = '$tend' WHERE `rmc_doctor`.`serial` = '$serial';";
      }


      $conn = new mysqli($servername, $user, $pass,$db);
           if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 
            else
            {
              echo "entering database<br><br>";
            }

     if($conn->query($sql) == True)
     {
        echo "Edited Successfully ";
     }
    else

    {
      
      echo "something went wrong ......try again";
      echo" ";

    }

  


}

  ?>
  <br>



</div>







<div style="text-align:center; color:black; background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat; padding:20px;">
<h2> Doctor Schedule</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 


  Serial: <input type="text" name="serial" value="<?php echo $serial;?>">
  <span class="error">* <?php echo $serialErr;?></span>
  <br><br>


  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>



  Designation: <input type="text" name="designation" value="<?php echo $designation;?>">
  <span class="error">* <?php echo $designationErr;?></span>
  <br><br>

  Phone: <input type="text" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>

  Sat-Wed start time: <input type="text" name="swstart" value="<?php echo $swstart;?>">
  <span class="error">* <?php echo $swstartErr;?></span>
  <br><br>

  Sat-Wed End time: <input type="text" name="swend" value="<?php echo $swend;?>">
  <span class="error">* <?php echo $swsendErr;?></span>
  <br><br>

  Thursday start time: <input type="text" name="tstart" value="<?php echo $tstart;?>">
  <span class="error">* <?php echo $tstartErr;?></span>
  <br><br>

  Thursday end time: <input type="text" name="tend" value="<?php echo $tend;?>">
  <span class="error">* <?php echo $tendErr;?></span>
  <br><br>





  Type of action:
  <input type="radio" name="query" <?php if (isset($query) && $gender=="insert") echo "checked";?> value="insert">Insert
  <input type="radio" name="query" <?php if (isset($query) && $gender=="update") echo "checked";?> value="update">Update
  <span class="error">* <?php echo $queryErr;?></span>
  <br><br>


  <input type="submit" class="btn btn-danger" name="submit" value="Submit">  
  <br><br>
</form>
</div>
</div>



</body>


<html>

<?php

include '../front_page/footer.php';
?>

