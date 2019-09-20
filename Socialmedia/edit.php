<?php include('config.php');
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
      <li class="active"><a href="#myprofile" data-toggle="tab" aria-expanded="true" style="color: white"><i class="fa fa-2x fa-user"></i></a></li>
      <li class=""><a href="#myfriends" data-toggle="tab" aria-expanded="false" style="color: white"><i class="fa fa-2x fa-group"></i></a></li>
      <li class=""><a href="#suggestions" data-toggle="tab" aria-expanded="false" style="color: white"><i class="fa fa-2x fa-user-plus"></i></a></li>
      <li class=""><a href="edit.php" style="color: white"><i class="fa fa-2x fa-edit"></i></a></li>
      <li class=""><a href="" data-toggle="modal" aria-expanded="false" style="color: white" data-target="#search"><i class="fa fa-2x fa-search"></i></a></li>
      <li class=""><a href="logout.php" aria-expanded="false" style="color: white"><i class="fa fa-2x fa-power-off"></i></a></li>
</div>
    </ul>
   </div>
  </div>
</nav>
<div class="modal fade" id="search">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" style="margin: 15px">
        <form class="" role="search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="w3-btn w3-white w3-border w3-border-primary w3-round-large">Submit</button>
</form>
</div>
</div>
</div>
</div>
<div class="container"> 
<div class="panel">
<div class="panel-body active" id="#myprofile">
<div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
<?php 

         $user= $_COOKIE['user'];
          $query1 = "SELECT * FROM image WHERE username = '$user'";
$result = mysqli_query($db,$query1);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo'<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width = "250" height= "250">';
  }
  }
  ?> 
</div>
<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
<div class="container" >
<form class="form-horizontal" role="form"  method="post" action="modify.php"  name="reg" id="reg">
<div class="form-group">
<h2><input type="text" class="form-control"  name="name" value="<?php
 $user= $_COOKIE['user'];
$sql = "SELECT name FROM user WHERE username ='$user'";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo $row['name'];
  }
}
?>" style="width: 200px"></h2></div>
<div class="form-group">
<p><input type="text" class="form-control"  name="bio" value="<?php
 $user= $_COOKIE['user'];
$sql = "SELECT bio FROM hobbies WHERE username ='$user'";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo $row['bio'];
  }
}
?>" style="width: 200px"></p></div><hr>
<div class="form-group">
<ul class="container details">
<li><p><i class="fa fa-facebook"></i>:<div class="form-group"><input type="text" class="form-control" name="fbid"  value="<?php
 $user= $_COOKIE['user'];
$sql = "SELECT fbid FROM contacts WHERE username ='$user'";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo $row['fbid'];
  }
}
?>" style="width: 200px"></div></p></li>
<li><p><i class="fa fa-instagram"></i>:<div class="form-group"><input type="text" class="form-control"  name="instaid"  value="<?php
 $user= $_COOKIE['user'];
$sql = "SELECT instaid FROM contacts WHERE username ='$user'";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo $row['instaid'];
   }
}
?>" style="width: 200px"></div></p></li>
<li><p><i class="fa fa-phone"></i>:<div class="form-group"><input type="text" class="form-control"  name="contactno"  value="<?php
 $user= $_COOKIE['user'];
$sql = "SELECT contactno FROM contacts WHERE username ='$user'";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo $row['contactno'];
   }
}
?>" style="width: 200px"></div></p></li>
<li><p><i class="fa fa-gift"></i>:<div class="form-group"><input type="text" class="form-control"  name="dob" value="<?php
 $user= $_COOKIE['user'];
$sql = "SELECT dob FROM user WHERE username ='$user'";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo $row['dob'];
     }
}
?>" style="width: 200px"></div></p></li>
<li><p><i class="fa fa-map-marker"></i>:<div class="form-group"><input type="text" class="form-control"  name="location"  value="<?php
 $user= $_COOKIE['user'];
$sql = "SELECT location FROM user WHERE username ='$user'";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo $row['location'];
     }
}
?>" style="width: 200px"></div></p></li>
</ul>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" name="update_user" value="UPDATE" style="border-radius:0px;">
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>