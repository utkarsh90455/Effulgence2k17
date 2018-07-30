<?php
session_start();
if(!isset($_SESSION['id'])){
	header("location:index.php");
}
$id=$_SESSION['id'];
include 'includes/connect.php';
$q=mysqli_query($conn,"SELECT level FROM usersda WHERE fbid='$id' ")or die('error5');
$arr = mysqli_fetch_assoc($q);
$l=$arr["level"];
$q1=mysqli_query($conn,"SELECT imgsrc FROM answers WHERE level=$l ")or die('error8');
$arr1 = mysqli_fetch_assoc($q1);
$imgsrc=$arr1["imgsrc"];
$_SESSION['level']=$l;
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
<?php
if(isset($_GET["r"])){
	echo'<div class="wrong alert alert-dismissible text-center" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <div class="alertin col-md-6 col-md-offset-3">
    <h1><strong>Correct Answer!</strong></h1>
	<h3>Best of luck for next level.</h3>
	</div>
</div>';
}
?>
<?php include 'includes/nav.php' ?>
<div class="container">
<div class="col-md-8 col-md-offset-2">
  <center><h3 style="font-family:'Play';"><b>Effulgence 2k17 & IEI KNIT Chapter</b></h3>
  <h5 style="font-family:'Play';" >presents</h5></center> 
<div class="jumbotron">
  <h2 class="text-center bg-danger">Level <?php echo ($l); ?></h2>
  <img src="images/<?php echo $imgsrc ?>" class="img-responsive center-block" alt="Responsive image">
  <br>
  <form action="check.php" method="post">
 <div class="input-group">
      <input name="ans" type="text" class="form-control" placeholder="Answer...">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="Submit">Submit !</button>
      </span>
    </div>
</form>	
</div>
</div>
</div>
</body>
</html>