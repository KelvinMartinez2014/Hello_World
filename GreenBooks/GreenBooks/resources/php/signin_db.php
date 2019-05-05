<?php

	session_start();

	include 'config.php';
	echo "Connected successfully";
	echo $_POST["email"]. " - ". $_POST["pwd"];

	$email = $_POST["email"];
	$pasword= $_POST["pwd"];
	$empty = "False";
	
	echo "Email ".$email." Password ".$password;
	if($email ==''){
		$empty="True";}
	
	if($password ==''){
		$empty="True";}
	
	if($empty<>"False"){
		header("location: ../../login.php?error=login");
		die('login in system');
	}

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
