<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Main Page</title>

	<!-- CSS -->
	<link rel="stylesheet" href="resources/css/nav_bar.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
	
	<style>
		.remove-icon {
			color: #dc3545;
		}
	</style>
	<!-- ATTENTION: The following php closes head and opens body -->
	<?php 
	include 'resources/php/lookincart_db.php';
	include 'resources/php/nav_bar.php';
	
	include 'resources/php/config.php';
	$_SESSION["cart"] = $cart_object;
	
	?>  
	<div class="container transparentContainer" style="margin-top: 4%;">
		<div class="row">
			<div class="col-sm-12" style="margin-top: 25px;">
				<?php if (count($cart_object) == 0) {?>
					<h3 class="text-center">There is nothing on your shopping cart</h3>
				<?php } else { ?>
					<h3 class="text-center"><?php echo $_SESSION["name"]; ?>'s Shopping Cart</h3>
					<table class="table">
						<thead>
							<tr>
							<th scope="col">ISBN</th>
							<th scope="col">Book Name</th>
							<th scope="col">Price</th>
							<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($cart_object as $key => $row) {
									echo "<tr>
											<th scope='row'>".$row['ISBN']."</th>
											<td>".$row['book_name']."</td>
											<td>$ ".$row['price']."</td>
											<td><i onclick='removeItem(".$row["cart_id"].")'class='fas fa-minus-square remove-icon'></i></td>";
											
							}
							?>
						</tbody>
					</table>					
				<?php } ?>
				<?php if($total_amount > 0) { ?>

				
				<div id="total-amount">Total: <?php echo $total_amount_str ?></div>
				<form action="resources/php/cart_checkout.php" method="POST">
				<input type="hidden" id="cart_obj" name="cart_obj" value="<?php echo $cart_object ?>">
					<button type="submit" class="btn btn-primary">Complete Purchase</div>
				</form>
				<?php }; ?>
			</div>
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
		
		function removeItem(item) {
			$.ajax({
				type: "POST",
				url: 'resources/php/remove_cart.php',
				data: {'item': item},
				success: function(data){
					alert("Cart Item Removed... The webpage will now be refreshed!");
					setTimeout(function(){
						window.location.replace("cart.php");
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