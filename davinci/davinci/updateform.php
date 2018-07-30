<?php
session_start();
if(!isset($_SESSION['id'])){
	header("location:index.php");
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
<?php include 'includes/nav.php' ?>
<div class="container">
    <div class="jumbotron" style="margin-top: 50px">
     <h1 class="text-center">Update Profile</h1>
     
     <form role="form" method="post" action="update.php">
    <div class="form-group">
          <label for="text">Email:</label>
          <input type="email" class="form-control" placeholder="Enter Email id" name="email">
          <label for="text">Mobile:</label>
          <input type="text" class="form-control" placeholder="Enter Mobile number" name="mobile" required>
		   <label for="text">College:</label>
          <input type="text" class="form-control" placeholder="Enter your college name" name="college" required>
        </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
 </div>
</div>
</body>
</html>