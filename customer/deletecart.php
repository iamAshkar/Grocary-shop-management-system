<html>
<body>
<?php
$con=mysql_connect("localhost","root","toor");
if(!$con)
{
die("cannot connect to server".mysql_error($con));
}
$db=mysql_select_db("project_13",$con);
if(!$db)
{
die("cannot connect to database".mysql_error($con));
}

$pid=$_POST["pid"];

$result1="delete from bill where pid='$pid'";
if(mysql_query($result1,$con))
{
    header('location:bill.php');
}
?>
<br><br>

</body>
</html>

