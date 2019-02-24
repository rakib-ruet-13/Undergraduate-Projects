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

<?php
include '../index_option/index.php';
?>




<?php

$flag = 0;


$patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
$patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";

$amerr=$conerr=$colerr=$muerr=$blerr=$helerr=$reerr=$ocerr=$rederr=$rbcerr=$puerr=$macerr=$vegerr=$muserr=$staerr=$chaerr=$floerr=$proerr=$hiserr=$colierr=$giaerr=$alerr=$aderr=$tterr=$larerr=$othererr="";
$am=$con=$col=$mu=$bl=$hel=$re=$oc=$red=$rbc=$pu=$mac=$veg=$mus=$sta=$cha=$flo=$pro=$his=$coli=$gia=$al=$ad=$tt=$lar=$other="";
$date='mm/dd/yyyy';



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


  if (empty($_POST["lab_no"])) {
    $lab_no_err = "labb no is required";
  }
   else {
    $lab_no= test_input($_POST["lab_no"]);
     $flag+=1;
  
}


  if (empty($_POST["date"])) {
    $date_err = "date is required";
  }
   else {
    $date = test_input($_POST["date"]);
     $flag+=1;
  
}


  if (empty($_POST["name"])) {
    $name_err = "Patient name is required";
  }
   else {
    $name = test_input($_POST["name"]);
     $flag+=1;
  
}


  if (empty($_POST["age"])) {
    $age_err = "age is  required";
  }
   else {
    $age = test_input($_POST["age"]);
     $flag+=1;
  
}


  if (empty($_POST["sex"])) {
    $sex_err = "Sex is required";
  }
   else {
    $sex = test_input($_POST["sex"]);
     $flag+=1;
  
}


  if (empty($_POST["ref_doctor"])) {
    $ref_doctor_err = "Ref. Doctor is required";
  }
   else {
    $ref_doctor= test_input($_POST["ref_doctor"]);
     $flag+=1;
  
}



 if (empty($_POST["am"])) {
    $amerr = "am is required";
  }

 else {
    $am= test_input($_POST["am"]);
     $flag+=1;
  }
if (empty($_POST["con"])) {
    $conerr = "con is required";
  }

 else {
     $con= test_input($_POST["con"]);
     $flag+=1;
  }

if (empty($_POST["col"])) {
    $colerr = "col is required";
  }

 else {
     $col= test_input($_POST["col"]);
     $flag+=1;
  }


  if (empty($_POST["mu"])) {
    $muerr = "mu is required";
  }

 else {
     $mu= test_input($_POST["mu"]);
     $flag+=1;
  }


if (empty($_POST["bl"])) {
    $blerr = "bl is required";
  }

 else {
     $bl= test_input($_POST["bl"]);
     $flag+=1;
  }

if (empty($_POST["hel"])) {
    $helerr = "hel is required";
  }

 else {
     $hel= test_input($_POST["hel"]);
     $flag+=1;
  }

if (empty($_POST["re"])) {
    $reerr = "re is required";
  }

 else {
     $re= test_input($_POST["re"]);
     $flag+=1;
  }

if (empty($_POST["oc"])) {
    $ocerr = "oc is required";
  }

 else {
     $oc= test_input($_POST["oc"]);
     $flag+=1;
  }

if (empty($_POST["red"])) {
    $rederr = "red is required";
  }

 else {
     $red= test_input($_POST["red"]);
     $flag+=1;
  }

if (empty($_POST["rbc"])) {
    $rbcerr= "rbc is required";
  }

 else {
     $rbc= test_input($_POST["rbc"]);
     $flag+=1;
  }

if (empty($_POST["pu"])) {
    $puerr= "pu is required";
  }

 else {
     $pu= test_input($_POST["pu"]);
     $flag+=1;
  }

if (empty($_POST["mac"])) {
    $macerr= "mac is required";
  }

 else {
     $mac= test_input($_POST["mac"]);
     $flag+=1;
  }

if (empty($_POST["veg"])) {
    $vegerr= "veg is required";
  }

 else {
     $veg= test_input($_POST["veg"]);
     $flag+=1;
  }if (empty($_POST["mus"])) {
    $muserr= "mus is required";
  }

 else {
     $mus= test_input($_POST["mus"]);
     $flag+=1;
  }if (empty($_POST["sta"])) {
    $staerr= "sta is required";
  }

 else {
     $sta= test_input($_POST["sta"]);
     $flag+=1;
  }if (empty($_POST["cha"])) {
    $chaerr= "cha is required";
  }

 else {
     $cha= test_input($_POST["cha"]);
     $flag+=1;
  }if (empty($_POST["flo"])) {
    $floerr= "flo is required";
  }

 else {
     $flo= test_input($_POST["flo"]);
     $flag+=1;
  }if (empty($_POST["pro"])) {
    $proerr= "pro is required";
  }

 else {
     $pro= test_input($_POST["pro"]);
     $flag+=1;
  }if (empty($_POST["his"])) {
    $hiserr= "his is required";
  }

 else {
     $his= test_input($_POST["his"]);
     $flag+=1;
  }if (empty($_POST["coli"])) {
    $colierr= "coli is required";
  }

 else {
     $coli= test_input($_POST["coli"]);
     $flag+=1;
  }if (empty($_POST["gia"])) {
    $giaerr= "gia is required";
  }

 else {
     $gia= test_input($_POST["gia"]);
     $flag+=1;
  }if (empty($_POST["al"])) {
    $alerr= "al is required";
  }

 else {
     $al= test_input($_POST["al"]);
     $flag+=1;
  }if (empty($_POST["ad"])) {
    $aderr= "ad is required";
  }

 else {
     $ad= test_input($_POST["ad"]);
     $flag+=1;
  }if (empty($_POST["tt"])) {
    $tterr= "tt is required";
  }

 else {
     $tt= test_input($_POST["tt"]);
     $flag+=1;
  }if (empty($_POST["lar"])) {
    $larerr= "lar is required";
  }

 else {
     $lar= test_input($_POST["lar"]);
     $flag+=1;
  }if (empty($_POST["other"])) {
    $othererr= "other is required";
  }

 else {
     $other= test_input($_POST["other"]);
     $flag+=1;
  }





}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }




   if($flag>=33)
          {
              echo "<br> ";

                $_SESSION["ptype"]= $patient_role;
                $_SESSION["pid"]=$id;


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


               $sql="insert into stool (patient_role,id,lab_no,name,dot,age,sex,ref_doctor,am,con,col,mu,bl,hel,re,oc,red,rbc,pu,mac,veg,mus,sta,cha,flo,pro,his,coli,gia,al,ad,tt,lar,other
               )
                VALUES 
                ('$patient_role','$id','$lab_no','$name','$dot','$age','$sex',
               '$ref_doctor','$am', '$con', '$col', '$mu', '$bl', '$hel', '$re', '$oc', '$red', '$rbc', '$pu', '$mac', '$veg', '$mus', '$sta', '$cha', '$flo', '$pro', '$his', '$coli', '$gia', '$al', '$ad', '$tt', '$lar', '$other')";
             

            

              if($conn->query($sql) == true)
              {


               $patient_role=$id=$lab_no=$date=$name=$age=$sex=$ref_doctor="";
               $patient_role_err=$id_err=$lab_no_err=$date_err=$name_err=$age_err=$sex_err=$ref_doctor_err="";

               $amerr=$conerr=$colerr=$muerr=$blerr=$helerr=$reerr=$ocerr=$rederr=$rbcerr=$puerr=$macerr=$vegerr=$muserr=$staerr=$chaerr=$floerr=$proerr=$hiserr=$colierr=$giaerr=$alerr=$aderr=$tterr=$larerr=$othererr="";
               $am=$con=$col=$mu=$bl=$hel=$re=$oc=$red=$rbc=$pu=$mac=$veg=$mus=$sta=$cha=$flo=$pro=$his=$coli=$gia=$al=$ad=$tt=$lar=$other="";


           
                
                echo "<br>";
                echo "<p style='color: yellow;'>";
                echo "successfully inserted";
                echo "</p>";

                header("refresh:2;url=../show_test/stool_show.php");
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




      <div  style="color: black; float: center; background: white;padding-left: 80px;padding-right: 80px; padding-top:20px;">

      

      <h2> STOOL EXAMINATION REPORT  </h2>

      <h4><span class="error">* required field.</span></h4>

      <form class="rform" method="post" style="background:white; float: center ; padding-left: 80px; padding-right: 80px;"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      

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

      Lab no. <input style="color:black;"   type="text" name="lab_no" value="<?php echo $lab_no;?>">
      <span class="error">* <?php echo $lab_no_err;?></span> 

      Date <input style="color:black;"   type="date" name="date" value="<?php echo $date;?>">
      <span class="error">* <?php echo $date_err;?></span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     

      <br><br>

      Patient Name <input style="color:black;"  type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $name_err;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

       Age <input style="color:black;"  type="text" name="age" value="<?php echo $age;?>">
      <span class="error">* <?php echo $age_err;?></span>

     <br><br>




       Sex 
        <select name="sex">
       <option value="male">male</option>
       <option value="female">female</option>
      
      </select><br><br>

       Ref_by_doctor <input style="color:black;"  type="text" name="ref_doctor" value="<?php echo $ref_doctor;?>">
      <span class="error">* <?php echo $ref_doctor_err;?></span><br><br>

      </div>


<div style="color: black; float:center;">

<br>

      <table class="table table" style="color: black">
    <thead>
      <tr>
        <th style="width:50%; text-align:center; ">Test</th>
        <th style="width:50%; text-align:center;">Result</th>
      </tr>
    </thead>

    <tbody>
    <tr>

  


       <td> PHYSICAL EXAMINATION:</td> <td></td> 
       </tr>
      <tr>

       <td> AMOUNT</td>  <td><input style="color:black;" type="text" name="am" value="<?php echo $am;?>"> <span class="error">* <?php echo $amerr;?></span> </td> 
        </tr>




        <tr>
        <td> CONSISTENCY</td> <td><input style="color:black;" type="text" name="con" value="<?php echo $con;?>"> <span class="error">* <?php echo $conerr;?></span></td> 
        </tr>

        <tr>
          <td> COLOUR</td><td><input style="color:black;" type="text" name="col" value="<?php echo $col;?>"> <span class="error">* <?php echo $colerr;?></span>
       </td> 
       
       </tr>



          <tr>
          <td> MUCUS</td><td> <input style="color:black;" type="text" name="mu" value="<?php echo $mu;?>"> <span class="error">* <?php echo $muerr;?></span> </td>
          </tr>    


      
          <tr>
         <td> BLOOD</td> <td><input style="color:black;" type="text" name="bl" value="<?php echo $bl;?>"><span class="error">* <?php echo $blerr;?></span></td> 
        
         </tr>  
 

          <tr>
          <td> HELMINTHS</td><td><input style="color:black;" type="text" name="hel" value="<?php echo $hel;?>"> <span class="error">* <?php echo $helerr;?></span></td> 
       
          </tr>      

<tr>


       <td> CHEMICAL EXAMINATION:</td> <td></td> 
       </tr>
          <tr>
          <td> REACTION</td><td> <input style="color:black;" type="text" name="re" value="<?php echo $re;?>"> <span class="error">* <?php echo $reerr;?></span></td> 
         </tr>

         
          <tr>
          <td> OCCULT BLOOD TEST</td><td><input style="color:black;" type="text" name="oc" value="<?php echo $oc;?>"><span class="error">* <?php echo $ocerr;?></span></td> 
        
         </tr>


          <tr>
         <td> REDUCING SUBSTANCE</td> <td><input style="color:black;" type="text" name="red" value="<?php echo $red;?>">  <span class="error">* <?php echo $rederr;?></span></td> 
          </tr>
<tr>

       <td> MICROSCOPIC EXAMINATION:</td> <td></td> 
       </tr>
<tr>

       <td> EPITHELIAL CELL</td> <td></td> 
       </tr>
          <tr>
          <td> R.B.C</td><td><input style="color:black;" type="text" name="rbc" value="<?php echo $rbc;?>"> <span class="error">* <?php echo $rbcerr;?></span></td>        
          </tr>


          <tr>
          <td> PUSH CELLS</td> <td><input style="color:black;" type="text" name="pu" value="<?php echo $pu;?>"><span class="error">* <?php echo $puerr;?></span></td> 
          </tr>
          

          <tr>
          <td> MACROPHAGES</td> <td><input style="color:black;" type="text" name="mac" value="<?php echo $mac;?>">  <span class="error">* <?php echo $macerr;?></span></td> 

          </tr>
   <tr>
          <td> VEGETABLE CELLS</td> <td><input style="color:black;" type="text" name="veg" value="<?php echo $veg;?>">  <span class="error">* <?php echo $vegerr;?></span></td> 

          </tr>
   <tr>
          <td> MUSCLE FIBRES</td> <td><input style="color:black;" type="text" name="mus" value="<?php echo $mus;?>">  <span class="error">* <?php echo $muserr;?></span></td> 

          </tr>
   <tr>
          <td> STARCH</td> <td><input style="color:black;" type="text" name="sta" value="<?php echo $sta;?>">  <span class="error">* <?php echo $staerr;?></span></td> 

          </tr>
          <tr>

       <td> FAT(GLOBULES)</td> <td></td> 
       </tr>
   <tr>
          <td> CHARCOT LEYDEN CRYSTALS</td> <td><input style="color:black;" type="text" name="cha" value="<?php echo $cha;?>">  <span class="error">* <?php echo $chaerr;?></span></td>

          </tr>
   <tr>
          <td> FLOATATION TEST</td> <td><input style="color:black;" type="text" name="flo" value="<?php echo $flo;?>">  <span class="error">* <?php echo $floerr;?></span></td>

          </tr>
          <tr>

       <td> MUCUS</td> <td></td> 
       </tr>
   <tr>
          <td> PROTOZOA(TROPHOZOITE)</td> <td><input style="color:black;" type="text" name="pro" value="<?php echo $pro;?>">  <span class="error">* <?php echo $proerr;?></span></td> 

          </tr>
   <tr>
          <td> CYSTS OF-E,HISTOLYTICA</td> <td><input style="color:black;" type="text" name="his" value="<?php echo $his;?>">  <span class="error">* <?php echo $hiserr;?></span></td> 
          </tr>
   <tr>
          <td> CYSTS OF-E COLI</td> <td><input style="color:black;" type="text" name="coli" value="<?php echo $coli;?>">  <span class="error">* <?php echo $colierr;?></span></td> 

          </tr>
   <tr>
          <td> CYSTS OF-GIARDIA</td> <td><input style="color:black;" type="text" name="gia" value="<?php echo $gia;?>">  <span class="error">* <?php echo $giaerr;?></span></td> 

          </tr>
   <tr>
          <td> OVA OF-ASCARIS(AL)</td> <td><input style="color:black;" type="text" name="al" value="<?php echo $al;?>">  <span class="error">* <?php echo $alerr;?></span></td> 

          </tr>
   <tr>
          <td> OVA OF-ANKYLOSTOMA(AD)</td> <td><input style="color:black;" type="text" name="ad" value="<?php echo $ad;?>">  <span class="error">* <?php echo $aderr;?></span></td>

          </tr>
   <tr>
          <td> OVA OF-TRICHURIS(T.T)</td> <td><input style="color:black;" type="text" name="tt" value="<?php echo $tt;?>">  <span class="error">* <?php echo $tterr;?></span></td>

          </tr>
   <tr>
          <td> LARVA OF.</td> <td><input style="color:black;" type="text" name="lar" value="<?php echo $lar;?>">  <span class="error">* <?php echo $larerr;?></span></td> 

          </tr>
   <tr>
          <td> OTHERS</td> <td><input style="color:black;" type="text" name="other" value="<?php echo $other;?>">  <span class="error">* <?php echo $othererr;?></span></td> 

          </tr>

           <tr>
          <td>  </td><td></td> 

          </tr>

          </tbody>
          </table>
          </div>

  <input type="submit"  class="btn btn-success" name="submit" value="Submit">


      </form>
       <br>
      
</div>
</div>
</body>
</html>

<?php

echo "<br>";
include ('../front_page/footer.php');
?>
