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
	echo $_POST["email"]. " - ". $_POST["pwd"];

	$email = $_POST["email"];
	$sql = "SELECT * FROM `users` WHERE email = '".$email."'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		if ($_POST["pwd"] == $row["Password"]) {
			$_SESSION["username"] = $row["Username"];
			$_SESSION["email"] = $row["Email"];
			$_SESSION["name"] = $row["Name"];
			$_SESSION["phone"] = $row["Phone"];
			$_SESSION["loggedin"] = true;
			$_SESSION["id"] = $row["UserID"];
			header("location: ../../index.php");
		} else {
			header("location: ../../login.php?error=pwd");
		}
	} else {
		header("location: ../../login.php?error=email");
	}
	// if ($conn->query($sql) === TRUE) {
 //    echo "New record created successfully";
	// } else {
	//     echo "Error: " . $sql . "<br>" . $conn->error;
	// }

?>