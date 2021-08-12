<?php
session_start();
if (isset($_POST['submit']))
{
	$conn = mysqli_connect("localhost","root","","restaurant_db");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
$user_name=$_POST['user_name'];
$food=$_POST['food'];
$sql = "DELETE FROM cust_orders WHERE user_name = '$user_name';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
		
		if(!empty($user)){
			$_SESSION['user_info'] = $user['user_name'];
			$message='success';
                                                   header('location:INDEX.php');
		}
		else{
			$message = 'Order cancelled.';
		}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CANCEL ORDER</title>
</head>
<style type="text/css">
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
input,select{
width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 4px;
}
body{
  background-image: url('f2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
 color:white;
}
#submit
{
width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 4px;
}
	
	.data	{
		color: white;
	}
</style>
<body>
<div class="row">
<div class="col-sm-12">
<div class="div1">
 <center><h1 style="color:white;" class="hdr" ><u><i>ZOFTIG EATERY</i></u> </h1></center>
<center><h2 style="color:white;"><i>CANCEL ORDER</i></h2></center>
</div>
</div>
</div>
	
	<div class="row">
        <div class="col-sm-12">
        <center>
        <div class="div-acc">
	<form action="CANCEL.php" onsubmit="return validate()" method="post" name="cancel">
		<b><i>USERNAME</i>&ensp;&ensp;&ensp;&ensp; &ensp;:&ensp;<input type="text" id="user_name" size="30" maxlength="30" name="user_name" placeholder="UserName"/><br>
		<br><br>
	
	<label for="food"><b><i>FOOD ORDERED</i></b> &nbsp;:</label>

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
</select><br><br>
	<input type="Submit" value="Submit" name="submit" id="submit" class="button">
	</form></div></div</div>
<div style="text-align:center">    
  <br><a href="PLACE_ORDER.php">BACK</a>
</div>
</body>
</html>