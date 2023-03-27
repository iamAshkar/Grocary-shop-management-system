<html>
<head>
<body bgcolor="black" text="black">
<style>
label.control-label {
  font-weight: 600;
  color: #777;
}
.card input[type=submit]{
  border: none;
  outline: 0;
  padding: 10px;
  color: black;
  background-color: #f0cd06ef;
  text-align: center;
  cursor: pointer;
  width: 10%;
  font-size: 18px;
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
<center>
<?php
session_start();

include('usermenu.php');
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
$query="select * from bill";
$sum=0;
$result=mysql_query($query);
echo "Shopping Cart";
echo "<table id='customers' border='2' bgcolor='lightblue' >";
echo "<tr>";
echo "<th>product id</th>";
echo "<th>product Name</th>";
echo "<th>Unit Price</th>";
echo "<th>Quantity</th>";
echo "<th>Amount</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['pid']."</td>"."<td>".$row['pname']."</td>"."<td>".$row['price']."</td>"."<td>".$row['quantity']."</td>"."<td>".$row['amount']."</td>";
echo "</tr>";
$sum=$sum+$row['amount'];

}

echo "<tr>";
echo "<td colspan=4>".'Total Amount'."</td>"."<td>".$sum."</td>";
echo "</tr>";
echo "</table>";


mysql_close($con);
?>
<form method="POST" action="deletecart.php"><br>
<input type="text" name="pid" placeholder="enter the product id"><br><br>  
<input type="submit" name="submit" value="Remove"><br>
</form><br><br>
<div class="card input">
<form method="POST" action="printbill.php">
<input type="submit" name="submit" value="Buy now"><br>
</div>
</form><br>

</center>
</body>
</html>

