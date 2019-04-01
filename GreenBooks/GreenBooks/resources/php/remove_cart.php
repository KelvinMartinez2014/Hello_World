<?php

	session_start();

	include 'config.php';
	echo "Connected successfully";

	$sql = "DELETE FROM `cart` WHERE cart_id = '".$_POST["item"]."'";

	if ($conn->query($sql) === TRUE) {
    echo "Removed!";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>