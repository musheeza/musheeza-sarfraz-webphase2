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
          
    <div class="container mt-2 ml-4 p-2 shadow bg-white">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-row justify-content-left">
          <div class="col-auto">
            <h2>Product Details</h2>
            <div class="col-auto">
              Product ID
              <input type="text" name="productId" class="form-control" id="productId" autocomplete="off"> 
            </div>
            <div class="col-auto">
              Product Name
              <input type="text" name="productName" class="form-control" id="productName" autocomplete="off"> 
            </div>
            <div class="col-auto">
              Product Price
              <input type="text" name="productPrice" class="form-control" id="productPrice" autocomplete="off"> 
            </div>
            <div class="col-auto">
              Product Code
              <input type="text" name="productCode" class="form-control" id="productCode" autocomplete="off"> 
            </div>
            <div class="col-auto">
              Product Discount
              <input type="text" name="productDiscount" class="form-control" id="productDiscount" autocomplete="off"> 
            </div>
            <div class="col-auto">
              Product Instock
              <select class="form-control" name="productInstock" id="productInstock" >
                            <option value="Y">Y</option>
                            <option value="N">N</option>
                        </select>
                    
            </div>
            <div class="col-auto">
              Product Sizes
              <input type="text" name="productSizes" class="form-control" id="productSizes" autocomplete="off"> 
            </div>
            <div class="col-auto">
              Product Details
              <input type="text" name="productDetails" class="form-control" id="productDetails" >
              
            </div>
            <br>
             <div class="col-auto">
              Product Image<br>
             <label >Choose an image
              <input type="file" name="productprofile" id="productprofile"/>
               
             </label> 
            </div>
            <br>
              <div class="col-auto">
              <button type="submit" name="save" class="btn btn-info">Save
                
              </button>
              </div>
          </div>
          </div>
        </form>
     </div>

    
      </div>

     
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


<?php
$conn= new mysqli("localhost","root");
$db=mysqli_select_db($conn,'curd');

if(isset($_POST['save']))
{
        $productId=$_POST['productId'];
        $productName=$_POST['productName'];
        $productPrice=$_POST['productPrice'];
        $productCode=$_POST['productCode'];
        $productInstock=$_POST['productInstock'];
        $productDiscount=$_POST['productDiscount'];
        $productSizes=$_POST['productSizes'];
        $productDetails=$_POST['productDetails'];
        $file=addslashes(file_get_contents($_FILES["productprofile"]["tmp_name"]));



        $insertquery="INSERT INTO tblproducts(productId,productName,productPrice,productCode,productInstock,productDiscount,productSizes,productDetails,productprofile) VALUES('$productId','$productName','$productPrice','$productCode','$productInstock','$productDiscount','$productSizes','$productDetails','$file')";
        $res= mysqli_query($conn,$insertquery);
        if($res)
        {
          ?>
          <script>
            alert("Data has been inserted");
          </script>
          <?php
        }
        else
        {
          ?>
          <script>
            alert("Data is not inserted");
          </script>
          <?php
          
        }
}


  ?>
  