<!DOCTYPE html>
<html lang="en">
<head>
<title>Persona</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php  
include('config.php');
$friend= $_GET['id'];
$user= $_COOKIE['user'];
$value = '';
$query = "SELECT * FROM friends WHERE (friend_one='$user' OR friend_two='$user') AND 
(friend_one='$friend' OR friend_two='$friend' AND status ='1')";
$results = mysqli_query($db,$query);
if (mysqli_num_rows($results) == 1) {
	$value = 0;
  }
$query1 = "SELECT * FROM friends WHERE (friend_one='$user' OR friend_two='$user') AND 
(friend_one='$friend' OR friend_two='$friend' AND status ='0')";
$results = mysqli_query($db,$query1);
if (mysqli_num_rows($results) == 1) {
    $value = 1;
}
if($value){
switch($value){
	case 0 :    header( "refresh:0; url=profile3.php" );
    			echo ("<script type = 'text/javascript'> alert('You are already friends');</script>");
				break;
	case 1 :    header( "refresh:0; url=profile3.php" );
    			echo ("<script type = 'text/javascript'> alert('You have sent the request already or check your requests');</script>");
				break;
	
}
}
  
      else{
			mysqli_query($db,"INSERT INTO friends
			(friend_one,friend_two,status) 
			VALUES 
			('$user','$friend','0');");
			header( "refresh:0; url=profile3.php" );
      		echo ("<script type = 'text/javascript'> alert('Request sent!');</script>");
  }

?>
</body>
</html>