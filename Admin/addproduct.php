<html>
<center>
<?php
//$pid=$_POST["pid"];
$pname=$_POST["pname"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];
$type=$_POST["dropdown"];
$image = $_FILES['image']['name'];
$image_tmp_name = $_FILES['image']['tmp_name'];
$image_folder = '../uploaded_img/'.$image;
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
$query="insert into inventory values(' ','$pname','$price','$quantity','$type','$image')";
if(mysql_query($query,$con))
{
   move_uploaded_file($image_tmp_name,$image_folder);
   $message[] = 'Game added succesfully';
echo "Item added";
}
else{
   $message[] = 'Could not add the Game';
}

mysql_close($con);
?>
<form action="addproduct.html">
<input type="submit" value="<<back"> <br>
</form>
</body>
</center>
</html>
