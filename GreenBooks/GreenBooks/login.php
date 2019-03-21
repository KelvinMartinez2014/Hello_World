<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php include 'resources\php\nav_bar.php';?>

	<div class="container-fluid" style=" background-image: url('resources/images/login.jpg'); background-repeat: no-repeat;
  background-size: cover; height: 100vh ">
		<div class="row">
			<div class="col-sm-8">
				<!-- <img src="resources/images/signup.jpg" class="img-fluid" alt="Responsive image"> -->
			</div>
			<div class="col-sm-4" style="position: relative">
				<!-- Material input -->
				<div class="adddivwithopacity formbackground" style="position: absolute" ></div>
				<div class="formsignup">
					<form style="margin-top: 70px">
					
						<div class="form-group ">
							<label class="font-weight-light" for="formGroupExampleInput2">Email</label>
							<input type="text" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="formGroupExampleInput2" placeholder="Email">
						</div>
						<div class="form-group ">
							<label class="font-weight-light" for="formGroupExampleInput2">Password</label>
							<input type="text" class="form-control transparentinput takeourborder insertbottomline insertleftline" id="formGroupExampleInput2" placeholder="Password">
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