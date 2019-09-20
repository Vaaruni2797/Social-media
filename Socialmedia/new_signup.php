<?php 
 session_start();
 $user = 'root';
 $pass = '';
 $db = 'social';

 $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
 
 echo "Working!!";
 if (isset($POST['signup_btn'])) {
 	$name = ($POST['name']);
 	$username = ($POST['username']);
 	$email = ($POST['email']);
 	$dob = ($POST['dob']);
 	$gender = ($POST['gender']);
 	$location = ($POST['location']);
 	$password = ($POST['password']);
 	$password2 = ($POST['password2']);

 	if ($password==$password2) {
 		$sql = "INSERT INTO `users`(`name`,`username`,`email`,`dob`,`gender`,`location`,`password`,`password2`) VALUES('$name', '$username', '$email', '$dob', '$gender', '$location', '$password','password2')";
 		mysql_query($sql);
 		echo "Working!!!";
 		$_SESSION['message'] = "You are now logged in!";
 		$_SESSION['username'] = $username;
 		header("location: welcome.php");
 	}
 	else{
 		$_SESSION['message']= "The two passwords do not match";
 	}
 }
 ?>
<!DOCTYPE html>
<html>
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
<link rel="stylesheet" type="text/css" href="new_signup.css">
</head>
<body style="background-image: url(http://www.pptback.com/uploads/business-network-marketing-backgrounds-powerpoint.jpg);">
<div id="main">
<div class="container-fluid">
<div class="w3-container w3-myfont">
<h1 class="w3-myfont w3-jumbo" align="center" style="padding-top: 120px"><strong style="color: white">SpooVaar</strong></h1>
<div class="wrapper" style="padding-bottom: 30px" align="center">
                    <h3 style="color: white">Signup here</h3>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">SIGNUP</button></div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">SIGNUP</h4>
      </div>
      <div class="modal-body">
<form method="post" action="new_signup.php">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" class="textInput"></td>
		</tr>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput" required></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textInput" required></td>
		</tr>
		<tr>
			<td>Date of birth:</td>
			<td><input type="text" name="dob" class="textInput" required></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><input type="text" name="gender" class="textInput" required></td>
		</tr>
		<tr>
			<td>Location:</td>
			<td><input type="text" name="location" class="textInput" required></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput" required></td>
		</tr>
		<tr>
			<td>Confirm password:</td>
			<td><input type="password" name="password2" class="textInput" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="signup_btn" value="Signup"></td>
		</tr>
	</table>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>