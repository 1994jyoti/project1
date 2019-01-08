<?php 
 
 $id=$_GET['id'];
 include('connect.php');
		$sql="DELETE FROM dateplan WHERE id='".$id."'";
		$res=mysqli_query($con,$sql);
		if($res)
		{
		//echo "deleted";
			$_SESSION['msg']="Deleted Successfully..!!";
			header("location:admin-date.php");
			echo "<script>location='admin-date.php</script>";
			exit;
		}
		else
		{
			echo "fail".mysqli_error($con);
			$_SESSION['msg']="Sorry! Failed to Delete..!!";
			header('location:admin-date.php');
			echo "<script>location='admin-date.php'</script>";
			exit;
		}
 
 
?>