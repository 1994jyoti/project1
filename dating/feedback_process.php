<?php 
	
	$name=$_POST["name"];
	
	$view=$_POST["view"];
	$rate=$_POST["rate"];
	$comment=$_POST["comment"];
	


		include('connect.php');
		$sql="INSERT INTO feedback(name,view,rate,comment)VALUES('".$name."','".$view."','".$rate."','".$comment."')";
		$res=mysqli_query($con,$sql);
		if($res)
		{
		

         header('location:contact.php');
		}
		else
		{
			
          echo "fail";	
	    }
?>