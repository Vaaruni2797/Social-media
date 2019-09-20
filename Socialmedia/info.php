<?php 
include('config.php');

$fbid = " ";
$instaid = " ";
$contactno = " ";

if (isset($_POST['social_user'])) {

  $fbid = mysqli_real_escape_string($db, $_POST['fbid']);
  $instaid = mysqli_real_escape_string($db, $_POST['instaid']);
  $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
  $user_check_query = "SELECT * FROM contacts WHERE fbid='$fbid' OR instaid='$instaid' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $users = mysqli_num_rows($result);
  
  if ($users) { 
    if ($users['fbid'] === $fbid) {
      header( "refresh:0; url=information1.php" );
      echo "<script type = 'text/javascript'>alert('Person with above fb id already exists');</script>";
    
    }

    if ($users['instaid'] === $instaid) {
    header( "refresh:0; url=information1.php" );
    echo "<script type = 'text/javascript'>alert('Person with above insta id already exists');</script>";
    }
  }

  else {
    $user = $_COOKIE['user'];
    $query = "INSERT INTO contacts (username,instaid,fbid,contactno) 
          VALUES('$user','$instaid','$fbid','$contactno')";
    mysqli_query($db, $query);
    header( "refresh:0; url=information1.php" );
  }
}
 
?>