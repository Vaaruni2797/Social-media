<?php 
include('config.php');

$name = "";
$dob = "";
$location = "";
$age = " ";
$fbid = " ";
$instaid = " ";
$contactno = " ";
$pass1 = " ";
$pass2 = " ";
$bio = " ";

$user= $_COOKIE['user'];

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


if (isset($_POST['update_user'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $fbid = mysqli_real_escape_string($db, $_POST['fbid']);
  $instaid = mysqli_real_escape_string($db, $_POST['instaid']);
  $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
  $bio = mysqli_real_escape_string($db, $_POST['bio']);


$sql = "UPDATE user SET name = '$name', dob = '$dob',  location ='$location' WHERE username ='$user'";
mysqli_query($db, $sql); 
$age = ageCalculator($dob);
$sql1 = "UPDATE age SET age ='$age',dob = '$dob' WHERE username ='$user'"; 
mysqli_query($db, $sql1);
$sql2 = "UPDATE location SET location = '$location'  WHERE username ='$user'"; 
mysqli_query($db, $sql2);
$sql3 = "UPDATE contacts SET fbid ='$fbid', instaid = '$instaid', contactno ='$contactno' WHERE username ='$user'"; 
mysqli_query($db, $sql3);
$sql4 = "UPDATE hobbies SET bio = '$bio' WHERE username ='$user'"; 
mysqli_query($db, $sql4);
header( "refresh:0; url=profile3.php");
}

if (isset($_POST['update_pass'])) {
  $pass1 = mysqli_real_escape_string($db, $_POST['pass']);
  $pass2 = mysqli_real_escape_string($db, $_POST['pass']);
  if ($pass1 != $password_1) {
       header( "refresh:0; url=editp.php" );
       echo "<script type = 'text/javascript'>alert('Incorrect password');</script>";
  }
   else if ($pass2 == $password_1) {
       header( "refresh:0; url=editp.php" );
       echo "<script type = 'text/javascript'>alert('Current password and previous password can not be same');</script>";
  }
else{
$sql5 = "UPDATE user SET password = '$pass2' WHERE username ='$user'"; 
mysqli_query($db, $sql5);
header( "refresh:0; url=profile3.php");
}
}
?>