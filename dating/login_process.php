<?php
session_start();
 require('connect.php');
 if (isset($_POST['username']) and isset($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `register` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['username'] = 'true';
}else{

$fmsg = "Invalid Login Credentials.";
}
}

if (isset($_SESSION['username'])){
	$_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

               header('location:profile.php?login=successfull');
 
}else{
		header('location:login.php?error');
}

?>