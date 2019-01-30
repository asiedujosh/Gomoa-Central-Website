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
  $sql = "SELECT * FROM dce WHERE id = '3' ";
  $result = mysqli_query($conn,$sql);
  if($result->num_rows>0){
  //fetch data from profile
  while(
    $fill = $result->fetch_assoc()){
    $pass = $fill['pass'];
    $id = $fill['id'];
    }
  }

  if(!password_verify($password,$pass)){
   header("location: error.php");
} 
  else{

     $sql = "SELECT * FROM dce";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
      while(
    $fill = $db->fetch_assoc()){
        $head = $fill['title'];
        $message = $fill['message'];
        $image = $fill['image'];
        $name = $fill['name'];

      }
    }
  } 
}
else{
   header('location: index.php');
}


?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="crops, crops in ghana, farms in ghana, buy crops, vegetables, tubers, agric, planting for food and jobs">
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
              <a class="nav-link" href="sett.php?edit=<?php echo $id?>">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="more.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="staff.php">Staff</a>
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
       <form action = "setto.php" method = "POST" enctype = "multipart/form-data">
        <div class = "row">
            <div class = "col-md-12">
                <h5>The District Chief Executive</h5>
                <hr>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-12">
            <input type = "text" class = "form-control" name = "head" value = "<?php echo $head; ?>" required/>
            </div>
           </div>
           <br/>
           <div class = "row">
        <div class = "col-md-12 padding-top-10">
        <label for = "comment" class = "control-label"><h5>Introduction</h5></label>
        <textarea class = "form-control" rows = "5" name = "message"><?php echo $message; ?>
        </textarea>
        </div>
        </div>
        <br/>
    
        <div class = "row">
      <div class = "col-md-3">
      <label for = "img1" class = "control-label">DCE Image:</label>
        </div>
      </div>
      <div class = "row">
       <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src = "<?php echo $image; ?>" alt = "DCE image" width = "50%" height = "25%" >
          </a>
        </div>
        </div>
        <div class = "row">
          <div class = "col-md-4">
      <input type = "file" name = "dce" />
      <br/>
      <input type = "text" class = "form-control" name = "name" value = "<?php echo $name; ?>" required/>
      </div>
    </div>
    <br/>
     <div class = "row">
        <div class = "col-md-12">
        <button type = "submit" class = "btn btn-success" name = "dce">Update</button>
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