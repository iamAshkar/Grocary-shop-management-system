<?php
$uname=$_POST["remove"];
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
$query=" delete from register where(uname='$uname')";
$query1="delete from login where (uname='$uname')";
$result=mysql_query($query);
$result1=mysql_query($query1);
header('location:userdetails.php');
mysql_close($con);
?>



