
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

<html>
  <style>
.card input[type=submit]{
  border: none;
  outline: 2;
  padding: 12px;
  color: black;
  background-color: #e2e2e0;

  text-align: center;
  cursor: pointer;
  width: 20%;
  font-size: 18px;
}
</style>

 
        <div class="container">
          <div class="jumbotron">
            <h1>Choose your payment option</h1>
          </div>
        </div>
        <br>
<h5 class="text-center">including all service charges. (no delivery charges applied)</h5>
<br>
<div class="card">
    <a href="bill.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></a>
  <a href="buy.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
  <a href="COD.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
</h1>
</div>



<br><br><br><br><br><br>
        </body>
</div>
</html>