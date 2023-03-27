<html>
<body bgcolor="black" text="white">

<?php
$pid=$_POST["remove"];
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

$query="delete from inventory where(pid='$pid')";
$result=mysql_query($query);

header('location:inventorytable.php');


mysql_close($con);
?>

</body>
</html>



