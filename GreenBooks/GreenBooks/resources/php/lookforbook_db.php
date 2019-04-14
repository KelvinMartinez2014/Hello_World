<?php 
	session_start();


	include 'config.php';
	echo "Connected successfully";

	$sql = "SELECT * FROM books WHERE ";

	if(isset($_POST['form-isbn']) && $_POST['form-isbn'] != " "){
		$sql = $sql . "ISBN = \"".$_POST['form-isbn']."\"";
	}
	// if(isset($_POST["form-name"]) && $_POST["form-name"] != " "){
	// 	$sql = $sql . "book_name = '".$_POST["form-name"]."', ";
	// }if(isset($_POST["form-author"]) && $_POST["form-author"] != " "){
	// 	$sql = $sql . "book_author = '".$_POST["form-author"]."', ";
	// // }

	// echo $sql;

	// if(isset($_POST['form-date'])){
	// 	$sql = $sql . "release_date = ".$_POST['form-date']." ";
	// }

	// if(isset($_POST['form-edition'])){
	// 	$sql = $sql . "edition = ".$_POST['form-edition']." ";
	// }
	echo $sql;
	$result = mysqli_query($conn, $sql);
	 echo("Error description: " . mysqli_error($conn));
	$book_object = array();
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($book_object, $row);
	} 

	for ($i=0; $i < sizeof($book_object)-1; $i++) { 
		$book_object[i];
	}


?>