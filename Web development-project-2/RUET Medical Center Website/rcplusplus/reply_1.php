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
      echo "<br>";


 
        $_SESSION["comment_no"]=$_GET['comment_no'];
          header("Location: /rcplusplus/reply.php");
          exit;


 

?>
