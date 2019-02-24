<?php
include 'init_restrict_access.php';
$_SESSION['page']="admin";

?>

<?php

 $admin_id=$_SESSION["admin_id"];  
?>


<?php
$roll=$_SESSION["staff_id"];

?>

<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>





<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$flag=0;

 
 if (!empty($_POST["roll"])) {
     $roll=$_POST["roll"];
     $flag+=1;
  }
}

  ?>



<!DOCTYPE html>
<html>

<head>
  <title>ruetmedicalcentre.com</title>
    <link rel="stylesheet" type="text/css" href="/rmcenter_admin/rmc_style_admin_page.css">
</head>

<body>

<div class="main">



 
        <div class="show_log" style="font-size:15px color:white ">
      
    <p style="color: pink ; padding-left:28px;">welcome .. <?php echo $admin_id ?>
     <?php echo " &nbsp &nbsp  "?>

     <button type="button" class="btn btn-danger"><a style="color:white; text-decoration:none;" href="../rmcenter_admin/rmc_admin_logout.php">Logout</a></button>
   
    </p>

    </div>
   
    <div class="search" style="color: white">

            <form style="color: black" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

           <button type="button" class="btn btn-danger"> Search ID </button> <input type="text" name="roll" value="<?php echo $roll;?>">
          <br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="submit"  class="btn btn-danger" name="submit" value="Submit"> 

        </form>

  <br>
  <br>

    </div>



    <div class="user_profile">






     <div class="image" style="float:left;width:220px;float:center; padding:10px; background: pink;">

    <?php
 //include "file_constants.php";
 // just so we know it is broken
    $conn = new mysqli($servername, $user, $pass,$db);

      if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 


     // get the image from the db
     $sql = "SELECT image FROM staff_image WHERE id='$roll';";

     // the result of the query
     $sth = $conn->query($sql);
    $result=mysqli_fetch_array($sth);
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image']).'" alt="Not found" height="240" width="200" />';
     // close the db link
    // mysql_close($conn);
 
?>
     

     </div>


    


    
 



    
    <div class="info" style='float:right;width:50%;color :white;padding-right:0px;font-size: 20px; line-height: 30px;'>
     
        <button type="button" class="btn btn-danger"> <h4 style='color:white ; padding:2px;'>STAFF INFORMATION:</h4></button>
     <br>
    <p style="color:white; line-height:40px">

    <?php


     $conn = new mysqli($servername, $user, $pass,$db);

      if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 

      $sql="select name,id,blood,dob,contact from staff_profile where id='$roll'";

      $reslt=$conn->query($sql);



      if($reslt->num_rows > 0 )
         {
          while($row=$reslt->fetch_assoc())
          {
           
        
            echo "Staff Name : $row[name] <br>";
             echo "Staff ID : $row[id] <br>";
              echo "Blood Group : $row[blood] <br>";
               echo "Date of birth : $row[dob] <br>";
                echo "Contact no. : $row[contact] <br>";
      

          }
         }
         else
         {
          echo "No result found !!!! <br>";
         }
    
     ?>
</p>
         
     </div>
 </div>
</div>
 



</body>
</html>


<?php
include '../front_page/footer.php';
?>
