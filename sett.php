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
  $id = $_GET['edit'];
    $edit_state = true;

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
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
           <li class="nav-item active">
              <a class="nav-link" href="#">Settings</a>
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
    <div class = "container">
    <form action="setto.php" method="post">
      <input type ="hidden" name = "id" value = "<?php echo $id; ?>"/>
      <br/>
      <div class = "row">
        <div class = "col-md-12 padding-top-10">
        <h4>Change Password</h4>
        <hr/>
      </div>
    </div>
    <br/>
    <div class = "row">
      <div class = "col-md-12 padding-top-10">
        <label for = "" class = "control-label"><h5>Current Password</h5></label>
        <input type = "password" class = "form-control" name = "old" placeholder = "Current Password" required/>
      </div>
    </div>
    <br/>
       <div class = "row">
      <div class = "col-md-12 padding-top-10">
        <label for = "" class = "control-label"><h5>New Password</h5></label>
        <input type = "password" class = "form-control" name = "new" placeholder = "new Password" required/>
      </div>
    </div>
    <br/>
     <div class = "row">
      <div class = "col-md-12 padding-top-10">
        <label for = "" class = "control-label"><h5>Confirm Password</h5></label>
        <input type = "password" class = "form-control" name = "confirm" placeholder = "Confirm Password" required/>
      </div>
    </div>
    <br/>
    <div class = "row">
<div class = "col-md-12">
<button type = "submit" class = "btn btn-success" name = "update">Update</button>
</div>
</div>
</form>
</div>
  </body>
  </html>