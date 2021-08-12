<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<style>
body {
  background-image: url('images/f19.jpg');
  background-repeat: no-4epeat;
  background-attachment: fixed;
  background-size: cover;
}
#ri{
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
}
h1{
color:white;
text-align:center;
padding-right:30px;
}
p{
color:white;
font-size:20px;
text-align:center;
padding-right:30px;
}

a{
color:;
text-decoration:none;
font-size:150%;
}
ul{
list-style-type:none;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 15px;
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
  float: right;
}
</style>

<title>
PLACE YOUR ORDER
</title>
<link rel="stylesheet type="text/css" " href="bstyle.css">
</head>
<body >


<div class="topnav">
  <div class="topnav-left">
    <a href="INDEX.php"><i>BACK</i></a>
  </div>
  <div class="topnav-right">
    <a href="ORDER_DISH.php"><i>PLACE ORDER</i></a>
    <a href="index.php"><i>LOGOUT</i></a>
  </div>
 <div class="topnav-right">
    <a href="UPDATE.php"><i>UPDATE ORDER</i></a>
    
  </div>
<div class="topnav-right">
    <a href="CANCEL.php"><i>CANCEL ORDER</i></a>
   
  </div>
</div>
    <div>
      <h1><i><b><u>MENU</u> </i></b>
      <i><h1><b>Margherita</b> <span>$80</span></h1>
      <p >Fresh tomatoes, fresh mozzarella, fresh basil</p>
     
   
      <h1><b>Formaggio</b> <span>$100</span></h1>
      <p>Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
    
      
      <h1><b>Chicken</b> <span>$250</span></h1>
      <p>Fresh tomatoes, mozzarella, chicken, onions</p>
     

      <h1><b>Pineapple'o'clock</b> <span>$210</span></h1>
      <p>Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
      

      <h1><b>Meat Town</b> <span >Hot!</span><span>$300</span></h1>
      <p>Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p>
     
      <h1><b>Parma</b> <span>New</span><span>$150</span></h1>
      <p>Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p>
   
      <h1><b>Lasagna</b> <span>Popular</span> <span>$130</span></h1>
      <p>Special sauce, mozzarella, parmesan, ground beef</p>
      
   
      <h1><b>Ravioli</b> <span>$140</span></h1>
      <p>Ravioli filled with cheese</p>
      
      
      <h1><b>Spaghetti Classica</b> <span>$70</span></h1>
      <p>Fresh tomatoes, onions, ground beef</p>


      <h1><b>Seafood pasta</b> <span>$200</span></h1>
      <p>Salmon, shrimp, lobster, garlic</p>
    
      <h1><b>Today's Soup</b> <span>Seasonal</span><span>$100</span></h1>
      <p>Ask the waiter</p>
    
      <h1><b>Bruschetta</b> <span>$170</span></h1>
      <p>Bread with pesto, tomatoes, onion, garlic</p>
     
      
      <h1><b>Garlic bread</b> <span>$30</span></h1>
      <p>Grilled ciabatta, garlic butter, onions</p>
     
      
      <h1><b>Tomozzarella</b> <span>$40</span></h1>
      <p>Tomatoes and mozzarella</p></i>
    </div>


<div style="text-align:center">    
  <br><a id="ri" href="INDEX.php">Back</a>
</div>




</body>
</html>
