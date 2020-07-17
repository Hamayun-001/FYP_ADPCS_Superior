<?php
include("includes/db.php");
?>
<html>
	<head>
		<title>Insert_Product</title>
	<link rel="stylesheet" href="Bootstrap4/bootstrap.min.css">
	</head>
	
	<style>
	
		.main{
			display: inline-block;
			margin-top: 50px;
			background: #eee;
			padding: 10px;
 				 width: 900px;
 				 border: 2px solid black;
			border-radius: 10px;
 				 overflow:auto;
			margin-bottom: 10px;
		}
		.insert_product{
			display: inline-block;
			float: left;
			padding: 10px;
			border: 1px solid black;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}
		.operations{
			display: inline-block;
			border: 2px solid gray;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
			margin:50px 50px;
			background: #eee;
			padding: 10px;
			width: 300px;
		}
		
	</style>
	
	<body>
		<div class="container">
		<center><a href="index.php"><img src="product_images/Curved-Arrow-PNG-Transparent-HD-Photo.png" width="100px" height="100px" ><h1 style="display: inline-block">Back to the Admin Panel</h1></a>
	<form method="post" action="insert_product.php" enctype="multipart/form-data">
		<div class="main">
		<div  class="insert_product">
		<table  class="" >
			<tr align="center"><td colspan="2" ><h1>Insert Product</h1></td></tr>
		<tr>
			<td>Product Name :</td>
			<td ><input type="text" name="product_title" class="form-control" placeholder="Name"></td>
		</tr>
			<tr>
			<td>Category :</td>
			<td>
        		<select 
				   class="btn btn-secondary  dropdown dropdown-toggle" 
				   name="product_cat"
				   data-toggle="dropdown">
					
					<option class="dropdown-menu">Select Category</option>
					<optgroup label="Men">
				<?php
				$conn = mysqli_connect('localhost','root','','e_commerce'); 
				$db = "SELECT * from categories where cat='men'";
				
				$run = mysqli_query($conn,$db);
				
				while($row=mysqli_fetch_array($run))
				{
					$cat_id = $row['cat_id'];
					$cat_title = $row['cat_title'];
					
			echo"<option class='dropdown-item text-white' value='$cat_id'>$cat_title</option>";
				}
				
				?></optgroup>
					<optgroup label="Women">
				<?php
				$conn = mysqli_connect('localhost','root','','e_commerce'); 
				$db = "SELECT * from categories where cat='women'";
				
				$run = mysqli_query($conn,$db);
				
				while($row=mysqli_fetch_array($run))
				{
					$cat_id = $row['cat_id'];
					$cat_title = $row['cat_title'];
					
			echo"<option class='dropdown-item text-white' value='$cat_id'>$cat_title</option>";
				}
				
				?>
					</optgroup>
				 </select>
           <td>
		</tr>
			<tr>
			<td>Brand :</td>
			<td>
				<select 
				   class="btn btn-secondary  dropdown dropdown-toggle" 
				   name="Product_brand" 
				   data-toggle="dropdown">
					<option class="dropdown-menu">Select Brand</option>
					
				<?php
				$conn = mysqli_connect('localhost','root','','e_commerce'); 
				$db = "SELECT * from brands";
				
				$run = mysqli_query($conn,$db);
				
				while($row=mysqli_fetch_array($run))
				{
					$brand_id = $row['brand_id'];
					$brand_title = $row['brand_title'];
					
			echo"<option class='dropdown-item text-white' value='$brand_id'>$brand_title</option>";
				}
				
				?>
				 </select>
 </td>
		</tr>
			<tr>
			<td>Product price :</td>
			<td><input type="text" name="product_price" class="form-control" placeholder="Price"></td>
		</tr>
		<tr>
			<td>Product img :</td>
			<td><input type="file" name="product_img" class="form-control-file"></td>
		</tr>
		<tr>
			<td>Product Description :</td>
			<td><textarea rows="10" cols="30" name="product_desc" class="form-control" placeholder="Describe the product"></textarea></td>
		</tr>
		<tr>
			<td>Product kewords :</td>
			<td><input type="text" name="product_key" class="form-control" placeholder="Special_words"></td>
		</tr> 
		<tr align="center">
		</tr>	
		<tr align="center"><td colspan="2">
			<input type="submit" name="submit" class="btn btn-success w-50 mt-3">
			</td></tr>
		
		</table>
			</div>
		<div class="operations" style="">
			<center><h3>ADD_Category</h3></center>
			<div class="form-group mt-4 m-1">
			<label class="float-left" style="font-size: 15px">Category :</label>
			<select 
				   class="btn btn-secondary dropdown dropdown-toggle ml-3 mb-2" 
				   name="insert_main_cat" 
				   data-toggle="dropdown">
					<option class="dropdown-menu">Select Category</option>
					<option class="dropdown-item text-white">Men</option>
					<option class="dropdown-item text-white">Women</option>
				 </select>
			<label style="font-size: 15px "float-left"">Category_title :</label>
			<input class="form-control" type="text" name="insert_cat" placeholder="enter" style="display: inline-block;width: 158px">
			<input type="submit" name="submit_category" class="btn btn-success mt-1 float-right ">
			</div>
			</div>
			
			<div class="operations" style="">
			<center><h3>ADD_Brand</h3></center>
			<div class="form-group mt-4 m-1">
			<label class="">Brand_title:</label>	
			<input class="form-control" type="text" name="insert_brand" placeholder="enter" style="display: inline-block;width: 178px">
			<input type="submit" name="submit_brand" class="btn btn-success mt-1 float-right">
			</div>
			</div>
			
		</div>
		</form>
			
		</div>
	<script src="Bootstrap4/jquery.min.js"></script>
<script src="Bootstrap4/popper.min.js"></script>
<script src="Bootstrap4/bootstrap.min.js"></script>
	</body>
</html>
<?php
	
	if(isset($_POST['submit'])){
		
		
		//text data variables
		
		$p_title = $_POST['product_title'];
		$p_cat = $_POST['product_cat'];
		$p_brand = $_POST['Product_brand'];
		$p_price = $_POST['product_price'];
		$p_desc = $_POST['product_desc'];
		$p_key = $_POST['product_key'];	
		$p_status = 'on';

		//image names
		
		$p_img = $_FILES['product_img']['name'];
		
		//temp image name
		
		$temp_name = $_FILES['product_img']['tmp_name'];
		
		if($p_title==''OR $p_cat=='Select Category'OR $p_brand=='Select Brand'OR $p_price=='' OR $p_img=='' OR $p_desc=='' OR $p_key==''){
			echo"<script>alert('Insert Product Feilds are empty!')</script>";
			echo"<script>window.open('insert_product.php','_self')</script>";
		}
		else{
			//uploading images to its folder
			move_uploaded_file($temp_name,"product_images/$p_img");
		$db = mysqli_connect('localhost','root','','e_commerce');
		$insert_products = "insert into products ( brand_id,cat_id,product_title,product_img,
		product_price,product_desc) 
		values ('$p_brand','$p_cat','$p_title','$p_img','$p_price','$p_desc')";
			
			$run = mysqli_query($db,$insert_products);
			
			if($run){
				echo"<script>alert('Data inserted successfully...!')</script>";
			echo"<script>window.open('insert_product.php','_self')</script>";
			}
			else {

				echo"<script>alert('Data insertion was Unsuccessfull...!')</script>";
			echo"<script>window.open('insert_product.php','_self')</script>";
			}
			
		}
	
	}
	
	
	//insert category

	if(isset($_POST['submit_category'])){
		
		$p_main_cat = $_POST['insert_main_cat'];
		$p_cat = $_POST['insert_cat'];	
		
		if($p_main_cat=='Select Category' OR $p_cat=='')
		{
			echo"<script>alert('please Insert  both categories!')</script>";
			echo"<script>window.open('insert_product.php','_self')</script>";
		}
		
		else{
			
		$db = mysqli_connect('localhost','root','','e_commerce');
		$insert_products = "insert into categories (cat,cat_title) values ('$p_main_cat','$p_cat')";
			
			$run = mysqli_query($db,$insert_products);
			
			if($run){
				echo"<script>alert('Category inserted successfully...!')</script>";
			echo"<script>window.open('insert_product.php','_self')</script>";
			}
			
		
		}
	}
	
	
	
	//insert band
	
if(isset($_POST['submit_brand'])){
		
		$p_brand = $_POST['insert_brand'];	
		
		if($p_brand=='')
		{
			echo"<script>alert('please enter Brand_name!')</script>";
			echo"<script>window.open('insert_product.php','_self')</script>";
		}
		
		else{
			
		$db = mysqli_connect('localhost','root','','e_commerce');
		$insert_products = "insert into brands (brand_title) values ('$p_brand')";
			
			$run = mysqli_query($db,$insert_products);
			
			if($run){
				echo"<script>alert('Brand_name inserted successfully...!')</script>";
			echo"<script>window.open('insert_product.php','_self')</script>";
			}
			
		
		}
	}

?>