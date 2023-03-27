<html>
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
 


        </div>

      </div>
    </nav>



        <div class="container">
          <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
          </div>
        </div>
        <br>

<h2 class="text-center"> Thank you for Ordering '! The ordering process is now complete.</h2>

<?php 
  $num1 = rand(100000,999999); 
  $num2 = rand(100000,999999); 
  $num3 = rand(100000,999999);
  $number = $num1.$num2.$num3;
?>

<h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo "$number"; ?></span> </h3>

        </body>

</html>