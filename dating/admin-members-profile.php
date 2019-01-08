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
<h4 class="font-secondary register-css margin-bottom text-center"><span>Members Profile List</span></h4>
<div class="container">
<table>
<thead>
	 
 <tr>
<th width="20%"><p class="text-center">ID</p></th>
<th width="20%"><p class="text-center">IMAGE</p></th>
<th width="20%"><p class="text-center">NAME</p></th>
<th width="20%"><p class="text-center">CITY	</p></th>
<th width="20%"><p class="text-center">AGE</p></th>
<th width="20%"><p class="text-center">HEIGHT</p></th>
<th width="20%"><p class="text-center">GENDER</p></th>
<th width="20%"><p class="text-center">COMPLEXION</p></th>
<th width="20%"><p class="text-center">RELIGION</p></th>
<th width="20%"><p class="text-center">Delete</p></th>

</tr>
</thead>
<?php
include 'connect.php';
$query = "SELECT * FROM profile";
$sql = mysqli_query($con,$query);
while ($data = mysqli_fetch_assoc($sql))
{
$photo = $data['photo_path'];
$id = $data['id'];
$name = $data['name'];
$city=$data['city'];
$age=$data['age'];
$gender=$data['gender'];
$complexion=$data['complexion'];
$height=$data['height'];
$religion=$data['religion'];


?>
<tr>
<td><p class="text-center"><?php echo $id; ?></p></td>
<td><img src="<?php echo $photo; ?>" alt="Image" width="250px" height="150px"></td>
<td><p class="text-center"><?php echo $name; ?></p></td>
<td><p class="text-center"><?php echo $city; ?></p></td>
<td><p class="text-center"><?php echo $age; ?></p></td>
<td><p class="text-center"><?php echo $height; ?></p></td>

<td><p class="text-center"><?php echo $gender; ?></p></td>
<td><p class="text-center"><?php echo $complexion; ?></p></td>
<td><p class="text-center"><?php echo $religion; ?></p></td>

<td>
<form action="members-profile-delete.php?id=<?php echo $id; ?>" method="POST">
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