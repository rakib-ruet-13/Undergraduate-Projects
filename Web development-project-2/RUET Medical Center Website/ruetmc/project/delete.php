<?php
include '../rmcenter_admin/init_restrict_access.php';

?>
<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>


<?php

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
$query="SELECT report_tab.code_no,name,test_name,report_status  from report_tab,patient_tab where report_tab.code_no=patient_tab.code_no";
$search_result=mysqli_query($connect,$query);

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

<body style="float:center;">

<div class="container" style="width:100%; float:center;">
<header>
<h1 style="text-align:center; color:white;"><b>Delete report which is given </b></h1>
</header>




<table class="table table-hover" style="background: white; float:center; width:80%; margin-left:10%;">

<tr>
<th style='text-align: center ;'>code_no</th>
<th style='text-align: center ;'>Name</th>
<th style='text-align: center ;'>Test Name</th>
<th style='text-align: center ;'>Delete</th>

</tr>

<?php

if($search_result->num_rows > 0 )
   {
 

   while($row=$search_result->fetch_assoc())
          {
           echo "<tr style='text-align:'>";

           echo "<td style='text-align: center ;'>";
             echo "$row[code_no] ";
           echo "</td>";

              echo "<td style='text-align: center ;'>";
             echo "$row[name] ";
           echo "</td>";


             echo "<td style='text-align: center ;'>";
             echo "$row[test_name] ";
           echo "</td>";


           

         
          echo "<td style='text-align: center ;'>";
            echo "<a  href='make_delete.php? id=$row[code_no]' style='text-decoration:none'> delete </a>";
          echo "</td>";
     

            echo "</tr>";

         }
     }

 


 
?>


</table>

</div>
</form>
</body>
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
</style>
</head>
</html>
<?php
echo "<br>";
include '../front_page/footer.php';
?>
