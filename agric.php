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

$id = 0;
if(isset($_GET['edit'])){
  $deptNo = $_GET['edit'];
    $edit_state = true;


    $sql = "SELECT * FROM profile2 WHERE deptNo = $deptNo";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $introT = $fill['introT'];
    $intro = $fill['intro'];
    $statusT = $fill['statusT'];
    $status = $fill['status'];
    $newsT = $fill['newsT'];
    $news = $fill['news'];
  }
}

$sql = "SELECT * FROM caption2 WHERE deptNo = $deptNo";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $projectT = $fill['projectT'];
    $project1 = $fill['project1'];
    $project2 = $fill['project2'];
    $project3 = $fill['project3'];
    $project4 = $fill['project4'];
  }
}
/*
$sql = "SELECT * FROM hod WHERE deptNo = $deptNo";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $image = $fill['image'];
    $name = $fill['name'];
  }
}
*/

$sql = "SELECT * FROM images2 WHERE deptNo = $deptNo";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $image1 = $fill['image1'];
    $image2 = $fill['image2'];
    $image3 = $fill['image3'];
    $image4 = $fill['image4'];
  }
}

$sql = "SELECT * FROM departments WHERE deptNo = $deptNo";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department = $fill['department'];
  }
}

}
else {
  header('location: index.php');
  }
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="gomoa central, districts in ghana,  planting for food and jobs, gomoa east, distrcts">
    <meta name="author" content="">

    <title>Gomoa Central Official Website</title>

    <!-- Bootstrap core CSS -->
    <link href="malt/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="malt/half-slider.css" rel="stylesheet">

    <link rel="stylesheet" href="malt/styles.css" />
    <!-- Font Awesome -->
    <link href="malt/font-awesome.min.css" rel="stylesheet">

    <link href="malt/thumbnail-gallery.css" rel="stylesheet">

  </head>

  <body>
 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Gomoa Central District Assembly</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Staff</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="signin.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav>
    <br/>
     <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <h5><?php echo $department; ?></h5>
                <hr>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-12">
                <h5><?php echo $introT; ?></h5>
                <p><?php echo $intro; ?></p>
            </div>
        </div>
         <h5 class="my-4 text-center text-lg-left"><?php echo $projectT; ?></h5>

      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image1; ?>" alt="project1" width = "100%" height = "50%" style = "width: 25em; height:20em;">
            <p><?php echo $project1; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image2; ?>" alt="project2" width = "100%" height = "50%" style = "width: 25em; height:20em;">
            <p><?php echo $project2; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image3; ?>" alt="project3" width = "100%" height = "50%" style = "width: 25em; height:20em;">
             <p><?php echo $project3; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image4; ?>" alt="project4" width = "100%" height = "50%" style = "width: 25em; height:20em;">
            <p><?php echo $project4; ?></p>
          </a>
      </div>
        </div>
        <div class = "row">
            <div class = "col-md-12">
                <h5><?php echo $statusT; ?></h5>
                <p><?php echo $status; ?></p>
            </div>
        </div>
    <div class = "row">
            <div class = "col-md-12">
                <h5><?php echo $newsT; ?></h5>
                <p><?php echo $news; ?></p>
            </div>
        </div>
        <br/>

         
</div>
<br/>
<br/>

<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; gomoa central district 2018</p>
      </div>
      <!-- /.container -->
    </footer>

</body>
</html>