<?php
 session_start();

 if(empty($_SESSION["USER_LOG"]))
 {
           header("Location: /rcplusplus/homepage.php");
          exit;
 }


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
      <li><a href="/rcplusplus/exam.php">QUIZ</a></li>
    </ul>

    </div>


    <div class="content">

    
    <div class="intro" style='float:center'>

     <h1 style='color:red; padding:10px;'>RANK_LIST:</h1>
     <br>
 


    <?php

     //session_start();

     $_SESSION["curr_mem"]="";

     //using session veriable 
     $temp= $_SESSION[ "USER_LOG" ];


     //echo $_SESSION["USER_LOG"];

     $servername = "localhost";
     $user = "root";
     $pass = "";
     $db="project";
     

     $conn = new mysqli($servername, $user, $pass,$db);

      if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 

      $sql="select user_id,rating from user where 1 order by rating desc";

      $reslt=$conn->query($sql);
      
      $cnt=1;

      echo "<table style='background: orange; border: 2px solid black; color:red; text-align: center; margin-bottom:20px; font-size:20px;'>";

      if($reslt->num_rows > 0 )
         {
         echo "<tr  style='text-align: center ;padding:10px; border:solid black; float:center;'>";
          echo "<th style='text-align: center ;padding:10px; border:solid black;'>RANK</th>";
         echo "<th style='text-align: center ;padding:10px; border:solid black;'>USER_NAME</th>";
         echo "<th style='text-align: center ;padding:10px; border:solid black;'>RATING</th>";
         echo "<th style='text-align: center ;padding:10px; border:solid black;'>DIVISION</th>";
         echo "</tr>";

         echo "<br>";

          while($row=$reslt->fetch_assoc())
          {
           echo "<tr style='text-align: center ;padding:10px; border:solid black; float:center;'>";

           echo "<td style='text-align: center ;padding:10px; border:solid black;'>";
            echo "$cnt ";
           echo "</td>";
           
           $cnt++;

         
          echo "<td style='text-align: center ;padding:10px; border:solid black;'>";
            echo "<a  href='/rcplusplus/rank_info.php? mem=$row[user_id]' style='text-decoration:none'> $row[user_id] </a>";
          echo "</td>";
           

           echo "<td style='text-align: center ;padding:10px; border:solid black;'>";
            echo "$row[rating] ";
          echo "</td>";

            if($row['rating']>999)
               $temp="div-1";
            else
               $temp="div-2";

            echo "<td style='text-align: center ;padding:10px; border:solid black;'>";
              echo "$temp <br>";
            echo "</td>";
            echo "</tr>";
          }
          


         }
        echo "</table>";

    
     ?>

         
     </div>

    

    




     <div class="user_option" style="color:rgb(12,12,22) ;text-align:center; background: orange ; padding-bottom:60px ; font-size:20px">
     <br>

     <?php 

     //session_start();

     

     //using session veriable 
     $temp= $_SESSION['USER_LOG'];


     //echo $_SESSION["USER_LOG"];

     if(!empty($temp))
     {

      $conn = new mysqli($servername, $user, $pass,$db);

      if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 

      $sql="select user_id,rating from user where user_id='$temp'";

      $reslt=$conn->query($sql);

      if($reslt->num_rows > 0 )
         {
          while($row=$reslt->fetch_assoc())
          {
            echo "<a  href='/rcplusplus/user_info.php' style='text-decoration:none'> $row[user_id] </a>";
            echo "<br>";
            echo "Rating : $row[rating] <br>";
            echo "<a  href='/logout.php' style='text-decoration:none'> log out </a>";
          }
          
         }
       }
       else
       {
        echo "<br>you are not logged in<br>";
       }
    
      
    ?>
    
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
