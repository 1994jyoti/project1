<?php 
$con = mysqli_connect('localhost','root','');
if (!$con) {
   die('Could not connect: ' . mysqli_error());
}
/*else{
echo 'Connected successfully<br>';
}*/

mysqli_select_db($con,"dating");


?>