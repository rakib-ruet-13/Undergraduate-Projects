<?php
include '../rmcenter_admin/init_restrict_access.php';
$_SESSION["page"]='admin';
?>

<?php
include '../front_page/header.php';
$_SESSION['page']="admin";

?>

<?php
include '../index_option/index.php';


?>


<!doctype html>
<html>

	<head>
<title>
Welcome to RUET Medical Center
</title>

  <link rel="stylesheet" type="text/css" href="/rmcenter_admin/rmc_style_admin_page.css">
</head>
<body>
    <div class="main">

    <div class="show_log" style="font-size:15px color:white ">
     
    <p style="color: pink ; padding-left:28px;">welcome .. <?php echo $admin_id ?>
     <?php echo " &nbsp &nbsp  "?>

     <a style="color:white; text-decoration:none;" href="../rmcenter_admin/rmc_admin_logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
   
    </p>

    </div>

    
    <br>
     <p style="text-align:center;">
     <a style="color:red; text-align:center; font-size:20px" href="../rmcenter_admin/emergency.php"><button type="button" class="btn btn-success">Emergency Contact for Ambulance</button></a>
     </p>
    <br>
		

	
	<?php 
	mysql_connect("$servername","$user","$pass");
	mysql_select_db("$db");
	?>
	<?php
	$sql="select * from contacts";
	$result=mysql_query($sql);
	$i=0;
	?>


	<div style="padding:25px; background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat;">



	<form method=post action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table align="center" style="margin: 25px auto; width:100% ; border: 2px white block ; padding:25px;" >
	
	

	<tr style="background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat; margin:25px; padding:25px;">
		
	<th><b>Name</b><br></th>
	<th><b>Phone no</b><br></th>
	<th><b>Availability</b><br></th>

	<th><b>Update</b><br></th>
	<th><b>Delete</b><br></th>
	<th><b>Check</b><br></th> 

	</tr>
	<?php
	while($abc=mysql_fetch_array($result))
	{
		echo "<tr style='background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat; padding:25px; margin:25px;'>";
		echo "<td>";
		echo '<input type="text" value="'.$abc['fname'].'"name="name'.$i.'" readonly />';
		echo "</td>";
		echo "<td>";
		echo '<input type="text" value="'.$abc['adress'].'"name="add'.$i.'"/>';
		echo "</td>";

		echo "<td>";
		echo '<input type="text" value="'.$abc['availability'].'"name="ability'.$i.'"/>';
		echo "</td>";

		echo "<td>";

		echo '<input type="submit" class="btn btn-danger" value="update" name="address'.$i.'"/>';
		if(isset($_POST['address'.$i.'']))
		{
			if(isset($_POST['check'.$i.'']))
			{
				$able=$_POST['ability'.$i.''];
				$cont=$_POST['add'.$i.''];
				$nam=$_POST['name'.$i.''];

				$update="update contacts set adress='$cont', availability='$able' where fname='$nam'";

				$qry=mysql_query($update);

				if(!$qry){echo "UPDATION FAILED";} else {
					# code...
						header("refresh:2;url=home.php");
					exit;

				}

			}
			else{echo "please select checkbox";}
		}
		echo "</td>";

		echo "<td >";

		echo '<input type="submit"  class="btn btn-danger" value="delete" name="delete'.$i.'"/>';
		if(isset($_POST['delete'.$i.'']))
		{
			if(isset($_POST['check'.$i.'']))
			{
				$nam=$_POST['name'.$i.'']; 
				$delete="delete from contacts where fname='$nam'";
				$qry=mysql_query($delete);
				if(!$qry){echo "deletion failed";}
				else
				{

					echo "<script type='text/javascript'>alert('deleted successfully!')</script>";
					header("refresh:2;url=home.php");
					exit;
					
				}
			}
			else {echo "please select checkbox";}



		}
		echo "</td>";

		echo "<td>";
		echo '<input type="checkbox" name="check'.$i.'"/>';
		echo "</td>";
		echo "</tr>";

		$i++;
	}
 
    echo "<br>";
	echo "<tr style='background-image: url(../rmcenter_admin/rmc_admin_bg2.jpg);
    background-repeat: repeat;'>";
	echo "<td>";
	echo '<input type="text" name="txtname"/>';
	echo "</td>";

	echo "<td>";
	echo '<input type="text" name="txtphone" />';
	echo "</td>";

	echo "<td>";
	echo '<input type="text" name="txtable"/>';
	echo "</td>";

	echo "<td>";
	echo '<input type="submit" class="btn btn-danger"  value="   add  " name="add"/>';
	if(isset($_POST['add']))
	{
		$nam=$_POST['txtname'];
		$cont=$_POST['txtphone'];
		$able=$_POST['txtable'];

		if(!$nam or !$cont or !$able)
		{
			echo "Fill all fields";
		}
		else
		{
			$update="insert into contacts (fname, adress, availability) values ('$nam','$cont','$able')";

			$qry=mysql_query($update);
			if(!qry){echo "Adding failed";}
			else
				{header("refresh:2;url=home.php");}

		}

	}

?>
</table>
</form>
</div>

</div>
</body>
</html>


</html>

<?php
include '../front_page/footer.php';
?>