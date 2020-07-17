<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap4/bootstrap.min.css">
</head>
<body>
<div class="container">
<center><div><img src="images/logo2.png" width="200px" height="200px" > </div></center>
 <div class="bg-light m-5 p-5">
 <center><h1>Reset Password</h1></center>
  <form method="post" action="resetpasswordbackend.php">
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email"  class="form-control" placeholder="enter your email">
        </div> 
        
        <div class="form-group">
            <label for="exampleInputPassword1">New Password</label>
            <input type="Password" name="npass" class="form-control"  placeholder="">
        </div> 
        <div class="form-group">
            <label for="exampleInputPassword1">Confrim Password</label>
            <input type="Password" name="cpass" class="form-control"  placeholder="">
        </div>
       
        <button type="submit" name="reset" class="btn btn-secondary">Reset Password</button>
    </form>
   </div>
</div>


<script src="Bootstrap4/jquery.min.js"></script>
<script src="Bootstrap4/popper.min.js"></script>
<script src="Bootstrap4/bootstrap.min.js"></script>
</body>
</html>