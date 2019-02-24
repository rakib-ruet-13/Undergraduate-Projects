
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
      <li><a href="/rcplusplus/forum.php">FORUM</a></li>
      <li><a href="/rcplusplus/exam.php">QUIZ</a></li>
    </ul>

    </div>


    <div class="content">

     <div class="intro">

     <h1>About website:</h1>
     <br>
     <p>The website is designed for learning C and C++ programming languages . There are exercise and exams for better learning. We believe the user should learn these languages step by step. Hence there are divisional system . To get access of the contents of the heigher division,user should get enough points which he will gain through exams.Hope everyone will get enough help from this website. Happy learning.
     </p>
         
     </div>

    

    




     <div class="user_option" style="color:rgb(12,12,22) ;text-align:center; background: orange ; padding-bottom:60px ; font-size:20px">
     <br>

     <?php 

     session_start();

     

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
