<?php  
include('config.php');
$user= $_COOKIE['user'];
$result = mysqli_query($db,"SELECT * FROM friends WHERE (friend_one='$user' OR friend_two='$user') AND status = '1'");    
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

<li class=""><a href="#myfriends" style="color: white" title="my friends"><i class="fa fa-2x fa-group"></i></a></li>

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
<div class="modal fade" id="search">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" style="margin: 15px">
        <form class="" role="search" method="post" action = "search.php">
    <div class="form-group">
        <input type="text" class="form-control" name ="search" placeholder="Search">
    </div>
    <button type="submit" class="w3-btn w3-white w3-border w3-border-primary w3-round-large">Submit</button>
</form>
</div>
</div>
</div>
</div>

<div class="container-fluid" id="myfriends" align="center" style="padding-top: 50px">
<?php
while ($row = mysqli_fetch_array($result)){
if($row['friend_one'] == $user){
	echo '<a href="guestprofile.php?id='.$row['friend_two'].'"><h2>'. $row['friend_two'] . '</h2></a>';
	echo '<a href="unfriend.php?id='.$row['friend_two'].'"><h5>'. 'Unfriend' . '</h5></a>';
	 }
else{
	echo '<a href="guestprofile.php?id='.$row['friend_one'].'"><h2>'. $row['friend_one'] . '</h2></a>';
	echo'<a href="unfriend.php?id='.$row['friend_one'].'"><h5>'. 'Unfriend' . '</h5></a>';
	
   }
   echo '<hr>';
}
?>
</div>
</body>
</html>