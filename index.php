<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="css/all.min.css">

 <!-- Google Font -->
 <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

 <!-- Custom CSS -->
 <link rel="stylesheet" href="css/custom.css">

 <title>Implore</title>
</head>
<body>
 <!-- Start Navigation -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-info pl-3 fixed-top">
  <a href="index.php" class="navbar-brand">Implore <i class="fas fa-tools"></i></a>
  
 
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="myMenu">
   <ul class="navbar-nav pl-5 custom-nav ">
    <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
    <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
    <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
   </ul>
  </div>
 </nav> <!-- End Navigation -->

 <!-- Start Header Jumbotron-->
 <header class="jumbotron back-image" style="background-image:url(images/second.jpg);">
  <div class="myclass mainHeading">
   <h1 class="
   text-light font-weight-bold">Welcome to Implore</h1>
   <p class="font-italic text-light">" We care our Customer's "</p>
   <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
   <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
  </div>
 </header> <!-- End Header Jumbotron-->
<hr></hr>
 <!-- Start Introduction Section -->
 <div class="container">
  <div class="jumbotron">
   <h3 class="text-center">Implore Services</h3>
   <p>
   Implore is an Vehicle Service Provider System offering wide array of vehicle services at your home. We focus on enhancing your uses experience by offering world-class vehicle services. Our sole mission is “To provide "A-Class" services to keep the Vehicles fit and healthy and customers happy and smiling”.
    
    With well-equipped Electronic Appliances service centres and fully trained mechanics/(servicers), we provide quality services with excellent packages that are designed to offer you great savings.
    
    Our state-of-art workshops are conveniently located in many
    cities across the country. Now you can book your service online by doing Registration.    
   </p>
  </div>
 </div> <!-- End Introduction Section Container -->

 <!-- Start Services Section -->
 <div class="container text-center border-bottom mt-50" id="Services">
  <h2>What you can expect from us.</h2>
  <div class="row mt-40">
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-business-time fa-8x text-primary"></i></a>
    <h4 class="mt-4">On-time Services</h4>
   </div>
   
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-rupee-sign fa-8x text-success"></i></i></a>
    <h4 class="mt-4">Affordable Services</h4>
   </div>
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="< far fa-smile fa-8x text-warning"></i></a>
    <h4 class="mt-4">100% Best Services</h4>
   </div>
  </div>
 </div> <!-- End Services Section Container -->

 <!-- Start Registration Form -->
 <?php include('UserRegistration.php') ?>
 <!-- End Registration Form Container -->

 <!-- Start Happy Customer -->
 
 </div> <!-- End Happy Customer -->
 <hr></hr>
 <!-- Start Contact US -->
 <div class="container" id="Contact">
  <h2 class="text-center mb-4">Contact Us</h2>
  <div class="row">
   <!-- Start 1st Column -->
    <?php include('contactform.php') ?>
   <!-- End 1st Column -->
   <div class="col-md-4 text-center"> <!-- Start 2nd Column -->
    <strong>Headquarter:</strong><br>
    Implore Pvt. Ltd.,<br>
    Varanasi,<br>
    Uttar Pradesh - Pin : 221010<br>
    Phone: +0000000000<br>
    <a href="#index.php" target="_blank">www.implore.com</a><br>
    <br> <br>
    <strong>Branch:</strong><br>
    Implore Pvt. Ltd.,<br>
    Knowledge Park II,Greater Noida<br>
    Uttar Pradesh - Pin : 201310<br>
    Phone: +0000000000<br>
    <a href="#index.php" target="_blank">www.implore.com</a><br>    
   </div> <!-- End 2nd Column -->
  </div>
 </div> <!-- End Contact US -->

 <!-- Start Footer -->
 <footer class="container-fluid bg-dark mt-5 text-white">
  <div class="container">
   <div class="row py-3">
    <div class="col-md-6"> <!-- Start 1st Column -->
     <span class="pr-2">Follow Us: </span>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>

     
     
    </div>
     <!-- End 1st Column -->
    <div class="col-md-6 text-right"> <!-- Start 2nd Column -->
     <small>Designed by Vikash Rai &copy; 2021</small>
     <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
    </div> <!-- End 2nd Column -->
   </div>
  </div>
 </footer>

 <!-- JavaScript -->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/all.min.js"></script>
</body>
</html>