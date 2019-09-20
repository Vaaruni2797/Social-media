<?php 
include('config.php');
$ptype = " ";
$pno = " ";
$user =" ";

if (isset($_POST['personal_user'])) 

  $ptype = mysqli_real_escape_string($db, $_POST['ptype']);
  $user= $_COOKIE['user'];
  //echo $_COOKIE['user'];
  $ptype = strtoupper($ptype);
if($ptype == 'ARCHITECT')
	$pno = 1;
else if($ptype == 'LOGICIAN')
	$pno = 2;
else if($ptype == 'ADVOCATE')
	$pno = 3;
else if($ptype == 'COMMANDER')
	$pno = 4;
else if($ptype == 'DEBATER')
	$pno = 5;
else if($ptype == 'MEDIATOR')
	$pno = 6;
else if($ptype == 'PROTAGONIST')
	$pno = 7;
else if($ptype == 'CAMPAIGNER')
	$pno = 8;
else if($ptype == 'LOGISTICIAN')
	$pno = 9;
else if($ptype == 'DEFENDER')
	$pno = 10;
else if($ptype == 'EXECUTIVE')
	$pno = 11;
else if($ptype == 'CONSUL')
	$pno = 12;
else if($ptype == 'VIRTUOSO')
	$pno = 13;
else if($ptype == 'ADVENTURER')
	$pno = 14;
else if($ptype == 'ENTREPRENEUR')
	$pno = 15;
else if($ptype == 'ENTERTAINER')
	$pno = 16;


  $query = "INSERT INTO personality (username,ptype,pno) 
  			  VALUES('$user','$ptype','$pno')";
  	mysqli_query($db, $query);
  	header( "refresh:0; url=information1.php" );


 ?>