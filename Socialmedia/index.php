<html>
<head>
	<style>
	.hidden{
		display:none;
	}
	</style>
</head>
<body>
<?php
session_start();
include('config.php');
$_
$user= $_COOKIE['user'];
require'classes/Friends.php';
$result = mysqli_query($db, "SELECT * FROM user");

while ($row = mysqli_fetch_array($result))
{
        echo $row['name'];

     
}
?>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src='js/Friends.js'></script>
</body>
</html>