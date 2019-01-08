<?php 
 
 $id=$_GET['id'];
 include('connect.php');
		$sql="DELETE FROM profile WHERE id='".$id."'";
		$res=mysqli_query($con,$sql);
		if($res)
		{
		//echo "deleted";
			$_SESSION['msg']="Deleted Successfully..!!";
			header("location:admin-members-profile.php");
			echo "<script>location='admin-members-profile.php</script>";
			exit;
		}
		else
		{
			echo "fail".mysqli_error($con);
			$_SESSION['msg']="Sorry! Failed to Delete..!!";
			header('location:admin-members-profile.php');
			echo "<script>location='admin-members-profile.php'</script>";
			exit;
		}
 
 
?>