<?php
  include('./header.php');
  ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List of Courses</h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            This week
          </button>
        </div> -->
      </div>



<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "ims_db";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
// if (!$conn){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }
// else{
//     echo "Connection was successful<br>";
// }

$sql = "SELECT * FROM `course2`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
if($num> 0){
    ?>
    
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Course ID</th>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <th scope="row"><?php echo $row['course_id']; ?></th>
      <td><?php echo $row['course_name']; ?></td>
      <td><?php echo $row['course_author']; ?></td>
      <td>
        <button
        type="submit"
        class="btn btn-info mr-3"
        name="view"
        value="View"
        >
        <i class="fa-solid fa-pen"></i>
</button>
<form action="" method="post" class="d-inline">
  <input type="hidden" name="id" value="<?php $row['course_id']; ?>">
<button
        type="submit"
        class="btn btn-danger mr-3"
        name="delete"
        value="Delete"
        >
        <i class="far fa-trash-alt"></i>
</button>
  </form>
      </td>
    </tr>
    <?php }
?>
    
  </tbody>
</table>
<?php } else {
    echo "0 Result";
}
if(isset($_REQUEST['delete'])){
  $sql = "DELETE FROM `course` WHERE `course_id` = {$_REQUEST['id']}";
  
  
  if($conn->query($sql) == TRUE){
    echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
  }
  else{
    echo "Unable to Delete Data";
  }
}
?>

<div>
    <a class="btn btn-secondary box" href="./addCourse.php">
    <i class="fas fa-plus fa-2x"></i></a>
</div>
</div>
    </main>
  </div>
 
</div>





