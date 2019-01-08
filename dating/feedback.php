<?php include 'header.php'; ?>
<form action="feedback_process.php" class="form" method="POST">
<h3 align="center" class="heading-style font-secondary g-mb-20"><span>Feedback</span></h3>
<div class="row" style="margin-bottom:10px;">
<div class="col-md-9 col-md-offset-2" style="border: 2px solid black;padding: 20px;">
<div class="col-md-8 col-md-offset-2">

<label class="input">
<input type="text" name="name" class="form-control" placeholder="Name">
</label>

</div>
<div class="col-md-8 col-md-offset-2">
    <div class="col-md-6" style="padding: 0px;">
    <label><h3  class="heading-style font-secondary g-mb-20">Do you like our website??</h3></label>
    </div>
    <div class="col-md-2">
	<label class="checkbox"><input type="radio" name="view" value="yes"><i></i><h3 class="heading-style font-secondary g-mb-20">Yes</h3></label>
  </div>
  <div class="col-md-1">
	<label class="checkbox"><input type="radio" name="view" value="no"><i></i><h3 class="heading-style font-secondary g-mb-20">No</h3></label>
  </div>
  </div>
   <div class="col-md-8 col-md-offset-2">
 <select name="rate" class="form-control">Rate US
 <option value="select">Please Rate US</option>
<option value="poor">poor</option>
<option value="good">good</option>
 </select>
</div>
 
   <div class="col-md-8 col-md-offset-2">
   <div class="col-md-3"  style="padding: 0px;">
   <label><h3 class="heading-style font-secondary g-mb-20">Comment:</h3></label>
   </div>
   <div class="col-md-12"  style="padding: 0px;">
   <textarea name="comment" class="form-control" rows="5" cols="100"></textarea>
   </div>
   </div>

   <div class="col-md-8 col-md-offset-5" style="margin-top: 10px;">
<button type="submit"  class="btn-u btn-success btn-lg"><p class="heading-style font-secondary g-mb-20">Submit</p></button>
</div>

   </div>
   </div>
   </div>
<?php include'footer.php';?>