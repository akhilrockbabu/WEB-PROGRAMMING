<?php
$list=array(array("id"=>1,"name"=>"akhil","MFC"=>49,"ASE"=>47,"DFCA"=>48,"ADS"=>49),
	array("id"=>2,"name"=>"albert","MFC"=>37,"ASE"=>27,"DFCA"=>28,"ADS"=>39),
	array("id"=>3,"name"=>"frestin","MFC"=>29,"ASE"=>17,"DFCA"=>28,"ADS"=>19));
?>
<html>
<head>
	<title>INTERNAL MARKS</title>
	<style>

table{
border:1px solid black;
width:500px;
}
tr:nth-child(even){
background-color:lightblue;
}
th,td{
padding:10px;
border:1px solid black;
text-align:center;
}
body{
font-family:sans-serif;
}
a{
color:hotpink;
/* padding:10px;
display:inline-block;*/
}
a:hover {
color:green;
}
</style>
<body>
	<h1 align="center">MAR ATHNASIUS COLLEGE OF ENGINEERING</h1><br>
	<form method="POST" action="" align="center">
		<table align="center" border="1">
			<tr>
				<td colspan="2">STUDENT DETAILS</td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="n" placeholder="enter the name"></td>
			</tr>
			<tr>
				<td>ID</td>
				<td><input type="number" name="i" placeholder="enter the ID"></td>
			</tr>
		</table><br><br>
	<input type="submit" name="next" value="SUBMIT">
</form>
<?php
if(isset($_POST['next']))
{
	foreach($list as $l)
	{
		if($l["id"]==$_POST['i'] && $l['name']==$_POST['n'])
		{
			?>
			<table align="center" border="1">
			<?php
			foreach($l as $key=>$value)
			{
				?>
					<tr>
						<td><?php echo $key;?></td>
						<td><?php echo $value;?></td>
					</tr>
				<?php

			}?>
			</table>
			<?php
		}

	}
}
?>
</body>
</head>
</html>

