<?php include 'header.php'; ?>


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
	echo '<p style="color:green; font-weight:bold;"> Please try again </p>';
}
?>

<div class="col-md-8 col-lg-offset-2">
<form action="register_process.php" class="form" method="POST">
<h3 align="center" class="heading-style font-secondary margin-bottom-20"><span>Register Form</span></h3>

<fieldset>
<section>
<p id="showMessage"></p>


<div class="row">
<div class="col-md-6">
<label class="input">
<i class="icon-append fa fa-user"></i>
<input type="text" name="username" placeholder="Username" required>

</label>
</div>
</div>


<div class="row">
<div class="col-md-6">

<label class="input">
<i class="icon-append fa fa-envelope"></i>
<input type="email" name="email" placeholder="Email address" required>

</label>
</div>
</div>

<div class="row">
<div class="col-md-6">

	<label class="input">
	<i class="icon-append fa fa-lock"></i>
	<input type="password" name="password" placeholder="Password"  id="password" required>
	
	</label>

</div>
</div>

<div class="row">
<div class="col-md-6">
	<label class="input">
	<i class="icon-append fa fa-lock"></i>
	<input type="password" name="passwordConfirm"  placeholder="Confirm password" id="ConfirmPassword" required>
	
	</label>

</div>
</div>

<div class="row" style="margin-left: 7px;">
	<label class="checkbox"><input type="checkbox" name="offer" id="offer"><i></i>I want to receive news and  special offers</label>
	<label class="checkbox"><input type="checkbox" name="terms" id="terms" value="true" required><i></i>I agree with the Terms and Conditions</label>
<footer>
	<button type="submit" id="submitForm"  class="btn-u btn-success btn-lg">Submit</button>
	</footer>
</div>
</form>
<!-- End Reg-Form -->
</div>
</div>
</div>
</div>
</div>
</div>
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
<?php include 'footer.php';?>