<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  #linker{
    text-decoration: none;
    }
    #linker:hover{
text-decoration:underline;

}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-image: url('pexels-drew-williams-2453658.JPG');
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 30px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
	float: left;
  background-color: #04AA6D;
  color: white;
}
.topnav a.act {
	float: left;
  color: white;
}
</style>
</head>
<body>
 
<div class="topnav">
	<a class="act" id="linker" href="user_edit.php"> <?php echo "Welcome ".$_SESSION["uname"];?>
  <a class="active" href="showitem1.php">Home</a>

  <a href="../home.html">Log Out</a>
  <a href="feedback.php">feedback</a>

  <a href="searchitem.php">category</a>
  <a href="bill.php">Cart</a>
</div>

<div style="padding-left:16px">
<br>
<br>
</div>

</body>
</html>
