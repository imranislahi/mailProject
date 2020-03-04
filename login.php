<?php
session_start();
// print_r($_SESSION);
if (isset($_POST['submit']) && !empty($_POST['email'])
&& !empty($_POST['password'])) {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  if($email == $_SESSION['email'] && $password == $_SESSION['password'])
  {
  
  
  $_SESSION['valid'] = true;
  $_SESSION['timeout'] = time();
    header("Location:myAcc.php");
  }
  else
  {
    echo "Please correct email or password";
  }
}
?>
<?php require 'profile.php'; ?>
<?php  require 'head.php' ?>
<div class="row justify-content-center">
  <div class="col-md-4 mt-5 bg-light rounded">
    <h1 class="text-center font-weight-bold text-primary">Login Form:</h1>
    <hr class="bg-light">
    <!-- <h5 class="text-center text-success"> </h5> -->
    <form action="#" method="post" id="form-box" class="p-2">
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
      </div>
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
      </div>
      
      <div class="form-group">
        <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="login">
      </div>
    </form>
  </div>
</div>