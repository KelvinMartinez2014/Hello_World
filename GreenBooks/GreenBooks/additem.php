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
				include 'resources/php/nav_bar.php';
				include 'resources/php/config.php';
		
				// Check connection
				if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM categories ORDER BY general_category ASC";
				$result = mysqli_query($conn, $sql);

				$gen_cat_array = array();
				while ($row = mysqli_fetch_assoc($result))	{
						if (!array_key_exists($row["general_category"], $gen_cat_array)) {
							$gen_cat_array[$row["general_category"]] = array();
							array_push($gen_cat_array[$row["general_category"]], $row["category"]);
						} else {
							array_push($gen_cat_array[$row["general_category"]], $row["category"]);
						}
				}
	?>  
	<script> var category_object = <?php echo json_encode($gen_cat_array, JSON_FORCE_OBJECT) ?>;</script>
	<div class="container transparentContainer" style="margin-top: 4%;">
		<!--Section: Testimonials v.1-->
<section class="section pb-3 text-center">

  <!--Section heading-->
  <h1 class="section-heading h1 pt-4">Sell a Book</h1>
  <!--Section description-->
  <p class="section-description">Fill out the following form to list a book for sale.</p>

  <div class="row">
  	<div class="col-lg-4 mx-auto">
  		<form action="resources/php/addbook_db.php" method="POST">
  		  <div class="form-group">
		    <label for="form-author">ISBN</label>
		    <input type="text" class="form-control" name="form-isbn" pattern="\d{13}" title="ISBN should contain 13 numbers" id="form-isbn" placeholder="Enter Book ISBN">
		  </div>
		  <div class="form-group">
		    <label for="form-name">Book Name</label>
		    <input type="text" class="form-control" name="form-name" id="form-name" aria-describedby="emailHelp" placeholder="Enter Book Name">
		  </div>
		  <div class="form-group">
		    <label for="form-author">Author</label>
		    <input type="text" class="form-control" name="form-author" id="form-author" placeholder="Enter Book Author">
		  </div>
		  <div class="form-group">
		    <label for="form-date">Release Date</label>
		    <input type="date" class="form-control" name="form-date" id="form-date">
		  </div>
		  <div class="form-group">
		    <label for="form-edition">Edition</label>
		    <input type="number" class="form-control" name="form-edition" id="form-edition" value="1">
		  </div>
			<div class="form-group">
		    <label for="form-general-category">Category</label>
		    <select class="form-control"  name="form-general-category" id="form-general-category">
				<?php foreach ($gen_cat_array as $key => $category) {?>
					<option val="<?php echo $key; ?>"><?php echo $key; ?></option>
				<?php } ?>
				</select>
		  </div>
			<div id="form-category-container" class="form-group">
				<label for="form-category">Category 2</label>
				<select class="form-control" name="form-category" id="form-category"></select>
			</div>
		  <div class="form-group">
		    <label for="form-edition">Price in dollars</label>
		    <input type="text" class="form-control" name="form-price" id="form-price" />
		  </div>
		  
		  <button type="submit" class="btn btn-success">Submit</button>
		</form>
  	</div>
	  	
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
		$("#form-category-container").hide();

		function update_categories(){
			var general_cat = $("#form-general-category").val();
				var category_obj = category_object[general_cat];
				$("#form-category").empty();
				for(var index in category_obj) {
					$("#form-category").append('<option value="' + category_obj[index] +'">' + category_obj[index] +'</option>');
				}
				$("#form-category-container").show();
		}
		$(document).ready(function() {  
			var body = document.body;
			update_categories();
			body.classList.add("mainmenubackground");

			

			$("#form-general-category").on("change", function(){
				update_categories();
			});
		});

	</script>
</body>
</html>