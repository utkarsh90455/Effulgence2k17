<?php
include_once 'session_inc.php';
include_once 'dbConnection.php';
$uid=$_SESSION['u_id'];
$eid=$_POST['eid'];
$tid=" ";
mysqli_query($con,"INSERT INTO reg VALUES('$uid', '$tid', '1', '$eid')") or die ('Error');
header("location:user_profile.php?q1=Registration Successful !!!");