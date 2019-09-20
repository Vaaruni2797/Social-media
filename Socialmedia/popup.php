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
  <style>
    .glyphicon-off{
  color: white;
}
/*.dropdown{
     margin-top: 1px;
     margin-right: 2px;
     position:absolute;
     top:0;
     right:0;
 }*/
  </style>
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
      <li class=""><a href="" data-toggle="modal" aria-expanded="false" style="color: white" data-target="#edit"><i class="fa fa-2x fa-edit"></i></a></li>
      <li class=""><a href="" data-toggle="modal" aria-expanded="false" style="color: white" data-target="#search"><i class="fa fa-2x fa-search"></i></a></li>
      <li class=""><a href="logout.php" aria-expanded="false" style="color: white"><i class="fa fa-2x fa-power-off"></i></a></li>
</div>
    </ul>
   </div>
  </div>
</nav>
<div class="modal fade" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">EDIT PROFILE</h4>
      </div>
      <div class="modal-body" style="margin: 15px">
                    <form class="form-horizontal" role="form"  method="post" action="modify.php"  name="reg" id="reg">

<!-- <div class="form-group">
<label class="user"> Name:  </label>
<input type="text" class="form-control"  name="name" required placeholder="$name" >
</div> -->
<!-- <div class="form-group">
<label class="user"> Username:  </label>
<input type="text" class="form-control"  name="username" required placeholder="$username" > -->
</div>
<div class="form-group">
<label class="user"> Email ID: </label>
<input type="email" class="form-control"  name="email" required placeholder="$email" >
</div>
<div class="form-group">
<label class="user"> Date of birth: </label>
<input type="text" class="form-control"  name="dob" required placeholder="$dob" >
</div>
<div class="form-group">
<label class="user"> Gender:</label>
<input type="text" class="form-control"  name="gender" required placeholder="$gender" >
</div>
<div class="form-group">
<label class="user"> Location: </label>
<input type="text" class="form-control"  name="location" required placeholder="$location" >
</div>
<div class="form-group">
<label class="user"> Facebook ID:</label>
<input type="text" class="form-control" name="fbid" required placeholder="$fbid" >
</div>
<div class="form-group">
<label class="user">Instagram ID:</label>
<input type="text" class="form-control"  name="instaid" required placeholder="$instaid">
</div>
<div class="form-group">
<label class="user"> Contact number:  </label>
<input type="text" class="form-control"  name="contactno" required placeholder="contact number" >
</div>
<div class="form-group">
<label class="user">BIO:</label>
<input type="text" class="form-control"  name="bio" required placeholder="$bio">
</div>
<div class="form-group">
<label class="user">Hobbies:</label>
<input type="text" class="form-control"  name="hob" required placeholder="$hobbies">
</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" name="update_user" value="UPDATE" style="border-radius:0px;">
</div>
</form>
</div>
</div>
</div>
</div>
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
          <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive" style="border-radius: 100px"> 
        </div>
        <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
                            <h2><strong>Username</strong></h2>
                            <p>Bio</p>
                          </div>
                           <hr>
                          <ul class="container details"><strong>ABOUT</strong>
                          <p>                                          </p>
                            <li><p><i class="fa fa-facebook"></i>:  fbid</p></li>
                            <li><p><i class="fa fa-instagram"></i>:  instaid</p></li>
                            <li><p><i class="fa fa-phone"></i>:  contactno</p></li>
                            <li><p><i class="fa fa-gift"></i>:  birthday</p></li>
                            <li><p><i class="fa fa-map-marker"></i>:  location</p></li>
                          </ul>
                      </div>
                </div>
            </div>
</div>
</body>
</html>