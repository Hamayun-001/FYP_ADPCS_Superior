<?php
session_start();
if(!isset($_SESSION['name'])){
echo"<script>window.open('index.php','_self')</script>";
}
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Website Design</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<div class="main">
	<div class="tops">
	<div class="topbar"></div>
<div class="social_icon">
		<div class="container">
			<div class="icon">
				<a href="https://facebook.com"><img src="images/icon1.png"></a>
				<a href="https://dribble.com"><img src="images/icon2.png"></a>
				<a href="https://twittr.com"><img src="images/icon3.png"></a>
				<a href="https://gmail.com"><img src="images/icon4.png"></a>
				<a href="https://vimeo.com"><img src="images/icon5.png"></a>
			</div>
			<div class="header_right">
				
				<a href="user_profile.php" ><div style="display:inline-block;float: left">
				
				<img src="images/<?php  echo $_SESSION['avatar']; ?>" width="30px"; style="border-radius:25px">
				
				</div>
				
				<div style="display:inline-block;margin: 5px;color: white">
				<?php  echo $_SESSION['name']; ?>
				</div></a>
				
				<a href="cart.php" style="text-decoration: none">
					<div class="cart_btn">
					<img src="images/cart.png">
					<span>Cart (<?php countitems(); ?>)</span>
				</div>
					</a>
			</div>
		</div>
	</div>
</div>
	
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="online.php"><img src="images/logo.png"></a>
			</div>
			<div class="navbar">
				<a href="online.php" id="home"
				   style="background:rgba(100,37,13,1.00)">HOME</a>
				<a href="onlinemen.php">MEN</a>
				<a href="onlinewomen.php">WOMEN</a>
				<a href="#"> ABOUT </a>
				<a href="contact.php" id="contact">CONTACT</a>
			</div>
		</div>
	</div>
		<div class="product">

		<center><h1 style="color:#999;
						font-family: Baskerville,Palatino Linotype, Palatino,Century Schoolbook L,Times New Roman, serif;
						font-size:50px;
						margin:0px 0px 40px 0px;
			">

					MEN COLLECTION 
				</h1></center>

		<div class="container">
			<div class="product_section_title">LATEST ARRIVALS IN BOUTIQUE</div>

			
			<?php
				onlineproductsformen();
				cart();
			?>

		</div>
	</div>
		
	<div class="brand">
		<div class="container">
			<div class="product_section_title">OUR MOST IMPORTANT PUBLISHERS</div>

			<div class="brand_image">
				<img src="images/brand1.jpg">
				<img src="images/brand2.jpg">
				<img src="images/brand3.jpg">
				<img src="images/brand4.jpg">
				<img src="images/brand5.jpg">
				<img src="images/brand6.jpg">
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<div class="column3">
				<h4>Little about us</h4>
				<p><b>Sed posuere</b> consectetur  est at. 
				Nulla vitae elit libero, a pharetra. 
				Lorem ipsum <b>dolor sit</b> amet, conse
				ctetuer adipiscing elit.</p>
				<br>
				<h4>Socialize with us</h4>
				<p><img src="images/icon6.png"><img src="images/icon7.png"><img src="images/icon8.png"><img src="images/icon9.png"><img src="images/icon10.png"></p>
			</div>
			<div class="column3 second-column">
				<h4>Our Archives</h4>
				<p>March 2012</p>
				<p>February 2012</p>
				<p>January 2012</p>
				<p class="not">December 2011</p>
			</div>
			<div class="column3 third-column">
				<h4>Popular post</h4>
				<p><img src="images/image5.jpg">
				<span><b>Great Album</b><br><small><img src="images/icon11.png"> 12 COMMENTS</small></span>
				</p>
				<p><img src="images/image6.jpg">
				<span><b>Great Album</b><br><small><img src="images/icon11.png"> 12 COMMENTS</small></span>
				</p>
			</div>
			<div class="column3 four-column">
				<h4>Search our Site</h4>
				<p><input type="search" class="search" placeholder="Enter Search ..." name=""></p>
				<br>
				<h4>Tag Cloud</h4>
				<p><a href="#">Audio CD</a> <a href="#">Video</a> <a href="#">Playlist</a><a href="#">Avantgard</a> <a href="#">Matancholic</a></p>
			</div>
		</div>
	</div>

	<div class="bottom">
		<div class="container">
			<div class="column6">
				<a href="#">Home</a>
				<a href="#">Portfolio</a>
				<a href="#">Sitemap</a>
				<a href="#">Contact</a>
			</div>
			<div class="column6 copyright">
				<p>SNEHA'S @2013 by PremiumCoding | All Rights Reserved</p>
			</div>
		</div>
	</div>

</div><!--main-->
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/jquery.cycle.all.js"></script>
<script src="js/jquery.cycle2.carousel.js"></script>
<script>
	$('.slideshow').cycle({
		next: '#next',
		prev: '#prev'
	});
</script>
</body>
</html>