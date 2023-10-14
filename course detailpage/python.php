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

  #m2 {display: none;}
  #m3 {display: none;}
  #m4 {display: none;}
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
        -webkit-background-clip: text;">Python 3 Programming Specialization</h1>
  </div>
  <div>

  </div>
  <br>
  <div>
  <a href="../tuhin/pythonPage.php" class="btn btn-primary" role="button">Enroll</a><br><br><br>
    </div>
    
  </div>
  <br>

  <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-8">
          <h1>About this course</h1>

          Welcome! Are you just getting started with programming? If not, we assume you'll be searching for details on
          Python's benefits and how to get started. Fortunately, Python can be learned rapidly by a skilled programmer
          in any programming language (regardless of what it may be). Jump right in because it's also simple for
          beginners to use and understand.<span id="dots">...</span><span id="more">
            Before getting started, you might want to look at some code samples, peruse the list of introductory books,
            and learn which IDEs and text editors are designed to make Python editing simple.

            The BeginnersGuide/Tutorials page has a collection of tutorials appropriate for seasoned programmers. If
            English is not your first language, there is also a list of tools in other languages that you might find
            helpful.

            For authoritative knowledge, start with the online documentation. The tutorial provides you with some
            fundamental knowledge about the language and starts you going.</span></p>
          <button onclick="myFunction()" id="myBtn" class="btn btn-info">Read more</button>
        </div>
        <div class="col-sm-4">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">100% Online Course</li>
            <li class="list-group-item">Beginner Level</li>
            <li class="list-group-item">Suggested pace of 10 hours/week</li>
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
          <div class="fw-bold">Fundamentals of writing Python programmes</div>
          <p>You will learn the fundamentals of writing straightforward Python programmes using the most typical
            structures in this training. No prior computing experience is necessary. By the conclusion of this course,
            you'll comprehend the advantages of programming in IT roles, be able to create simple Python programmes,
            <span id="d">...</span><span id="m">understand how the various components of programming work together, and be able to put all of this information together to solve a challenging programming problem.The fundamentals of creating computer programmes will be covered first.
              Through interactive tasks and real-world examples, you'll gain practical experience with programming
              concepts along the way. You'll soon realise that computers are capable of carrying out a wide range of
              tasks.</span>
          </p> <button style="height: 20px font; font-size: 10px; margin-top: 0%; border: none;" onclick="myFunct()" id="mbtn">Read more</button>
         

          <script>
            function myFunct() {
              var d = document.getElementById("d");
              var mText = document.getElementById("m");
              var btnText = document.getElementById("mbtn");

              if (d.style.display === "none") {
                d.style.display = "inline";
                btnText.innerHTML = "Read more";
                mText.style.display = "none";
              } else {
                d.style.display = "none";
                btnText.innerHTML = "Read less";
                mText.style.display = "inline";
              }
            }
          </script>

        </div>

      </li>
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">Python Functions, Files, and Dictionaries</div>
  <p>The dictionary data structure and user-defined functions are introduced in this course. You'll discover named functions, lambda expressions, optional and keyword parameter passing, local and global variables, and more. You'll also learn about the sorted function in Python and how to influence the order in which it sorts by providing it with the input of another function. You'll read in simulated social media data from a file for your final project, calculate sentiment ratings, and output.csv files. The supporting material for this course, "Fundamentals of Python Programming," which is optional and free, contains chapters 10 through 16.<span id="d2">...</span><span id="m2"> influence the order in which it sorts by providing it with the input of another function. You'll read in simulated social media data from a file for your final project, calculate sentiment ratings, and output.csv files. The supporting material for this course, "Fundamentals of Python Programming," which is optional and free, contains chapters 10 through 16. If you have already completed the "Python Fundamentals" course and wish to learn more about the Python language's foundations, this course is a good fit for you. Together, both courses are designed for people who are new to Python programming, require a refresher on the language's fundamentals, or who may already be familiar with it but want a more in-depth explanation and vocabulary for describing and evaluating programmes.</span></p> <button style="height: 20px font; font-size: 10px; margin-top: 0%; border: none;" onclick="myFunct2()" id="mbtn2">Read more</button>
 

  <script>
    function myFunct2() {
      var d = document.getElementById("d2");
      var mText = document.getElementById("m2");
      var btnText = document.getElementById("mbtn2");

      if (d.style.display === "none") {
        d.style.display = "inline";
        btnText.innerHTML = "Read more";
        mText.style.display = "none";
      } else {
        d.style.display = "none";
        btnText.innerHTML = "Read less";
        mText.style.display = "inline";
      }
    }
  </script>
        </div>

      </li>
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">Data Collection and Processing with Python</div>
          <p>You will learn how to retrieve and manipulate data from online services in this course. It covers Python list comprehensions and offers chances for deep layered data processing and data extraction practise.<span id="d4">...</span><span id="m4">You will learn how to retrieve and manipulate data from online services in this course. List comprehensions in Python are covered. Also, you'll learn how to communicate with REST APIs using the Python requests module and what to look for in the documentation of such APIs. You'll build a "tag recommender" for the flickr photo-sharing website as your final project.
            You can still profit from this course without having taken the first two if you already have a solid understanding of Python's principles but would like to experience getting complex nested data from online services and processing it.
            nd gives users the chance to experience processing and extracting information from highly nested data.</span>
          </p> <button style="height: 20px font; font-size: 10px; margin-top: 0%; border: none;" onclick="myFunct4()" id="mbtn4">Read more</button>
         
        
          <script>
            function myFunct4() {
              var d = document.getElementById("d4");
              var mText = document.getElementById("m4");
              var btnText = document.getElementById("mbtn4");
        
              if (d.style.display === "none") {
                d.style.display = "inline";
                btnText.innerHTML = "Read more";
                mText.style.display = "none";
              } else {
                d.style.display = "none";
                btnText.innerHTML = "Read less";
                mText.style.display = "inline";
              }
            }
          </script>
        
        
        </div>

      </li>
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">Python Classes and Inheritance</div>
  <p>Classes, instances, and inheritance are introduced in this subject. You will discover effective and natural ways to express data using classes. Also, you'll learn how to make "inherited" classes that reuse code and how to override built-in methods. Also, you'll discover how to create lessons. The good programming practise of creating automated tests for one's own code will be covered in the last section.
    <span id="d3">...</span><span id="m3">The course is most appropriate for you if you already have a basic understanding of Python, which is taught in the courses "Python Fundamentals" and "Python Functions, Files, and Dictionaries" (courses 1 and 2 of the Python 3 Programming Specialization). The course "Data Collecting and Processing with Python" (course 3 of the specialisation) is optional, however having experience with complicated nested data retrieval and processing is helpful.</span>
  </p> <button style="height: 20px font; font-size: 10px; margin-top: 0%; border: none;" onclick="myFunct3()" id="mbtn3">Read more</button>
 

  <script>
    function myFunct3() {
      var d = document.getElementById("d3");
      var mText = document.getElementById("m3");
      var btnText = document.getElementById("mbtn3");

      if (d.style.display === "none") {
        d.style.display = "inline";
        btnText.innerHTML = "Read more";
        mText.style.display = "none";
      } else {
        d.style.display = "none";
        btnText.innerHTML = "Read less";
        mText.style.display = "inline";
      }
    }
  </script>
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
    </div> 
  </div>
</div>
</body>

</html>