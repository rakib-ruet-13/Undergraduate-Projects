
 
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






$institution = $address = $phone = $country ="";

$flag = 0;




if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if (!empty($_POST["institution"])) 
  {
  	$institution= test_input($_POST["institution"]);
  	$flag++;
    
  } 

  if (!empty($_POST["address"])) 
  {
  	$address= test_input($_POST["address"]);
  	$flag++;
    
  } 
    
   if (!empty($_POST["phone"])) 
  {
  	$phone= test_input($_POST["phone"]);
  	$flag++;
    
  } 
    

    if (!empty($_POST["country"])) 
  {
  	$country= test_input($_POST["country"]);
  	$flag++;
    
  } 
 }


  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


  if($flag>0)
  {
  	$conn = new mysqli($servername, $user, $pass,$db);
							 // Check connection
					 if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
							} 


							session_start();

							$temp=$_SESSION["USER_LOG"];

							echo $temp;
							echo "ins=".$institution;
			


			   $sql= "update user_info set institution='$institution', address='$address', phone_no='$phone' , country='$country' where user_id='$temp'";


		 

					 if($conn->query($sql) == True)
					 {

					        echo "edited  successsfully :D :D <br>";

							      $a=1;
							      $b=1;

					        for( $i=1; $i<=10000; $i++)
								     $a+$b;
              
              if($flag>0)
					         header("Location: user_info.php");
					         exit;
					 }
					 else

					 {
				 
					

				 echo "something went wrong ......try again";
				 echo" ";

					 }
					}

?>

<div class="rform">
<h2> EDIT YOUR PROFILE </h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

 
	INSTITUTION:      <input type="text" name="institution" value="<?php echo $institution;?>">

	<br><br>



	ADDRESS:         <input type="text" name="address" value="<?php echo $address;?>">

	<br><br>

	PHONE NO:        <input type="text" name="phone" value="<?php echo $phone;?>">
	
	<br><br>

	COUNTRY:         <input type="text" name="country" value="<?php echo $country;?>">
	
	<br><br>


	<input type="submit" name="submit" value="Submit">  
</form>

</div>
</div>

</body>


<html>