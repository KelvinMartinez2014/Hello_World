<?php

	session_start();

	include 'config.php';
	echo "Connected successfully";

	$sql = "INSERT INTO `books` (vendor_id, ISBN, book_name, book_author, release_date, edition, category, price)
			VALUES ('".$_SESSION["id"]."', '".$_POST['form-isbn']."', '".$_POST["form-name"]."' ,'".$_POST["form-author"]."', '". $_POST['form-date']."', '". $_POST['form-edition'] ."', '". $_POST['form-category']."', '". $_POST['form-price'] ."')";
	echo $sql;

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	
	header("location: ../../books.php?added=true");
?>