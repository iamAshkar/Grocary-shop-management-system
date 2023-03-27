<html>
<body bgcolor="black" text="white">

<?php
$uname=$_POST["uname"];
$name=$_POST["name"];
$mobileno=$_POST["mobileno"];
$address=$_POST["address"];
$password=$_POST["password"];
$type='customer';
$con=mysql_connect("localhost","root","toor");
if(!$con)
{
die("not connect".mysql_error($con));
}
$db=mysql_select_db("project_13",$con);
if(!$db)
{
die("connection failed".mysql_error($con));
}
$query="insert into login values('$uname','$password','$type')";
if(mysql_query($query,$con))
{
echo "record added ";
}
else
{
echo "error".mysql_error($con);
}
$query1="insert into register values ('$uname','$name','$mobileno','$address','$password')";
if(mysql_query($query1,$con))
{
echo " successfully";
}
else
{
echo "error".mysql_error($con);
}
mysql_close($con);
?>
<form action="logi.html">
<input type="submit" value="<<back"> <br>
</form>
</body>
</html>

