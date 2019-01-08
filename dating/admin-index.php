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

}
?>
<h3 class="font-secondary register-css margin-bottom text-center"><span>Welcome Admin</span></h3>
<h3 class="font-secondary register-css margin-bottom text-center"><span>Our Website Forms</span></h3>

<div class="col-md-3"><a href="admin-members.php?login=successfull"><button class="btn-lg btn-success">REGISTER</button></a></h3>
</div>
<div class="col-md-3"><a href="admin-members-profile.php?login=successfull"><button class="btn-lg btn-success">PROFILE</button></a>
</div>
<div class="col-md-3"><a href="admin-feedback.php?login=successfull"><button class="btn-lg btn-success">FEEDBACK</a>
</div>
<div class="col-md-3"><a href="admin-date.php?login=successfull"><button class="btn-lg btn-success">DATE</a>
</div>

















<?php include 'footer.php'; ?>