<?php
session_start();
// $name = "";
// $email = "";
if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $email = $_POST["email"];

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";
    $password = substr(str_shuffle($chars), 0, 3);
    $to = $email;
    $subject = 'your registration is completed';
    $message = 'Welcome' . $name . ''."<br>"
            . 'Your email and password is following :'
            . 'Email:' . $email . ''."<br>"
            . 'Your new password : ' . $password . ' '."<br>"
            . '. Now you can login with this email and password';
      // echo $password;
      $_SESSION['password'] = $password;
      $_SESSION['email'] = $email;
      $_SESSION['name'] = $name;

    // $headers = 'From : islahazamgarh@gmail.com' . $email . "\r\n";
    // if (mail($to, $subject, $message)) {
    //   // echo "send";
    //    header("Location: login.php");
    // }
    // else
    // {
    //   // echo "false";
    //    header("Location: signin.php");
    // }

    // echo $password;

}
print_r($_SESSION);
?>
<?php require 'profile.php'; ?>
<?php require 'head.php' ?>
<!-- <div class="container"> -->
<div class="row justify-content-center">
  <div class="col-md-4 mt-5 bg-light rounded">
    <h1 class="text-center font-weight-bold text-primary">Sigin Form:</h1>
    <hr class="bg-light">
    <!-- <h5 class="text-center text-success"> <?php echo $name." ".$email  ?></h5> -->
    <form action="" method="post" id="form-box" class="p-2">
      
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
      </div>
      
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
      </div>
      
      <div class="form-group">
        <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
      </div>
    </form>
  </div>
</div>