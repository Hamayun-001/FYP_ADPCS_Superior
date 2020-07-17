<?php
session_start();

if(isset($_POST['submit'])){
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$_SESSION['email'] = $email;
if (empty($email)|| empty($pass)) {
header('location:plogin.html?login=empty');
}
else {
$conn = mysqli_connect('localhost','root','','e_commerce');
$s = "SELECT * from user where email = '$email' && pass = '$pass' ";
$result = mysqli_query($conn,$s);
if (mysqli_num_rows($result) != 1) {
	header('location:plogin.html?error=1#');
 }
 else{
	while($reg4=mysqli_fetch_array($result)) {
		$fname = $reg4['fname'];
		$avatar = $reg4['avatar'];
		$email = $reg4['email'];
		$address = $reg4['address'];
		$cntno = $reg4['contactno'];
	}
				$_SESSION['name']= $fname;
				$_SESSION['email']= $email;
				$_SESSION['address']= $address;
				$_SESSION['contact']= $cntno;
				$_SESSION['avatar']= $avatar;
				header('location:online.php');
				     }

}
}
?>