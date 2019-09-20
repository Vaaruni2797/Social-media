<?php 
 include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SpooVaar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

a:hover {
    background-color: #ddd;
    color: black;
}

.previous {
    background-color: #f1f1f1;
    color: black;
}

.next {
    background-color: darkblue;
    color: white;
}

.round {
    border-radius: 50%;
}
.card{
  background-color: white;
  margin: 15px;
}
.h1, h1 {
    font-size: 100px;
    text-align: center;
    color: white;
    padding-top: 100px;
}
.glyphicon-off{
  color: white;
}
.dropdown{
     margin-top: 1px;
     margin-right: 2px;
     position:absolute;
     top:0;
     right:0;
 }
</style>;
</head>
<!-- <body style="background-image: url(http://www.pptback.com/uploads/business-network-marketing-backgrounds-powerpoint.jpg);"> -->
<body background ="background.jpg">
<div class="dropdown">
    <a href="logout.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-off"></span></button></a>
</div>
<div class="wrapper" align="center">
<h1 style="padding-top: 200px">This was fun!</h1>
<p style="color: white">lets build your profile</p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPersonality">click me</button></div>

<div class="modal fade" id="modalPersonality">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Details</h4>
      </div>
      <div class="modal-body" style="margin: 15px">
<form class="form-horizontal" role="form"  method="post" action="personal.php"  name="details" >
<div class="form-group">
<label class="user">Do you know your personality type? Then tell us!</label>
<input type="text" class="form-control" required name="ptype" placeholder="Personality-type">
</div>
     <input type="submit" class="btn btn-primary" name="personal_user" value="SUBMIT" style="border-radius:0px;">
      <p>
      Don't know your personality type? Then take a test <a href="https://www.16personalities.com/free-personality-test">here</a>
    </p>
    </div>
  </form>
  </div>
</div>
</div>
</div>
<!--<a href="logout.php">Log Out</a> -->
</body>
</html>