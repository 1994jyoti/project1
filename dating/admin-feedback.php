<?php
include 'header.php';if(isset($_GET['login']))
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
<h4 class="font-secondary register-css margin-bottom text-center"><span>Feedback List</span></h4>
<div class="container">
<table>
<thead>
	 
 <tr>
<th width="20%"><p class="text-center">ID</p></th>
<th width="20%"><p class="text-center">NAME</p></th>
<th width="20%"><p class="text-center">VIEW</p></th>
<th width="20%"><p class="text-center">RATE</p></th>
<th width="20%"><p class="text-center">COMMENT</p></th>
<th width="20%"><p class="text-center">Delete</p></th>

</tr>
</thead>
<?php
include 'connect.php';
$query = "SELECT * FROM feedback";
$sql = mysqli_query($con,$query);
while ($data = mysqli_fetch_assoc($sql))
{

$id = $data['id'];
$name = $data['name'];
$view=$data['view'];
$rate=$data['rate'];
$comment=$data['comment'];

?>
<tr>
<td><p class="text-center"><?php echo $id; ?></p></td>
<td><p class="text-center"><?php echo $name; ?></p></td>
<td><p class="text-center"><?php echo $view; ?></p></td>
<td><p class="text-center"><?php echo $rate; ?></p></td>
<td><p class="text-center"><?php echo $comment; ?></p></td>
<td>
<form action="feedback-delete.php?id=<?php echo $id; ?>" method="POST">
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