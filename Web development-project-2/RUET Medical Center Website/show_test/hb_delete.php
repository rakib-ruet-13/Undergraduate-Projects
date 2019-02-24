
<?php
include '../rmcenter_admin/init_restrict_access.php';
$_SESSION["page"]="admin";
?>



<?php

 if(empty($_SESSION["admin_id"]))
 {
           header("Location: ../rmcenter_admin/rmc_admin_login.php");
            exit;
 }
?>





<?php

$testname=$_GET['test'];
$serial=$_GET['id'];


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }




               $patient_role= $_SESSION["ptype"] ;
               $id= $_SESSION["pid"];


              $conn = new mysqli($servername, $user, $pass,$db);
                   if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      } 
                    else
                    {
                      //echo "entering database<br>";
                    }



               $sql="delete  from $testname where serial_no=$serial ";
             

                if($conn->query($sql) == true)
                {
                  echo "successfully deleted test record<br>";
                   header("refresh:2;url=../show_test/hb_show.php");
                }
                else
                {
                  echo "unsuccessfull";
                }



?>
