<?php 

include 'includes/connect.php';
session_start();
if(!isset($_SESSION['admin'])){
	header("location:adminlogin.php");
}
$sql = "SELECT * from submissions ORDER BY level DESC,ts ASC"or die(error8);;
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Da vinci 2k16</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="includes/custom.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'adminnav.php' ?>
<div class="row">
<div class="col-md-6 col-md-offset-3 text-center">
<h1>Submissions</h1>
</div>
</div>
<div class="row">
<div class="col-md-6 col-md-offset-3">
<table class="table table-striped table-bordered">
<tr class="active">
		 <th>Name</th>
		 <th>fbid</th>
		 <th>Level</th>
		 <th>Submissions</th>
		 <th>Time Stamp</th>
		 </tr>
<?php
$i=1;
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		echo' <tr>
		 <td>'.$row['name'].'</td>
		 <td>'.$row['fbid'].'</td>
		 <td>'.$row['level'].'</td>
		 <td>'.$row['submissions'].'</td>
		 <td>'.$row['ts'].'</td>
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
</body>
</html>