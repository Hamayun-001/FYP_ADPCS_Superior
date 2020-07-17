
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="Bootstrap4/bootstrap.min.css">
	</head>
<body>




	<?php
$con = mysqli_connect('localhost','root','','e_commerce');



//Order_Details_for view
function orderDetails(){
		$conn = mysqli_connect('localhost','root','','e_commerce');
		$db = "SELECT * FROM products pr INNER JOIN categories cat ON pr.cat_id=cat.cat_id INNER JOIN brands br ON pr.brand_id=br.brand_id";
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
			
		
		
		echo"<table class='border'>
			<tr>
			<td class='bg-warning p-2' style='width:40px;display: inline-block;font-size:10px'>$pro_id</td>
			<td class='bg-info p-2' style='width:70px;display: inline-block;font-size:10px'>$name</td>
			<td class='bg-info p-2' style='width:100px;display: inline-block;font-size:10px'>$category</td>
			<td class='bg-info p-2' style='width:110px;display: inline-block;font-size:10px'>$sub_category</td>
			<td class='bg-info p-2' style='width:70px;display: inline-block;font-size:10px'>$brand</td>
			<td class='bg-warning p-2' style='width:60px;display: inline-block;font-size:10px' >$price</td>
			<td class='bg-success p-2' style='width:150px;display: inline-block;font-size:10px'>$desc</td>
			<td>
			<td  class='bg-danger p-2' style='width:70px;display: inline-block'>
			<img src='product_images/$image' width='50px' height='50px'></td>
			</tr>
		</table>
		";
			
		}
		
	
}




//Order_Details_for_deletion
function orderDetailsfordelete(){
		$conn = mysqli_connect('localhost','root','','e_commerce');
		$db = "SELECT * FROM products";
		$connect_query = mysqli_query($conn,$db);
		while($rows=mysqli_fetch_array($connect_query)){
			$pro_id = $rows['product_id'];
			$name = $rows['product_title'];
			$cat = $rows['cat_id'];
			$sub_cat = $rows['cat_id'];
			$brand = $rows['brand_id'];
			$image = $rows['product_img'];
			$price = $rows['product_price'];
			$desc = $rows['product_desc'];
			$rating_img_1 = $rows['rating_img1'];
			$rating_img_2 = $rows['rating_img2'];
			$rating_img_3 = $rows['rating_img3'];
			$rating_img_4 = $rows['rating_img4'];
			$rating_img_5 = $rows['rating_img5'];
			
		
		
		echo"<table class='border bg-warning' style='display:inline-block;float:left'>
		<tr>
			<td class='bg-warning p-2' style='width:40px;display: inline-block;font-size:10px'>$pro_id</td>
			<td class='bg-info p-2' style='width:70px;display: inline-block;font-size:10px'>$name</td>
			<td class='bg-info p-2' style='width:100px;display: inline-block;font-size:10px'>$cat</td>
			<td class='bg-info p-2' style='width:110px;display: inline-block;font-size:10px'>$sub_cat</td>
			<td class='bg-info p-2' style='width:70px;display: inline-block;font-size:10px'>$brand</td>
			<td class='bg-warning p-2' style='width:60px;display: inline-block;font-size:10px' >$price</td>
			<td class='bg-success p-2' style='width:150px;display: inline-block;font-size:10px'>$desc</td>
			<td>
			<td  class='bg-danger p-2' style='width:70px;display: inline-block'>
			<img src='product_images/$image' width='50px' height='50px'></td>
			</tr>
		</table>
		<a href='delete_product.php?delete=$pro_id '><input  type='submit' name='submit' class='btn btn-danger ml-3 mt-3' value='DELETE'></a>
		";
			
		

		}
}





//funtion to count products
function countProducts(){
	global $con;
	
	$db = "select * from products ";
	$run = mysqli_query($con,$db);
		
		
	$count_items = mysqli_num_rows($run);
	echo $count_items;

}





	
//delete items
function delete(){
		if(isset($_GET['delete'])){
		$pro_id=$_GET['delete'];
			
		$con = mysqli_connect('localhost','root','','e_commerce');
		$delete_query="DELETE from products where product_id='$pro_id' ";
		$run = mysqli_query($con,$delete_query);
			echo"<script>window.open('delete_product.php','_self')</script>";
		}
	}

?>
	
	
		
<script src="Bootstrap4/jquery.min.js"></script>
<script src="Bootstrap4/popper.min.js"></script>
<script src="Bootstrap4/bootstrap.min.js"></script>
</body>
</html>