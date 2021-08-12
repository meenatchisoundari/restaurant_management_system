<?php session_start();
$err="";
$err1="";
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<style>
body {
 background-image: url('images/f21.jpg');
  background-repeat: no-4epeat;
  background-attachment: fixed;
  background-size: cover;
  color:white;
  font-size:22px;
  font-style: italic;
}
a{
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


<title>
SEE ORDERS
</title>
<link rel="stylesheet" type="text/css" href="bstyle.css">
</head>
<body>
<div class="bg"></div>

<div class="row">
<div class="col-sm-12">
<div class="div1">
 <center><h1 style="color:white" class="hdr"><u>ZOFTIG EATERY</u></h1>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">
<div class="div1">
 <center><h2 style="color:white" class="hdr"><u>ORDER DETAILS</u></h2>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="div2">
<center>
<p> <?php echo"$err"; echo"$err1"; ?> </p> 
<?php

$connec = mysqli_connect("localhost","root","","restaurant_db") or die ("error connecting to database");
$sql = "SELECT * FROM cust_orders";
$result = $connec->query($sql);


if ($result->num_rows > 0) {
   echo "<table cellspacing=3 cellpadding=4 border=1 style=text-align:center>";
   echo "<tr>";
   echo "<th>USER_NAME</th>";
   echo "<th>FOOD</th>";
   echo "<th>QUANTITY</th>";
   echo "</tr>";
  while($row = $result->fetch_assoc()) {
    echo "<td> ".$row["user_name"]."</td>";
    echo "<td> ".$row["food"]."</td>";
    echo "<td> ".$row["quantity"]."</td>";
    echo "</tr>";
} 
echo "</table>";
}
else {
  echo "0 results";
}



$connec->close();

?>
</div>
</div>
</div>
<div style="text-align:center">    
  <br><a href="INDEX.php">BACK</a>
</div>



</body>
</html>