<?php
$email=$_POST["email"];
$college=$_POST["college"];
$mobile=$_POST["mobile"];
session_start();
$id=$_SESSION['id'];
include 'includes/connect.php';
mysqli_query($conn,"UPDATE usersda SET email='$email',college='$college',mobile='$mobile' where fbid='$id'")or die('error8');
header("location:view.php");
?>
