<?php
include 'header.php';
if(isset($_GET['login']))
{
	if($_GET['login'] == "successfull")
  	{
	echo "<p style='color:green; font-weight:bold'> Login  Succesfully</p>";
  	}
}

else
{
	echo "<script> window.top.location = 'admin-login.php?error2'; </script>";
}



 ?>

<h3 class="font-secondary register-css margin-bottom text-center"><span>Welcome Admin</span></h3>
<h4 class="font-secondary register-css margin-bottom text-center"><span>Members List</span></h4>
<div class="container">
<table>
<thead>
	 
 <tr>
<th width="20%"><p class="text-center">ID</p></th>
<th width="20%"><p class="text-center">USERNAME</p></th>
<th width="20%"><p class="text-center">PASSWORD</p></th>
<th width="20%"><p class="text-center">Email</p></th>
<th width="20%"><p class="text-center">OFFER</p></th>
<th width="20%"><p class="text-center">Delete</p></th>

</tr>
</thead>
<?php
include 'connect.php';
$query = "SELECT * FROM register";
$sql = mysqli_query($con,$query);
while ($data = mysqli_fetch_assoc($sql))
{

$id = $data['id'];
$username = $data['username'];
$password=$data['password'];
$email=$data['email'];
$offer=$data['offer'];

?>
<tr>
<td><p class="text-center"><?php echo $id; ?></p></td>
<td><p class="text-center"><?php echo $username; ?></p></td>
<td><p class="text-center"><?php echo $password; ?></p></td>
<td><p class="text-center"><?php echo $email; ?></p></td>
<td><p class="text-center"><?php echo $offer; ?></p></td>
<td>
<form action="members-delete.php?id=<?php echo $id; ?>" method="POST">
<input type="submit" value="delete" name="delete" class="btn btn-danger">
</form>
</td>


</tr>


<?php 
} 
?>
</table>
























</div>
<?php include 'footer.php'; ?>