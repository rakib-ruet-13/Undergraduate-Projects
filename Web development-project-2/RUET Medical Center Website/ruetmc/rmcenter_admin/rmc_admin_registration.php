<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>


<?php
include 'init_access.php';
?>



<!DOCTYPE HTML>  
<html>
<head>
<title>resistration</title>
  <link rel="stylesheet" type="text/css" href="/rmcenter_admin/rmc_style_register.css">
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

<?php

$flag = 0;


// Create connection

$passErr =$userErr =$pinErr="";
$username = $password=$pincode="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

$flag=0;

 
 if (empty($_POST["username"])) {
    $userErr = "username is required";
  }

 else {
    $username = test_input($_POST["username"]);
     $flag+=1;
  }

  
  
  if (empty($_POST["password"])) {
    $passErr = "password is required";
  }
   else {
    $password = test_input($_POST["password"]);
     $flag+=1;
  }



    if (empty($_POST["pin"])) {
    $pinErr = "Pincode is required";
  }
   else {
    $pincode = test_input($_POST["pin"]);
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

    
     
      <div style="text-align:center; color: yellow;">
        

      <?php 

      if($flag==3)
      {
            
            $conn = new mysqli($servername, $user, $pass,$db);
                 if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                  else
                  {
                    //echo "entering database<br>";
                  }


            $sql="select admin_id from rmc_admin where admin_id='$username'";
             $reslt=$conn->query($sql);

           if($reslt->num_rows > 0)
           {
                echo "User_name already exists. Try another .<br>";
           }
           else
           {

              $sql="select serial_no,pin_no,status from pincode where pin_no='$pincode' and status='unused'";


             $reslt=$conn->query($sql);



             if($reslt->num_rows > 0 )
               {

               $password=MD5($password);

               $sql="insert into rmc_admin VALUES ('$username','$password')";
                $reslt=$conn->query($sql);

                echo '<p style="color:white">';


                echo "Congratulations !!! . Account Created Successfully<br>";

                  $sql="update pincode SET status='used' where pin_no='$pincode'";
                $reslt=$conn->query($sql);

                echo "The pin you used is unvalid pin from now<br>";

                echo "</p>";

                $_SESSION["admin_id"]=$username;
                 $username = $password=$pincode="";

                 echo '<a style="text-decoration:none; color:orange" href="../rmcenter_admin/rmc_admin_login.php">log in here</a>';

               }
               else
               {
                 echo "Invalid Pincode !!!!<br>";
                 $username = $password=$pincode="";
               }


       //conn->close();
       }

      }
       ?>
        <br>
      </div>




    <div class="rform" style="color:white">

    <h2> Fill in the information to get resistered </h2>

    <p><span class="error">* required field.</span></p>
    <br>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

      Username: <input style="color:black;" type="text" name="username" value="<?php echo $username;?>">
      <span class="error">* <?php echo $userErr;?></span>
      <br><br>

      Password: <input style="color:black;"   type="password" name="password" value="<?php echo $password;?>">
      <span class="error">* <?php echo $passErr;?></span>
      <br><br>

      Pincode: <input style="color:black;"  type="password" name="pin" value="<?php echo $pincode;?>">
      <span class="error">* <?php echo $pinErr;?></span>
      <br>
      <br>

      <input type="submit" class="btn btn-success"  name="submit" value="Submit">  
      <br>
      <br>

    </form>

    </div>





</div>
</body>
<html>

<?php

include ('../front_page/footer.php');
?>
