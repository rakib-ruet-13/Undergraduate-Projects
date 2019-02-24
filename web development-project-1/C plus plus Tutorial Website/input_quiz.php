<?php
 session_start();
$servername = "localhost";
     $user = "root";
     $pass = "";
     $db="project";
     
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


    <div class="content">

    

    

    
<?php
// define variables and set to empty values
 
 $ques = $ans1= $ans2= $ans3= $ans4= $ans5= $quiz_id=$pos="";

$flag = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  

if (!empty($_POST["ques"])) {
   
    $ques = test_input($_POST["ques"]);
     $flag+=1;
  }

if (!empty($_POST["ans1"])) {
   
    $ans1 = test_input($_POST["ans1"]);
     $flag++;
  }

  if (!empty($_POST["ans2"])) {
   
    $ans2 = test_input($_POST["ans2"]);
     $flag++;
  }

  if (!empty($_POST["ans3"])) {
   
    $ans3 = test_input($_POST["ans3"]);
     $flag++;
  }

  if (!empty($_POST["ans4"])) {
   
    $ans4 = test_input($_POST["ans4"]);
     $flag++;
  }

   if (!empty($_POST["ans5"])) {
   
    $ans5 = test_input($_POST["ans5"]);
     $flag++;
  }

  if (!empty($_POST["pos"])) {
   
    $pos = test_input($_POST["pos"]);
     $flag++;
  }

    if (!empty($_POST["quiz_id"])) {
   
    $quiz_id = test_input($_POST["quiz_id"]);
     $flag++;
  }

  

  if($flag>=7)
  {
     $conn = new mysqli($servername, $user, $pass,$db);

      if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 


      $sql="insert into quiz(ques_id,quiz_id,ques,ans1,ans2,ans3,ans4,actual) values($pos,$quiz_id,'$ques','$ans1','$ans2','$ans3','$ans4','$ans5')";

      if($conn->query($sql)==true)
      {
        echo "<br> ques is inserted <br>";
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

     <p style="text-align:center; font-size:30px ; padding:20px">Set QUIZ</p>
     <br>
      <form style="text-align: center; padding-left: 5px;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
         quiz_no: <input type="text" name="quiz_id" value="<?php echo $quiz_id;?>">
         serial_no: <input type="text" name="pos" value="<?php echo $pos;?>">
         ques: <textarea name="ques" rows="5" cols="40"><?php echo $ques;?></textarea>
  <br><br>
         answer1: <input type="text" name="ans1" value="<?php echo $ans1;?>">
           answer2: <input type="text" name="ans2" value="<?php echo $ans2;?>">
             answer3: <input type="text" name="ans3" value="<?php echo $ans3;?>">
               answer4: <input type="text" name="ans4" value="<?php echo $ans4;?>">

             <p style="color: green" >This is filled as ans1/ans2/ans3/ans4</p>
                 actucal ans : <input type="text" name="ans5" value="<?php echo $ans5;?>">
  <br>   
        
        <br>
        <br>
     
        <input type="submit" name="submit" value="Submit">
        <br>
        <br>

      </form>

   

    <div class="copy">
        <p>&copy;Rakibul hassan <br>all rights reserved by rcplusplus.com</p>
    </div>


  
</div>
</body>
</html>