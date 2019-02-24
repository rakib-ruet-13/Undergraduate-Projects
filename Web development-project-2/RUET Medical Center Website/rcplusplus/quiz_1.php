<?php
 session_start();

 if(empty($_SESSION["USER_LOG"]))
 {
           header("Location: /rcplusplus/homepage.php");
          exit;
 }


?>


<?php
 //session_start();

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



<div style="margin:5px ; padding:0px; background: gray; color:brown;text-align:center">
     
     <h1 style="padding:10px;">Ans the quiz</h1>
     <br>
     <br>
     

        <?php

        $number=1;


          
          if($number==1)
          {
            //last 10 comments

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
               $q_id=$_SESSION[ "quiz_id" ];;
               $user_id=$_SESSION[ "USER_LOG" ];
               $quiz_id=$_SESSION[ "quiz_id" ];

               $cnt1=0;
               


                //$sql="select user_id,rating from user where 1";
                  $sql1="select * from quiz where quiz_id=$q_id";
                      $reslt1=$conn->query($sql1);
      
                   
                    if($reslt1->num_rows > 0 )
                {
                    while($row=$reslt1->fetch_assoc())
                    {
                        $cnt1++;
                    }
          
                }
                
                $cnt2=0;

                 $sql2="select * from user_quiz where user_id='$user_id' and quiz_id=$quiz_id";
                 $reslt2=$conn->query($sql2);
                   
                   if($reslt2->num_rows > 0 )
                   {
                       $cnt2++;
                   }
                  

              // echo "$cnt1   and $cnt2 <br>";

                //echo "<table style='background: orange; border: 2px solid black; color:red; text-align: center; margin-bottom:20px; font-size:20px;'>";
                
                for( $i=1; $i<=$cnt1 && $cnt2==0 ; $i++)
                {
                   $sql="insert into user_quiz(user_id,ques_id,quiz_id) values ('$user_id',$i,$quiz_id)";
                   $conn->query($sql);

                }



                  $sql="select quiz.quiz_id,quiz.ques_id,ques,ans1,ans2,ans3,ans4,actual from quiz,user_quiz where user_quiz.user_id='$user_id' and quiz.quiz_id=$quiz_id and quiz.quiz_id=user_quiz.quiz_id and quiz.ques_id=user_quiz.ques_id and flag=0";
                 $reslt=$conn->query($sql);

                 $first=0;
                 $real_ans="";
                 $ques_ans="";


                 if($reslt->num_rows > 0 )
                {
                  $first++;
         

                    while($row=$reslt->fetch_assoc())
                    {
                         print "ques $row[ques_id]:<br>";
                         print "$row[ques]<br>";
                         print "1.$row[ans1]<br>";
                         print "2.$row[ans2]<br>";
                         print "3.$row[ans3]<br>";
                         print "4.$row[ans4]<br>";

                         $real_ans=$row['actual'];
                         $ques_ans=$row['ques_id'];

                         if($first>0)
                          break;

                          echo "</p>";

                    }
          


                  }
                  else
                  {
                     header("Location: /rcplusplus/result_showing.php");
                        exit;
                  }
      }


$flag = 0;
$quiz_id=0;



if ($_SERVER["REQUEST_METHOD"] == "GET") {
  
  $quiz_id=$_SESSION[ "quiz_id" ];


if (!empty($_GET["ans"])) {
  {
    $flag++;
    $ans=$_GET["ans"];
    $marks=0;
  }


echo "$real_ans   $ans<br> $user_id $ques_ans $quiz_id ";

      if($real_ans==$ans)
      {
          $marks+=10;
      }

      $sql="update user_quiz set flag=1,marks=$marks where user_id='$user_id' and ques_id=$ques_ans and quiz_id=$quiz_id";

      if($conn->query($sql)==true)
      {
        echo "<br> Your ans is taken move on the next one <br>";
         header("Location: /rcplusplus/quiz_1.php");
                        exit;
      
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

     <p style="text-align:center; font-size:18px ; padding:20px">Give answer here</p>
     <br>
    


     <form style="text-align: center; padding-left: 5px;" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

     <input type="hidden" name="quiz_id" value="<?php echo htmlspecialchars($_GET['quiz_id']);?>"


        Answers:
  <br>
  <input type="radio" name="ans" <?php if (isset($ans) && $ans=="ans1") echo "checked";?> value="ans1">ans1
  <br>
  <input type="radio" name="ans" <?php if (isset($ans) && $ans=="ans2") echo "checked";?> value="ans2">ans2
  <br>
  <input type="radio" name="ans" <?php if (isset($ans) && $ans=="ans3") echo "checked";?> value="ans3">ans3
  <br>
  <input type="radio" name="ans" <?php if (isset($ans) && $ans=="ans4") echo "checked";?> value="ans4">ans4
  
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
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