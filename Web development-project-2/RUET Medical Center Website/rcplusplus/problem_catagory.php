<?php
 session_start();
$servername = "localhost";
     $user = "root";
     $pass = "";
     $db="project";


      


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
 
$catagory="";

$flag = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

if (!empty($_POST["catagory"])) {
   
    $catagory = test_input($_POST["catagory"]);
    $flag+=1;
  }


if(!empty($_SESSION["USER_LOG"]))
{

  
   $flag++;
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
  
         Search Catagory: <input type="text" name="catagory" value="<?php echo $catagory;?>">
  <br>   
     
        <input type="submit" name="submit" value="Submit">
        <br>
        <br>
         <?php

  


               if($flag==1)
                     echo "<a href='/rcplusplustpoint.php'>log_in </a> first.";
         ?>
    <br>
    <br>
    <br>

      </form>

    

        
    </div>














<div style="margin:5px ; padding:0px; text-align:center">
     
     <h1 style="padding:10px;">Comments by users</h1>
     <br>
     <br>
     

        <?php

        $number=1;


          
          if($flag==2)
          {
            //last 10 comments

                  $servername = "localhost";
     $user = "root";
     $pass = "";
     $db="project";
     
  
               $conn = new mysqli($servername, $user, $pass,$db);

                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                } 

              

                $cnt=0;
            

      

                //$sql="select user_id,rating from user where 1";
                $sql="select comment_no,user_id,comment,catagory from comm where page_name='forum.php' and catagory='$catagory' order by comment_no desc";

               $reslt=$conn->query($sql);
      
                   $cnt=1;

                //echo "<table style='background: orange; border: 2px solid black; color:red; text-align: center; margin-bottom:20px; font-size:20px;'>";

                 if($reslt->num_rows > 0 )
                {
         

                    while($row=$reslt->fetch_assoc())
                    {
                           echo "<p style='text-align:left;border: 1px solid black; padding:10px;'>";
                            echo "<a  href='/rcplusplus/rank_info.php? mem=$row[user_id]' style='text-decoration:none'> $row[user_id] </a>";
                            echo "<br>Catagory : ";
                            echo "<a  href='/rcplusplus/problem_catagory.php'?catagory=$row[catagory]' style='text-decoration:none'>$row[catagory]</a>";
                            echo "<br>";
                            echo "<br> <b> comment </b> : $row[comment] <br>";

                         


                          $comm_no=$row['comment_no'];


                          echo "<br>REPLY:<br>";

                           $sql="select user_id,reply from rep where comment_no=$comm_no";

                           $res=$conn->query($sql);


                           if($res->num_rows>0)
                           {
                                 while($ro=$res->fetch_assoc())
                                 {
                                      echo "<a  href='/rcplusplus/rank_info.php? mem=$ro[user_id]' style='text-decoration:none'> $ro[user_id] </a>";
                                        echo "<br>";
                                      echo "<br>  reply:  : $ro[reply] <br>";

                                      echo "<br> <br>";


                                 }
                           }
                           else
                           {
                             echo "<br> No reply yet <br>";
                           }


                            echo "<a  href='/rcplusplus/reply.php?comment_no=$comm_no' style='text-decoration:none'> reply here</a>";

                             echo "</p>";





                    }
          


                  }
                  else
                  {
                    echo "<br> no matches found !!!!!!!!! <br>";
                  }
            }

          else
          {
            echo "<br>not loggeg in<br>";
          }



        ?>


   


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