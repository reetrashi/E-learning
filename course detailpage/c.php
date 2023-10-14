<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery/jq/jquery-3.6.3.js"></script>
    
    <title>course details page</title>
</head>
<style>
    #more {
        display: none;
    }
</style>

<style>
    #m {
        display: none;
    }

    #m2 {
        display: none;
    }

    #m3 {
        display: none;
    }

    #m4 {
        display: none;
    }
</style>
<style>
  div.ex1 {
    margin: 1cm;
  width: 500px;
  height: 210px;
  overflow: auto;
}
</style>


<body style="padding-left: 1cm; padding-right: 1cm;">





    <div> <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">E-learning</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav pl-5">
       <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
       <!-- <li class="nav-item custom-nav-item"><a href="index.php#Courses" class="nav-link">Courses</a></li> -->
       <li class="nav-item custom-nav-item"><a href="" class="nav-link">Payment</a></li>
       <li class="nav-item custom-nav-item"><a href="" class="nav-link">My profile </a></li>
       <!-- <li class="nav-item custom-nav-item"><a href="./project/courses.php" class="nav-link">Courses</a></li> -->
       <li class="nav-item custom-nav-item"><a href="../login/login_form.php" class="nav-link">Login</a></li>
       <li class="nav-item custom-nav-item"><a href="../login/register_form.php" class="nav-link">Signup</a></li>
       <li class="nav-item custom-nav-item"><a href="./Quiz/index.html" class="nav-link">Quiz</a></li>
       <li class="nav-item custom-nav-item"><a href="index.php#Contact" class="nav-link">Contact</a></li>
</ul>
  </div>
</nav>
</div>

    <div style="margin-top:2cm;">
        <h1 style="font-size: 60px;
        font-weight: 600;
        background-image: linear-gradient(to left, #553c9a, #b393d3);
        color: transparent;
        background-clip: text;
        -webkit-background-clip: text;">C for Everyone: Programming Fundamentals</h1>
    </div>
    <div>

    </div>
    <br>
    <div>
    <a href="../tuhin/cPage.php" class="btn btn-primary" role="button">Enroll</a>
        <!-- <button type="button" class="btn btn-primary"><a href="../tuhin/cPage.php">Enroll</a></button> -->
        <br><br><br>
    </div>

    </div>
    <br>

    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-8">
                    <h1>About this course</h1>

                    This course is for everyone. In the new world we live in, coding is a universally valuable skill, whether you're a scientist, artist, or a humanist. Algorithms are everywhere, and we all have to understand how they work. The C language is particularly well suited as an introduction to coding: It's a tried-and-true language, and it allows you to understand computing processes at a deep level. 

No prior knowledge of coding is needed for this course. We'll start at the beginning.
The time estimated time commitment for this course is five hours a week for five weeks. <span id="dots">...</span><span id="more">
No prior knowledge of coding is needed for this course. We'll start at the beginning.
The time estimated time commitment for this course is five hours a week for five weeks.</span></p>
                    <button onclick="myFunction()" id="myBtn" class="btn btn-info">Read more</button>
                </div>
                <div class="col-sm-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">100% Online Course</li>
                        <li class="list-group-item">Beginner Level</li>
                        <li class="list-group-item">Suggested pace of 15 hours/week</li>
                        <li class="list-group-item"> Completely in English</li>
                        <li class="list-group-item"></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <h1>Syllabus</h1>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">
                    Introduction</div>
                    <p>An overview of the course, a history of the C language, and a first set of programming activities.

                            After completing this course, students will have a basic understanding of the instrument's
                            construction, components, and accessories. Acoustic guitar </p>

                </div>

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Flow of Control and Simple Functions</div>
                    <p>Flow of control and simple functions, even more sophisticated programming activities, and an optional discussion of more advanced issues</p> 
                    
                </div>

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">
                    Advanced Functions, Recursion, Arrays, and Pointers</div>
                    <p>A continuation of functions, recursion, arrays, and pointers.
                    </p>
                </div>

            </li>
    

    </div>
    <div>

    </div>
    <footer>
    </footer>

    <script src="js/bootstrap.min.js"></script>
    <script src="jquery/jq/jquery-3.6.3.js"></script>

    <Script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </Script>



<p>
  <a class="btn btn-info" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  Read some of our reviews
  </a>
<div class="collapse" id="collapseExample">
  <div>
  <div  style="max-width: 38rem;">   
<div class="ex1">
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbshown";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    
}
$sql = "SELECT * FROM `comment`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num> 0){   
    while($row = mysqli_fetch_assoc($result)){
      echo'
    
      <div class="card" style="width: 28rem;">
    <div class="card-body">
      <h5 class="card-title">'.$row['name'].'</h5>
      <p class="card-text">'.$row['about'].'</p>
     </div>
    </div> 
    <br>';
       
}
}
?>
    </div>

        <script src="js/bootstrap.min.js"></script>
      <script src="jquery/jq/jquery-3.6.3.js"></script>

    </div> 
    <script></script>
  </div>
</div>
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <h4 class="text-white">E-learning
  </div>
  <!-- Copyright -->
</footer>

</body>

</html>