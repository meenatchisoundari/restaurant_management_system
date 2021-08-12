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
  font-size:20px;
  font-style:italics;
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
#ab{
margin-top:140px;
font-family:"Times New Roman";
}
#ac{
margin-top:10px;
font-family:"Times New Roman";
}


</style>


<title>
REGISTRATION
</title>
<link rel="stylesheet" type="text/css" href="bstyle.css">
</head>
<body>


<div class="row">
<div class="col-sm-12">
<div class="div1">
 <center><h1 style="color:white" class="hdr" id="ac">CREATE AN ACCOUNT</h1></center>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
</div>
</div>
<div class="row">
<div class="col-sm-6">
<center>
<div class="div-reg">
<h2 style="color:white" id="an">ENTER YOUR DETAILS</h2>
<form action="register.php" method="POST" style="color:white">

   <i><p>First Name: <input type="text"  name="name" required placeholder="First Name" ><br></p>
   <p>Last Name: <input type="text"  name="last_name" required placeholder="Last Name" ><br></p>
   <p>Age  &ensp; &ensp;  &ensp; &ensp;  : <input type="text"  name="age" required placeholder="Age" ><br></p>
    <p>Phone&ensp;  &ensp; &ensp; : <INPUT type="TEXT" name="mob"  maxlength="10" placeholder="Mobile number"><br></p>
<p>Gender   &ensp;&ensp; &ensp; : <input type="text"  name="gender" required placeholder="Gender" ><br></p>
   <p>Email ID&ensp; &ensp; : <input type="text"  name="mail" required placeholder="Mail ID" ><br></p>
   <p>Password &ensp; : <input type="text"  name="pass" required placeholder="Password" ><br></p>
   <button type="submit" name="submit" value="submit" >REGISTER</button> </i>
</p>
</form>
</div>
</center>
</div>
</div>
<center>
<div style="text-align:center">    
  <br><a href="index.php">BACK</a>
</div>

</center>
<p> <?php echo"$err"; echo"$err1"; ?> </p> 
<?php
$conn= mysqli_connect("localhost","root","","restaurant_db") or die ("error connecting to database");
$name="";
$last_name="";
$age="";
$mob="";
$gender="";
$mail="";
$pass="";



if(isset($_POST['submit']))
{
 $name=$_POST['name'];
$last_name=$_POST['last_name'];
 $age=$_POST['age'];
 $mob=$_POST['mob'];
 $gender=$_POST['gender'];
 $mail=$_POST['mail'];
 $pass=$_POST['pass'];
 $stmt = $conn->prepare("INSERT INTO res_users VALUES(?,?,?,?,?,?,?)");
 $stmt->bind_param("ssiisss",$name,$last_name,$age,$mob,$gender,$mail,$pass);
    if($stmt->execute())
    {
       echo '<script>alert("Registerd Successfully.You can login now")</script>';
    
    }
    else
    {
        $err="error uploading Details";
    }
    
 }

?>
</body>
</html>
