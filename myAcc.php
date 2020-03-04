<?php require 'head.php'; ?>
<?php require 'profile.php'; ?>
<?php
 session_start();
 echo "<h1>Welcome to myAccout</h1>"."Thanks ".$_SESSION['name']."<br>"."Your Email: ".$_SESSION['email'];

 if (isset($_POST['logout'])) {
 	session_unset();
 	session_destroy();
 	echo header("Location: login.php");
 }
?>
<?php require 'head.php'; ?>
<form action="" method="post">
	<input type="submit" name="logout" value="logout">
</form>
<?php require 'pic.php'; ?>