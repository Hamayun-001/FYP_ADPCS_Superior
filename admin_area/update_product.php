<?php 
include("includes/db.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update_Product</title>
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
			padding: 20px 45px;
 				 width: 1060px;
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
		<center><a href="index.php"><img src="product_images/Curved-Arrow-PNG-Transparent-HD-Photo.png" width="100px" height="100px" ><h1 style="display: inline-block">Back to the Admin Panel</h1></a></center>
		<div class="main" >
			<div class="product">
				
		<table style="border-radius: 10px; border-bottom: 2px solid black;margin-bottom: 5px " >
			<tr align="center"><th colspan="7"><h1>Update_Products</h1></th></tr>
		<tr>
			
			<th class="bg-danger p-2" style="width:40px;display: inline-block">ID</th>
			<th class="bg-info p-2" style="width:70px;display: inline-block">TITLE</th>
			<th class="bg-danger p-2" style="width:105px;display: inline-block">CATEGORY</th>
			<th class="bg-info p-2" style="width:110px;display: inline-block">S_CATEGORY</th>
			<th class="bg-danger p-2" style="width:75px;display: inline-block">BRAND</th>
			<th class="bg-info p-2" style="width:70px;display: inline-block">PRICE</th>
			<th class="bg-danger p-2" style="width:150px;display: inline-block">DESCRIPTION</th>
			<th class="bg-info p-2" style="width:80px;display: inline-block">C_IMAGE</th>
			<th class="bg-success p-2" style="width:150px;display: inline-block">UPLOAD_IMAGE</th>
			<th class=" p-2" style="width:80px;display: inline-block"></th>
			</tr>
			
			<?php
		$conn = mysqli_connect('localhost','root','','e_commerce');
		$db = "SELECT * FROM products as pro INNER JOIN Brands as br ON pro.brand_id = br.brand_id INNER JOIN categories as cate ON pro.cat_id = cate.cat_id";
		$connect_query = mysqli_query($conn,$db);
		while($rows=mysqli_fetch_array($connect_query)){
			$pro_id = $rows['product_id'];
			$name = $rows['product_title'];
			$category = $rows['cat'];
			$sub_category = $rows['cat_title'];
			$brand = $rows['brand_title'];
			$image = $rows['product_img'];
			$price = $rows['product_price'];
			$desc = $rows['product_desc'];
			
		?>
		<form action="update_product.php" method="post">

		<table class='border' style='display:inline-block;float:left'>
			<tr>
			<td><input class='bg-warning p-2 form-control text-black' style='width:40px;display: inline-block;font-size:10px;font-weight: bolder' type="text" name="id" value="<?php echo $pro_id; ?>"></td>
			<td>
			<input type='text' name='title' class='bg-info p-2 form-control text-white' style='width:70px;display: inline-block;font-size:10px' value='<?php echo $name; ?> '></td>
			<td><input type='text' name='category' class='bg-info p-2 form-control text-white' style='width:100px;display: inline-block;font-size:10px' value='<?php echo $category; ?>'></td>
			<td><input type='text' name='s_category' class='bg-info p-2 form-control text-white' style='width:110px;display: inline-block;font-size:10px' value='<?php echo $sub_category; ?>'></td>
			<td><input type='text' name='brand_name' class='bg-info p-2 form-control text-white' style='width:70px;display: inline-block;font-size:10px' value='<?php echo $brand; ?>'></td>
			<td>
			<input type='text' name='price' class='bg-warning p-2 form-control' style='width:70px;display: inline-block;font-size:10px;font-weight: bolder' value='<?php echo $price?>'>
			</td>
			<td>
			<textarea name='desc' class='bg-success p-2 form-control text-white'  style='width:150px;display: inline-block;font-size:12px '><?php echo $desc ?></textarea></td>
			<td>
			<td  class='bg-warning p-2 ' style='width:70px;display: inline-block'>
			<?php echo "<img src='product_images/$image' width='50px' height='50px'>"; ?></td>
				
			<td class='bg-danger p-2 ml-2 ' style='width:150px;display: inline-block;overflow: hidden'>
				<input type="file" name ="u_image" value="Upload File" style="width:150px; padding: 0px;font-size: 7px; "  class="bg-danger p-2 text-white"></td>	
			</tr>
		</table>
			<input  type='submit' name='update' class='btn btn-primary ml-3 mt-3' value='UPDATE'>
		</form>
	<?php 

		}
		

?>

<?php 
		if(isset($_POST['update'])){
		$pro_id=$_POST['id'];
		$pro_title=$_POST['title'];
			$category = $_POST['category'];
			$sub_category = $_POST['s_category'];
			$brand =$_POST['brand_name'];
		$pro_price=$_POST['price'];
		$pro_desc=$_POST['desc'];
		$pro_img=$_POST['u_image'];	
		$con = mysqli_connect('localhost','root','','e_commerce');
		$update_query="
		UPDATE
			products as pro JOIN Brands as br ON br.brand_id=pro.brand_id  JOIN categories as cate ON pro.cat_id = cate.cat_id
		SET 
			pro.product_title = '$pro_title', pro.product_img='$pro_img', pro.product_price = '$pro_price', pro.product_desc = '$pro_desc',br.brand_title = '$brand',cate.cat= '$category',cate.cat_title = '$sub_category'
		WHERE
		pro.product_id='$pro_id'" ;
		$run = mysqli_query($con,$update_query);
			if($run){
			echo"<script>alert('Data has been updated')</script>";
			echo"<script>window.open('update_product.php','_self')</script>";
		}
	}
	

			
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