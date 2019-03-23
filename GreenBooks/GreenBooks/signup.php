<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php include 'resources\php\nav_bar.php';?>

	<div class="container-fluid" style=" background-image: url('resources/images/signup.jpg'); background-repeat: no-repeat;
  background-size: cover; height: 100vh ">
		<div class="row">
			<div class="col-sm-8">
				<!-- <img src="resources/images/signup.jpg" class="img-fluid" alt="Responsive image"> -->
			</div>
			<div class="col-sm-4" style="position: relative">
				<!-- Material input -->
				<h1 class="text-center" style="margin-top: 120px">Sign Up</h1>
				<div class="adddivwithopacity formbackground" style="position: absolute" ></div>
				<div class="formsignup">
					<form style="margin-top: 70px" action="resources/php/signup_db.php" method="POST">
						<div class="form-group ">
							<label class="font-weight-light" for="formGroupExampleInput">Name</label>
							<input type="text" name="name" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="formGroupExampleInput" placeholder="Full Name">
						</div>
						<div class="form-group ">
							<label class="font-weight-light" for="formGroupExampleInput">Phone</label>
							<input type="text" name="phone" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="formGroupExampleInput" placeholder="Phone">
						</div>
						<div class="form-group ">
							<label class="font-weight-light" for="formGroupExampleInput">Username</label>
							<input type="text" name="username" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="formGroupExampleInput" placeholder="Username">
						</div>
						<div class="form-group ">
							<label class="font-weight-light" for="formGroupExampleInput2">Email</label>
							<input type="email" name="email" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="formGroupExampleInput2" placeholder="Email">
						</div>
						<div class="form-group ">
							<label class="font-weight-light" for="formGroupExampleInput2">Password</label>
							<input type="password" name="pwd" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="formGroupExampleInput2" placeholder="Password">
						</div>
						<div class="form-group ">
							<label class="font-weight-light" for="formGroupExampleInput2">Verify Password</label>
							<input type="password" name="pwd-2" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="formGroupExampleInput2" placeholder="Password">
						</div>
						<div class="form-group">
							 <button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
				
			</div>
			
		</div>
	</div>
	<script type="text/javascript" src="resources/vendor/mdb/js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="resources/vendor/mdb/js/bootstrap.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="resources/vendor/mdb/js/popper.min.js"></script>

	<!-- MDB core JavaScript -->
	<!-- <script type="text/javascript" src="resources/vendor/mdb/js/mdb.js"></script> -->

	<script type="text/javascript">
		$(function () {
			$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
		});
	</script>
</body>
</html>