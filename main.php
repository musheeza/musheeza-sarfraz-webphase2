<?php
session_start();
if (!isset($_SESSION['username']))
 {echo '<script>alert("You are logged out")</script>';
  header('location:logout.php');
}
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Peak Store | Welcome to Peak</title>
  </head>


  <body>

    <div class="container-fluid bg-dark text-white">

      <div class="row align-items-center">
        <div class="col-0">
    <a href="home.html"><img src="abc.png" alt="Home Page" srcset="" height="100" width="100"> </a>
  </div>
  <div class="col-0">
      <h2 class="text-white">Peak Store</h2>
    </div>
    <div class="col-10">
        <a href="#" class="fa fa-facebook fa-lg text-white mr-5 float-right"></a>
        <a href="#" class="fa fa-twitter fa-lg text-white mr-5 float-right"></a>
        <a href="#" class="fa fa-instagram fa-lg text-white mr-5 float-right"></a>
        <a href="#" class="fa fa-youtube fa-lg text-white mr-5 float-right"></a>
      </div>
  </div>
  </div>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white mt-1">
              <ul class="navbar-nav mr-auto mt-6 mt-lg-0">
                <li class="nav-item active mr-5">
                  <a class="nav-link" href="http://localhost/project/mak.php">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active mr-5 ml-140">
                    <a class="nav-link active" href="http://localhost/project/tbl.php">Add Products</a>
                  </li>
                  <li class="nav-item active mr-5">
                    <a class="nav-link active" href="http://localhost/project/productdelete.php">View Products</a>
                  </li>
                  <li class="nav-item active mr-5">
                    <a class="nav-link active" href="http://localhost/project/logout.php">Logout</a>
                  </li>
              </ul>
            </div>
          </nav>
          
    <h2>WELCOME TO THE ADMIN PAGE OF THE WEBSITE <?php echo $_SESSION['username'];?></h2>
    <p>Here you can avail all the options for products.</p>

     </div>
     <br>
      <br>
      <div class="container">

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="s2.jpg" alt="Los Angeles" width="1100" height="400">
          </div>
          <div class="carousel-item">
            <img src="p3.jpg" alt="Chicago" width="1100" height="400">
          </div>
          <div class="carousel-item">
            <img src="p2.jpg" alt="New York" width="1100" height="400">
          </div>
      <div class="carousel-item">
            <img src="p4.jpg" alt="New York" width="1100" height="400">
          </div>
      <div class="carousel-item">
            <img src="p5.jpg" alt="New York" width="1100" height="400">
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    <br>
    <br>


     
      <!-- Footer -->
<footer class="page-footer font-small stylish-color-white pt-4 bg-dark">

    <!-- Footer Links -->
    <div class="container text-center text-white text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">
  
          <!-- Content -->
          <h4 class="font-weight-bold text-uppercase mt-3 mb-4">Peak Store Story</h4>
          <p>So as we watched the hunger in e-commerece world and to make easy for the people to buy
            their needs and wants, We open PeakStore in 2020. Thanks for coming here.
          </p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
  
         
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <hr>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fa fa-facebook fa-lg text-white mr-5"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fa fa-twitter fa-lg text-white mr-5"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fa fa-google fa-lg text-white mr-5"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fa fa-linkedin fa-lg text-white mr-5"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fa fa-youtube fa-lg text-white mr-5"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright:
      <a href="#"> peakstore.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->


      


  </body>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>