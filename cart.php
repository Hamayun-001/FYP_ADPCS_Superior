<?php
session_start();
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Website Design</title>
  <link rel="stylesheet" type="text/css" href="bootstrap4/bootstrap.min.css">

</head>
<body>
  <div class="col-25">
    <div class="container bg-light mt-5 shadow" style="box-shadow: rgba(0.0 0.0 0.0 0.5)">
    <center><h2>Order Details</h2></center>
		<table style="border-bottom:1px solid black" >
		<tr >
			<th style="display: inline-block;
						width: 150px;
						padding: 10px;">Name</th>
			<th style="display: inline-block;
						width: 150px;
						padding: 10px;">Quantity</th>
			<th style="display: inline-block;
						width: 150px;
						padding: 10px;">Price</th>
			<th style="display: inline-block;
						width: 150px;
						padding: 10px;">Total</th>
			<th style="display: inline-block;
						width: 150px;
						padding: 10px;">Product_image</th>
			<th >Mark</th>
			</tr>
		</table>
		<?php
		orderDetails();
		delete();
		?>
		<table style="border-bottom:1px solid black;display: inline-block" class="">
		<tr>
		<th style="margin:5px;font-size: 20px  ">Total items </th>
		<th style="margin:5px;font-size: 20px  ">Total Price</th>
			</tr>
			<tr>
		<th style="margin:5px;font-size: 15px"><?php countitems(); ?></th>
		<th style="margin:5px;font-size: 15px"><?php totalprice(); ?></th>
			</tr>
		</table>
		<form method="post" action="user_profile.php">
		<button type="submit" name="checkout" class="btn btn-success m-3 float-right">CheckOut</button></form>
		<a href="online.php"><button type="submit" name="" class="btn btn-warning  m-3 float-right">Continue Shopping</button></a>
   
    </div>
  </div>
</div>

<script src="Bootstrap4/jquery.min.js"></script>
<script src="Bootstrap4/popper.min.js"></script>
<script src="Bootstrap4/bootstrap.min.js"></script>
</body>
</html>
