<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php include 'resources/php/nav_bar.php';?>

	<div class="container-fluid">
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
							<label class="font-weight-light" for="form-name">Name</label>
							<input type="text" name="name" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="form-name" placeholder="Full Name">
						</div>
						<div class="form-group ">
							<label class="font-weight-light" for="form-user">Username</label>
							<input type="text" name="username" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="form-user" placeholder="Username">
						</div>
						<div class="form-group ">
							<label class="font-weight-light" for="form-email">Email</label>
							<input type="email" name="email" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="form-email" placeholder="Email">
						</div>
						<div class="form-group ">
							<label class="font-weight-light" for="form-phone">Phone</label>
							<input type="tel" name="phone" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="form-phone" pattern="\d{10}" placeholder="Phone">
						</div>
						<div class="form-group ">
							<label class="font-weight-light" for="form-pwd">Password</label>
							<input type="password" name="pwd" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="form-pwd" placeholder="Password">
						</div>
						<div class="form-group ">
							<label class="font-weight-light" for="form-pwd2">Verify Password</label>
							<input type="password" name="pwd-2" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="form-pwd2" placeholder="Password">
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

	<?php 
		if (isset($_GET["error"])) {
			$error = $_GET["error"];
			echo "<script>alert('Sorry ". $error." is already in the system...')</script>";
		}
	?>
	<script type="text/javascript">
		$(function () {
			$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
			$("body").addClass("mainmenubackground")
			$("body").css("background-image", "url('resources/images/signup.jpg')");
		});
	</script>
</body>
</html>