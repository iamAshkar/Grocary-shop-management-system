<?php
session_start();
include('adminmenu.php');
?>
<html>
<head>
<style>
.card input[type=submit]{
  border: none;
  outline: 0;
  padding: 12px;
  color: black;
  background-color: #e2e2e0;

  text-align: center;
  cursor: pointer;
  width: 20%;
  font-size: 18px;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-image: url('../Assets/supermarket.jpg');
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}

</style>
</head>

<body bgcolor="black" text="white">
  <div class="card">
<center>
<form action="addproduct.html">
<input type="submit" value="ADD PRODUCT"> <br> <br>
</form>
<form action="goto_update.php">
<input type="submit" value="UPDATE PRODUCT"> <br>
</form>
<form action="inventorytable.php">
<input type="submit" value="ITEMS"> <br>
</form>
<form action="userdetails.php">
<input type="submit" value="USER DETAILS"> <br>
</form>
<form action="viewsale.php">
<input type="submit" value="SALES DETAILS"> <br>
</form>
<form action="view_feedbacks.php">
<input type="submit" value="USER FEEDBACKS"> <br>
</form>
<form action="logi.html">
<input type="submit" value="<<back"> <br>
</form>
</center>
</div>
</body>
</html>



