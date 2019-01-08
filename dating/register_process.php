<?php 
	session_start();
	$_SESSION['register_id']=$_POST["username"];

	$username=$_POST["username"];
	$password=$_POST["password"];
	$passwordConfirm=@$_POST["passwordConfirm"];
	
	$offer=@$_POST["offer"];
	$email=@$_POST["email"];


		include('connect.php');

				
		      $sql="INSERT INTO register(username,password,offer,email)VALUES('".$username."','".$password."','".$email."','".$offer."')";
		      $res=mysqli_query($con,$sql);
		      if($res)
		      {
		         
  
                 header('location:login.php?registration=successfull');

	       	  }
	        	else
		     {
			
               echo "fail";	
	          }
?>