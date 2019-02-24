
<?php
include '../rmcenter_admin/init_restrict_access.php';
$_SESSION['page']="admin";
$_SESSION['test_no']="";
?>

<?php

include '../rmcenter_admin/cmo_access.php'; 
?>
<?php
if(isset($_POST['search']))
{
	$valueToSearch=$_POST['valuetosearch'];
	$query="SELECT * FROM `test_table` WHERE CONCAT(`SL_No`, `Test Name`, `Status`) LIKE '%".$valueToSearch."%'";
	$search_result=filterTable($query);
}
else
{
 $query="SELECT * from test_table";
 $search_result=filterTable($query);	
}
function filterTable($query)
{

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
$filter_result=mysqli_query($connect,$query);
return $filter_result;
}
?>
<html>
<head>

</head>

<body>
<form action="con1.php" method="post">
<input type="text" name="valuetosearch" placeholder="Value to search"></br>
<input type="submit" name="search" value="filter"></br>

<table background="images3.jpg" align="center" width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>SL_No</th>
<th>Test Name</th>
<th>Status</th>
</tr>

<?php while($row=mysqli_fetch_array($search_result)):?>
<tr>
<td><?php echo $row['SL_No'];?></td>
<td><?php echo $row['Test Name'];?></td>
<td><?php echo $row['Status'];?></td>
</tr>
<?php endwhile;?>


</table>
</form>

</body>
</html>
