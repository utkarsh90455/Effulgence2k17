<?php

include 'includes/connect.php';
$id= $_GET['id'];
$name= $_GET['name'];
$email= $_GET['email'];

if($email=='undefined'){
	$email=" ";
}
$q1=mysqli_query($conn,"SELECT * FROM usersda WHERE fbid='$id'") or die("error");
$check=mysqli_num_rows($q1);
if(empty($check)){
$q=mysqli_query($conn ,"INSERT INTO usersda (fbid,name,email,ts) VALUES('$id','$name','$email',NOW())")or die('error15');
}

session_start();
$_SESSION['name']=$name;
$_SESSION['id']=$id;

header("location:question.php");
?>

