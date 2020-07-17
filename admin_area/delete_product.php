<?php 
include("includes/db.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete_Product</title>
	<link rel="stylesheet" href="Bootstrap4/bootstrap.min.css">
</head>
	<style>
		body{
			margin: 0;
			background:;
		}
		.main{
		}
		.product{
			display: inline-block;
			margin-top: 50px;
			background: #eee;
			padding: 30px 40px;
 				 width: 900px;
 				 border: 2px solid black;
			border-radius: 10px;
 				 overflow:auto;
			float: left;
			margin-bottom: 10px;
		}
		
		.operations{
			display: inline-block;
			border: 2px solid gray;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
			margin:50px 50px;
			background: #eee;
			padding: 10px;
			width: 250px;
			text-align: center;
		}
	</style>
<body>
	<div class="container">
		<a href="index.php"><img src="product_images/Curved-Arrow-PNG-Transparent-HD-Photo.png" width="100px" height="100px" ><h1 style="display: inline-block">Back to the Admin Panel</h1></a>
		<div class="main" >
			<div class="product">
				
		<table style="border-radius: 10px; border-bottom: 2px solid black;margin-bottom: 5px " >
			<tr align="center"><th colspan="7"><h1>Delete_Products</h1></th></tr>
		<tr>
			<th class="bg-danger p-2" style="width:40px;display: inline-block">ID</th>
			<th class="bg-info p-2" style="width:70px;display: inline-block">TITLE</th>
			<th class="bg-danger p-2" style="width:100px;display: inline-block">CATEGORY</th>
			<th class="bg-info p-2" style="width:110px;display: inline-block">S_CATEGORY</th>
			<th class="bg-danger p-2" style="width:70px;display: inline-block">BRAND</th>
			<th class="bg-info p-2" style="width:60px;display: inline-block">PRICE</th>
			<th class="bg-danger p-2" style="width:150px;display: inline-block">DESCRIPTION</th>
			<th class="bg-info p-2" style="width:80px;display: inline-block">C_IMAGE</th>
			</tr>
			
			<?php
			
			orderDetailsfordelete();
			delete();
			
			?>
				</table>
				</div>
		</div>
			</center>
			
	
	</div>
	<script src="Bootstrap4/jquery.min.js"></script>
<script src="Bootstrap4/popper.min.js"></script>
<script src="Bootstrap4/bootstrap.min.js"></script>
</body>
</html>