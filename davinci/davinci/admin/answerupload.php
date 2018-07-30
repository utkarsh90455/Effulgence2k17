<?php
session_start();
if(!isset($_SESSION['admin'])){
	header("location:adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Da Vinci 2k17</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'adminnav.php' ?>
<div class="container">
    <div class="jumbotron" style="margin-top: 100px">
     <h1 class="text-center">Answer Upload</h1>
     
     <form role="form" method="post" action="upload.php" enctype="multipart/form-data">
    <div class="form-group">
          <label for="text">Answer No.:</label>
          <input type="text" class="form-control" placeholder="Enter Answer No." name="level">
          <label for="text">Answer:</label>
          <input type="text" class="form-control" placeholder="Enter Answer" name="answer">
		  <label for="text">Exact File Name with extension:</label>
          <input type="text" class="form-control" placeholder="Enter Answer" name="name">
		  <label for="File">Select image:</label>
          <input type="file" id="fileToUpload" name="fileToUpload">
        </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
 </div>
</div>
</body>
</html>