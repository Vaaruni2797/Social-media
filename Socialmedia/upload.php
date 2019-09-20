<?php

include('config.php');
$user= $_COOKIE['user'];

if (isset($_POST['submit'])) {
	$filename = addslashes($_FILES["img"]["name"]);
	$tmpname = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
	$filetype = addslashes($_FILES["img"]["type"]);
	$array =  array('jpg','jpeg','png');
	$ext = pathinfo($filename,PATHINFO_EXTENSION);
	if(!empty($filename)){
		if(in_array($ext,$array)){
			$query = "INSERT INTO image ( username, image, image_text) 
  			  VALUES('$user', '$tmpname', '$filename')";
  			  mysqli_query($db,$query);
  			
		}
		else{
		echo"Unsupported format";
	}
	}
	else{
		echo"please select image";
	}
}
header( "refresh:0; url=information1.php" );
?>
