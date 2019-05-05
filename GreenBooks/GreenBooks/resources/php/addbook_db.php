<?php

	session_start();

	include 'config.php';
	echo "Connected successfully";
$Empty = "False";
	
	$ISBN=$_POST['form-isbn'];
	$BookName=$_POST['form-name'];
	$BookAuthor=$_POST['form-author'];
	$Release_Date=$_POST['form-date'];
	$Edition=$_POST['form-edition'];
	$Category=$_POST['form-category'];
	$Price=$_POST['form-price'];
	
	echo "ISBN = ".$ISBN." BookName= ".$BookName." BookAuthor = ".$BookAuthor."Release_Date = ".$Release_Date." Edition = ".$Edition."Category = ".$Category."Price = ".$Price."<br>";
	if($ISBN==''){
		echo "Im here 1";
		$Empty="True";}
	
	if($BookName==''){
		echo "Im here 2";
		$Empty="True";}
	
	if($BookAuthor==''){
		echo "Im here 3";
		$Empty="True";}	
	
	if($Release_Date==''){
		echo "Im here 4";
		$Empty="True";}
			
	if($Edition==''){
		echo "Im here 5";
		$Empty="True";}
		
	if($Category==''){
		echo "Im here 6";
		$Empty="True";}
			
	if($Price==''){
		echo "Im here 7";
		$Empty="True";}
		
	if($Empty<>"False"){
		echo "Im here 8";
		header("location: ../../additem.php?error=empty");
		die ('empty in system');
	}

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
