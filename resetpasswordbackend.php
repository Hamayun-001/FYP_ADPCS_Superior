<?php
$email = $_POST['email'];
$npass  = $_POST['npass'];
$cpass  = $_POST['cpass'];
if (empty($email)|| empty($npass)|| empty($cpass)) {
header('location:resetpasswordfrontend.php?reset=empty');
}
else {
if ($npass == $cpass) {

		$conn=mysqli_connect('localhost','root','','e_commerce');
		$s = "SELECT * from user where email = '$email' ";
		$result= mysqli_query($conn,$s);
		$num = mysqli_num_rows($result);
		if ($num == 1) {
			$reg="UPDATE user set pass = '$npass' where email = '$email'";
			mysqli_query($conn,$reg);
			echo "<script>alert('Password has been changed successfully.')</script>";
			echo"<script>window.open('plogin.html','_self')</script>";
		}
		else{
			echo "<script>alert('email not found.')</script>";
			echo"<script>window.open('resetpasswordfrontend.php','_self')</script>";
		}

}
	else{
			echo "<script>alert('password do not match.')</script>";
			echo"<script>window.open('resetpasswordfrontend.php','_self')</script>";
	}
 }?>
