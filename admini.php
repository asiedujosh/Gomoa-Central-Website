<?php

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
              <a class="nav-link" href="#">Profile</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="tt.php?edit=<?php echo $nas = 1; ?>">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="administrator.php">LogOut</a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav>
    <div class = "container">
      <br/>
     <div class = "row">
            <div class = "col-md-12">
<table class = "table table_hover">
  <h4>Profile</h4>
  <thead>
    <th ><h5>No.</h5></th>
    <th colspan = 4><h5>Profile List</h5></th>
    <th colspan = 4><h5>Action</h5></th>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td colspan = 4>District Chief Executive</td>
      <td colspan = 4><a href="editor.php?edit=<?php echo $nas = 3;?>">View Info</a></td>
    </tr>
    <tr>
      <td>2</td>
      <td colspan = 4>The Central Administration
      </td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 1;?>">View Info</a></td>
    </tr>
    <tr>
      <td>3</td>
      <td colspan = 4>Ghana Education Service</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 2;?>">View Info</a></td>
    </tr>
    <tr>
      <td>4</td>
      <td colspan = 4>Ghana Health Service</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 3;?>">View Info</a></td>
    </tr>
     <tr>
      <td>5</td>
      <td colspan = 4>Department of Agriculture</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 4;?>">View Info</a></td>
    </tr>
   <tr>
      <td>6</td>
      <td colspan = 4>Works Department</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 5;?>">View Info</a></td>
    </tr>
    <tr>
      <td>7</td>
      <td colspan = 4>District Finance Dept</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 6;?>">View Info</a></td>
    </tr>
    <tr>
      <td>8</td>
      <td colspan = 4>Department of Social Welfare and Community Development</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 7;?>">View Info</a></td>
    </tr>
    <tr>
      <td>9</td>
      <td colspan = 4>Town and Country Planning Dept</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 8;?>">View Info</a></td>
    </tr>
     <tr>
      <td>10</td>
      <td colspan = 4>Births & Deaths Registry</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 9;?>">View Info</a></td>
    </tr>
     <tr>
      <td>11</td>
      <td colspan = 4>Business Advisory Center of the NBSSI/REP</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 10;?>">View Info</a></td>
    </tr>
     <tr>
      <td>12</td>
      <td colspan = 4>NADMO</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 11;?>">View Info</a></td>
    </tr>
     <tr>
      <td>13</td>
      <td colspan = 4>Information Services Department</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 12;?>">View Info</a></td>
    </tr>
    <tr>
      <td>14</td>
      <td colspan = 4>National Commission on Civic Education (NCCE)</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 13;?>">View Info</a></td>
    </tr>
    <tr>
      <td>15</td>
      <td colspan = 4>Youth Employment Authority (YEA)</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 14;?>">View Info</a></td>
    </tr>
    <tr>
      <td>16</td>
      <td colspan = 4>National Health Insurance Scheme</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 15;?>">View Info</a></td>
    </tr>
    <tr>
      <td>17</td>
      <td colspan = 4>Non Formal Education Department</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 16;?>">View Info</a></td>
    </tr>
    <tr>
      <td>18</td>
      <td colspan = 4>Centre for National Culture</td>
      <td colspan = 4><a href="ready.php?edit=<?php echo $nas = 17;?>">View Info</a></td>
    </tr>
  </tbody>
</table>
</div>


</div>
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







  <!--
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

      -->