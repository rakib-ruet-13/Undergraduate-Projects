<?php
include '../rmcenter_admin/init_access.php';
$_SESSION['page']="admin";
$_SESSION['test_no']="";
?>

<?php

//include '../rmcenter_admin/cmo_access.php'; 
?>

<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>

<?php


include '../rmcenter_admin/init_access.php';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));


?>
<?php
if(isset($_POST['search']))
{
  $valueToSearch=$_POST['valuetosearch'];
  $query="SELECT * FROM `test_table` WHERE CONCAT(`SL_No`, `Test_Name`, `Status`) LIKE '%".$valueToSearch."%'";
  $search_result=filterTable($query);
}
else
{
 $query="SELECT * from test_table";
 $search_result=filterTable($query);  
}
function filterTable($query)
{

include '../rmcenter_admin/init_access.php';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
$filter_result=mysqli_query($connect,$query);
return $filter_result;
}
?>
<html>
<head>

</head>

<style type="text/css">
body{
  background-image:url(Capture.PNG);
  background-repeat:repeat;
}
</style>

<body>


<div class="container">
<header>
<h1 style="text-align:center; color:white;">Medical test for patients</h1>
</header>

<form action="user_eqip.php" method="post">
<input type="text" name="valuetosearch" placeholder="Value to search"></br><br>
<input type="submit" name="search" value="Search" class="btn"></br></br>

<table class="table table-hover" style="background: white;">
<tr style='text-align:center;'>
<th style="text-align:center; font-size:20px;">SL_No</th>
<th style="text-align:center; font-size:20px;">Test Name</th>
<th style="text-align:center; font-size:20px;">Status</th>
</tr>

<?php


 if($search_result->num_rows > 0 )
   {
 

   while($row=$search_result->fetch_assoc())
          {
           echo "<tr style='text-align:'>";

           echo "<td style='text-align: center ;'>";
             echo "$row[SL_No] ";
           echo "</td>";

             echo "<td style='text-align: center ;'>";
             echo "$row[Test_Name] ";
             echo "</td>";
           

         
          echo "<td style='text-align: center ;'>";
            echo " $row[Status] ";
          echo "</td>";
     

            echo "</tr>";

         }
     }


 
?>




</table>



</div>
</body>

<div style="float:center; text-align:center;">

</div>
</html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
 .header
{
  background-image:url(Capture1.PNG);
  background-repeat:repeat;
  height:80px;
  text-align:center;
  padding-top:20px;
  font:Tahoma, Geneva, sans-serif;
  font-size:36px;
  color:rgb(5, 2, 0);
  
  }

content
{
  margin-top:20px;;
}
.button{
  color:#000;
  float:center;
  width:40px;
}
</style>
</head>
</html>
<?php

echo "<br>";
include '../front_page/footer.php';
?>
