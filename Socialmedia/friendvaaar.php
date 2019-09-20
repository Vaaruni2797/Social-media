<?php  
//session_start();
include('config.php');
//$con= mysqli_connect("localhost", "root", "", "");
$user= $_COOKIE['user'];
$result = mysqli_query($db,"SELECT * FROM personality WHERE username ='$user'");
while ($row = mysqli_fetch_array($result))
{
        $ptype = $row['ptype'];
}
 $result1 = mysqli_query($db, "SELECT * FROM  personality
    WHERE  ptype = '$ptype' AND username != '$user'");
?>
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

	while ($row = mysqli_fetch_assoc($result1))
{
       echo '<a href="/requestvaar.php?id='.$row['username'].'"><h2>'. $row['username'] . '</h2></a>';
	   ?>
       <button type="btn btn-success">ADD FRIEND</button>
	   <?php
}
?>
</body>
</html>