<?php

//declaring fields
$name = $password = "";
$servername = "localhost";
$username = "root";
$password = "Katalambano90";
$dbname = "g.central";

//Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  die('error: '.$conn->connect_error);
}



if(isset($_POST['update'])){
$id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
$old = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['old']));
$new = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['new']));
$confirm = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['confirm']));
$hashed_pass = password_hash($new,PASSWORD_DEFAULT);

if($new !== $confirm){
  header("location: pass.php");
  exit();
} else {

$sql = "SELECT * FROM dce WHERE id = '$id'";
  $db = mysqli_query($conn,$sql);
    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $pass = $fill['pass'];
  }
}

if(!password_verify($old,$pass)){
   header("location: error.php");
} 

   else {
  	$sql = "UPDATE dce SET pass = '$hashed_pass' WHERE id = '$id'";
			$db = mysqli_query($conn,$sql);
			header("location: success.php");
} 
  }
}

