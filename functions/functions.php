		<?php

				$conn=mysqli_connect('localhost','root','','e_commerce');



// function for prodcuts
function products(){
	global $conn;
				$db="select * from products";
				$run= mysqli_query($conn,$db);
				while($row=mysqli_fetch_array($run)){
					$pro_id=$row['product_id'];
					$pro_title=$row['product_title'];
					$pro_img=$row['product_img'];
					$product_desc=$row['product_desc'];
					$pro_price=$row['product_price'];
					echo"
					<div class='product_one'>
					<div class='product_img'>
					<img src='admin_area/product_images/$pro_img'>
					<span>SALE</span>
					</div>
					<div class='product_text'>
					<h4><i>$pro_title</i></h4>
					</div>
					<div class='product_price'>
					<div class='price' style='background:grey'>
					<p style='color:black;display:inline-block;font-size:25px;font-weight:bold;margin:0px 5px'>Price :</p><i>$pro_price</i><span>/-Rs</span> 
					</div>
					
					<div class='button'>
						<a href='details.php?pro_id=$pro_id'><input type='submit' name='details' value='Details' ></a>
					</div>
					<div class='button'>
						<a href='index.php?add_cart=$pro_id'><input type='submit' name='submit' value='ADD TO CART' ></a>
					</div>
					
					
					</div>
					
					</div>
					";
					
				}
				
}





// function for online_prodcuts
function online_products(){
	global $conn;
				$db="select * from products";
				$run= mysqli_query($conn,$db);
				while($row=mysqli_fetch_array($run)){
					$pro_id=$row['product_id'];
					$pro_title=$row['product_title'];
					$pro_img=$row['product_img'];
					$product_desc=$row['product_desc'];
					$pro_price=$row['product_price'];
					echo"
					<div class='product_one'>
					<div class='product_img'>
					<img src='admin_area/product_images/$pro_img'>
					<span>SALE</span>
					</div>
					<div class='product_text'>
					<h4><i>$pro_title</i></h4>
					</div>
					<div class='product_price'>
					<div class='price' style='background:grey'>
					<p style='color:black;display:inline-block;font-size:25px;font-weight:bold;margin:0px 5px'>Price :</p><i>$pro_price</i><span>/-Rs</span> 
					</div>
					
					<div class='button'>
						<a href='details.php?pro_id=$pro_id'><input type='submit' name='details' value='Details' ></a>
					</div>
					<div class='button'>
						<a href='online.php?add_cart=$pro_id'><input type='submit' name='submit' value='ADD TO CART' ></a>
					</div>
					
					
					</div>
					
					</div>
					";
					
				}
				
}

//products for men
function productsformen(){
	global $conn;
				$db="select * from products pr INNER JOIN categories ca ON pr.cat_id=ca.cat_id
				where ca.cat='men' ";
				$run= mysqli_query($conn,$db);
				while($row=mysqli_fetch_array($run)){
					$pro_id=$row['product_id'];
					$pro_title=$row['product_title'];
					$pro_img=$row['product_img'];
					$product_desc=$row['product_desc'];
					$pro_price=$row['product_price'];
					echo"
					<div class='product_one'>
					<div class='product_img'>
					<img src='admin_area/product_images/$pro_img'>
					<span>SALE</span>
					</div>
					<div class='product_text'>
					<h4><i>$pro_title</i></h4>
					</div>
					<div class='product_price'>
					<div class='price' style='background:grey'>
					<p style='color:black;display:inline-block;font-size:25px;font-weight:bold;margin:0px 5px'>Price :</p><i>$pro_price</i><span>/-Rs</span> 
					</div>
					
					<div class='button'>
						<a href='details.php?add_cart=$pro_id'><input type='submit' name='details' value='Details' ></a>
					</div>
					
					<div class='button'>
						<a href='index.php?add_cart=$pro_id'><input type='submit' name='submit' value='ADD TO CART' ></a>
					</div>
					
					
					</div>
					
					</div>
					";
					
				}
				
}




//online products for men
function onlineproductsformen(){
	global $conn;
				$db="select * from products pr INNER JOIN categories ca ON pr.cat_id=ca.cat_id
				where ca.cat='men' ";
				$run= mysqli_query($conn,$db);
				while($row=mysqli_fetch_array($run)){
					$pro_id=$row['product_id'];
					$pro_title=$row['product_title'];
					$pro_img=$row['product_img'];
					$product_desc=$row['product_desc'];
					$pro_price=$row['product_price'];
					echo"
					<div class='product_one'>
					<div class='product_img'>
					<img src='admin_area/product_images/$pro_img'>
					<span>SALE</span>
					</div>
					<div class='product_text'>
					<h4><i>$pro_title</i></h4>
					</div>
					<div class='product_price'>
					<div class='price' style='background:grey'>
					<p style='color:black;display:inline-block;font-size:25px;font-weight:bold;margin:0px 5px'>Price :</p><i>$pro_price</i><span>/-Rs</span> 
					</div>
					
					<div class='button'>
						<a href='details.php?add_cart=$pro_id'><input type='submit' name='details' value='Details' ></a>
					</div>
					
					<div class='button'>
						<a href='onlinemen.php?add_cart=$pro_id'><input type='submit' name='submit' value='ADD TO CART' ></a>
					</div>
					
					
					</div>
					
					</div>
					";
					
				}
				
}




//product details

	function productdetails(){
if(isset($_GET['pro_id'])){
	
	$pro_id = $_GET['pro_id'];
	$con = mysqli_connect('localhost','root','','e_commerce');
			$rdb= "select * from products where product_id=$pro_id";
			$run = mysqli_query($con,$rdb);
			$count = mysqli_num_rows($run);
	while($row=mysqli_fetch_array($run)){
					$pro_id=$row['product_id'];
					$pro_title=$row['product_title'];
					$pro_img=$row['product_img'];
					$product_desc=$row['product_desc'];
					$pro_price=$row['product_price'];
					echo"
					<div class='product_one'>
					<div class='product_img'>
					<img src='admin_area/product_images/$pro_img'>
					<span>SALE</span>
					</div>
					<div class='product_text'>
					<h4><i>$pro_title</i></h4>
					</div>
					<div class='product_price'>
					<div class='price' style='background:grey'>
					<p style='color:black;display:inline-block;font-size:25px;font-weight:bold;margin:0px 5px'>Price :</p><i>$pro_price</i><span>/-Rs</span> 
					</div>
					
					<div class='button'>
						<a href='index.php?add_cart=$pro_id'><input type='submit' name='submit' value='ADD TO CART' ></a>
					</div>
					
					
					</div>
					
					</div>
					";
					
				}
			
			
}
	
	
}



//products for women
function productsforwomen(){
	global $conn;
				$db="select * from products pr INNER JOIN categories ca ON pr.cat_id=ca.cat_id
				where ca.cat='women' ";
				$run= mysqli_query($conn,$db);
				while($row=mysqli_fetch_array($run)){
					$pro_id=$row['product_id'];
					$pro_title=$row['product_title'];
					$pro_img=$row['product_img'];
					$product_desc=$row['product_desc'];
					$pro_price=$row['product_price'];
					echo"
					<div class='product_one'>
					<div class='product_img'>
					<img src='admin_area/product_images/$pro_img'>
					<span>SALE</span>
					</div>
					<div class='product_text'>
					<h4><i>$pro_title</i></h4>
					</div>
					<div class='product_price'>
					<div class='price' style='background:grey'>
					<p style='color:black;display:inline-block;font-size:25px;font-weight:bold;margin:0px 5px'>Price :</p><i>$pro_price</i><span>/-Rs</span> 
					</div>
					
					<div class='button'>
						<a href='details.php?add_cart=$pro_id'><input type='submit' name='details' value='Details' ></a>
					</div>
					<div class='button'>
						<a href='index.php?add_cart=$pro_id'><input type='submit' name='submit' value='ADD TO CART' ></a>
					</div>
					
					
					</div>
					
					</div>
					";
					
				}
				
}




////////////


//online products for women
function onlineproductsforwomen(){
	global $conn;
				$db="select * from products pr INNER JOIN categories ca ON pr.cat_id=ca.cat_id
				where ca.cat='women' ";
				$run= mysqli_query($conn,$db);
				while($row=mysqli_fetch_array($run)){
					$pro_id=$row['product_id'];
					$pro_title=$row['product_title'];
					$pro_img=$row['product_img'];
					$product_desc=$row['product_desc'];
					$pro_price=$row['product_price'];
					echo"
					<div class='product_one'>
					<div class='product_img'>
					<img src='admin_area/product_images/$pro_img'>
					<span>SALE</span>
					</div>
					<div class='product_text'>
					<h4><i>$pro_title</i></h4>
					</div>
					<div class='product_price'>
					<div class='price' style='background:grey'>
					<p style='color:black;display:inline-block;font-size:25px;font-weight:bold;margin:0px 5px'>Price :</p><i>$pro_price</i><span>/-Rs</span> 
					</div>
					
					<div class='button'>
						<a href='details.php?add_cart=$pro_id'><input type='submit' name='details' value='Details' ></a>
					</div>
					<div class='button'>
						<a href='onlinewomen.php?add_cart=$pro_id'><input type='submit' name='submit' value='ADD TO CART' ></a>
					</div>
					
					
					</div>
					
					</div>
					";
					
				}
				
}


////////////



//function to add items in cart
function cart(){
	if(isset($_GET['add_cart'])){
		
session_start();
		if(!isset($_SESSION['name'])){
			echo"<script>alert('Login First..!')</script>";
		echo"<script>window.open('plogin.html','_self')</script>";
		}
		else{
		global $conn;
		$pro_id = $_GET['add_cart'];
		$ip_add = getRealIpAddr();
		$db = "select * from cart where pro_id='$pro_id' AND ip_add='$ip_add' ";
		$check = mysqli_query($conn,$db);
		if(mysqli_num_rows($check)>0){
			echo"<script>window.open('online.php','_self')</script>";
		}
		else{
		$insert_product = "insert into cart (pro_id,ip_add,qty) values ('$pro_id','$ip_add','1')";
		$run = mysqli_query($conn,$insert_product);
			
			echo"<script>window.open('online.php','_self')</script>";
		}
	}
	}
	
}




//funtion to count items
function countitems(){
	if(isset($_GET['add_cart'])){
	global $conn;
		$ip_add = getRealIpAddr();
	
	$db = "select * from cart where ip_add='$ip_add' ";
	$run = mysqli_query($conn,$db);
		
		
	$count_items = mysqli_num_rows($run);
	echo $count_items;
}
	else{
		
	global $conn;
		$ip_add = getRealIpAddr();
	
	$db = "select * from cart where ip_add='$ip_add' ";
	$run = mysqli_query($conn,$db);
		
		
	$count_items = mysqli_num_rows($run);
		
	echo $count_items;
	}
}



//funtion to count products
function countProducts(){
	global $conn;
	
	$db = "select * from products ";
	$run = mysqli_query($conn,$db);
		
		
	$count_items = mysqli_num_rows($run);
	echo $count_items;

}




// get ip address
function getRealIpAddr()  {
    if ( !empty( $_SERVER['HTTP_CLIENT_IP'] ) )
    {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif( !empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) )
    //to check ip passed from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }




//Order_Details
function orderDetails(){
		$conn = mysqli_connect('localhost','root','','e_commerce');
		$db = "SELECT * FROM cart,products WHERE cart.pro_id = products.product_id";
		$connect_query = mysqli_query($conn,$db);
		while($rows=mysqli_fetch_array($connect_query)){
			$pro_id = $rows['pro_id'];
			$name = $rows['product_title'];
			$qty = $rows['qty'];
			$price = $rows['product_price'];
			$total= $qty * $price;
			$image = $rows['product_img'];
			
		
		
		echo"<table style='border-bottom:1px solid black;margin-left:35px'>
			<tr>
			<td style='padding: 10px;
					   width: 150px;
					   height: 100px;
					   display: inline-block'>$name</td>
			<td ><input  type='text' name='quantity' value='$qty'></td>
			<td style='padding: 10px;
					   width: 150px;
					   height: 100px;
					   display: inline-block'>$price</td>
			<td style='padding: 10px;
					   width: 150px;
					   height: 100px;
					   display: inline-block'>$total</td>
			<td style='padding: 10px;
					   width: 150px;
					   height: 100px;
					   display: inline-block'><img src='admin_area/product_images/$image' width='120px' height='80px' ></td>
					   <td><form method='post' action='functions/functions.php'><input type='checkbox' name='check[]' value='$pro_id'></form></td>
			<td style='padding:10px'>
				<a href='cart.php?delete=$pro_id'>
				<button style='background:red;color:white' type='submit' name='submit'>Remove</button>
				
				</a>
			</td>
			</tr>
		</table>";
			
		}
		
	
}



//function for checkout
	function checkout(){
if(isset($_POST['checkout'])){
		
		foreach($_POST['check'] as $check){
			
			$con=mysqli_connect('localhost','root','','e_commerce');
			$db = "select * from products where product_id='$check'  ";
			$connect_query=mysqli_query($con,$db);
			while($rows=mysqli_fetch_array($connect_query)){
			$pro_id = $rows['product_id'];
			$name = $rows['product_title'];
			$price = $rows['product_price'];
			$image = $rows['product_img'];
				echo $price;
			
		}
	}
	}
	}

//delete items
function delete(){
		if(isset($_GET['delete'])){
		$ip_add = getRealIpAddr();
		$pro_id=$_GET['delete'];
		global $conn;
		$delete_query="DELETE from cart where pro_id='$pro_id' ";
		$run = mysqli_query($conn,$delete_query);
			echo"<script>window.open('cart.php','_self')</script>";
		}
	}




//function for total price
function totalprice(){
	
			$total = 0;
		$conn = mysqli_connect('localhost','root','','e_commerce');
		$db = "SELECT * FROM cart,products WHERE cart.pro_id = products.product_id";
		$connect_query = mysqli_query($conn,$db);
		while($rows=mysqli_fetch_array($connect_query)){
			$pro_id = $rows['pro_id'];
			$price =array($rows['product_price']);
			$sum_price=array_sum($price);
			$total+=$sum_price;
}

			echo $total;
}

?>


