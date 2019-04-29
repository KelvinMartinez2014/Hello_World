	!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php
	include 'resources/php/lookincart_db.php';
	include 'resources/php/nav_bar.php';
	?>
	
	<?php 
		session_start();

		$servername = "localhost";
		$username = "root";
		$password = "qwer1234";
		$dbname = "greenbooks";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM `users` where UserID=1";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	?>
	

	<div class="container-fluid" style=" background-image: url('resources/images/login.jpg'); background-repeat: no-repeat;
  background-size: cover; height: 100vh ">
		<div class="row">
			<div class="col-sm-8">
				<!-- <img src="resources/images/signup.jpg" class="img-fluid" alt="Responsive image"> -->
			</div>
			<div class="col-sm-4" style="position: relative">
				<!-- Material input -->
				<h1 class="text-center" style="color:white; margin-top: 120px; ">User Proflie</h1>
				<div class="adddivwithopacitylogin formbackground" style="position: absolute; top: 0; " ></div>
				<div class="formsignup">
					<form style="margin-top: 70px" >
						<div class="form-group ">
						<h5 style="color:white; margin-top:text-center;"> UserName:<?php echo $row['Username']?>  <!--Input UserName --></h5>
						</div>
						<div class="form-group loginlabeltext">
						<h5 style="color:white; margin-top:text-center;"> Email: <?php echo $row['Email']?> <!--Input Email --> </h5>	
						</div>
						<div class="text-left" ><a id="forgotpassword">
						<h5 style="color:white; margin-top:text-center;">Phone: <?php echo $row['Phone']?> <!--Input Phone --></h5>
						</div>
					</form>
					<img class="text-fluid" src="resources/images/default.jpg"></img>
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
