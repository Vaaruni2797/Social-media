<?php  
include('config.php');
    $user= $_COOKIE['user'];
    $friend = mysqli_real_escape_string($db, $_POST['search']);
	$result = mysqli_query($db, "SELECT * FROM user
    WHERE username LIKE '%{$friend}%'");
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
<nav class="navbar" style="background-color: #000080">
<div class="container-fluid">
<div class="navbar-header" >
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#" style="color: white"><strong>PERSONA</strong></a>
</div>
<div class="collapse navbar-collapse" id="mainNavBar">

<ul class="nav navbar-nav navbar-right">

<li class="active"><a href="profile3.php" style="color: white" title="my profile"><i class="fa fa-2x fa-user"></i></a></li>

<li class=""><a href="friendlist.php" style="color: white" title="my friends"><i class="fa fa-2x fa-group"></i></a></li>

<li class=""><a href="friendsuggest.php" style="color: white" title="friend suggestions"><i class="fa fa-2x fa-user-plus"></i></a></li>

<li class=""><a href="request_display.php"style="color: white" title="requests"><i class="fa fa-2x fa-clock-o"></i></a></li>

<li class=""><a href="edit.php" style="color: white" title="edit"><i class="fa fa-2x fa-edit"></i></a></li>

<li class=""><a href="" data-toggle="modal" aria-expanded="false" style="color: white" data-target="#search" title="search"><i class="fa fa-2x fa-search"></i></a></li>

<li class=""><a href="logout.php" aria-expanded="false" style="color: white" title="logout"><i class="fa fa-2x fa-power-off"></i></a></li>
</div>
</ul>
</div>
</div>
</nav>
<div class="container-fluid" id="search"align="center" style="padding-top: 50px">
<?php
$value = '';
$query = "SELECT * FROM friends WHERE (friend_one='$user' OR friend_two='$user') AND 
(friend_one='$friend' OR friend_two='$friend' AND status ='0')";
$results = mysqli_query($db,$query);
if (mysqli_num_rows($results) == 1) {
	$value = 0;
  }
$query1 = "SELECT * FROM friends WHERE (friend_one='$user' OR friend_two='$user') AND 
(friend_one='$friend' OR friend_two='$friend' AND status ='1')";
$results = mysqli_query($db,$query1);
if (mysqli_num_rows($results) == 1) {
    $value = 1;
}
if($value){
switch($value){
	case 0 :    while ($row = mysqli_fetch_array($result)){	
					echo '<center><a href="notfriendprofile.php?id='.$row['username'].'"><h2>'. $row['name'] . '</h2></a></center>';
				}
				break;
	case 1 :    while ($row = mysqli_fetch_array($result)){	
					echo '<center><a href="guestprofile.php?id='.$row['username'].'"><h2>'. $row['name'] . '</h2></a></center>';
				}
				break;	
}
}
else{
	while ($row = mysqli_fetch_array($result)){	
					echo '<center><a href="notfriendprofile.php?id='.$row['username'].'"><h2>'. $row['name'] . '</h2></a></center>';
				}
}
?>
</div>
</body>
</html>