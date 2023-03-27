<?php
session_start();
$uname=$_POST["uname"];
$password=$_POST["password"];

$con=mysql_connect("localhost","root","toor");
if(!$con)
{
die("not connected".mysql_error($con));
}
$db=mysql_select_db("project_13",$con);
if(!$db)
{
die("connection failed".mysql_error($con));
}
$query="select * from login where (uname='$uname' and password='$password')";
$result=mysql_query($query);
if(mysql_num_rows($result)>0)
{
$_SESSION["uname"]=$uname;
$row=mysql_fetch_array($result);
$r=$row["type"];
if($r=="admin")
{
header('location:Admin/admin.php');
}
else if($r=="customer")
{
header('location:customer/showitem1.php');
}
}
else 
header('location:logi.html');
mysql_close($con);
?>

