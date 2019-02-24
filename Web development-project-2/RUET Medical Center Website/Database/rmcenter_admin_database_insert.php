
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="rmcenter_admin";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE rmcenter_admin";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

echo "all right <br>\n";
$conn->close();


$conn = new mysqli($servername, $username, $password,$db);

 if($conn->connect_error)
 {
 	die("connection failed :" . $conn->connect_error);
 }


$sql= "create table rmc_admin(admin_id varchar(50) primary key , pass varchar(50))";

 if($conn->query($sql) == True)
 {
 	echo "rmc_amdin table created successfully<br>";
 }
 else
 {
 	echo "something went wrong";
 }



$sql= "create table chief(admin_id varchar(50) primary key)";

 if($conn->query($sql) == True)
 {
  echo "chief table created successfully<br>";
 }
 else
 {
  echo "something went wrong";
 }




 $sql= "create table pincode(serial_no int primary key AUTO_INCREMENT, pin_no varchar(50),status varchar(50) default 'unused',chief varchar(50) default 'no')";

 if($conn->query($sql) == True)
 {
 	echo "pincode table created successfully<br>";
 }
 else
 {
 	echo "something went wrong";
 }

 $sql= "CREATE TABLE student_profile(serial_no int AUTO_INCREMENT UNIQUE,name varchar(50),roll varchar(10) primary key, dob date, blood varchar(10),contact varchar(20),image blob ,status varchar(10))";

 if($conn->query($sql) == True)
 {
 	echo "student_info table created successfully<br>";
 }
 else
 {
 	echo "something went wrong";
 }

  $sql= "CREATE TABLE teacher_profile(serial_no int AUTO_INCREMENT UNIQUE,name varchar(50),id varchar(10) primary key, dob date, blood varchar(10),contact varchar(20),image blob ,status varchar(10))";

 if($conn->query($sql) == True)
 {
 	echo "teacher_info table created successfully<br>";
 }
 else
 {
 	echo "something went wrong";
 }

   $sql= "CREATE TABLE staff_profile(serial_no int AUTO_INCREMENT UNIQUE,name varchar(50),id varchar(10) primary key, dob date, blood varchar(10),contact varchar(20),image blob ,status varchar(10))";

 if($conn->query($sql) == True)
 {
 	echo "teacher_info table created successfully<br>";
 }
 else
 {
 	echo "something went wrong";
 }


$sql="Create table haematology (serial_no int AUTO_INCREMENT  primary key,patient_role varchar(50) not null, id varchar(15),lab_no varchar(10),dot date, name varchar(50),age int, sex varchar(7),ref_doctor varchar(50), 

hemo varchar(100),esr varchar(100),tcnt varchar(100),wbc varchar(50),diffcnt varchar(50),neutro varchar(100),lympho varchar(100),mono varchar(50),eosin varchar(100),baso
varchar(50), blast varchar(50),other varchar(500) );";



 if($conn->query($sql) == True)
 {
 	echo "Haematology created successfully<br>";
 }


$sql="Create table serology (serial_no int AUTO_INCREMENT  primary key,patient_role varchar(50) not null, id varchar(15),lab_no varchar(10),dot date, name varchar(50),age int, sex varchar(7),ref_doctor varchar(50), 


 too varchar(50), th varchar(50), ao varchar(50) ,ah varchar(50), bo varchar(50), bh varchar(50),
 ox2 varchar(50), ox19 varchar(50), oxk varchar(50), abo varchar(50) ,rh varchar(50) ,hb varchar(50), kal varchar(50) )";


  if($conn->query($sql) == True)
 {
 	echo "Serology created successfully<br>";
 }


 $sql="Create table urine (serial_no int AUTO_INCREMENT primary key,patient_role varchar(50) not null, id varchar(15),lab_no varchar(10),dot date, name varchar(50),age int, sex varchar(7),ref_doctor varchar(50), quan varchar(50), col varchar(50), app varchar(50) ,sed varchar(50), spe varchar(50),rea varchar(50), php varchar(50), al varchar(50), su varchar(50), bi varchar(50), cal varchar(50) ,ap varchar(50) ,tp varchar(50), ep varchar(50), pu varchar(50),rbc varchar(50))";


  if($conn->query($sql) == True)
 {
 	echo "urine created successfully<br>";
 }


       $sql="Create table stool (serial_no int AUTO_INCREMENT primary key,patient_role varchar(50) not null, id varchar(15),lab_no varchar(10),dot date, name varchar(50),age int, sex varchar(7),ref_doctor varchar(50),


                 am varchar(50), con varchar(50), col varchar(50),mu varchar(50),bl varchar(50),hel varchar(50),re varchar(50),oc varchar(50),red varchar(50),rbc varchar(50),pu varchar(50),mac varchar(50),veg varchar(50),mus varchar(50),sta varchar(50),cha varchar(50),flo varchar(50),pro varchar(50),his varchar(50),coli varchar(50),gia varchar(50),al varchar(50),ad varchar(50),tt varchar(50),lar varchar(50),other varchar(50))";
         


 if($conn->query($sql) == True)
 {
 	echo "stool created successfully<br>";
 }

  $sql="Create table hb (serial_no int AUTO_INCREMENT primary key,patient_role varchar(50) not null, id varchar(15),lab_no varchar(10),dot date, name varchar(50),age int, sex varchar(7),ref_doctor varchar(50),


    rpg varchar(50), fbs varchar(50),ppbs varchar(50),ab varchar(50),glu varchar(50),cre varchar(50),hbai varchar(50) )";

 if($conn->query($sql) == True)
 {
 	echo "hb created successfully<br>";
 }

     $sql=" Create table prescription (serial_no int AUTO_INCREMENT primary key,patient_role varchar(50) not null, id varchar(15),dot date, name varchar(50),ref_doctor varchar(50),
 dis varchar(1000),md1 varchar(50),md2 varchar(50),md3 varchar(50),md4 varchar(50),md5 varchar(50),md6 varchar(50),md7 varchar(50),md8 varchar(50),md9 varchar(50),md10 varchar(50),
 qty1 varchar(50), qty2 varchar(50), qty3 varchar(50), qty4 varchar(50), qty5 varchar(50), qty6 varchar(50), qty7 varchar(50), qty8 varchar(50), qty9 varchar(50), qty10 varchar(50));";


  if($conn->query($sql) == True)
 {
  echo "prescription created successfully<br>";
 }


//

?>