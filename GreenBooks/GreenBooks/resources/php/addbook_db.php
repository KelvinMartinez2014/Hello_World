<?php

	session_start();

	$servername = "localhost";
	$username = "database";
	$password = "password";
	$dbname = "greenbooks";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";

	$sql = "INSERT INTO `books` (vendor_id, ISBN, book_name, book_author, release_date, edition, price)
			VALUES ('".$_SESSION["id"]."', '".$_POST['form-isbn']."', '".$_POST["form-name"]."' ,'".$_POST["form-author"]."', '". $_POST['form-date']."', '". $_POST['form-edition'] ."', '". $_POST['form-price'] ."')";
	echo $sql;

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	
	header("location: ../../books.php?added=true");
?>