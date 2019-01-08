<?php
include "header.php";

 if (isset($_POST['city']) AND isset($_POST['height']) AND isset($_POST['gender']) AND isset($_POST['complexion']) AND isset($_POST['religion']) AND isset($_POST['age']))
 {
 	$city = $_POST['city'];
 	$height = $_POST['height'];
	$gender = $_POST['gender'];
	$complexion = $_POST['complexion'];
    $religion = $_POST['religion'];
    $age = $_POST['age'];

 ?>


<div class="container" style="margin-top: 20px;">
<div class="col-md-12 col-lg-offset-1">

<?php
include 'connect.php';
$query = "SELECT * FROM profile WHERE city='$city' AND height = '$height' AND gender = '$gender'AND age = '$age'AND complexion = '$complexion'AND religion = '$religion'";
$sql = mysqli_query($con,$query);
while ($data = mysqli_fetch_assoc($sql))
{
$photo = $data['photo_path'];
$name = $data['name'];
$city=$data['city'];
$age=$data['age'];
$gender=$data['gender'];
$complexion=$data['complexion'];
$height=$data['height'];
$religion=$data['religion'];

?>
	<!-- Profile Content -->

	<div class="col-md-3" style="border: 2px solid black; margin: 10px;">
				
				<div class="row" style="padding-left: 14px; padding-top: 10px;">
				<img src="<?php echo $photo; ?>" alt="Product Image" width="250px" height="250px">
				</div>
				<div class="row">
				<p style="padding-left: 14px; padding-top: 5px;">Name: <strong><?php echo $name; ?></strong></p>
				</div>
				<div class="row">
				<p style="padding-left: 14px; padding-top: 5px;">Gender: <strong><?php echo $gender; ?></strong></p>
				</div>
				<div class="row">
				<p style="padding-left: 14px; padding-top: 5px;">City: <span><i class="fa fa-map-marker"></i><a href="#"></a><strong> <?php echo $city; ?></strong><a href="#"></a></span></p>
				</div>
				<div class="row">
				<p style="padding-left: 14px; padding-top: 5px;">Height: <strong><?php echo $height; ?></strong></p>
				</div>
				
				<div class="row">
				<p style="padding-left: 14px; padding-top: 10px;">Age: <strong><?php echo $age; ?></strong></p>
				</div>
				<div class="row">
				<p style="padding-left: 14px; padding-top: 5px;">Complexion: <strong><?php echo $complexion; ?></strong></p>
				</div>
				<div class="row">
				<p style="padding-left: 14px; padding-top: 10px;">Religion: <strong><?php echo $religion; ?></strong></p>
				</div>

				<div class="clearfix margin-bottom-20"></div>
									
				</div>

							
							<?php 
							} 
							?>

							
</div>

<?php 

include 'footer.php' ; 

}
?>