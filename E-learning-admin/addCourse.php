<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Add Course</title>
  </head>
  <body>
  <?php
  include('./header.php');
  ?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $course_name = $_POST['course_name'];
        $course_desc = $_POST['course_desc'];
        $course_author = $_POST['course_author'];
        $course_duration = $_POST['course_duration'];
        $course_price = $_POST['course_price'];
        $course_original_price = $_POST['course_original_price'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "ims_db";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `course2` (`course_name`, `course_desc`, `course_author`, `course_duration`,
        `course_price`, `course_original_price`)
        VALUES ('$course_name', '$course_desc', '$course_author', '$course_duration', '$course_price',
         '$course_original_price')";
         
         $result = mysqli_query($conn, $sql);
 
        if($result){
          $msg='<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your course has been added successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            $msg='<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your course was not added successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h1>Add Course</h1>
    <form action="/E-learning/E-learning-admin/addCourse.php" method="post">
    <div class="form-group">
        <label for="course_name">Course Name</label>
        <input type="text" name="course_name" class="form-control" id="course_name" aria-describedby="emailHelp">
    </div>


    <div class="form-group">
        <label for="course_desc">Course Description</label>
        <textarea class="form-control" name="course_desc" id="course_desc" cols="30" rows="10"></textarea> 
    </div>
    <div class="form-group">
        <label for="course_author">Course Author</label>
        <input type="text" name="course_author" class="form-control" id="course_author" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="course_duration">Course Duration</label>
        <input type="text" name="course_duration" class="form-control" id="course_duration" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="course_price">Course Price</label>
        <input type="text" name="course_price" class="form-control" id="course_price" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="course_original_price">Course Original Price</label>
        <input type="text" name="course_original_price" class="form-control" id="course_original_price" aria-describedby="emailHelp">
    </div>
    
    
    <!-- <input type="button" value="submit"> -->
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="./indexcourse.php" class="btn btn-secondary">Close</a>
    

    </form>
</div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

