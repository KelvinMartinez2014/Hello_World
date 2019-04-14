<?php

	session_start();

	include 'config.php';
	echo "Connected successfully";
	$cart_object = $_SESSION["cart"];
	foreach($cart_object as $book){
		$sql = "DELETE FROM `books` WHERE book_id = '" .$book["book_id"]."'";
		$result = mysqli_query($conn, $sql);

		$sql = "DELETE FROM `cart` WHERE cart_id = '" . $book["cart_id"]. "'";
		$result = mysqli_query($conn, $sql);
	}
	unset($_SESSION["cart"]);
	header("Location: ../../cart.php?success=1");
	//echo $_POST["cart_obj"];
?>