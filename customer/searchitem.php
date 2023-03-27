

<html>
<body bgcolor="black" text="white">
<?php
session_start();
include('usermenu.php');
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
?>
<center><h2>Select the catogory: </h2><br>
<form method="POST" action="showitem.php">
catogory<select name="type" >
<?php
$query="select distinct type from inventory ";
$result=mysql_query($query,$con);
while($row=mysql_fetch_array($result))
{
$t=$row["type"];
echo $t;
?>

<option name="category" value="<?php echo $t; ?>"><?php echo $t; ?> 
</option>

<?php

}

?>
</select><br><br>
<input type=submit value="SEARCH">
</form>
<?php
mysql_close($con);
?>
<form action="showitem1.php">
<input type="submit" value="<<back"> <br>
</form>
</center>
</body>
</html>

