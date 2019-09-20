<?php 
  include('config.php');
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: signup.php');
  }
 
    session_destroy();
    unset($_SESSION['username']);
    unset($_COOKIE['user']);
    $res = setcookie('user', '', time() - 4200);
    header("location: signup.php");
  
  ?>