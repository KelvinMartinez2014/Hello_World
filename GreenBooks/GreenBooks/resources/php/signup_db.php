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
	echo $_POST["username"]. " - ". $_POST["pwd"];


	if (!isset($_POST["phone"])) {
		$phone = null;
	} else {
		$phone = $_POST["phone"];
	}
	$sql = "INSERT INTO `users` (Name, Email, Username, Password, Phone)
			VALUES ('".$_POST["name"]."', '".$_POST['email']."', '".$_POST["username"]."' ,'".$_POST["pwd"]."', '". $phone."')";
	echo $sql;

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$_SESSION["username"] = $_POST["username"];
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["phone"] = $phone;
	$_SESSION["loggedIn"] = true;
	header("location: ../../index.php");
?>