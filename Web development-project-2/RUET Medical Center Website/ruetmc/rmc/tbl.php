<!doctype html>
<html>
	<link /href="css/bar/bar.css" rel="stylesheet" type="text/css" media="screen"/>
	<link /href="css/dark/dark.css" rel="stylesheet" type="text/css" media="screen"/>
	<link /href="css/default/default.css" rel="stylesheet" type="text/css" media="screen"/>
	<link /href="css/light/light.css" rel="stylesheet" type="text/css" media="screen"/>
	<link /href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="screen"/>

	<link /href="style1.css" rel="stylesheet" type="text/css">


	<head>
<title>Demo</title>
		
		<style type="text/css">
		#contact_table
		{
			
			margin-left: 270px;
			border:1px solid gray;
			border-collapse: collapse;
		}
		#contact_table td,th
		{
			text-align: center;
			border:solid gray 1px;
			font-size: 15px;
			
		}
		.head_table
		{
			border: solid gray 1px;
	  		background-color: #2196F9;
			
		}
		
		
		</style>
</head>
<body>
<div class="fix main">

<div class="fix header">

		
	
		<div class="logo">
			<img src="im.jpg" alt=""/>
		</div>
		<div class="name">
		<h1>RUET Medical Center</h1>
		</div>
	</div>
	

	<div class="fix slider">
		<div class="slide-wrapper theme-dark" >
			<div class="nivo-slider" id="slider">
		
				<img src="download.jpg" alt=""/>
				<img src="rmc.jpg" alt=""/>
				<img src="rmc1.jpg" alt=""/>
				<img src="rmc1.jpg" alt=""/>
				
				
			</div>
		 </div>
		
	</div>
	<div class="table">
<?php

	function get_contacts()
	{
		$conn=mysql_connect('localhost','root','');
		if(!$conn)
		{
			die('can not connect to server');
		}
		$db=mysql_select_db('rmc',$conn);
		if(!$db)
		{
			die('can not connect to database');
		}
		$query="select * from contacts";
		$data=mysql_query($query,$conn);

		$contacts=array();

		while($object=mysql_fetch_object($data))
		{
			$contacts[]=$object;
		}
		mysql_close($conn);
		return $contacts;
	}
	function get_table()
	{
		//create table
		$table_str='<table id="contact_table">';
		$contacts=get_contacts();
		$i=1;
		$table_str.='<tr class="head_table">';
		$table_str.='<th>Name</th><th>Phone no</th><th>Availability</th>';
		$table_str.='</tr>';

		foreach ($contacts as $contact) {
			# code...
			$class='';
			
			$table_str.='<tr class="'.$class.'">';
			$table_str.='<td width="200">'.$contact->fname.'</td><td width="150">'.$contact->adress.'</td><td width="150">'.$contact->availability.'</td>';
			$table_str.='</tr>';

		}
		$table_str.='</table>';
		return $table_str;
	}
?>

		<?php echo get_table(); ?>
	


</form>
</table>
</div>
	
	<div class="footer">
		<div class="footer1">
		<p>@copyright</p> 
		<p>Nafisa Tasnim</p>
		<p>nafisa.ruetcse16@gmail.com</p>
		</div>
		<div class="footer2">
		<p>Thanks giving to:</p>
		<p>Shyla Agroge</p>
		<p>Assistant Professor</p>
		<p>CSE,RUET</p>
		</div>
	
	
	</div>
</div>
<script type="text/javascript" src="js/jquery-1.7.1.min.js">

</script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js">
</script>
<script type="text/javascript" >
$(window).load(function(){
	$('#slider').nivoSlider();
});
</script>
</body>
</html>


</html>