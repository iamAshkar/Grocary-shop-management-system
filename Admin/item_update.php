<html>
<body bgcolor="black" text="white">
<center>
<?php
$con=mysql_connect("localhost","root","toor");
if(!$con)
{
die("cannot connect tonserver".mysql_error($con));
}
$db=mysql_select_db("project_13",$con);
if(!$db)
{
die("cannot connect to database".mysql_error($con));
}
$pid=$_POST["pid"];
$pname=$_POST["pname"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];
$result1="update inventory set pname='$pname',price='$price',quantity='$quantity' where pid='$pid'";
if(mysql_query($result1))
{
echo " updated";
}
mysql_close($con);
?>
<form action="admin.php">
<input type="submit" value="<<back"> <br>
</form>
</center>
</body>
</html>
</body>
</html>
