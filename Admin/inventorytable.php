<html>
<body bgcolor="black" text="black">
<center>
<style>
label.control-label {
  font-weight: 600;
  color: #777;
}


table { 
	width: 750px; 
	border-collapse: collapse; 
	margin: auto;
	
	}


tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #ff3300; 
	color: white; 
	font-weight: bold; 
	
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 14px;
	
	}

 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		
		position: absolute;
		
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}
</style>

<?php
$con=mysql_connect("localhost","root","toor");
if(!$con)
{
die("connection failed".mysql_error($con));
}
$db=mysql_selectdb("project_13",$con);
if(!$db)
{
die("cannot coonect databases".mysql_error($con));
}
$query="select * from inventory";
$result=mysql_query($query);
echo "INVENTORY TABLE";
echo "<table border='3' bgcolor='green'>";
echo "<tr>";
echo "<th>pid</th>";
echo "<th>pname</th>";
echo "<th>price</th>";
echo "<th>quantity</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['pid']."</td>"."<td>".$row['pname']."</td>"."<td>".$row['price']."</td>"."<td>".$row['quantity']."</td>".$row['type']."</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
<form method="POST" action="inventoryremove.php">
enter inventory pid  to remove <br>
<input type="text" name="remove"> 
<input type="submit" value="REMOVE"> <br>
<br><br>
</form>
<form action="admin.php">
<input type="submit" value="<<back"> <br>
</form>
</body>
</body>
</html>
</body>
</html>
