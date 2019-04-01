<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Main Page</title>

	<!-- CSS -->
	<link rel="stylesheet" href="resources/css/nav_bar.css">
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
	

	<!-- ATTENTION: The following php closes head and opens body -->
	<?php 
	include 'resources/php/lookincart_db.php';
	include 'resources/php/nav_bar.php';?>  


	<?php 
		session_start();

		$servername = "localhost";
		$username = "database";
		$password = "password";
		$dbname = "greenbooks";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM `books`";
		$result = mysqli_query($conn, $sql);

		
	?>
	<div class="container transparentContainer" style="margin-top: 4%;">
		<!--Section: Testimonials v.1-->
<section class="section pb-3 text-center">

  <!--Section heading-->
  <h1 class="section-heading h1 pt-4">Books on Sale</h1>
  <!--Section description-->
  <p class="section-description">Here are the following books on sale on Green Books</p>

  <div class="row">
  	<div class="col-lg-8 mx-auto">
  	</div>
	  	<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">ISBN</th>
		      <th scope="col">Book Name</th>
		      <th scope="col">Book Author</th>
		      <th scope="col">Release Date</th>
		      <th scope="col">Edition</th>
			  <th scope="col">Category</th>
		      <th scope="col">Price</th>
			  <th></th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
			  	while ($row = mysqli_fetch_array($result))	{
				echo "<tr>
						<th scope='row'>".$row['ISBN']."</th>
						<td>".$row['book_name']."</td>
						<td>".$row['book_author']."</td>
						<td>".$row['release_date']."</td>
						<td>".$row['edition']."</td>
						<td>".$row['category']."</td>
						<td>$ ".$row['price']."</td>
						<td><i title='Add to Cart' 	onclick='addToCart(".$row['book_id'].")'class='fas fa-plus-square'></i></td>";
				}
			?>
		  </tbody>
		</table>
		  	
    </div>
		</section>

		<!-- Section: Magazine v.3 -->




	</div>
	<!-- JQuery -->
	<script type="text/javascript" src="resources/vendor/mdb/js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="resources/vendor/mdb/js/bootstrap.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="resources/vendor/mdb/js/popper.min.js"></script>

	<!-- MDB core JavaScript -->
	<!-- <script type="text/javascript" src="resources/vendor/mdb/js/mdb.js"></script> -->

	<?php 
		if (isset($_GET["added"])) {
			echo "<script>alert('Book added successfully')</script>";
		}
	?>
	<script type="text/javascript">
		$(function () {
			$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
		});
		
		function addToCart(item){
			$.ajax({
				type: "POST",
				url: 'resources/php/add_cart.php',
				data: {'item': item},
				success: function(data){
					alert("Cart Item Added... The webpage will now be refreshed!");
					setTimeout(function(){
						window.location.replace("books.php");
					}, 300);
				}
			})
		}
		$(document).ready(function() {  
			var body = document.body;

			body.classList.add("mainmenubackground");
		});

	</script>
</body>
</html>