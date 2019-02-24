<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="project";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE project";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>


<?php

$conn = new mysqli($servername, $username, $password,$db);

 if($conn->connect_error)
 {
 	die("connection failed :" . $conn->connect_error);
 }





//$sql="drop table user";


if($conn->query($sql) == True)
 {

     echo "table dropped";
     echo ' ';
 }
 


 $sql= "create table user(user_id varchar(50) primary key ,password varchar(50),email varchar(50) unique ,username varchar(50),rating integer,status varchar(5),comment varchar(1000),gender varchar(20))";

 if($conn->query($sql) == True)
 {
 	echo "user table created successfully";
 }



//$sql="drop table comm";
if($conn->query($sql) == True)
 {

     echo "table dropped";
     echo ' ';
 }
 
$sql="create table comm(comment_no integer primary key,comment varchar(2000),user_id varchar(50),page_name varchar(100),catagory varchar(100))";

 if($conn->query($sql) == True)
 {
 	echo "comment table created successfully";
 }





$sql="drop table rep";


if($conn->query($sql) == True)
 {

     echo "table dropped";
     echo ' ';
 }


$sql="create table rep(comment_no integer ,reply_no integer,reply varchar(10000),user_id varchar(50),page_name varchar(50))";

 if($conn->query($sql) == True)
 {
  	echo "reply table created successfully";
 }





 $sql="create table page(page_no integer primary key,page_name varchar(50),page_link varchar(50))";

 if($conn->query($sql) == True)
 {
 	echo "page_serial table created successfully";
 }

  

  //s$sql="drop table user_info";
  $conn->query($sql);

  $sql="create table user_info(user_id varchar(50) primary key,institution varchar(100),address varchar(50) , phone_no varchar(15),country varchar(100))";

 if($conn->query($sql) == True)
 {
 	echo "user info is created";
 }


 $conn->query($sql);

  $sql="create table quiz(ques_no integer primary key,ques varchar(1000),ans1 varchar(100) ,ans2 varchar(100) ,ans3 varchar(100),
  ans4 varchar(100),marks integer)";


 if($conn->query($sql) == True)
 {
  echo "user info is created";
 }





?>