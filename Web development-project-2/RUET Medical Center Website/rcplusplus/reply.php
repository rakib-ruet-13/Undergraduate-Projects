<?php
 session_start();
$servername = "localhost";
     $user = "root";
     $pass = "";
     $db="project";
// Create connection
     
     $page_name="forum.php";
      

      //echo "count = ";
     // echo $_SESSION["count"];
     // echo "<br>";
     
     $comm_no=$_SESSION["comment_no"];
     


 

?>
<!DOCTYPE html>
<html>

<head>
  <title>rcplusplus.com</title>
    <link rel="stylesheet" type="text/css" href="style_intro.css">


</head>
<body>


<div class="main">




    <div class="cover_image">
     <p> <img src="\rcplusplus\logo.PNG"></p>
    </div>






    <div class="manubar">
    <ul>
      <li><a href="/rcplusplus/homepage.php">HOME</a></li>
      <li><a href="/rcplusplus/CC++.php">C/C++</a></li>
      <li><a href="/rcplusplus/ALGORITHM.php">ALGORITHM</a></li>
      <li><a href="/rcplusplus/RANKLIST.php">RANKLIST</a></li>
      <li><a href="/rcplusplus/ABOUT.php">ABOUT</a></li>
      <li><a href="/rcplusplus/forum.php">FORUM</a></li>
    </ul>

    </div>










    <div class="content">

    

    

    
<?php
// define variables and set to empty values
 
 $reply="";

 $servername = "localhost";
     $user = "root";
     $pass = "";
     $db="project";
// Create connection

$flag = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

if (!empty($_POST["reply"])) {
   
    $reply = test_input($_POST["reply"]);
     $flag+=1;
  }


if(!empty($_SESSION["USER_LOG"]))
{

  
   $flag++;
}

if($flag==2)
{
     $conn = new mysqli($servername, $user, $pass,$db);

      if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 


  
     

      $sql="select reply_no  from rep where comment_no='$comm_no'";

      $reslt=$conn->query($sql);


      $reply_no=$reslt->num_rows+1;

      $USER=$_SESSION["USER_LOG"];


      $sql="insert into rep(comment_no,reply_no,reply,user_id,page_name) values($comm_no,'$reply_no','$reply','$USER','$page_name')";

      if($conn->query($sql)==true)
      {
        echo "<br> Your reply is inserted <br>";
        header("Location: /rcplusplus/forum.php");
          exit;
      }
      


}
else
{

   if($flag==1)
      echo "<a href='/rcplusplustpoint.php'>log_in </a> first or enter a reply.";
}



}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




     <br>

     <p style="text-align:center; font-size:30px ; padding:20px">FORUM</p>
     <br>
      <form style="text-align: center; padding-left: 5px;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 


         Reply: <textarea name="reply" rows="5" cols="40"><?php echo $reply;?></textarea>
  <br><br>
        <br>
        <input type="submit" name="submit" value="Submit">
        <br>
        <br>
         <?php

  


               if($flag==1)
                     echo "<a href='/rcplusplus/homepage.php'>log_in </a> first or no input detected.";
         ?>
    <br>
    <br>
    <br>

      </form>

    

        
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