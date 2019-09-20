<?php
include('config.php');
include('suggest.php');
$user= $_COOKIE['user'];
if (isset($_POST['request_user'])) {
	INSERT INTO friends
(friend_one,friend_two,status) 
VALUES 
('$user','$friend','0');
}
if (isset($_POST['accept_user'])) {
UPDATE friends
SET status="1"
WHERE 
(friend_one="$user" OR friend_two="$user") 
AND 
(friend_one="$friend" OR friend_two="$friend");
}
if (isset($_POST['decline_user'])) {
UPDATE friends
SET status="2"
WHERE 
(friend_one="$user" OR friend_two="$user") 
AND 
(friend_one="$friend" OR friend_two="$friend");
}

?>