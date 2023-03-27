<html>
<body>
<center> 
       
    <style>
        
.card{
               width:18rem;
               background:rgb(179, 175, 175);
               padding: 10px;
               margin-top: 30px;
               float: center;
               margin-left: 50px;
               color:white;
          }
          .card input[type=submit]{
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

          </style>
<?php
session_start();
include('usermenu.php');

$uname=$_SESSION["uname"];
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
$query="select * from register where uname='$uname'";
$result=mysql_query($query,$con);
$row=mysql_fetch_array($result);
{
    $name=$row["name"]; 
    $mobileno=$row["mobileno"];
    $address=$row["address"];

}
$query1="select * from login where uname='$uname'";
$result1=mysql_query($query1,$con);
$row1=mysql_fetch_array($result1);
{
    $password=$row1["password"];
}
?>
<div class="card">
<h1>edit your profile</h1>   


<form method="POST" action="user_update.php">
<table>
<input type="hidden" value="<?php echo $uname; ?>"name="uname">
<tr>
<td> Name</td>
<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="text" name="password" value="<?php echo $password; ?>"></td>
</tr>
<td>Mobile</td>
<td><input type="text" name="mobileno" value="<?php echo $mobileno; ?>"pattern="[89][0-9]{9}"></td>
</tr><tr>
<td>Address</td>
<td><input type="text" name="address" value="<?php echo $address; ?>"></td>
</tr><tr>
<tr>
<td>
<input type="submit" value="update"></td>
</tr>
</table>
</div>
</form>
</center>
</body>
</html>



