<?php
include('config.php'); ?>
<html>
<head>
<title>spoovaar</title>
</head>
<body>
<?php
 $user= $_COOKIE['user'];
echo $_COOKIE['user'];
$sql = "SELECT username, ptype FROM personality WHERE username ='$user'";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo $row['username'] . "<br>";
    echo $row['ptype'] . "<br>";
  }
}



























?>
</body>
</html>