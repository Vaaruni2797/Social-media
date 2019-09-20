<?php
session_start();
include('config.php');

$name = "";
$username = "";
$email = "";
$dob = "";
$gender = "";
$location = "";
$age = " ";
$user =" ";

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



  if ($password_1 != $password_2) {
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
      echo "<script type = 'text/javascript'>alert('Username already exists');</script>";
    }

    if ($users['email'] === $email) {
      header( "refresh:0; url=signup.php" );
      echo "<script type = 'text/javascript'>alert('email already exists');</script>";
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
    
   header( "refresh:0; url=information1.php" );
  
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
34

?>