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


$sql = "SELECT * FROM dce2";
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



$sql = "SELECT * FROM hod2 WHERE deptNo = '1'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image1 = $fill['image'];
   			 $name1 = $fill['name'];
		  }
		}

		$sql = "SELECT * FROM hod2 WHERE deptNo = '2'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image2 = $fill['image'];
   			 $name2 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '3'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image3 = $fill['image'];
   			 $name3 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '4'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image4 = $fill['image'];
   			 $name4 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '5'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image5 = $fill['image'];
   			 $name5 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '6'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image6 = $fill['image'];
   			 $name6 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '7'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image7 = $fill['image'];
   			 $name7 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '8'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image8 = $fill['image'];
   			 $name8 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '9'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image9 = $fill['image'];
   			 $name9 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '10'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image10 = $fill['image'];
   			 $name10 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '11'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image11 = $fill['image'];
   			 $name11 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '12'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image12 = $fill['image'];
   			 $name12 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '13'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image13 = $fill['image'];
   			 $name13 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '14'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image14 = $fill['image'];
   			 $name14 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '15'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image15 = $fill['image'];
   			 $name15 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '16'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image16 = $fill['image'];
   			 $name16 = $fill['name'];
		  }
		}
		$sql = "SELECT * FROM hod2 WHERE deptNo = '17'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
    	while(
    $fill = $db->fetch_assoc()){
    		 $image17 = $fill['image'];
   			 $name17 = $fill['name'];
		  }
		}



	$sql = "SELECT * FROM departments WHERE deptNo = '1'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department1 = $fill['department'];
	  }
	}

	$sql = "SELECT * FROM departments WHERE deptNo = '2'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department2 = $fill['department'];
	  }
	}

	$sql = "SELECT * FROM departments WHERE deptNo = '3'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department3 = $fill['department'];
	  }
	}

	$sql = "SELECT * FROM departments WHERE deptNo = '4'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department4 = $fill['department'];
	  }
	}

	$sql = "SELECT * FROM departments WHERE deptNo = '5'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department5 = $fill['department'];
  }
}
$sql = "SELECT * FROM departments WHERE deptNo = '6'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department6 = $fill['department'];
  }
}
$sql = "SELECT * FROM departments WHERE deptNo = '7'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department7 = $fill['department'];
  }
}
$sql = "SELECT * FROM departments WHERE deptNo = '8'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department8 = $fill['department'];
  }
}
$sql = "SELECT * FROM departments WHERE deptNo = '9'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department9 = $fill['department'];
  }
}
$sql = "SELECT * FROM departments WHERE deptNo = '10'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department10 = $fill['department'];
  }
}
$sql = "SELECT * FROM departments WHERE deptNo = '11'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department11 = $fill['department'];
  }
}
$sql = "SELECT * FROM departments WHERE deptNo = '12'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department12 = $fill['department'];
  }
}
$sql = "SELECT * FROM departments WHERE deptNo = '13'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department13 = $fill['department'];
  }
}
$sql = "SELECT * FROM departments WHERE deptNo = '14'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department14 = $fill['department'];
  }
}
$sql = "SELECT * FROM departments WHERE deptNo = '15'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department15 = $fill['department'];
  }
}
$sql = "SELECT * FROM departments WHERE deptNo = '16'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department16 = $fill['department'];
  }
}
$sql = "SELECT * FROM departments WHERE deptNo = '17'";
    $db = mysqli_query($conn,$sql);

    if($db->num_rows>0){
  //fetch data from profile
  while(
    $fill = $db->fetch_assoc()){
    $department17 = $fill['department'];
  }
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

    <!-- Custom styles for this template -->
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

            <li class="nav-item">
              <a class="nav-link" href="more.php">Profile</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="gallery.php">Staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signin.php">Login</a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav>
    <br/>
    <div class = "container">
      <h4 class="my-4 text-center text-lg-left">The District Chief Executive</h4>
      	<hr>
      	<div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src = "<?php echo $image; ?>" alt="DCE" style = "width: 25em; height:20em;">
            <p><?php echo $name; ?></p>
          </a>
        </div>

        <div class="col-lg-8 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $head; ?></h5>
        	<hr>
        	<p>
        		<?php echo $message; ?>
        	</p>  
        </div>
    </div>


      <h4 class="my-4 text-center text-lg-left">Heads of Department</h1>
      	<hr>

      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department1; ?></h5>
        	<br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src = "<?php echo $image1; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name1; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department2; ?></h5>
        	<br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image2; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name2; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department3; ?></h5>
        	<br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image3; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name3; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department4; ?></h5>
        	<br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image4; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name4; ?></p>
          </a>
        </div>
      </div>
      <br/>
      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department5; ?></h5>
        	<br/><br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src = "<?php echo $image5; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name5; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department6; ?></h5>
        	<br/><br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image6; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name6; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department7; ?></h5>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image7; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name7; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department8; ?></h5>
        	<br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image8; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name8; ?></p>
          </a>
        </div>
      </div>
      <br/>
      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department9; ?></h5>
        	<br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src = "<?php echo $image9; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name9; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department10; ?></h5>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image10; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name10; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department11; ?></h5>
        	<br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image11; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name11; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department12; ?></h5>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image12; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name12; ?></p>
          </a>
        </div>
      </div>
      <br/>
      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department13; ?></h5>
        	<br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src = "<?php echo $image13; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name13; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department14; ?></h5>
        	<br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image14; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name14; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department15; ?></h5>
        	<br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image15; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name15; ?></p>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department16; ?></h5>
        	<br/>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo $image16; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name16; ?></p>
          </a>
        </div>
      </div>
      <br/>
       <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
        	<h5 class = "text-center"><?php echo $department17; ?></h5>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src = "<?php echo $image17; ?>" alt="Head Of Department" style = "width: 25em; height:20em;">
            <p><?php echo $name17; ?></p>
          </a>
        </div>
    </div>
</div>

<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; gomoa central district 2018</p>
      </div>
      <!-- /.container -->
    </footer>
</body>

