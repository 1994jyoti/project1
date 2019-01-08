<?php include 'header.php'; ?>

<form action="look_process.php" class="form" method="POST" >
<h3 align="center" class="heading-style font-secondary margin-bottom-20"><span>Looking for a Mate</span></h3>
<div class="margin-bottom-20" padding-bottom='60px'>
<div class="col-md-6 col-md-offset-3" style="padding-top: 50px; border: 2px solid black; margin-top: 20px;">
<div class="col-md-6">
<div class="container">




<div class="row">

<div class="col-md-6" style="padding-bottom: 20px;">
<div class="col-md-4"><p class="heading-style font-secondary">look for</p></div>
<div class="col-md-1">
<input type="radio" name="gender" value="male"><span><i class="fa fa-male fa-3x" aria-hidden="true"></i></span>
</div>
<div class="col-md-1">
<input type="radio" name="gender" value="female"><span><i class="fa fa-female fa-3x" aria-hidden="true"></i></span>
</div>
</section>
</div>

</div>



<div class="row">
<div class="col-md-6">
<section>
<label class="input">
<input type="number" name="age" class="form-control" placeholder="Age" required>
</label>
</section>
</div>
</div>

<div class="row">
<div class="col-md-6">
<section>
<label class="input">
<input type="text" name="city" class="form-control" placeholder="City" required>
</label>
</section>
</div>
</div>


<div class="row">
<div class="col-md-6">
<section>
	<label class="input">
	
	<input type="number" step="0.01" name="height" class="form-control" placeholder="Height" required>
	
	</label>
	</section>
</div>
</div>

 

<div class="row">
<div class="col-md-6">
<section>
	<label class="input">
	<input type="text" name="complexion" class="form-control"  placeholder="Complexion" required>
	</label>
</section>
</div>
</div>

 

<div class="row">
<div class="col-md-6">
<section>
	<label class="input">
	<input type="text" name="religion" class="form-control" placeholder="Religion" required>
	</label>
</section>
</div>
</div>

<div class="col-md-6">
<div class="col-md-3 col-md-offset-5">
<section>
<button type="submit"  class="btn-u btn-lg btn-success">Search</button>
</section>
</div>
</div>
</div>
</div>
</div>
<div class="row">
</div>
</form>
<script>


</script>






















<?php include'footer.php';?>