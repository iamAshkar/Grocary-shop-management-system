<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<body>
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
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y h:i:s');
$sum=0;
$no=1;
$uname=$_SESSION["uname"];
$query="select * from bill where uname='$uname'";
$result=mysql_query($query);
echo "Bill";
echo "<table border='1' bgcolor='lightblue' >";
echo "<tr>";
echo "<th>serial no</th>";
echo "<th>Item id</th>";
echo "<th>Item Name</th>";
echo "<th>Unit Price</th>";
echo "<th>Quantity</th>";
echo "<th>Amount</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
    $pid=$row['pid'];
    $pname=$row['pname'];
    $price=$row['price'];
    $quan=$row['quantity'];
    $amount=$row['amount'];
echo "<tr>";
echo "<td>".$no."</td>". "<td>".$row['pid']."</td>"."<td>".$row['pname']."</td>"."<td>".$row['price']."</td>"."<td>".$row['quantity']."</td>"."<td>".$row['amount']."</td>";
echo "</tr>";
$no=$no+1;
$query2="select * from inventory where pid='$pid'";
$result2=mysql_query($query2);
while($ro=mysql_fetch_array($result2))
{
  $quantity=$ro['quantity'];
  $stock=$quantity-$quan;
  echo $stock;

$q2="update inventory set quantity=$stock where pid='$pid'";
$r2=mysql_query($q2);
}

$q1="insert into sale values('$uname','$pid','$pname',$price,$quantity,$amount,'$date')";
$r1=mysql_query($q1);
$sum=$sum+$row['amount'];
}
echo "<tr>";
echo "<td>".'date & time'."</td>"."<td colspan=2>"."$date"."</td>"."<td colspan=2>".'Total Amount'."</td>"."<td>".$sum."</td>";
echo "</tr>";
echo "</table>";
$q2="truncate table bill";
$r2=mysql_query($q2);

mysql_close($con);
?>
<center>
	<br<br>
<form action="payment.php" method="POST">
<input type="SUBMIT" name="Get bill" value="Get bill"> <br>
</form>
</center>
</body>
</html>

