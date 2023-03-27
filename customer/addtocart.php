<html>
<body bgcolor="black" text="white">
<center>
<?php
session_start();
$con=mysql_connect("localhost","root","toor");
if(!$con)
{
die("failed to connect".mysql_error($con));
}
$db=mysql_select_db("project_13",$con);
if(!$db)
{
die("can't connect to database".mysql_error($con));
}
$pid=$_GET["itemid"];
$uname=$_SESSION["uname"];
$quantity=$_POST["quantity"];
$q1= "select * from inventory where pid='$pid'";
$r=mysql_query($q1,$con);
while($row=mysql_fetch_array($r))
{
    $pname=$row["pname"];
    $price=$row["price"];
    $stock=$row["quantity"];
}
if ($stock < $quantity)
{
echo"limited qauntity";
?>
<a href="user.php">back</a>
<?php
}
else
{
$amount=$quantity * $price;
$query="insert into bill values('$uname','$pid','$pname',$price,$quantity,$amount)";
$result=mysql_query($query,$con);
header('location:bill.php');
}
mysql_close($con);	
?>

</center>
</body>
</html>

