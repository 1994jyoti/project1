<?php include'header.php';?>
<section id="booking">
			<div class="booking padding-top-85 padding-bottom-100">
				<div class="container">
					<div class="heading-style margin-bottom-65 text-center">
						<h2 class="heading-v12__block-name font-secondary margin-bottom-20">Planning a<span> Date?</span></h2>
						<ul class="list-inline heading-style-list margin-bottom-30">
							<li><i class="fa xs fa-heart"></i></li>
							<li><i class="fa sm fa-heart"></i></li>
							<li><i class="fa md fa-heart"></i></li>
							<li><i class="fa sm fa-heart"></i></li>
							<li><i class="fa xs fa-heart"></i></li>
						</ul>
					
					</div>

					<form action="date_process.php" method="POST"  id="sky-form3" class="form contact-style">
						<fieldset>
							<div class="row">
								<div class="col-md-4 col-md-offset-0 g-sm-mb-30">
									<div>
										<input type="text" class="form-control" onkeypress="return false" name="date_time" value="" id="datetimepicker"/><br><br>
									</div>
								</div>

								<div class="col-md-4 col-md-offset-0 g-sm-mb-30">
									<div>
										<input type="text" class="form-control" name="location" placeholder="Enter Location">
									</div>
								</div>

								<div class="col-md-4 col-md-offset-0 g-sm-mb-30">
									<div>
									<input type="number" class="form-control" name="partnerid" placeholder="Enter Partner ID of Mate">				
									</div>
								</div>
							</div>

							<div class="margin-bottom-40"></div>

							<div class="row">
								<div class="col-md-12 text-center">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</div>
						</fieldset>

					</form>
				</div>
			</div>
		</section>
		<!-- End Booking Form -->
<?php include 'footer.php';?>