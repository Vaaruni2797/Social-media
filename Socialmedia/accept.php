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
$query = "UPDATE friends SET status='1' WHERE 
(friend_one='$user' OR friend_two='$user') AND 
(friend_one='$friend' OR friend_two='$friend')";
mysqli_query($db,$query);
header( "refresh:0; url=request_display.php" );
      echo ("<script type = 'text/javascript'> alert('Request accepted!');</script>");

?>
</body>
</html>