<html>
<head>
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
</head>
<body bgcolor="black" text="black">
<center>
<?php

//include('adminmenu.php');
$con=mysql_connect("localhost","root","toor");
if(!$con)
{
die("couldn't connect to server".mysql_error($con));
}
$db=mysql_select_db("project_13",$con);
if(!$db)
{
die("cannot connect to database".mysql_error($con));
}
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y h:i:s');
$query="select * from sale";
$result=mysql_query($query);
echo "Sales Details";
echo "<table id='customers' border='1' bgcolor='grey' >";
echo "<tr>";
echo "<th>User Name</th>";
echo "<th>Product ID</th>";
echo "<th>Product Name</th>";
echo "<th>Price</th>";
echo "<th>Quantity</th>";
echo "<th>Amount</th>";
echo "<th>date & time</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['uname']."</td>"."<td>".$row['pid']."</td>"."<td>".$row['pname']."</td>"."<td>".$row['price']."</td>"."<td>".$row['quantity']."</td>"."<td>".$row['amount']."</td>"."<td>".$row['date']."</td>";
echo "</tr>";

}

echo "</table>";

mysql_close($con);
?><br><br>
<form action="admin.php">
<input type="submit" value="<<back"> <br>
</form>

<br>

</center>
</body>
</html>

