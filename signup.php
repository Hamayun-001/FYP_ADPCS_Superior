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
 <center><h1>Sign Up</h1></center>
  <form method="post" action="signupbackend.php" enctype="multipart/form-data">
           <div class="form-group">
            <label for="exampleInputPassword1">Full Name</label>
            <input type="text" name="fname"  class="form-control" placeholder="Hamayun khan...">
        </div> 
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email"  class="form-control" placeholder="someone@example.com">
        </div> 
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="Password" name="pass" class="form-control"  placeholder="">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Confrim Password</label>
            <input type="Password" name="cpass" class="form-control"  placeholder="">
        </div>
       
        <div class="form-group">
            <label for="textArea">Address</label>
            <textarea name="address" id="textarea" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">City</label>
            <input type="text" name="city"  class="form-control" placeholder="Lahore..">
        </div> 
        <div class="form-group">
            <label for="exampleInputPassword1">State</label>
            <input type="text" name="state"  class="form-control" placeholder="Punjab...">
        </div> 
        <div class="form-group">
            <label for="exampleInputPassword1">Zip-Code</label>
            <input type="text" name="zip"  class="form-control" placeholder="54493...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Avatar</label>
            <input type="file" name="avatar"  class="form-control">
        </div> 
        
        <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
    </form>
    
   </div>
</div>


<script src="Bootstrap4/jquery.min.js"></script>
<script src="Bootstrap4/popper.min.js"></script>
<script src="Bootstrap4/bootstrap.min.js"></script>
</body>
</html>

