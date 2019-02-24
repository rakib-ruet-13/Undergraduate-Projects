<?php
 session_start();

 if(empty($_SESSION["USER_LOG"]))
 {
           header("Location: /rcplusplus/homepage.php");
          exit;
 }


?>

<?php
 session_start();
$servername = "localhost";
     $user = "root";
     $pass = "";
     $db="project";
// Create connection
     $page_name="forum.php";
 
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


 <p  style="color:green ; font-size:24px ; background: white; padding:10px ;text-align: center  ">


        <?php

$servername = "localhost";
     $user = "root";
     $pass = "";
     $db="project";
// Create connection
     
  
               $conn = new mysqli($servername, $user, $pass,$db);

                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                } 

              

               $cnt=0;
               $q_id=1;
               $user_id=$_SESSION[ "USER_LOG" ];
               $quiz_id=$_SESSION[ "quiz_id" ];

               echo "$user_id  ";
               
                 $sum=0;

              $sql="select sum(marks) as total from user_quiz where user_id='$user_id' and quiz_id=$quiz_id";

              $res=$conn->query($sql);

              if( $res->num_rows > 0)
              {
                //cnt++;
                  while($row=$res->fetch_assoc())
                 {
                   $sum+=$row['total'];
                  }
              }
                 
      

                print "You have gained  $sum points in this quiz <br> ";
                print " You can try another one <br> ";

                 $sum=0;
                 $sql="select sum(marks) as total from user_quiz where user_id='$user_id'";

              $res=$conn->query($sql);

              if( $res->num_rows > 0)
              {
                //cnt++;
                  while($row=$res->fetch_assoc())
                 {
                   $sum+=$row['total'];
                  }
              }

               print "<br><br>You have gained  <b>$sum</b> total rating points  <br> ";

              $sql="update user set rating=$sum where user_id='$user_id'";

              $res=$conn->query($sql);
                 
             

                
         ?>
</p>

    <div class="copy">
        <p>&copy;Rakibul hassan <br>all rights reserved by rcplusplus.com</p>
    </div>


  
</div>
</body>
</html>