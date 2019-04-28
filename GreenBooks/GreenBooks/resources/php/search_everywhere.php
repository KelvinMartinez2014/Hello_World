<?php 
	session_start();

	include 'config.php';
	echo "Connected successfully";

	

	$sql = "SELECT * FROM books WHERE ";

	
	 	$sql = $sql . "ISBN LIKE \"%".$_GET['Search']."%\" OR ";
	
	 	$sql = $sql . "book_name LIKE '%".$_GET['Search']."%' OR ";
	 
		$sql = $sql . "book_author LIKE '%".$_GET['Search']."%' OR ";

		// $sql = $sql . "release_date LIKE '%".$_GET['Search']."%' OR ";
	
		// $sql = $sql . "edition = ".$_GET['Search']." OR ";

		$sql = $sql . "category = '".$_GET['Search']."' ";

		echo $sql;
	
	$result = mysqli_query($conn, $sql);
	 echo("Error description: " . mysqli_error($conn));
	$book_object = array();
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($book_object, $row);
	} 

	$_SESSION["book_results"] = $book_object;
	header("Location: ../../search_results.php");
	foreach ($book_object as $row){
		echo $row["book_name"] . "<br>";
	}


?>