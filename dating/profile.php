<?php include 'header.php';

if(isset($_GET['login']))
{
	if($_GET['login'] == "successfull")
  	{
	echo "<p style='color:green; font-weight:bold'> Login  Succesfully</p>";
  	}
}

else
{
	echo "<script> window.top.location = 'login.php?error'; </script>";
}
 ?>

<h3 align="center" class="heading-style font-secondary margin-bottom-20" style="padding-bottom: 20px;"><span>My Profile</span></h3>

<form action="profile_process.php" method="POST" enctype="multipart/form-data" class="form">
	<div class="col-md-6 col-md-offset-3" style="padding-top: 50px; border: 2px solid black; margin-top: 20px;">
		<div class="col-md-2" style="margin-right: 100px;">
		<img src="assets/img/image-upload.png" name="photo_path" style="width:150px; height:150px;" id="output">
		  	<div class="form-group">
                <label for="message">Upload Photo*</label>
               <input type="file" id="photo_path" name="photo_path" onchange="loadFile(event)">
			   			<script>
						  var loadFile = function(event) {
							var output = document.getElementById('output');
							output.src = URL.createObjectURL(event.target.files[0]);
						  };
						</script>
						      </div>
						<br>
						</var></div>
<div class="col-md-4">
<div class="container">

<div class="row">
<div class="col-md-4">
<section>
<label class="input">
<input type="text" name="name" placeholder="Name">
</label>
</section>
</div>
</div>


<div class="row">
<div class="col-md-4" style="padding-bottom: 20px;">

<div class="col-md-2">
<input type="radio" name="gender" value="male"><span><i class="fa fa-male fa-3x" aria-hidden="true"></i></span>
</div>
<div class="col-md-2">
<input type="radio" name="gender" value="female"><span><i class="fa fa-female fa-3x" aria-hidden="true"></i></span>
</div>
</section>
</div>
</div>


<div class="row">
<div class="col-md-4">
<section>
<label class="input">
<input type="number" name="age" placeholder="Age">
</label>
</section>
</div>
</div>

<div class="row">
<div class="col-md-4">
<section>
<label class="input">
<input type="text" name="city" placeholder="City">
</label>
</section>
</div>
</div>


<div class="row">
<div class="col-md-4">
<section>
	<label class="input">
	
	<input type="number" name="height" placeholder="Height">
	
	</label>
	</section>
</div>
</div>

 

<div class="row">
<div class="col-md-4">
<section>
	<label class="input">
	<input type="text" name="complexion" placeholder="Complexion">
	</label>
</section>
</div>
</div>

 

<div class="row">
<div class="col-md-4">
<section>
	<label class="input">
	<input type="text" name="religion" placeholder="Religion">
	</label>
</section>
</div>
</div>
<div class="col-md-4 ">
<section>
<button type="submit" name="submit"  class="btn-u btn-success btn-lg">Submit</button>
</section>
</div>

</div>
</div>
</div>


</div> 



</form>
 
<?php include 'footer.php';?>
