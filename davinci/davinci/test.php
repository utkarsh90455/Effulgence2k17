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

<?php
if(isset($_GET["w"])){
	echo'<div class="wrong alert alert-dismissible text-center" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <div class="alertin col-md-6 col-md-offset-3">
    <h1><strong>Wrong Answer!</strong></h1>
	<h3>Better luck next time.</h3>
	</div>
</div>';
}
?>

<?php include 'includes/nav.php' ?>
</body>
</html>