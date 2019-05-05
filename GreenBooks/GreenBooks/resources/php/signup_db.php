<?php
 
	session_start();

	include 'config.php';

	
	echo "Connected successfully";
	
	#Initilize Variables (* Required)
	#===================================================
	
	$name=$_POST['name']; #*
	$username=$_POST['username']; #*
	$email=$_POST['email']; #*
	$phone=$_POST['phone']; 
	$password1=$_POST['pwd']; #*
	$password2=$_POST['pwd-2']; #*
	$Image=$_POST['Image'];
	$Empty="False";

	echo "Name ".$name." Username ".$username." Email ".$email." Phone ".$phone." Password1 ".$password1." Password2 ".$password2." Image ".$Image;
	#===================================================
	
	#Check in required inputs if there empty
	#===================================================
	
	if($name==''){
		echo "Im here 1";
		$Empty="True";}
	
	if($username==''){
		echo "Im here 2";
		$Empty="True";}
	
	if($email==''){
		echo "Im here 3";
		$Empty="True";}	
	
	if($password1==''){
		echo "Im here 4";
		$Empty="True";}
			
	if($password2==''){
		echo "Im here 5";
		$Empty="True";}
		
	if($Empty<>"False"){
		echo "Im here 6";
		header("location: ../../signup.php?error=empty");
		die ('empty in system');
	}
	
	#===================================================
	
	#Evaluation: Check inputed data on required inputs
	#===================================================
		
	#Password: Check Password == Verify Password
	#--------------------------------------------------
	if ($password1<>$password2) {
		header ("location:../../signup.php?error=password");
		die('password in system');
	}
	
	#===================================================
	
	#Validation: Inputed Data is already in the database
	#==================================================
	
	#Username
	#--------------------------------------------------
	$sql_user = "SELECT * FROM `users` WHERE Username = '".$username."';";
	echo $sql_user."<br/>";
	$result = mysqli_query($conn, $sql_user);
	
	if (mysqli_num_rows($result)  > 0) {
		#header("location: ../../signup.php?error=username");
		#die('user in system');
	}
	#--------------------------------------------------

	#Email
	#--------------------------------------------------
	
	$sql_email = "SELECT * FROM `users` WHERE Email = '".$email."';";
	#echo $sql_email."<br/>";
	$result = mysqli_query($conn, $sql_email);
	
	if (mysqli_num_rows($result)  > 0) {
		#header("location: ../../signup.php?error=email");
		#die('email in system');
	}
	
	#--------------------------------------------------
	
	#==================================================
	
	#Evaluation: Check inputed data on optional inputs
	#===================================================
	
	#phone: No data? Save in database null 
	#--------------------------------------------------
	if ($phone=='') {
		$phone = null;
	}
	#-------------------------------------------------
	
	#Image:Radio Button No? Save default path
	#--------------------------------------------------
	if($Image=="No"){
		$imagepath="resources\images\default.jpg";
	}
	#--------------------------------------------------
			
	#===================================================
	
	#Working with the database
	#===================================================
	
	$sql = "INSERT INTO `users` (Name, Email, Username, Password, Phone, Image)
			VALUES ('".$name."', '".$email."', '".$username."' ,'".$password1."', '". $phone."', '".$imagepath."');";
	
	echo $sql;

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	#===================================================
	
	#Load Next Page
	#===================================================
	if($Image=="Yes"){
		header("location: ../../AddImage.php");
	}
	else{
		header("location: ../../login.php?signup=true");
	}
	#===================================================
?>
