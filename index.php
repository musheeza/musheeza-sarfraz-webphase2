<?php
session_start();
if (!isset($_SESSION['username']))
 {
  
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
                  <a class="nav-link" href="http://localhost/project/mak.php">Home</a>
                </li>
                <li class="nav-item active mr-5">
                  <a class="nav-link" href="http://localhost/project/about.php">About Us</a>
                </li>
                <li class="nav-item active mr-5">
                  <a class="nav-link active" href="http://localhost/project/products.php">Products</a>
                </li>
                <li class="nav-item active mr-5 ml-140">
                    <a class="nav-link active" href="http://localhost/project/contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item active mr-5">
                    <a class="nav-link active" href="http://localhost/project/index.php">Login</a>
                  </li>
              </ul>
            </div>
          </nav>

    </div>
          
    <div class="container mt-2 ml-4 p-2 shadow bg-white">
        <form action="logincheck.php" method="POST">
          <div class="form-row justify-content-left">
            <div class="col-auto">
              <h2>Admin User</h2>
            <div class="col-auto">
              User Name
              <input type="text" name="username" class="form-control" value="" autocomplete="off"> 
            </div>
            <div class="col-auto">
              User Password
              <input type="text" name="userpassword" class="form-control" value="" autocomplete="off"> 
            <div class="col-auto">
              <br>
            <button type="submit" class="btn btn-info" name="submit">Submit
              
            </button>
            </div>
              
            </div>
            
          </div>
          
        </form>
    </div>

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