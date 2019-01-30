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

if(isset($_POST['save'])){
$deptNo = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['deptNo']));
$introT = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['title1']));
$intro = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['intro']));
$statusT = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['title3']));
$status = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['status']));
$newsT = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['title4']));
$news = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['news']));
$name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['caption1']));
$projectT = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['title2']));
$project1 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['caption2']));
$project2 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['caption3']));
$project3 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['caption4']));
$project4 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['caption5']));
$target1 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['foto1']));
$target2 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['foto2']));
$target3 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['foto3']));
$target4 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['foto4']));
$target5 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['foto5']));

/*Target1 
  $target1 = $_FILES['foto1']['name'];
  $temp = $_FILES['foto1']['tmp_name'];
  $file_to_saved1 = "document/".$target1;
  move_uploaded_file($temp, $file_to_saved1);

  /*Target2 
  $target2 = $_FILES['foto2']['name'];
  $temp = $_FILES['foto2']['tmp_name'];
  $file_to_saved2 = "document/".$target2;
  move_uploaded_file($temp, $file_to_saved2);

  /*Target3 
  $target3 = $_FILES['foto3']['name'];
  $temp = $_FILES['foto3']['tmp_name'];
  $file_to_saved3 = "document/".$target3;
  move_uploaded_file($temp, $file_to_saved3);

  /*Target4 
  $target4 = $_FILES['foto4']['name'];
  $temp = $_FILES['foto2']['tmp_name'];
  $file_to_saved4 = "document/".$target4;
  move_uploaded_file($temp, $file_to_saved4);

  /*Target5 
  $target5 = $_FILES['foto5']['name'];
  $temp = $_FILES['foto5']['tmp_name'];
  $file_to_saved5 = "document/".$target5;
  move_uploaded_file($temp, $file_to_saved5);
*/
 
 
//Updating the profile
 $sql = "UPDATE profile2 SET introT = '$introT', intro = '$intro', statusT = '$statusT', status = '$status',
 		newsT = '$newsT', news = '$news' WHERE deptNo = '$deptNo'";
 	     $db = mysqli_query($conn,$sql);


 //Updating Captions

 $sql = "UPDATE caption2 SET projectT = '$projectT', project1 = '$project1', project2 = '$project2', project3 = '$project3',
 		project4 = '$project4' WHERE deptNo = '$deptNo'";
 	$db = mysqli_query($conn,$sql);


 //Updating HOD

 $sql = "UPDATE hod2 SET name = '$name' WHERE deptNo = '$deptNo'";
 	$db = mysqli_query($conn,$sql);



 if(!$target1 == ""){
			$sql = "UPDATE hod2 SET image = '$target1' WHERE deptNo = '$deptNo'";
			$db = mysqli_query($conn,$sql);
		} else{ }



//Updating Images

 if(!$target2 == ""){
			$sql = "UPDATE images2 SET image1 = '$target2' WHERE deptNo = '$deptNo'";
			$db = mysqli_query($conn,$sql);
		} else{ }

 if(!$target3 == ""){
			$sql = "UPDATE images2 SET image2 = '$target3' WHERE deptNo = '$deptNo'";
			$db = mysqli_query($conn,$sql);
		} else{ }

if(!$target4 == ""){
			$sql = "UPDATE images2 SET image3 = '$target4' WHERE deptNo = '$deptNo'";
			$db = mysqli_query($conn,$sql);
		} else{ }

if(!$target5 == ""){
			$sql = "UPDATE images2 SET image4 = '$target5' WHERE deptNo = '$deptNo'";
			$db = mysqli_query($conn,$sql);
		} else{ }

    

  header('location: success.php');
  exit();



} 





if(isset($_POST['admin'])){
$old = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['old']));
$new = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['new']));
$confirm = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['confirm']));
$hashed_pass = password_hash($new,PASSWORD_DEFAULT);

if($new !== $confirm){
  header("location: pass.php");
  exit();
} else {

$sql = "SELECT * FROM admin WHERE id = 1";
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
    $sql = "UPDATE admin SET pass = '$hashed_pass' WHERE id = 1";
      $db = mysqli_query($conn,$sql);
      header("location: success.php");
} 
  }
}


/*
if(isset($_POST['update'])){
$deptNo = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['deptNo']));
$old = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['old']));
$new = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['new']));
$confirm = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['confirm']));
$hashed_pass = password_hash($new,PASSWORD_DEFAULT);

if($new !== $confirm){
  header("location: pass.php");
  exit();
} else {

$sql = "SELECT * FROM security WHERE dept = '$deptNo'";
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
  	$sql = "UPDATE security SET pass = '$hashed_pass' WHERE dept = '$deptNo'";
			$db = mysqli_query($conn,$sql);
			header("location: success.php");
} 
  }
}

*/


if(isset($_POST['dce'])){
$head = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['head']));
$message = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['message']));
$pass2 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['pass2']));
$name = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['name']));
$target1 = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['dce']));
/*Target1 
  $target1 = $_FILES['dce']['name'];
  $temp = $_FILES['dce']['tmp_name'];
  $file_to_saved = "document/".$target1;
  move_uploaded_file($temp, $file_to_saved);

*/

$sql = "UPDATE dce2 SET title = '$head', message = '$message', name = '$name' WHERE id = '3'";
		 $db = mysqli_query($conn,$sql);

		 if(!$target1 == ""){
			$sql = "UPDATE dce2 SET image = '$target1' WHERE id = '3'";
			$db = mysqli_query($conn,$sql);
		} else{ }

		 if(!$db){
		 	echo "Progress failed";
		 } else {
		 	header('location: success.php');
		 }
}/* else {
	header('location: signin.php');
}
*/
