<?php

	$servername = "localhost";
	$username = "jonathanroman";
	$password = "1234";
	$dbname = "greenbooks";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
		

?>