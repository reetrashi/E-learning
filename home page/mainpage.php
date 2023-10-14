<?php

session_start();

  require 'connect.php';
  require 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    
    initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="<link rel="preconnect href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!--goggle font -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
    <title>E-learning platform</title>
 </head>
 <body>
    <!-- nevigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">E-learning</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav pl-5">
       <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Home</a></li>
       <!-- <li class="nav-item custom-nav-item"><a href="index.php#Courses" class="nav-link">Courses</a></li> -->
       <li class="nav-item custom-nav-item"><a href="" class="nav-link">Payment</a></li>
       <li class="nav-item custom-nav-item"><a href="profile.php" class="nav-link">My profile </a></li>
       <!-- <li class="nav-item custom-nav-item"><a href="./project/courses.php" class="nav-link">Courses</a></li> -->
           <!--<li class="nav-item custom-nav-item"><a href="login_form.php" class="nav-link">Login</a></li>
       <li class="nav-item custom-nav-item"><a href="register_form.php" class="nav-link">Signup</a></li>    -->
       <li class="nav-item custom-nav-item"><a href="Quiz/index.htm" class="nav-link">Quiz</a></li>
       <li class="nav-item custom-nav-item"><a href="contact.htm" class="nav-link">Contact</a></li>
       <li class="nav-item custom-nav-item"><a href="coursepage.htm" class="nav-link">Course</a></li>

      
</ul>

  </div>
  
</nav>
<div></div>

    <!--end nevigation -->

    <!-- background -->
    

    <div class="container-fluid remove-vid-marg">
      <div class="vid-parent">
        <video playsinline autoplay muted loop>
          <source src="video/banvid.mp4">
        </video>
        <div class="vid-overlay"></div>
      </div>

      <div class= "vid-content">
  <h1 class= "my-content" >Welcome to elearning</h1>
  <small class = "my-content" >Learn and Implement</small>
  <a href="#Courses" class = "btn btn-danger">Get Started</a>
</div>


    </div>

    <!-- end background -->
     
    <!--start text banner-->
    <div class="container-fluid bg-danger txt-banner">
      <div class="row bottom-banner">
        <div class="col-sm">
          <h5><i class="fas fa-book-open mr-3"></i> 100+ Online 
          Courses</h5>
</div>
 <div class="col-sm">
  <h5><i class="fas fa-users mr-3"></i> Expert
  Instructors</h5>
</div>
<div class="col-sm">
<h5><i class="fas fa-keyboard mr-3"></i> Lifetime
Access</h5>
</div>
<div class="col-sm">
<h5><i class="fas fa-rupee-sign mr-3"></i> Money Back
Guarantee*</h5>
</div>
</div>
</div>


    <!-- end text banner -->


    <!-- course -->
    <div class="container mt-5" id="Courses">
      <h1 class="text-center">Popular Course</h1>
      <!-- Start Most Popular Course 1st -->


      <div class="container text-center">
  <div class="row row-cols-2">
    <div class="col"><div class="card-deck mt-4">

<a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">

<div class="card">

<img src="image/python.jpg" class="card-img-top" alt="python" />

<div class="card-body">

<h5 class="card-title"> Python </h5>

<p class="card-text"></p>

</div>

<div class="card-footer">

<p class="card-text d-inline">Price: <small><del>&

#8377  2000 </del></small> <span
class="font-weight-bolder">&#8377  200<span></p>

<a class="btn btn-primary text-white

font-weight-bolder float-right" href="../course detailpage/python.php">Enroll</a>

</div>

</div>

</a>





</div>
</div>
<!-- End Most Popular Course 1st Card Deck -->
    <div class="col"> <!-- Start Most Popular Course 2nd -->
  <div class="card-deck mt-4">

<a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">

<div class="card">

<img src="image/guitar.jpg" class="card-img-top" alt="Guitar" />

<div class="card-body">

<h5 class="card-title">Learn Guitar Easy Way</h5>

<p class="card-text"></p>

</div>

<div class="card-footer">

<p class="card-text d-inline">Price: <small><del>&

#8377  2000 </del></small> <span
class="font-weight-bolder">&#8377  200<span></p>

<a class="btn btn-primary text-white

font-weight-bolder float-right" href="../course detailpage/guitar.php">Enroll</a>

</div>

</div>

</a>

</div>
<!-- End Most Popular Course 2nd Card Deck --></div>
    <div class="col"><!-- Start Most Popular Course 3rd -->

<div class="card-deck mt-4">

<a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">

<div class="card">

<img src="image/c.jpeg" class="card-img-top" alt="C++" />

<div class="card-body">

<h5 class="card-title">Learn C Easy Way</h5>

<p class="card-text"></p>

</div>

<div class="card-footer">

<p class="card-text d-inline">Price: <small><del>&

#8377  2000 </del></small> <span
class="font-weight-bolder">&#8377  200<span></p>

<a class="btn btn-primary text-white

font-weight-bolder float-right" href="../course detailpage/c.php">Enroll</a>

</div>

</div>

</a>
</div>

<!-- End Most Popular Course 3rd Card Deck --></div>
    <div class="col"></div>
  </div>
</div>







 

 

<!-- FOOTER -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <h4 class="text-white">E-learning
  </div>
  <!-- Copyright -->
</footer>

<!-- End FOOTER -->

<!-- Jquery and Boostrap JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Font Awesome JS -->
<script src="js/all.min.js"></script>
</body>
</html>


