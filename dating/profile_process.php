<?php 
session_start();
	$name=$_POST["name"];
	$city=$_POST["city"];
	$height=$_POST["height"];
	$gender=$_POST["gender"];
	$complexion=$_POST["complexion"];
	$religion=$_POST["religion"];
	$age=$_POST["age"];

	$photo_path = $_FILES['photo_path']['name'];
	$type = $_FILES['photo_path']['type'];
	if ($photo_path!="")
	{
		if($type == 'image/jpg'||$type == 'image/jpeg'||$type == 'image/png')
		{
			$newImgDestination = 'profile_picture/'.uniqid().$photo_path;
			$imgSts= move_uploaded_file ($_FILES['photo_path']['tmp_name'] , $newImgDestination);
			 if($imgSts)
			 {
				
			 }
			 else
			 {
				
			 }
		}
		else
		{
			
		}
	}
	else {
		
				$_SESSION['msg']="Please select the photo..!!";
				header('location:profile.php');
				echo "<script>location='profile.php'</script>";
				exit;
				
	}
	
		include('connect.php');


		$sql="INSERT INTO profile(photo_path,name,height,age,city,complexion,gender,religion)VALUES('".$newImgDestination."','".$name."','".$height."','".$age."','".$city."','".$complexion."','".$gender."','".$religion."')";
		$res=mysqli_query($con,$sql);

		if($res)
		{  

			header('location:look.php');
		    
			$_SESSION['msg']="Uploaded Successfully..!!";
			
			exit;
		}
		else
		{
			
			$_SESSION['msg']="Sorry! Failed to Upload..!!";
			echo "fail";
			exit;
		}
?>