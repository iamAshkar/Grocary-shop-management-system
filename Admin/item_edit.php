<html>
    <center>
<body bgcolor="black" text="white">

<?php
echo "UPDATE PRODUCT";
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
$pname=$_POST["pname"];
$query="select * from inventory where pname='$pname'";
$result=mysql_query($query,$con);
$row=mysql_fetch_array($result);
{
$pid=$row["pid"];
$pname=$row["pname"];
$price=$row["price"];
$quantity=$row["quantity"];

}
?>
<form method="POST" action="item_update.php">
<table>
<table>
<input type="hidden" value="<?php echo $pid; ?>"name="pid">
<tr>
<td>Name</td>
<td><input type="text" name="pname" value="<?php echo $pname; ?>" ></td>
</tr><br> 
<td>Price</td>
<td><input type="text" name="price" value="<?php echo $price; ?>" pattern="[0-9]*[.]?[0-9]+"></td>
</tr><tr><br> 
<td>Quantity</td>
<td><input type="text" name="quantity" value="<?php echo $quantity; ?>" pattern="[0-9]*[.]?[0-9]+"></td>
</tr><tr><br> 

</tr>
<tr>
<td>
<input type="submit" value="update"></td>
</tr>
</table>
</form>

</body>
</center>
</html>


