<?php 
session_start(); 
if(!isset($_SESSION['id'])){
	header("location:index.php");
}
include 'includes/connect.php';

$sql = "SELECT name,level,college from usersda WHERE status = '0' ORDER BY level DESC,ts ASC LIMIT 200,100"or die(error5);;
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Da vinci 2k17</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="includes/custom.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'includes/nav.php' ?>
<div class="row">
<div class="col-md-6 col-md-offset-3 text-center">
<h1>Leaderboard</h1>
</div>
</div>
<div class="row">
<div class="col-md-6 col-md-offset-3">
<table class="table table-striped table-bordered">
<tr class="active">
		 <th>Rank</th>
		 <th>Name</th>
		 <th>Level</th>
		 <th>College</th>
		 </tr>
<?php
$i=201;
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		echo' <tr>
		 <td><strong>'.$i.'.</strong></td>
		 <td>'.$row['name'].'</td>
		 <td>'.$row['level'].'</td>
		 <td>'.$row['college'].'</td>
		 </tr>';
		 
		 $i++;
     }
} else {
     echo "0 results";
}
?>
</table>
</div>
</div>
<div class="col-md-6 col-md-offset-3">
<a href="leaderboard2.php"><button class="btn btn-primary" type="Submit">Previous</button></a>
<a href="leaderboard4.php"><button class="btn btn-primary" type="Submit">Next</button></a>
</div>
</body>
</html>