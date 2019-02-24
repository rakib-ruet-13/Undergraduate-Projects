<?php
 session_start();

 if(empty($_SESSION["USER_LOG"]))
 {
           header("Location: /rcplusplus/homepage.php");
          exit;
 }


?>


<?php
// define variables and set to empty values
$servername = "localhost";
     $user = "root";
     $pass = "";
     $db="project";
// Create connection
// Create connection


 $username = $password ="";

$flag = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"]) || empty($_POST["password"])) {
    $nameErr = "Username or passward is required";
  } 
  else
  {
      
   $servername = "localhost";
     $user = "root";
     $pass = "";
     $db="project";
// Create connection
     
  
               $conn = new mysqli($servername, $user, $pass,$db);

                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                } 

                     $username=$_POST["username"];
                     $passward=$_POST["password"];

                      $sql="select * from admin where username='$username' and passward='$passward'";


                      $reslt=$conn->query($sql);
      
                   
                    if($reslt->num_rows > 0 )
                {
                     
                        header("Location:/input_quiz.php");
                        exit;
                }
                else
                {

                  echo "ACCESS DENIED <br> ";
                }

  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




<!DOCTYPE html>
<html>

<head>
  <title>rcplusplus.com</title>
    <link rel="stylesheet" type="text/css" href="style_about.css">


</head>
<body>
<div class="main">

<div class="rform">
<h2> Fill in the information to get Access </h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Username: <input type="text" name="username" value="<?php echo $username;?>">
  <br><br>

  Administrative Password: <input type="password" name="password" value="<?php echo $password;?>">
  <br><br>


  <input type="submit" name="submit" value="Submit">  
</form>
</div>
</div>

</body>

</html>