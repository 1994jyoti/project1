<?php 
	
	$date_time=$_POST["date_time"];
	$location=$_POST["location"];
	$partnerid=$_POST["partnerid"];
	


		include('connect.php');
		$sql="INSERT INTO dateplan(date_time,location,partnerid)VALUES('".$date_time."','".$location."','".$partnerid."')";
		$res=mysqli_query($con,$sql);
		if($res)
		{   
		  
		   	echo"your details has been recorded.You will receive an email for further information.";
		   

       
		}
		else
		{
			
          echo "fail";	
	    }
?>