

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

     <div class="intro">

     <h1 style="padding:10px ; text-align:center ; color: red ">USER INFORMATION</h1>
      
<p style='padding:5px ; text-align:left ; color: white ;background: black; font-size:20px'>

<?php



$servername = "localhost";
$user = "root";
$pass = "";
$db="project";

session_start();

       $conn = new mysqli($servername, $user, $pass,$db);
               // Check connection
           if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 


            $temp=$_GET['mem'];

          

$sql="select user.user_id,username,email,rating,institution,address,phone_no,country from user,user_info where user.user_id='$temp' and user.user_id=user_info.user_id";



      $reslt=$conn->query($sql);



       if($reslt->num_rows > 0 )
         {

        

        
          while($row=$reslt->fetch_assoc())
          {
            $temp=$row['user_id'];
            echo "USER_ID  : $temp <br>";

            echo "<br>";

             $temp=$row['username'];
            echo "USER NAME        : $temp <br>";
            echo "<br>";

              $temp=$row['rating'];
            echo "RATING           : $temp <br>";
            echo "<br>";

             $temp=$row['email'];
            echo "EMAIL            : $temp <br>";
            echo "<br>";

             $temp=$row['institution'];
            echo "INSTITUTION      : $temp <br>";
            echo "<br>";

             $temp=$row['address'];
            echo "ADDRESS          : $temp <br>";
            echo "<br>";

             $temp=$row['phone_no'];
            echo "PHONE_NO         : $temp <br>";
            echo "<br>";

             $temp=$row['country'];
            echo "COUNTRY          : $temp <br>";
            echo "<br>";
           
          }
         }
  

 
?>
   </p>       
     </div>

    

    




     <div class="user_option" style="color:rgb(12,12,22) ;text-align:center; background: gray ; padding-bottom:30px ; font-size:20px">
     <br>
     
    
    
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
