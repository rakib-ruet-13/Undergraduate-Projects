
<?php
include 'init_access.php';
$_SESSION["page"]="admin";
?>



<?php

 if(!empty($_SESSION["admin_id"]))
 {
           header("Location: /rmcenter_admin/rmc_admin_logged_in.php");
            exit;
 }
?>

<?php
//include '../front_page/header.php';
?>


<?php
include '../index_option/index.php';
?>




<?php

$flag = 0;

// define variables and set to empty values
// Create connection

$passErr =$userErr="";
$username = $password="";



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

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }




           if($flag==2)
          {
              
              $conn = new mysqli($servername, $user, $pass,$db);
                   if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      } 
                    else
                    {
                      //echo "entering database<br>";
                    }

              $password=MD5($password);
              $sql="select admin_id from rmc_admin where admin_id='$username' and pass='$password'";
               $reslt=$conn->query($sql);

             if($reslt->num_rows > 0)
             {
                  echo "Congratulations !!! . Successfully logged in.<br>";
                  $_SESSION["admin_id"]=$username;
                   $username = $password="";

                   header("Location: ../rmcenter_admin/rmc_admin_logged_in.php");
                    exit;

             }
             else
             {
               $password="";
                 echo "<p style='color: yellow '>Wrong User id or Password !!!!!!<br></p>";
             }

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

<div class="main">



        <div class="logger" style="color:green;text-align:center;">
        <p>
       
        </p>
        </div>

      <div class="rform" style="color: white;">




      <h2> Admin login</h2>

      <p><span class="error">* required field.</span></p>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

        Username: <input style="color:black;" type="text" name="username" value="<?php echo $username;?>">
        <span class="error">* <?php echo $userErr;?></span>
        <br><br>

        Password: <input style="color:black;"  type="password" name="password" value="<?php echo $password;?>">
        <span class="error">* <?php echo $passErr;?></span>
        <br><br>

      <input type="submit"  class="btn btn-success" name="submit" value="Submit">

      </form>
      
      <br>
      <p style="text-align:center "> Don't Have account, Please <a style="text-decoration:none;  action: red;" href="../rmcenter_admin/rmc_admin_registration.php"><button style='color: red ;' type="button" class="btn btn-warning">Sign Up</button></a></p>
      
      <br>
      </div>

    






</div>
</body>
</html>

<?php

include ('../front_page/footer.php');
?>
