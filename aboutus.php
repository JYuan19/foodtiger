<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "foodtiger";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();  
if(isset($_SESSION['Email'])){
    $Email=$_SESSION['Email'];
    $sql="select * from customer where Email = '$Email'";
    $result=$conn->query($sql);
     if($result->num_rows>0){
         while($row=$result->fetch_assoc()){
            $_SESSION['Name']=$row['Name'];
            $_SESSION['Email']=$row['Email'];
            $_SESSION['PhoneNo']=$row['PhoneNo'];
            $_SESSION['Address']=$row['Address'];
            $_SESSION['Password']=$row['Password'];
            
      }
    }
 }
    
?>
<!DOCTYPE html>
<html>

<head>
    <title>FoodTiger - About Us</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/logo 256x256.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/nav-bar.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</head>
<script>
function logout() {
  alert("Log Out Successful!!!!!");
}
</script>
<body>
    <header>        
        <!-- nav bar -->
        <nav class="navbar navbar-expand-md bg-warning navbar-dark fixed-top">
            <!-- Brand -->
            <a class="navbar-brand" href="index.html"><img src="image/logo 256x256.png" alt="logo" width="30" height="30" style="margin-left:30%;"></a>
          
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 " id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="category.php">Categories</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="food.php">Foods</a>
                    </li>
                    <?php
                    if (isset($_SESSION['Name'])) {
                      echo '<li class="nav-item active"><a href="userprofile.php" class="nav-link">Hi, '.$_SESSION['Name'].'</a></li>
                      <li class="nav-item active"><a class="nav-link" href="lognout.php" style="width:auto;" onclick="logout()">Logout</a></li>
                     </li>';
                     } else {
                       echo '<li class="nav-item active"><a class="nav-link" href="login.php" style="width:auto;">Login</a></li>
                       <li class="nav-item active"><a class="nav-link" href="#" style="width:auto;">Sign Up</a></li>
                     </li>';
                     }
                    ?>
                </ul>
            </div>
          </nav>
    </header>
    <body>
        <!-- Carousel -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/food.jpg" alt="food" width="1100" height="500">
            <div class="carousel-caption">
              <h1>FoodTiger</h1>
              <p class="p2">Hungry always Hungry</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="image/food4.jpg" alt="food2" width="1100" height="500">
            <div class="carousel-caption">
              <h1>Quality Food</h1>
              <p class="p2">We deliver Quality Food and deliver On Time!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="image/food3.jpg" alt="food3" width="1100" height="500">
            <div class="carousel-caption">
              <h1>Best Customer Service</h1>
              <p class="p2">We deliver Best Customer Service and Support!</p>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
    </div>
        <!-- About Us -->
        <div style="text-align:center;margin-top:3%;">
            <h2>About Us</h2>
          
          <!-- First -->
          <div class="container" style="margin-top: 3%;">
            <div class="row">
              <div class="column-66" style="text-align: left;">
                <h1 class="large-font" style="color:#FFBD00;"><b>We are FoodTiger.</b></h1>
                <p style="font-size:1.3em;">FoodTiger is a convenient online food ordering website. Customers can browse through the system and place order easily. "Bringing good food into your everyday. That's our mission.</p>
              </div>
              <div class="column-33" style="margin-top: 1%;">
                  <img src="image/logo + font_4.png" alt="Logo" width="335" height="471">
              </div>
            </div>
          </div>
          
          <!-- Clarity Section -->
          <div class="container1" style="background-color:#f1f1f1;margin-top:3%;"> 
          <div class="container">
            <div class="row">
              <div class="column-33">
                <img src="image/aboutpicture.jpg" alt="Jobs" width="335" height="471" >
              </div>
              <div class="column-66" style="text-align: left;">
                <h1 class="large-font" style="color:#FFBD00;"><b>Jobs?</b></h1>
                <p style="font-size:1.3em;"> Ride with Us Flexible hours. Competitive pay. It’s exercise. It’s fitness. Most of all, it’s incredibly fun. Become a rider today and join our brilliant team.</p>
                <a class="abutton" href="#"><button class="button3">Apply Now</button></a>
              </div>
            </div>
          </div>
        </div>

          <!-- Third -->
          <div class="container" style="margin-top: 3%;margin-bottom:3%;">
            <div class="row">
              <div class="column-66" style="text-align: left;" >
                <h1 class="large-font" style="color:#FFBD00;"><b>Need Some Help?</b></h1>
                <p style="font-size:1.3em;">You can contact our customer service center. We provide the best customer service. </p>
                <a class="abutton" href="#"><button class="button3">Contact Us</button></a>
              </div>
              <div class="column-33" style="margin-top: 2%;">
                  <img src="image/helppicture.jpg" alt="Support" width="335" height="471" >
              </div>
            </div>
          </div>

          <!-- Footer -->
    <footer class="page-footer font-small pt-4" style="background-color: #FFBD00;">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3" >
            <!-- Content -->
            <h5 class="text-uppercase" style="margin-left:5%;">Contact Us</h5>
            <h6 style="margin-left:5%;">FoodTiger</h6>
            <p style="margin-left:5%;">PTD 64888, Jalan Selatan Utama, km 15, 81300 Skudai, Johor</p>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none pb-3">
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
            <!-- Links -->
            <h5 class="text-uppercase">Our Service</h5>
            <ul class="list-unstyled">
                <li>
                <a class="a2" href="#!">Categories</a>
                </li>
                <li>
                <a class="a2" href="#!">Foods</a>
                </li>
                <li>
                <a class="a2" href="#!">Career</a>
                </li>
                <li>
                <a class="a2" href="#!">Support</a>
                </li>
            </ul>
            </div>
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
            <!-- Links -->
            <h5 class="text-uppercase">Social Media Links</h5>
    
            <ul class="list-unstyled">
                <li>
                <a class="a2" href="#!">Facebook</a>
                </li>
                <li>
                <a class="a2" href="#!">Instagram</a>
                </li>
                <li>
                <a class="a2" href="#!">Twitter</a>
                </li>
                <li>
                <a class="a2" href="#!">Whatsapp</a>
                </li>
            </ul>
    
            </div>
            <!-- Grid column -->
    
        </div>
        <!-- Grid row -->
    
        </div>
        <!-- Footer Links -->
    
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background-color:#f5b400 ;">© 2020 Copyright:
        <a class="a2" href="index.html"> FoodTiger.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    </body>
    </html>