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
<div class="container-fluid"><nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white mt-1">
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
          
<br>
      <br>
       <div class="container mt-2 ml-4 p-2 shadow bg-white">
       <h3 align="center"> Details of the products</h3>
    <br>
        <table class="table" width="14%" border="2px">
          <thead>
            <tr>
              <th>Product ID</th> 
              <th>Product Name</th>
              <th>Product Price</th>
              <th>Product Code</th>
              <th>Product In Stock</th>
              <th>Product Discount</th>
              <th>Product Size</th>
              <th>Product Details</th>
              <th>Product Profile</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <form action="productdelete.php" method="POST">

              <?php
            $conn= new mysqli("localhost","root");
            $db=mysqli_select_db($conn,'curd');

           
            $selectquery="select * from tblproducts";
            $query= mysqli_query($conn,$selectquery);
            $nums= mysqli_num_rows($query);
            while( $row= mysqli_fetch_array($query)){


?>
              <tr>
              <td><?php echo $row['productId']; ?></td> 
              <td><?php echo $row['productName']; ?></td> 
              <td><?php echo$row['productPrice'];?></td> 
              <td><?php echo$row['productCode'];?></td> 
              <td><?php echo$row['productInstock']; ?></td> 
              <td><?php echo$row['productDiscount'];?></td> 
              <td><?php echo$row['productSizes'];?></td> 
              <td><?php echo$row['productDetails'];?></td>
              <td><?php echo '<img src="data: productprofile; base64,'.base64_encode($row['productprofile']).'"alt ="productprofile" style="width :65%">';
              ?></td> </td> 
             
              <td style="width :15%">
                <button type="submit" name="delete" value="<?=$row['productId'];?> "class="btn btn-danger" >Delete </button>
                <a href="productedit.php?productId=<?php echo $row['productId']; ?>">
                <button type="button" name="edit" class="btn btn-primary" value="<?php echo $row['productId']; ?>">Edit</button></a>
              </td></tr>
               <?php }  ?>
          </form>
          </tbody>
          

        </table>


      
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
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script type="text/javascript">
      
      $(document).ready(function(){
        setTimeout(function(){
          $(".alert").remove();
        },3000);
        $(".btn-primary").click(function()
        {
          $(".table").find('tr').eq(this.value).each(function(){
            $("#productId").val($(this).find('td').eq(0).text());
            $("#productName").val($(this).find('td').eq(1).text());
            $("#productPrice").val($(this).find('td').eq(2).text());
            $("#productCode").val($(this).find('td').eq(3).text());
            $("#productInstock").val($(this).find('td').eq(4).text());
            $("#productDiscount").val($(this).find('td').eq(5).text());
            $("#productSizes").val($(this).find('td').eq(6).text());
            $("#productDetails").val($(this).find('td').eq(7).text());
            $(".btn-info").val($(this).find('td').eq(0).text());
          });
          $(".btn-primary").attr("productName","edit");
        });
      } )
    </script>
</body>

</html>
<?php
$conn= new mysqli("localhost","root","","curd");

#delete selected data
if(isset($_POST['delete']))
{
  $productId=$_POST['delete'];
  $dQuery="DELETE FROM tblproducts WHERE productId=?;"; 
  $stmt=$conn->prepare($dQuery);
  $stmt->bind_param('i',$productId);
  if($stmt->execute())
  {
    ?>
          <script>
            alert("Data has been deleted");
          </script>
          <?php
  }
  $stmt->close();
  $conn->close();
  header("location: productdelete.php");
}


