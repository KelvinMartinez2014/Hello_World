<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

	include 'config.php';
	$total_amount = 0;
	$sql = "select books.*, cart.cart_id FROM books, cart where books.book_id = cart.book_id AND cart.user_id = '". $_SESSION["id"]."'";
	$result = mysqli_query($conn, $sql);

	$cart_object = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$total_amount += $row["price"];
		array_push($cart_object, $row);
	} 

	$total_amount_str = "$" . number_format((float)$total_amount, 2, '.', '');
?>