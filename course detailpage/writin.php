<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<html>
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
    echo "Connection was successful<br>";
}
// Variables to be inserted into the table
if (isset($_POST['name'])||isset($_POST['about'])){
    $name = $_POST['name'];
    $about = $_POST['about'];
   
$sql = "INSERT INTO `comment` (`name`, `about`) VALUES ('$name', '$about')";
$result = mysqli_query($conn, $sql);
}
?>
   <body>
    <div>
      <form action = "writin.php" method="POST">
         Name: <input type = "text" id = "name" name ="name" style="" />
         Your Review: <input type = "text" id= "about" name="about"  />
         <input type = "submit" />
      </form> 
</div>
      
   </body>
</html>
<?php  
?>
</body>
</html>