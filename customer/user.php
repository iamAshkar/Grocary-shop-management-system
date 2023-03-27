<?php
session_start();
include('usermenu.php');
?>

<html>
<head>
<style>
input [type=submit]
{
display: inline-block;
background-color: coral;
font-size: 20px;
padding: 26px 13px;
border-radius: 10px;
border: 3px solid black;
color: black;
transition-duration: 0.4s;
width: 10%;
height: 7%;
cursor: pointer;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-image: url('supermarket.jpg');
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}

</style>
<body  text="white">
<link rel="stylesheet " type="text/css" href="usermenu.css">
<div class="main">
<center>
<form action="showitem1.php">
<input type="submit" value="ITEMS"> <br> <br>
</form>
<form action="searchitem.php">
<input type="submit" value="SEARCH ITEM"> <br> <br>
</form>
<form action="bill.php">
<input type="submit" value="ADD TO CART"> <br> <br>
</form>
<form action="user_edit.php">
<input type="submit" value="USER PROFILE"> <br> <br>
</form>
</center>
</body>
</html>
