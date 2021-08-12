<?php session_start(); ?>
<?php $err1=""; $err2=""; ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  
<meta charset="UTF-8">
<title>

</title>
<link rel="stylesheet" type="text/css" href="bstyle.css">
<style>

body {
  background-image: url('images/f11.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  color:white;
}
input{
width: 15%;
  padding: 10px 15px;
 
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 4px;

}
b{
font-size:20px;
}
button,a{
  background-color: white;
  border: none;
  color: black;
  padding: 10px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>

<body >



<div class="row">
<div class="col-sm-12">
<div class="div1">
 <center><h1 class="hdr" >ZOFTIG EATERY</h1></center>
</div>
</div>
</div>



<?php 
$con=mysqli_connect("localhost","root","","restaurant_db") or die("error connecting database");
$col="";
$user_name="";
$column="";
$value="";
if(isset($_POST['submit']))
{
$user_name=$_POST['user_name'];
$value=$_POST['value'];
$column=$_POST['col'];
}

if($column=="food")
{
  $col="food";

}
else if($column=="quantity")
{
    $col="quantity";
}

$query="UPDATE cust_orders SET $col=$value WHERE user_name='$user_name' " ;
if(mysqli_query($con,$query))
{
     echo '<script>alert("Updated Successfully")</script>';
}
else
{
    $err1=" ";
}
?>


<div class="row">
<div class="col-sm-12">
<center>
<div class="div-acc">
<h2>UPDATE ORDER DETAILS</h2>
<form  action="update.php" method="post">
<p><b><i>User_Name</i></b>          : <input type="text" name="user_name" placeholder="UserName" ><br>
<br><br>
<h><i>Update quantity of food ordered  </i></h><br><br>


<input style="font-size:10px;text-align:left;height:12px;width:12px;margin:5px;" id="quantity" type="radio" name="col" value="quantity">
<label style="text-align:left;font-size:13;" for="food"> QUANTITY</label><br>


<br><b><i>Update value&ensp;:&ensp;</i></b><input type="text" name="value" placeholder="value"><br><br>
<button  type="submit" name="submit" value="submit">CONFIRM</button>
</form>
 
<?php echo "$err1";?>
</p>
</div>
</center>
</div>
</div>

<div  class="row" style="text-align:center">
<div class="col-sm-12">
<div class="div2">    
<a href="PLACE_ORDER.php">Back</a>
</div>
</div>
</div>

</body>
</html>