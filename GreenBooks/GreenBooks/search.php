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
	<?php include 'resources/php/nav_bar.php';?>  
	<div class="container transparentContainer" style="margin-top: 4%;">
		<div class="row">
			
		</div>


	</div>
	<!-- JQuery -->
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

		$(document).ready(function() {  
			var body = document.body;

			body.classList.add("mainmenubackground");
		});

	</script>
</body>
</html>