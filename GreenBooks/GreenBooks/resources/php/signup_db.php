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

	$email = $_POST["email"];
	$sql_email = "SELECT * FROM `users` WHERE email = '".$email."'";

	echo $sql_email."<br/>";
	$result = mysqli_query($conn, $sql_email);
	if (mysqli_num_rows($result)  > 0) {
		header("location: ../../signup.php?error=email");
		die('email in system');
	}
	$sql_user = "SELECT * FROM `users` WHERE Username = '".$_POST['username']."'";
	$result = mysqli_query($conn, $sql_user);

	if (mysqli_num_rows($result)  > 0) {
		header("location: ../../signup.php?error=username");
		die('user in system');
	}

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

	
	header("location: ../../login.php?signup=true");
?>