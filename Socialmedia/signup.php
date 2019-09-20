<?php include('config.php');
session_start();
include('config.php');
$name = $username = $email = $dob = $gender = $location = $age = $user = $nameErr = $UnErr = $genderErr = $locErr = "";
function ageCalculator($dob){
    if(!empty($dob)){
        $birthdate = new DateTime($dob);
        $today   = new DateTime('today');
        $age1 = $birthdate->diff($today)->y;
        return $age1;
    }else{
        return 0;
    }
}


if (isset($_POST['reg_user'])) {
  
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      header( "refresh:0; url=signup.php" );
      echo "<script type = 'text/javascript'>alert('Only letters and white space allowed in Name');</script>"; 
    }
    if (!preg_match("/^[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/",$username)) {
      header( "refresh:0; url=signup.php" );
      echo "<script type = 'text/javascript'>alert('Only letters,numbers and white space allowed in Username');</script>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header( "refresh:0; url=signup.php" );
      echo "<script type = 'text/javascript'>alert('Invalid email format');</script>";
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$location)) {
      header( "refresh:0; url=signup.php" );
      echo "<script type = 'text/javascript'>alert('Enter a valid location');</script>";
    }
    if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/",$password_1)) {
      header( "refresh:0; url=signup.php" );
      echo "<script type = 'text/javascript'>alert('Password must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters');</script>";
    }
  else if ($password_1 != $password_2) {
       header( "refresh:0; url=signup.php" );
       echo "<script type = 'text/javascript'>alert('The two passwords do not match');</script>";
  }
else{
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $users = mysqli_fetch_assoc($result);
  
  if ($users) { 
    if ($users['username'] === $username) {
      header( "refresh:0; url=signup.php" );
      echo "<script type = 'text/javascript'>alert('Username already exists. Enter details again!!');</script>";
    }
    
    if ($users['email'] === $email) {
      header( "refresh:0; url=signup.php" );
      echo "<script type = 'text/javascript'>alert('Email already exists. Enter details again!!');</script>";
    }
  }

 
    if(!$users){  
    $password = $password_1;
    $query = "INSERT INTO user (name, username, email, dob, gender, location, password) 
          VALUES('$name', '$username', '$email', '$dob', '$gender', '$location', '$password')";
    mysqli_query($db, $query);
    $query1 = "INSERT INTO location (username, location) 
          VALUES('$username', '$location')";
    mysqli_query($db, $query1);
    $age = ageCalculator($dob);
    $query2 = "INSERT INTO age (username, age, dob) 
          VALUES('$username', '$age', '$dob')";
    mysqli_query($db, $query2);
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "You are now logged in";
    setcookie('user', $username , time()+ 3600);
    
   header( "refresh:1; url=information1.php" );
  
}
}
}

// LOGIN 
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
    $passwordd = $password;
    $query = "SELECT * FROM user WHERE username='$username' AND password='$passwordd'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      echo 'you are now logged in ';
      setcookie('user', $username , time()+ 3600);
    
      header('location: profile3.php');
    }else {
     
      header( "refresh:0; url=signup.php" );
      echo ("<script type = 'text/javascript'> alert('Incorrect username or password. Try again!');</script>");
   
    }
  }


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
  <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\login\signup.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- <body style="background-image: url(http://www.pptback.com/uploads/business-network-marketing-backgrounds-powerpoint.jpg)";> -->
<body background ="background.jpg">
<div id="main">
<div class="container-fluid">
<div class="w3-container">
<h1 class="w3-myfont w3-jumbo" style="margin-top:200px; color: white" align="center"><strong>PERSONA</strong></h1>
                    <h3 align="center" style="color: white">Meet yourself in another person</h3>
                    <div class="wrapper" align="center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">SIGNUP</button></div>
<p style="color: white" align="center"><strong>Already a member? <a href="" data-toggle="modal" data-target="#modalRegister">LOG IN</a></strong></p>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">SIGNUP</h4>
      </div>
      <div class="modal-body" style="margin: 15px">
                    <form class="form-horizontal" role="form"  method="post" action="signup.php"  name="reg" id="reg">

<div class="form-group">
<label class="user"> Name:  </label>
<input type="text" class="form-control"  name="name" required placeholder="Enter you Name" >
</div>
<div class="form-group">
<label class="user"> Username:  </label>
<input type="text" class="form-control"  name="username" required placeholder="Enter your Username" >
</div>
<div class="form-group">
<label class="user"> Email ID: </label>
<input type="email" class="form-control"  name="email" required placeholder="Enter your Email ID" >
</div>
<div class="form-group">
<label class="user"> Date of birth </label>
<input type="text" class="form-control"  name="dob" required placeholder="Enter your DOB (YYYY-MM-DD)" >
</div>
<div class="form-group">
<label class="user"> Gender</label><br>
<input type="checkbox" class= "form-control-input" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?>value="female"> Female<br>
<input type="checkbox" class= "form-control-input" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?>value="male"> Male<br>
<input type="checkbox" class= "form-control-input" name="gender"<?php if (isset($gender) && $gender=="other") echo "checked";?>value="other"> Other<br>
</div>
<div class="form-group">
<label class="user"> Location: </label>
<input type="text" class="form-control"  name="location" required placeholder="Enter your location" >
</div>
<div class="form-group">
<label class="user"> Password: </label>
<input type="password" class="form-control" name="password_1" required placeholder="Enter password">
</div>
<div class="form-group">
<label class="user">Confirm Password: </label>
<input type="password" class="form-control"  name="password_2" required placeholder="Confirm password" >
</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" name="reg_user" value="SIGNUP" style="border-radius:0px;" ng-disabled="reg.$invalid || reg.$pending">
</div>
</form>
</div>
</div>
</div>
</div>
<div class="modal fade" id="modalRegister">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">SIGN IN</h4>
      </div>
      <div class="modal-body" style="margin: 15px">
                    <form class="form-horizontal" role="form"  method="post" action="signup.php" >


<div class="form-group">
<label class="user"> Username:  </label>
<input type="text" class="form-control"  name="username" placeholder="username" required >
</div>

<div class="form-group">
<label class="user"> Password: </label>
<input type="password" class="form-control"  name="password" placeholder="Enter password" required >
</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" name="login_user" value="Log in" style="border-radius:0px;">
</div>
<p>
      Not a member? <a href="" data-toggle="modal" data-target="#myModal" data-dismiss="modal">Sign up</a>
    </p>
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