<?php
include('config.php');
$user= $_COOKIE['user'];

if (isset($_POST['request_user'])) {
	
	INSERT INTO friends
(friend_one,friend_two,status) 
VALUES 
('$user','$friend','0');
}


?>