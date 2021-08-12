<?php
session_start();
if (isset($_POST['submit']))
{
	$conn = mysqli_connect("localhost","root","","restaurant_db");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$sql = "SELECT * FROM res_users WHERE mail = '$mail' AND pass = '$pass';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
		$user = mysqli_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user['mail'];
			$message='Logged in successfully';
                                                    header('location:PLACE_ORDER.php');
		}
		else{
			$message = 'Wrong email or password.';
		}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
input{
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
<center><h2 style="color:white;"><i>USER LOGIN</i></h2></center>
</div>
</div>
</div>
	
	<div class="row">
        <div class="col-sm-12">
        <center>
        <div class="div-acc">
	<form id="login" action="login.php" onsubmit="return validate()" method="post" name="login">
	
	
		<b><i>Enter E-Mail ID</i>&ensp;  &ensp;:&ensp;<input type="text" id="email" size="30" maxlength="30" name="mail" placeholder="Mail"/><br>
		<i>Enter Password</b></i>&ensp;  &ensp;:&ensp;<input type="password" id="pw" size="30" maxlength="30" name="pass" placeholder="Password"/><br><br>
	
	
	<input type="Submit" value="LOGIN" name="submit" id="submit" class="button">
	</form></div></div</div>
<div style="text-align:center">    
  <br><a href="index.php">BACK</a>
</div>
</body>
</html>
