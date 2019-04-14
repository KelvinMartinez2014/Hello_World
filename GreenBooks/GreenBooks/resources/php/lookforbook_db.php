<?php 
	session_start();


	include 'config.php';
	echo "Connected successfully";

	$edited = false;

	$sql = "SELECT * FROM books WHERE ";

	if(isset($_POST['form-isbn']) && $_POST['form-isbn'] != ""){
		$sql = $sql . "ISBN LIKE \"%".$_POST['form-isbn']."%\"";
		$edited = true;
	}
	if(isset($_POST["form-name"]) && $_POST["form-name"] != ""){
		if ($edited) {
			$sql = $sql . " AND ";
		}
		$sql = $sql . "book_name = '".$_POST["form-name"]."'";
		$edited = true;
	}if(isset($_POST["form-author"]) && $_POST["form-author"] != ""){
		if ($edited) {
			$sql = $sql . " AND ";
		}
		$sql = $sql . "book_author LIKE '%".$_POST["form-author"]."%'";
		$edited = true;
	 }

	//echo $sql;

	if(isset($_POST['form-date'])){
		if ($edited) {
			$sql = $sql . " AND ";
		}
		$sql = $sql . "release_date LIKE '%".$_POST['form-date']."%' ";
		$edited = true;
	}

	if(isset($_POST['form-edition'])){
		if ($edited) {
			$sql = $sql . " AND ";
		}
		$sql = $sql . "edition = ".$_POST['form-edition']." ";
		$edited = true;
	}
	echo $sql . "<br>";
	$result = mysqli_query($conn, $sql);
	 // echo("Error description: " . mysqli_error($conn));
	$book_object = array();
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($book_object, $row);
	} 

	foreach ($book_object as $row){
		echo $row["book_name"] . "<br>";
	}


?>