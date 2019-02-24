

<?php
 session_start();




 if(empty($_SESSION["USER_LOG"]))
 {

         echo "log in first!!!!!!";
         
 }
 else
 {
       $servername = "localhost";
       $username = "root";
       $password = "";
       $db="project";
      

      $conn = new mysqli($servername, $username, $password,$db);

      if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 
      

      $temp=$_SESSION["USER_LOG"];

      $sql="select rating  from user where user_id='$temp'";

      $res=$conn->query($sql);
      $rat=0;

      echo $temp;

                           if($res->num_rows>0)
                           {
                                 while($ro=$res->fetch_assoc())
                                 {
                                     $rat=$ro['rating'] ;

                                 }
                           }
                           else
                           {
                             echo "somthing went wrong !!!!!! log in again :( <br>";
                           }
         if($rat>999)
         {
                header("Location:/rcplusplus/algorithm_logged.php");
                exit;
         }
         else

         {
           echo "    GET 1000 rating point to access algorithm !!!!!";
         }
 }


?>
