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

 $sql = "SELECT news FROM profile2 WHERE deptNo = '1' ";
  $db = mysqli_query($conn,$sql);
    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $news1 = $fill['news'];
    }
  }


 $sql = "SELECT news FROM profile2 WHERE deptNo = '2' ";
  $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $news2 = $fill['news'];
  }
}

 $sql = "SELECT news FROM profile2 WHERE deptNo = '3' ";
  $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $news3 = $fill['news'];
  }
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


     <!-- Custom styles for this template -->
    <link href="malt/simple-sidebar.css" rel="stylesheet">


    <link rel="stylesheet" href="malt/styl.css" />
    <!-- Font Awesome -->
    <link href="malt/font-awesome.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="administrator.php">Gomoa Central District Assembly</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link active" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="more.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signin.php">Login</a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Departments
                    </a>
                </li>
                <li>
                    <a href="agric.php?edit=<?php echo $nas = 1;?>">Central Administration</a>
                </li>
                <li>
                    <a href="agric.php?edit=<?php echo $nas = 2;?>">Ghana Education Service</a>
                </li>
                <li>
                    <a href="agric.php?edit=<?php echo $nas = 3;?>">Ghana Health Service</a>
                </li>
                <li>
                    <a href="agric.php?edit=<?php echo $nas = 4;?>">Dept of Agriculture</a>
                </li>
                <li>
                    <a href="agric.php?edit=<?php echo $nas = 5;?>">Works Department</a>
                </li>
                <li>
                    <a href="agric.php?edit=<?php echo $nas = 6;?>">District Finance Dept</a>
                </li>
                <li>
                    <a href="agric.php?edit=<?php echo $nas = 7;?>">Dept of Social Welfare</a>
                </li>
                <li>
                    <a href="agric.php?edit=<?php echo $nas = 8;?>">Town and Country Planning</a>
                </li>
                 <li>
                    <a href="agric.php?edit=<?php echo $nas = 9;?>">Births and Deaths Registry</a>
                </li>
                 <li>
                    <a href="agric.php?edit=<?php echo $nas = 10;?>">Business Advisory Center</a>
                </li>
                 <li>
                    <a href="agric.php?edit=<?php echo $nas = 11;?>">NADMO</a>
                </li>
                 <li>
                    <a href="agric.php?edit=<?php echo $nas = 12;?>">Information Services Dept</a>
                </li>
                 <li>
                    <a href="agric.php?edit=<?php echo $nas = 13;?>">NCCE</a>
                </li>
                 <li>
                    <a href="agric.php?edit=<?php echo $nas = 14;?>">Youth Employment</a>
                </li>
                 <li>
                    <a href="agric.php?edit=<?php echo $nas = 15;?>">National Health Insurance</a>
                </li>
                 <li>
                    <a href="agric.php?edit=<?php echo $nas = 16;?>">Non Formal Education Dept</a>
                </li>
                 <li>
                    <a href="agric.php?edit=<?php echo $nas = 17;?>">Center for National Culture</a>
                </li>
            </ul>
        </div>

     <div id = "page-content-wrapper">
      <div class = "container-fluid">
    <div class = "video-header wrap">
      <div class = "fullscreen-video-wrap">
        <video src = "video/hill.mp4" autoplay loop >
        </video>
      </div>
      <div class = "header-overlay">
        <div class = "header-content">
          <h5>WELCOME TO GOMOA CENTRAL DISTRICT ASSEMBLY</h5>
          <hr>
           <p>Gomoa Central District is one of the twenty(20) districts in the Central Region
              of Ghana established by the Legislative Instrument 1883. It became effectively operational 
              on 16th June, 2008. Though a relatively new district, through the commitment and consummate 
              skills of management and our cherish stakeholders we have become a centre of excellence and a
              force to reckon with in the Central Region and indeed in Ghana as well. It is no surprise that
              in 2015, we were crowned the first best performed district in the Central Region and the 10th 
              best District Assembly in Ghana by the Local Government Service.
            </p> 
            <a class = "btn btn-success my-btn mt-4" href = "more.php">Know more &gt;</a>
          </div>
        </div>
      </div>
     <div class = "container">
    <section class = "section section-a">
      <div class = "container">
        <div class = "row">
          <div class = "col-md-12">
            <h5>Administration</h5>
          <p><?php echo $news1; ?>
          </p>
        </div>
      </div>
      <div class = "row">
          <div class = "col-md-12">
            <h5>Education</h5>
          <p><?php echo $news2; ?>
          </p>
        </div>
      </div>
      <div class = "row">
          <div class = "col-md-12">
            <h5>Agriculture</h5>
          <p><?php echo $news3; ?>
          </p>
        </div>
      </div>
      <div class = "row">
        <div class = "col-md-12">
          <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">View more</a>
        </div>
      </div>
      <br/>
    </div>
    </section>
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; gomoa central 2018</p>
      </div>
      <!-- /.container -->
    </footer>
  </div>
  
</div>
 </div>
</div>
<br/>


 <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; gomoa central 2018</p>
      </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

   </body>

</html>