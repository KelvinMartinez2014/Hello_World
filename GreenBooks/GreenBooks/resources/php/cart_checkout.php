<?php

	session_start();

	include 'config.php';
	echo "Connected successfully";
	$cart_object = $_SESSION["cart"];
	foreach($cart_object as $book){
		
		$sql= "INSERT INTO `Historial` (vendor_id, ISBN, book_name, book_author, release_date, edition, category, price) VALUES
		('".$book['vendor_id']."','".$book['ISBN']."','".$book['book_name']."','".$book['book_author']."','".$book['release_date']."','".$book['edition']."','".$book['category']."','".$book['price']."')";
		$result = mysqli_query($conn, $sql);
		
		$sql = "DELETE FROM `books` WHERE book_id = '" .$book["book_id"]."'";
		$result = mysqli_query($conn, $sql);

		$sql = "DELETE FROM `cart` WHERE cart_id = '" . $book["cart_id"]. "'";
		$result = mysqli_query($conn, $sql);
	}
	unset($_SESSION["cart"]);
	header("Location: ../../cart.php?success=1");
	//echo $_POST["cart_obj"];
?>
