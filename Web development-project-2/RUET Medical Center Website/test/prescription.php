
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
include '../front_page/header.php';
?>
<br>

<?php
include '../index_option/index.php';
?>




<?php

$flag = 0;

$patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
$patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";

$date='mm/dd/yyyy';

$md1=$md2=$md3=$md4=$md5=$md6=$md7=$md8=$md9=$md10="";
$qty1=$qty2=$qty3=$qty4=$qty5=$qty6=$qty7=$qty8=$qty9=$qty10="";

$dis="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

$flag=0;


   if (empty($_POST["patient_role"])) {
    $patient_role_err = "patient role is required";
  }

 else {
    $patient_role = test_input($_POST["patient_role"]);
     $flag+=1;
  }
  
  if (empty($_POST["id"])) {
    $id_err = "id no. is required";
  }
   else {
    $id = test_input($_POST["id"]);
     $flag+=1;  
}


  if (empty($_POST["name"])) {
    $name_err = "Patient name is required";
  }
   else {
    $name = test_input($_POST["name"]);
     $flag+=1;
  
}


  if (empty($_POST["date"])) {
    $date_err = "date is required";
  }
   else {
    $date = test_input($_POST["date"]);
     $flag+=1;
}

  if (empty($_POST["ref_doctor"])) {
    $ref_doctor_err = "Ref. Doctor is required";
  }
   else {
    $ref_doctor= test_input($_POST["ref_doctor"]);
     $flag+=1;
  
}


    $md1=$_POST["md1"];
    $md2=$_POST["md2"];
     $md3=$_POST["md3"];
      $md4=$_POST["md4"];
       $md5=$_POST["md5"];
        $md6=$_POST["md6"];
         $md7=$_POST["md7"];
          $md8=$_POST["md8"];
           $md9=$_POST["md9"];
            $md10=$_POST["md10"];
     
   $qty1=$_POST["qty1"];
    $qty2=$_POST["qty2"];
     $qty3=$_POST["qty3"];
      $qty4=$_POST["qty4"];
       $qty5=$_POST["qty5"];
        $qty6=$_POST["qty6"];
         $qty7=$_POST["qty7"];
          $qty8=$_POST["qty8"];
           $qty9=$_POST["qty9"];
            $qty10=$_POST["qty10"];

    $dis=$_POST["dis"];

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }




   if($flag>=5)
          {

             $_SESSION["ptype"]= $patient_role;
                $_SESSION["pid"]=$id;


              echo "connecting ";
              $conn = new mysqli($servername, $user, $pass,$db);
                   if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      } 
                    else
                    {
                      //echo "entering database<br>";
                    }

               $dot = strtotime($date);
               $dot = date('Y-m-d H:i:s', $dot);

               $sql="insert into prescription (patient_role,id,name,dot,ref_doctor,
               dis,md1,md2,md3,md4,md5,md6,md7,md8,md9,md10,
               qty1, qty2, qty3, qty4, qty5, qty6, qty7, qty8, qty9, qty10
               

              )

                VALUES ('$patient_role','$id','$name','$dot', '$ref_doctor',

              '$dis',
              '$md1', '$md2', '$md3', '$md4', '$md5', '$md6', '$md7', '$md8', '$md9', '$md10',
               '$qty1', '$qty2', '$qty3', '$qty4', '$qty5', '$qty6', '$qty7', '$qty8', '$qty9', '$qty10')";


            
         
             

           
              if($conn->query($sql) == true)
              {
                 $patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
                 $patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";

                 $md1=$md2=$md3=$md4=$md5=$md6=$md7=$md8=$md9=$md10="";
                  $qty1=$qty2=$qty3=$qty4=$qty5=$qty6=$qty7=$qty8=$qty9=$qty10="";

                  $dis="";



               
                
                echo "<br>";
                echo "<p style='color: yellow;'>";
                echo "successfully inserted";
                echo "</p>";

                header("refresh:2;url=../show_test/prescription_show.php");
              }

           }
           else
           {
               echo "<br>";
               echo "<p style='color: yellow;'>";
                echo "Fill up all necessary fields";
                echo "</p>";
           }


?>


<!DOCTYPE html>
<html>

<head>
  <title>ruetmedicalcentre.com</title>
    <link rel="stylesheet" type="text/css" href="/rmcenter_admin/rmc_style_register.css">
     <meta name="viewport" content = "width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../rmcenter_admin/rmc_style_admin_page.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  
  <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="nivo-slider/bootstrap.min.js">
  <link rel="stylesheet" type="text/css" href="style/bootstrap.min.js">

  <link href="nivo-slider/themes/bar/bar.css" rel="stylesheet" type="text/css"/>
  <link href="nivo-slider/themes/dark/dark.css" rel="stylesheet" type="text/css"/>
  <link href="nivo-slider/themes/light/light.css" rel="stylesheet" type="text/css"/>
  <link href="nivo-slider/themes/default/default.css" rel="stylesheet" type="text/css"/>
  <link href="nivo-slider/themes/nivo-slider.css" rel="stylesheet" type="text/css"/>

  <script type="text/javascript" src="nivo-slider/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.pack.js"></script>


</head>

<body>

<div class="main" style="float:center;" >


 <div  style="color: black; float: center; background: white;padding-left: 30px;padding-right: 30px; padding-top:20px;">

      

      <h2> Prescription </h2>

      <h4><span class="error">* required field.</span></h4>

      <form class="rform" method="post" style="background:white; float: center ; padding-left: 30px; padding-right: 30px;"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      

     <div style="color: black; float: center; width:100% ; padding: 25px; ">
      
      Patient Role:
      <select name="patient_role">
       <option value="student">STUDENT</option>
       <option  value="teacher">TEACHER</option>
       <option  value="staff">STAFF</option>
      </select>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      ID no. <input style="color:black;"   type="text" name="id" value="<?php echo $id;?>">
      <span class="error">* <?php echo $id_err;?></span>
      <br><br>


      Patient Name <input style="color:black;"  type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $name_err;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      
      Date <input style="color:black;"   type="date" name="date" value="<?php echo $date;?>">
      <span class="error">* <?php echo $date_err;?></span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     

      <br><br>

     

      Pescribed by : <input style="color:black;"  type="text" name="ref_doctor" value="<?php echo $ref_doctor;?>">
      <span class="error">* <?php echo $ref_doctor_err;?></span><br><br>


   

      
      </div>

<div style="color: black; float:center;">

<div style="float:left; width: 40%; ">
  <p style="color: black; font-size: 20px; text-align: center;"> <b>Description of diesease</b></p>
<br><br>
    <textarea  rows='16%' cols='35%' style="color:black;"   name="dis" value="<?php echo $dis;?>"></textarea><br><br>
</div>



<div style="float:right; width: 60%">

<p style="color: black; font-size: 20px; text-align: center;"> <b>Medicine list</b></p>



      <table class="table table" style="color: black; float:center; width:100%; margin-left:0%;">
    <thead>
      <tr>
        <th style="text-align:center;width:50%;">Name</th>
        <th style="text-align:center;width:50%;">Quantity</th>
      </tr>
    </thead>

    <tbody>

        <tr>
         <td><input style="color:black;" type="text" name="md1" value="<?php echo $md1;?>"> </td>
        <td><input style="color:black;" type="text" name="qty1" value="<?php echo $qty1;?>"> </td>
       </tr>

       <tr>
        <td><input style="color:black;" type="text" name="md2" value="<?php echo $md2;?>"> </td>
         <td><input style="color:black;" type="text" name="qty2" value="<?php echo $qty2;?>"> </td>
       </tr>

       <tr>
   <td><input style="color:black;" type="text" name="md3" value="<?php echo $md3;?>"> </td>
       <td><input style="color:black;" type="text" name="qty3" value="<?php echo $qty3;?>"> </td>
       </tr>

       <tr>
      <td><input style="color:black;" type="text" name="md4" value="<?php echo $md4;?>"> </td>
        <td><input style="color:black;" type="text" name="qty4" value="<?php echo $qty4;?>"> </td>
       </tr>

       <tr>
         <td><input style="color:black;" type="text" name="md5" value="<?php echo $md5;?>"> </td>
        <td><input style="color:black;" type="text" name="qty5" value="<?php echo $qty5;?>"> </td>
       </tr>

       <tr>
         <td><input style="color:black;" type="text" name="md6" value="<?php echo $md6;?>"> </td>
         <td><input style="color:black;" type="text" name="qty6" value="<?php echo $qty6;?>"> </td>
       </tr>

       <tr>
       <td><input style="color:black;" type="text" name="md7" value="<?php echo $md7;?>"> </td>
       <td><input style="color:black;" type="text" name="qty7" value="<?php echo $qty7;?>"> </td>
       </tr>

       <tr>
       <td><input style="color:black;" type="text" name="md8" value="<?php echo $md8;?>"> </td>
         <td><input style="color:black;" type="text" name="qty8" value="<?php echo $qty8;?>"> </td>
       </tr>

       <tr>
        <td><input style="color:black;" type="text" name="md9" value="<?php echo $md9;?>"> </td>
        <td><input style="color:black;" type="text" name="qty9" value="<?php echo $qty9;?>"> </td>
       </tr>

       <tr>
         <td><input style="color:black;" type="text" name="md10" value="<?php echo $md10;?>"> </td>
        <td><input style="color:black;" type="text" name="qty10" value="<?php echo $qty10;?>"> </td>
       </tr>

       <tr>
       <td></td><td></td>
       </tr>

   </tbody>
  </table>

</div>
     
</div>

<div style="width:100%;">
 <br>
 <p style="float:center;"> <input type="submit" style="text-align:center;" class="btn btn-success" name="submit" value="Submit"></p>
</div>
</form>
</div>
</div>

</body>
</html>

<?php

echo "<br>";
include ('../front_page/footer.php');
?>
