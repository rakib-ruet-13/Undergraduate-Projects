<?php
 session_start();
$servername = "localhost";
     $user = "id534583_rakib";
     $pass = "piratesking";
     $db="id534583_rcplusplus";
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



<div style="margin:5px ; padding:0px; text-align:center">
     
     <h1 style="padding:10px;">Comments by users</h1>
     <br>
     <br>
     

        <?php

        $number=1;


          
          if($number==1)
          {
            //last 10 comments

                   $servername = "localhost";
                    $user = "id534583_rakib";
                    $pass = "piratesking";
                    $db="id534583_rcplusplus";
  
               $conn = new mysqli($servername, $user, $pass,$db);

                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                } 

              

                $cnt=0;
            

      

                //$sql="select user_id,rating from user where 1";
                $sql="select comment_no,user_id,comment,catagory from comm where page_name='forum.php' order by comment_no desc";

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

                          echo "</p>";

                    }
          


                  }
            }

          else if($number==2)
          {
            //user comments
          }
          else if($number==3)
          {
            //comment catagory
          }
          else
          {
            //all comments
          }



        ?>


   


  </div>







    <div class="content">

    

    

    
<?php
// define variables and set to empty values
 
 $comment = $catagory="";

$flag = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

if (!empty($_POST["comment"])) {
   
    $comment = test_input($_POST["comment"]);
     $flag+=1;
  }

if (!empty($_POST["catagory"])) {
   
    $catagory = test_input($_POST["catagory"]);
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

      $sql="select comment_no as total_comment from comm";

      $reslt=$conn->query($sql);


      $comment_no=$reslt->num_rows+1;
      $USER=$_SESSION["USER_LOG"];


      $sql="insert into comm(comment_no,comment,user_id,page_name,catagory) values($comment_no,'$comment','$USER','$page_name','$catagory')";

      if($conn->query($sql)==true)
      {
        echo "<br> Your comment is inserted <br>";
      }
      


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


         Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
         Catagory: <input type="text" name="catagory" value="<?php echo $catagory;?>">
  <br>   
        <p style="color:green">Help user to be benifited from catagory <br> </p>
        <br>
        <br>
     
        <input type="submit" name="submit" value="Submit">
        <br>
        <br>
         <?php

  


               if($flag==1)
                     echo "<a href='rcplusplustpoint.php'>log_in </a> first.";
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