<html>
  <head>
  <style>
.card{
width: 18rem;
margin: 10px;
margin-left: 75px;
padding: 10px;
float: left;
height: 18rem;
}
.heading{
  text-align: center;
}
.body-card{
  text-align: center;
}
.card button:hover {
  opacity: 0.7;
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

  </head>

<body>

    <?php
    session_start();
    include('usermenu.php');
    $con = mysql_connect("localhost", "root", "toor");
    if (!$con) {
      die("failed to connect" . mysql_error($con));
    }
    $db = mysql_select_db("project_13", $con);
    if (!$db) {
      die("can't connect to database" . mysql_error($con));
    }
    
    ?>


    <h1 class="heading"> Products</h1>

<center>
    <?php
$type=$_POST["type"];
 echo $type;
 
    $query = "select * from inventory where type='$type'";
    $result = mysql_query($query, $con);
    while ($row = mysql_fetch_array($result)) {
    ?>
    </center>
      <form method="POST" action="addtocart.php?itemid=<?php echo $row['pid']; ?>">

        <div class="card">
          <img src="../uploaded_img/<?php echo $row['image']; ?>" alt="" style="width:100%">
          <div class="body-card">
          <h3><?php echo $row['pname']; ?></h3>
          <h4>Stock left : <?php echo $row['quantity']; ?></h4>
          <div class="price"><?php echo $row['price']; ?>/kg</div>
          <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
          <input type="hidden" name="pame" value="<?php echo $row['pname']; ?>">
          <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
          <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
          Enter the Quantity<br><br>
          <input type="text" name="quantity" pattern="[0-9]*[.]?[0-9]+" required><br><br>
          <input type="submit" value="Add to Cart">
          </div>
          <br><br>
        </div>
      </form>




    <?php
    }
    mysql_close($con);
    ?>


</body>

</html>