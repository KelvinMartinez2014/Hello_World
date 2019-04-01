<?php

	session_start();

	include 'config.php';
	echo "Connected successfully"

	$sql = "select books.* FROM books, cart where books.book_id = cart.book_id AND cart.user_id = '". $_SESSION["id"]."'";
	$result = mysqli_query($conn, $sql);

?>