
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body  >

    <h1 style="text-align: center;" >Sell Report</h1>
<div style="padding-left: 18%; padding-right: 18%;">

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `sell` WHERE CONCAT(`date`, `username`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `sell`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "dbshown");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius:3px;
  margin-bottom:0.5cm;

}

a:hover, a:active {
  background-color: red;
}
</style>

<form action="sellreport.php" method="post">
   
            <input type="text" name="valueToSearch" placeholder="d-m-y"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
            <a href="javascript:void(0);" onclick="printPageArea('printableArea')">Print</a>
            <div id="printableArea">
            <table>
                <tr>
                    <th>Course Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <td><?php echo $row['date'];?></td>
                   
                <?php endwhile;?>
            </table>
            </div>
            

        </form>
    </div>
    <Script>
        function printPageArea(areaID){
    var printContent = document.getElementById(areaID).innerHTML;
    var originalContent = document.body.innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = originalContent;
}
    </Script>
   
</body>
</html>

