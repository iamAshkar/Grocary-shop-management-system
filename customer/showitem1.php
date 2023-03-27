
<html>
<body>
<center>
  <style>
    body{
  background: #cfcdcd;
}
.card{
               width:18rem;
               background:rgb(27, 30, 31);
               padding: 10px;
               margin-top: 30px;
               float: left;
               margin-left: 10px;
               color:white;
          }
          .card-title{
               margin-top: 10px;
          }
          
          svg{
               height: 12px;
          }
     

.product{
    grid-template-columns:repeat(auto-fit,35rem);
      display: grid;
        }
        

.price {
  color: white;
  font-size: 22px;
}

.card input[type=submit]{
  border: none;
  outline: 0;
  padding: 12px;
  color: black;
  background-color: #e2e2e0;

  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}


.heading{
  text-align: center;
}
.body-card{
  text-align: left;
}
.card button:hover {
  opacity: 0.7;
}

</style>



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
//$username=$_SESSION["username"];
//$pname=$_POST["pname"]; 
	?>
  <div class="search">
  <input type="text" name="search" id="find" placeholder="Search products..." onkeyup="search()">
  <button type="submit">Search</button>
</div>



<h1 class="heading">Available Products</h1>


<div class="product">
 <?php
	$query="select * from inventory";
	$result=mysql_query($query,$con);
	while($row=mysql_fetch_array($result))
	{
		?>
     <div class="view">

      
      <form method="POST" action="addtocart.php?itemid=<?php echo $row['pid'];?>">  
      <div class="card" style="width: 18rem;">


           <img src="../uploaded_img/<?php echo $row['image']; ?>" alt="" width="270rem" height="150rem">
         
            <h3><?php echo $row['pname']; ?></h3>
            <h4>Stock left : <?php echo $row['quantity']; ?></h4>
            <div class="price"><?php echo $row['price']; ?>/kg</div>
            <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
            <input type="hidden" name="pame" value="<?php echo $row['pname']; ?>">
            <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
            <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
             
		 
    Enter the Quantity
    <br><br>
    <input type="text"  name="quantity" pattern="[0-9]*[.]?[0-9]+" required><br><br>
	<input type="submit" value="Add to Cart" >
  </div>
  <br><br>
  </div>
    </form>


		
<?php
	}
mysql_close($con);	
?>
<!-- javascript -->
<script type="text/javascript">
function search() {
let filter = document.getElementById('find').value.toUpperCase();
let item = document.querySelectorAll('.view');
let l = document.getElementsByTagName('h3');
for(var i = 0;i<=l.length;i++){
let a=item[i].getElementsByTagName('h3')[0];
let value=a.innerHTML || a.innerText || a.textContent;
if(value.toUpperCase().indexOf(filter) > -1) {
item[i].style.display="";
}
else
{
item[i].style.display="none";
}
}
}
</script>
</body>
</html>



