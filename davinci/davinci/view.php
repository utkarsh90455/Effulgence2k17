<?php session_start(); 
if(!isset($_SESSION['id'])){
	header("location:index.php");
}
$id=$_SESSION['id'];
include 'includes/connect.php';

$q1=mysqli_query($conn,"SELECT * FROM usersda WHERE fbid=$id")or die('error5');
$arr = mysqli_fetch_assoc($q1);
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
<br>

<div class="col-md-6 col-md-offset-3">
<table class="table table-bordered">
<tr><td colspan="2"><img src="https://graph.facebook.com/<?php echo($id); ?>/picture" width="150px" class="img-circle center-block"/></td></tr>
<tr>
        <td><h4>Name:</h4></td>
        <td><p><?php echo($_SESSION['name']); ?></p></td>
</tr>
<tr>
        <td><h4>Level:</h4></td>
        <td><?php echo($arr['level']); ?></td>
</tr>
<tr>
        <td><h4>Email:</h4></td>
        <td><?php echo($arr['email']); ?></td>
</tr>
<tr>
        <td><h4>College:</h4></td>
        <td><?php echo($arr['college']); ?></td>
</tr>
<tr>
        <td><h4>Contact no:</h4></td>
        <td><?php echo($arr['mobile']); ?></td>
</tr>
</table>
<form action="updateform.php">
<button type="submit" class="btn btn-primary">Update Profile</button>
</form>

</div>
</body>
</html>