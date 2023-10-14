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
        -webkit-background-clip: text;">HTML, CSS, and Javascript for Web Developers</h1>
  </div>
  <div>

  </div>
  <br>
  <div>
  <a href="../tuhin/webPage.php" class="btn btn-primary" role="button">Enroll</a><br><br><br>
  </div>

  </div>
  <br>

  <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-8">
          <h1>About this course</h1>

          Do you know that a web application's web page is the only place where a user can interact with it directly? If
          you do it incorrectly, the user won't care about the server-side at all! The modern user has high expectations
          for websites: they must load quickly, display the desired service, and be easy to see on all platforms,
          including desktop computers, tablets, and smartphones.<span id="dots">...</span><span id="more">
            We will learn the fundamental tools that any web page coder needs to be familiar with in this course.
            Learning how to use HTML and CSS to implement contemporary web pages will be our first step. Next, we'll
            learn how to write our sites so that its elements automatically rearrange and resize themselves in
            accordance with the size of the user's screen. You will be able to code a website so that it functions
            equally well on a desktop computer and a mobile device.

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
          <div class="fw-bold">Introduction to HTML5</div>
          <p>In this module we will learn the basics of HTML5. We'll start with instructional videos on how to set up
            your development environment, go over HTML5 basics like valid document structure, which elements can be
            included inside other elements and which can not, discuss the meaning and usefulness of HTML5 semantic tags,
            and go over essential HTML5 tags.</p>


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
          <div class="fw-bold">Introduction to CSS3</div>
          <p>Several people play around with CSS. We'll introduce you to CSS3's fundamentals in this module before
            moving on to more complex ideas like floating and CSS rule conflict resolution. We'll discuss the backdrop
            property, "box model," and other topics. We'll learn about responsive design using our own CSS code to wrap
            around the module, and we'll start introducing Twitter Bootstrap with its critical Grid System.</p>



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
          <div class="fw-bold">Coding the Static Restaurant Site</div>
          <p>Are you prepared for Genuine fun? It's in this module! We'll go over the fundamentals of working with
            clients while overseeing a web project before visiting a real client at their place of business (a Chinese
            restaurant), where we'll assist the owner in determining what she wants in a site and get to know the
            establishment as a whole. You'll get to sit next to me and observe as we create an actual web site from
            scratch for this company over the course of the remaining module.</p>


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
          <div class="fw-bold">Introduction to Javascript</div>
          <p>If a website had no functioning, what fun would that be? The fundamentals of the Javascript language will
            be the main focus of this module. Even experienced developers frequently play around with Javascript without
            actually understanding how it functions. This makes it easier to see language as a burden rather than a
            useful instrument.
            <span id="d3">...</span><span id="m3">We will focus on both the "how" and the "why" in order to empower you
              with the Javascript language features rather than confuse you with them. From common language
              constructions and Javascript types to objects, functions, arrays, closures, and scope separation, we'll
              cover pretty much everything.</span>
          </p> <button style="height: 20px font; font-size: 10px; margin-top: 0%; border: none;" onclick="myFunct3()"
            id="mbtn3">Read more</button>


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