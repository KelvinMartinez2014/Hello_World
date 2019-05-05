<?php 
	session_start();

	include 'resources/php/config.php';
	
	if(isset($_POST['save_btn']))
	{
		$filetemp= $_FILES ['img']['tmp_name'];
		$filename=$_FILES['img']['name'];
		$filetype= $_FILES['img']['type'];
		$filepath= "resources/images/".$filename;
		
		if($filetype<>"image/jpeg" && $filetype<>"image/png"){
			header("location:AddImage.php?error=Type");}
		
		$Images=array();
		echo "Image Inserted Successfully...";
		echo "Name = ".$filename." Path = ".$filepath." Temp-name = ".$filetemp." Filetype = ".$filetype;
		$sql="select * from users order by UserID desc limit 1;";
		$result=$conn->query($sql);
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($Images, $row);
		}
		
		foreach($Images as $Image){
			$sql = "update users set Image=\"".$filepath."\" where UserID=".$Image['UserID'].";";
			echo "<br>ImageID = ".$Image['UserID'];
			echo "<br>ImagePath = ".$filepath;
			$conn->query($sql);
			move_uploaded_file($filetemp,$filepath);
		}	
		header("location:login.php?signup=true");
	}
?>
