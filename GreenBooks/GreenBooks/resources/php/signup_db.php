<?php

	session_start();

	include 'config.php';

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

	if($_POST['Image']=="Yes"){
		header("location: ../../AddImage.php");
	}
	else{
		header("location: ../../login.php?signup=true");
	}
?>
