
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


 $sql= "create table pincode(serial_no int primary key AUTO_INCREMENT, pin_no varchar(50),status varchar(50) default 'unused')";

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




//

?>