<html>
<body>
<?php
session_start();
include('usermenu.php');

$uname=$_SESSION["uname"];
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
$name=$_POST["name"];
$password=$_POST["password"];
$mobileno=$_POST["mobileno"];
$address=$_POST["address"];
$result="update login set password='$password' where uname='$uname'";
$result1="update register set name='$name', mobileno='$mobileno', address='$address' where uname='$uname'";
if(mysql_query($result))
{
echo "1 record updated";
}
if(mysql_query($result1))
{
echo "1 record updated";
}
mysql_close($con);
?>
<form action="showitem1.php">
<input type="submit" value="<<back"> <br>
</form>
</body>
</center>
</html>


