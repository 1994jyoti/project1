<?php include 'header.php'; 
if(isset($_GET['registration']))
{
	if($_GET['registration'] == "successfull")
  	{
	echo "<p style='color:green; font-weight:bold'> Registered  Succesfully</p>";
  	}
}

else
{
	/*echo "<script> window.top.location = 'register.php?error'; </script>";*/
}

?>
<style>
	.showMessage
	{
	color:red;
	font-weight: bold;
	padding: 2px 2px 2px 2px;
	border: 2px solid red;
	}
</style>
<?php
if(isset($_GET['error']))
{
	echo '<p style="color:green; font-weight:bold;"> Please Check Username and Password </p>';
}
?>



<form action="login_process.php" class="form" method="POST">
<h3 align="center" class="heading-style font-secondary margin-bottom-20"><span>Login</span></h3>
<div class="col-md-8 col-md-offset-4" style="margin-top:20px;margin-bottom:20px;">
<div class="row">
<div class="col-md-6" style="margin-bottom:20px;">
<label class="input">
<i class="icon-append fa fa-user"></i>
<input type="text" name="username" placeholder="Username" required>
</label>
</div>
</div>
</section>
<div class="row">
<div class="col-md-6" style="margin-bottom:20px;">
<section>
	<label class="input">
	<i class="icon-append fa fa-lock"></i>
	<input type="password"  name="password" placeholder="Password" id="password" required>
	
	</label>
</section>
</div>
</div>

	<button type="submit" class="btn-u btn-success btn-lg">Submit</button>

</form>
</div>


<script>
	$(function()
   {
    $('#submitForm').click(function(event) {
    	debugger;
    	var currentPass = $('#password').val();
    	var confirmPass = $('#ConfirmPassword').val();

    	if(currentPass == confirmPass && currentPass != '' && confirmPass != '')
    	{
    		$('#showMessage').html("").removeClass('showMessage');
    		return true;
    	}
    	else
    	{
    	$('#showMessage').html("Password And Confirm Password DO not Match").addClass('showMessage');
    	return false;
    	}
    });

   }
	);
</script>


<?php include'footer.php';?>

  
