
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

$deptNo = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['deptNo']));
$password = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['password']));

if(isset($_POST['login'])){
  $sql = "SELECT * FROM security WHERE dept = '$deptNo'";
  $result = mysqli_query($conn,$sql);
  if($result->num_rows>0){
  //fetch data from profile
  while(
    $fill = $result->fetch_assoc()){
    $pass = $fill['pass'];
    }
  }

  if(!password_verify($password,$pass)){
   header("location: error.php");
} 

else{
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



$sql = "SELECT * FROM hod2 WHERE deptNo = $deptNo";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $image = $fill['image'];
    $name = $fill['name'];
  }
}


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
    <meta name="description" content="gomoa central, districts in ghana,  planting for food and jobs, gomoa east, districts">
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
            <li class="nav-item active">
              <a class="nav-link" href="#">Administration
                <span class="sr-only">(current)</span>
              </a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="set.php?edit=<?php echo $deptNo?>">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="more.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signin.php">LogOut</a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav>
    <br/>
   
     <div class = "container">
       <form action = "load.php" method = "POST" enctype = "multipart/form-data">
        <input type = "hidden" name = "deptNo" value = "<?php echo $deptNo; ?>" />
        <div class = "row">
            <div class = "col-md-12">
                <h5><?php echo $department; ?></h5>
                <hr>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-12">
            <input type = "text" class = "form-control" name = "title1" value = "<?php echo $introT; ?>" required/>
            </div>
           </div>
           <br/>
           <div class = "row">
        <div class = "col-md-12 padding-top-10">
        <label for = "comment" class = "control-label"><h5>Introduction</h5></label>
        <textarea class = "form-control" rows = "5" name = "intro"><?php echo $intro; ?></textarea>
        </div>
        </div>
        <br/>
        <br/>
        <div class = "row">
      <div class = "col-md-3">
      <label for = "img1" class = "control-label">HOD Image:</label>
        </div>
      </div>
      <div class = "row">
       <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image; ?>" alt="HOD image" width = "50%" height = "25%" >
          </a>
        </div>
        </div>
        <div class = "row">
          <div class = "col-md-4">
      <input type = "file" name = "foto1" />
      <br/>
      <input type = "text" class = "form-control" name = "caption1" value = "<?php echo $name; ?>" required/>
      </div>
    </div>
    <br/>
         <h5 class="my-4 text-center text-lg-left">Projects</h5>
         <div class = "row">
            <div class = "col-md-12">
            <input type = "text" class = "form-control" name = "title2" value = "<?php echo $projectT; ?>" required/>
            </div>
           </div>
           <br/>
            <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image1; ?>" alt="project1" width = "100%" height = "50%" style = "width: 25em; height:20em;">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image2; ?>" alt="project2" width = "100%" height = "50%" style = "width: 25em; height:20em;">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image3; ?>" alt="project3" width = "100%" height = "50%" style = "width: 25em; height:20em;">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image4; ?>" alt="project4" width = "100%" height = "50%" style = "width: 25em; height:20em;">
          </a>
      </div>
    </div>
        <div class = "row">
      <div class = "col-md-3">
      <label for = "img1" class = "control-label">Image1:</label>
      <input type = "file" name = "foto2" />
      <input type = "text" class = "form-control" name = "caption2"  value = "<?php echo $project1; ?>" />
      </div>
      <div class = "col-md-3">
      <label for = "img2" class = "control-label">Image2:</label>
      <input type = "file" name = "foto3" />
      <input type = "text" class = "form-control" name = "caption3" value = "<?php echo $project2; ?>" />
      </div>
      <div class = "col-md-3">
      <label for = "img3" class = "control-label">Image3:</label>
      <input type = "file" name = "foto4" />
      <input type = "text" class = "form-control" name = "caption4" value = "<?php echo $project3; ?>" />
      </div>
      <div class = "col-md-3">
      <label for = "img4" class = "control-label">Image4:</label>
      <input type = "file" name = "foto5" />
      <input type = "text" class = "form-control" name = "caption5" value = "<?php echo $project4; ?>" />
      </div>
      </div>
        <br/>
        <div class = "row">
            <div class = "col-md-12">
            <input type = "text" class = "form-control" name = "title3" value = "<?php echo $statusT; ?>" required/>
            </div>
           </div>
           <br/>
           <div class = "row">
        <div class = "col-md-12 padding-top-10">
        <label for = "comment" class = "control-label"><h5>Status</h5></label>
        <textarea class = "form-control" rows = "5" name = "status"><?php echo $status; ?></textarea>
        </div>
        </div>
        <br/>
         <div class = "row">
            <div class = "col-md-12">
            <input type = "text" class = "form-control" name = "title4" value = "<?php echo $newsT; ?>" required/>
            </div>
           </div>
           <br/>
           <div class = "row">
        <div class = "col-md-12 padding-top-10">
        <label for = "comment" class = "control-label"><h5>News</h5></label>
        <textarea class = "form-control" rows = "5" name = "news"><?php echo $news; ?></textarea>
        </div>
        </div>
        <br/>
        <div class = "row">
        <div class = "col-md-12">
        <button type = "submit" class = "btn btn-success" name = "save" style ="float: right;">Update</button>
        </div>
        </div>
      </form>
      </div>
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