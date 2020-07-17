<?php
session_start();
if(!isset($_SESSION['name'])){
echo"<script>window.open('index.php','_self')</script>";
}
include("functions/functions.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<link rel="stylesheet" href="Bootstrap4/bootstrap.min.css">
</head>

<body>

<div class="container">
	<div class="w-100 bg-info mt-5 ml-0">
     
     <div class="bg-danger text-white" style="width: 25%; float: left" >
     <ul style="display: inline-block;text-decoration: none;list-style: none">
     	<li><img src="images/<?php  echo $_SESSION['avatar']; ?>" width="100%"  class="" style=""></li>
		 <li class="bg-dark" style="text-align: center"><?php  echo $_SESSION['name']; ?></li>
     	<li style="text-align: center"><?php  echo $_SESSION['email']; ?></li>
     	<li style="text-align: center"><?php  echo $_SESSION['contact']; ?></li>
     	<li style="text-align: center"><?php  echo $_SESSION['address']; ?></li>
     	<a href="logout.php"><li style="text-align: center">Logout</li></a>
     </ul>
     
     </div>
     <div style="display: inline-block;width: 75%">
     	<center><h1 style="">Order Details</h1></center>
     	<h3>Pending </h3>
     	<?php checkout(); ?>
     	<h3>Received </h3>
     </div>
     
	</div>
</div>
<script src="Bootstrap4/jquery.min.js"></script>
<script src="Bootstrap4/popper.min.js"></script>
<script src="Bootstrap4/bootstrap.min.js"></script>
</body>
</html>