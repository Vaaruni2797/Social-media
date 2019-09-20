<?php 
include('config.php');
$hob = " ";
$bio = " ";
$user =" ";

if (isset($_POST['hob_user'])) 

  $hob = mysqli_real_escape_string($db, $_POST['hob']);
 $bio = mysqli_real_escape_string($db, $_POST['bio']);
  $user= $_COOKIE['user'];
  $query = "INSERT INTO hobbies (username,hobby,bio) 
  			  VALUES('$user','$hob','$bio')";
  	mysqli_query($db, $query);
  	header( "refresh:0; url=profile3.php" );


 ?>