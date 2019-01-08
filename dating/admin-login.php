<?php include 'header.php';?>
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
	echo '<p class="text-center" style="color:red; font-weight:bold;"> Please Check Username and Password </p>';
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
if(isset($_GET['error2']))
{
	echo '<p class="text-center" style="color:red; font-weight:bold;">ADMIN AREA PLESAE LOGIN IN AS ADMIN </p>';
}
?>



<form action="admin_login_process.php" class="form" method="POST">
<h3 align="center" class="heading-style font-secondary margin-bottom-20"><span>ADMIN-LOGIN</span></h3>
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
<?php include'footer.php';?>

  
