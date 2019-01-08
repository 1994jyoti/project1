<?php 
	
	$username=$_POST["username"];
	$password=$_POST["password"];


		include('connect.php');
		$sql="INSERT INTO users(username,password)VALUES('".$username."','".$password."')";
		$res=mysqli_query($con,$sql);
		if($res)
		{
		
echo "pass";
		}
		else
		{
			
echo "fail";	
	}
?>