<!DOCTYPE HTML>  
<html>
<head>
<title>resistration</title>
  <link rel="stylesheet" type="text/css" href="style_resister.css">
</head>
<body>  




<?php
// define variables and set to empty values
$servername = "localhost";
$user = "root";
$pass = "";
$db="project";
// Create connection






$nameErr = $emailErr = $genderErr = $websiteErr = $passErr =$userErr ="";
$name = $email = $gender = $comment = $website = $username = $password ="";

$flag = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
   

  } else {
     $flag+=1;
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
        
    }
    else
    {
       $flag+=1;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
       

  } else {
    $email = test_input($_POST["email"]);
     $flag+=1;

    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
        

    }
    else
    {
       $flag+=1;
    }
  }





if (empty($_POST["username"])) {
    $userErr = "username is required";
       

  } else {
    $username = test_input($_POST["username"]);
     $flag+=1;
  }



  if (empty($_POST["password"])) {
    $passErr = "password is required";
       

  } else {
    $password = test_input($_POST["password"]);
     $flag+=1;
  }














    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
      

  } else {
     $flag+=1;
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="main">

<div class="rform">
<h2> Fill in the information to get resistered </h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>



  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Username: <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $userErr;?></span>
  <br><br>

  Password: <input type="text" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>




  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>


  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>


  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>
</div>

<div style="text-align:center; color:green;">
  
<p>
<?php 


if($flag==7)
{
  $rating=0;

  session_start();
  $_SESSION["USER_LOG"]="";

  /**grtting user logged in**/
  $status="in";


      $conn = new mysqli($servername, $user, $pass,$db);
               // Check connection
           if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 
            else
            {
             // echo "entering database";
              //echo '';
            }
      
      
        $sql="select user_id,email,password from user where user_id='$username' or email='$email'";

         $reslt=$conn->query($sql);

       if($reslt->num_rows > 0 )
         {
          while($row=$reslt->fetch_assoc())
          {
            echo "<br>User_name, or email already exists !!!!!! try another <br> <br>";
          }
         }
         else
         {

                 $sql= "insert into user_info(user_id) values('$username')";
                 $conn->query($sql);



                 $sql= "insert into user(user_id,password,email,username,rating,status,gender,comment) values('$username','$password',
                 '$email','$name', $rating,'$status','$gender','$comment')";


     

                if($conn->query($sql) == True)
                    {

                        echo "resitration successsfull :D :D <br>";

                        $_SESSION["USER_LOG"]=$username;

                           $a=1;
                             $b=1;

                           for( $i=1; $i<=10000000; $i++)
                             $a+$b;

                        header("Location: /rcplusplus/homepage.php");
                        exit;
                     }
                else

               {
         
                            echo "something went wrong ......try again";
                           echo" ";

               }
         }



}

  ?>
  <br>

<p>

</div>


</body>


<html>