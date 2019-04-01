<?php

	session_start();

	include 'config.php';
	echo "Connected successfully";

	
	$sql = "INSERT INTO `cart`(`book_id`, `user_id`) VALUES ('".$_POST["item"]."','".$_SESSION["id"]."')";

	if ($conn->query($sql) === TRUE) {
    echo "Added!";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>