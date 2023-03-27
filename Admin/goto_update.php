<html>
<body>
<?php
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
<center><h2>Select an Item: </h2><br>
<form method="POST" action="item_edit.php" >
<select name="pname">
<?php
$query="select distinct pname from inventory";
$result=mysql_query($query,$con);
while($row=mysql_fetch_array($result))
{
$p=$row["pname"];
echo $p;
?>
<option value="<?php echo $p; ?>"><?php echo $p; ?> 
</option>
<?php

}
mysql_close($con);
?>
</select>
<br><br><input type ="submit" value="Update">
</form>
</center>
</body>
</html>
