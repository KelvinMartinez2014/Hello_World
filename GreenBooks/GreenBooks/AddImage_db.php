<?php 
	if(isset($_POST['save_btn']))
	{
		if($con=mysqli_connect('localhost','root','qwer1234','greenbooks'))
		{
			$filetemp= $_FILES ['img']['tmp_name'];
			$filename=$_FILES['img']['name'];
			$filetype= $_FILES['img']['type'];
			$filepath= "resources/images/".$filename;
			$sql = "update users set Image=".$filepath." where UserID=14;";
			$conn->query($sql);
			move_uploaded_file($filetemp,$filepath);
			echo "Image Inserted Successfully...";
			echo "Name = ".$filename." Path = ".$filepath." Temp-name = ".$filetemp;
			header("location:login.php?signup=true");
		}
	}
?>
