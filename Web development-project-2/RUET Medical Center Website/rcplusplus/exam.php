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
    <link rel="stylesheet" type="text/css" href="style_about.css">


</head>
<body>


<div class="main">




    <div class="cover_image">
     <p> <img src="\rcplusplus\logo.PNG"></p>
    </div>






    <div class="manubar">
    <ul>
      <li><a href="homepage.php">HOME</a></li>
      <li><a href="CC++.php">C/C++</a></li>
      <li><a href="ALGORITHM.php">ALGORITHM</a></li>
      <li><a href="RANKLIST.php">RANKLIST</a></li>
      <li><a href="ABOUT.php">ABOUT</a></li>
      <li><a href="forum.php.">FORUM</a></li>
    </ul>

    </div>


    <div class="content" style="color:red; background:gray">

    <p>Here are the quizes for you.</p>
    <p style="text-align:center;">
    <?php
     

     $servername = "localhost";
     $user = "root";
     $pass = "";
     $db="project";
  
               $conn = new mysqli($servername, $user, $pass,$db);

                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                } 
      $sql="select quiz_id from quiz group by quiz_id";


                      $reslt=$conn->query($sql);
      
                   
                    if($reslt->num_rows > 0 )
                {
                    while($row=$reslt->fetch_assoc())
                    {
                       echo "<a  href='/quiz.php? quiz_id=$row[quiz_id]' style='text-decoration:none; text-align:center'> QUIZ $row[quiz_id] </a>";
                    }
          
                }
    ?>
    </p>
        
    </div>

    <a  href=/rcplusplus/quiz_set.php style= "text-decoration:none; text-align:center"> Set quizes (Only for admin_user) </a>



   <div>



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