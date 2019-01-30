


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
           <li class="nav-item">
              <a class="nav-link" href="more.php">Profile</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="gallery.php">Staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="administrator.php">Admin</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="signin.php">Login</a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav>
    <div class = "container">
    <form action="admin-agric.php" method="post">
      <br/>
      <div class = "row">
        <div class = "col-md-12 padding-top-10">
        <h4>Login</h4>
        <hr/>
      </div>
    </div>
    <br/>
    <div class = "row">
      <div class = "col-md-12">
      <select name = "deptNo" class = "form-control">
      <option value = "1">Central Administration</option>
      <option value = "2">Ghana Education Service</option>
      <option value = "3">Ghana Health Service</option>
      <option value = "4">Department of Agriculture</option>
      <option value = "5">Works Department</option>
      <option value = "6">District Finance Dept</option>
      <option value = "7">Department of Social Welfare and Community Development</option>
      <option value = "8">Town and Country Planning Dept</option>
      <option value = "9">Births & Deaths Registry</option>
      <option value = "10">Business Advisory Center of the NBSSI/REP</option>
      <option value = "11">NADMO</option>
      <option value = "12">Information Services Department</option>
      <option value = "13">National Commission on Civic Education (NCCE)</option>
      <option value = "14">Youth Employment Authority (YEA)</option>
      <option value = "15">National Health Insurance Scheme</option>
      <option value = "16">Non Formal Education Department</option>
      <option value = "17">Centre for National Culture</option>
      </select>
</div>
    </div>
    <br/>
       <div class = "row">
      <div class = "col-md-12 padding-top-10">
        <label for = "" class = "control-label"><h5>Password</h5></label>
        <input type = "password" class = "form-control" name = "password" placeholder = "Password" required/>
      </div>
    </div>

    <br/>
    <div class = "row">
<div class = "col-md-12">
<button type = "submit" class = "btn btn-success" name = "login" style ="margin-left: 45%;">Login</button>
</div>
</div>
</form>
</div>
<br/><br/>
<div class = "container">
    <form action="admin.php" method="post">
    <br/>
    <div class = "row">
      <div class = "col-md-12">
      <select name = "deptNo" class = "form-control">
      <option value = "1">District Chief Executive</option>
    </select>
  </div>
</div>
<br/>
 <div class = "row">
      <div class = "col-md-12 padding-top-10">
        <label for = "" class = "control-label"><h5>Password</h5></label>
        <input type = "password" class = "form-control" name = "password" placeholder = "Password" required/>
      </div>
    </div>

    <br/>
    <div class = "row">
<div class = "col-md-12">
<button type = "submit" class = "btn btn-success" name = "login" style ="margin-left: 45%;">Login</button>
</div>
</div>
</form>
</div>

  </body>
  </html>