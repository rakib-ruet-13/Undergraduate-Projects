<!DOCTYPE html>
<html>

<head>
	<title>profile</title>
    <link rel="stylesheet" type="text/css" href="style_intro.css">


</head>
<body>


<div class="main">




    <div class="cover_image">
     <p> <img src="\rcplusplus\logo.PNG"></p>
    </div>






    <div class="manubar">
    <ul>
    	<li><a href="/rcplusplus/homepage.html">HOME</a></li>
    	<li><a href="/rcplusplus/CC++.html">C/C++</a></li>
    	<li><a href="/rcplusplus/ALGORITHM.html">ALGORITHM</a></li>
    	<li><a href="/rcplusplus/RANKLIST.html">RANKLIST</a></li>
    	<li><a href="/rcplusplus/ABOUT.html">ABOUT</a></li>
    </ul>

    </div>


    <div class="content">

     <div class="intro">

     <h1>About website:</h1>
     <br>
     <p>The website is designed for learning C and C++ programming languages . There are exercise and exams for better learning. We believe the user should learn these languages step by step. Hence there are divisional system . To get access of the contents of the heigher division,user should get enough points which he will gain through exams.Hope everyone will get enough help from this website. Happy learning.
     </p>
         
     </div>

    

    
<?php
// define variables and set to empty values
 $passErr =$userErr ="";
 $username = $password ="";

$flag = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

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

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




     <div class="user_option">
     <br>

     <p style="text-align:center">if you are not resistered please <a href="login.php">sign up</a><br></p>
     <br>
      <form style="text-align: center; padding-left: 5px" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 


        Username: <input type="text" name="username" value="<?php echo $username;?>">
          <span class="error">* <?php echo $userErr;?></span>
          <br><br>
       
        Password: <input type="text" name="password" value="<?php echo $password;?>">
        <span class="error">* <?php echo $passErr;?></span>
        <br>
        <input type="submit" name="submit" value="Submit">
      </form>
    
     </div>


        
    </div>



    <div class="links">
    <h3>Some useful learning websites</h3>
      <ul>
          <li><a href="http:\www.geeksforgeeks.com">GeeksforGeeks</a></li>
           <li><a href="http:\www.shafayeysplannet.com">Bangla algorithm</a></li>
            <li><a href="http:\www.cplusplus.com">C++ STL </a></li>
             <li><a href="http:\www.codeforces.com">Competetive programming</a></li>
              <li><a href="http:\www.w3school.com">W3school.com</a></li>
      </ul>  

    </div>


    <div class="copy">
        <p>&copy;Rakibul hassan <br>all rights reserved by rcplusplus.com</p>
    </div>


	
</div>
</body>
</html>