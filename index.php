<?php
require 'init.php';
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_again=$_POST['password_again'];
	if(empty($username) || empty($password) || empty($password_again)){
		echo "fields marked asterisk are require";
	}elseif($password !== $password_again){
		echo "your passwords not match<br>";
	}else{
		$register="INSERT INTO `users`(`username`,`password`) values ($username','$password')";
		mysqli_query($con,$register);
		echo "log in sucessful";
	}
}

?>
<form action="" method="post">
	username:*<input type="text" name="username"><br>
	password:*<input type="password" name="password"><br>
	password_again:*<input type="password" name="password_again"><br>
	<input type="submit" value="log in">

	




</form>