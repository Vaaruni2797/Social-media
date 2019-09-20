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
.h1, h1 {
    text-align: center;
    color: white;
}
.glyphicon-off{
  color: white;
}
.dropdown{
     margin-top: 1px;
     margin-right: 2px;
     position: relative;
    
 }
 </style>;
 <!-- <body style="background-image: url(http://www.pptback.com/uploads/business-network-marketing-backgrounds-powerpoint.jpg);"> -->
 <body background ="background.jpg">
 <div class="wrapper" align="center">
 <h2 style="padding-top: 120px">You are logged in</h2>
<h1 style="padding-top: 120px">You sure you wanna leave?</h1>
 <p style="color: white">Then, please logout! ;(</p>
    <a href="logout.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-off"></span></button></a>
     </div>
</body>
</html>