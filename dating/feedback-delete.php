<?php 
 
 $id=$_GET['id'];
 include('connect.php');
		$sql="DELETE FROM feedback WHERE id='".$id."'";
		$res=mysqli_query($con,$sql);
		if($res)
		{
		//echo "deleted";
			$_SESSION['msg']="Deleted Successfully..!!";
			header("location:admin-feedback.php");
			echo "<script>location='admin-feedback.php</script>";
			exit;
		}
		else
		{
			echo "fail".mysqli_error($con);
			$_SESSION['msg']="Sorry! Failed to Delete..!!";
			header('location:admin-feedback.php');
			echo "<script>location='admin-feedback.php'</script>";
			exit;
		}
 
 
?>