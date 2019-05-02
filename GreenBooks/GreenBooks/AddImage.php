<!DOCTYPE html>
<html>
<head>
	<title>Input Image</title>
	<?php include 'resources/php/nav_bar.php';?>
</head>
<body>
	<div class="container-fluid" style=" background-image: url('resources/images/signup.jpg'); background-repeat: no-repeat;
  background-size: cover; height: 100vh ">
		<div class="row">
			<div class="col-sm-8">
				<!-- <img src="resources/images/signup.jpg" class="img-fluid" alt="Responsive image"> -->
			</div>
			<div class="col-sm-4" style="position: relative">
				<!-- Material input -->
				<h2 align="center" class="text-center" style="margin-top: 120px; color:black;">Log In</h2>
				<div class="adddivwithopacitylogin formbackground" style="position: absolute; top: 0; " ></div>
				<div class="formsignup">
					<form action="AddImage_db.php" method="post" enctype="multipart/form-data">
					<div class="form-group ">
					<h5 align="bottom" style="margin-below: 120px; color:black;> Image Insertion...</h>
						<table align="center">
						<tr>
							<td><label>Insert Profile Image</label></td>
							<td><label>:</label></td>
							<td><label><input type="file" name="img" required/></label></td>
						</tr>
					</div>
						<tr>
							<td><label></label></td>
							<td><label></label></td>
							<td><label><input type="submit" name="save_btn" values="SAVE"/></label></td>
						</tr>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>