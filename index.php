<?php session_start(); ?>
<?php $err1=""; $err2=""; ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<style>
#logo{ 
    border-radius: 25px;
    border: 1px solid white; 
    width: 100px;
    height: 100px; 
}
body {
  background-image: url('images/f11.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.GFG {
           
            background-color: white;
            border: 2px solid back;
            color: black;
            padding: 5px 10px;
            text-align: center;
            font-size: 20px;
            margin: 10px 30px;
            cursor: pointer;
        }
.k{
margin-top:170px;
font-size: 20px;

}
#ru{
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
  border-radius:15px;
}
.topnav {
  overflow: hidden;
  background-color: rgba(0,0,0,.3);
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;2
}
</style>
<meta charset="UTF-8">
<title>
LOGIN
</title>
<link rel="stylesheet" type="text/css" href="bstyle.css">
</head>
<body>
<div class="topnav">
  <div class="topnav-right">
    
    <a href="SEE_ORDERS.php"><i>FOR_STAFF_USE </i></a>
  </div>
  <div class="topnav-right">
    
    <a href="MENU.php"><i>MENU</i></a>
  </div>
</div>
<div class="k">
<div class="row">
<div class="col-sm-12">
<div class="div1">
 <center><h1 style="color:white;" class="hdr" >ZOFTIG EATERY</h1></center>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<center>
<div class="div-acc">

<a id="ru" href="register.php">Don't have an account?</a>
<br>
<a id="ru" href="login.php">LOGIN</a>
</center>
<?php echo "$err1";?><br>
<?php echo "$err2";?>
</p>
</div>
</center>
</div>
</div>
</div>
</body>
</html>
