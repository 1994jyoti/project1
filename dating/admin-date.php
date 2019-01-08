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
<h4 class="font-secondary register-css margin-bottom text-center"><span>Date List</span></h4>
<div class="container">
<table>
<thead>
	 
 <tr>
<th width="20%"><p class="text-center">ID</p></th>
<th width="20%"><p class="text-center">DATE-TIME</p></th>
<th width="20%"><p class="text-center">LOCATION</p></th>
<th width="20%"><p class="text-center">PARTNER-ID</p></th>

<th width="1%"><p class="text-center">Delete</p></th>

</tr>
</thead>
<?php
include 'connect.php';
$query = "SELECT * FROM dateplan";
$sql = mysqli_query($con,$query);
while ($data = mysqli_fetch_assoc($sql))
{

$id = $data['id'];
$date_time = $data['date_time'];
$location=$data['location'];
$partnerid=$data['partnerid'];

?>
<tr>
<td><p class="text-center"><?php echo $id; ?></p></td>
<td><p class="text-center"><?php echo $date_time; ?></p></td>
<td><p class="text-center"><?php echo $location; ?></p></td>
<td><p class="text-center"><?php echo $partnerid; ?></p></td>

<td>
<form action="date-delete.php?id=<?php echo $id; ?>" method="POST">
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