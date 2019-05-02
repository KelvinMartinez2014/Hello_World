<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>

	<?php include 'resources/php/nav_bar.php';?>

	<div class="container-fluid" style=" background-image: url('resources/images/login.jpg'); background-repeat: no-repeat;
  background-size: cover; height: 100vh ">
		<div class="row">
			<div class="col-sm-8">
				<!-- <img src="resources/images/signup.jpg" class="img-fluid" alt="Responsive image"> -->
			</div>
			<div class="col-sm-4" style="position: relative">
				<!-- Material input -->
				<h1 class="text-center" style="margin-top: 120px; color:white;">Log In</h1>
				<div class="adddivwithopacitylogin formbackground" style="position: absolute; top: 0; " ></div>
				<div class="formsignup">
					<form style="margin-top: 70px" action="resources/php/signin_db.php" method="POST">
					
						<div class="form-group ">
							<label class="font-weight-light loginlabeltext" for="form-email">Email</label>
							<input type="email" class="form-control transparentinputlogin takeourborder insertbottomline insertleftline" name="email" id="form-email" placeholder="Email">
						</div>
						<div class="form-group loginlabeltext">
							<label class="font-weight-light" for="form-pwd">Password</label>
							<input type="text" class="form-control  transparentinputlogin takeourborder insertbottomline insertleftline" name="pwd" id="form-pwd" placeholder="Password">
						</div>
						<div class="text-left" ><a id="forgotpassword" href="#">Forgot Password</div>
						
						<input type="submit" name="form-submit" class="btn btn-success">
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
		if (isset($_GET["signup"])) {
			echo "<script>alert('Account created! Please log in...')</script>";
		}

		if (isset($_GET["error"])) {
			if ($_GET["error"] == "login") {
				$error = 'Please login to access Greenbooks';
				
			} else  {
				$error = "Email or password incorrect";
			}

			echo "<script>alert('".$error."')</script>";
		}
	?>
	<script type="text/javascript">
		$(function () {
			$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
		});
	</script>
</body>
</html>
