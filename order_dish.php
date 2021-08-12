<?php session_start();
$err="";
$err1="";
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<style>
body {
  background-image: url('f19.jpg');
  background-repeat: no-4epeat;
  background-attachment: fixed;
  background-size: cover;
}
input,select{
width: 18%;
  padding: 10px 15px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 4px;
}
button,a{
  background-color: white;
  border: none;
  color: black;
  padding: 10px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
border-radius:15px;
}
b{
font-size:20px;
}
</style>


<title>
PLACE ORDER
</title>
<link rel="stylesheet" type="text/css" href="bstyle.css">
</head>
<body>

<div class="row">
<div class="col-sm-12">
<div class="div1">
 <center><h1 style="color:white" class="hdr"><u><i>ZOFTIG EATERY</i></u></h1></center>
</div>
</div>
</div>



<div class="row">
<div class="col-sm-12">
<center>
<div class="div-reg">
<h1 style="color:white"><i>PICK YOUR DISH</i></h1>
<form action="order_dish.php" method="POST" style="color:white">
   <p><b><i>USER_NAME</i></b>          : <input type="text"  name="user_name" required placeholder="USER_NAME"><br></p>
   <label for="food"><b><i>FOOD</i></b> &emsp;&emsp;&emsp; &emsp; &nbsp;:</label>

<select name="food" id="food">
  <option value="margherita">Margherita</option>
  <option value="formaggio">Formaggio</option>
  <option value="chicken">Chicken</option>
  <option value="pineapple'o'clock">Pineapple'o'clock</option>
  <option value="meat town hot">Meat Town Hot</option>
  <option value="parma new">Parma New</option>
  <option value="lasagna popular">Lasagna Popular</option>
  <option value="ravioli">Ravioli</option>
  <option value="spaghetti classica">Spaghetti Classica</option>
  <option value="seafood pasta">Seafood Pasta</option>
  <option value="today's soup seasonal">Today's Soup Seasonal</option>
  <option value="bruschetta">Bruschetta</option>
  <option value="garlic bread">Garlic bread</option>
  <option value="tomozzarella">Tomozzarella</option>
</select>
   
   <p><b><i>QUANTITY</i></b>   &emsp;   : <input type="text"  name="quantity" required placeholder="QUANTITY"><br></p>
   <button type="submit" name="submit" value="submit">CONFIRM</button> 
</form>
</div>
</center>
</div>
</div>

<div style="text-align:center">    
  <br><a href="place_order.php">BACK</a>
</div>


<p> <?php echo"$err"; echo"$err1"; ?> </p> 
<?php
$conn= mysqli_connect("localhost","root","","restaurant_db") or die ("error connecting to database");
$uer_name="";
$food="";
$quantity="";



if(isset($_POST['submit']))
{
 $user_name=$_POST['user_name'];
 $food=$_POST['food'];
 $quantity=$_POST['quantity'];

 $stmt = $conn->prepare("INSERT INTO cust_orders VALUES(?,?,?)");
 $stmt->bind_param("ssi",$user_name,$food,$quantity);
    if($stmt->execute())
    {
        echo '<script>alert("Order confirmed")</script>';
    }
    else
    {
        $err="error uploading Details";
    }
    
 }

?>

</body>
</html>
