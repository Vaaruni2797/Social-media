<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: signup.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: signup.php");
  }
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
</style>
</head>
<body style="background-image: url(http://www.pptback.com/uploads/business-network-marketing-backgrounds-powerpoint.jpg);">
<div class="wrapper" align="center">
<h1 style="padding-top: 200px">Welcome</h1>
<p style="color: white">Tell us more about you!!!</p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFbid">Dive In</button></div>
<div class="modal fade" id="modalFbid">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Details</h4>
      </div>
      <div class="modal-body" style="margin: 15px">
<form class="form-horizontal" role="form"  method="post" action="info.php"  name="details" id="details">
<?php include('errors.php'); ?> 
<div class="form-group">
<label class="user">Tell us your facebook ID</label>
<input type="text" class="form-control" id="text1" name="fbid" placeholder="facebook ID">
</div>
      <div class="form-group">
<input type="submit" class="btn btn-primary" name="social_user" value="SUBMIT" style="border-radius:0px;">
    </div>
  </form>
  </div>
</div>
</div>
<div class="modal fade" id="modalInstaid">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Details</h4>
      </div>
      <div class="modal-body" style="margin: 15px">
<form class="form-horizontal" role="form"  method="post" action="info.php"  name="details" id="details">
<?php include('errors.php'); ?>
<div class="form-group">
<label class="user">Tell us your Instagram ID</label>
<input type="text" class="form-control" id="text1" name="instaid" placeholder="Instagram ID">
</div>
      <input type="submit" class="btn btn-primary" name="social_user" value="SUBMIT" style="border-radius:0px;">
    </div>
  </form>
  </div>
</div>
</div>
</div>
<div class="modal fade" id="modalContact">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Details</h4>
      </div>
      <div class="modal-body" style="margin: 15px">
<form class="form-horizontal" role="form"  method="post" action="info.php"  name="details" id="details">
<?php include('errors.php'); ?>
<div class="form-group">
<label class="user">Umm give us your contact number too?</label>
<input type="text" class="form-control" id="text1" name="contactno" placeholder="Contact number">
</div>
      <input type="submit" class="btn btn-primary" name="social_user" value="SUBMIT" style="border-radius:0px;">
    </div>
  </form>
  </div>
</div>
</div>
<div class="modal fade" id="modalHobbies">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Details</h4>
      </div>
      <div class="modal-body" style="margin: 15px">
<form class="form-horizontal" role="form"  method="post" action="info.php"  name="details" id="details">
<?php include('errors.php'); ?>
<div class="form-group">
<label class="user">What are your hobbies?</label>
<input type="text" class="form-control" id="text1" name="hobby" placeholder="Hobbies">
</div>
      <input type="submit" class="btn btn-primary" name="hob_user" value="SUBMIT" style="border-radius:0px;">
    </div>
  </form>
  </div>
</div>
</div>
<div class="modal fade" id="modalPersonality">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Details</h4>
      </div>
      <div class="modal-body" style="margin: 15px">
<form class="form-horizontal" role="form"  method="post" action="info.php"  name="details" id="details">
<?php include('errors.php'); ?>
<div class="form-group">
<label class="user">Do you know your personality type? Then tell us!</label>
<input type="text" class="form-control" id="text1" name="ptype" placeholder="Personality-type">
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
</body>
</html>