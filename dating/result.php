<?php
session_start();

echo $_SESSION['firstMessage'];
echo $_SESSION['secondMessage'];
 
$city=$_SESSION['firstMessage'];
?>

<?php  include 'header.php'; 
/*
 if (isset($_POST['city']) and isset($_POST['height']) and isset($_POST['gender']) and isset($_POST['complexion']) and isset($_POST['religion']) and isset($_POST['age'])){

$city=$_POST["city"];
	$height=$_POST["height"];
	$gender=$_POST["gender"];
	$complexion=$_POST["complexion"];
	$religion=$_POST["religion"];
	$age=$_POST["age"];

$query = "SELECT * FROM `profile` WHERE city='$_SESSION['firstMessage']'";
 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['city'] = $city;
}else{

$fmsg = "Invalid Login Credentials.";
}
}

if (isset($_SESSION['city'])){
$city = $_SESSION['city'];
*/
?>

  
