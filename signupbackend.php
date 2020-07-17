<!DOCTYPE html>

<?php
 session_start();
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 $cpass = $_POST['cpass'];
 $address = $_POST['address'];
 $city = $_POST['city'];
 $state = $_POST['state'];
 $zip = $_POST['zip'];
 $avatar =$_FILES['avatar']['name'];
 $temp_name = $_FILES['avatar']['tmp_name'];

 if (empty($fname)|| empty($email)|| empty($address)|| empty($pass)|| empty($cpass)|| empty($city)|| empty($state)|| empty($zip)|| empty($avatar)) {
	 
		echo"<script>alert('Feilds=empty')</script>";
exit();
}
elseif (!preg_match("/^[a-zA-Z]*$/",$fname)) {
		echo"<script>alert('First Name=invalid_char')</script>";
		echo"<script>window.open('signup.php','_self')</script>";
		exit();
	}
	else {
 if ($pass==$cpass) {
$conn = mysqli_connect('localhost','root','','e_commerce') or die("sorry we cannot connect"); 
 $s = "SELECT * from user where email = '$email'";
 $result = mysqli_query($conn,$s);
 $num = mysqli_num_rows($result);
 if ($num == 1) {
		echo"<script>alert('Username Already exist')</script>";
		echo"<script>window.open('signup.php','_self')</script>";
 	 }
 	 else{
			move_uploaded_file($temp_name,"images/$avatar");
 	 	$reg = "INSERT into user(fname,email,pass,avatar,address,city,state,zip) values ('$fname','$email','$pass','$avatar','$address','$city','$state','$zip')";
 	 	$run = mysqli_query($conn,$reg);
		 if($run){
			 
			 $con = mysqli_connect('localhost','root','','e_commerce');
			 $s1 = "SELECT * from user where email = '$email'";
			 $res = mysqli_query($con,$s1);
 			if (mysqli_num_rows($res) == 1) {
				
				while($reg4=mysqli_fetch_array($res)) {
		         $fname = $reg4['fname'];
		         $avatar = $reg4['avatar'];
				}
			}
				else{
					echo"<script>alert('User NOt exist')</script>";
				}
			 
				$_SESSION['name']= $fname;
				$_SESSION['avatar']= $avatar;
			 
		echo"<script>alert('Registration Successfull..!')</script>";
		echo"<script>window.open('online.php','_self')</script>";
			 							}   
		 }
 	 }
 	else{
		echo"<script>alert('password do not match')</script>";
		echo"<script>window.open('signup.php','_self')</script>";

 	}

}?>